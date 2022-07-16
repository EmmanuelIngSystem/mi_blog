function substring_text(class_tag, limit_string){
    let substrings_texts = document.querySelectorAll(`${class_tag}`);
    substrings_texts.forEach(substring_text => {
        let text = substring_text.innerHTML;
        let extraida = text.length > 600 ? text.substring(0, limit_string) : text;
        substring_text.innerHTML = extraida+" […]";
    });
}