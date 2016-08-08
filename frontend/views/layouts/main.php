<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerJs('
$(function(){
    $(\'.rc\').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        prevArrow: $(\'.rl\'),
        nextArrow: $(\'.rr\'),
        responsive: [
        {
            breakpoint: 860,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
    });
});
');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <section class="header">
        <div class="stripe">
            <div class="container">
                <button></button>
                <h1>Сибирские бани</h1>
                <a class="mail" href="mailto:s.savchenko@outlook.com">s.savchenko@outlook.com</a>
                <a class="phone" href="tel:+79231409142">79231409142</a>
                <div class="clear"></div>
            </div>
        </div>
        <div class="main container">
            <div class="form">
                <form>
                    <div class="form__header">
                        Заказать сауну
                    </div>
                    <div class="form__control">
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="form__control">
                        <input type="tel" placeholder="Телефон">
                    </div>
                    <div class="form__control">
                        <input type="datetime" placeholder="Дата">
                    </div>
                    <div class="form__control">
                        <select>
                            <option>Выберите номер</option>
                            <option>Финская сауна</option>
                            <option>Русская сауна</option>
                            <option>Турецкий хамам</option>
                        </select>
                    </div>
                    <div class="form__footer">
                        <button>
                            <div>Готово</div>
                        </button>
                    </div>
                </form>
            </div>
            <p><span>Скидка 30% при заказе от 3-х часов в будние дни до 16:00</span></p>
            <div class="clear"></div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h1>Сибирские бани</h1>
            <ul>
                <li class="advantages__item"><span>Три комфортабельных номера с Русской, Финской и Турецкой парилками</span></li>
                <li class="advantages__item"><span>Разнообразное меню, включающее чайную карту, алкагольную карту, холодные и горячие закуски</span></li>
                <li class="advantages__item"><span>Бассейны с крулосуточной евроотчиткой воды</span></li>
                <li class="advantages__item"><span>Охраняемая парковка</span></li>
            </ul>
            <div class="clear"></div>
        </div>
    </section>

    <section class="rooms">
        <div class="container">
            <div class="room">
                <h2>Русская баня</h2>
                <div class="info">
                    <p>По описанию древнегреческого историка Геродота, бани скифских племён напоминали юрты. Связанные верхними концами наклонно установленные жерди обтягивали сверху войлоком. Посередине ставили котёл с отваром трав и в него бросали раскалённые камни, которые предварительно нагревали снаружи на костре. При этом образовывался влажный пар, насыщенный фитонцидами, который оказывал бактерицидное воздействие на внутреннюю атмосферу помещения. Известно, что у скифов существовала практика пользования корой деревьев, предварительно размягченной при помощи камней для очищения кожных покровов. Подобная практика гигиенических процедур позволяла поддерживать здоровье и чистоту кожи во время длительных кочевых переходов. При этом сборно-разборная конструкция их походных бань предоставляла возможность перевозить данные бани с собой в повозках и при необходимости за короткое время установить их во время стоянки. Походная баня древних скифских и сарматских племен, кочующих по северным берегам Чёрного моря считается прародительницей современных мобильных бань на основе каркасно-тентовых конструкций.</p>
                    <button>
                        <div>Заказать</div>
                    </button>
                </div>


            </div>
        </div>
    </section>

    <section class="price">
        <div class="container">
            <h2>Прайс</h2>
            <div class="price_holder">
                <table>
                    <tr>
                        <td class="left">Услуги</td>
                        <td class="day">Будние дни с 10.00 до 18.00</td>
                        <td class="night">Будние дни с 18.00 до 10.00<br>Выходные дни</td>
                    </tr>
                    <tr>
                        <td class="left bold">Русская баня</td>
                        <td>400 р/час</td>
                        <td>400 р/час</td>
                    </tr>
                    <tr>
                        <td class="left bold">Финская баня</td>
                        <td>400 р/час</td>
                        <td>400 р/час</td>
                    </tr>
                    <tr>
                        <td class="left bold">Турецкий хамам</td>
                        <td>400 р/час</td>
                        <td>400 р/час</td>
                    </tr>
                </table>
            </div>
            <p class="caption">Травяной чай в подарок каждому посетителю</p>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="rl top_arrows"></div>
            <div class="rr top_arrows"></div>
            <h2>Отзывы</h2>
            <div class="reviews_holder">
                <div class="rl bottom_arrows"></div>
                <div class="rr bottom_arrows"></div>
                <div class="rc">
                    <div>
                        <div class="review">
                            <p>Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! </p>
                            <div class="foto">
                                <img src="img/kerry.png">
                            </div>
                            <div class="stars" style="width: 57px"></div>
                            <p class="author">Филоненко Виктор, 07.03.2016</p>
                        </div>
                    </div>
                    <div>
                        <div class="review">
                            <p>Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! </p>
                            <div class="foto">
                                <img src="img/kerry.png">
                            </div>
                            <div class="stars" style="width: 57px"></div>
                            <p class="author">Филоненко Виктор, 07.03.2016</p>
                        </div>
                    </div>
                    <div>
                        <div class="review">
                            <p>Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! </p>
                            <div class="foto">
                                <img src="img/kerry.png">
                            </div>
                            <div class="stars" style="width: 57px"></div>
                            <p class="author">Филоненко Виктор, 07.03.2016</p>
                        </div>
                    </div>
                    <div>
                        <div class="review">
                            <p>Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! Хожу сюда с самого открытия и не перестаю радоваться, отличное место, большое спасибо людям, которые это все построили! </p>
                            <div class="foto">
                                <img src="img/kerry.png">
                            </div>
                            <div class="stars" style="width: 57px"></div>
                            <p class="author">Филоненко Виктор, 07.03.2016</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

            </div>
        </div>
    </section>

    <section class="map">
        <div class="container">
            <h2>Схема проезда</h2>
            <p class="caption">г.Новосибирск, Джержинский р-он, ул.Волочаевская 52</p>
            <div id="yandex_map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=_KJO--Q652qrdilHelXEEUmQUiD47BLs&amp;width=100%&amp;height=530&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
                <div class="clear"></div>
            </div>

        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="l">
                <p>&copy; Сибирские бани</p>
                <p>+7 923 140 91 42</p>
                <p>s.savchenko@outlook.com</p>
            </div>
            <div class="r">
                <p>Социальные сети</p>
                <p>Разработка сайта <a href="http://romsaweb.ru" target="_blank">romsaweb.ru</a></p>
                <p>Новосибирск, 2016</p>
            </div>
        </div>
    </section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
