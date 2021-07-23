// import $ from "jquery";
//
// var mapScript = $.getScript('https://api-maps.yandex.ru/2.1/?apikey=191532b4-ae52-4052-927e-171be6f1a9db&lang=ru_RU');
// var infrastructureMapId = 'contacts-map';
// var zoom = 16;
// $.when(mapScript)
//     .done(function () {
//
//         ymaps.ready(init);
//
//         function init() {
//
//             var newMarkerCollection = new ymaps.GeoObjectCollection();
//             var markerCollectio = [];
//             var center = [55.758504, 37.862543];
//
//             var myMap = new ymaps.Map(infrastructureMapId, {
//                 center: center,
//                 zoom: 13,
//                 controls: []
//             });
//
//             myMap.behaviors.disable('scrollZoom');
//
//             var placemark = setPlacemark(center);
//
//             markerCollectio.push(placemark);
//             newMarkerCollection.add(placemark);
//             myMap.geoObjects.add(newMarkerCollection);
//
//
//             function addNewOfficeMarker(coordinates) {
//                 let iconParams = {
//                     iconLayout: 'default#image',
//                     iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
//                     iconImageSize: [82, 96],
//                 };
//                 let marker = new ymaps.Placemark(coordinates, {}, iconParams);
//                 myMap.geoObjects.add(marker);
//             }
//
//             function addCentralMarker()
//             {
//                 let marker = new ymaps.Placemark(center, {}, {
//                     iconLayout: 'default#image',
//                     iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
//                     iconImageSize: [82, 96],
//                 });
//                 myMap.geoObjects.add(marker);
//             }
//
//             $('.contacts-map__item').click(function () {
//                 $('.contacts-map__item').map((key, item) => $(item).removeClass('active')
//                 //$(this).addClass('active');
//
//                 //let name = $(this).data('office-name');
//                 newMarkerCollection.removeAll();
//                 //addNewOfficeMarker([55.758504, 37.862543]);
//             });
//
//             $('.infrastructure-map__list-mobile').change(function () {
//                 searchControl.search($(this).val());
//             });
//
//             function getCoordinates(office) {
//                 switch (office) {
//                     case 'main':
//                         return [55.758504, 37.862543];
//                     case 'first':
//                         return [55.535366, 37.194565];
//                     case 'second':
//                         return [55.764936, 37.863989];
//                     default:
//                         return [55.758504, 37.862543];
//                 }
//             }
//             /*infrastructure objects*/
//         }
//
//         function setPlacemark(coords) {
//             return new ymaps.Placemark(coords, {}, {
//                 iconLayout: 'default#image',
//                 iconImageHref: '/wp-content/themes/edelweiss/assets/images/icons/infrastructure-map-icon.svg',
//                 iconImageSize: [82, 96],
//             });
//         }
//
//         function setMapCenter(map, collection) {
//             var centerAndZoom = ymaps.util.bounds.getCenterAndZoom(
//                 collection.getBounds(),
//                 map.container.getSize(),
//                 map.options.get('projection')
//             );
//
//             map.setCenter(centerAndZoom.center, 13);
//         }
//     });