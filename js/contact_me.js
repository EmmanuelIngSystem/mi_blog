var button_contact_me = document.querySelector('#button-contact-me')

function send_data_contact_me(){
    document.querySelector('#button-contact-me').disabled = true;
    let form_contact_me = document.getElementById("form_contact_me");
    let data_contact_me = new FormData(form_contact_me);
    let name_contact = data_contact_me.get('name_contact');
    let email_contact = data_contact_me.get('email_contact');
    let subject_contact = data_contact_me.get('subject_contact');
    let message_email = data_contact_me.get('message_email');
    if(!data_contact_me.get('name_contact')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca su nombre',button_contact_me);
    if(!data_contact_me.get('email_contact')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca su correo',button_contact_me);
    if(!data_contact_me.get('subject_contact')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca el asunto del correo',button_contact_me);
    if(!data_contact_me.get('message_email')) return messagge_warning_alert('notifier', 'top-center', 'Introduzca el mensaje del correo',button_contact_me);
    
    if(name_contact.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud de nombre no permitida', button_contact_me);
    if(!validateLettersWithSpaceBlank(name_contact)) return messagge_warning_alert('notifier', 'top-center', 'Formato de nombre incorrecto', button_contact_me);
    if(email_contact.length > 40) return messagge_warning_alert('notifier', 'top-center', 'Longitud de correo no permitida', button_contact_me);
    if(!validateEmail(email_contact)) return messagge_warning_alert('notifier', 'top-center', 'Direccion de email incorrecta', button_contact_me);
    if(subject_contact.length > 100) return messagge_warning_alert('notifier', 'top-center', 'Longitud del asunto no permitida', button_contact_me);
    if(message_email.length > 500) return messagge_warning_alert('notifier', 'top-center', 'Longitud del mensaje no permitida', button_contact_me);
    setTimeout(function(){
        button_contact_me.disabled = false;
    }, 2000);
    console.log("Ha llenado correctamente el formulario!"); // envio de correo con php
}