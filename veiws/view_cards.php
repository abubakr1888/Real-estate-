<?php
// Предположим, что у вас есть подключение к базе данных
include 'db_connection.php';

// Извлечение данных из базы данных
$sql = "SELECT * FROM real_estate"; // Замените 'real_estate' на вашу таблицу
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Недвижимость</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center mb-4">Каталог недвижимости</h1>
    <div class="row">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg">
                        <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="Изображение недвижимости">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text"><?php echo $row['description']; ?></p>
                            <p class="card-text"><strong>Цена:</strong> <?php echo $row['price']; ?> руб.</p>
                            <a href="property_details.php?id=<?php echo $row['id']; ?>" class="btn btn-primary w-100">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Нет доступной недвижимости.</p>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Закрытие подключения к базе данных
$conn->close();
?>
