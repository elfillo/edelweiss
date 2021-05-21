const gulp           = require('gulp');
const server         = require('browser-sync').create();
const sass           = require('gulp-sass');
const mqpacker       = require("css-mqpacker");
const autoprefixer   = require('autoprefixer');
const csso           = require('postcss-csso');
const sourcemaps     = require('gulp-sourcemaps');
const plumber        = require('gulp-plumber')
const sassGlob       = require('gulp-sass-glob');
const postcss        = require('gulp-postcss');
const notify         = require('gulp-notify');
const eslint         = require('gulp-eslint');
const webpack        = require('webpack');
const webpackStream  = require('webpack-stream');
const webpackConfig  = require('./webpack.config');
const concat         = require('gulp-concat');
const rename         = require('gulp-rename');

const path = {
    root: '.',
    src: {
        sass: './_src/sass/',
        js: './_src/js/',
    },
    dist: {
        css: './assets/css/',
        js: './assets/js/',
    }
}

gulp.task('js', function() {
    return gulp
        .src(path.src.js + '/main.js')
        .pipe(webpackStream(webpackConfig), webpack)
        .pipe(gulp.dest(path.dist.js));
});

gulp.task('js:libs', function() {
    return gulp.src(path.src.js + 'libs/**/*.js')
    .pipe(plumber({ errorHandler: notify.onError('Error: <%= error.message %>') }))
    .pipe(concat('libs.min.js'))
    .pipe(gulp.dest(path.dist.js))
});
    
gulp.task('lint', function() {
    return gulp
        .src(path.src.js + 'modules/**/*.js')
        .pipe(plumber({ errorHandler: notify.onError('Error: <%= error.message %>') }))
        .pipe(eslint({
            extends: 'eslint:recommended',
            ecmaFeatures: {
                'modules': true
            },
            parser: 'babel-eslint',
            rules: {
                strict: 2,
                semi: 2,
                'no-console': 0,
                'no-unused-vars': 1,
                'no-undef': 0
            },
            envs: ['browser']
        }))
        .pipe(eslint.format('stylish'))
        .pipe(eslint.failAfterError());
});

gulp.task('sass', function () {
    const plugins = [
        mqpacker({
            sort: sortMediaQueries
        }),
        autoprefixer({
            overrideBrowserslist: [
                'last 4 version',
                '> 1%',
                'ie 11'
            ] 
        }),
        csso({
            restructure: false
        })
    ];
    return gulp
        .src(path.src.sass + '/*.*')
        .pipe(plumber({ errorHandler: notify.onError('Error: <%= error.message %>') }))
        .pipe(sourcemaps.init())
        .pipe(sassGlob())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(plugins))
        .pipe(rename({suffix: ".min"}))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest(path.dist.css))
});

gulp.task('watch', function() {

    // SASS --> CSS
    gulp.watch(path.src.sass + '**/*.*', gulp.series('sass'));

    // JS
    gulp.watch(path.src.js + '**/*.js', gulp.series('js'));

    // JS-линтер
    gulp.watch(path.src.js + 'modules/*.js', gulp.series('lint'));
});

gulp.task('default', gulp.series(
    gulp.parallel(
        'sass',
        'js',
        'js:libs'
    ),
    gulp.parallel(
        'watch'
    )
));


function isMax(mq) {
    return /max-width/.test(mq);
}

function isMin(mq) {
    return /min-width/.test(mq);
}

function sortMediaQueries(a, b) {
    let A = a.replace(/\D/g, '');
    let B = b.replace(/\D/g, '');

    if (isMax(a) && isMax(b)) {
        return B - A;
    } else if (isMin(a) && isMin(b)) {
        return A - B;
    } else if (isMax(a) && isMin(b)) {
        return 1;
    } else if (isMin(a) && isMax(b)) {
        return -1;
    }

    return 1;
}