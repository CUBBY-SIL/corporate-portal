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
            <div id="form_box">
                <div class="btn_box">
                    <div id="btn_add">
                        <button id="btn_ad" class="submit1" >Добавить пользователя</button>
                    </div>

                    <div id="btn_edit">
                        <button id="btn_ed" class="submit1" >Редактировать данные</button>
                    </div>

                    <div id="btn_delete">
                        <button id="btn_del" class="submit1" >Удалить пользователя</button>
                    </div>
                </div><br/><!-- END DIV BTN BOX -->

            </div><!-- END DIV FORM BOX -->
            
            <h2>Пользователи</h2>
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