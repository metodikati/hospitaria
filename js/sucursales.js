$(document).ready(function () {
	var uluru = new GMaps({
	  div: '#map',
	  lat: 25.766565,
	  lng:	-100.307495,
	  zoom: 10
	});   
/*1 vasconcelos*/
	maps.addMarker({
	  lat: 25.651412,
	  lng: -100.373062,
	  title: 'vasconcelos',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/vasconcelos-min.jpg" class="img-responsive" />');
	  }
	});
/*2 solidaridad*/	
	maps.addMarker({
	  lat: 25.775034,
	  lng: -100.381414,
	  title: 'solidaridad',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/acapulco-min.jpg" class="img-responsive" />');
	  }
	});
/*3 allende*/
	maps.addMarker({
	  lat: 25.281823,
	  lng: -100.026189,
	  title: 'allende',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/allende-min.jpg" class="img-responsive" />');
	  }
	});
/*4 sucursal*/
	maps.addMarker({
	  lat: 25.735316,
	  lng: -100.304483,
	  title: 'anahuac',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/anahuac-min.jpg" class="img-responsive" />');
	  }
	});
/*5 apodac1*/
	maps.addMarker({
	  lat: 25.729323,
	  lng: -100.175341,
	  title: 'apodac1',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/apodaca1-min.jpg" class="img-responsive" />');
	  }
	});
/*6 apodac2*/
	maps.addMarker({
	  lat: 25.815104,
	  lng: -100.257507,
	  title: 'apodac2',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/apodaca1-min.jpg" class="img-responsive" />');
	  }
	});
/*7 apodaca 3*/
	maps.addMarker({
	  lat: 25.776180,
	  lng: -100.387106,
	  title: 'apodac3',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/apodaca3-min.jpg" class="img-responsive" />');
	  }
	});
/*8 avenida mexico */
	maps.addMarker({
	  lat: 25.717934,
	  lng: -100.191653,
	  title: 'avenida mexico',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/avenida_mexico-min.jpg" class="img-responsive" />');
	  }
	});
/*9 ayutla*/
	maps.addMarker({
	  lat: 25.661054,
	  lng: -100.302017,
	  title: 'ayutla',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/ayutla-min.jpg" class="img-responsive" />');
	  }
	});
/*10 balcones*/
	maps.addMarker({
	  lat: 25.766746,
	  lng: -100.323818,
	  title: 'ayutla',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/balcones-min.jpg" class="img-responsive" />');
	  }
	});
/*11 chihuahua*/
	maps.addMarker({
	  lat: 28.705446,
	  lng: -106.101801,
	  title: 'chihuahua',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/chihuahua-min.jpg" class="img-responsive" />');
	  }
	});
/*12 cumbres*/
	maps.addMarker({
	  lat: 25.727305,
	  lng: -100.389840,
	  title: 'cumbre',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/cumbres-min.jpg" class="img-responsive" />');
	  }
	});
/*13 diego diaz*/
	maps.addMarker({
	  lat: 25.735359,
	  lng: -100.270142,
	  title: 'diego diaz',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/diego_diaz1-min.jpg" class="img-responsive" />');
	  }
	});
/*14 diego diaz3*/
	maps.addMarker({
	  lat: 25.746541,
	  lng: -100.259246,
	  title: 'diego diaz',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/diego_diaz3-min.jpg" class="img-responsive" />');
	  }
	});
/*15 eloy eloy_cavazos*/
	maps.addMarker({
	  lat: 25.656610,
	  lng: -100.218776,
	  title: 'eloy_cavazos',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/eloy_cavazos-min.jpg" class="img-responsive" />');
	  }
	});
/*16 escobedo*/
	maps.addMarker({
	  lat: 25.785992,
	  lng: -100.301381,
	  title: 'escobedo',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/escobedo-min.jpg" class="img-responsive" />');
	  }
	});
/*17 felix galvan*/
	maps.addMarker({
	  lat: 25.723527,
	  lng: -100.225449,
	  title: 'felix galvan',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/felix_galvan-min.jpg" class="img-responsive" />');
	  }
	});
/*18 garcia*/
	maps.addMarker({
	  lat: 25.796429, 
	  lng: -100.591012,
	  title: 'garcia',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/garcia-min.jpg" class="img-responsive" />');
	  }
	});
/*19 gonzalitos*/
	maps.addMarker({
	  lat: 25.693603, 
	  lng: -100.351314,
	  title: 'gonzalitos',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/gonzalitos-min.jpg" class="img-responsive" />');
	  }
	});
/*20 guadalupe2*/
	maps.addMarker({
	  lat: 25.679700, 
	  lng: -100.264649,
	  title: 'guadalupe2',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/guadalupe2-min.jpg" class="img-responsive" />');
	  }
	});
/*21 guerrero*/
	maps.addMarker({
	  lat: 25.683992, 
	  lng: -100.304355,
	  title: 'guerrero',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/guerrero-min.jpg" class="img-responsive" />');
	  }
	});
/*22 hilario_martinez*/
	maps.addMarker({
	  lat: 25.654155, 
	  lng: -100.305516,
	  title: 'hilario_martinez',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/hilario_martinez-min.jpg" class="img-responsive" />');
	  }
	});
/*23 jardines*/
	maps.addMarker({
	  lat: 25.666040, 
	  lng: -100.174378,
	  title: 'jardines',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/jardines-min.jpg" class="img-responsive" />');
	  }
	});
/*24 juan_escutia*/
	maps.addMarker({
	  lat: 28.683779, 
	  lng: -106.100438,
	  title: 'juan_escutia',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/juan_escutia-min.jpg" class="img-responsive" />');
	  }
	});
/*25 los_alamos*/
	maps.addMarker({
	  lat: 25.738618, 
	  lng: -100.189281,
	  title: 'los_alamos',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/los_alamos-min.jpg" class="img-responsive" />');
	  }
	});
/*26 manuel_ordonez*/
	maps.addMarker({
	  lat: 25.674984,
	  lng: -100.458554 ,
	  title: 'manuel_ordonez',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/manuel_ordonez-min.jpg" class="img-responsive" />');
	  }
	});
/*27 montemorelos*/
	maps.addMarker({
	  lat: 25.189304, 
	  lng: -99.831645,
	  title: 'montemorelos',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/montemorelos-min.jpg" class="img-responsive" />');
	  }
	});
/*27 nueva_espana*/
	maps.addMarker({
	  lat: 28.610774, 
	  lng: -106.032415,
	  title: 'nueva_espana',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/nueva_espana-min.jpg" class="img-responsive" />');
	  }
	});
/*28 pablo_livas*/
	maps.addMarker({
	  lat: 25.659496,  
	  lng: -100.192487,
	  title: 'pablo_livas',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/pablo_livas-min.jpg" class="img-responsive" />');
	  }
	});
/*29 pablo_livas2*/
	maps.addMarker({
	  lat: 25.666792, 
	  lng: -100.218590 ,
	  title: 'pablo_livas2',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/pablo_livas2-min.jpg" class="img-responsive" />');
	  }
	});
/*30 revolucion*/
	maps.addMarker({
	  lat: 25.631606, 
	  lng: -100.272296,
	  title: 'revolucion',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/revolucion-min.jpg" class="img-responsive" />');
	  }
	});
/*31 santo_domingo*/
	maps.addMarker({
	  lat: 25.762511, 
	  lng: -100.262598 ,
	  title: 'santo_domingo',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/santo_domingo-min.jpg" class="img-responsive" />');
	  }
	});
/*32 san_blas*/
	maps.addMarker({
	  lat: 25.801455, 
	  lng: -100.567053,
	  title: 'san_blas',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/san_blas-min.jpg" class="img-responsive" />');
	  }
	});
/*33 san_felipe*/
	maps.addMarker({
	  lat: 28.649995, 
	  lng: -106.099796,
	  title: 'san_felipe',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/san_felipe-min.jpg" class="img-responsive" />');
	  }
	});
/*34 san_jeronimo*/
	maps.addMarker({
	  lat: 25.674358, 
	  lng: -100.357058,
	  title: 'san_jeronimo',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/san_jeronimo-min.jpg" class="img-responsive" />');
	  }
	});
/*35 san_rafael*/
	maps.addMarker({
	  lat: 25.695059, 
	  lng: -100.212757,
	  title: 'san_rafael',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/san_rafael-min.jpg" class="img-responsive" />');
	  }
	});
/*36 san_sebastian*/
	maps.addMarker({
	  lat: 25.680400, 
	  lng: -100.246827,
	  title: 'san_sebastian',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/san_sebastian-min.jpg" class="img-responsive" />');
	  }
	});
/*37 solidaridad*/
	maps.addMarker({
	  lat: 25.776490, 
	  lng: -100.386276,
	  title: 'solidaridad',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/solidaridad-min.jpg" class="img-responsive" />');
	  }
	});
/*38 sucursal_46*/
	maps.addMarker({
	  lat: 28.612731, 
	  lng: -106.071862 ,
	  title: 'sucursal_46',
	  icon: "assets/img/sucursal/sucursal_pin_gpc.png",
	  click: function(e) {
	  	$("#img_marker_selected").html('<img src="assets/img/sucursal/sucursal_46-min.jpg" class="img-responsive" />');
	  }
	});

		
		
		
		
		
});