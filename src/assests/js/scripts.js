$(document).ready(function() {
    console.log( "ready!" );
    $('.loader').fadeOut('slow');

    // FORMOS INPUTU ANIMACIJOS
    $( "div.input" ).find('input').focus(function() {
        $( this ).parent().find('label').addClass('act');
        $( this ).parent().addClass('focused');
    });

    $( "form" ).focusout(function() {
        let inputas = $( this ).find('input');
        inputas.each(function() {
            if (!$(this).val()) {
                $(this).parent().find('label').removeClass('act');
                $( this ).parent().removeClass('focused');
            } 
        });
    });

    // menu on scroll
    $(window).scroll(function() { 
    if ($(window).scrollTop() > 50) { 
        $(".header").addClass("shrink");
    } else {
        $(".header").removeClass("shrink");
    }
    });

    // scroll to next section
    $('.scroll-wrap').on('click', function () {
        $('body,html').animate({ scrollTop: $('.hero').height() }, 800);
    });


    // preloader
    $('body').on('click', 'a:not([href^="#"]):not([download]):not([data-link])', function(e) {
    if ($(this).attr('target') !== "_blank") {
        e.preventDefault();
        $('.loader').fadeIn(300, () => {
        window.location.href = $(this).attr('href');
        });
    }
    });

    //mobile menu
    $( ".mobile-menu-btn--round" ).click(function() {
        $(this).toggleClass( "opened" );
        $('.header_menu').toggleClass( "opened" );
    });

    //documents block counter
    let docCount = $(".documents").find(".info-block").length;
    if(docCount === 1) {
    $(".documents").addClass('single');
    } else {
    };

    //wrap tables 
    $('.text-content').find('table').wrap('<div class="table-wrap">');

    //blocks counter 
    let blocksCount = $('.info-block').not('.load-more-block').not('.info-block-hide').length;
    if(blocksCount % 2 === 0) {
        $('.load-more-block').addClass('toLeft');
    } else {
        $('.load-more-block').addClass('toRight');
    }

    //wysiwyg trumbowyg
    $('.editor').trumbowyg({
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['table'],
            ['link'],
            ['insertImage'],
            ['preformatted'],
            // ['upload'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ],
        plugins: {
            upload: {
                
            },
            table: {
                rows: 5,
                columns: 5,
                styler: 'table'
            }
        }
    });
});

// init slider 
$('.single-slider').slick({
    arrows: false,
    speed: 500,
    fade: true,
});

$('.slide-left-buttton').click(function(){
    $('.single-slider').slick('slickPrev');
})

$('.slide-right-buttton').click(function(){
    $('.single-slider').slick('slickNext');
})

// survey page, enable disabled buttons
$('.radio-container input').on('click', function(){
    if($(this).is(':checked')) {
        $(this).parent().parent().parent().find('.survey-submit-btn').removeClass('disabled');
    }
});

$('[data-survey-checkbox]').on('change', function(){
    let checkedInputs = 0;
    $(this).parent().parent().find('label').each(function(){
        if($(this).find('input').is(':checked')) {
            checkedInputs = 1;
        } 
    });
    if(checkedInputs > 0) {
        $(this).parent().parent().parent().find('.survey-submit-btn').removeClass('disabled');
    } else {
        $(this).parent().parent().parent().find('.survey-submit-btn').addClass('disabled');
    }
});

$('.survey-submit-btn').on('click', function(e){
    e.preventDefault();
    if(!$(this).hasClass('disabled')) {
        
        var _this = $(this),
            survey_form = document.querySelector("[name="+_this.attr('data-form')+"]"),
            formObj = new FormData( survey_form ),
            endpoint = _this.attr('data-endpoint');

        $.ajax({
            url: endpoint,
            data: formObj,
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                if( data.status == 'success' ) {
                    _this.hide();

                    if( data.statictics ) {
                        $('#statistics-modal .modal-header').find('h3').html( data.statictics.question );
                        $('#statistics-modal .modal-body').html( '' );

                        var struct = data.statictics.answers,
                            i = 1;
                        for (var key in struct) {
                            $('#statistics-modal .modal-body').append('<div class="statisctics-row"><div class="statitics-row-label"><p>'+struct[key].name+'</p></div><div class="statitics-row-content"><div class="statitics-row-content-line color'+i+'" style="width: '+struct[key].persent+'%"><span>'+struct[key].persent+'%</span></div></div></div>' );
                            i++;
                        }
                        
                        openModal('statistics');
                    }
                } else {
                    openModal('error');
                }
            }
        })

    }
});

$(document).on('click', '[data-survey-stat]', function(e){
    e.preventDefault();

    var formObj = new FormData(),
        question_id = $(this).attr('data-survey'),
        user_id = $(this).attr('data-survey-user'),
        csrf = $(this).attr('data-csrf'),
        endpoint = $(this).attr('data-endpoint');

        formObj.append('question_id', question_id);
        formObj.append('user_id', user_id);
        formObj.append('csrf', csrf);

    $.ajax({
        url: endpoint,
        data: formObj,
        processData: false,
        contentType: false,
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if( data.status == 'success' ) {

                if( data.statictics ) {
                    $('#statistics-modal .modal-header').find('h3').html( data.statictics.question );
                    $('#statistics-modal .modal-body').html( '' );

                    var struct = data.statictics.answers,
                        i = 1;
                    for (var key in struct) {
                        $('#statistics-modal .modal-body').append('<div class="statisctics-row"><div class="statitics-row-label"><p>'+struct[key].name+'</p></div><div class="statitics-row-content"><div class="statitics-row-content-line color'+i+'" style="width: '+struct[key].persent+'%"><span>'+struct[key].persent+'%</span></div></div></div>' );
                        i++;
                    }
                    
                    openModal('statistics');
                }
            } else {
                openModal('error');
            }
        }
    })

    
});

$('[data-delete-survey]').on('click', function(e){
    e.preventDefault();

    var _this = $(this),
        survey_id = _this.attr('data-survey'),
        csrf = _this.attr('data-csrf'),
        endpoint = _this.attr('data-endpoint');

    if( confirm("Remove that survey?") == true && parseInt(survey_id) > 0 )
    {
        $.ajax({
            url: endpoint,
            data: 'survey_id='+survey_id+'&csrf='+csrf,
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                if( data.status == 'success' ) {
                    //_this.closest( ".survey-block" ).fadeOut(300);
                    openModal('success-remove');
                    setTimeout(function(){
                        window.location.href = window.location.href;
                    }, 1500);
                } else {
                    openModal('error');
                }
            }
        })
    }
   
});

$('[data-delete-report]').on('click', function(e){
    e.preventDefault();

    var _this = $(this),
        report_id = _this.attr('data-report'),
        csrf = _this.attr('data-csrf'),
        endpoint = _this.attr('data-endpoint');

    if( confirm("Remove that report?") == true && parseInt(report_id) > 0 )
    {
        $.ajax({
            url: endpoint,
            data: 'report_id='+report_id+'&csrf='+csrf,
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                if( data.status == 'success' ) {
                    openModal('success-remove');
                    setTimeout(function(){
                        window.location.href = window.location.href;
                    }, 1500);
                } else {
                    openModal('error');
                }
            }
        })
    }
   
});


// coockie fadeout
$('.coockie-agree').on('click', function(e){
    e.preventDefault();
    $('.coockie').fadeOut();
    setCookie('acceptCookie', 'true', 365);
});

$('.coockie-close').on('click', function(){
    $('.coockie').fadeOut();
    setCookie('acceptCookie', 'true', 365);
});

function setCookie(cname , cvalue, exdays )  {
    let expires = '';
    if (exdays > 0) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        expires = `expires=${d.toUTCString()}`;
    } else {
        expires = '01 Jan 1970 00:00:01 GMT';
    }
    document.cookie = `${cname}=${cvalue};${expires};path=/`;
}

// load more
$('[data-load-more]').on('click', function(e){
    e.preventDefault();
    var className = $(this).attr('data-class');
    $('.info-block-list').children( '.'+className+'' ).fadeIn(400);
    $('.load-more-block').hide();
});

$(window).on('ajaxError', function(event, context, message, status, jqXHR){
    event.preventDefault();
    
    if( typeof event.target.id != 'undefined') {
        if( event.target.id == "singInForm" ) {
            let modalName = 'error';
            $('#' + modalName + '-modal'). find('.modal-body').html('<p>'+message+'</p>');
            $('#' + modalName + '-modal').fadeIn(100);
            $('body').addClass('modal-open');
            $('html').addClass('modal-open');
        }
        
    }
    
});



//@prepros-append ./files/contact_form.js
//@prepros-append ./files/create_survey.js
//@prepros-append ./files/form_reset.js
//@prepros-append ./files/modals.js
//@prepros-append ./files/create-report.js
//@prepros-append ./files/comments.js
//@prepros-append ./files/signin.js