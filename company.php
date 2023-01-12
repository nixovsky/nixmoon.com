<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Nixmoon — Компании</title>
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

    <main>
        <div class="main_wrapper">
            <div class="mission_title_container">
                <div class="mission_title_logo-wrapper">
                    <div class="mission_title_content">
                        <h2>Компании</h2>
                        <p>На данной странице предоставлена информация о космических компаниях, занимающихся запусками миссий, производством космической техники, а так же корпорациях имеющих космическую программу.</p>
                    </div>
                </div>
                <img src="/img/company-background.jpg" alt="">
            </div>        
        </div>
        <section class="filter">
            <form class="filter__element" action="" method="POST">
                <label class="filter__label">Фильтр:</label>
                <select name="company__filter" class="filter__option">
                    <option value="По умолчанию">По умолчанию</option>
                    <option value="Сначала меньше пусков">Меньше запусков</option>
                    <option value="Сначала больше пусков">Больше запусков</option>
                    <option value="Сначала последние запуски">Последние запуски</option>
                </select>
                <input id="filterBtnID" type="submit" name="submit" value="Применить" class="filter__apply">
            </form>
        </section>

        <section id="companysID" class="company-list">
            <?php
            function GetAllCompany($query){
                echo "<script>filterBtnID.onclick=function(){companysID.innerHTML='';}</script>";
                while ($row = mysqli_fetch_assoc($query)){
                    $name = $row['name'];
                    $last_launch = $row['last_launch'];
                    $online_status = $row['online_status'];
                    $online_status = $online_status == 1 ? '<span class="company--online">ONLINE</span>' : '';
                    $fileName = str_replace(' ', '_', str_replace(',', '', $row['name']));
                    $fileLink = RusToLat($fileName);
                    echo '<div class="company-list__element company">
                        <img src="/img/'. str_replace(' ', '_', str_replace(',', '', str_replace('.', '', $row['name']))) .'_logo.png" alt="" class="company__img">
                        <div class="company__info">
                            <h2><a class="company__name" href="/companys/'. str_replace(' ', '_', $name) .'.html">'. $name . $online_status .'</a></h2>
                            <p>Последний запуск: <span>'.$last_launch.'</span></p>
                        </div>
                        <a href="companys/'.$fileLink.'.html" class="company__button">Подробнее</a>
                    </div>';
                }
            }
            if (array_search('Применить', $_POST)){
                if($_POST['submit']){
                    if ($_POST['company__filter'] == 'Сначала последние запуски'){
                        $mysqli = ConnectionToDB();
                        $query = $mysqli -> query('SELECT company.name, last_launch, online_status
                        FROM spacenixdb.company
                        ORDER BY company.last_launch DESC');
                        GetAllCompany($query);
                    }else if ($_POST['company__filter'] == 'Сначала больше пусков'){
                        $mysqli = ConnectionToDB();
                        $query = $mysqli -> query('SELECT company.name, last_launch, online_status
                        FROM spacenixdb.company
                        ORDER BY company.launches_number DESC');
                        GetAllCompany($query);
                    }else if ($_POST['company__filter'] == 'Сначала меньше пусков'){
                        $mysqli = ConnectionToDB();
                        $query = $mysqli -> query('SELECT company.name, last_launch, online_status
                        FROM spacenixdb.company
                        ORDER BY company.launches_number  ASC');
                        GetAllCompany($query);
                    }else if($_POST['company__filter'] == 'По умолчанию'){
                        $mysqli = ConnectionToDB();
                        $query = $mysqli -> query('SELECT company.name, last_launch, online_status
                        FROM spacenixdb.company
                        WHERE 1;');
                        getAllCompany($query);
                    }
                }
            }else{
                $mysqli = ConnectionToDB();
                $query = $mysqli -> query('SELECT company.name, last_launch, online_status
                FROM spacenixdb.company
                WHERE 1;');
                getAllCompany($query);
            }
            ?>
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
                <a href="/missions/ISS-Expedition-29.html" class="footer_link">ISS Expedition 29</a>
                <a href="" class="footer_link">STS-86</a>
                <a href="" class="footer_link">SpX-DM1</a> 
            </div>
            <div class="footer_company-links footer_links">
                <a href="" class="main-footer_link">Компании</a>
                <a href="/companys/roscosmos.html" class="footer_link">Роскосмос</a>
                <a href="" class="footer_link">NASA</a>
                <a href="" class="footer_link">SpaceX</a>
            </div>
            <div class="copyright">Все материалы, публикуемые на сайте, носят чисто информативный характер. Права на публикуемые аудио, видео, графические и текстовые материалы принадлежат их владельцам.</div>
        </div>
        <div class="devider"></div>
        <div class="copyr">© 2022 Никита Крикунов</div>
    </footer>

    <!-- Обновление всех компаний -->
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

        function GetRocketsByStatus($companyId, $rocketStatus){
            $mysqli = ConnectionToDB();

            $rocketQuery = $mysqli -> query('SELECT rocket.name, rocket.status
            FROM spacenixdb.rocket
            WHERE company_id = '.$companyId.' AND status = "'.$rocketStatus.'" LIMIT 4;');

            $rockets = '';

            while ($row = mysqli_fetch_assoc($rocketQuery)){
                $rockets .= '<a href="'.$row['name'].'">' . $row['name'] . '</a>';
            }
            return $rockets;
        }

        function GetAllCompanyRockets($companyId){
            $mysqli = ConnectionToDB();

            $companyRocketQuery = $mysqli -> query('SELECT rocket.name 
            FROM spacenixdb.rocket
            WHERE company_id =' . $companyId .' 
            LIMIT 3;');

            $companyRockets = '';
            while ($row = mysqli_fetch_assoc($companyRocketQuery)){
                $companyRockets .= ' ' . '<a href="/rockets/'.$row['name'].'.html">'.$row['name'].'</a>';
            }
            return $companyRockets;
        }

        function GetCompanyCosmodrome($companyId){
            $mysqli = ConnectionToDB();

            $companyCosmodromeQuery = $mysqli -> query('SELECT cosmodrome.name 
            FROM spacenixdb.cosmodrome, spacenixdb.rocket
            WHERE company_id = '.$companyId.' AND rocket.cosmodrome = cosmodrome.cosmodrome_id
            GROUP BY cosmodrome.name;');

            $cosmodromes = '';
            while ($row = mysqli_fetch_assoc($companyCosmodromeQuery)){
                $cosmodromes .=  $row['name'] . ' | ';
            }
            return substr_replace($cosmodromes, '', -2);
        }

        function RusToLat($source) {
            if ($source) {
                $rus = [
                    'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
                    'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я'
                ];
                $lat = [
                    'A', 'B', 'V', 'G', 'D', 'E', 'Yo', 'Zh', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Shh', '``', 'Y', '`', 'E`', 'Yu', 'Ya',
                    'a', 'b', 'v', 'g', 'd', 'e', 'yo', 'zh', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'shh', '``', 'y', '`', 'e`', 'yu', 'ya'
                ];
                return str_replace($rus, $lat, $source);
            }
        }

        $query = $mysqli -> query('SELECT company.id, company.name, company.description, foundation_date, country.name AS country, launches_number, successful_launches_number, failed_launches_number, last_launch, launches_per_year
        FROM spacenixdb.company, spacenixdb.country
        WHERE company.country_id = country.id;');

        while ($row = mysqli_fetch_assoc($query)){
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $last_launch = $row['last_launch'];
            $foundation_date = $row['foundation_date'];
            $country = $row['country'];
            $launches_number = $row['launches_number'];
            $successful_launches_number = $row['successful_launches_number'];
            $failed_launches_number = $row['failed_launches_number'];
            $last_launch = $row['last_launch'];
            $launches_per_year = $row['launches_per_year'];

            $allCompanyRockets = GetAllCompanyRockets($id);
            $allCompanyCosmodromes = GetCompanyCosmodrome($id);
            $allCurrentRockets = GetRocketsByStatus($id, 'Действующая');
            $allNotValidRockets = GetRocketsByStatus($id, 'Эксплуатация завершена');
            
            $fileName = str_replace(' ', '_', str_replace(',', '', $row['name']));
            $fileLink = RusToLat($fileName);

            $fd = fopen("companys/{$fileLink}.html", 'w') or die("не удалось создать файл");
            $str = '<!DOCTYPE html>
            <html lang="ru">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="icon" href="../favicon.png" type="image/x-icon">
                <link rel="stylesheet" href="../css/style.css">
                <title>Spacenix — '.$name.'</title>
            </head>
            <body>
                <header>
                    <div class="header_wrapper">
                        <div class="header_content">
                            <a href="../index.html" class="header_logo">Nixmoon</a>
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
            
                <main class="company-wrapper">
                    <div class="company-container">
                        <div class="company-container__left-content">
                            <section class="company-info">
                                <img src="../img/'. str_replace(' ', '_', str_replace(',', '', str_replace('.', '', $row['name']))) .'_logo.png" width="500px" alt="" class="company-info__img">
                            </section>
                            <section class="company-statistics">
                                <p>Страна: <span class="company-statistic__meaning"><a href="/company.html">'.$country.'</a></span></p>
                                <p>Космодромы: <span class="company-statistic__meaning">'.$allCompanyCosmodromes.'</span></p>
                                <p>Ракеты: <span class="company-statistic__meaning">'.$allCompanyRockets.'</span></p>
                                <p>Дата основания: <span class="company-statistic__meaning">'.$foundation_date.'</span></p>
                                <h2 class="company-statistics__launch-statistic">Статистика запусков</h2>
                                <p>Всего запусков: <span class="company-statistic__meaning">'.$launches_number.'</span></p>
                                <p>Успешных: <span class="company-statistic__meaning">'.$successful_launches_number.'</span></p>
                                <p>Неудачных: <span class="company-statistic__meaning">'.$failed_launches_number.'</span></p>
                                <p>Последний запуск: <span class="company-statistic__meaning">'.$last_launch.'</span></p>
                                <p>Запусков в этом году: <span class="company-statistic__meaning">'.$launches_per_year.'</span></p>
                            </section>
                        </div>
                        <div class="company-container__right-content">
                            <div class="company-info__title">
                                <h2 class="company-info__name">'.$name.'</h2>
                                <p class="company-info__text">'.$description.'</p>
                                
                            </div>
                        </div>
                    </div>
                    <section class="company-programs">
                        <h2>Космические программы</h2>
                        <div class="company-programs__element-row">
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                        </div>
                        <div class="company-programs__element-row">
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                            <div class="company-programs__element">
                                <img src="../img/ISS-Expedition-29.png" alt="" class="company-programs__img">
                                <a href="" class="company-programs__link">Программа</a>
                            </div>
                        </div>
                        <a href="/mission.php" class="company-programs__more-btn">Все программы</a>
                    </section>
                    <section class="company-more-info">
                        <div class="company-more-info__element company-more-info__rockets">
                            <h2>Ракеты-носители</h2>
                            '.$allCurrentRockets.'
                        </div>
                        <div class="company-more-info__element company-more-info__unused-rockets">
                            <h2>Неиспользуемые ракеты-носители</h2>
                            '.$allNotValidRockets.'
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
                            <a href="/missions/ISS-Expedition-29.html" class="footer_link">ISS Expedition 29</a>
                            <a href="" class="footer_link">STS-86</a>
                            <a href="" class="footer_link">SpX-DM1</a> 
                        </div>
                        <div class="footer_company-links footer_links">
                            <a href="" class="main-footer_link">Компании</a>
                            <a href="/companys/roscosmos.html" class="footer_link">Роскосмос</a>
                            <a href="" class="footer_link">NASA</a>
                            <a href="" class="footer_link">SpaceX</a>
                        </div>
                        <div class="copyright">Все материалы, публикуемые на сайте, носят чисто информативный характер. Права на публикуемые аудио, видео, графические и текстовые материалы принадлежат их владельцам.</div>
                    </div>
                    <div class="devider"></div>
                    <div class="copyr">© 2022 Никита Крикунов</div>
                </footer>
            </body>
            </html>';
            fwrite($fd, $str);
            fclose($fd);
        }
    ?>
</body>
</html>