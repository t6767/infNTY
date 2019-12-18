<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <!-- App Main Begin -->
    <main role="main" class="app__main">

        <!-- Page Begin -->
        <div class="page">

            <!-- Page Header Begin -->
            <div class="page__header" style="background-image: url('static/img/content/header-bg.jpg')">
                <div class="container">
                    <div class="page__header-title typed-effect">
                        <div id="js-typed-strings">
                            <p>Новости</p>
                        </div>
                    </div>
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item">
                            <a href="/" class="breadcrumbs__link">Главная</a>
                        </li>
                        <li class="breadcrumbs__item">
                            Ошибка 404
                        </li>
                    </ul>
                </div>
            </div>
            <!--/. Page Header End -->

            <!-- Page Content Begin -->
            <div class="page__content">
                <div class="container">
                    <div class="not-found">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="not-found__title">Ой!</div>
                                <h3>Похоже, мы не можем найти<br>нужную вам страницу</h3>
                                <h5>Код Ошибки: 404</h5>
                                <p>
                                    Вот несколько полезных ссылок:
                                    <br>
                                    <a href="/">Главная</a>
                                    <br>
                                    <a href="/?s=123321">Поиск по сайту</a>
                                    <br>
                                    <a href="/novosti/">Новости</a>
                                </p>
                            </div>
                            <div class="col-md-6 text-center">
                                <img src="<?php bloginfo('template_url'); ?>/static/img/general/not-found.svg" alt="">
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
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'tendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {	
    //Server settings
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.novec.kz';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreplay@novec.kz';                     // SMTP username
    $mail->Password   = 'timur777999';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	$mail->Port       = 25;	// TCP port to connect to
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	
    //Recipients
    $mail->setFrom('noreplay@novec.kz', 'Mailer');
    $mail->addAddress('t6767@mail.ru', 'Joe User');     // Add a recipient
    //$mail->addReplyTo('t6767@mail.ru', 'Information');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<?php
get_footer();
?>