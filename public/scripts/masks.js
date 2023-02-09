const cpfMask = (field) => {
    let cpf = field.value;
    if (isNaN(cpf[cpf.length - 1])) {
        field.value = cpf.substring(0, cpf.length - 1);
        return;
    }
    if (cpf.length == 3 || cpf.length == 7) field.value += ".";
    if (cpf.length == 11) field.value += "-";
}