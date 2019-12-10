
<!-- Footer Begin -->
<footer class="footer">
    <div class="container">
        <div class="row" vertical-gutter="40">
            <div class="col-sm-6 col-lg-3">
                <div class="footer__title">о нас</div>
                <?php
                $foterMenue1=wp_nav_menu(array('menu' => 'footermenue1', 'menu_class' => 'footermenue1', 'echo'=> false));
                $foterMenue1 = str_replace("navigation__link", "footer__link", $foterMenue1);
                echo $foterMenue1;
                ?>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer__title">Решения</div>
                <?php
                $foterMenue1=wp_nav_menu(array('menu' => 'footermenue2', 'menu_class' => 'footermenue1', 'echo'=> false));
                $foterMenue1 = str_replace("navigation__link", "footer__link", $foterMenue1);
                echo $foterMenue1;
                ?>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="footer__title">пресс-центр</div>
                <?php
                $foterMenue1=wp_nav_menu(array('menu' => 'footermenue3', 'menu_class' => 'footermenue3', 'echo'=> false));
                $foterMenue1 = str_replace("navigation__link", "footer__link", $foterMenue1);
                echo $foterMenue1;
                ?>
                <a href="#" data-target="#modal-cta" data-toggle="modal" class="footer__link">Контакт с PR-службой</a>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer__title">контакты</div>
                <p>+7 (727) 232 22 22
                    <br>Алматы</p>
                <ul class="social footer__social">
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#" class="social__link">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>
                <img src="<?php bloginfo('template_url'); ?>/static/img/general/logo2.svg" class="footer__logo" alt="">
                <p>Все права защищены
                    <br>2019 год</p>
            </div>
        </div>
    </div>
</footer>
<!--/. Footer End -->

</div>
<!--/. App Wrapper End -->

</div>
<!--/. App End -->

<!-------------------------------- CONTENT ENDS HERE -------------------------------->

<!-- Modals Begin -->
<noindex>

    <!-- Modal Cta Begin -->
    <div id="modal-cta" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&#10005;</span>
                </button>
                <form class="form">
                    <h2 class="form__title">Связаться с нами</h2>
                    <div class="control">
                        <input type="text" name="name" class="control__input" placeholder="Имя">
                    </div>
                    <div class="control">
                        <input type="text" name="company" class="control__input" placeholder="Компания">
                    </div>
                    <div class="control">
                        <input type="text" name="phone" class="control__input" placeholder="+7 (***) ***-**-**">
                    </div>
                    <div class="control">
                        <input type="text" name="email" class="control__input" placeholder="Email">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="button -bordered form__button">отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/. Modal Cta End -->

    <!-- Modal Success Begin -->
    <div id="modal-success" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&#10005;</span>
                </button>
                <div class="modal__success">
                    <h2 class="modal__title">Спасибо!</h2>
                    <div class="modal__subtitle">Наш менеджер перезвонит Вам!</div>
                </div>
            </div>
        </div>
    </div>
    <!--/. Modal Success End -->

    <!-- Modal Iframe Begin -->
    <div id="iframe-modal" class="modal bm-modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <div class="bm-modal__embed">
                        <iframe class="bm-modal__embed-item jsBmEmbedItem" frameborder="0" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/. Modal Iframe End -->

</noindex>
<!--/. Modals End -->

<!-- Main scripts. You can replace it, but I recommend you to leave it here -->
<script src="<?php bloginfo('template_url'); ?>/static/js/main.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/static/js/separate-js/scripts.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</div>
<?php wp_footer(); ?>

</body>

</html>
