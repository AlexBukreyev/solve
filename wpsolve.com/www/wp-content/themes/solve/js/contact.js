
var London = new google.maps.LatLng(46.477926,30.557093);

/*var image = {
	url: 'img/marker.png',
	// This marker is 20 pixels wide by 32 pixels tall.
	size: new google.maps.Size(136, 94),
	// The origin for this image is 0,0.
	origin: new google.maps.Point(0,0),
	// The anchor for this image is the base of the flagpole at 0,32.
	anchor: new google.maps.Point(44, 110)
};*/

function initialize(){
	var mapProp = {
		center: London,
		zoom:10,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	
	
	
	/*******/
	
	var markLondon = new google.maps.Marker({ 
		position: London, 
		//icon: image
	});
	markLondon.setMap(map);
	
	
	
	/*******/
}

google.maps.event.addDomListener(window, 'load', initialize);