<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <title>Nixmoon — Миссии</title>
</head>
<body>
    <header>
        <div class="header_wrapper">
            <div class="header_content">
                <a href="index.php" class="header_logo">Nixmoon</a>
                <nav>
                    <a href="../company.php">Компании</a>
                    <a href="../mission.php">Миссии</a>
                    <a href="">Запуски</a>
                    <a href="">О нас</a>
                </nav>
                <div class="online_container">
                    <a href="#">SpaceX<span>ONLINE</span></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="main_wrapper">
            <div class="mission_title_container">
                <div class="mission_title_logo-wrapper">
                    <div class="mission_title_content">
                        <h2>Миссии</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio deserunt quasi suscipit voluptatibus quaerat reiciendis ullam itaque dolore repudiandae minus!</p>
                    </div>
                </div>
                <img src="/img/mission-background.jpg" alt="">
            </div>        
        </div>
        <section class="full-list_wrapper">
            <div class="mission_full-list_container">
                <form class="mission_full-list_settings_coontainer">
                    <div class="text-field">
                        <label class="text-field__label">Год:</label>
                        <select name="missionYear">
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>
                    <div class="text-field">
                        <label class="text-field__label" for="login">Компания:</label>
                        <select name="missionCompany">
                            <option value="Все">Все</option>
                            <option value="Роскосмос">Роскосмос</option>
                            <option value="SapceX">SpaceX</option>
                            <option value="NASA">NASA</option>
                            <option value="Blue Origin">Blue Origin</option>
                            <option value="Boeing">Boeing</option>
                        </select>
                    </div>
                    <div class="text-field">
                        <label class="text-field__label">Ракета-носитель:</label>
                        <select name="missionRocket">
                            <option value="Все">Все</option>
                            <option value="Ангара-А5">Ангара-А5</option>
                            <option value="Протон-М">Протон-М</option>
                            <option value="Союз-ФГ">Союз-ФГ</option>
                            <option value="Стрела">Стрела</option>
                            <option value="Союз-2">Союз-2</option>
                            <option value="Атлас-5">Атлас-5</option>
                            <option value="Delta IV">Delta IV</option>
                            <option value="Falcon 9">Falcon 9</option>
                            <option value="Falcon Heavy">Falcon Heavy</option>
                            <option value="Firefly Alpha">Firefly Alpha</option>
                            <option value="Чанчжэн-4C">Чанчжэн-4C</option>
                            <option value="Чанчжэн-11">Чанчжэн-11</option>
                            <option value="Куайчжоу">Куайчжоу</option>
                            <option value="H-IIA">H-IIA</option>
                            <option value="Electron">Electron</option>
                        </select>
                    </div>
                    <div class="text-field">
                        <label class="text-field__label">Тип миссии:</label>
                        <select name="mssionType">
                            <option value="Все">Все</option>
                            <option value="Доставка груза на МКС">Доставка груза на МКС</option>
                            <option value="Пилотируемый полет">Пилотируемый полет</option>
                            <option disabled value="е">Межпланетные</option>
                            <option value="Меркурий">Меркурий</option>
                            <option value="Венера">Венера</option>
                            <option value="Луна">Луна</option>
                            <option value="Система Марса">Система Марса</option>
                            <option value="Система Юпитера">Система Юпитера</option>
                            <option value="Система Сатурна">Система Сатурна</option>
                            <option value="Система Урана">Система Урана</option>
                            <option value="Система Нептуна">Система Нептуна</option>
                            <option value="Система Плутона">Система Плутона</option>
                            <option disabled value="">Другие</option>
                            <option value="Околоземная орбита">Околоземная орбита</option>
                            <option value="Кометы">Кометы</option>
                            <option value="Малые планеты">Малые планеты</option>
                        </select>
                    </div>
                    <div class="text-field">
                        <label class="text-field__label">Страна:</label>
                        <select name="missionCountry">
                            <option value="Все">Все</option>
                            <option value="Россия">Россия</option>
                            <option value="США">США</option>
                            <option value="Китай">Китай</option>
                            <option value="Индия">Индия</option>
                            <option value="Япония">Япония</option>
                            <option value="ESA">ESA</option>
                        </select>
                    </div>
                </form>
                <form class="mission_full-list_filter_coontainer">
                    <div class="text-field">
                        <label class="text-field__label">Фильтр:</label>
                        <select name="missionFilter">
                            <option value="По дате ↓">По дате ↓</option>
                            <option value="По дате ↑">По дате ↑</option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="checkboxes">
                        <div class="checkboxes__container">
                            <input type="checkbox" id="successfulMission" name="successfulMission">
                            <label for="successfulMission">успешные</label>
                        </div>
                        <div class="checkboxes__container">
                            <input type="checkbox" id="failedMission" name="failedMission">
                            <label for="failedMission">неудачные</label>
                        </div>                 
                        <div class="checkboxes__container">
                            <input type="checkbox" id="currentMission" name="currentMission">
                            <label for="currentMission">текущие</label>
                        </div>
                    </div>
                    <div class="mission_full-list_filter__button-container">
                        <input type="submit" class="filter__apply" value="Применить">
                        <button class="filter__reset">Сбросить фильтр</button>
                    </div>
                </form>
            </div>       
        </section>

        <section class="mission-list">
            <div class="misison-table__wrapper">
            <table class="mission-table">
                <thead>
                    <tr>
                        <th>Дата запуска</th>
                        <th>Название миссии</th>
                        <th>Компания</th>
                        <th>Ракета носитель</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
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
                    $query = $mysqli -> query('SELECT date_format(launch.beginning, "%d %b %Y") as date, launch.name, company.name as company_name, rocket.name as rocket_name, launch.status
                    FROM spacenixdb.launch, spacenixdb.company, spacenixdb.rocket
                    WHERE company.id = company_id and rocket.id = rocket_id
                    ORDER BY launch.beginning DESC
                    LIMIT 10;');
                    while ($row = mysqli_fetch_assoc($query)){
                        $date = $row['date'];
                        $name = $row['name'];
                        $company = $row['company_name'];
                        $rocket = $row['rocket_name'];
                        $status = $row['status'];
                        if ($status == 'Успех'){
                            echo '<tr class="mission-table__row">
                            <td><a href="">'.$date.'</a></td>
                            <td><a href=""><div class="mission-element__img"><img src="img/ISS-Expedition-29.png" alt="" width="50px">'.$name.'</div></a></td>
                            <td><a href="">'.$company.'</a></td>
                            <td><a href="">'.$rocket.'</a></td>
                            <td class="mission__status--successful"><a href="" class="mission-status">'.$status.'</a></td>
                        </tr>';
                        }else{
                            echo '<tr class="mission-table__row">
                            <td><a href="">'.$date.'</a></td>
                            <td><a href=""><div class="mission-element__img"><img src="img/ISS-Expedition-29.png" alt="" width="50px">'.$name.'</div></a></td>
                            <td><a href="">'.$company.'</a></td>
                            <td><a href="">'.$rocket.'</a></td>
                            <td class="mission__status--failure"><a href="" class="mission-status">'.$status.'</a></td>
                        </tr>';
                        }
                        
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="mission-list__page-links page-links">
                <button class="page-links__btn page-links__btn--inactive page-links__btn--prev">Назад</button>
                <div class="page-links__element">
                    <a class="page-links__btn page-links__btn--current" href="#">1</a>
                </div>
                <div class="page-links__element">
                    <a class="page-links__btn" href="#">2</a>
                </div>
                <div class="page-links__element">
                    <a class="page-links__btn" href="#">3</a>
                </div>
                <button class="page-links__btn page-links__btn--next">Вперед</button>
            </div>
        </section>
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
    <script src="/js/script.js"></script>
</body>
</html>