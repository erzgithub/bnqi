$(document).ready(function() {
    $(".acordian2 h3").click(function() {
        $(".acordian2 ul ul").slideUp();
        if(!$(this).next().is(":visible"))
        {
            $(this).next().slideDown();
        }
    });
});