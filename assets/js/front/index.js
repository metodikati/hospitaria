//var url = '/dsr/terza-web/public/alfombras/';
var url = $('#catalogPaginator').val();

$(document).ready(function () {

	$("select").change(function(e) {
		e.preventDefault();

		window.history.pushState("", "Inicio", $(this).attr('href'));
		getResult(1);
	});

/*	$('#color').on('change', function(e) {
		e.preventDefault();

		window.history.pushState("", "Inicio", $(this).attr('href'));
		getResult(1);
	});

	$('#color').on('change', function(e) {
		e.preventDefault();

		window.history.pushState("", "Inicio", $(this).attr('href'));
		getResult(1);
	});*/

	$(this).on('click', '.pagOperator', function(e) {
		e.preventDefault();

		window.history.pushState("", "Inicio", $(this).attr('href'));
		getResult($(this).attr('data-num'));		
	})

});


function getResult(page, linea, color, estilo, uso, acabado, tono) {

	linea || (linea = $('#linea').val());
	color || (color = $('#color').val());
	estilo || (estilo = $('#estilo').val());
	uso || (uso = $('#uso').val());
	acabado || (acabado = $('#acabado').val());
	tono || (tono = $('#tono').val());
	page || (page = $('#page').val());
console.log('L' + linea + ' - C' + color + ' - E' + estilo + ' - U' + uso + ' - A' + acabado + ' - T' + tono);

	if ((typeof(linea) === undefined) || (linea == '')) {
		linea = 0;
	}

	if ((typeof(color) === undefined) || (color == '')) {
		color = 0;
	}

	if ((typeof(estilo) === undefined) || (estilo == '')) {
		estilo = 0;
	}

	if ((typeof(uso) === undefined) || (uso == '')) {
		uso = 0;
	}

	if ((typeof(acabado) === undefined) || (acabado == '')) {
		acabado = 0;
	}

	if ((typeof(tono) === undefined) || (tono == '')) {
		tono = 0;
	}


	if ((typeof(page) === undefined) || (page == '')) {
		page = 1;
	}
	console.log(url+'busqueda/'+page+'/'+linea+'/'+color+'/'+estilo+'/'+uso+'/'+acabado+'/'+tono);
	
	$('#resultados').load(url+'busqueda/'+page+'/'+linea+'/'+color+'/'+estilo+'/'+uso+'/'+acabado+'/'+tono);

}