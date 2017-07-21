<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Одиночка | Singleton </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

    <?php include_once('../menu.php'); ?>
    <div class="container">
      <h1>Одиночка / Singleton </h1>
  <p>
  Singleton относиться к классу порождающих паттернов.
 Основное назначение – гарантировать существование только одно экземпляра класса.
 Используется для создания всего одного экземпляра класса, и гарантирует, что во время работы программы не появиться второй
<p>
Шаблон Singleton предполагает наличие статического метода для создания экземпляра класса, при обращении к которому возвращается ссылка на оригинальный объект.</p>
<pre>
<code class="php">

  	&lt;?php
  class Singleton
  {
      /**
       * @var Singleton The reference to *Singleton* instance of this class
       */
      protected static $instance;

      /**
       * Returns the *Singleton* instance of this class.
       *
       * @return Singleton The *Singleton* instance.
       */
      public static function getInstance()
      {
          if (null === static::$instance) {
              static::$instance = new static();
          }

          return static::$instance;
      }

      /**
       * Protected constructor to prevent creating a new instance of the
       * *Singleton* via the `new` operator from outside of this class.
       */
      protected function __construct()
      {
      }

      /**
       * Private clone method to prevent cloning of the instance of the
       * *Singleton* instance.
       *
       * @return void
       */
      private function __clone()
      {
      }

      /**
       * Private unserialize method to prevent unserializing of the *Singleton*
       * instance.
       *
       * @return void
       */
      private function __wakeup()
      {
      }
  }

  class SingletonChild extends Singleton
  {
  }

  $obj = Singleton::getInstance();
  \var_dump($obj === Singleton::getInstance());             // bool(true)

  $anotherObj = SingletonChild::getInstance();
  \var_dump($anotherObj === Singleton::getInstance());      // bool(false)

  \var_dump($anotherObj === SingletonChild::getInstance()); // bool(true)
</code>
</pre>
    </div>
  </body>
</html>
