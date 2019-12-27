/**
 * Created by Kausar on 06/10/2016.
 */
window.marker = null;

function initialize() {
    var map;

    var wish_natal = new google.maps.LatLng(-5.8414264, -35.1817386);

    var style = [
        {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
                { "saturation": -100 },
                { "lightness": -8 },
                { "gamma": 1.18 }
            ]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                { "saturation": -100 },
                { "gamma": 1 },
                { "lightness": -24 }
            ]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "administrative",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "transit",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "road",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "administrative",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "landscape",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
            "featureType": "poi",
            "stylers": [
                { "saturation": -100 }
            ]
        }, {
        }
    ];

    var mapOptions = {
        // Set the center
        center: wish_natal,

        // Set the map style and zoom level
        // mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom:9,

        // Set the background color
        backgroundColor:"#2f92d0",

        // Remove all controls except zoom
        zoom:17,
        panControl:false,
        zoomControl:true,
        mapTypeControl:false,
        scaleControl:false,
        streetViewControl:false,
        overviewMapControl:false,
        zoomControlOptions: {
            style:google.maps.ZoomControlStyle.LARGE
        }

    }
    map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // Set the map style
    var mapType = new google.maps.StyledMapType(style, {name:"Grayscale"});
    map.mapTypes.set('grey', mapType);
    map.setMapTypeId('grey');

    // Custom pin icon
    var marker_image ='plugins/google-map/images/marker.png';
    var pinIcon = new google.maps.MarkerImage(marker_image,null,null, null,new google.maps.Size(40, 60));

    marker = new google.maps.Marker({
        position: wish_natal,
        map: map,
        icon: pinIcon,
        title: 'Wish Natal Exclusive Resort'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);