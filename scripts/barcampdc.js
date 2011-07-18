var barcampdc = {
	showGoogleMap: function() {
		if ( !GBrowserIsCompatible() ) { return; }
		
		var dt = $( "dt#where" ), dd = dt.next(), geo = $( "span.geo", dd ), coords = { lat: parseFloat( $( "span.latitude", geo ).text() ), lng: parseFloat( $( "span.longitude", geo ).text() ) };
		dd.prepend( '<div id="map"></div>' );
		
		var map = new GMap2( document.getElementById( "map" ) );	
		map.addControl( new GSmallMapControl() );
		map.setCenter( new GLatLng( coords.lat, coords.lng ), 15 );
		
		var icon = new GIcon();
		icon.image = "http://barcampdc.org/images/icon-barcamp.gif";
		icon.iconSize = new GSize( 23, 28 );
		icon.iconAnchor = new GPoint( 11, 14 );
		
		var point = new GLatLng( coords.lat, coords.lng );
		map.addOverlay( new GMarker( point, icon ) );
	}
}

$().ready( function() { barcampdc.showGoogleMap(); } );
$().unload( GUnload() );