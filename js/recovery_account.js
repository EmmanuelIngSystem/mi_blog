var button_recovery_account = document.querySelector('#button-recovery-account');
function recovery_account_send_data(){
    document.querySelector('#button-recovery-account').disabled = true;
    let form_recovery_account = document.getElementById("form_recovery_account");
    let data_recovery_account = new FormData(form_recovery_account);
    let email = data_recovery_account.get('email');
    if(!data_recovery_account.get('email')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca un correo',button_recovery_account);
    if(email.length > 40) return messagge_warning_alert('notifier', 'top-center', 'Longitud de correo no permitida', button_recovery_account);
    if(!validateEmail(email)) return messagge_warning_alert('notifier', 'top-center', 'Direccion de email incorrecta', button_recovery_account);
    setTimeout(function(){
        button_recovery_account.disabled = false;
    }, 2000);
    console.log("Ha llenado correctamente el formulario!"); // peticion fetch hacia el controlador de php y despues se enviara el correo con php
}