// create survey add extra input field
let max_fields      = 5; 
let wrapper   		= $('.create-sur-rep-input--wrap'); 
let add_button      = $('[data-add-aditional] > p'); 
let remove_field    = $('[data-remove-field]');

let max_fields_counter = 1; 
$(add_button).on('click', function(e){ 
    e.preventDefault();
    if(max_fields_counter < max_fields){ 
        max_fields_counter++;
        $(wrapper).append('<div class="create-sur-rep-input cont"><input type="text" maxlength="100" name="answer" placeholder="Enter answer text" required><div class="create-sur-rep-input--remove nomob"></div></div>').show('slow'); 
    }
    checkInputCount();
});

$(wrapper).on('click', '.create-sur-rep-input--remove', function(e){ //user click on remove text
    e.preventDefault(); 
    $(this).parent('div').remove(); 
    max_fields_counter--;
    checkInputCount();
})

function checkInputCount() {
    var field_counter = $('.create-sur-rep-input--wrap > .create-sur-rep-input').length;
    if(field_counter === 1) {
        $('.create-sur-rep-input').find('.create-sur-rep-input--remove').addClass('hidden');
        remove_field.removeClass('remove-field-act');
    } else {
        $('.create-sur-rep-input').find('.create-sur-rep-input--remove').removeClass('hidden');
        remove_field.addClass('remove-field-act');
    }
}

//remove input on mobile
$('body').on('click', '.create-sur-rep-input > input', function(e) {
    $('.create-sur-rep-input > input').removeClass('focusedToRemove');
    $(this).addClass('focusedToRemove');
});

$(remove_field).on('click', function(e){ 
    e.preventDefault();
    let activeField = $('.focusedToRemove');
    if($(this).hasClass('remove-field-act')) {
        if(activeField) {
            $(activeField).parent('div').remove(); 
            max_fields_counter--;
        }
    }
    checkInputCount();
});

$(document).ready(function() {
    checkInputCount();
});

// create survey validation 
const surveyValid = () => {
    let errorCounter = 0,
        validOrNot = false;

    $('.create-survey-form input[required]').each(function(){
        let content = $(this).val();
        if (!content) {
            $(this).closest('.cont').addClass('error');
            errorCounter ++;
        }
        else {
            $(this).closest('.cont').removeClass('error');
        }
    });

    $('.create-survey-form textarea[required]').each(function(){
        let content = $(this).val();
        if (!content) {
            $(this).closest('.cont').addClass('error');
            errorCounter ++;
        }
        else {
            $(this).closest('.cont').removeClass('error');
        }
    });

    if(!$(".create-survey-form input[type=radio]").is(':checked')) {
        $(".create-sur-rep-type").addClass('error');
        errorCounter ++;
    } else {
        $(".create-sur-rep-type").removeClass('error');
    }


    if (errorCounter > 0) {
        validOrNot = false;
    } else {
        validOrNot = true;
    }

    if(!validOrNot) {
        $('.create-survey-form').addClass('error');
        $('.alert-msg').show();

    } else {
        $('.create-survey-form').removeClass('error');
        $('.alert-msg').hide();
    }

    if(validOrNot){

        $('.create-sur-rep-submit').addClass('loading');
        $('.sur-rep-submit').attr('disabled', true);

        let listedQuestions = [];
        $('.create-sur-rep-input').each(function(i){
            let question = $('.create-sur-rep-input').eq(i).find('input').val();
            listedQuestions.push(question);
        });

        let listedQuestionsKeys = [];
        $('.create-sur-rep-input').each(function(i){
            let key = $('.create-sur-rep-input').eq(i).find('input').eq(1).val();
            listedQuestionsKeys.push(key);
        });

        $.ajax({
            type: 'POST',
            url: $('.create-survey-form').attr('data-endpoint'), 
            data: {
                csrf: $('input[name="csrf"]').val(), 
                questionId: $('input[name="question_id"]').val(), 
                questionText: $('textarea[type="text"]').val(), 
                questionType: $("input[name='question-type-radio']:checked").val(), 
                questions: listedQuestions,
                questionsKeys: listedQuestionsKeys },
            success: function(response) { 
                var resp = JSON.parse(response);
                $('.create-sur-rep-submit').removeClass('loading');
                $('.sur-rep-submit').attr('disabled', false);
                openModal(resp);
                formReset('survey');
            },
            error: function(response) {
                console.log('Error', response);
                $('.create-sur-rep-submit').removeClass('loading');
                $('.sur-rep-submit').attr('disabled', false);
                openModal('error');
            }
        });
    }
}