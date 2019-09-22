<?php include 'header.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("inner");
    });
</script>

<main>
    <section class="page_not_found">
        <div class="width-wrap">
            <div class="page_not_found-container center-vertical">
                <p class="line-main">404</p>
                <p class="line-sub">Page not found</p>
                <p class="line-text">We couldn’t find the page you were looking for. </p>
                <div class="flex-wrap">
                    <div class="page_not_found-btn">
                        <a href="#">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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