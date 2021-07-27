/*делает анимацию открытия элемента (планое изменение высоты)*/
export function autoHeightAnimate (element, time){
    var curHeight = element.height();
    let needleHeight = curHeight > 0 ? 0 : 'auto';

    var autoHeight = element.css('height', needleHeight).outerHeight();
    element.height(curHeight);
    element.stop().animate({ height: autoHeight }, parseInt(time));
}

export function autoHeightOpenAnimate (element, time){
    var curHeight = element.height();
    let needleHeight = 'auto';

    var autoHeight = element.css('height', needleHeight).outerHeight();
    element.height(curHeight);
    element.stop().animate({ height: autoHeight }, parseInt(time));
}

