/*делает анимацию открытия элемента (планое изменение высоты)*/
export default function autoHeightAnimate (element, time){
    var curHeight = element.height();
    let needleHeight = curHeight > 0 ? 0 : 'auto';

    var autoHeight = element.css('height', needleHeight).outerHeight();
    element.height(curHeight);
    element.stop().animate({ height: autoHeight }, parseInt(time));
}

