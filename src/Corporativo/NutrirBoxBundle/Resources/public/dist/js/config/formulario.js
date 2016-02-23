jQuery(function ($) {
    $('.date-picker').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR',
        autoclose: true,
        todayHighlight: true
    }).next().on(ace.click_event, function () {
        $(this).prev().focus();
    });


    $('.color-picker').ace_colorpicker();

    function formataCampo(mascara, valor) {
        var boleanoMascara;

        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = valor;
        campoSoNumeros = "00000000000" + campoSoNumeros.replace(/\D/g, '');
        campoSoNumeros = campoSoNumeros.slice(mascara.replace(/\D/g, '').length * -1);

        var posicaoCampo = 0;
        var novoValorCampo = "";
        var tamanhoMascara = mascara.length;
        if (valor.length > 0) {
            for (i = 0; i <= tamanhoMascara; i++) {
                boleanoMascara = ((mascara.charAt(i) == "-") || (mascara.charAt(i) == ".")
                        || (mascara.charAt(i) == "/"));
                boleanoMascara = boleanoMascara || ((mascara.charAt(i) == "(")
                        || (mascara.charAt(i) == ")") || (mascara.charAt(i) == " "));
                if (boleanoMascara) {
                    novoValorCampo += mascara.charAt(i);
                } else {
                    novoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                    posicaoCampo++;
                }
            }
        }
        return novoValorCampo;
    }

    $(document).on("focus", ".cpf-mask", function () {
        if (this.value.length < 11)
            this.value = ("00000000000" + this.value).slice(-11)
        $(this).mask("999.999.999-99", {placeholder: " "});
    });

    $(document).on("focus", ".date-mask", function () {
        $(this).mask("99/99/9999", {placeholder: " "});
    });

    $(document).on("focus", ".telefone-mask", function () {
        $(this).mask("(99) 9999-9999", {placeholder: " "});
    });

    $(document).on("focus", ".celular-mask", function () {
        $(this).mask("(99) 9999-9999?9", {placeholder: " "});
    });

    $(document).on("keypress", ".celular-mask", function () {
        if (this.value.replace(/\D/g, '').length > 10)
            $(this).mask("(99) 99999-9999", {placeholder: " "});
    });
});