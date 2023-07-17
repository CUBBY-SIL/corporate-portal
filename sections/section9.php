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
        <script src="./js/show_hide_form.js"></script>
        
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

                <div id="form_add_edit" style="display:none;">

                    <h2 id="h_add" style="display:none;">Добавить пользователя</h2>
                    <h2 id="h_edit" style="display:none;">Редактировать данные</h2>

                        <form name="form-add_user" id="form-add_user">

                            <div id="edit_num_row" class="inner-block-add" style="margin-bottom:25px; display:none;">
                                <label for="reestr-edit-num_row" class="label-style" style="text-align: left; margin-left:8px;">ID Записи:</label>
                                <input class="input_block" type="text" name="reestr-edit-num_row" id="reestr-edit-num_row" placeholder="Введите номер" />
                            </div>
                            
                            <div class="block-add" >
                                <div class="inner-block-add">
                                    <label for="user-add-login" class="label-style">Логин:</label>
                                    <input class="input_block" type="text" name="user-add-login" id="user-add-login" placeholder="Введите логин" />
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="user-add-pass" class="label-style">Пароль:</label>
                                    <input class="input_block" type="text"  name="user-add-pass" id="user-add-pass" placeholder="Введите пароль"/>
                                </div>
                                    
                                <div class="inner-block-add">
                                    <label for="user-add-name" class="label-style">Имя:</label>
                                    <input class="input_block" type="text"  name="user-add-name" id="user-add-name" placeholder="Введите имя"/>
                                </div>
                                    
                                <div class="inner-block-add">
                                    <label for="user-add-mid_name" class="label-style">Отчество:</label>
                                    <input class="input_block" type="text"  name="user-add-mid_name" id="user-add-mid_name" placeholder="Введите отчество"/>
                                </div>
                                    
                                <div class="inner-block-add">
                                    <label for="user-add-last_name" class="label-style">Фамилия:</label>
                                    <input class="input_block" type="text"  name="user-add-last_name" id="user-add-last_name" placeholder="Введите фамилию"/>
                                </div>
                            </div><!-- END DIV BLOCK ADD -->
                            
                            <div class="inner-block-add">
                                <label for="user-add-status" class="label-style" style="text-align: left;">Уровень доступа:</label>
                                <select id="user-add-status" name="user-add-status" class="input_block2" style="width:250px;">
                                    <option selected disabled value="0">Выберите уровень доступа</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                             
                            <input class="submit1" id="btn_sub_add" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Добавить пользователя"
                            onclick="return validate_form_add_users( );"
                            />
                            <input class="submit1" id="btn_sub_edit" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Редактировать данные"
                            onclick="return validate_form_add_users( );"
                            />
                        </form><br/>
                </div><!--END FORM ADD EDIT -->

                <div id="form_delete" style="display:none;">
                    <h2>Удалить пользователя</h2><br/>

                    <form name="form3" method="post" action="./php/delete_categories.php" id="form1" style="display:block" onsubmit="return validate_form_categories_delete ( );" >
                        <input class="input_block" type="text" name="notifications-delete" id="notifications-delete" placeholder="Введите номер строки" />
                        <br/><br/>
                        <input class="submit1" type="submit" name="submit1" value="Удалить"/>
                    </form><br/>
                </div><!-- END FORM DELETE -->
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