ymaps.ready(init);

            function init() {
                var myMap = new ymaps.Map('map', {
                    center: [54.751866, 83.055536],
                    zoom: 17 
                });

                var myPlacemark = new ymaps.Placemark(
                    [54.751866, 83.055536],
                    {},
                    {
                        preset: 'islands#icon',
                        iconColor: '#0095b6'
                    }
                );

                myMap.geoObjects.add(myPlacemark);
            }
