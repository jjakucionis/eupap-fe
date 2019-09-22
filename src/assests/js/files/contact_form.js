// contacts form validation
const validation = () => {
    let errorCounter = 0,
        validOrNot = false,
        emailVal = $('[name="email"]').val(),
        regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(emailVal != "" && !regex.test(emailVal)) {
        $('[name="email"]').parent().addClass('alrt2');
        errorCounter ++;
    } else {
        $('[name="email"]').parent().removeClass('alrt2');
    }

    $('form input[required]').each(function(){
        let content = $(this).val();
        if (!content) {
            $(this).parent().addClass('alrt');
            errorCounter ++;
        }
        else {
            $(this).parent().removeClass('alrt');
        }
    });

    $('form').find('input[type=checkbox]').each(function(){
        if ($(this).is(':checked')) {
            $('.checkmark').removeClass('alrt');
        } else {
            $('.checkmark').addClass('alrt');
            errorCounter ++;
        }
    });
    
    if (errorCounter > 0) {
        validOrNot = false;
    } else {
        validOrNot = true;
    }

    if(!validOrNot) {
        $('.alert--group').addClass('show');
    } else {
        $('.alert--group').removeClass('show');
    }

    if(validOrNot){
        $.ajax({
            type: 'POST',
            url: $('[data-contact-form]').attr('data-action'),
            data: {firstname: $('[name="firstname"]').val(), email: $('[name="email"]').val(), phone: $('[name="phone"]').val(), interest: $('[name="interest"]').val(), acceptance: $('[name="acceptance"]').val(), qcheck: $('[name="qcheck"]').val()},
            success: function(response) { 
                var resp = JSON.parse(response);
                openModal(resp.status);
                formReset('contacts');
            },
            error: function(response) {
                console.log('Error', response);
                openModal(resp.status);
            }
        });
    }
    //return validOrNot;
}