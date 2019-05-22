$(document).ready(function () {
    $('.dropdown-trigger').dropdown({
        coverTrigger:false,
        hover:true,
    });

    $('.collapsible').collapsible();
    $('input#input_text, textarea#present_address, textarea#perm_address').characterCounter();
    $('select').formSelect();

});
