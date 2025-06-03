<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title></title>
  <link href="header.css" rel="stylesheet">
</head>
<body>
    <header class="header">
    <div class="container">

        <a href="index.php" class="logo">
          <img src="images/logo.png" alt="Логотип" class="logo__img">
        </a>

      <div class="header_menu_container">
        <!-- Бургер-кнопка -->
        <button class="burger" aria-label="Открыть меню" aria-expanded="false">
          <div class="burger__line_container">
          <span class="burger__line"></span>
          <span class="burger__line"></span>
          <span class="burger__line"></span>
          </div>
        </button>
        
        <!-- Мобильное меню -->
        <nav class="mobile-nav" aria-hidden="true">
          <ul class="mobile-nav__list">
            <li><a href="index.php">главная</a></li>
            <li><a href="roof.php">крыша</a></li>
            <li><a href="">выставки</a></li>
            <li><a href="">музей</a></li>
            <li><a href="">события</a></li>
            <li><a href="">экскурсии</a></li>
            <li><a href="">билеты</a></li>
            <li><a href="">фуд-корт</a></li>
            <li><a href="">шоу-румы</a></li>
            <li><a href="">услуги</a></li>
            <li><a href="">сотрудничество</a></li>
          </ul>
        </nav> 

        <a herf="tickets.php"><span class="header_tickets">билеты</span></a>
      </div>
    </div>
    </header>

    <!-- Оверлей (тень) -->
    <div class="overlay"></div>

<script>
  document.querySelector('.burger').addEventListener('click', function() {
    // Переключаем класс на body
    document.body.classList.toggle('menu-open');

    // Обновляем ARIA-атрибуты
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', !expanded);
    document.querySelector('.mobile-nav').setAttribute('aria-hidden', expanded);
  });

  document.querySelector('.overlay').addEventListener('click', function() {
    document.body.classList.remove('menu-open');
  });

</script>
</body>
</html>
