$(document).ready(function() {

$("#liEdit").fadeOut();
$("#liSave").fadeOut();
$("#liCancel").fadeOut();

});	

function sbDisabled(v_var){
	if (v_var==false) {
		$("#txtUsuario").removeAttr("disabled");
		$("#txtCodigo").removeAttr("disabled");
		$("#cbConsol").removeAttr("disabled");
		$("#cbCategor").removeAttr("disabled");
		$("#txtName").removeAttr("disabled");
		$("#txtDetail").removeAttr("disabled");
		$("#txtCantidad").removeAttr("disabled");
		$("#txtImagen").removeAttr("disabled");
		$("#txtTrailer").removeAttr("disabled");
		$("#txtEstado").removeAttr("disabled");
		$("#txtFecha").removeAttr("disabled");
		$("#txtClaves").removeAttr("disabled");
	}else{

		$("#txtUsuario").attr("disabled","disabled");
		$("#txtCodigo").attr("disabled","disabled");
		$("#cbConsol").attr("disabled","disabled");
		$("#cbCategor").attr("disabled","disabled");
		$("#txtName").attr("disabled","disabled");
		$("#txtDetail").attr("disabled","disabled");
		$("#txtCantidad").attr("disabled","disabled");
		$("#txtImagen").attr("disabled","disabled");
		$("#txtTrailer").attr("disabled","disabled");
		$("#txtEstado").attr("disabled","disabled");
		$("#txtFecha").attr("disabled","disabled");
		$("#txtClaves").attr("disabled","disabled");
	}
}

function sbJueAdmi(v_var){
	switch(v_var){
		case '1':
			sbDisabled(false);
			$("#txtUsuario").focus();
			$("#liSave").fadeIn();
			$("#liCancel").fadeIn();
		break;
		
	}
}


function sbMenu(v_var){
	switch(v_var){
		case "Usuario":
			$("#stMain").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_User").fadeIn(1000);
		break;

		case "juegos":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Game").fadeIn(1000);
		break;

		case "consola":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Consola").fadeIn(1000);
		break;

		case "categoria":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Categoria").fadeIn(1000);
		break;

		case "punto":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Puntos").fadeIn(1000);
		break;

		case "bono":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Bono").fadeIn(1000);
		break;

		case "encuesta":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Encuesta").fadeIn(1000);
		break;

		case "sancion":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Sancion").fadeIn(1000);
		break;
		
		case "punt_juego":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Inform").fadeOut();
			$("#stA_Puntosjue").fadeIn(1000);
		break;
		
		case "informe":
			$("#stMain").fadeOut();
			$("#stA_User").fadeOut();
			$("#stA_Game").fadeOut();
			$("#stA_Consola").fadeOut();
			$("#stA_Categoria").fadeOut();
			$("#stA_Bono").fadeOut();
			$("#stA_Puntos").fadeOut();
			$("#stA_Encuesta").fadeOut();
			$("#stA_Sancion").fadeOut();
			$("#stA_Puntosjue").fadeOut();
			$("#stA_Inform").fadeIn(1000);
		break;
	}
}