function getPosition() {
    navigator.geolocation.getCurrentPosition(successPosition);
}

function successPosition(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;
    var mapOptions = {
        center: new google.maps.LatLng(lat, lon)
        , zoom: 17
        , mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("mapbild"), mapOptions);
}
