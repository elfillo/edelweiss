import $ from "jquery";

var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?apikey=191532b4-ae52-4052-927e-171be6f1a9db&lang=ru_RU');
var infrastructureMapId = 'infrastructure-map';
var zoom = 16;
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

            //setMapCenter(myMap, newMarkerCollection);

            /*infrastructure objects*/
            var searchControl = new ymaps.control.SearchControl({
                options: {
                    provider: 'yandex#search',
                }
            });

            myMap.controls.add(searchControl);

            function addInfrastructurePlaceMarker(coordinates, type){
                let iconParams = {
                    iconLayout: 'default#image',
                    //iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-grocery-store-icon.svg',
                    iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/1.svg',
                    iconImageSize: [44, 44],
                };
                let marker = new ymaps.Placemark(coordinates, {}, iconParams);
                myMap.geoObjects.add(marker);
            }

            function addCentralMarker()
            {
                let marker = new ymaps.Placemark(center, {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
                    iconImageSize: [82, 96],
                });
                myMap.geoObjects.add(marker);
            }

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

        function setMapCenter(map, collection) {
            var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
                collection.getBounds(),
                map.container.getSize(),
                map.options.get('projection')
            );

            map.setCenter(centerAndZoom.center, 13);
        }
    });