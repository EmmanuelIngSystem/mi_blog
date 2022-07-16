var button_access = document.querySelector('#button-access')
function send_data(){
    // Disabling a button
    document.querySelector('#button-access').disabled = true;
    let form_loguin = document.getElementById("form_loguin");
    let data_loguin = new FormData(form_loguin);
    let email = data_loguin.get('email');
    let password = data_loguin.get('password');
    if(!data_loguin.get('email')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca un correo',button_access);
    if(!data_loguin.get('password')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca una contraseña', button_access);
    if(email.length > 40) return messagge_warning_alert('notifier', 'top-center', 'Longitud de correo no permitida', button_access);
    if(password.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud de contraseña no permitida', button_access);
    if(!validateEmail(email)) return messagge_warning_alert('notifier', 'top-center', 'Direccion de email incorrecta', button_access);
    if(password.length < 10) return messagge_warning_alert('notifier', 'top-center', 'La contraseña debe contener como minimo 10 caracteres', button_access);
    setTimeout(function(){
        button_access.disabled = false;
    }, 2000);
    console.log("Ha llenado correctamente el formulario!"); // peticion fetch hacia el controlador de php y despues se ira al modelo (querys)
}