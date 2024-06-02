

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require 'connectDB.php';

$case = $_POST['case'];

if ($case == '') {
    echo '<p class="p-danger">введите значение</p>';
    exit();
}

$sql = 'INSERT INTO list_table (your_case)VALUES (?)';

$query = $pdo->prepare($sql);

$query->execute([$case]);

header('location: /');
?>
</body>
</html>