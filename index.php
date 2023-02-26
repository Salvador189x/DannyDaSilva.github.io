<?php require('./layout/header.php') ?>
    
    <main>
        <section class="contenedor-conteudo-inicio">
            <div class="content-biography">
                <div class="content-foto">
                    <img src="imagens/perfil-danny.jpg" alt="Foto de Danny da Silva">
                </div>
                <div>
                    <h2>Danny da Silva</h2>
                </div>
                <div>
                    <small>Ginecologo y Obstetra</small>
                    <p>TEXTO AQUI</p>
                </div>
            </div>
            <article>
                <div class="content">
                    <div class="slides">
                        <input type="radio" name="slide" id="slide1" checked>
                        <input type="radio" name="slide" id="slide2">
                        <input type="radio" name="slide" id="slide3">

                        <div class="slide s1">
                            <a href="#"><img src="imagens/img1.jpg" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="imagens/img2.jpg" alt=""></a>
                        </div>
                        <div class="slide">
                            <a href="#"><img src="imagens/img4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="navigation">
                        <label class="bar" for="slide1"></label>
                        <label class="bar" for="slide2"></label>
                        <label class="bar" for="slide3"></label>
                    </div>
                </div>
            </aticle>
        </section>
    </main>

<?php require('./layout/footer.php') ?>