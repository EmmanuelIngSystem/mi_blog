var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

function validateEmail(value) {
    return mail_format.test(value) ? true : false;
}