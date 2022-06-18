$('.botonEditar').click(function(){
    console.log("hola");
    $('.botonEditar').css({'display':'none'});
    $('.botonConfirmar, .botonCancelar').css({'display':'flex'});
    $(".formularioPerfil input , .formularioPerfil textarea").removeAttr('disabled');
});
$('.botonCancelar').click(function(){
    console.log("hola");
    $('.botonConfirmar, .botonCancelar').css({'display':'none'});
    $('.botonAjustes').css({'display':'flex'});        
    $(".formularioPerfil input , .formularioPerfil textarea").attr('disabled','disabled');
});
$('.botonConfirmar').click(function(){
    console.log("hola");
    $('.botonConfirmar, .botonCancelar').css({'display':'none'});
    $('.botonAjustes').css({'display':'flex'});        
    $(".formularioPerfil input , .formularioPerfil textarea").attr('disabled','disabled');
});
