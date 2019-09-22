var mydropzone,
    removedFiles = [],
    removedDocFiles = [],
    wrapperDoc = $('.create-sur-rep-input--wrap'),
    addbuttonDoc = $('[data-add-aditional-doc] > p'),
    max_fields_doc = 10,
    remove_field_doc    = $('[data-remove-field-doc]');

let max_fields_counter_doc = 1; 
$(addbuttonDoc).on('click', function(e){ 
    e.preventDefault();
    if(max_fields_counter_doc < max_fields_doc){ 
        max_fields_counter_doc++;
        $(wrapperDoc).append('<div class="create-sur-rep-input upload-document-wrap cont"><input type="text" maxlength="100" id="first-document-title" name="document-title01[]" placeholder="Enter document title"><div class="browse-file-wrap center-vertical"><span class="browse-file" data-trigger="doc">Browse file</span></div><div class="uploaded-document-wrap hidden"><div class="uploaded-document-name center-vertical"></div><div class="create-sur-rep-input--remove-doc"></div></div><input id="first-document-file" type="file" class="doc_upload hidden" name="file01[]" accept="application/pdf,.doc,.docx,.rar,application/zip"></div>').show('slow'); 
    }
    checkInputCountDoc();
});

function checkInputCountDoc() {
    var field_counter = $('.create-sur-rep-input--wrap > .create-sur-rep-input').length;
    if(field_counter === 2) {
        remove_field_doc.removeClass('remove-field-act').addClass('hidden');
    } else {
        remove_field_doc.addClass('remove-field-act').removeClass('hidden');
    }
}

$(remove_field_doc).on('click', function(e){ 
    e.preventDefault();
    var field_counter = $('.create-sur-rep-input--wrap > .create-sur-rep-input').length;
    if($(this).hasClass('remove-field-act')) {
        if(field_counter > 2) {
            $('.create-sur-rep-input--wrap > .create-sur-rep-input').last().remove(); 
            max_fields_counter--;
        }
    }
    checkInputCountDoc();
});

$(document).ready(function() {
    
    checkInputCountDoc();

    $( "#datepicker-from" ).datepicker({ 
        constrainInput: true,
        dateFormat: "yy/mm/dd"
    });

    $( "#datepicker-to" ).datepicker({ 
        constrainInput: true,
        dateFormat: "yy/mm/dd"
    });

    //dropzone
    if( $('#img_dropzone').length ) {
        mydropzone = new Dropzone('#img_dropzone', { 
            url: "./endpoint/createReportForm",
            uploadMultiple: true,
            acceptedFiles: "image/*",
            previewsContainer: "#drag-drop-preview-cont",
            hiddenInputContainer: ".create-report-form",
            autoProcessQueue: false,
            thumbnailWidth: 155,
            thumbnailHeight: 104,
            addRemoveLinks: true,
            maxFiles: 5,
            maxFilesize: 2,
            drop: function() {
                console.log('imestas');
            },
            // init: function() {
            //     // var dropzone = this;
            //     // $(".sur-rep-submit").click(function() {
            //     //   let filesList = dropzone.getQueuedFiles();
            //     //   console.log(filesList);
            //     //   dropzone.processQueue();
            //     // });
            // },
            init: function() {

                //add any existing image
                var existingImg = $('[data-existing-img]');
                if( existingImg.length == 1 )
                {
                    var imgThumb = JSON.parse( existingImg.attr('data-existing-img') );
                    if( imgThumb ) {
                        var existingFileCount = 0;
                        for (var i = 0; i < imgThumb.length; i++) {
                            let entity = { 
                                name: imgThumb[i].name, 
                                size: imgThumb[i].size, 
                                type: imgThumb[i].type, 
                                status: Dropzone.ADDED,
                                accepted: true,
                                kind: 'image',
                            };
                            
                            this.files.push(entity);
                            this.emit("addedfile", entity);
                            this.emit("thumbnail", entity, imgThumb[i].url);
                            this.emit("complete", entity);

                            existingFileCount++;
                        }
                    }
                }

                this.on("error", function(file, message) { 
                    alert(message);
                    this.removeFile(file); 
                });

                this.on("removedfile", function (file) {
                    removedFiles.push( file.name );
                });
            }
        });
    }
});


// upload document
$(document).on('click', '.browse-file', function(e){
    let trValue = $(this).attr('data-trigger');
    $(this).parent().parent().find("." + trValue + "_upload").trigger('click');
});

$(document).ready(function() {
    $(document).on('change', 'input[type="file"]', function(){
        let fileName = $(this)[0].files[0].name;
        if(fileName) {
            $(this).closest('.upload-document-wrap').find('.browse-file-wrap').addClass('hidden');
            $(this).closest('.upload-document-wrap').find('.uploaded-document-wrap').removeClass('hidden');
            $(this).closest('.upload-document-wrap').find('.uploaded-document-name').text(fileName);

        }
    });

    $(document).on('click', '.create-sur-rep-input--remove-doc', function(){
        $(this).closest('.upload-document-wrap').find('.doc_upload').val("");
        $(this).parent().addClass('hidden');
        $(this).closest('.upload-document-wrap').find('.browse-file-wrap').removeClass('hidden');
        removedDocFiles.push( $(this).prev('div:first').find('a').text() );
    });
});

// create report validation 
const reportValid = () => {
    let errorCounter = 0,
        validOrNot = false;

    $('.create-report-form input[required]').each(function(){
        let content = $(this).val();
        if (!content) {
            $(this).closest('.cont').addClass('error');
            errorCounter ++;
        }
        else {
            $(this).closest('.cont').removeClass('error');
        }
    });

    if( !$('[name=report_type]:checked').length ) {
        $('[data-radio]').addClass('error');
        errorCounter ++;
    }
    else
        $('[data-radio]').removeClass('error');


    if (errorCounter > 0) {
        validOrNot = false;
    } else {
        validOrNot = true;
    }

    if(!validOrNot) {
        $('.create-report-form').addClass('error');
        $('.alert-msg').fadeIn();

    } else {
        $('.create-report-form').removeClass('error');
        $('.alert-msg').fadeOut();
    }

    if(validOrNot){

        $('.create-sur-rep-submit').addClass('loading');
        $('.sur-rep-submit').attr('disabled', true);

        var images = mydropzone.getQueuedFiles();

        var report_form = document.querySelector("[name=report-form]");
        var formObj = new FormData( report_form );
        for (var i = 0; i < images.length; i++) {
            formObj.append(images[i].name, images[i]);
        }

        formObj.append('removed', removedFiles);
        formObj.append('removedDoc', removedDocFiles);

        formObj.append('wysiwyg_data01', $('.trumbowyg-textarea').eq(0).val());
        formObj.append('wysiwyg_data02', $('.trumbowyg-textarea').eq(1).val());

        $.ajax({
            type: 'POST',
            url: $('.create-report-form').attr('data-endpoint'),
            contentType: false,
            processData: false,
            dataType: 'json',
            data: formObj,
            success: function(response) { 
                if( response.status == 'success' ) {
                    openModal(response.status);
                    setTimeout(function(){
                        window.location.href = response.redirect;
                    }, 1500);
                    formReset();
                    $('.create-sur-rep-submit').removeClass('loading');
                    $('.sur-rep-submit').attr('disabled', false);
                } else {
                    console.log('Error: ', response.message);
                    $('[data-error-msg]').html( '<p>Error: '+response.message+'</p>' );
                    $('.create-sur-rep-submit').removeClass('loading');
                    $('.sur-rep-submit').attr('disabled', false);
                    openModal('error');
                    
                }
            },
            error: function(response) {
                console.log('Error: ', response.responseText);
                $('[data-error-msg]').html( '<p>Error: '+response.responseText+'</p>' );
                $('.create-sur-rep-submit').removeClass('loading');
                $('.sur-rep-submit').attr('disabled', false);
                openModal('error');
            }
        });
    }
}