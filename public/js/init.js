var $target_right = $('.anime-scroll-right'),
    $target_left = $('.anime-scroll-left'),
    animationClass = 'anime-start',
    offset = $(window).height() * 3 / 4;

function animateScroll() {
    var documentTop = $(document).scrollTop();

    $target_left.each(function() {
        var itemTop = $(this).offset().top;

        if (documentTop > itemTop - offset) {
            $(this).addClass(animationClass);
        } else {
            $(this).removeClass(animationClass);
        }
    });

    $target_right.each(function() {
        var itemTop = $(this).offset().top;

        if (documentTop > itemTop - offset) {
            $(this).addClass(animationClass);
        } else {
            $(this).removeClass(animationClass);
        }
    });
}


//suavizar Scroll
function suavizarScroll() {
    $('.scroll').click(function(e) {
        e.preventDefault();

        var id = $(this).attr('href');
        var targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset
        }, 1500);

    });
}

$(document).scroll(function() {
    animateScroll();
});


//function adicionar input button
$(document).ready(function() {
    var max_fields = 3; //maximum input boxes allowed
    var wrapper = $(".input_fields_wrap"); //Fields wrapper
    var add_button = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click

        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x <= max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append("<div class='row' id='alternativa" + (length + 1) + "'><div class='input-field col s10'><input id='title' type='text' name='alternativa[]'><label for='alternativa" + (length + 1) + "'>Alternativa " + (length + 1) + ":</label></div> <a href='#' class='waves-effect waves-light btn-large col s1 red remove_field'><i class='material-icons right'>delete</i></a></div>"); //add input box
        }
    });

    $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })

});

(function($) {
    $(function() {
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.tooltipped').tooltip();
        suavizarScroll();
        animateScroll();
        $('.collapsible').collapsible();
        $('select').formSelect();
        $(".dropdown-trigger").dropdown();
    }); // end of document ready
})(jQuery); // end of jQuery name space