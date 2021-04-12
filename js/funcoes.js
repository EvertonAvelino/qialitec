filtraRepres(){
    var select = document.getElementById('filtroRepres');
    var cidades = select.options[select.selectedIndex].value;
    if (cidades.value === 'cidade1') {
        alert('escolheu cidade 1');
    } if (cidades.value === 'cidade2') {
        alert('escolheu cidade 2');
    }
};

$(function () {
    $('#id_categoria').change(function () {
        if ($(this).val()) {
            $('#id_sub_categoria').hide();
            $('.carregando').show();
            $.getJSON('sub_categorias_post.php?search=', { id_categoria: $(this).val(), ajax: 'true' }, function (j) {
                var options = '<option value="">Escolha Subcategoria</option>';
                for (var i = 0; i < j.length; i++) {
                    options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
                }
                $('#id_sub_categoria').html(options).show();
                $('.carregando').hide();
            });
        } else {
            $('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
        }
    });
});


/*
// Select all links with hashes
$('.a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
    */

