<?php
  session_start();
  // Инициализировать базу
  require_once 'db_connect.php';
  // Инициализацию
  require_once 'init.php';
  // Подключить дополнительные функции
  require_once 'functions.php';
  // Получить route
  $route = isset($_GET['page']) ? $_GET['page'] : 'default'; // f. e. members localhost/?route=members
  // Загрузить модель (данные)
  require_once 'models/' . $route . '-model.php';
  // Загрузить контроллер ()
  require_once 'controllers/' . $route . '-controller.php';
  // Загрузить отображение (html)
  require_once 'templates/' . $route . '-view.php';
?>
