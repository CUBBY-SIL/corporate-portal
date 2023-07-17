<?php
    
    $host='localhost';
    $database='reestr';
    $user='root';
    $password='';

    $conn = new mysqli($host, $user, $password, $database);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    // Выполнение запроса для получения данных из таблицы
    $sql =  "SELECT * FROM users";

    $result = $conn->query($sql);

    $data = [];

    // Проверка наличия данных
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    
    header('Content-Type: application/json');
    echo json_encode($data);

?>