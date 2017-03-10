jQuery(function($) {

    $(document).ready(function () {

        $('#telefone').mask('(99)9999-9999');

        console.log('JQuery Funcionando');

        $("form").validate({
            rules: {
                nomeProp: "required",
                nomeFazenda: "required",
                regiaoFazenda: "required",
                tipoCriacao: "required",
                porteProdutor: "required",
                periodoColeta: "required",
                composteira: "required",
                usuario: "required",
                senha: "required",
                resenha: {
                    required: true,
                    equalTo: "input#senha"
                },
                email: {
                    required: true,
                    email: true
                },
                telefone: "required"
            },
            messages: {
                nomeProp: "Digite esse campo",
                nomeFazenda: "Digite esse campo",
                regiaoFazenda: "Digite esse campo",
                tipoCriacao: "Digite esse campo",
                porteProdutor: "Digite esse campo",
                periodoColeta: "Digite esse campo",
                composteira: "Digite esse campo",
                usuario: "Digite o nome de usuario",
                senha: {
                    required: "Digite sua senha",
                },
                resenha: {
                    required: "Digite sua senha",
                    equalTo: "Coloque os dados iguais"
                },
                email: "Digite um email válido",
                telefone: "Digite seu telefone"
            },
            errorElement: "p",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("div"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".col-sm-8").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".col-sm-8").addClass("has-success").removeClass("has-error");
            }
        });

        $('#inputTelefone').mask('(99) 99999-9999');
        

    });

});