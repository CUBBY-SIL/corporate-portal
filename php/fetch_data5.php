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
    $sql =  "SELECT el_acceptance_FBU.id AS `id`,
el_acceptance_FBU.date AS `date`,
el_acceptance_FBU.name_contr AS `name_contr`,
el_acceptance_FBU.name AS `name`,
el_acceptance_FBU.term AS `term`,
el_acceptance_FBU.fact AS `fact`
FROM el_acceptance_FBU 
ORDER BY el_acceptance_FBU.id;
";

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