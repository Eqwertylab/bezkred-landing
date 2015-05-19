<!-- Форма -->
<div class="feedback2" id="feedback2">
  <h2>
    <span class="line1">УЗНАТЬ СУММУ И ВАШИ ШАНСЫ НА ВОЗВРАТ ДЕНЕГ</span>
    <span class="line2">ЗВОНОК БЕСПЛАТНЫЙ</span>
  </h2>
  <form action="mail.php" class="form-inline form-feedback" role="form">
    <input type="hidden" name="feedback" value="Средняя форма">
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