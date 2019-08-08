<?php /** @var $ui \app\components\UI */ ?>
<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-222639-8lkU';</script>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php echo $ui->pageTitle ? $ui->pageTitle : app()->paramManager->getParamValue('site_name'); ?></title>
        <meta name="yandex-verification" content="415801c9d8938ac1" />

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <?php
        $leha = stristr($_SERVER['REQUEST_URI'], '?page', true);
        if ($leha != false) {
            echo '<link rel="canonical" href="' . $leha . '" />';
        }

        if (isset($_GET['num'])) {
            //header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . stristr($_SERVER['REQUEST_URI'], '?', true));
            exit();
        }

        $printed = 0;

        if (strpos($_SERVER['REQUEST_URI'], '/kuhni/fasady-krashenye')) {
            echo ("<script>(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=o4CXB9fNZFxhjcZ6LFAUpyYoJlOmCLRopQTdpouZXSucyTYppeefJbyOL0OJ//PN1QVEeIDzAwCYeDwg/PgdLuPv3/RHkZxJ2M8NAh/F/HxTiVPlRRTv6Bmtut3Kx6DiDUiMwxQc64XOYmrElM2YrkhssJEL3I05WQLcXahUs*0-';</script>");
            $printed = 1;
        } elseif (strpos($_SERVER['REQUEST_URI'], '/kuhni/fasady-massiv')) {
            echo ("<script>(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=cpxo4lnZAHmHB97tHccwAccaj0yCTZ82OEzYK3LxMjq74KDdsvNYiwNQvgojF2AFrbewDh9LkJWacJAlR939tus/jNmUGYIY/6hVlw5g8GozSgaWJ4WC4n/pQvBlTyxeYBIvgwGoNgKEtfFwkstBDFtngUt8OXIiK84hVoGzN1Q-';</script>");
            $printed = 1;
        } elseif (strpos($_SERVER['REQUEST_URI'], '/kuhni/fasady-plenochnye')) {
            echo ("<script>(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=xAcnIloc16YOAMxxcHV6YGQFmJSI8EurybLOUCJ2LZkpGdafr4XThZFW*e5*cX0Z0JiWqEX8dheY01R6737QpwFpMKDJ3RGnSImovp0HBw94oDo8MkXV1fa/b2VWsuz8P8P6vWwmfBbZzsYFV3WZZCwAL99ottHUnr/Zj7josaM-';</script>");
            $printed = 1;
        } elseif (strpos($_SERVER['REQUEST_URI'], '/kuhni') && $printed == 0) {
            echo ("<script>(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=zW8NupJUQdybqibhXj5EiWB/VcZcx0B2tNfi6i5mbaPAOw38P/webRzky84KNCmorOfdTnINyoGgowxiPK/3l8xS98q8S3p7*UK2p6MbZMrOfjrvXtdfxo9Mv3iU1rXVXYw**NwYwTydRh9RaNdn442n9Bym8xQ9Mo0Dtk9q5xY-';</script>");
        }

        ///var_dump($_SERVER['REQUEST_URI']);
        ?>
        <link href="/themes/main/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo $ui->getThemeFileUrl('css/style.css?v34'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $ui->getThemeFileUrl('css/jquery.countdown.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $ui->getThemeFileUrl('css/jquery.fancybox.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $ui->getThemeFileUrl('css/main.css'); ?>" />

        <script src="/themes/main/js/bootstrap.min.js"  ></script>        
        <script async  src="//yandex.st/share/share.js" charset="utf-8"></script>
        <script  src="/themes/main/js/jquery.inputmask.js" charset="utf-8"></script>
        <script>
            $(document).ready(function () {
                $("#app_modules_consult_models_Form_phone").inputmask("+7(999)999-99-99");
                $("#app_modules_price_models_Form_phone").inputmask("+7(999)999-99-99");
            })
        </script>
    </head>
    <!--[if IE 7]><body class="ie ie7"><![endif]-->
    <!--[if IE 8]><body class="ie ie8"><![endif]-->
    <!--[if IE 9]><body class="ie ie9"><![endif]-->
    <!--[if (gt IE 9)|!(IE)><!--><body><!--<![endif]-->
<?php include_once("usertracking.php") ?>
<?php
$ui->widget('consult:components\FormWidget');
$ui->widget('price:components\FormWidget');
$ui->widget('request:components\FormWidget');
$ui->widget('otziv:components\FormWidget');
$ui->widget('quest:components\FormWidget');
?>

        <div id="content">

            <div id="main">
                <header class="vcard">
                    <div style="display: none;">
                        <span class="category">Студия мебели и дизайна</span>
                        <span class="fn org">Палаццо</span>
                    </div>
                    <div class="logo">
<?php
if (Yii::app()->request->requestUri !== '/') {
    ?>
                            <a href="/">
<?php } ?>
                            <img src="<?php echo $ui->getThemeFileUrl('images/logo-new.png'); ?>" alt=""/>
                        <?php
                        if (Yii::app()->request->requestUri !== '/') {
                            ?>
                            </a>
                            <?php } ?>
                    </div>
                   <!-- <div class="verh"><br>TEST</div> -->           
                    <div class="head-top">
                        <div class="head-top__left fl-el or1">
                            <img src="/themes/main/images/znaks.png"  alt="знак" />
                            <div class="head-top__left_adr">Кострома,<br />ул. Северной правды, 35</div>
                            <div class="head-top__left_m">
                                <a href=""><i class="fa fa-align-justify" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="head-top__center fl-el or2">
                            <div class="fl-el_logo">
                                <a href="/">
                                    <img src="/themes/main/images/logos.png" alt="Logo">
                                </a>
                            </div>
                        </div>

                        <div class="head-top__right fl-el or3">
                            <div class="contacts-tel">
                                <img src="/themes/main/images/tlfs.png" alt="">
                                <a class="tel" href="tel:+74942501621">+7 (4942) 501-621</a>
                            </div>
                            <div class="fl-el_soc">
                                <span>напишите нам</span>
                                <span class="soc-icon">
                                    <a href="//vk.com/palazo" target="_blank"  title="vk">
                                        <i class="fa fa-vk" aria-hidden="true"></i>
                                    </a>

                                    <a href="https://www.facebook.com/palazo.ru" target="_blank" title="facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <!--<a href="" target="_blank">
                                            <i class="fa fa-telegram" aria-hidden="true"></i>
                                    </a>-->
                                    <a href="viber://chat?number=79103706670" target="_blank" title='viber'>
                                        <i class="fa fa-whatsapp viber" aria-hidden="true"></i>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?phone=79103706670" target="_blank" title='whatsapp'>
                                        <i class="fa fa-whatsapp whatsapp" aria-hidden="true"></i>
                                    </a>

                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="operator">
                        <a id="consult" href="#" onclick="yaCounter23325040.reachGoal('CALL'); return true;">Заказать консультацию</a>
                    </div>

                    <nav id="top">
                        <div class="m-close">x</div> 
<?php
ob_start();
$ui->widget('base:components\PageMenu', array(
    'pages' => array(1 => array('title' => 'Главная', 'pages' => array()), 2 => array('disable' => true), 3, 18, 191 => array(), 5),
    'maxDepth' => 1,
));
$pop = ob_get_clean();

//$pop = preg_replace('#\<a href="(.*)catalog"(.*)</a>#','<span>Каталог</span>',$pop);

$pop = preg_replace('#\<a href="(.*)nashi-raboty"(.*)</a>#', '<a href="$1' . 'nashi-raboty"$2</a>', $pop);
//	$pop = preg_replace('#\<a href="(.*)nashi-raboty"(.*)</a>#','',$pop);
//$pop = preg_replace('preg_replace("/\<li(.*?)\>(.*?)(\<\/li\>|\>\<\/li\>\n)/s", "<span class="razdel"><li$1>$2$3</span>"',$pop);
echo $pop;
?>
                    </nav>

                </header>


                <div id="body">
                        <?php echo $content; ?>
                </div>


                <footer>
                    <div class="copy">
                        <p>&copy; <?php echo date('Y'); ?>, студия «Палаццо»</p>
                        <p>Все права защищены.</p>
                        <div class="counter">
                            <img src="<?php echo $ui->getThemeFileUrl('images_dummy/counter-img.png'); ?>" alt=""/>
                        </div>
                        <p><a style="color:#141414" href="/sitemap">Карта сайта</a></p><!---->
                    </div>
                    <div class="menu menu1">
                            <?php
                            $ui->widget('base:components\PageMenu', array(
                                'items' => array(
                                    array('label' => 'Каталог продукции', 'url' => '/catalog'),
                                ),
                                'rootPage' => 3,
                                'maxDepth' => 1,
                            ));
                            ?>
                    </div>
                    <div class="menu menu2">
                        <?php
                        $ui->widget('base:components\PageMenu', array(
                            'pages' => array(9, 8, 386, 7),
                            'maxDepth' => 0,
                        ));
                        ?>
                    </div>
                    <div class="menu menu3">
                        <?php
                        $ui->widget('base:components\PageMenu', array(
                            'pages' => array(1 => 'Главная', 2, 3, 4, 5),
                            'maxDepth' => 0,
                        ));
                        ?>
                    </div>
                </footer>
                
  
                
            </div>
        </div>


                        <?php //TODO: Надо решить как правильно выводить модальные окна с привязкой к товару и его цене ?>
        <div class="modal" id="myModal">
            <div class="blok-center text-center ">
                <div class="form-zajavka">
                    <div class="container"> 
                        <div class=" row  zajavka__form3 f-blok justify-content-center">
                            <div class="close-z ">x</div>
                            <div class="f-blok__blok1 col-lg-9">
                                <div class="row blok1_img">
                                    <div class="blok1_1 col-lg-5 text-left inp-form-img7 ddz">
                                        <img src="/themes/main/images/shema.jpg" alt="" class="blok1_img">
                                    </div>
                                    <div class="col-lg-7 blok1_2 text-left">
                                        <p></p>   
                                        <h2 class="inp-form-text1">КУХНЯ ИЗ МАССИВА ЯСЕНЯ «МАДЕЙРА»</h2>
                                        <div class="blok1_cena inp-form-text2">50 000 руб.</div>
                                        <p class="p_grey">Погонный метр в стандартной комплектации</p>
                                        <p class="p_text2">Обращаем Ваше внимание, что цены на сайте носят справочный характер. 
                                            Окончательные цены уточняйте в салонах у представителей фабрики.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 text-left">

                                        <h3>СТАНДАРТНАЯ КОМПЛЕКТАЦИЯ:</h3>
                                        <img src="/themes/main/images/shema.jpg" alt="" class="blok1_img">
                                    </div>
                                    <div class="col-lg-7 text-left n-blok">
                                        <p class="p_text1">Длина кухни в базовой комплектации - 3м.</p>
                                        <h4 class="h4-bold">В стандартную комплектацию входит:</h4>  
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Корпуса из ЛДСП Эггер. 
                                                        <p class="p_text">Австрия. Покрыая немецким пластиком</p>
                                                    </li>
                                                    <li>Столешница 38мм 
                                                        <p class="p_text">постформинг</p>
                                                    </li>
                                                    <li>Ручки</li>
                                                    <li>Плинтус</li>
                                                    <li>Цоколь</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul>
                                                    <li>Петли Blum 
                                                        <p class="p_text"> Австрия</p></li>
                                                    <li> Системы выдвижения ящиков 
                                                        <p class="p_text">Metabox 3 ящика<br> Blum, Австрия</p></li>
                                                    <li>Полки ДСП</li>
                                                    <li> Сушка 2-уровневая  
                                                        <p class="p_text"> </p></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-left">
                                    <div class="col-md-12">
                                        <span class="span_b">
                                            <span class="span_red">В комплектацию не входит: </span>
                                            мойка, смеситель, встраиваемая техника, холодильник, вытяжка
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="f-blok__blok2 col-lg-3">
                                <h3>Бесплатная заявка</h3>
                                <form   action="send2.php"  method="post" >
                                    <div class="form-group">
                                        <label for="name-o">Имя:</label>
                                        <input type="text"  name="name" class="form-control" id="name-o" placeholder="">
                                        <div id="bthrow_error_name-o" class="red"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="telf-o">Контактный телефон:</label>
                                        <input type="tel"  name="telf-o"  class="form-control" id="telf-o" placeholder="">
                                        <div id="bthrow_error_telf-o" class="red"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email-o">Город:</label>
                                        <input type="email" name="email-o"   class="form-control" id="email-o" placeholder="">
                                        <div id="bthrow_error_email-o" class="red"></div>
                                    </div>


                                    <div class="form-group">
                                        <label for="coment">Комментарий:</label>
                                        <textarea name="coment" id="coment" cols="30" rows="5" placeholder=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="" type="submit"  id="send-f" >Отправить заявку</a>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" name="check-name" checked="checked" id="condition1-o">
                                        <span>
                                            Даю согласие на <a href="/pokupatelu/politika"> на обработку</a> персональных данных
                                        </span>
                                        <div id="bthrow_error_check-o" class="red" ></div>
                                        <div class='itogo-o'></div>
                                        <input type="hidden"  name="name-izdelia"  class="mod-inp-name" >
                                        <input type="hidden"  name="cena-izdelia"  class="mod-inp-cena" >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   
                </div>
            </div> 
        </div>  


        <div class="modal" id="myModal-x">
            <div class="blok-center text-center ">
                <!-- start s-calc-->
                <div class="s-calc section  bg-gray">
                    <div class="container">
                        <div class="close-zz ">x</div>
                        <div class="title-wrap text-center">
                            <div class="h2 strong ttu">Рассчитайте стоимость КУХНИ ВАШЕЙ МЕЧТЫ ЗА&nbsp;1&nbsp;МИНУТУ!</div>
                            <div class="h5">1156 клиентов уже воспользовались этой услугой</div>
                        </div>
                        <div class="page-width" id="s-calc">
                            <div class="cost-block-wrap">
                                <div class="calculator">
                                    <div class="cost-content-block cont-wrp">
                                        <p class="title strong h5"><span>1</span>Выберите вид гарнитура и укажите его размеры </p>
                                        <div class="wrap-block wrap-cost-width clearfix">
                                            <!-- labels-->
                                            <label>
                                                <div class="first-b c-block cost-c-width cost-c-width-checked">
                                                    <input type="radio" name="cost" value="t-cost"/>
                                                    <div class="img-wrap"><img src="/themes/main/images/imgxxx/calc-t-cost-img.jpg" alt="Прямой"/></div>
                                                    <p>Прямой</p>
                                                </div>
                                            </label>
                                            <label>
                                                <div class="c-block cost-c-width">
                                                    <input type="radio" name="cost" value="g-cost-l"/>
                                                    <div class="img-wrap"><img src="/themes/main/images/imgxxx/calc-g-cost-l-img.jpg" alt="Г-образный(левый)"/></div>
                                                    <p>Г-образный (левый)</p>
                                                </div>
                                            </label>
                                            <label>
                                                <div class="c-block cost-c-width">
                                                    <input type="radio" name="cost" value="g-cost-r"/>
                                                    <div class="img-wrap"><img src="/themes/main/images/imgxxx/calc-g-cost-r-img.jpg" alt="Г-образный(правый)"/></div>
                                                    <p>Г-образный (правый)</p>
                                                </div>
                                            </label>
                                            <label>
                                                <div class="c-block cost-c-width">
                                                    <input type="radio" name="cost" value="p-cost"/>
                                                    <div class="img-wrap"><img src="/themes/main/images/imgxxx/calc-p-cost-img.jpg" alt="П-образный"/></div>
                                                    <p>П-образный</p>
                                                </div>
                                            </label>
                                            <label>
                                                <div class="c-block cost-c-width" style="margin-right:0;">
                                                    <input type="radio" name="cost" value="d-cost"/>
                                                    <div class="img-wrap"><img src="/themes/main/images/imgxxx/calc-d-cost-img.jpg" alt="Параллельный"/></div>
                                                    <p>Параллельный</p>
                                                </div>
                                            </label>
                                            <!-- /labels-->
                                        </div>
                                        <div class="row">
                                            <div class="cost-content-l col-lg-7">
                                                <!-- calculator-->
                                                <div class="selects margin-bottom-none">
                                                    <div class="h on">
                                                        <div class="text">
                                                            <!-- <input type="text" maxlength="3" value="0" name="top" id="top_m">  м&nbsp;&nbsp;&nbsp;-->
                                                            <input id="topx" type="text" value="200" name="top"/>
                                                        </div>
                                                        <div class="l"></div>
                                                        <div class="r"></div>
                                                        <div class="noUiSlider horizontal connect" id="stop">
                                                            <div class="ll"></div>
                                                            <div class="rr"></div>
                                                        </div>
                                                    </div>
                                                    <div class="b" style="display: none;">
                                                        <div class="text">
                                                            <input id="bot" type="text" value="200" name="bot"/>
                                                        </div>
                                                        <div class="l"></div>
                                                        <div class="r"></div>
                                                        <div class="noUiSlider horizontal connect" id="sbot">
                                                            <div class="ll"></div>
                                                            <div class="rr"></div>
                                                        </div>
                                                    </div>
                                                    <div class="vl" style="display: none;">
                                                        <div class="text">
                                                            <input id="leftx" type="text" value="200" name="left"/>
                                                        </div>
                                                        <div class="l"></div>
                                                        <div class="r"></div>
                                                        <div class="noUiSlider vertical connect" id="sleft">
                                                            <div class="tt"></div>
                                                            <div class="bb"></div>
                                                        </div>
                                                    </div>
                                                    <div class="vr" style="display: none;">
                                                        <div class="text">
                                                            <input id="right" type="text" value="200" name="right"/>
                                                        </div>
                                                        <div class="l"></div>
                                                        <div class="r"></div>
                                                        <div class="noUiSlider vertical connect" id="sright">
                                                            <div class="tt"></div>
                                                            <div class="bb"></div>
                                                        </div>
                                                    </div>
                                                    <div class="img"><img id="img_ktype" alt="" src="/themes/main/images/imgxxx/calc-t-cost-img.jpg"/></div>
                                                </div>
                                                <!-- /calculator-->
                                            </div>
                                            <div class="cost-content-r col">
                                                <p class="title strong h5"><span>2 </span> Выберите материал фасада</p>
                                                <p class="mob-text-calc">Узнать стоимость кухни<br/>за 5-10 минут?</p>
                                                <form name="form-file" action="send-test.php" method='post'  >
                                                    <input class="order" type="hidden" name="order" value="Просчет кухни"/><span style="display:none;">
                                                        <input id="inp_secl_type" type="text" value="Прямой" name="type"/>
                                                        <input id="inp_secl_t" type="text" name="dlina" value="200"/>
                                                        <input id="inp_secl_l" type="text" name="left"/>
                                                        <input id="inp_secl_r" type="text" name="right"/>
                                                        <input id="inp_secl_d" type="text" name="dlina2"/></span>
                                                    <select name="material" required="required">
                                                        <option disabled="" selected="" value="" style="display:none;">Материал фасада</option>
                                                        <option>Пленка ПВХ</option>
                                                        <option>Пластик</option>
                                                        <option>Массив дерева</option>
                                                        <option>Эмаль</option>
                                                    </select><br/>
                                                    <div class="tech">
                                                        <select name="material_stol" required="required">
                                                            <option disabled="" selected="" value="" style="display:none;">
                                                                Материал
                                                                столешницы
                                                            </option>
                                                            <option>Искусственный камень</option>
                                                            <option>Пластик</option>
                                                        </select>
                                                        <div class="tech-title">Техника</div>
                                                        <div class="small">
                                                            <div class="tech-block biger">
                                                                <input id="duhovka" type="checkbox" name="tech[]" value="Духовой шкаф"/>
                                                                <label for="duhovka">Духовой шкаф</label>
                                                            </div>
                                                            <div class="tech-block">
                                                                <input id="plita" type="checkbox" name="tech[]" value="Варочная панель"/>
                                                                <label for="plita">Варочная панель</label>
                                                            </div>
                                                            <div class="tech-block biger">
                                                                <input id="freez" type="checkbox" name="tech[]" value="Посудомоечная машина"/>
                                                                <label for="freez">
                                                                    Посудомоечная
                                                                    машина
                                                                </label>
                                                            </div>
                                                            <div class="tech-block">
                                                                <input id="vent" type="checkbox" name="tech[]" value="Вытяжка"/>
                                                                <label for="vent">Вытяжка</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input class="form-control form-control-sm" type="text" name="nametext" placeholder="Ваше имя"/><span style="display:none;">
                                                        <input type="text" name="form_type" placeholder="" value="Форма и размер гарнитуры не выбраны"/></span>
                                                    <input class="form-control form-control-sm" id="pphone" type="tel" name="nametel" required="required" placeholder="Ваш телефон"/>
                                                    <input class="nonetext" type="text" style="display:none;" name="formprice" value="нету"/>
                                                    <div class="center">
                                                        <input class="btn-main btn-accent btn-lg btn-block" id="calc-form-sub" type="submit" value="Получить бесплатный расчет"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end s-calc-->
            </div>   
        </div>       


        <!--  <button style="position: absolute; top:50px;z-index: 1000; " type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-x">
                       Рассчитать стоимость кухни
               </button>  
        -->

        <script>
            $('html').on('click', '.close-z', function () {
                $(".modal").modal("hide");
            })

            $('html').on('click', '.close-zz', function () {
                $(".modal").modal("hide");
            })
        </script>

        <!-- / -->
<?php
cs()->registerCoreScript('jquery')
        ->registerScriptFile($ui->getThemeFileUrl('js/jquery.BlackAndWhite.min.js'))
        ->registerScriptFile($ui->getThemeFileUrl('js/jquery.countdown.min.js'))
        ->registerScriptFile($ui->getThemeFileUrl('js/site.scripts.min.js?v4'));
//$ui->fancyBox();
?>


        <script >
//                    (function () {
//                        var _sw = document.createElement("script");
//                        _sw.type = "text/javascript";
//                        _sw.async = true;
//                        _sw.src = "https://suggest.io/js/v2/palazo.ru/KhoEoZk0";
//                        var _sh = document.getElementsByTagName("head")[0];
//                        _sh.appendChild(_sw);
//                    })();
        </script>

        <script >
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-55465672-1', 'auto');
            ga('send', 'pageview');

        </script>

        <script>

            function getCookie(name) {
                var matches = document.cookie.match(new RegExp(
                        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                        ));
                return matches ? decodeURIComponent(matches[1]) : undefined;
            }

            function setCookie(name, value, options) {
                options = options || {};

                var expires = options.expires;

                if (typeof expires == "number" && expires) {
                    var d = new Date();
                    d.setTime(d.getTime() + expires * 1000);
                    expires = options.expires = d;
                }
                if (expires && expires.toUTCString) {
                    options.expires = expires.toUTCString();
                }

                value = encodeURIComponent(value);

                var updatedCookie = name + "=" + value;

                for (var propName in options) {
                    updatedCookie += "; " + propName;
                    var propValue = options[propName];
                    if (propValue !== true) {
                        updatedCookie += "=" + propValue;
                    }
                }

                document.cookie = updatedCookie;
            }
            /*function getnum(){
             var dc=document.cookie;
             if(dc.indexOf("num=")>-1){dc=dc.split("num=");dc=dc[1];dc=dc.split(";");dc=decodeURIComponent(dc[0]); return dc;};
             var str=document.referrer+'	'+document.location.href;
             var num='';
             var config=document.getElementById("config").innerHTML;
             config=config.trim();
             config=config.split("\n");
             for(var i in config){
             var tmp=config[i];
             if(tmp.indexOf(":=")>0){
             tmp=tmp.split(":=");
             tmp[0]=tmp[0].split(",");
             var ok=0;
             for(var j in tmp[0]){
             if(str.indexOf(tmp[0][j])>-1){ok=ok+1;}
             }
             if(ok==tmp[0].length){num=tmp[1];break;};
             if(tmp[0][0]=="default"){num=tmp[1];};
             }
             }
             var now = new Date();
             var time = now.getTime();
             var expireTime = time + 86400*30;
             now.setTime(expireTime);
             document.cookie = 'num='+encodeURIComponent(num)+';expires='+now.toGMTString()+';path=/';
             return num;
             }
             var num=getnum();
             //console.log(document.getElementsByClassName("tel")[0].innerHTML);
             document.getElementsByClassName("tel")[0].innerHTML=num;
             //console.log(document.getElementsByClassName("tel")[0].innerHTML);*/
        </script>
        <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
        <script  src="https://cdn.envybox.io/widget/cbk.js?wcb_code=525b83f89d06e6ebce4d0a5e6680d8f6" charset="UTF-8" async></script>
        <script>
            $("body").on("click", "#wprice-form input[type='submit']", function () {
                if (typeof WBK !== 'undefined') {
                    var name = $("#app_modules_price_models_Form_name").val(),
                            phone = $("#app_modules_price_models_Form_phone").val(),
                            shipment = "palazo.ru | " + $("#insideLeft h1").text();
                    if (phone !== '' && name !== '') {
                        WBK.sendCrmLead(2326, {'name': name, 'phone': phone, 'comment': shipment,
                            'inbox_type_id': 14317
                        });
                    }
                }
            });

        </script>
        <!--<script  src="/themes/main/js/jquery.fancybox.min.js" charset="UTF-8"  async></script>-->
        <script src="/jquery.inputmask.bundle.js"></script>
        <script src="/themes/main/js/calc/jquery.filer.min.js"></script>
        <script src="/themes/main/js/calc/jquery.nouislider.min.js"></script>
        <script src="/themes/main/js/calc/configure.min.js"></script>
        <script  src="/site.js"  async></script>
    </body>
</html>