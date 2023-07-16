<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        <script src="./js/validate_reestr.js"></script>
        <script src="./js/show_hide_form.js"></script>
        <script src="./js/fill_select/fill_kosgu.js"></script>
        <script src="./js/fill_select/fill_finance.js"></script>
        <script src="./js/fill_select/fill_branch.js"></script>
        <script src="./js/fill_select/fill_kvr.js"></script>
        <script src="./js/fill_select/fill_letter.js"></script>
        <script src="./js/fill_table/fill_reestr.js"></script>
        
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

                    <br/>

                    <form  name="form_add_reestr" id="form_add_reestr" onsubmit="return validate_form_add_reestr( );" >

                        <div id="edit_num_row" class="inner-block-add" style="margin-bottom:25px; display:none;">
                            <label for="reestr-edit-num_row" class="label-style" style="text-align: left; margin-left:8px;">ID Записи:</label>
                            <input class="input_block" type="text" name="reestr-edit-num_row" id="reestr-edit-num_row" placeholder="Введите номер" />
                        </div>
                        
                        <div class="block-add">
                        
                            <div class="inner-block-add">
                                <label for="reest-add-num_contract" class="label-style">Номер договора:</label>
                                <input class="input_block" type="text" name="reest_add_num_contract" id="reest-add_num_contract" placeholder="Номер договора" />
                            </div>
                            
                            <div class="inner-block-add">
                                <label for="reest-add-date_contr" class="label-style">Дата договора:</label>
                                <input class="input_block" type="date"  name="reest_add_date_contr" id="reest-add_date_contr" />
                            </div>
                            
                            <div class="inner-block-add">
                                <label for="reest-add-subject_contr" class="label-style" style="margin-top:-5px;">Предмет договора:</label>
                                <input class="input_block" type="text"  name="reest-add-subject_contr" id="reest-add-subject_contr" placeholder="Наименование" />
                            </div>
                            
                        </div>
    <!-----------------------------------------------------------------------------------------------------------------------------------------------------> 
                        <div class="grid2">
                            
                        <div>
                            <fieldset>
                                <legend>Контрагент</legend>
                                <div >
                                    <div id="reest-add-input-partner_name" class="inner-block-add">
                                        <label for="reest-add-partner_name" class="label-style" style="text-align: left;">Наименование:</label>
                                        <input class="input_block2" type="text"  name="reest-add-partner_name" id="reest-add-partner_name" placeholder="Наименование"/>
                                        <label for="reest-add-partner_inn" class="label-style" style="text-align: left;">ИНН:</label>
                                        <input class="input_block2" type="text"  name="reest-add-partner_inn" id="reest-add-partner_inn" placeholder="ИНН"/>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        
                        <div>
                            <fieldset>
                                
                                <legend>Цена договора</legend>
                                <div >
                                    <div id="reest-add-input-price" class="inner-block-add">
                                        <label for="reest-add-price_agreed" class="label-style" style="text-align: left;">Согласованная:</label>
                                        <input class="input_block2" type="text"  name="reest-add-price_agreed" id="reest-add-price_agreed" placeholder="Цена согласованная"/>
                                        <label for="reest-add-price_concluded" class="label-style" style="text-align: left;">Заключенная:</label>
                                        <input class="input_block2" type="text"  name="reest-add-price_concluded" id="reest-add-price_concluded" placeholder="Цена заключенная"/>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->   
                        
                            
                        </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="grid2">
                        
                        <div>
                            <fieldset style="height: 99.005px">
                                <legend>КОСГУ</legend>
                                <div id="reest-add-input-kosgu" class="inner-block-add">
                                    <label for="reest-add-num_kosgu" class="label-style" style="text-align: left;">КОСГУ:</label>
                                    <input class="input_block2" type="text"  name="reest-add-kosgu" id="reest-add-kosgu" placeholder="Номер КОСГУ"/>
                                </div>
                                <div id="reest-add-select-kosgu" style="display: none;" class="inner-block-add">
                                    <label for="reest-add-kosgu" class="label-style" style="text-align: left;">КОСГУ:</label>
                                    <select class="input_block2" id="sel_kosgu" name="sel_kosgu"></select>
                                </div>

                                <br>

                                <div id="reest-add-check-sel-kosgu">
                                    <label for="reest-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-kosgu" 
                                    onclick="document.getElementById('reest-add-input-kosgu').style.display='none';
                                            document.getElementById('reest-add-select-kosgu').style.display='grid';
                                            document.getElementById('reest-add-check-sel-kosgu').style.display='none';
                                            document.getElementById('reest-add-check-add-kosgu').style.display='block';">
                                </div>
                                    
                                <div id="reest-add-check-add-kosgu" style="display: none;">
                                    <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-kosgu" 
                                    onclick="document.getElementById('reest-add-input-kosgu').style.display='grid'; 
                                            document.getElementById('reest-add-select-kosgu').style.display='none';
                                            document.getElementById('reest-add-check-sel-kosgu').style.display='block';
                                            document.getElementById('reest-add-check-add-kosgu').style.display='none';">
                                </div>
                            </fieldset>
                        </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div>
                            <fieldset>
                                <legend>Источник финансирования</legend>
                                <div id="reest-add-input-nfin" class="inner-block-add">
                                    <label for="reest-add-nfin" class="label-style" style="margin-top: -5px;">Источник финансирования:</label>
                                    <input class="input_block2" type="text"  name="reest-add-nfin" id="reest-add-nfin" placeholder="Наименование"/>
                                </div>
                                <div id="reest-add-select-nfin" style="display: none;" class="inner-block-add">
                                    <label for="reest-add-nfin" class="label-style" style="margin-top: -5px;">Источник финансирования:</label>
                                    <select class="input_block2" name="sel_fin" id="sel_fin"></select>
                                </div>

                                <br>

                                <div id="reest-add-check-sel-nfin">
                                    <label for="reest-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-nfin" 
                                    onclick="document.getElementById('reest-add-input-nfin').style.display='none';
                                            document.getElementById('reest-add-select-nfin').style.display='grid';
                                            document.getElementById('reest-add-check-sel-nfin').style.display='none';
                                            document.getElementById('reest-add-check-add-nfin').style.display='block';">
                                </div>
                                
                                <div id="reest-add-check-add-nfin" style="display: none;">
                                    <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-nfin" 
                                    onclick="document.getElementById('reest-add-input-nfin').style.display='grid';
                                            document.getElementById('reest-add-select-nfin').style.display='none';
                                            document.getElementById('reest-add-check-sel-nfin').style.display='block';
                                            document.getElementById('reest-add-check-add-nfin').style.display='none';">
                                </div>
                            </fieldset>
                        </div>
                            
                        </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="grid2">
                        
                        <div>
                            <fieldset>
                                <legend>Филиал</legend>
                                <div id="reest-add-input-office" class="inner-block-add">
                                    <label for="reest-add-office" class="label-style" style="text-align: left;">Филиал:</label>
                                    <input class="input_block2" type="text"  name="reest-add-office" id="reest-add-office" placeholder="Наименование"/>
                                </div>
                                <div id="reest-add-select-office" style="display: none;" class="inner-block-add">
                                    <label for="reest-add-office" class="label-style" style="text-align: left;">Филиал:</label>
                                    <select id="sel_branch" name="sel_branch" class="input_block2"></select>
                                </div>

                                <br>

                                <div id="reest-add-check-sel-office">
                                    <label for="reest-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-office" 
                                    onclick="document.getElementById('reest-add-input-office').style.display='none';
                                            document.getElementById('reest-add-select-office').style.display='grid';
                                            document.getElementById('reest-add-check-sel-office').style.display='none';
                                            document.getElementById('reest-add-check-add-office').style.display='block';">
                                </div>
                                    
                                <div id="reest-add-check-add-office" style="display: none;">
                                    <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-office" 
                                    onclick="document.getElementById('reest-add-input-office').style.display='grid';
                                            document.getElementById('reest-add-select-office').style.display='none';
                                            document.getElementById('reest-add-check-sel-office').style.display='block';
                                            document.getElementById('reest-add-check-add-office').style.display='none';">
                                </div>
                            </fieldset>
                        </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                        
                            
                        <div>
                            <fieldset>
                                <legend>КВР</legend>
                                <div id="reest-add-input-kvr" class="inner-block-add">
                                    <label for="reest-add-num_kvr" class="label-style">КВР:</label>
                                    <input class="input_block2" type="text"  name="reest-add-kvr_contr" id="reest-add-kvr_contr" placeholder="Номер КВР"/>
                                </div>
                                <div id="reest-add-select-kvr" style="display: none;" class="inner-block-add">
                                    <label for="reest-add-kvr" class="label-style">КВР:</label>
                                    <select id="reest-add-sel_kvr" name="reest-add-sel_kvr" class="input_block2"></select>
                                </div>

                                <br>

                                <div id="reest-add-check-sel-kvr">
                                    <label for="reest-add-check-select" class="label-style">Выбрать из имеющихся</label>
                                    <input type="checkbox"  id="reest-add-check-select-kvr" 
                                    onclick="
                                        $('#reest-add-check-add-kvr').prop('checked', false);
                                        
                                        document.getElementById('reest-add-input-kvr').style.display='none';
                                            document.getElementById('reest-add-select-kvr').style.display='grid';
                                            document.getElementById('reest-add-check-sel-kvr').style.display='none';
                                            document.getElementById('reest-add-check-add-kvr').style.display='block';
                                            "><br>
                                </div>
                                    
                                <div id="reest-add-check-add-kvr" style="display: none;">
                                    <label for="reest-add-check-adding" class="label-style">Добавить новое значение</label>
                                    <input type="checkbox"  id="reest-add-check-add-kvr" 
                                    onclick="
                                        $('#reest-add-check-select-kvr').prop('checked', false);
                                        
                                        document.getElementById('reest-add-input-kvr').style.display='grid';
                                            document.getElementById('reest-add-select-kvr').style.display='none';
                                            document.getElementById('reest-add-check-sel-kvr').style.display='block';
                                            document.getElementById('reest-add-check-add-kvr').style.display='none';
                                            ">
                                </div>

                            </fieldset>
                        </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------->   
                        <div>
                            <fieldset>
                                <legend>Письмо согласования</legend>
                                <div id="reest-add-input-message" class="inner-block-add">
                                    
                                    <label for="reest-add-message" class="label-style" style="text-align: left;">Наименование:</label>
                                    <input class="input_block2" type="text"  name="reest-add-message_name" id="reest-add-message_name" placeholder="Наименование"/>
                                    
                                    <label for="reest-add-messag" class="label-style" style="text-align: left;">Дата:</label>
                                    <input class="input_block2" type="date"  name="reest-add-message_date" id="reest-add-message_date" placeholder="Дата"/>
                                    
                                </div>
                                
                                <div id="reest-add-select-message" style="display: none;" class="inner-block-add">
                                    <label for="reest-add-message" class="label-style" style="text-align: left;">Наименование:</label>                  
                                    <select class="input_block2" id="reest-add-sel_letter" name="reest-add-sel_letter"></select>
                                    
                                    <label for="reest-add-messag" class="label-style" style="text-align: left;">Дата:</label>
                                    <input class="input_block2" type="date"  name="reest-add-message_date2" id="reest-add-message_date" placeholder="Дата"/>
                                </div>

                                <br>

                                <div id="reest-add-check-sel-message">
                                    <label for="reest-add-check-select-message" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="reest-add-check-select-message" 
                                    onclick="document.getElementById('reest-add-input-message').style.display='none';
                                            document.getElementById('reest-add-select-message').style.display='grid';
                                            document.getElementById('reest-add-check-sel-message').style.display='none';
                                            document.getElementById('reest-add-check-add-message').style.display='block';">
                                </div>
                                    
                                <div id="reest-add-check-add-message" style="display: none;">
                                    <label for="reest-add-check-adding-message" class="label-style">Добавить новое значение</label><input type="checkbox" id="reest-add-check-select-message" 
                                    onclick="document.getElementById('reest-add-input-message').style.display='grid'; 
                                            document.getElementById('reest-add-select-message').style.display='none'; 
                                            document.getElementById('reest-add-check-sel-message').style.display='block'; 
                                            document.getElementById('reest-add-check-add-message').style.display='none';">
                                </div>
                            </fieldset>
                        </div>
                            
                        </div>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
                        <div class="block-add">
                            <div class="inner-block-add">
                                <label for="reest-add-pfh" class="label-style">ПФХД:</label>
                                <input class="input_block" type="text" name="reest-add-pfh" id="reest-add-pfh" placeholder="ПФХД" />
                            </div>
                            
                            <div class="inner-block-add">
                                <label for="reest-add-paid" class="label-style">Оплачено:</label>
                                <input class="input_block" type="text"  name="reest-add-paid" id="reest-add-paid" placeholder="Оплачено" />
                            </div>
                            
                            <div class="inner-block-add">
                                <label for="reestr-add-comment" class="label-style">Примечание:</label>
                                <textarea class="txt_area_style" style="width:295px;" name="reestr-add-comment" id="reestr-add-comment" placeholder="Введите примечание"></textarea>
                            </div>
                        </div><!-- END DIV BLOCK ADD -->

                        <input class="submit1" id="btn_sub_add" style="margin:0 auto; margin-top:25px; display:none;"  type="button" name="submit1" value="Добавить запись"/>
                        <input class="submit1" id="btn_sub_edit" style="margin:0 auto; margin-top:25px; display:none;"  type="button" name="submit1" value="Редактировать запись"/>

                    </form><br/>
                </div><!-- END DIV FORM ADD EDIT -->

                <div id="form_delete" style="display:none;">
                    <h2>Удалить запись</h2><br/>

                    <form name="form3" method="post" action="del_reestr.php" id="form1" style="display:block" onsubmit="return validate_form_delete_reestr ( );">
                        <input class="input_block" type="text"   name="reestr-delete" id="reestr-delete" placeholder="Введите номер строки" />
                        <br/><br/>
                        <input class="submit1" type="submit" name="submit1" value="Удалить"/>
                    </form><br/>
                </div>

            </div><!-- END DIV FORM BOX -->

            <?  
            if ($_SESSION['name'] == ''){
                echo "<script>
                        document.getElementById('form_box').style.display='none';  
                    </script>";    
            }
            ?>

            <h2>Реестр</h2>
        </div><!-- END DIV INNER CONTENT -->

        <div class="table_box">
            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_rer" name="tbl_rer">
                <thead>
                    <tr>
                        <th>ID_Записи</th>
                        <th>Номер договора</th>
                        <th>Дата</th>
                        <th style="width:300px;">Предмет</th>
                        <th>Контрагент</th>
                        <th>ИНН</th>
                        <th>Цена договора согласована</th>
                        <th>Цена договора заключенный</th>
                        <th>КВР</th>
                        <th>КОСГУ</th>
                        <th>Источник финасирования</th>
                        <th>Филиал</th>
                        <th>Письмо согласования</th>
                        <th>Дата письма согласования</th>
                        <th>ПФХД</th>   
                        <th>Оплачено</th>   
                        <th>Остаток</th>   
                        <th>Примечание</th>   
                    </tr>
                </thead>
            </table>
        </div><!-- END DIV TABLE BOX -->
    </body> 
</html>