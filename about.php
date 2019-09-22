<?php include 'header.php'; ?>

<script> //tai galima per back'ą padaryti. headeriui vidiniuose puslapiuose uždėt klasę "inner", nebūnant prisiloginusiu
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByClassName("header")[0].classList.add("inner");
    });
</script>

<main>
    <section class="hero-blue">
        <div class="width-wrap">
            <h1>About us</h1>
        </div>
    </section>
    <section class="section-about">
        <div class="container">
            <div class="about-row img-left">
                <div class="about-img" style="background-image: url(../src/assests/img/img.png)"></div>
                <div class="about-text">
                    <h2>Quia voluptas</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p><br>
                    <p>Quia voluptas sit aspernatur aut odit autero fugited quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
            <div class="about-row img-right">
                <div class="about-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p><br>
                    <p>Quia voluptas sit aspernatur aut odit autero fugited quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="about-img" style="background-image: url(../src/assests/img/Gallery3.png)"></div>
            </div>
            <div class="about-row slogan">
                    <p>Quia voluptas sit aspernatur odit autero fugited quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur lorem.</p>
            </div>
            <div class="about-row img-left">
                <div class="about-img" style="background-image: url(../src/assests/img/img.png)"></div>
                <div class="about-text">
                    <h2>Quia voluptas</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p><br>
                    <p>Quia voluptas sit aspernatur aut odit autero fugited quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
            <div class="about-row img-right">
                <div class="about-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p><br>
                    <p>Quia voluptas sit aspernatur aut odit autero fugited quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
                <div class="about-img" style="background-image: url(../src/assests/img/Gallery3.png)"></div>
            </div>
        </div>
        <div class="about-row slogan quote">
            <p>Quia voluptas sit aspernat aut odit autero fugited quia consequ magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam est qui dolorem</p>
            <div class="author">- John Smith, member of EUPAP</div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>