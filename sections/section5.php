<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        <script src="./js/show_hide_form.js"></script>
        <script src="./js/fill_table/fill_fbu.js"></script>
        
        <div class="inner_content">
            <div id="form_box">
                <div class="btn_box">
                    <div id="btn_add">
                        <button id="btn_ad" class="submit1" >Добавить запись</button>
                    </div>

                    <div id="btn_edit">
                        <button id="btn_ed" class="submit1" >Редактировать запись</button>
                    </div>

                    <div id="btn_delete">
                        <button id="btn_del" class="submit1" >Удалить запись</button>
                    </div>
                </div><br/><!-- END DIV BTN BOX -->

                <div id="form_add_edit" style="display:none;">

                    <h2 id="h_add" style="display:none;">Добавить запись</h2>
                    <h2 id="h_edit" style="display:none;">Редактировать запись</h2>

                        <form name="form1_add_edit_fbu" id="form1_add_edit_fbu">
                            
                            <div id="edit_num_row" class="inner-block-add" style="margin-bottom:25px; display:none;">
                                <label for="reestr-edit-num_row" class="label-style" style="text-align: left; margin-left:8px;">ID Записи:</label>
                                <input class="input_block" type="text" name="reestr-edit-num_row" id="reestr-edit-num_row" placeholder="Введите номер" />
                            </div>

                            <div class="block-add">
                                <div class="inner-block-add">
                                    <label for="fbu-add-date" class="label-style">Дата</label>
                                    <input class="input_block" type="date" name="fbu-add-date" id="fbu-add-date"/>
                                </div>
                            
                                <div class="inner-block-add">
                                    <label for="fbu-add-num-contr" class="label-style">№ контракта</label>
                                    <input class="input_block" type="text"  name="fbu-add-num-contr" id="fbu-add-num-contr" placeholder="Введите номер контракта"/>
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="fbu-add-name" class="label-style">Наименование</label>
                                    <input class="input_block" type="text"  name="fbu-add-name" id="fbu-add-name" placeholder="Введите наименование"/>
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="fbu-add-fact" class="label-style">Факт</label>
                                    <input class="input_block" type="text"  name="fbu-add-fact" id="fbu-add-fact" placeholder="Введите факт"/>
                                </div>
                            </div><!-- END DIV BLOCK ADD -->
                            
                            <input class="submit1" id="btn_sub_add" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Добавить запись"
                            onclick="return validate_form_add_fbu( );"
                            />
                            <input class="submit1" id="btn_sub_edit" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Редактировать запись"
                            onclick="return validate_form_add_fbu( );"
                            />

                        </form>
                </div><!--END FORM ADD EDIT -->

                <div id="form_delete" style="display:none;">
                    <h2>Удалить запись</h2><br/>

                    <form name="form3" id="form1" style="display:block">
                        <input class="input_block" type="text"   name="fbu-delete" id="fbu-delete" placeholder="Введите номер строки" />
                        <br/><br/>
                        <input class="submit1" type="button" onclick="return validate_form_delete_fbu( );" name="submit1" value="Удалить запись"/>
                    </form><br/>
                </div><!-- END DIV FORM DELETE --> 

            </div><!-- END DIV FORM BOX --> 

            <?  
            if ($_SESSION['name'] == ''){
                echo "<script>
                        document.getElementById('form_box').style.display='none';  
                    </script>";    
            }
            ?>  

            <h2>Электронная приемная ФБУ</h2>
        </div>

        <div class="table_box" style="overflow-x: hidden;">

            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_elfbu" name="tbl_elfbu">
                <thead>
                    <tr>      
                        <th>ID_Записи</th>
                        <th>Дата</th>     
                        <th>№ контракта</th>         
                        <th style="width:400px;">Наименование</th>       
                        <th>Срок</th>       
                        <th>Факт</th>     
                    </tr>
                </thead>
            </table>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>