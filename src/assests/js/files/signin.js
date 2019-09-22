// create survey validation 
const signValid = () => {
    let errorCounter = 0,
        validOrNot = false;

    $('#singInForm input').each(function(){
        let content = $(this).val();
        if (!content) {
            $(this).closest('.cont').addClass('alrt');
            errorCounter ++;
        }
        else {
            $(this).closest('.cont').removeClass('alrt');
        }
    });

    if (errorCounter > 0) {
        validOrNot = false;
    } else {
        validOrNot = true;
    }

    if(validOrNot){

    }
}


$('#singInForm input').on('input', function(){
    let content = $(this).val();
    if (content) {
        $(this).closest('.cont').removeClass('alrt');
    } else {
        $(this).closest('.cont').addClass('alrt');
    }
});