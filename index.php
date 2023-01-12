<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <title>Nixmoon — следим за космосом</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <div class="header_content">
                <a href="index.php" class="header_logo">Nixmoon</a>
                <nav>
                    <a href="company.php">Компании</a>
                    <a href="mission.php">Миссии</a>
                    <a href="">Запуски</a>
                    <a href="">О нас</a>
                </nav>
                <div class="online_container">
                    <a href="#">SpaceX<span>ONLINE</span></a>
                </div>
            </div>
        </div>
    </header>

    <div class="hello-message" style="display: none">
        <div class="hello-message__content">
            <h2 class="hello-message__title">Привет!</h2>
            <p class="hello-message__text">Добро пожаловать на Nixmoon - сайт, который следит за космическими полетами. <br><br>
                    Данный проект был создан как тестовый, одним человеком, чтобы узнать свои силы. <br><br>
                    Если тебе будет не сложно напиши мне на почту или в телеграм (указан внизу страницы) чтобы ты хотел исправить или добавить, спасибо! <br><br>
                    С уважением создатель Nixmoon - <a href="#" target="_blank">Никита</a></p>
            <button class="hello-message__btn">Продолжить</button>
        </div>   
    </div>

    <div class="main-navigation_wrapper ">
        <div class="main-navigation_container">
            <a href="#about" class="main-navigation__about">О нас <div class="underline"></div></a>
            <a href="#mission" class="main-navigation__mission">Миссии <div class="underline"></div></a>
            <a href="#company" class="main-navigation__company">Компании <div class="underline"></div></a>
        </div>
    </div>

    <main>
        <div class="main_wrapper">
            <div class="main_content">
                <div class="logo_wrapper">
                    <div class="logo_container">
                        <div class="logo__text">
                            <h1>Nixmoon</h1>
                            <h2>станьте ближе к звездам</h2>
                        </div>
                        <a href="#about" class="more_btn">
                        <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 38.083 38.083" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M6.655,36.904V1.177c0-0.461,0.269-0.879,0.687-1.07c0.419-0.191,0.911-0.121,1.26,0.178l22.416,17.568 c0.258,0.223,0.406,0.545,0.41,0.885c0.004,0.326-0.143,0.663-0.396,0.889L8.616,37.784c-0.347,0.31-0.842,0.385-1.265,0.194 C6.927,37.787,6.655,37.368,6.655,36.904z M9.01,3.744v30.535l19.449-15.52L9.01,3.744z"></path> </g> </g> </g></svg>
                        </a>
                    </div>
                </div>
                <section class="about_wrapper info-wrapper" id="about">
                    <div class="about_container">
                        <div class="about__text section__text-container">
                            <h2 class="section_title">о нас</h2>
                            <p class="section_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio deserunt quasi suscipit voluptatibus quaerat reiciendis ullam itaque dolore repudiandae minus!</p> <br>
                            <p class="section_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, aliquid!</p>
                        </div>
                    </div>
                </section>
                <section class="mission_wrapper info-wrapper" id="mission">
                    <div class="mission_container ">
                        <div class="mission__content section__text-container">
                            <h2 class="section_title">Миссии</h2>
                            <p class="section_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio deserunt quasi suscipit voluptatibus quaerat reiciendis ullam itaque dolore repudiandae minus!</p>
                            <a href="mission.php" class="mission_button">Список миссий</a>
                        </div>
                    </div>
                </section>
                <section class="company_wrapper info-wrapper" id="company">
                    <div class="company_container ">
                        <div class="company__text section__text-container">
                            <h2 class="section_title">компании</h2>
                            <p class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure molestias, aut voluptas natus, aperiam quidem porro, omnis nam beatae placeat deleniti saepe quia debitis optio accusamus maiores culpa labore cumque?</p> <br>
                            <a href="company.php" class="mission_button">Список компаний</a>
                        </div>
                    </div>
                </section>
                <section class="mission-list_wrapper">
                    <div class="mission-list_container">
                        <h2 class="mission_title">миссии</h2>
                        <div class="mission_background-image"><img style="height: 100vh;" src="/img/rocket.jpg" alt=""></div>
                        <div class="mission-list-landing">
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div>
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div>
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div>
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div> 
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div> 
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div> 
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div> 
                            <div class="mission_list__element-wrapper">
                                <img src="img/ISS-Expedition-29.png" alt="">
                                <div class="mission_list__element_text">
                                    <h3>Компания</h3>
                                    <p>Старт</p>
                                    <p>Компания</p>
                                    <p>Ракета-носитель</p>
                                    <p>Полезная нагрузка</p>
                                    <p>Удачно</p>
                                </div>
                                <button>Подробнее</button>
                            </div>
                        </div>
                        <a href="mission.php" class="mission_button" style="background: black;">Список миссий</a>
                    </div>
                </section>
                <section class="company-list_wrapper">
                    <div class="company-list_container">
                        <h2 class="company_title">компании</h2>
                        <div class="company-list" style="width: 50%">
                            <?php
                            function ConnectionToDB(){
                                $mysqli = new mysqli('localhost', 'root', '', 'spacenixdb');
                                $mysqli -> set_charset('utf8');
                            
                                if (mysqli_connect_errno()){
                                    printf("Соединение не установлено," , mysqli_connect_error());
                                    exit();
                                }
                                return $mysqli;
                            }

                            $mysqli = ConnectionToDB();
                            $query = $mysqli -> query('SELECT company.name, last_launch, online_status
                            FROM spacenixdb.company
                            ORDER BY company.launches_number  DESC
                            LIMIT 4;');
                            while ($row = mysqli_fetch_assoc($query)){
                                $name = $row['name'];
                                $last_launch = $row['last_launch'];
                                $online_status = $row['online_status'];
                                $online_status = $online_status == 1 ? '<span class="company--online">ONLINE</span>' : '';
                
                                echo '<div class="company-list__element company">
                                    <img src="/img/'. str_replace(' ', '_', str_replace(',', '', str_replace('.', '', $row['name']))) .'_logo.png" alt="" class="company__img">
                                    <div class="company__info">
                                        <h2><a class="company__name" href="/companys/'. str_replace(' ', '_', $name) .'.html">'. $name . $online_status .'</a></h2>
                                        <p>Последний запуск: <span>'.$last_launch.'</span></p>
                                    </div>
                                    <a href="companys/'. str_replace(' ', '_', str_replace(',', '', $row['name'])) .'.html" class="company__button">Подробнее</a>
                                </div>';
                            }
                            ?>
                        </div>
                        <a class="company_button" href="company.php">Список компаний</a>
                    </div>
                    <div class="dividing-line">
                        <img src="img/dividing-image.jpg" alt="">
                    </div>
                </section>       
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_container">
            <div class="footer_info">
                <a href="#" class="header_logo">Nixmoon</a>
                <a class="footer-info__secret-link" href="">Секретная ссылка</a>
                <a href="">О нас</a>
                <a href="">Контакты</a>
                <div class="footer_info__social">
                    <a href=""><svg width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Telegram</title>
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 
                        12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 
                        0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 
                        0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 
                        6.502-1.36 8.627-.168.9-.499 1.201-.82 
                        1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" fill="#fff"/></svg></a>
                    <a href=""><svg width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" fill="#fff"/></svg></a>
                </div>
            </div>
            <div class="footer_mission-links footer_links">
                <a href="" class="main-footer_link">Миссии</a>
                <a href="" class="footer_link">ISS Expedition 29</a>
                <a href="" class="footer_link">STS-86</a>
                <a href="" class="footer_link">SpX-DM1</a> 
            </div>
            <div class="footer_company-links footer_links">
                <a href="" class="main-footer_link">Компании</a>
                <a href="" class="footer_link">Роскосмос</a>
                <a href="" class="footer_link">NASA</a>
                <a href="" class="footer_link">SpaceX</a>
            </div>
            <div class="copyright">Все материалы, публикуемые на сайте, носят чисто информативный характер. Права на публикуемые аудио, видео, графические и текстовые материалы принадлежат их владельцам.</div>
        </div>
        <div class="devider"></div>
        <div class="copyr">© 2022 Никита Крикунов</div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>