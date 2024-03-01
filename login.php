<?php
session_start();

// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siteusers";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$username = $_POST['username'];
$password = $_POST['password'];

// Проверка пользователя в базе данных
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Пользователь найден, создаем сессию
    $_SESSION['username'] = $username;
    header("Location: main.php"); // Перенаправляем на основную страницу
} else {
    // Пользователь не найден, выводим сообщение об ошибке
    header("Location: error.php");
}

$conn->close();
?>
