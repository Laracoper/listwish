<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>список ваших дел</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <section class="list">
            <div class="list__container">
                <h1 class="list__title">
                    список ваших желаний
                </h1>
                <form action="/check.php" method="post" class="list__form">
                    <input type="text" name="case" class="list__input" placeholder="ваше желание...">
                    <button type="submit" class="list__btn">
                        запомнить
                    </button>
                </form>
                <?php
                require 'connectDB.php';
                echo '<ol class="list__case">';
                $query = $pdo->query('SELECT * FROM `list_table` ORDER BY id DESC');
                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                    echo '<li>' . $row->your_case . '</li>';
                }
                echo '</ol>';
                ?>
                <p class="list__text">
                Будьте осторожны со своими желаниями - они имеют свойства сбываться! Никогда и ничего не просите! Никогда и ничего, в особенности у тех, кто сильнее вас.
                </p>
            </div>
        </section>
    </div>
</body>

</html>