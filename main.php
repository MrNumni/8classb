<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Перенаправляем на страницу входа
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="pictures\md.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=dad69d4e-73e8-4c08-8209-503d5eb71e67&lang=ru_RU" type="text/javascript"></script>
    <script src="script.js"></script>
</head>
<body>
    <style>
        html,
        body{
          height: 100%;
          font-size: 15px;
        }
        .swiper{
          width: 1000px;
          height: 100%;
        }
        .swiper-slide{
          text-align: center;
          font-size: 18px;
          background-color: rgb(255, 255, 255);
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .swiper-slide img{
          width: 58%;
          object-fit: cover;
        }
        .swiper-button-next, .swiper-rtl .swiper-button-prev{
          right: 140px !important; 
          left: auto;
        }
        .swiper-button-prev, .swiper-rtl .swiper-button-next{
          left: 140px !important; 
          right: auto;
        }
        .swiper-button-next, .swiper-button-prev {
          visibility: hidden;
        }
    
      </style>
      <div class="container">
        <header>
            <div class="logo">
                <img src="pictures\c95e44778afa02fd062722881a92e215.png" alt="Логотип школы">
                <h1 font-family="Comic Sans MS"><?php echo $_SESSION['username']; ?></h1>
            </div>
            <nav>
                <ul>
                    <a href="main.php" class="animated-button-menu">Главная</a>
                    <a href="https://11sch.edusite.ru/" class="animated-button-menu">Сайт школы</a>
                    <a href="news.php" class="animated-button-menu">Новости</a>
                    <a href="students.php" class="animated-button-menu">Обучающиеся</a>
                </ul>
            </nav>
        </header>
        <main>
            <section id="welcome-section">
                <h2>Добро пожаловать!</h2>
                <p>Добро пожаловать на сайт класса 8Б! Здесь вы найдете актуальные новости, расписание и многое другое.</p>
            </section>
            <section id="schedule-section">
                <h2>Расписание уроков</h2>
                <table>
                    <tr>
                        <th>День</th>
                        <th>Время</th>
                        <th>Предмет</th>
                    </tr>
                    <tr>
                        <td>Понедельник</td>
                        <td>8:00 - 8:40</td>
                        <td>Разговоры о важном</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>8:50 - 9:30</td>
                        <td>Физика</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>9:50 - 10:30</td>
                        <td>Алгебра</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10:50 - 11:30</td>
                        <td>Геометрия</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11:50 - 12:30</td>
                        <td>Информатика</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>12:40 - 13:20</td>
                        <td>Английский язык</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>13:40 - 14:20</td>
                        <td>История</td>
                    </tr>
                    <tr>
                        <td>Вторник</td>
                        <td>8:00 - 8:40</td>
                        <td>Биология</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>8:50 - 9:30</td>
                        <td>Физкультура</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>9:50 - 10:30</td>
                        <td>География</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10:50 - 11:30</td>
                        <td>ОБЖ</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11:50 - 12:30</td>
                        <td>Алгебра</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>12:40 - 13:20</td>
                        <td>Геометрия</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>13:40 - 14:20</td>
                        <td>Физика</td>
                    </tr>
                    <tr>
                        <td>Среда</td>
                        <td>8:00 - 8:40</td>
                        <td>Музыка</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>8:50 - 9:30</td>
                        <td>География</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>9:50 - 10:30</td>
                        <td>Английский язык</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10:50 - 11:30</td>
                        <td>Химия</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11:50 - 12:30</td>
                        <td>Русский язык</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>12:40 - 13:20</td>
                        <td>Основы финансовой грамотности</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>13:40 - 14:20</td>
                        <td>Литература</td>
                    </tr>
                    <tr>
                        <td>Четверг</td>
                        <td>8:00 - 8:40</td>
                        <td>Биология</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>8:50 - 9:30</td>
                        <td>Физкультура</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>9:50 - 10:30</td>
                        <td>Алгебра</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10:50 - 11:30</td>
                        <td>Английский язык</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11:50 - 12:30</td>
                        <td>Профминимум "Россия - мои горизонты"</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>12:40 - 13:20</td>
                        <td>Технология</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>13:40 - 14:20</td>
                        <td>Русский язык</td>
                    </tr>
                    <tr>
                        <td>Пятница</td>
                        <td>8:00 - 8:40</td>
                        <td>История</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>8:50 - 9:30</td>
                        <td>Обществознание</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>9:50 - 10:30</td>
                        <td>Русский язык</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>10:50 - 11:30</td>
                        <td>Литература</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>11:50 - 12:30</td>
                        <td>Химия</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>12:40 - 13:20</td>
                        <td>Решение нестандартных задач</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>13:40 - 14:20</td>
                        <td>Вероятность и статистика</td>
                    </tr>
                </table>
            </section>
            <section id="gallery">
                <h2>Галерея</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="schoolpic/20240221_140918_lmc_8.4.jpg"></div> 
                      <div class="swiper-slide"><img src="schoolpic/20240221_140942_lmc_8.4.jpg"></div>
                      <div class="swiper-slide"><img src="schoolpic/20240221_141032_lmc_8.4.jpg"></div>
                      <div class="swiper-slide"><img src="schoolpic/20240221_141042_lmc_8.4(1).jpg"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
            </section>
            <section id="faq">
                <h2>FAQ</h2>
                <p><b>Кто создал этот сайт?</p></b>
                <p>Обучающийся 8Б класса Пятков Вячеслав</p>
                <p><b>Что использовалось во время разработки сайта?</p></b>
                <p>Для создания сайта использовались Php, Css, JavaScript и многое другое</p>
            </section>
            <section id="contact-section">
                <h2>Контакты</h2>
                <p>Вы всегда можете связаться с нами по следующим контактам:</p>
                <p>Адрес: ул. Микрорайон, 12, Бердск, Новосибирская обл</p>
                <p>Телефон: +7 (383) 414-86-55</p>
                <p>Email: s_11_berdsk@edu54.ru</p>
                <div id="map" style="width: 100%; height: 400px;"></div>
            </section>
        </main>
        <footer>
            <p>&copy; 2024 Школьный класс 8Б. Все права защищены.</p>
        </footer>
    </div>
    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
          },
          mousewheel: true,
          keyboard: true,
        });
      </script>
</body>
</html>
