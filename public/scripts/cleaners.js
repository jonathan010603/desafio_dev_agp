const fullnameCleaner = (field) => {
    let input = field.value;
    if (!input.match(/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/)) {
        field.value = input.substring(0, input.length - 1);
        return;
    }
}

const nicknameCleaner = (field) => {
    let input = field.value;
    if (!input.match(/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9_.]+$/)) {
        field.value = input.substring(0, input.length - 1);
        return;
    }
}

const roleCleaner = (field) => {
    let input = field.value;
    if (!input.match(/^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ0-9.\-() ]+$/)) {
        field.value = input.substring(0, input.length - 1);
        return;
    }
}