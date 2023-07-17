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
    $sql =  "SELECT violations.id AS `id`,
branch.name AS `filial`,
violations.name AS `name`,
violations.`number_pp` AS `number_pp`,
violations.`date_pp` AS `date_pp`,
violations.`date_prov_pp` AS `date_prov_pp`,
violations.`date_doc_acceptance` AS `date_doc_acceptance`,
violations.`date_acceptance` AS `date_acceptance`,
violations.`date_providing` AS `date_providing`,
violations.`note` AS `note`
FROM violations
LEFT JOIN branch ON violations.id_branch = branch.id
ORDER BY violations.id;
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