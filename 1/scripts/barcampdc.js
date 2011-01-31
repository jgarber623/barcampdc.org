var barcampdc = {
	barcamp: { lat: 38.903937, lng: -77.036925 },
	metrorail: [
		{ name: "Farragut North", lat: 38.903192, lng: -77.039766 },
		{ name: "Farragut West", lat: 38.901311, lng: -77.03981 },
		{ name: "McPherson Square", lat: 38.901316, lng: -77.033652 }
	],
	
	showMetroLineIcons: function() {
		$( "ul#metrorail li a", "dl#transportation" ).each( function( i ) {
			var anchor = $( this );
			var pieces = anchor.attr( "class" ).split( " " );
			
			$.each( pieces, function( j, n ) {
				anchor.before( '<img src="images/icon-metro-' + n + '.gif" alt="" title="This stop is on the ' + n + ' line" />' );
			});
		});
	},
	
	showSiteFavicons: function() {
		$.each( ["a.flickr", "a.technorati", "a.twitter", "a.upcoming"], function( i, n ) {
			$( n ).before( '<img src="images/icon-' + $( n ).attr( "class" ) + '.gif" alt="" />' );
		});
	},
	
	showGoogleMap: function() {
		if ( !GBrowserIsCompatible() ) { return; }
		
		var map, barcamp_icon, metro_icon, barcamp_point, point;
		$( "dt#where" ).next().prepend( '<div id="map"></div>' );
		
		map = new GMap2( document.getElementById( "map" ) );	
		map.addControl( new GSmallMapControl() );
		map.setCenter( new GLatLng( this.barcamp.lat, this.barcamp.lng ), 15 );
		
		barcamp_icon = new GIcon();
		// barcamp_icon.image = "http://localhost/barcampdc/images/icon-barcamp.gif";
		barcamp_icon.image = "http://barcampdc.org/images/icon-barcamp.gif";
		barcamp_icon.iconSize = new GSize( 23, 28 );
		barcamp_icon.iconAnchor = new GPoint( 11, 14 );
		
		metro_icon = new GIcon();
		// metro_icon.image = "http://localhost/barcampdc/images/icon-metro.gif";
		metro_icon.image = "http://barcampdc.org/images/icon-metro.gif";
		metro_icon.iconSize = new GSize( 19, 23 );
		metro_icon.iconAnchor = new GPoint( 9, 11 );
		
		barcamp_point = new GLatLng( this.barcamp.lat, this.barcamp.lng );
		map.addOverlay( new GMarker( barcamp_point, barcamp_icon ) );
		
		$.each( this.metrorail, function( i, n ) {
			point = new GLatLng( n.lat, n.lng )
			map.addOverlay( new GMarker( point, metro_icon ) );
		});
	},
	
	init: function() {
		this.showMetroLineIcons();
		// this.showSiteFavicons();
		this.showGoogleMap();
	}
}

$().ready( function() { barcampdc.init(); } );
$().unload( GUnload() );