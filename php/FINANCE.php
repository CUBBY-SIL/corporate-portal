<?php
    $host='localhost';
    $database='reestr';
    $user='root';
    $password='';

    $conn = mysqli_connect($host, $user, $password, $database);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    // Выполнение запроса для получения данных из таблицы
    $query =  "SELECT `id`, `name` FROM srcs_financ";
    $result = mysqli_query($conn, $query);
    // Формирование массива данных клиентов
    $fin = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $fin[] = array(
            'id' => $row["id"],
            'name' => $row["name"]
        );
    }

    // Закрытие соединения с базой данных
    mysqli_close($conn);

    // Вывод данных в формате JSON
    echo json_encode($fin);
?>