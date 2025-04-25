<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alkalf
 */

?>

<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="header__logo"><a href="/" class="logo">ai<span>v</span>kalf</a></div>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="#" class="menu__link">Головна</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Для кого</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Програма</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Відгуки</a>
                        </li>
                    </ul>
                </nav>
                <div class="footer__politic">
                    <a href="#"> Політика конфіденційності</a>
                </div>
                <div class="footer__contact">
                    <ul class="contact-list">
                        <li class="own">ФОП Михайлюк Анастасія Сергіївна</li>
                        <li class="contacts">
                            <a href="tel:+380950000000">+380950000000</a>
                            <a href="mailto:testtesttest@gmail.com">testtesttest@gmail.com</a>
                        </li>
                    </ul>
                    <ul class="social-list">
                        <li class="social-item">
                            <a href="#" class="social-link">
                                <img src="./images/telegram.png" alt="">
                            </a>
                        </li>
                        <li class="social-item">
                            <a href="#" class="social-link">
                                <img src="./images/instagram.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
