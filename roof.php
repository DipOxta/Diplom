<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="roof.css">
    <title>Крыша — Лофт Проект ЭТАЖИ</title>
</head>
<body>
<?php require 'header.php'; ?>
<main>
    <div class="roof_img"><div></div></div>
    <section class="info_about_roof">
        <p class="roof_heading">Крыша <br>Лофт  Проект <br>ЭТАЖИ  — </p>

        <!-- площадь и высота -->
        <div class="items_container-1-2">
            <div class="info_item1">
                <img src="images/roof_info1.png" alt="иконка" class="roof_info_icon">
                <p>площадь в <br><span>1200 м<sup style="font-size: 16px;">2</sup></span></p>
            </div>

            <div class="info_item2">
                <img src="images/roof_info2.png" alt="иконка" class="roof_info_icon">
                <p>высота<br><span>27 метров</span></p>
            </div>
        </div>

        <!-- смотровая площадка -->
        <div class="items_container-3-image">
            <div class="items_container-3">
                <p><span>смотровая <br>площадка</span><br>со скамейками</p>
            </div>
        </div>

        <!-- события и вид -->
        <div class="items_container-4-5">
            <div class="info_item4">
                <p>все события<br><span>бесплатны</span></p>
                <img src="images/roof_info4.png" alt="иконка" class="roof_info_icon">
            </div>

            <div class="info_item5">
                <img src="images/roof_info5.png" alt="иконка" class="roof_info_icon5">
                <p>вид на<br><span>лиговский проспект</span></p>
            </div>
        </div>

        <!-- больше информации (билет, график, адрес) -->
        <div class="more_info_about_roof">
            <div class="more_info_container">
                <div class="more_info_row_container">
                    <p class="more_info_heading">{ БИЛЕТ }</p>
                    <p class="more_info_text">300 рублей<br>ВНИМАНИЕ! Все события на крыше бесплатные.</p>
                </div>
                <div class="more_info_row_container">
                    <p class="more_info_heading">{ ГРАФИК }</p>
                    <p class="more_info_text">Ежедневно <br>с 9:00 до 23:00</p>
                </div>
                <div class="more_info_row_container">
                    <p class="more_info_heading">{ АДРЕС }</p>
                    <p class="more_info_text">Лиговский пр, 74. <br>Вход в арку. <br>Пятый этаж.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="visiting_rules">
        <p class="visiting_rules_heading">правила <br>посещения</p>

        <!-- уловия -->
         <div class="rules_container">
            <div class="rule1">
                <div class="rule1-1">
                    <p>свои алкогольные напитки</p>
                    <img src="images/rule1-1.png" alt="нельзя" class="rules_icon">
                </div>
                <div class="rule1-2">
                    <p>продукция Лофт Проект ЭТАЖИ</p>
                    <img src="images/rule1-2.png" alt="можно" class="rules_icon">
                </div>
            </div>
            <div class="rule-2-3_container">
                <div class="rule2">
                    <p>можно с животными</p>
                    <img src="images/rule2.png" alt="можно с животными" class="rules_icon">
                </div>
                <div class="rule3">
                    <p>без взрослых только с 14 лет</p>
                    <img src="images/rule3.png" alt="с 14 лет" class="rules_icon">
                </div>
            </div>
         </div>
    </section>
</main>
</body>
</html>