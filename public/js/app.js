$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false});

$(document).on('submit', 'form[data-pjax]', function(event) {
    $.pjax.submit(event, '#pjax-container');
});

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-center",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "200",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

$(document).ready(function() {

    $('#search').submit(function(e){
        e.preventDefault();
        if($.support.pjax)
            $.pjax({url: "/recherche/"+e.target.elements[0].value, container : '#pjax-container'})
        else
        window.location.href = "/recherche/"+e.target.elements[0].value;
    });


    $("#testajax").click(function(e) {
        e.preventDefault();

        $.ajax({
            type: "GET", // Le type de ma requete
            url: "/testajax", // L url vers laquelle la requete sera envoyee
            success: function(data, textStatus, jqXHR) {
                $("#aremplir").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Une erreur sest produite lors de la requete
            }
        });
    });


});

