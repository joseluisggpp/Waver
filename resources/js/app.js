import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Obtener el elemento select
    var perPageSelect = document.getElementById("perPage");

    if (perPageSelect) {
        // Verificar si el elemento existe (por seguridad)
        // Obtener el valor almacenado en sesión para 'perPage'
        var selectedPerPage = perPageSelect.dataset.selectedPerPage;

        // Establecer el valor seleccionado inicialmente
        perPageSelect.value = selectedPerPage;

        // Manejar el evento change del select
        perPageSelect.addEventListener("change", function () {
            var selectedValue = this.value; // Obtener el valor seleccionado

            // Guardar el valor seleccionado en la sesión mediante una solicitud AJAX
            axios
                .post("/set-per-page", {
                    perPage: selectedValue,
                })
                .then(function (response) {
                    // Éxito al guardar en la sesión (opcional: mostrar mensaje, actualizar la vista, etc.)
                    console.log(
                        "Valor de perPage guardado en la sesión correctamente"
                    );
                })
                .catch(function (error) {
                    // Error al guardar en la sesión (opcional: manejar el error)
                    console.error(
                        "Error al guardar valor de perPage en la sesión",
                        error
                    );
                });
        });
    }
});
