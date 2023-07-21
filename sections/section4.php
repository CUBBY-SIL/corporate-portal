<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
        
        <script src="./js/jquery-3.6.1.js"></script>
        <script src="./js/jquery.tablesorter.js"></script>
        <script src="./js/validate/validate_receipts.js"></script>
        <script src="./js/show_hide_form.js"></script>
        <script src="./js/fill_select/fill_kvr_receipts.js"></script>
        <script src="./js/fill_select/fill_kosgu.js"></script>
        <script src="./js/fill_table/fill_receipts.js"></script>
        
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

                    <br>

                        <form name="form1" id="form_add_edit_receipts">
                        
                            <div id="edit_num_row" class="inner-block-add" style="margin-bottom:25px; display:none;">
                                <label for="receipts-edit-num_row" class="label-style" style="text-align: left; margin-left:8px;">ID Записи:</label>
                                <input class="input_block" type="text" name="receipts-edit-num_row" id="receipts-edit-num_row" placeholder="Введите номер" />
                            </div>

                            <div class="grid2">
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div>
                                <fieldset>
                                    <legend>КВР</legend>
                                    <div id="receipts-add-input-kvr" class="inner-block-add">
                                        <label for="receipts-add-num_kvr" class="label-style">КВР:</label>
                                        <input class="input_block2" type="text"  name="receipts-add-kvr" id="receipts-add-kvr" placeholder="Номер КВР"/>
                                    </div>
                                    <div id="receipts-add-select-kvr" style="display: none;" class="inner-block-add">
                                        <label for="receipts-add-kvr" class="label-style">КВР:</label>
                                        <select id="receipts-add-sel_kvr" class="input_block2"></select>
                                    </div>

                                    <br>

                                    <div id="receipts-add-check-sel-kvr">
                                        <label for="receipts-add-check-select-kvr" class="label-style">Выбрать из имеющихся</label>
                                        <input type="checkbox" id="receipts-add-check-select-kvr-checkbox" 
                                                 onclick="$('#receipts-add-check-kvr-checkbox').prop('checked', false);
                                                 document.getElementById('receipts-add-input-kvr').style.display='none';
                                                 document.getElementById('receipts-add-select-kvr').style.display='grid';
                                                 document.getElementById('receipts-add-check-sel-kvr').style.display='none';
                                                 document.getElementById('receipts-add-check-add-kvr').style.display='block';"><br>
                                    </div>
                                        
                                    <div id="receipts-add-check-add-kvr" style="display: none;">
                                        <label for="receipts-add-check-adding-kvr" class="label-style">Добавить новое значение</label>
                                        <input type="checkbox" id="receipts-add-check-kvr-checkbox" 
                                                 onclick="$('#receipts-add-check-select-kvr-checkbox').prop('checked', false);
                                                 document.getElementById('receipts-add-input-kvr').style.display='grid';
                                                 document.getElementById('receipts-add-select-kvr').style.display='none';
                                                 document.getElementById('receipts-add-check-sel-kvr').style.display='block';
                                                 document.getElementById('receipts-add-check-add-kvr').style.display='none';">
                                    </div>
                                </fieldset>
                            </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div>
                                <fieldset>
                                    <legend>КОСГУ</legend>
                                    <div id="receipts-add-input-kosgu" class="inner-block-add">
                                        <label for="receipts-add-kosgu" class="label-style" style="text-align: left;">КОСГУ:</label>
                                        <input class="input_block2" type="text"  name="receipts-add-kosgu" id="receipts-add-kosgu" placeholder="Номер КОСГУ"/>
                                    </div>
                                    <div id="receipts-add-select-kosgu" style="display: none;" class="inner-block-add">
                                        <label for="receipts-add-kosgu" class="label-style" style="text-align: left;">КОСГУ:</label>
                                        <select class="input_block2" id="sel_kosgu"></select>  
                                    </div>

                                    <br>

                                    <div id="receipts-add-check-sel-kosgu">
                                        <label for="receipts-add-check-select" class="label-style">Выбрать из имеющихся</label>
                                        <input type="checkbox" id="receipts-add-check-select-kosgu-checkbox" 
                                                 onclick="$('#receipts-add-check-input-kosgu-checkbox').prop('checked', false);
                                                 document.getElementById('receipts-add-input-kosgu').style.display='none';
                                                 document.getElementById('receipts-add-select-kosgu').style.display='grid';
                                                 document.getElementById('receipts-add-check-sel-kosgu').style.display='none';
                                                 document.getElementById('receipts-add-check-add-kosgu').style.display='block';">
                                    </div>
                                        
                                    <div id="receipts-add-check-add-kosgu" style="display: none;">
                                        <label for="receipts-add-check-adding" class="label-style">Добавить новое значение</label>
                                        <input type="checkbox" id="receipts-add-check-input-kosgu-checkbox" 
                                                 onclick="$('#receipts-add-check-select-kosgu-checkbox').prop('checked', false);
                                                 document.getElementById('receipts-add-input-kosgu').style.display='grid'; 
                                                 document.getElementById('receipts-add-select-kosgu').style.display='none';
                                                 document.getElementById('receipts-add-check-sel-kosgu').style.display='block';
                                                 document.getElementById('receipts-add-check-add-kosgu').style.display='none';">
                                    </div>
                                </fieldset>
                            </div>
                                
                            </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->                       
                            <div class="grid2">
                            
                            <div>
                                <fieldset>
                                    <legend>Источник финансирования</legend>
                                    <div id="receipts-add-input-nfin" class="inner-block-add">
                                        <label for="receipts-add-num_nfin" class="label-style" style="margin-top: -5px;">Источник финансирования:</label>
                                        <input class="input_block2" type="text"  name="receipts-add-nfin" id="receipts-add-nfin" placeholder="Наименование"/>
                                    </div>
                                    <div id="receipts-add-select-nfin" style="display: none;" class="inner-block-add">
                                        <label for="receipts-add-nfin" class="label-style" style="margin-top: -5px;">Источник финансирования:</label>
                                        <select id="receipts-add-nfin" class="input_block2">
                                            <option>Выберите источник финансирования</option>
                                        </select>
                                        
                                    <script>
                                    // Загрузка данных из базы данных и заполнение выпадающего списка
                                    $(document).ready(function() {
                                        $.ajax({
                                            url: 'NFIN.php',
                                            method: 'GET',
                                            dataType: 'json',
                                            success: function(data) {
                                                var dropdown = $('#receipts-add-nfin');
                                                dropdown.empty();

                                                $.each(data, function(index, value) {
                                                    dropdown.append($('<option></option>').attr('value', value.id).text(value.name));
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                            console.log(xhr.responseText);
                                            }
                                        });
                                    });
                                    </script>
                                        
                                    </div>
                                    <br>
                                    <div id="receipts-add-check-sel-nfin">
                                        <label for="receipts-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="receipts-add-check-select-nfin" 
                                                 onclick="document.getElementById('receipts-add-input-nfin').style.display='none';
                                                 document.getElementById('receipts-add-select-nfin').style.display='grid';
                                                 document.getElementById('receipts-add-check-sel-nfin').style.display='none';
                                                 document.getElementById('receipts-add-check-add-nfin').style.display='block';">
                                    </div>
                                    
                                    <div id="receipts-add-check-add-nfin" style="display: none;">
                                        <label for="receipts-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="receipts-add-check-select-nfin" 
                                                 onclick="document.getElementById('receipts-add-input-nfin').style.display='grid';
                                                 document.getElementById('receipts-add-select-nfin').style.display='none';
                                                 document.getElementById('receipts-add-check-sel-nfin').style.display='block';
                                                 document.getElementById('receipts-add-check-add-nfin').style.display='none';">
                                    </div>
                                </fieldset>
                            </div>
                                
                            <div>
                                <fieldset>
                                    <legend>Филиал</legend>
                                    <div id="receipts-add-input-office" class="inner-block-add">
                                        <label for="receipts-add-office" class="label-style" style="text-align: left;">Филиал:</label>
                                        <input class="input_block2" type="text"  name="receipts-add-office" id="receipts-add-office" placeholder="Наименование"/>
                                    </div>
                                    <div id="receipts-add-select-office" style="display: none;" class="inner-block-add">
                                        <label for="receipts-add-office" class="label-style" style="text-align: left;">Филиал:</label>
                                        <select id="receipts-add-office" class="input_block2">
                                            <option>Выберите филиал</option>
                                        </select>
                                    
                                    <script>
                                    // Загрузка данных из базы данных и заполнение выпадающего списка
                                    $(document).ready(function() {
                                        $.ajax({
                                            url: 'OFFICE.php',
                                            method: 'GET',
                                            dataType: 'json',
                                            success: function(data) {
                                                var dropdown = $('#receipts-add-office');
                                                dropdown.empty();

                                                $.each(data, function(index, value) {
                                                    dropdown.append($('<option></option>').attr('value', value.id).text(value.name));
                                                });
                                            },
                                            error: function(xhr, status, error) {
                                            console.log(xhr.responseText);
                                            }
                                        });
                                    });
                                    </script>
                                        
                                    </div>
                                    <br>
                                    <div id="receipts-add-check-sel-office">
                                        <label for="receipts-add-check-select" class="label-style">Выбрать из имеющихся</label><input type="checkbox" id="receipts-add-check-select-office" 
                                        onclick="document.getElementById('receipts-add-input-office').style.display='none';
                                                 document.getElementById('receipts-add-select-office').style.display='grid';
                                                 document.getElementById('receipts-add-check-sel-office').style.display='none';
                                                 document.getElementById('receipts-add-check-add-office').style.display='block';">
                                    </div>
                                        
                                    <div id="receipts-add-check-add-office" style="display: none;">
                                        <label for="receipts-add-check-adding" class="label-style">Добавить новое значение</label><input type="checkbox" id="receipts-add-check-select-office" 
                                        onclick="document.getElementById('receipts-add-input-office').style.display='grid';
                                                 document.getElementById('receipts-add-select-office').style.display='none';
                                                 document.getElementById('receipts-add-check-sel-office').style.display='block';
                                                 document.getElementById('receipts-add-check-add-office').style.display='none';">
                                    </div>
                                </fieldset>
                            </div>
                                
                            </div>
<!----------------------------------------------------------------------------------------------------------------------------------------------------->
                            <div class="block-add">
                                <div class="inner-block-add">
                                    <label for="receipts-add-pfh" class="label-style">ПФХ:</label>
                                    <input class="input_block" type="text" name="receipts-add-pfh" id="receipts-add-pfh" placeholder="Введите ПФХ" />
                                </div>
                                
                                <div class="inner-block-add">
                                    <label for="receipts-add-summ" class="label-style">Сумма:</label>
                                    <input class="input_block" type="text"  name="receipts-add-summ" id="receipts-add-summ" placeholder="Введите сумму" />
                                </div>
                            </div>

                            <input class="submit1" id="btn_sub_add" 
                            style="margin:0 auto; margin-top:50px; display:none;"  type="button" 
                            name="submit1" value="Добавить запись"
                            onclick="return validate_form_add_receipts( );"
                            />
                            <input class="submit1" id="btn_sub_edit" 
                            style="margin:0 auto; margin-top:50px; display:none;"  type="button" 
                            name="submit1" value="Редактировать запись"
                            onclick="return validate_form_add_receipts( );"
                            />

                        </form><br/>
                </div><!-- END DIV FORM ADD EDIT -->

                <div id="form_delete" style="display:none;">
                    <h2>Удалить запись</h2><br/>

                    <form name="form3" id="form1" style="display:block">
                        <input class="input_block" type="text"   name="receipts-delete" id="receipts-delete" placeholder="Введите номер строки" />
                        <br/><br/>
                        <input class="submit1" type="submit" name="submit1" value="Удалить" onclick="return validate_form_delete_receipts( );" />
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
            
            <h2>Чеки</h2>
        </div>

        <div class="table_box" style="overflow-x: hidden;">
            <table style="border: 1px solid #eee;table-layout: fixed;width: 100%;margin-bottom: 20px;" id="tbl_rcps" name="tbl_rcps">
                <thead>            
                    <tr>      
                        <th>ID_Записи</th> 
                        <th>КВР</th>      
                        <th>КОСГУ</th>          
                        <th>Источник финансирования</th>        
                        <th>ПФХД</th>      
                        <th>Филиал</th>        
                        <th>Сумма, руб</th> 
                    </tr>
                </thead>
            </table>
        </div><!-- END DIV TABLE BOX -->
    </body>
</html>