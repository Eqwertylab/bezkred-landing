<h2>
  <span class="line1">УЗНАТЬ СУММУ И ВАШИ ШАНСЫ НА ВОЗВРАТ ДЕНЕГ</span>
  <span class="line2">ОТВЕТЬТЕ НА НЕСКОЛЬКО ПРОСТЫХ ВОПРОСОВ</span>
</h2>

<div id="carousel-wrap-inquiry" class="wrap-inquiry carousel slide">

  <div class="carousel-inner">
    
    <!-- Сами вопросы -->
    <div class="item active">
      
      <div id="carousel-inquiry" class="carousel inquiry slide">
        

        <!-- Вопросы -->
        <div class="carousel-inner inquiry-title">

          <?php
            
            foreach ($queris[$theme] as $key => $value) {
              if($key == 1) {
                echo '<div class="item active">';
              } else {
                echo '<div class="item">';
              }
              echo $value.'</div>';
            }

          ?>

        </div>
        <!-- / Вопросы -->


        <!-- Кнопки -->
        <div class="inquiry-tools">
          <button class="btn btn-theme pull-left" value="Нет">НЕТ</button>
          <button class="btn btn-theme pull-right" value="Да">ДА</button>
        </div>
        <!-- / Кнопки -->

      </div>
      
    </div>
    <!-- Сами вопросы -->
    
    <!-- Форма обратной связи -->
    <div class="item">
      
      <div class="feedback4" id="feedback4">
        <form action="mail.php" class="form-inline form-feedback opros" role="form">
          <input type="hidden" name="feedback" value="Форма в опроснике">
          <input type="hidden" name="url" value="<?php echo $_SERVER[SERVER_NAME].$_SERVER[REQUEST_URI]; ?>">
          <div class="form-group">
            <label class="sr-only" for="inputName">Ваше имя</label>
            <input type="name" name="name" class="form-control" id="inputName" placeholder="Ваше имя">
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputTel">Ваш телефон</label>
            <input type="tel" name="tel" class="form-control" id="inputTel" placeholder="Ваш телефон">
          </div>
          <button type="submit" class="btn btn-theme">Решить проблему</button>
          <p class="footnote">* Заявки, оставленные до 10:00 и после 20:00, обрабатываются в рабочее время.</p>
        </form>
      </div>
      
    </div>
    <!-- / Форма обратной связи -->

  </div>

  <!-- Прогресс -->
  <div class="inquiry-progress">
    <div class="inquiry-status"></div>
  </div>
  <!-- / Прогресс -->
</div>