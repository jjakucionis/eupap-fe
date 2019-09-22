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
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
            </div>
            <div class="single-content">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p><br>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita</p>
            </div>
            <div class="full-row">
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

    <section class="comments">
        <div class="comments-wrap">

            <div class="comments-block-head">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna?</p>
            </div>

            <div class="comment-block" id="comment-1">
                <div class="comment-content">
                    <span class="comment-name">Name surname</span>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo?</p>
                </div>
                <div class="comment-bottom">
                    <div class="comment-date">2019-04-29</div>
                    <div class="comment-reply" href="#">Reply</div>
                </div>
            </div>
            <div class="comment-form-block comment-form-block--reply" style="display: none;">
                <form action="" method="post" class="comment-form">
                    <input class="reply-text" name="comment" id="" placeholder="Reply message">
                    <div class="img_upload-tr trigger-button" data-trigger="img"></div>
                    <div class="doc_upload-tr trigger-button" data-trigger="doc"></div>
                    <input type="file" class="img_upload" name="file" data-type="img" accept="image/png, image/jpeg">
                    <input type="file" class="doc_upload" name="file" data-type="doc" accept="application/pdf,.doc,.docx">
                    <input type="submit" class="form-submit" name="new_comment" value="Send">
                </form>
            </div>

            <div class="comment-block comment-block--reply" id="">
                <div class="comment-content">
                    <span class="comment-name">Name surname</span>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo?</p>
                </div>
                <div class="comment-bottom">
                    <div class="comment-date">2 hours ago</div>
                    <div class="comment-reply" href="#">Reply</div>
                </div>
            </div>
            <div class="comment-form-block comment-form-block--reply" style="display: none;">
                <form action="" method="post" class="comment-form">
                    <input class="reply-text" name="comment" id="" placeholder="Reply message">
                    <div class="img_upload-tr trigger-button" data-trigger="img"></div>
                    <div class="doc_upload-tr trigger-button" data-trigger="doc"></div>
                    <input type="file" class="img_upload" name="file" data-type="img" accept="image/png, image/jpeg">
                    <input type="file" class="doc_upload" name="file" data-type="doc" accept="application/pdf,.doc,.docx">
                    <input type="submit" class="form-submit" name="new_comment" value="Send">
                </form>
            </div>

            <div class="comment-block comment-block--reply" id="">
                <div class="comment-content">
                    <span class="comment-name">Name surname</span>
                    <p class="comment-text"><span class="comment-reply-to">@Name surname</span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo?</p>
                </div>
                <div class="comment-bottom">
                    <div class="comment-date">40 min ago</div>
                    <div class="comment-reply" href="#">Reply</div>
                </div>
            </div>
            <div class="comment-form-block comment-form-block--reply" style="display: none;">
                <form action="" method="post" class="comment-form">
                    <input class="reply-text" name="comment" id="" placeholder="Reply message">
                    <div class="img_upload-tr trigger-button" data-trigger="img"></div>
                    <div class="doc_upload-tr trigger-button" data-trigger="doc"></div>
                    <input type="file" class="img_upload" name="file" data-type="img" accept="image/png, image/jpeg">
                    <input type="file" class="doc_upload" name="file" data-type="doc" accept="application/pdf,.doc,.docx">
                    <input type="submit" class="form-submit" name="new_comment" value="Send">
                </form>
            </div>

            <div class="comment-block" id="">
                <div class="comment-content">
                    <span class="comment-name">Name surname</span>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmo?</p>
                </div>
                <div class="comment-bottom">
                    <div class="comment-date">2019-04-29</div>
                    <div class="comment-reply" href="#">Reply</div>
                </div>
            </div>
            <div class="comment-form-block comment-form-block--reply" style="display: none;">
                <form action="" method="post" class="comment-form">
                    <input class="reply-text" name="comment" id="" placeholder="Reply message">
                    <div class="img_upload-tr trigger-button" data-trigger="img"></div>
                    <div class="doc_upload-tr trigger-button" data-trigger="doc"></div>
                    <input type="file" class="img_upload" name="file" data-type="img" accept="image/png, image/jpeg">
                    <input type="file" class="doc_upload" name="file" data-type="doc" accept="application/pdf,.doc,.docx">
                    <input type="submit" class="form-submit" name="new_comment" value="Send">
                </form>
            </div>

            <div class="comment-form-block comment-form-block--makeNew">
                <form action="" method="post" class="comment-form">
                    <input class="reply-text" name="comment" id="" placeholder="Write a comment">
                    <div class="img_upload-tr trigger-button" data-trigger="img"></div>
                    <div class="doc_upload-tr trigger-button" data-trigger="doc"></div>
                    <input type="file" class="img_upload" name="file" data-type="img" accept="image/png, image/jpeg">
                    <input type="file" class="doc_upload" name="file" data-type="doc" accept="application/pdf,.doc,.docx">
                    <input type="submit" class="form-submit" name="new_comment" value="Send">
                </form>
            </div>

        </div>
    </section>
    
    <?php include 'footer.php'; ?>