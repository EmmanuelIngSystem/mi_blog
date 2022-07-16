function messagge_warning_alert(type, position, text, button_access){
    setTimeout(function(){
        button_access.disabled = false;

    }, 2000);
    alertify.set(type,'position', position);
    alertify.warning(text);
}