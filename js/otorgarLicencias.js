var helper = "../helper/funcionesAjax.php";
$( document ).ready(function() {

var arrayID = [];
	$("#agregarLicencia").bind('click',function(){

		$("#tbody tr input[type=checkbox]:checked").each(function (){
			console.log($(this).attr('id'));
        	arrayID.push($(this).attr('id'));
    	});
    	/*ajaxGeneral('POST',helper,{'action':'anadirLicencia',idUsuario:arrayID},function(){
    		alert('Licencias actualizadas');
    	});*/
    	console.log(arrayID);
	});

});

function ajaxGeneral(tipo, url, data, func){
	$.ajax({
		type: tipo, //por defecto es GET, puede ser “POST‟
		url: url, // página solicitada
		async: true, // true=asíncrono, false = síncrono
		data: data, // parámetros de la petición
		dataType: 'html', //formato esperado de respuesta del servidor
		// 'xml', 'html', 'json', “script‟, “jsonp‟, “text‟
		success: func,
		error: function(xhr, status) { //callback a ejecutar en caso de error
			alert('Se ha producido un error'); // en xhr y status
			información
		}
		//complete: function(xhr, status) {// callback a ejecutar cuando haya
		//	terminado la petición
		//	alert('Se ha producido un error'); // en xhr y status información
		//}
	});
}
