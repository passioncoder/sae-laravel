@extends('layouts.master')

@section('title', 'Map')

@section('container')

    <div id="map" style="width:800px;height:600px;"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=init" async defer></script>

    <script>

        // https://developers.google.com/maps/documentation/javascript/markers#maps_marker_simple-javascript

        var map = null
        var icon = null

        function init() {

            map = new google.maps.Map(document.getElementById('map'), {

                center: {lat: 47.7, lng: 13.3},
                zoom: 8,
            })

            new google.maps.Marker({
                position: {lat: 47.7, lng: 13.3},
                map,
                title: "Hello World!",
            })

            // https://developers.google.com/maps/documentation/javascript/places#find_place_from_query

            /*
            var request = {
                query: 'SAE Wien',
                fields: ['name', 'geometry'],
            };

            var service = new google.maps.places.PlacesService(map);

            service.findPlaceFromQuery(request, function(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {

                    console.log(results)
                }
            })
            */
        }

    </script>

@endsection
