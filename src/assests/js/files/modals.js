let scrollDistance;

function openModal(name) { //atidaro modalus
    let modalName = name,
    scrollDistance = $(window).scrollTop();
    $('#' + modalName + '-modal').fadeIn(100);
    $('body').addClass('modal-open');
    $('body').css("top", scrollDistance * -1);
}

function closeModal() { // uzdaro modalus
    var scrollpos = parseInt($('body').css('top'), 10);
    $('body').removeClass('modal-open');
    $('body').css("top", ""); 
    $('.modal-wrap').fadeOut(150);

    if (!!scrollpos && scrollpos < 0) {
        $(window).scrollTop(-scrollpos);
        $('body').css({top:0});
    }
}


