import $ from "jquery";

const apikey = '191532b4-ae52-4052-927e-171be6f1a9db';
const mapScript = $.getScript(`https://api-maps.yandex.ru/2.1/?apikey=${apikey}&lang=ru_RU`);

/*Карта на главной странице в блоке "Контакты"*/
var indexPageContactMapId = 'index-page-contacts-map';
if($(`#${indexPageContactMapId}`).length){
    $.when(mapScript)
        .done(function () {

            ymaps.ready(init);

            function init() {

                var newMarkerCollection = new ymaps.GeoObjectCollection();
                var markerCollectio = [];
                var center = [54.623363, 39.754539];

                var myMap = new ymaps.Map(indexPageContactMapId, {
                    center: center,
                    zoom: 16,
                    controls: []
                });

                myMap.behaviors.disable('scrollZoom');

                var placemark = setPlacemark(center);

                markerCollectio.push(placemark);
                newMarkerCollection.add(placemark);
                myMap.geoObjects.add(newMarkerCollection);

                setMapCenter(myMap, newMarkerCollection);
            }

            function setPlacemark(coords) {
                return new ymaps.Placemark(coords, {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
                    iconImageSize: [82, 96],
                });
            }

            function setMapCenter(map, collection) {
                var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                    collection.getBounds(),
                    map.container.getSize(),
                    map.options.get('projection')
                );

                map.setCenter(centerAndZoom.center, 13);
            }
        });
}


/*Карта инфраструктуры на Главной странице*/
var infrastructureMapId = 'infrastructure-map';
if($(`#${infrastructureMapId}`).length){
    $.when(mapScript)
        .done(function () {

            ymaps.ready(init);

            function init() {

                var newMarkerCollection = new ymaps.GeoObjectCollection();
                var markerCollectio = [];
                var center = [52.287334, 104.285813];

                var myMap = new ymaps.Map(infrastructureMapId, {
                    center: center,
                    zoom: 13,
                    controls: []
                });

                myMap.behaviors.disable('scrollZoom');

                var placemark = setPlacemark(center);

                markerCollectio.push(placemark);
                newMarkerCollection.add(placemark);
                myMap.geoObjects.add(newMarkerCollection);


                /*infrastructure objects*/
                var searchControl = new ymaps.control.SearchControl({
                    options: {
                        provider: 'yandex#search'
                    }
                });

                myMap.controls.add(searchControl);


                $('.infrastructure-map__item').click(function () {
                    let search = $(this).data('infrastructure-name');
                    searchControl.search(search);
                    /*searchControl.search(search).then(function () {
                        myMap.geoObjects.removeAll();
                        var geoObjectsArray = searchControl.getResultsArray();
                        if (geoObjectsArray.length) {
                            geoObjectsArray.forEach(i => {
                                addInfrastructurePlaceMarker(i.geometry._coordinates, 'type');
                            });
                        }
                        addCentralMarker();
                    });*/
                });

                $('.infrastructure-map__list-mobile').change(function () {
                    searchControl.search($(this).val());
                });
                /*infrastructure objects*/
            }

            function setPlacemark(coords) {
                return new ymaps.Placemark(coords, {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
                    iconImageSize: [82, 96],
                });
            }
        });
}

/*Карта расположения офисов на странице Контакты*/
var contactPageMapId = 'contacts-map';
if($(`#${contactPageMapId}`).length){
    $.when(mapScript)
        .done(function () {

            ymaps.ready(init);

            function init() {

                var newMarkerCollection = new ymaps.GeoObjectCollection();
                var markerCollectio = [];
                var center = [55.758504, 37.862543];

                var myMap = new ymaps.Map(contactPageMapId, {
                    center: center,
                    zoom: 13,
                    controls: []
                });

                //myMap.behaviors.disable('scrollZoom');

                var placemark = setPlacemark(center);

                markerCollectio.push(placemark);
                newMarkerCollection.add(placemark);
                myMap.geoObjects.add(newMarkerCollection);


                function addNewOfficeMarker(coordinates) {
                    let iconParams = {
                        iconLayout: 'default#image',
                        iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
                        iconImageSize: [82, 96],
                    };
                    let marker = new ymaps.Placemark(coordinates, {}, iconParams);
                    myMap.geoObjects.add(marker);
                    myMap.setCenter(coordinates);
                }

                $('.contacts-map__item').click(function () {
                    $('.contacts-map__item').map((key, item) => {
                        $(item).removeClass('active');
                    });
                    $(this).addClass('active');

                    const office = $(this).data('office-name');

                    markerCollectio = [];
                    newMarkerCollection.removeAll();
                    myMap.geoObjects.removeAll();
                    addNewOfficeMarker(getCoordinates(office));
                });

                function getCoordinates(office) {
                    switch (office) {
                        case 'main':
                            return [55.758504, 37.862543];
                        case 'first':
                            return [55.535366, 37.194565];
                        case 'second':
                            return [55.764936, 37.863989];
                        default:
                            return [55.758504, 37.862543];
                    }
                }
            }

            function setPlacemark(coords) {
                return new ymaps.Placemark(coords, {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
                    iconImageSize: [82, 96],
                });
            }

            /*function setMapCenter(map, collection) {
                var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                    collection.getBounds(),
                    map.container.getSize(),
                    map.options.get('projection')
                );

                map.setCenter(centerAndZoom.center, 13);
            }*/
        });
}