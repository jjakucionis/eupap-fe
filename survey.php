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
    <section class="info-blocks">
        <div class="width-wrap">
            <div class="flex-wrap">
                <div class="info-block survey-block">
                    <h3>Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</h3>
                    <form class="survey-form">
                        <label class="radio-container">Neque porro quisquam est qui
                            <input type="radio" name="radio">
                            <span class="radio-checkmark"></span>
                        </label>
                        <label class="radio-container">Consectetur adipisci
                            <input type="radio" name="radio">
                            <span class="radio-checkmark"></span>
                        </label>
                        <label class="radio-container">Magnam aliquam quaerat
                            <input type="radio" name="radio">
                            <span class="radio-checkmark"></span>
                        </label>
                    </form> 
                    <div class="more-wrap survey-submit">
                        <a class="more-btn survey-submit-btn disabled" href="#">Take a vote</a>
                    </div>
                </div>
                <div class="info-block survey-block">
                    <h3>Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</h3>
                    <form class="survey-form">
                        <label class="radio-container">Neque porro quisquam est qui
                            <input type="radio" name="radio">
                            <span class="radio-checkmark"></span>
                        </label>
                        <label class="radio-container">Consectetur adipisci
                            <input type="radio" name="radio">
                            <span class="radio-checkmark"></span>
                        </label>
                        <label class="radio-container">Magnam aliquam quaerat
                            <input type="radio" name="radio">
                            <span class="radio-checkmark"></span>
                        </label>
                    </form> 
                    <div class="more-wrap vote-with-buttons survey-submit">
                        <a class="more-btn survey-submit-btn disabled" href="#">Take a vote</a>
                        <div class="options-btns-wrap">
                            <a href="#" class="survey-button-wrap edit-survey-button-wrap"><div class="edit-survey-button "><span>Edit</span></div></a>
                            <a href="#" class="survey-button-wrap delete-survey-button-wrap"><div class="delete-survey-button "><span>Delete</span></div></a>
                        </div>
                    </div>
                </div>
                <div class="info-block survey-block multiple-answers">
                    <h3>Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</h3>
                    <form class="survey-form">
                        <label class="checkbox-container">Neque porro quisquam est qui
                            <input type="checkbox" name="survey_checkbox">
                            <span class="checkbox-checkmark"></span>
                        </label>
                        <label class="checkbox-container">Consectetur adipisci
                            <input type="checkbox" name="survey_checkbox">
                            <span class="checkbox-checkmark"></span>
                        </label>
                        <label class="checkbox-container">Magnam aliquam quaerat
                            <input type="checkbox" name="survey_checkbox">
                            <span class="checkbox-checkmark"></span>
                        </label>
                    </form> 
                    <div class="more-wrap survey-submit">
                        <a class="more-btn survey-submit-btn disabled" href="#">Take a vote</a>
                    </div>
                </div>
                <div class="info-block survey-block multiple-answers">
                    <h3>Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</h3>
                    <form class="survey-form">
                        <label class="checkbox-container">Neque porro quisquam est qui
                            <input type="checkbox" name="survey_checkbox">
                            <span class="checkbox-checkmark"></span>
                        </label>
                        <label class="checkbox-container">Consectetur adipisci
                            <input type="checkbox" name="survey_checkbox">
                            <span class="checkbox-checkmark"></span>
                        </label>
                        <label class="checkbox-container">Magnam aliquam quaerat
                            <input type="checkbox" name="survey_checkbox">
                            <span class="checkbox-checkmark"></span>
                        </label>
                    </form> 
                    <div class="more-wrap vote-with-buttons survey-submit">
                        <a class="more-btn survey-submit-btn disabled" href="#">Take a vote</a>
                        <div class="options-btns-wrap">
                            <a href="#" class="survey-button-wrap edit-survey-button-wrap"><div class="edit-survey-button "><span>Edit</span></div></a>
                            <a href="#" class="survey-button-wrap delete-survey-button-wrap"><div class="delete-survey-button "><span>Delete</span></div></a>
                        </div>
                    </div>
                </div>
                <div class="info-block">
                    <div class="date">May 3, 2019</div>
                    <h3><a href="#">Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</a></h3>
                    <div class="more-wrap">
                        <a class="more-btn" href="#">Read more</a>
                    </div>
                </div>
                <div class="info-block">
                    <div class="date">May 3, 2019</div>
                    <h3><a href="#">Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</a></h3>
                    <div class="more-wrap">
                        <a class="more-btn" href="#">Read more</a>
                    </div>
                </div>
                <div class="info-block">
                    <div class="date">May 3, 2019</div>
                    <h3><a href="#">Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</a></h3>
                    <div class="more-wrap">
                        <a class="more-btn" href="#">Read more</a>
                    </div>
                </div>
                <div class="info-block">
                    <div class="date">May 3, 2019</div>
                    <h3><a href="#">Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</a></h3>
                    <div class="more-wrap">
                        <a class="more-btn" href="#">Read more</a>
                    </div>
                </div>
                <div class="info-block load-more-block">
                    <div class="more-wrap">
                        <a class="more-btn" href="#">Load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statisctics modal -->
    <div id="statistics-modal" class="modal-wrap statistics-modal">
        <button type="button" class="close mobile-close onlymob" onclick="closeModal()"></button>
        <div class="modal-container error-container">
            <div class="modal-header">
                <button type="button" class="close desktop-close" onclick="closeModal()"></button>
                <h3>Doloremque laudantium totam rem aperiam eaque?</h3>
            </div>
            <div class="modal-body">
                <div class="statisctics-row">
                    <div class="statitics-row-label"><p>Neque porro quisquam est qui</p></div>
                    <div class="statitics-row-content">
                        <div class="statitics-row-content-line color1" style="width: 48%"><span>48%</span></div>
                    </div>
                </div>
                <div class="statisctics-row">
                    <div class="statitics-row-label"><p>Neque porro quisquam est qui</p></div>
                    <div class="statitics-row-content">
                        <div class="statitics-row-content-line color2" style="width: 22%"><span>22%</span></div>
                    </div>
                </div>
                <div class="statisctics-row">
                    <div class="statitics-row-label"><p>Neque porro quisquam est qui</p></div>
                    <div class="statitics-row-content">
                        <div class="statitics-row-content-line color3" style="width: 40%"><span>40%</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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