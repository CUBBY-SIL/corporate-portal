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
        <script src="./js/fill_table/fill_breach.js"></script>
        
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

                        <form  name="form_add_edit_breach" id="form_add_edit_breach">

                            <div id="edit_num_row" class="inner-block-add" style="margin-bottom:25px; display:none;">
                                <label for="reestr-edit-num_row" class="label-style" style="text-align: left; margin-left:8px;">ID Записи:</label>
                                <input class="input_block" type="text" name="reestr-edit-num_row" id="reestr-edit-num_row" placeholder="Введите номер" />
                            </div>
                            
                            <div class="block-add">
                            
                            <div class="inner-block-add">
                                <label for="breach-num_contract" class="label-style">№ контракта:</label>
                                <input class="input_block" type="text" name="breach-num_contract" id="breach-num_contract" placeholder="Номер контракта" />
                            </div>
                            
                            <div class="inner-block-add">
                                <label for="breach_num_pp" class="label-style">№ п/п:</label>
                                <input class="input_block" type="text"  name="breach_num_pp" id="breach_num_pp" placeholder="Номер п/п"/>
                            </div>
                                
                            </div>
<!-----------------------------------------------------------------------------------------------------------------------------------------------------> 
                            <fieldset style="margin-bottom: 25px;">
                                <legend>Даты</legend>
                                
                                <div class="grid2" style="grid-template-columns: 650px 650px; margin-bottom: 20px;">
                                    
                                    <div id="breach-add-input-date-pp" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                        <label for="breach-add-date-pp" class="label-style" style="text-align: left;">Дата п/п:</label>
                                        <input style="width:330px;" class="input_block" type="date"  name="breach-add-date-pp" id="breach-add-date-pp"/>
                                    </div>
                                
                                    <div id="breach-add-input-date-provide-pp" class="inner-block-add" style="grid-template-columns: 0.7fr 1fr;">
                                        <label for="breach-add-date-provide-pp" class="label-style" style="text-align: left;">Дата предоставления п/п:</label>
                                        <input style="width:330px;" class="input_block" type="date"  name="breach-add-date-provide-pp" id="breach-add-date-provide-pp"/>
                                    </div>
                                    
                                    <div id="breach-add-input-date-doc" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                        <label for="breach-add-date-doc" class="label-style" style="text-align: left;">Дата документа о:</label>
                                        <input style="width:330px;" class="input_block" type="date"  name="breach-add-date-doc" id="breach-add-date-doc"/>
                                    </div>
                                    
                                    <div id="breach-add-input-date-accept" class="inner-block-add" style="grid-template-columns: 0.7fr 1fr;">
                                        <label for="breach-add-date-accept" class="label-style" style="text-align: left;">Дата приемки:</label>
                                        <input style="width:330px;" class="input_block" type="date"  name="breach-add-date-accept" id="breach-add-date-accept"/>
                                    </div>
                                    
                                    <div id="breach-add-input-date-provision" class="inner-block-add" style="grid-template-columns: 0.5fr 1fr;">
                                        <label for="breach-add-date-provision" class="label-style" style="text-align: left;">Дата предоставления:</label>
                                        <input style="width:330px;" class="input_block" type="date"  name="breach-add-date-provision" id="breach-add-date-provision"/>
                                    </div>
                                
                                </div>
                            </fieldset>                                                
  <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="block-add">  
                                <div class="inner-block-add">
                                    <label for="breach-add-comment" class="label-style">Примечание:</label>
                                    <textarea class="txt_area_style" name="breach-add-comment" id="breach-add-comment" placeholder="Введите примечание"></textarea>
                                </div>
                            </div>

                            <input class="submit1" id="btn_sub_add" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Добавить запись"
                            onclick="return validate_form_add_breach( );"
                            />
                            <input class="submit1" id="btn_sub_edit" 
                            style="margin:0 auto; margin-top:25px; display:none;"  type="button" 
                            name="submit1" value="Редактировать запись"
                            onclick="return validate_form_add_breach( );"
                            />
                        </form><br/>
                </div><!-- END DIV FORM ADD EDIT -->

                <div id="form_delete" style="display:none;">
                    <h2>Удалить запись</h2><br/>

                    <form name="form3" method="post" action="./php/delete_categories.php" id="form1" style="display:block" onclick="return validate_form_delete_breach ( );">
                        <input class="input_block" type="text"   name="breach-delete" id="breach-delete" placeholder="Введите номер строки" />
                        <br/><br/>
                        <input class="submit1" type="submit" name="submit1" value="Удалить"/>
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

            <h2>Нарушения</h2>
        </div>

        <div class="table_box" style="overflow-x: hidden;">
            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_nar" name="tbl_nar">
                    <thead>            
                        <tr>      
                            <th>ID_Записи</th>   
                            <th>Филиал</th>        
                            <th >№ контракта</th>            
                            <th style="width:60px;">№ п/п</th>         
                            <th style="width:100px;">Дата п/п</th>
                            <th>Дата предоставления п/п</th>          
                            <th>Дата документа о приемке</th>        
                            <th>Дата приемки</th>   
                            <th>Дата предоставления</th>  
                            <th>Примечание</th>   
                        </tr>
                    </thead>
            </table>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>