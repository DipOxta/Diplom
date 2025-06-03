<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    
    <title>Главная — Лофт Проект ЭТАЖИ</title>
</head>
<body>
    <?php require 'header.php'; ?>
<main>
    <!-- Скролл меню -->
<section class="menu-scroll">
    <div class="menu-scroll__container">
        <a href="roof.php"><div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">крыша</div></a>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">выставки</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">музей</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">события</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">экскурсии</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">билеты</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">фуд-корт</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">шоу-румы</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img">услуги</div>
        <div class="menu-item"><img src="images/icon.svg" alt="иконка" class="menu-img"><span class="menu-item-longword">сотрудничество</span></div>
    </div>
</section>

<div class="aaaa">
    <h1>тут должен быть слайдер</h1>
</div>

<!-- Блок с акцентами -->
<div class="block_with_accents">
    <a href="museum.php"><div class="accent">
        <div>
            <p class="accent_heading">МУЗЕЙ</p>
            <p class="accent_text">"СВЕТОСКОП"</p>
        </div>
        <img src="images/museum_accent.png" alt="музей" class="accent_img">
    </div></a>
    <a href="roof.php"><div class="accent">
        <div>
            <p class="accent_heading">КРЫША</p>
            <p class="accent_text">"ПАРК В НЕБЕ"</p>
        </div>
        <img src="images/roof_accent.png" alt="крыша" class="accent_img">
    </div></a>
</div>

<!-- блок с рекламой -->
<div class="ads_container">
    <div class="ads">
        <h1 class="ads_heading">Хочешь открыть свой креативный бизнес <br>по-питерски?</h1>
        <a href="collaboration.php"><div class="ads_details">
            <p class="ads_details_text">подробнее о сотрудничестве</p>
            <div class="ads_details_button">
                <img src="images/ads_arrow.svg" alt="стреклка" width="24" height="24">
            </div>
        </div></a>
    </div>
</div>

<!-- Секция с новинками -->
<section class="new">
    <p class="new_heading">НОВИНКИ</p>
    <section class="new_menu-scroll">
        <div class="menu-scroll__container">
            <button class="scroll_button">крыша</button>
            <button class="scroll_button">выставки</button>
            <button class="scroll_button">фестивали</button>
            <button class="scroll_button">акции</button>
            <button class="scroll_button">экскурсии</button>
        </div>
    </section>

    <section class="new_events">

        <div style="background-image: linear-gradient(
                    to top,
                    rgba(13, 13, 13, 1),  
                    rgba(0, 0, 0, 0) 55%       
                    );">
            <div class="event_container" style="background-image: url('images/background_image.png')">
                <div class="event_text_container">
                    <h1 class="event_heading">я очень длинный текст, который должен браться из БД и обрезаться после двух строк</h1>
                    <p class="event_description">Ежедневно более 1000 людей пробуют наши коктейли и, возвращаясь на крышу, берут их снова</p>
                </div>
            </div>
        </div>

        <div class="event_container">

        </div>
    </section>
    
</section>
</main>
<?php require 'footer.php'; ?>

<script>
    
</script>
</body>
</html>