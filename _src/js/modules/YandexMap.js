import $ from "jquery";
var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?apikey=191532b4-ae52-4052-927e-171be6f1a9db&lang=ru_RU');
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

            var placemark = setPlacemark(center);

            markerCollectio.push(placemark);
            newMarkerCollection.add(placemark);
            myMap.geoObjects.add(newMarkerCollection);

            setMapCenter(myMap, newMarkerCollection);
        }

        function setPlacemark(coords) {
            var placemark = new ymaps.Placemark(coords, {}, {
                iconLayout: 'default#image',
                iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
                iconImageSize: [82, 96],
            });

            return placemark;
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
