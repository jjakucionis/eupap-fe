<?php include 'header.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("inner");
    });
</script>

<main>
    <section class="hero-blue centered">
        <div class="width-wrap">
            <h1>Sign in to continue</h1>
        </div>
    </section>
    <div class="width-wrap">
        <section class="signin">
            <form method="post" id="singInForm">
                <div class="input input-wrap cont">
                    <label>User name</label><br>
                    <input type="text" maxlength="50" name="username" required>
                    <span class="alert">Enter user name</span>
                </div>
                <div class="input input-wrap cont">
                    <label>Password</label><br>
                    <input type="password" name="password" required>
                    <span class="alert">Enter your password</span>
                </div>
                <div class="group">
                    <div class="submit wideInput">
                        <input type="button" value="Sign in" class="btn submit" id="submit" onclick="signValid()">
                    </div>
                </div>
            </form>    
        </section>
    </div>

    <!-- Success modal -->
    <div id="success-modal" class="modal-wrap success-modal alert">
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