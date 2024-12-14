<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="../assets/css/CardStyle.css">
    <link rel="stylesheet" href="../assets/css/ButtonStyle.css">
    <link rel="stylesheet" href="../assets/css/Style.css">
</head>

<body>
    <?php include '../includes/Navigationbar.php'; ?>

    <section class="full-screen-section">
        <div class="full-screen-content">
            <h1 class="main-heading">Nano tech</h1>
        </div>
    </section>

    <section>
        <div class="cardcontainer">

            <?php
            // Папка, где находятся изображения
            $dir = '../upload_images/';

            // Получаем список файлов из папки
            $images = array_diff(scandir($dir), array('..', '.'));

            // Генерируем карточки для каждого изображения
            foreach ($images as $image) {
                // Полный путь к изображению
                $imagePath = $dir . $image;
                echo '<div class="card card-custom">';
                echo '<img src="' . $imagePath . '" alt="Изображение дома" class="card-image img-fluid">';
                echo '<div class="card-body">';
                echo '<h3 class="service-name">' . basename($image, ".jpg") . '</h3>';
                echo '<p class="description">Описание дома</p>';
                echo '<button class="btn btn-primary">Подробнее</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>

    <?php include '../includes/Footer.php'; ?>
</body>

</html>