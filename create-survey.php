<?php include 'header-loged.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("logged");
    });
</script>

<main>
    <section class="hero-blue">
        <div class="width-wrap">
            <h1>Survey</h1>
        </div>
    </section>
    <section class="create-survey">
        <div class="width-wrap">
            <div class="create-form-wrap">
                <form class="create-survey-form">
                    <div class="create-sur-rep-textarea cont">
                        <label class="">Question text</label>
                        <textarea type="text" name="question-text" required></textarea>
                        <!-- <span class="alert">Wrong user name</span> -->
                    </div>
                    <div class="input input-wrap create-sur-rep-type cont">
                        <label class="radio-label">Question type</label>
                        <label class="radio-container">Single answer
                            <input type="radio" name="question-type-radio" value="single" required>
                            <span class="radio-checkmark"></span>
                        </label>
                        <label class="radio-container">Multiple answer
                            <input type="radio" name="question-type-radio" value="multiple">
                            <span class="radio-checkmark"></span>
                        </label>
                    </div>
                    <div class="create-sur-rep-input--wrap">
                        <div class="create-sur-rep-input cont">
                            <input type="text" maxlength="100" name="answer" placeholder="Enter answer text" required>
                            <div class="create-sur-rep-input--remove nomob"></div>
                        </div>
                    </div>
                    <div class="remove-field onlymob" data-remove-field>
                        <p>Delete field</p>
                    </div>
                    <div class="add-aditional-field" data-add-aditional>
                        <p>Add aditional field</p>
                    </div>
                    <div class="create-sur-rep-submit-wrap">
                        <p class="alert-msg">Lorem ipsum dolor sit amet, consetetur sadipscing</p>
                        <div class="create-sur-rep-submit">
                            <input type="button" value="Post" class="sur-rep-submit" onclick="surveyValid();">
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