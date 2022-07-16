var reg_letters_and_space_blank = /^[a-zA-Z\s]*$/;

function validateLettersWithSpaceBlank(string_to_validate){
    return string_to_validate.match(reg_letters_and_space_blank) ? true : false;
}