import $ from "jquery";
var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?lang=ru_RU');
$.when(mapScript)
    .done(function () {

        ymaps.ready(init);

        function init() {

            var newMarkerCollection = new ymaps.GeoObjectCollection();
            var markerCollectio = [];
            var center = [54.623363, 39.754539];

            var myMap = new ymaps.Map("index-page-contacts-map", {
                center: center,
                zoom: 16,
                controls: []
            });

            myMap.behaviors.disable('scrollZoom');

            //var placemark = setPlacemark(center);

            markerCollectio.push(placemark);
            newMarkerCollection.add(placemark);
            myMap.geoObjects.add(newMarkerCollection);

            setMapCenter(myMap, newMarkerCollection);
        }

        // function setPlacemark(coords) {
        //     var placemark = new ymaps.Placemark(coords, {}, {
        //         iconLayout: 'default#image',
        //         iconImageHref: '/wp-content/themes/silver-age/img/svg/marker.svg',
        //         iconImageSize: [41, 50],
        //         // iconImageOffset: [-25, -70]
        //     });
        //
        //     return placemark;
        // }

        function setMapCenter(map, collection) {
            var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                collection.getBounds(),
                map.container.getSize(),
                map.options.get('projection')
            );

            map.setCenter(centerAndZoom.center, 13);
        }
    });