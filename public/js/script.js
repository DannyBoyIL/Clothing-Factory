
String.prototype.permalink = function () {
    return this.toString().trim().toLocaleLowerCase().replace(/\s/g, '-');
};

var $ms = $('.ms-area');

if ($ms.length) {

    $(function () {
        $ms.addClass('open').delay(2000).fadeOut();
        $('.ms-area > div.position').focus();
    });

    $ms.on('click keyup', function (event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
//    $('.ms-area, .ms-area button.close').on('click keyup', function (event) {
//        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
//            $(this).removeClass('open');
//        }
//    });
}

$('#modal').on('click', function () {

    $('#modal-target').prop({
        action: BASE_URL + 'cms/menu/' + $(this).data('id')
    });

});

$('.add-to-cart').on('click', function () {

    $.ajax({
        url: BASE_URL + 'shop/add-to-cart',
        type: "GET",
        dataType: "html",
        data: {id: $(this).data('id')},
        success: function (data) {
            window.location.reload();
        }
    });

});

$('.update-q-btn').on('click', function () {

    $.ajax({
        url: BASE_URL + 'shop/update-cart',
        type: "GET",
        dataType: "html",
        data: {op: $(this).data('op'), id: $(this).data('id')},
        success: function (data) {
            window.location.reload();
        }
    });


});

$('.origin-field').on('keyup', function () {
    $('.target-field').val($(this).val().permalink());
});

//$('ul.toggle li a').on('click', function () {
//    $('ul.toggle li a').removeClass('active');
//    $(this).toggleClass('active');
//});

//$('ul.toggle li a').click(        
//    function(e) {
//        debugger
//        e.preventDefault(); // prevent the default action
//        e.stopPropagation(); // stop the click from bubbling
//        $(this).closest('ul').find('.active').removeClass('active');
//        $(this).addClass('active');
//    });

//function setLinks() {
//    debugger
//    var links = $('#navbarCollapse ul li a.nav-link');
//    for (var x = 0; x < links.length; x++) {
//
//        links[x].className = "nav-link";
//        
//    }
//
//}