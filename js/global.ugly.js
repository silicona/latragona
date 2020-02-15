function bs_alert(mensaje,clase,titulo){titulo=titulo||!1;return"exito"==(clase=clase||"exito")&&("check","bg-green",titulo&&(titulo='<h4 class="alert-title">'+titulo+"</h4>")),"aviso"==clase&&("warning","bg-orange",titulo&&(titulo='<h4 class="alert-title">Atención: '+titulo+"</h4>")),"error"==clase&&("warning","bg-red",titulo&&(titulo='<h4 class="alert-title">Error: '+titulo+"</h4>")),['<div class="alert alert-',clase,'">','<a href="#" class="close" data-dismiss="alert" aria-label="close" onClick="cerrar_alert(this)">&times;</a>','<div class="alert-content">',titulo||"",mensaje=mensaje||"","</div>","</div>"].join("")}function cerrar_alert(esto){return $(esto).parent().remove(),!1}function animarFancy(pagina){"tragar"==pagina?$("[data-fancybox]").fancybox({toolbar:!1,smallBtn:!0,iframe:{preload:!1,css:{}}}):"empujar"==pagina?$("[data-fancybox]").fancybox({toolbar:!1,smallBtn:!0,iframe:{preload:!1,css:{height:"550px"}}}):$('[data-fancybox="comida"], [data-fancybox="vinos"]').fancybox({toolbar:!1,smallBtn:!0,iframe:{preload:!1,css:{}}})}function cerrar_menus(){$(".menu_abierto").click()}function mostrarIdiomas(){semaforo||mostrarMenu(),lengua?($("#menuidiomas").addClass("menu_abierto"),$("#menuidiomas").css("display","block"),$("#menuidiomas").animate({opacity:1},1e3),lengua=!1):($("#menuidiomas").removeClass("menu_abierto"),$("#menuidiomas").animate({opacity:0},1e3,function(){$("#menuidiomas").css("display","none")}),lengua=!0)}function mostrarMenu(e){lengua||mostrarIdiomas();$(window).width();if("{}"==JSON.stringify($("#lateral"))){var top_contenedor=$("#contenedor").offset().top;$("#menumovil").css("top",top_contenedor-$("#menumovil").height()-6),semaforo?($(this).addClass("menu_abierto"),$("#menumovil").css("display","block"),$("html, body").animate({scrollTop:$("#menumovil").offset().top+3},1e3),$("#menumovil").animate({opacity:1},1e3),semaforo=!1):($(this).removeClass("menu_abierto"),$("html, body").animate({scrollTop:top_contenedor+3},1e3),$("#menumovil").animate({opacity:0},1e3,function(){$("#menumovil").css("display","none")}),semaforo=!0)}else semaforo?($(this).addClass("menu_abierto"),$("#menumovil").css("display","block"),$("#menumovil").animate({opacity:1},1e3),semaforo=!1):($(this).removeClass("menu_abierto"),$("#menumovil").animate({opacity:0},1e3,function(){$("#menumovil").css("display","none")}),semaforo=!0)}function mostrarMenu_old(e){lengua||mostrarIdiomas();var ancho=$(window).width(),pag_global="{}"==JSON.stringify($("#lateral"));if(576<=ancho&&ancho<=1024&&pag_global){var top_contenedor=$("#contenedor").offset().top;$("#menumovil").css("top",top_contenedor-$("#menumovil").height()+5),semaforo?($(this).addClass("menu_abierto"),$("#menumovil").css("display","block"),$("html, body").animate({scrollTop:$("#menumovil").offset().top+3},1e3),$("#menumovil").animate({opacity:1},1e3),semaforo=!1):($(this).removeClass("menu_abierto"),$("html, body").animate({scrollTop:top_contenedor+3},1e3),$("#menumovil").animate({opacity:0},1e3,function(){$("#menumovil").css("display","none")}),semaforo=!0)}else semaforo?($(this).addClass("menu_abierto"),$("#menumovil").css("display","block"),$("#menumovil").animate({opacity:1},1e3),semaforo=!1):($(this).removeClass("menu_abierto"),$("#menumovil").animate({opacity:0},1e3,function(){$("#menumovil").css("display","none")}),semaforo=!0)}function permite(e,tipo){var tecla_especial,permitidos="0123456789",caracteres=" abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ_.@",evento=e||window.event,codigo=evento.charCode||evento.keyCode,caracter=String.fromCharCode(codigo);return teclas_especiales=[8,37,39,40,41,46],"char"==tipo&&(permitidos=caracteres),"num_char"==tipo&&(permitidos+=caracteres),tecla_especial=-1!=teclas_especiales.indexOf(codigo),-1!=permitidos.indexOf(caracter)||tecla_especial}function desvanecerLeer(){var tope=document.documentElement.scrollTop||document.body.scrollTop,altura=$(window).height();switch(!0){case altura/2<tope&&tope<.6*altura:$("#leer").css("opacity","0");break;case.4*altura<tope&&tope<altura/2:$("#leer").css("opacity","0.4");break;case.2*altura<tope&&tope<.4*altura:$("#leer").css("opacity","0.8");break;case tope<.2*altura:$("#leer").css("opacity","1")}}function encender_comidas(){switch(576<=ancho_ventana?(altura_aviso_rac=$("#aviso_rac").offset().top-44,altura_reservas=$("#reservas").offset().top-44):(altura_aviso_rac=$("#aviso_rac").offset().top-(44+altura_lateral),altura_reservas=$("#reservas").offset().top-(44+altura_lateral)),!0){case scroll_top>=altura_reservas||scroll_top+$(window).height()==$(document).height():$("#lateral li").eq(2).addClass("selected");break;case scroll_top>=altura_aviso_rac&&scroll_top<altura_reservas:$("#lateral li").eq(1).addClass("selected");break;case scroll_top<altura_aviso_rac:$("#lateral li").eq(0).addClass("selected")}}function encender_bebidas(){switch(576<=ancho_ventana?(altura_cerveza=$("#cerveza").offset().top-44,altura_vino=$("#vino").offset().top-44,altura_licor=$("#licores").offset().top-44,altura_combi=$("#combinados").offset().top-44,altura_sin=$("#sin_alcohol").offset().top-44):(altura_cerveza=$("#cerveza").offset().top-(44+altura_lateral),altura_vino=$("#vino").offset().top-(44+altura_lateral),altura_licor=$("#licores").offset().top-(44+altura_lateral),altura_combi=$("#combinados").offset().top-(44+altura_lateral),altura_sin=$("#sin_alcohol").offset().top-(44+altura_lateral)),!0){case scroll_top>=altura_sin||scroll_top+$(window).height()==$(document).height():$("#lateral li").eq(4).addClass("selected");break;case scroll_top>=altura_combi&&scroll_top<altura_sin:$("#lateral li").eq(3).addClass("selected");break;case scroll_top>=altura_licor&&scroll_top<altura_combi:$("#lateral li").eq(2).addClass("selected");break;case scroll_top>=altura_vino&&scroll_top<altura_licor:$("#lateral li").eq(1).addClass("selected");break;case scroll_top<altura_vino:$("#lateral li").eq(0).addClass("selected")}}function iluminarLateral(scroll_top,raciones){raciones=raciones||"",$("#lateral li").removeClass("selected"),raciones?encender_comidas():encender_bebidas()}function mostrarLateral(){if(ancho_ventana=window.innerWidth||document.body.offsetWidth,scroll_top=$(window).scrollTop(),altura_lateral=$("#lateral").height(),"{}"!=JSON.stringify($("#aviso_pan"))){var $primero=$("#aviso_pan");raciones=!0}else{$primero=$("#cerveza");raciones=!1}576<=ancho_ventana?scroll_top>$primero.offset().top-44?$("#lateral").show():$("#lateral").hide():scroll_top>$primero.offset().top-(44+altura_lateral)?$("#lateral").show():$("#lateral").hide(),iluminarLateral(scroll_top,raciones)}function calcularHorario(fecha){var dia=fecha.getDay(),hora=fecha.getHours();return preposicion=mapa_en+" ",apertura=!1,1<dia?6!=dia?18<hora&&hora<24?(apertura=!0,apertura):(tiempo=19-hora,1<tiempo?tiempo+=" "+mapa_horas+".":tiempo+=" "+mapa_hora+".",tiempo=preposicion+tiempo,apertura,tiempo):13<=hora&&hora<16||19<=hora&&hora<24?(apertura=!0,apertura):(tiempo=hora<13?13-hora:19-hora,1<tiempo?tiempo+=" "+mapa_horas+".":tiempo+=" "+mapa_hora+".",tiempo=preposicion+tiempo,apertura,tiempo):0==dia?12<hora&&hora<17?(apertura=!0,apertura):(tiempo=hora<13?13-hora:36,1<tiempo?tiempo+=" "+mapa_horas+".":tiempo+=" "+mapa_hora+".",tiempo=preposicion+tiempo,apertura,tiempo):(tiempo=mapa_mañana,apertura,tiempo)}function iniciarMapa(){ancho_ventana=window.innerWidth||document.body.offsetWidth;var ancho=$("#mapa").css("width").slice(0,3),tragona={lat:40.41121079,lng:-3.70549053};calcularHorario(new Date),centro_mapa=500<=ancho?{lat:40.41121079,lng:-3.7063}:tragona;var mapa=new google.maps.Map(document.getElementById("mapa"),{zoom:17,center:tragona});apertura?aviso=mapa_abierto:aviso=mapa_abrimos+" "+tiempo;var descripcion='<div id="mapa_info"><div id="aviso">'+aviso+'</div><h1 id="info_cabecera">La Tragona<img src="'+mapa_logo+'" id="imagen_mapa"></h1><div id="info_contenido"><p><strong>La Tragona</strong> '+mapa_info+"</p></div></div>",informacion=new google.maps.InfoWindow({content:descripcion}),marcador=(new google.maps.Size(50,50),new MarkerWithLabel({position:tragona,map:mapa,title:"La Tragona (Madrid)",labelContent:"¡Aquí está La Tragona!",labelClass:"mapa_marcador",labelAnchor:new google.maps.Point(125,100)}));return marcador.addListener("click",function(){informacion.open(mapa,marcador)}),informacion}function permite_old(elEvento,permitidos){var caracteres=" abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ_.@";switch(permitidos){case"num":permitidos="0123456789";break;case"car":permitidos=caracteres;break;case"num_car":permitidos="0123456789 abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ_.@"}var evento=elEvento||window.event,codigoCaracter=evento.charCode||evento.keyCode,caracter=String.fromCharCode(codigoCaracter),tecla_especial=!1,teclas_especiales=[8,37,39,40,41,43,46];for(var i in teclas_especiales)if(codigoCaracter==teclas_especiales[i]){tecla_especial=!0;break}return-1!=permitidos.indexOf(caracter)||tecla_especial}function anadir_eliminar_de_carta(esto){var tipo_producto=$(esto).attr("data-tipo"),id_producto=$(esto).attr("data-id_producto"),pre_checked=$(esto).prop("checked"),pre_accion=pre_checked?"anadir_a":"eliminar_de";return $.ajax({type:"POST",url:Config.base_api+"despensa.php",data:{accion:pre_accion+"_carta",hash:window.localStorage.getItem("tragona"),tipo_producto:tipo_producto,id_producto:id_producto}}).done(function(json){""!=json&&("ko"==$.parseJSON(json).status&&$(esto).prop("checked",pre_checked))}),!1}function check_login(usuario,password){$.ajax({type:"POST",url:Config.base_api+"formulario.php",data:{accion:"check_login",usuario:usuario,password:password}}).done(function(json){if(""!=json){var obj_json=$.parseJSON(json);null!=obj_json&&("ok"==obj_json.status?(window.localStorage.setItem("tragona",obj_json.hash),$("#marco_despensa").html(obj_json.html),animarFancy()):$("#form_login .res_form").html(bs_alert(obj_json.error,"error")))}})}function enviar_hash(){var hash=window.localStorage.getItem("tragona");$.ajax({type:"POST",url:Config.base_api+"formulario.php",data:{accion:"check_hash",hash:hash}}).done(function(json){if(""!=json){var obj_json=$.parseJSON(json);null!=obj_json&&"ok"==obj_json.status&&($("#marco_despensa").html(obj_json.html),animarFancy())}})}function limpiarFormulario(formulario){$.each($formulario[0],function(index,value){if("enviar"==value.name)return!0;value.value="","telefono"==value.name&&(value.value="(+34)")})}function enviar_mensaje(datos){imagen='<img class="spinner" src="'+BASE_FILE+'media/la_tragona_logo.png" width="50">',$respuesta_form.html(imagen),datos.idioma=idioma,$.ajax({dataType:"json",type:"POST",url:Config.base_url+"/php/formulario.php",data:datos,context:$formulario}).done(function(mi_json){""!=mi_json&&setTimeout(function(){var respuesta='<p class="respuesta_'+mi_json.status+'">'+mi_json.mensaje+"</p>";$respuesta_form.html(respuesta),limpiarFormulario($formulario)},2e3)})}function validarForm(e){e.preventDefault(),$formulario=$(e.target).parent(),$respuesta_form=$("#respuesta_form",$formulario),datos={};var error={};if($.each($formulario[0],function(index,input){switch(input.value=$.sanear($(this).val()),input.name){case"nombre":if(""==input.value)return error.status=!0,error.mensaje=$(this).attr("data_error"),this.focus(),!1;break;case"email":if(!/[\d\w\._]+@(?:[\d\w\.]+)?[\d\w]+\.\w{2,4}/.test(input.value))return error.status=!0,error.mensaje=$(this).attr("data_error"),this.focus(),!1;break;case"telefono":if(input.value=input.value.replace(/\s/g,""),!/^\(\+\d{2}\)\d{9}$/.test(input.value))return error.status=!0,error.mensaje=$(this).attr("data_error"),input.value="(+34)",this.focus(),!1;break;case"mensaje":if(""==input.value||/^\s+$/.test(input.value))return error.status=!0,error.mensaje=$(this).attr("data_error"),this.focus(),!1}datos[input.name]=input.value}),error.status)return $respuesta_form.html('<p class="respuesta_error">'+error.mensaje+"</p>"),!1;enviar_mensaje(datos)}function activarClicks(){$("#leer").click(function(){$("html, body").animate({scrollTop:$("#contenedor").offset().top+3},1500)}),$(".menu").click(function(e){mostrarMenu(e)}),$("#multi").click(function(e){mostrarIdiomas(e)}),$(".boton","#lateral").click(function(e){e.preventDefault();var posicion=$($(this).attr("data_seccion")).offset().top-43;$(document).width()<576&&(posicion-=$("#lateral").height()),$("html, body").animate({scrollTop:posicion},2e3)}),$(".boton","#form").click(function(e){e.preventDefault(),validarForm(e)}),$("#form_login .boton").click(function(e){e.preventDefault();var usuario=$("#usuario").val(),password=$("#password").val();if(usuario.length<4||password.length<4)return $("#form_login .res_form").html(bs_alert("Credenciales incorrecta","error")),!1;check_login(usuario,password)})}function detectar_pagina(){return $arr_url=window.location.href.split("/"),$arr_url.pop()}function iniciar(){semaforo=!0,lengua=!0,pagina=detectar_pagina(),activarClicks(),animarFancy(pagina),"tragar"!=pagina&&"empujar"!=pagina||(mostrarLateral(),window.onscroll=function(){mostrarLateral(),cerrar_menus()}),"despensa"==pagina&&enviar_hash()}!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];d.getElementById(id)||((js=d.createElement(s)).id=id,js.src="//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.9",fjs.parentNode.insertBefore(js,fjs))}(document,"script","facebook-jssdk"),function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";d.getElementById(id)||((js=d.createElement(s)).id=id,js.src=p+"://platform.twitter.com/widgets.js",fjs.parentNode.insertBefore(js,fjs))}(document,"script","twitter-wjs"),jQuery.sanear=function(valor){return valor.replace(/<script[^>]*?>.*?<\/script>/gi,"").replace(/<[\/\!]*?[^<>]*?>/gi,"").replace(/<style[^>]*?>.*?<\/style>/gi,"").replace(/<![\s\S]*?--[ \t\n\r]*>/gi,"")},window.onscroll=desvanecerLeer,$(function(){iniciar()});