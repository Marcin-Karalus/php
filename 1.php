<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
    $name = 'Krystyna';
      echo 'imię: $name</br>';
      echo "imię: $name</br>";
      echo 'text</br>';
      // typy danych
      // boolean

    $prawda = true;
    $false = false;
    // zapisuj zmienne bez polskich znaków w języku angielskim

    echo $prawda; //zwraca 1
    echo $false;  // nic nie zwraca

    //intiger

      $bin = 0b1010; // 10 binarnie
      echo $bin;
      $dec = 10;   // 10
      $oct = 010;  // 10
      $hex = 0x10; //10
// skladnia heredoc
      $name='Anna';
      $surname='Nowak';
      $text = <<<Label
      heredoc </br>
      Imię : $name,
      Nazwisko : $surname
      <hr>
      Label;

      echo $text;

      echo <<<l
      heredoc 2<br>
      Imię: $name <br>
      l;

      echo <<<l
      nowdoc 2<br>
      Imię: $name <br>
      l;

      $city='Poznań';
      echo "Nazwa zmiennej: \$City, wartość: $city";
      wartość: $city;

     ?>
  </body>
</html>
