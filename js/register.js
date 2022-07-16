var button_register = document.querySelector('#button-register')

function register_send_data(){
    // Disabling a button
    document.querySelector('#button-register').disabled = true;
    let form_register = document.getElementById("form_register");
    let data_register = new FormData(form_register);
    let email = data_register.get('email');
    let password = data_register.get('password');
    let name_user = data_register.get('name_user');
    let surnames_user = data_register.get('surnames_user');
    let confirm_password = data_register.get('confirm_password');

    if(!data_register.get('name_user')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca su nombre',button_register);
    if(!data_register.get('surnames_user')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca sus apellidos',button_register);
    if(!data_register.get('email')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca un correo',button_register);
    if(!data_register.get('password')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca una contraseña', button_register);
    if(!data_register.get('confirm_password')) return messagge_warning_alert('notifier', 'top-center', 'Confirme su contraseña',button_register);

    if(name_user.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud de nombre no permitida', button_register);
    if(surnames_user.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud de apellidos no permitida', button_register);
    if(email.length > 40) return messagge_warning_alert('notifier', 'top-center', 'Longitud de correo no permitida', button_register);
    if(password.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud de contraseña no permitida', button_register);
    if(confirm_password.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud de confirmacion de contraseña no permitida', button_register);

    if(!validateLettersWithSpaceBlank(name_user)) return messagge_warning_alert('notifier', 'top-center', 'Formato de nombre incorrecto', button_register);
    if(!validateLettersWithSpaceBlank(surnames_user)) return messagge_warning_alert('notifier', 'top-center', 'Formato de apellidos incorrecto', button_register);
    if(!validateEmail(email)) return messagge_warning_alert('notifier', 'top-center', 'Direccion de email incorrecta', button_register);

    if(password.length < 10) return messagge_warning_alert('notifier', 'top-center', 'La contraseña debe contener como minimo 10 caracteres', button_register);
    if(password !== confirm_password) return messagge_warning_alert('notifier', 'top-center', 'La confirmacion de contraseña debe de coincidir con la contraseña', button_register);

    setTimeout(function(){
        button_register.disabled = false;
    }, 2000);
    console.log("Ha llenado correctamente el formulario!"); // peticion fetch hacia el controlador de php y despues se ira al modelo (querys)
}