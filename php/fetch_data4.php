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
    $sql =  "SELECT receipts.id AS `id`,
KVR.name AS `kvr`,
KOSGU.name AS `kosgu`,
srcs_financ.name AS `financ`,
receipts.PVH AS `pvhd`,
branch.name AS `filial`,
receipts.sum AS `sum`
FROM receipts
LEFT JOIN KVR ON receipts.id_KVR = KVR.id
LEFT JOIN KOSGU ON receipts.id_KOSGU = KOSGU.id
LEFT JOIN srcs_financ ON receipts.id_srcs_financ = srcs_financ.id
LEFT JOIN branch ON receipts.id_branch = branch.id 
ORDER BY receipts.id;
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