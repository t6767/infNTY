<?php get_header(); ?>
        <!-- App Main Begin -->
        <main role="main" class="app__main">

            <!-- Page Begin -->
            <div class="page">

                <!-- Page Header Begin -->
                <div class="page__header" style="background-image: url('<?php bloginfo('template_url'); ?>/static/img/content/header-bg.jpg')">
                    <div class="container">
                        <div class="page__header-title typed-effect">
                            <div id="js-typed-strings">
                                <p>Контакты</p>
                            </div>
                        </div>
                        <ul class="breadcrumbs">
                            <li class="breadcrumbs__item">
                                <a href="/" class="breadcrumbs__link">Главная</a>
                            </li>
                            <li class="breadcrumbs__item">
                                Контакты
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/. Page Header End -->

                <!-- Page Content Begin -->
                <div class="page__content">
                    <div class="container">
                        <div class="contacts2">
                            <div class="row no-gutters">
                                <div class="col-lg-4">
                                    <div class="contacts2__left">
                                        <form class="form">
                                            <h2 class="form__title">Написать нам</h2>
                                            <div class="control">
                                                <input type="text" id="kontaktpagename" name="name" class="control__input" placeholder="Имя">
                                            </div>
                                            <div class="control">
                                                <input type="text" onblur="ph(document.getElementById('kontaktpagephone').value)" id="kontaktpagephone" name="phone" class="control__input" placeholder="+7 (***) ***-**-**">
                                            </div>
                                            <div class="control">
                                                <input type="text" onblur="ff(document.getElementById('kontaktpageemail').value)" id="kontaktpageemail" name="email" class="control__input" placeholder="Email">
                                            </div>
                                            <div class="control mt-md-3">
                                                <textarea id="kontaktpagemessage" class="control__input -textarea" placeholder="Сообщение"></textarea>
                                            </div>
                                            <div class="text-center mt-4">
                                                <button id="buttonsendd" type="button" onclick="getAjaxContactForm('2', document.getElementById('kontaktpagename').value, document.getElementById('kontaktpagemessage').value, document.getElementById('kontaktpagephone').value, document.getElementById('kontaktpageemail').value);" class="button -bordered form__button" data-target="#modal-3" data-toggle="modal" disabled>отправить</button>
                                            </div>
                                        </form>
                                        <div class="contacts2__info">
                                            Республика Казахстан, г. Алматы, пр. Достык 117/6, 6 этаж
                                            <br>Почтовый индекс: 050059
                                            <br>+7 (727) 262 08 26
                                            <br>info@infin-it.kz
                                        </div>
                                        <ul class="social contacts2__social">
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
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="contacts2__map">
                                        <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940001487142/center/76.956892,43.22389/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.956892,43.22389/zoom/16/routeTab/rsType/bus/to/76.956892,43.22389╎Prime Source, информационно-внедренческая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Prime Source, информационно-внедренческая компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":"100%","borderColor":"#a3a3a3","pos":{"lat":43.22389,"lon":76.956892,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"9429940001487142"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/. Page Content End -->

            </div>
            <!--/. Page End -->

        </main>
        <!--/. App Main End -->
    <script>
        function ff(value) {
            var OK = emailpattern.exec(value);
            if (!OK) {
                email=0;
                alert("Введите корректный email");
            }
            else
                email=1;
            checkbutton();
        }

        function ph(value) {
            var OK = phonepatern.exec(value);
            if (!OK) {
                tel=0;
                alert("Введите корректный телефон");
            }
            else
                tel=1;
            checkbutton();
        }

        function checkbutton() {
            if(email==1 && tel==1) document.getElementById('buttonsendd').disabled = false; else document.getElementById('buttonsendd').disabled = true;
        }
        var emailpattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
        var phonepatern = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
        var email=0;
        var tel=0;
        var name=document.getElementById('kontaktpagename').value;

    </script>
<?php get_footer(); ?>