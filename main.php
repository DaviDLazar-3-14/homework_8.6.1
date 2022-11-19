<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/dog.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Звать меня
                    <?php echo $name, ' ', $surname . '<br>';
                          echo 'город', ' ', $city; ?>
                    </p>

                    <p> Мне
                    <?php  echo $age;   ?>
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                    <p> Получили понимание того как работает браузер </p>
                    <p> Изучили анатомию веб-страницы </p>
                </div>
            </div>

            <div class="knowledge">

                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>

                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>
                     <?php
                        echo $d;
                    ?>

            </div>

            <div class="article">
                <p class="text">
                    Курс ориентирован в первую очередь на новичков, которые решили получить профессию специалиста по пентесту с нуля, и дает полноценную подготовку.
                    Также курс подойдет тестировщикам и системным администраторам, которые хотят расширить свои компетенции и перейти на работу в сфере кибербезопасности.                    
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>