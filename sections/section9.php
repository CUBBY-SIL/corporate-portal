<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        <script src="./js/fill_table/fill_users.js"></script>
        
        <div class="inner_content">
            
        </div><!-- END DIV INNER CONTENT -->

        <div class="table_box" style="overflow-x: hidden;">
            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px; " id="tbl_users" name="tbl_users">  <!--Ширина границ таблицы-->
                <thead>
                    <tr>
                        <th>ID_Записи</th>
                        <th>Логин</th>
                        <th>Пароль</th>
                        <th>Имя</th>
                        <th>Отчество</th>
                        <th>Фамилия</th>
                        <th>Уровень доступа</th>
                    </tr>
                </thead>
            </table>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>