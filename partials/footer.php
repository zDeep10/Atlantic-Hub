<?php
$current_page =  $_SERVER['REQUEST_URI'];

$home = get_stylesheet_directory_uri();

if ($current_page == "/index.php" or $current_page == '/' or $current_page == "/quero-conhecer-portugal/" or $current_page == "/ja-decidi-e-quero-avancar/" or $current_page == "/ja-estou-em-portugal-e-quero-tracionar/") : ?>
    <!-- CONTATO -->
    <!-- <section id="contato" class="py-5 py-md-0 position-relative d-flex align-items-center">
        <figure class="mb-0 d-none d-md-block">
            <img loading="lazy" class="img-fluid d-none d-md-block position-absolute thumb_desk" src="<?php echo $home ?>/assets/images/banner_contato_desk.png" alt="Thumb contato">
            <div class="box d-md-none"></div>
        </figure>

        <h2 class="h1 d-none position-absolute translate-middle-x start-50 top-0">QUER FALAR COM <br class="d-md-none"> ESPECIALISTA <br class="d-none d-md-block"> PARA A INTERNACIONALIZAÇÃO?</h2>

        <div class="container px-4 py-5 py-md-0">
            <div class="row align-items-md-center justify-content-end">
                <div class="col-12 col-md-6 mb-5 mb-md-0">
                    <h2 class="h1 d-md-none">QUER FALAR COM <br> ESPECIALISTA PARA A INTERNACIONALIZAÇÃO?</h2>
                    <figure class="h-md-100 w-md-100 m-md-0 ">
                        <img loading="lazy" class="img-fluid d-md-none" src="<?php echo $home ?>/assets/images/banner_contato.png" alt="Thumb contato">
                    </figure>
                </div>

                <div class="col-12 col-md-6">
                    <form>
                        <div class="mb-3">
                            <input placeholder="Nome Completo*" type="text" class="form-control bg-transparent" id="name" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Seu e-mail*" type="email" class="form-control bg-transparent" id="email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-4">
                            <input placeholder="Telefone*" type="tel" class="form-control bg-transparent" id="tel" aria-describedby="nameHelp">
                        </div>

                        <select class="form-select mb-5 px-2" aria-label="Motivo do contato">
                            <option selected>Motivo do contato</option>
                            <option value="motivo1">motivo1</option>
                            <option value="motivo2">motivo2</option>
                            <option value="motivo3">motivo3</option>
                        </select>

                        <div class="mb-3">
                            <textarea class="form-control bg-transparent" placeholder="Mensagem*" id="mensagem" style="height: 100px"></textarea>
                        </div>

                        <button type="submit" class="bg-transparent border-0 btn d-flex align-items-center">
                            ENVIAR
                            <img loading="lazy" class="img-fluid ms-3" src="<?php echo $home ?>/assets/icons/seta-direita-contato.svg" alt="Seta Direita">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CONTATO -->
    <section id="contato" class="d-lg-none d-block bg-light py-4">
        <div class="container px-4 py-5">
            <div class="row px-3">
                <div class="col-12">
                    <h2 class="text-secondary">QUER FALAR COM ESPECIALISTA PARA A INTERNACIONALIZAÇÃO?</h2>
                    <figure class="position-relative mb-0">
                        <img loading="lazy" class="img-cover" src="<?= $home; ?>/assets/images/thumb-contato.jpg" alt="Thumb contato">
                        <div class="mask-contato"></div>
                        <div class="box"></div>
                    </figure>
                </div>

                <div id="form-candidatura" class="col-12 mt-5">
                    <form>
                        <div class="mb-3">
                            <input placeholder="Nome Completo*" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Seu e-mail*" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <input placeholder="Telefone*" type="tel" class="form-control" id="tel" aria-describedby="nameHelp">
                        </div>

                        <select class="form-select mb-3" aria-label="Motivo do contato">
                            <option selected>Motivo do contato</option>
                            <option value="motivo1">motivo1</option>
                            <option value="motivo2">motivo2</option>
                            <option value="motivo3">motivo3</option>
                        </select>

                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Mensagem*" id="mensagem" style="height: 100px"></textarea>
                        </div>

                        <button type="submit" class="btn text-primary d-flex justify-content-lg-end align-items-center bg-transparent text-uppercase me-auto px-0 pt-0">
                            Enviar
                            <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                                arrow_right_alt
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="d-lg-block d-none bg-light">
        <div class="container-fluid p-0">
            <div class="row align-items-center w-100 mx-0 px-0">
                <div class="col-4 px-0">
                    <figure class="position-relative mb-0">
                        <img loading="lazy" class="img-cover" src="<?= $home; ?>/assets/images/thumb-contato.jpg" alt="Thumb contato">
                        <div class="mask-contato"></div>
                        <div class="box" style="width: 62px; height: 62px; right: -1.75rem !important; left: auto !important; bottom: 5rem;"></div>
                    </figure>
                </div>
                <div class="col-6 ms-3" style="z-index: 1;">
                    <h2 class="text-secondary d-flex h2 mb-3" style="margin-left: -5rem;">QUER FALAR COM ESPECIALISTA<br> PARA A INTERNACIONALIZAÇÃO?</h2>
                    <div id="form-candidatura" class="col-10 mt-5 ms-4">
                        <form>
                            <div class="row">
                                <div class="col mb-3">
                                    <input placeholder="Nome Completo*" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                                </div>

                                <div class="col mb-3">
                                    <input placeholder="Seu e-mail*" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col mb-3">
                                    <input placeholder="Telefone*" type="tel" class="form-control" id="tel" aria-describedby="nameHelp">
                                </div>

                                <select class="col form-select mb-3" aria-label="Motivo do contato">
                                    <option selected>Motivo do contato</option>
                                    <option value="motivo1">motivo1</option>
                                    <option value="motivo2">motivo2</option>
                                    <option value="motivo3">motivo3</option>
                                </select>
                            </div>

                            <div class="mb-2">
                                <textarea class="form-control" placeholder="Mensagem*" id="mensagem" style="height: 100px"></textarea>
                            </div>

                            <button type="submit" class="btn text-primary d-flex justify-content-lg-end align-items-center bg-transparent text-uppercase ms-auto px-0 pt-0">
                                Enviar
                                <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                                    arrow_right_alt
                                </span>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php endif ?>
</main>

<!-- FOOTER -->
<footer id="footer" class="pt-5">
    <div class="container px-4 pt-4 pb-5">
        <!-- ENDERECO E SOCIAL -->
        <div class="row space d-md-none">
            <div class="col">
                <figure class="logo space">
                    <img loading="lazy" class="img-fluid" width="170px" src="<?php echo $home ?>/assets/images/logo-atlantic-footer.png" alt="Logo Atlantic">
                </figure>

                <div class="endereco space lh-1 small text-white-footer">
                    <p>Contato: +351 910 297 331</p>
                    <p>Edifício Parque Oceano, Av. Marginal 2 4º</p>
                    <p>A, 2780-337 Lisboa, Portugal</p>
                </div>

                <figure class="social d-flex gap-3 mb-0">
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook-footer.svg" alt="Logo facebook">
                    </a>
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram-footer.svg" alt="Logo Instagram">
                    </a>
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/youtube-footer.svg" alt="Logo Youtube">
                    </a>
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter-footer.svg" alt="Logo Twitter">
                    </a>
                </figure>
            </div>
        </div>
        <!-- NAVEGACAO -->
        <div class="row space d-md-none">
            <div class="col">
                <nav class="d-flex flex-column lh-lg">
                    <a href="" class="text-white-footer">Home</a>
                    <a href="" class="text-white-footer">Quem Somos</a>
                    <a href="" class="text-white-footer">Estudo de Mercado</a>
                    <a href="" class="text-white-footer">Blog</a>
                    <a href="" class="text-white-footer">Contato</a>
                    <a href="" class="text-white-footer">Vagas</a>
                </nav>
            </div>
        </div>

        <!-- DESKTOP -->
        <div class="row d-none d-md-flex py-5">
            <div class="col-6">
                <div class="d-flex gap-3">
                    <figure class="logo space">
                        <img loading="lazy" class="img-fluid" width="180px" src="<?php echo $home ?>/assets/images/logo-atlantic-footer.png" alt="Logo Atlantic">
                    </figure>

                    <div class="endereco space lh-1 small text-white-footer">
                        <p>Contato: +351 910 297 331</p>
                        <p>Edifício Parque Oceano, Av. Marginal 2 4º</p>
                        <p>A, 2780-337 Lisboa, Portugal</p>
                    </div>
                </div>

                <figure class="social d-flex gap-3 mb-0">
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook-footer.svg" alt="Logo facebook">
                    </a>
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram-footer.svg" alt="Logo Instagram">
                    </a>
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/youtube-footer.svg" alt="Logo Youtube">
                    </a>
                    <a href="" target="_blank">
                        <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter-footer.svg" alt="Logo Twitter">
                    </a>
                </figure>
            </div>

            <div class="col-6">
                <nav class="d-flex flex-column lh-lg ms-auto w-25">
                    <a href="" class="text-white-footer">Home</a>
                    <a href="" class="text-white-footer">Quem Somos</a>
                    <a href="" class="text-white-footer">Estudo de Mercado</a>
                    <a href="" class="text-white-footer">Blog</a>
                    <a href="" class="text-white-footer">Contato</a>
                    <a href="" class="text-white-footer">Vagas</a>
                </nav>
            </div>
        </div>

        <!-- DIREITOS -->
        <div class="row pb-md-5">
            <div class="col">
                <p class="text-white-footer"><strong class="text-white letter">Atlantic Hub |</strong> © Copyright 2022 - Todos Os Direitos Reservados</p>
                <div class="d-flex align-items-center">
                    <strong class="text-white me-2 letter">Desenvolvido por</strong>
                    <a href="https://blackbeans.com.br/" target="_blank"><img class="mb-1" loading="lazy" src="<?php echo $home ?>/assets/icons/logo-blackbeans.png" alt="Logo Black Beans"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg_desk">
        <!-- PATROCINEO -->
        <div class="row patrocineo px-3 px-md-5 py-5 py-md-3">
            <figure class="col mb-0 text-primary d-md-flex align-items-center">
                <div class="d-flex align-items-center mb-4 mb-md-0">
                    <p class="me-3 mb-0">
                        Certificação:
                    </p>
                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/logo_iapmei.png" alt="Logo IAPMEI">
                </div>
                <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">
                        Membro:
                    </p>
                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/logo_camara.png" alt="Logo Câmara">
                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/logo_footer1.png" alt="Logo Câmara Municipal">
                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/logo_footer2.png" alt="Logo Rio Grande">
                </div>
            </figure>
        </div>
    </div>
</footer>

<script src="https://webapp355388.ip-192-155-89-190.cloudezapp.io/wp-content/themes/atlantichub/vendor/js/main.js"></script>
</body>

</html>