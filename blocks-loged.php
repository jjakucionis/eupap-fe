<?php include 'header-loged.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("logged");
    });
</script>

<main>
    <section class="hero-blue">
        <div class="width-wrap">
            <h1>WP1</h1>
        </div>
    </section>
    <section class="info-blocks">
        <div class="width-wrap">
            <div class="flex-wrap">
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
    
    <?php include 'footer.php'; ?>