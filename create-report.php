<?php include 'header-loged.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("logged");
    });
</script>

<main>
    <section class="hero-blue">
        <div class="width-wrap">
            <h1>Report</h1>
        </div>
    </section>
    <section class="create-report">
        <div class="width-wrap">
            <div class="create-form-wrap">
                <form class="create-report-form" name="report-form" data-endpoint="./endpoint/createReportForm">
                    <div class="create-sur-rep-input--labeled cont">
                        <label class="">Headline</label>
                        <input type="text" maxlength="100" name="headline" required>
                    </div>
                    <div class="datepicker-wrap">
                        <div class="datepicker-cont">
                            <div class="datepicker-input-wrap cont">
                                <label class="def-label">From</label>
                                <input type="text" name="date_from" id="datepicker-from" placeholder="YYYY/MM/DD" readonly required>
                            </div>
                            <div class="datepicker-input-wrap cont">
                                <label class="def-label">To</label>
                                <input type="text" name="date_to" id="datepicker-to" placeholder="YYYY/MM/DD" readonly required>
                            </div>

                        </div>
                    </div>
                    <div class="create-sur-rep-wysiwyg--wrap cont">
                        <div class="create-sur-rep-wysiwyg--cont">
                            <label class="def-label">Message #1</label>
                            <div class="editor">
                            </div>
                        </div>
                    </div>
                    <div class="create-sur-rep-wysiwyg--wrap cont">
                        <div class="create-sur-rep-wysiwyg--cont">
                            <label class="def-label">Message #2</label>
                            <div class="editor">
                            </div>
                        </div>
                    </div>
                    <div class="drag-drop-img-wrap" >
                        <div class="drag-drop-img-cont" id="img_dropzone">
                            <span class="drag-drop-message nomob">Drop images here</span>
                            <span class="drag-drop-message onlymob">Click to attach files</span>
                        </div>
                        <div class="drag-drop-preview-cont" id="drag-drop-preview-cont">

                        </div>
                    </div>
                    <div class="create-sur-rep-input--labeled cont">
                        <label class="def-label">Youtube link</label>
                        <input type="text" name="youtube-link">
                    </div>
                    <div class="create-sur-rep-input--wrap">
                        <label class="def-label">Upload document</label>
                        <div class="create-sur-rep-input upload-document-wrap cont">
                            <input type="text" maxlength="100" id="first-document-title" name="document-title01" placeholder="Enter document title">
                            <div class="browse-file-wrap center-vertical"><span class="browse-file" data-trigger="doc">Browse file</span></div>
                            <div class="uploaded-document-wrap hidden">
                                <div class="uploaded-document-name center-vertical"></div>
                                <div class="create-sur-rep-input--remove-doc"></div>
                            </div>
                            <input id="first-document-file" type="file" class="doc_upload hidden" name="file01" accept="application/pdf,.doc,.docx">
                        </div>
                        <div class="create-sur-rep-input upload-document-wrap cont">
                            <input type="text" maxlength="100" id="second-document-title" name="document-title01" placeholder="Enter document title">
                            <div class="browse-file-wrap center-vertical"><span class="browse-file" data-trigger="doc">Browse file</span></div>
                            <div class="uploaded-document-wrap hidden">
                                <div class="uploaded-document-name center-vertical"></div>
                                <div class="create-sur-rep-input--remove-doc"></div>
                            </div>
                            <input id="second-document-file" type="file" class="doc_upload hidden" name="file01" accept="application/pdf,.doc,.docx">
                        </div>
                    </div>
                    <div class="remove-field" data-remove-field-doc>
                        <p>{{ 'Delete field'|_ }}</p>
                    </div>
                    <div class="add-aditional-field" data-add-aditional-doc>
                        <p>{{ 'Add aditional field'|_ }}</p>
                    </div>
                    <p class="alert-msg" style="display: none;">Lorem ipsum dolor sit amet, consetetur sadipscing</p>
                    <div class="create-sur-rep-submit-wrap">
                        <div class="create-sur-rep-submit">
                            <input type="button" value="Post" class="sur-rep-submit" onclick="reportValid();">
                        </div>
                    </div>
                    


                </form>
            </div>
        </div>
    </section>
    
    <!-- Success modal -->
    <div id="success-modal" class="modal-wrap success-modal alert">
        <button type="button" class="close mobile-close onlymob" onclick="closeModal()"></button>
        <div class="modal-container success-container">
            <div class="modal-header">
                <button type="button" class="close desktop-close" onclick="closeModal()"></button>
                <img src="./src/assests/img/icon_success.svg"> 
            </div>
            <div class="modal-body">
                <p>Thank you! Your survey has been created.</p>
            </div>
        </div>
    </div>

    <!-- Error modal -->
    <div id="error-modal" class="modal-wrap error-modal alert">
        <button type="button" class="close mobile-close onlymob" onclick="closeModal()"></button>
        <div class="modal-container error-container">
            <div class="modal-header">
                <button type="button" class="close desktop-close" onclick="closeModal()"></button>
                <img src="./src/assests/img/icon_error.svg">  
            </div>
            <div class="modal-body">
                <p>Ooops. Something went wrong. Try again.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>