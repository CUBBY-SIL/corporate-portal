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
    $sql =  "SELECT notifications.id AS `id`, 
    contracts_line.date AS `date`, 
    contracts_line.name AS `name`, 
    contracts_line.name_EIS AS `eis`, 
    contracts_line.number_date_protocol AS `num_prot`, 
    contracts_line.IKZ AS `ikz`, 
    srcs_financ.name AS `srcs`,
    KVR.name AS `kvr`,
    KOSGU.name AS `kosgu`,
    contracts_line.object AS `object`, 
    price_delivery.date_delivery AS `date_post`,             
    price_delivery.executive_date_pp AS `isp_date_pp`, 
    price_delivery.executive_date_fact AS `isp_date_fact`, 
    contracts_line.pay_sub AS `pay_subs`,
    contracts_line.pay_budg AS `pay_budg`,           
    contracts_line.ad_agree AS `dop_sogl`,
    paid.transfer_2021 AS `peren_21`,
    contracts_line.pay_sub + contracts_line.pay_budg  AS `opl_22`,
    paid.payment_2023 AS `opl_23`,
    paid.transfer_2021 + (contracts_line.pay_sub + contracts_line.pay_budg) + paid.payment_2023 AS `all_pay`,
    ((price.price_contract_subsidies + price.price_contract_extrabudgetary) + contracts_line.change) - (paid.transfer_2021 + (contracts_line.pay_sub + contracts_line.pay_budg) + paid.payment_2023) AS `ostatok`,
    contracts_line.change AS `change`,
    contracts_line.penalty AS `neustoyka`, 
    contracts_line.terminated AS `rastorgnut`, 
    price.price_contract_subsidies  AS `price_sub`, 
    price.price_contract_extrabudgetary  AS `price_budgt`, 
    price.price_contract_subsidies + price.price_contract_extrabudgetary  AS `price_contr`, 
    price.initial_price  AS `nach`,
    price.initial_price - (price.price_contract_subsidies + price.price_contract_extrabudgetary)  AS `economy`,
    contracts_line.way  AS `way`,
    applications.amount AS `amount`,
    applications.not_take_part AS `not_take_part`,
    applications.`reduction_of_25` AS `reduction_of_25`,
    applications.rejected AS `rejected`,
    contracts_line.status AS `status`,
    contracts_line.reserve AS `reserve`,
    PP.SMP AS `SMP`,            
    PP.`pp126n` AS `pp126n`,
    PP.`pp3500P_OI` AS `pp3500P_OI`,
    PP.`pp3500P_UIS` AS `pp3500P_UIS`,
    PP.`pp1292` AS `pp1292`,
    PP.`pp616` AS `pp616`,
    PP.`pp617` AS `pp617`,
    PP.`pp878` AS `pp878`,            
    PP.`pp1236` AS `pp1236`,           
    PP.`pp2014` AS `pp2014`,
    PP.`type` AS `type`,
    provider.`name` AS `provider`,
    provider.`INN` AS `inn_prov`,            
    contracts_line.consignee AS `gruz`,
    contracts_line.payer AS `payer`,
    contracts_line.reserve2 AS `reserve2`,
    contracts_line.PG AS `pg`,
    contracts_line.note AS `note`,
    date_pp.view AS `view1`,
    date_pp.sum AS `sum1`,
    date_pp.date_PP_or_BG AS `date_PP_or_BG`,
    date_pp.validity_period AS `validity_period1`,
    date_pp.return_date AS `return_date`,
    provision.`guarantee_yesNo` AS `guarantee_yesNo`,
    provision.view AS `view2`,
    provision.sum AS `sum2`,
    provision.date_PP_or_BG AS `date_PP_or_BG`,
    provision.validity_period AS `validity_period2`,
    provision.date_return AS `date_return`
FROM notifications
LEFT JOIN contracts_line ON notifications.id_contracts_line = contracts_line.id
LEFT JOIN price ON contracts_line.id_price = price.id
LEFT JOIN price_delivery ON contracts_line.id_price_delivery = price_delivery.id
LEFT JOIN srcs_financ ON contracts_line.id_srcs_financ = srcs_financ.id
LEFT JOIN KVR ON contracts_line.id_KVR = KVR.id
LEFT JOIN KOSGU ON contracts_line.id_KOSGU = KOSGU.id
LEFT JOIN paid ON contracts_line.id_paid = paid.id
LEFT JOIN applications ON contracts_line.id_application = applications.id
LEFT JOIN PP ON contracts_line.id_PP = PP.id
LEFT JOIN provider ON contracts_line.id_provider = provider.id
LEFT JOIN date_pp ON contracts_line.id_date_pp = date_pp.id
LEFT JOIN provision ON contracts_line.id_provision = provision.id";

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