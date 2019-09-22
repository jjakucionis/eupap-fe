function formReset(i) {
    
    switch(i) {
        case 'survey':

            $('[name=question-text]').val('');
            $('[name=question-type-radio]').prop('checked', false);
            $('[name=answer]').val('');

            break;

        case 'contacts':

            $('form > div.input').find('input').each(function(){
                $(this).val('');
            });
            $('form').find('input[type=checkbox]').each(function(){
                $(this).prop('checked', false);
            });

            break;

        case 'report':
            $('[name=report_type]').prop('checked', false);
            $('[type=text]').val('');
            $('.trumbowyg-textarea').val('');
            $('.trumbowyg-editor').html('');
            mydropzone.removeAllFiles();

            //upload document
            $('.doc_upload').val("");
            $('.browse-file-wrap').removeClass('hidden');
            $('.uploaded-document-wrap').addClass('hidden');

            break;
    }
    
};