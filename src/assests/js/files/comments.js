$(document).ready(function() {
    initCommentWysiwyg();
});

//comment reply form 
$(document).on('click', '.comment-reply', function(e){
    e.preventDefault;
    $(this).parent().parent().next('.comment-form-block--reply').slideToggle();
});

// create comment validation 
$(document).on('click', '[data-comment-form]', function(e){
    e.preventDefault();

    let _this = $(this),
        errorCounter = 0,
        validOrNot = false,
        formName = $(this).parent().attr('name');

    var commnent_form = document.querySelector(`[name=${formName}]`);
    var formObj = new FormData( commnent_form );

    formObj.append('comment', $(this).parent().parent().find('.trumbowyg-textarea').val());

    var commentText = formObj.get('comment');

    if( commentText.length == 0 || commentText == undefined ) {
        errorCounter++
    }

    if (errorCounter > 0) {
        validOrNot = false;
    } else {
        validOrNot = true;
    }

    if(validOrNot){
    
        $.ajax({
            type: 'POST',
            url: commnent_form.getAttribute('data-endpoint'),
            contentType: false,
            processData: false,
            dataType: 'json',
            data: formObj,
            success: function(response) { 
                if( response.status == 'success' ) {
                    openModal(response.status);
                    formReset();
                    let htmlFormated = addComment( response.data );
                    _this.parent().parent().after( htmlFormated );
                    initCommentWysiwyg();
                    resetWysiwyg();
                    $('[name=comment]').val('');
                    $('[name=file01]').val('');
                    $(".comment-file").remove();
                    if( response.data.depth > 0 )
                        commnent_form.parentElement.style.display = 'none';

                } else {
                    console.log('Error: ', response.message);
                    $('[data-error-msg]').html( '<p>Error: '+response.message+'</p>' );
                    openModal('error');
                }
            },
            error: function(response) {
                console.log('Error: ', response.responseText);
                $('[data-error-msg]').html( '<p>Error: '+response.responseText+'</p>' );
                openModal('error');
            }
        });

    }
    
})

function addComment( raw )
{
    let is_child = (raw.depth==1) ? 'comment-block--reply' : (raw.depth==2) ? 'comment-block--replysub' : '';

    let commentBlock = `
        <div class="comment-block ${is_child}" id=${raw.item_id}>
            <div class="comment-content">
                <span class="comment-name">${raw.user_username} ${raw.user_surname}</span>
                ${raw.text01}
            </div>
            <div class="comment-bottom">
                <div class="comment-date">${raw.created_at}</div>
                <div class="comment-reply" href="#">Reply</div>
            </div>
        </div>
        <div class="comment-form-block comment-form-block--reply" style="display: none;">
            <div class="editorCommnent"></div>
            <form class="comment-form" name="comment-form-${raw.item_id}" data-endpoint=${raw.endpoint}>
                <input type="hidden" name="csrf" value=${raw.csrf}>
                <input type="hidden" name="replay_id" value=${raw.item_id}>
                <input type="hidden" name="depth" value=${raw.depth}>
                <input type="button" class="form-submit" name="new_comment" value="Send comment" data-comment-form>
            </form>
        </div>
    `;

    return commentBlock;
}

function initCommentWysiwyg() {
    let csrf = $('[data-wysivyg-upload]').attr('data-csrf'),
        endpoint = $('[data-wysivyg-upload]').attr('data-wysivyg-upload');
    $('.editorCommnent').trumbowyg({
        btns: [
            ['viewHTML'],
            ['upload'],
            ['link']
        ],
        plugins: {
            upload: {
                serverPath: endpoint,
                fileFieldName: 'image',
                urlPropertyName: 'url',
                data: [{name: 'csrf', value: csrf}]
            }
        }
    }); 
}

function resetWysiwyg() {
    $('.editorCommnent').each(function(){
        $(this).trumbowyg('html', ''); 
    })
}