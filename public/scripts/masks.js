const cpfMask = (field) => {
    let cpf = field.value;
    if (isNaN(cpf[cpf.length - 1])) {
        field.value = cpf.substring(0, cpf.length - 1);
        return;
    }
    field.setAttribute("maxlength", "14");
    if (cpf.length == 3 || cpf.length == 7) field.value += ".";
    if (cpf.length == 11) field.value += "-";
}

function birthdateMask(field) {
    var pass = field.value;
    var expr = /[0123456789]/;

    for (i = 0; i < pass.length; i++) {
        // charAt -> retorna o caractere posicionado no índice especificado
        var lchar = field.value.charAt(i);
        var nchar = field.value.charAt(i + 1);

        if (i == 0) {
            // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
            // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
            // instStr.search(expReg);
            if ((lchar.search(expr) != 0) || (lchar > 3)) {
                field.value = "";
            }

        } else if (i == 1) {

            if (lchar.search(expr) != 0) {
                // substring(indice1,indice2)
                // indice1, indice2 -> será usado para delimitar a string
                var tst1 = field.value.substring(0, (i));
                field.value = tst1;
                continue;
            }

            if ((nchar != '/') && (nchar != '')) {
                var tst1 = field.value.substring(0, (i) + 1);

                if (nchar.search(expr) != 0)
                    var tst2 = field.value.substring(i + 2, pass.length);
                else
                    var tst2 = field.value.substring(i + 1, pass.length);

                field.value = tst1 + '/' + tst2;
            }

        } else if (i == 4) {

            if (lchar.search(expr) != 0) {
                var tst1 = field.value.substring(0, (i));
                field.value = tst1;
                continue;
            }

            if ((nchar != '/') && (nchar != '')) {
                var tst1 = field.value.substring(0, (i) + 1);

                if (nchar.search(expr) != 0)
                    var tst2 = field.value.substring(i + 2, pass.length);
                else
                    var tst2 = field.value.substring(i + 1, pass.length);

                field.value = tst1 + '/' + tst2;
            }
        }

        if (i >= 6) {
            if (lchar.search(expr) != 0) {
                var tst1 = field.value.substring(0, (i));
                field.value = tst1;
            }
        }
    }

    if (pass.length > 10)
        field.value = field.value.substring(0, 10);
    return true;
}