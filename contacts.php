<?php include 'header.php'; ?>
<main>
    <section class="hero-blue">
        <div class="width-wrap">
            <h1>Drop us a line</h1>
        </div>
    </section>
    <div class="width-wrap">
        <div class="flex-wrap">
            <section class="form-block">
                <form method="post">
                    <div class="flex-wrap">
                        <div class="input">
                            <input type="text" maxlength="30" name="firstname" placeholder="Your name" required>
                            <span class="alert">Please enter your name</span>
                        </div>
                        <div class="input ">
                            <input type="email" name="email" placeholder="E-mail" required>
                            <span class="alert">Please enter your email</span>
                            <span class="alert-2">Wrong email address</span>
                        </div>
                    </div>
                    <div class="input">
                        <textarea class="textarea" type="textarea" name="interest" placeholder="Your message here ..."></textarea>
                        <span class="alert">Įrašykite kas Jus domina</span>
                    </div>
                    <div class="group">
                        <span class="alert alert--group">Lorem ipsum dolor sit amet, consetetur sadipscing</span>
                        <div class="checkbox">
                            <label><input type="checkbox" name="acceptance" value="1" aria-invalid="false" class="acceptance" id="acceptance">Sutinku su <a class="privacy-trigger" href="#">privatumo politikos</a> taisyklėmis.
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="submit wideInput">
                            <input type="button" value="Send message" class="btn submit" id="submit" onclick="validation()">
                        </div>
                    </div>
                </form>
            </section>
            <section class="contacts-block">
                <div class="contacts-row">
                    <div class="contacts-column contacts-column--left">A:</div>
                    <div class="contacts-column contacts-column--right"><p>Pylimo str. 3,<br>LT-01117 Vilnius,<br>Lithuania</p></div>
                </div>
                <div class="contacts-row">
                    <div class="contacts-column contacts-column--left">T:</div>
                    <div class="contacts-column contacts-column--right"><a href="tel:+37069743177" data-link>+370 697 43 177</a></div>
                </div>
                <div class="contacts-row">
                    <div class="contacts-column contacts-column--left">E:</div>
                    <div class="contacts-column contacts-column--right"><a href="mailto:info@eupap.com" data-link>info@eupap.com</a></div>
                </div>
            </section>
        </div>
    </div>

    <!-- Success modal -->
    <div id="success-modal" class="modal-wrap success-modal alert">
        <button type="button" class="close mobile-close" onclick="closeModal()"></button>
        <div class="modal-container success-container">
            <div class="modal-header">
                <button type="button" class="close desktop-close" onclick="closeModal()"></button>
                <img src="./src/assests/img/icon_success.svg"> 
            </div>
            <div class="modal-body">
                <p>Thank you! Your message has been sent successfully.</p>
            </div>
        </div>
    </div>

    <!-- Error modal -->
    <div id="error-modal" class="modal-wrap error-modal alert">
        <button type="button" class="close mobile-close" onclick="closeModal()"></button>
        <div class="modal-container error-container">
            <div class="modal-header">
                <button type="button" class="close desktop-close" onclick="closeModal()"></button>
                <img src="./src/assests/img/icon_error.svg">  
            </div>
            <div class="modal-body">
                <p>Ooops. Your message was not sent. Try again.</p>
            </div>
        </div>
    </div>

</main>
<script type="text/javascript" src="./src/assests/js/jquery.min.js"></script>
<script type="text/javascript" src="./src/assests/plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="./src/assests/plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="./src/assests/plugins/dropzone.js"></script>
<script type="text/javascript" src="./src/assests/plugins/Trumbowyg-master/dist/trumbowyg.min.js"></script>
<script type="text/javascript" src="./src/assests/plugins/Trumbowyg-master/dist/plugins/upload/trumbowyg.upload.min.js"></script>
<script type="text/javascript" src="./src/assests/plugins/Trumbowyg-master/dist/plugins/pasteembed/trumbowyg.pasteembed.min.js"></script>
<script type="text/javascript" src="./src/assests/plugins/Trumbowyg-master/dist/plugins/table/trumbowyg.table.min.js"></script>
<script type="text/javascript" src="./src/assests/js/scripts-min.js"></script>

<script> 
    $('body').addClass('background-mainblue'); // šitą klasę iš backo galima uždėti
</script>

</body>
</html>