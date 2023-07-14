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
    $sql =  "SELECT reestr_60k.id AS `id`, 
            reestr_60k.name AS `name`, 
            reestr_60k.date AS `date`, 
            reestr_60k.object AS `object`,
            counterparty.name AS `counter`,
            counterparty.INN AS `inn`,
            price_dogovor.agreed AS `dogovor_agreed`, 
            price_dogovor.concluded AS `dogovor_concluded`, 
            KVR.name AS `KVR_name`, 
            KOSGU.name AS `KOSGU_name`, 
            srcs_financ.name AS `fin_name`, 
            branch.name AS `branch_name`, 
            letter_appr.name AS `letter_name`,  
            reestr_60k.letter_date AS `letter_date`,  
            reestr_60k.PVH AS `PVH`,
            reestr_60k.paid AS `paid`,
            price_dogovor.agreed - reestr_60k.paid  AS `balance`,
            reestr_60k.note AS `note_name`
            FROM reestr_60k 
            JOIN price_dogovor ON reestr_60k.id_price_dogovor = price_dogovor.id
            JOIN KVR ON reestr_60k.id_KVR = KVR.id
            JOIN KOSGU ON reestr_60k.id_KOSGU = KOSGU.id
            JOIN branch ON reestr_60k.id_branch = branch.id
            JOIN letter_appr ON reestr_60k.id_letter_appr = letter_appr.id
            JOIN srcs_financ ON reestr_60k.id_srcs_financ = srcs_financ.id
            JOIN counterparty ON reestr_60k.id_counterparty = counterparty.id
            ORDER BY reestr_60k.id;";

    $result = $conn->query($sql);

    $data = [];

    // Проверка наличия данных
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
?>