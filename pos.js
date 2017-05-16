// This is where the google maps location is loaded
// window.onload = function () {
//     var latitude = 59.337917066770586;
//     var longitude = 17.937476634979248;
//     var mapOptions = {
//         center: new google.maps.LatLng(latitude, longitude)
//         , zoom: 17
//         , mapTypeId: google.maps.MapTypeId.HYBRID
//     };
//     var map = new google.maps.Map(document.getElementById("mapbild"), mapOptions);
// };

window.onload = function () {
            var latitude = 59.3474957;
            var longitude = 18.049165;
            var mapOptions = {
                center: new google.maps.LatLng(latitude, longitude)
                , zoom: 18
                , mapTypeId: google.maps.MapTypeId.HYBRID
            };
            var map = new google.maps.Map(document.getElementById("mapbild"), mapOptions);
        }
