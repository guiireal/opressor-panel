import { validate } from "cpf-check";

$(() => {
    demo.checkFullPageBackgroundImage();
    setTimeout(function() {
        $(".card").removeClass("card-hidden");
    }, 700);
    $("#cpf").mask("000.000.000-00");

    const $buscar = $("#search-document");

    $buscar.on("click", event => {
        const $cpf = $("#cpf");
        if (!$cpf.val()) {
            event.preventDefault();
            $.notify(
                {
                    icon: "nc-icon nc-simple-remove",
                    message: "Filhão, digita um CPF nessa porra ai!"
                },
                {
                    type: "danger",
                    timer: 3000,
                    placement: {
                        from: "top",
                        align: "right"
                    }
                }
            );
            return;
        }
        const cpf = $cpf.val();
        if (!validate(cpf)) {
            event.preventDefault();
            $.notify(
                {
                    icon: "nc-icon nc-simple-remove",
                    message:
                        "Filhão, esse cpf está incorreto! Arruma essa porra ai!"
                },
                {
                    type: "danger",
                    timer: 3000,
                    placement: {
                        from: "top",
                        align: "right"
                    }
                }
            );
            return;
        }
        $buscar
            .empty()
            .append(
                `<i class="fa fa-spinner fa-spin mr-2"></i>Aguarde, consultando CPF...`
            );
    });
});
