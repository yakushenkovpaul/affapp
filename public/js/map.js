// Create custom map style here: https://mapstyle.withgoogle.com/

var mapStyles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#2196f3"
            }
        ]
    }
];

//Map initialize function
function initialize() {
    var mapOptions = {
        center: new google.maps.LatLng(map_lat, map_lng),
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles:mapStyles,
        scrollwheel: false
    };
    //create a google map instance into the Dom element
    var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);

    // define the format of the file retrive from server. here it is in JSON format
    var mapdata = {
        format: 'json'
    };
    // the ajax callback function. Do all the stuff you want to do with the remote data in between this function.
    function getContent(data) {
        //loop through each of the single JSON object obtained from the JSON file.
        var markers = [];
        var infobox = new InfoBox({
            content: 'empty',
            disableAutoPan: false,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-250, -330),
            zIndex: null,
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            isHidden: false,
            isOpen: false,
            pane: "floatPane",
            enableEventPropagation: false
        });
        infobox.addListener('domready', function () {
            $('.infobox-close').on('click', function () {
                infobox.close(map, this);
                infobox.isOpen = false;
            });
        });

        $.each(data, function (i, value) {
            var markerCenter = new google.maps.LatLng(value.latitude, value.longitude);

            function getMarkerContent(value){
                var content='<div id="marker-'+ value.id +'" class="flip-container">' +
                '<div class="flipper">'+
                '<div class="front">'+
                '<img src="'+value.image+'">'+
                '</div>'+
                '<div class="back">'+
                '<i class="fa fa-eye"></i>'+
                '</div>'+
                '</div>'+
                '</div>';
                return content;
            }

            var markerContent=getMarkerContent(value);
            var marker = new RichMarker({
                id: value.id,
                data: value,
                flat: true,
                position: markerCenter,
                map: map,
                shadow: 1,
                content:markerContent,
                title: value.title,
                is_logged_in:value.is_logged_in
            });


            markers.push(marker);

            // This event expects a click on a marker
            // When this event is fired the Info Window is opened.
            google.maps.event.addListener(marker, 'click', function() {

                var content = '<div class="infobox-close"><i class="fa fa-close"></i></div>'+
                    '<div id="iw-container" style="background-color: #9BA2AB;">' +
                    '<div class="iw-content">' +
                    '<div class="iw-subTitle">'+ marker.data.title +'</div>' +
                    '<p>' + marker.data.address + '</p>'+
                    '<br /><br /><p><a href="' + location.origin + '/club/' + marker.data.id + '/' + marker.data.dir + '">Zur Übersichtsseite des Vereins</a></p>'+
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                    '</div>';

                if (!infobox.isOpen) {
                    infobox.setContent(content);
                    infobox.open(map, this);
                    infobox.isOpen = true;
                    infobox.markerId = marker.id;
                } else {
                    if (infobox.markerId == marker.id) {
                        infobox.close(map, this);
                        infobox.isOpen = false;
                    } else {
                        infobox.close(map, this);
                        infobox.isOpen = false;

                        infobox.setContent(content);
                        infobox.open(map, this);
                        infobox.isOpen = true;
                        infobox.markerId = marker.id;
                    }
                }
            });
        })
    }
    // call the jquery ajax function
    $.getJSON(map_url, mapdata, getContent);
} // map initialize function ends

var existId = document.getElementById("map-canvas");

if (existId) {
    google.maps.event.addDomListener(window, 'load', initialize);
}

console.log('map_v8');
