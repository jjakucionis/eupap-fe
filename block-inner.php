<?php include 'header.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("inner");
    });
</script>

<main>
    <section class="hero-blue">
        <div class="width-wrap">
            <h1>News</h1>
        </div>
    </section>
    <section class="info-blocks">
        <div class="width-wrap-700">
            <div class="single-info">
                <div class="back-wrap">
                    <a class="back-btn" href="#">Go back</a>
                </div>
                <div class="date">May 3, 2019</div>
                <h3>Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et </h3>
            </div>
        </div>
            <div class="single-content">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><br>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita</p>
            </div>
            <div class="single-slider-wrap">
                <div class="single-slider">
                    <div class="slide" style="background-image: url(./src/assests/img/Gallery1.png)"></div>
                    <div class="slide" style="background-image: url(./src/assests/img/Gallery2.png)"></div>
                    <div class="slide" style="background-image: url(./src/assests/img/Gallery3.png)"></div>
                </div>
                <div class="slider-nav">
                    <div class="slide-left-buttton"></div>
                    <div class="slide-right-buttton"></div>
                </div>
            </div>
            <div class="single-content">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><br>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita</p>
            </div>
            <div class="single-video">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="single-content">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><br>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita</p>
            </div>
            <div class="full-row documents">
                <div class="flex-wrap width-wrap-850">
                    <div class="info-block">
                        <div class="date">May 3, 2019</div>
                        <h3><a href="#">Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</a></h3>
                        <div class="pdf-wrap">
                            <a class="pdf-btn" href="#">View document</a>
                        </div>
                    </div>
                    <div class="info-block">
                        <div class="date">May 3, 2019</div>
                        <h3><a href="#">Doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasilore, rchitecto beatae vitae. Dicta sunt explicabo nemo enim ipsam voluptatem.</a></h3>
                        <div class="pdf-wrap">
                            <a class="pdf-btn" href="#">View document</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <?php include 'footer.php'; ?>