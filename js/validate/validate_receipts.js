
function validate_form_add_breach ( )
{   
	valid = true;
    
    var kvr_contr = document.getElementById("receipts-add-kvr").value;
    
    var kosgu = document.getElementById("receipts-add-kosgu").value;
    
    var nfin = document.getElementById("receipts-add-nfin").value;
    
    var office = document.getElementById("receipts-add-office").value;
    
    var pfh = document.getElementById("receipts-add-pfh").value;
    
    var summ = document.getElementById("receipts-add-summ").value;
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    var patt_kvr_contr = /^[\d]{3}$/;
    
    var patt_kosgu = /^[\d]{3}$/;

    var patt_nfin = /^[а-яёА-ЯЁ]{8,15}$/;

    var patt_office = /^[а-яёА-ЯЁ]{4,15}$/;

    var patt_pfh = /^[\d]{3,12}$/;

    var patt_summ = /^[\d]{3,12}$/;
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    if ( kvr_contr == "" )
    {
        if(document.getElementById('receipts-add-check-select-kvr-checkbox').checked)
        {
            var kvr_sel = document.getElementById("receipts-add-sel_kvr").value;
            if (kvr_sel == 0){
                alert ("Вы не выбрали значение КВР в выпадающем списке. Пожалуйста выберите значение.")
                valid = false;
                return valid;
            }
        }
        else if(kvr_contr == ""){
            alert ( "Пожалуйста заполните поле 'КВР'." );
            valid = false;
            return valid;
        }   
    }
    else if(patt_kvr_contr.test(kvr_contr) == false)
    {
        alert ( "Введеное значение в поле 'КВР' указано неправильно. Разрешен ввод всех цифр, длинной строго 3 символа. Пример разрешенного ввода: <244>." );
        valid = false;
        return valid;      
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( kosgu == "" )
    {
        if(document.getElementById('receipts-add-check-select-kosgu-checkbox').checked)
        {
            var kosgu_sel = document.getElementById("sel_kosgu").value;
            if (kosgu_sel == 0){
                alert ("Вы не выбрали значение КОСГУ в выпадающем списке. Пожалуйста выберите значение.")
                valid = false;
                return valid;
            }
        }
        else if(kosgu == ""){
            alert ( "Пожалуйста заполните поле 'КОСГУ'." );
            valid = false;
            return valid;
        }
    }
    else if (kosgu !== ""){
        if(patt_kosgu.test(kosgu) == false)
        {
            alert ( "Введеное значение в поле 'КОСГУ' указано неправильно. Разрешен ввод всех цифр, длинной строго 3 символа. Пример разрешенного ввода: <346>." );
            valid = false;
            return valid;      
        }
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( nfin == "" )
    {
        if(document.getElementById('receipts-add-check-select-nfin-checkbox').checked)
        {
            var fin_sel = document.getElementById("sel_fin").value;
            if (fin_sel == 0){
                alert ("Вы не выбрали значение Источник финансирования в выпадающем списке. Пожалуйста выберите значение.")
                valid = false;
                return valid;
            }
        }
        else if(nfin == ""){
            alert ( "Пожалуйста заполните поле 'Источник финансирования'." );
            valid = false;
            return valid;
        } 
    }
    else if(patt_nfin.test(nfin) == false)
    {
        alert ( "Введеное значение в поле 'Источник финансирования' указано неправильно. Разрешен ввод всех букв кириллицы. Пример разрешенного ввода: <внебюджет>." );
        valid = false;
        return valid;     
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    if ( office == "" )
    {
        if(document.getElementById('receipts-add-check-select-office-checkbox').checked)
        {
            var off_sel = document.getElementById("sel_branch").value;
            if (off_sel == 0){
                alert ("Вы не выбрали значение Филиал в выпадающем списке. Пожалуйста выберите значение.")
                valid = false;
                return valid;
            }
        }
        else if(office == ""){
            alert ( "Пожалуйста заполните поле 'Филиал'." );
            valid = false;
            return valid;
        }    
    }
    else if(patt_office.test(office) == false)
    {
        alert ( "Введеное значение в поле 'Филиал' указано неправильно. Разрешен ввод всех букв кириллицы. Пример разрешенного ввода: <Администрация>, <НРВПГиС>." );
        valid = false;
        return valid;    
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    if ( pfh == "" )
    {
        alert ( "Пожалуйста заполните поле 'ПФХД'." );
        valid = false;
    }
    else if(patt_pfh.test(pfh) == false)
    {
        alert ( "Введеное значение в поле 'ПФХД' указано неправильно. Разрешен ввод всех цифр, длинной строго 5 символов. Пример разрешенного ввода: <26453>." );
        valid = false;      
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    if ( summ == "" )
    {
        alert ( "Пожалуйста заполните поле 'Сумма'." );
        valid = false;
    }
    else if(patt_summ.test(summ) == false)
    {
        alert ( "Введеное значение в поле 'Сумма' указано неправильно. \nРазрешен ввод всех цифр, длинной не менее 3 и не более 12 символов. \nПример разрешенного ввода: <18900>." );
        valid = false;      
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

    return valid;
}

function validate_form_delete_receipts ( )
{
	valid = true;
    
    var delete_num = document.getElementById("receipts-delete").value;

    var patt_delete = /^[\d]{1,3}$/;

    if ( delete_num == "" )
    {
        alert ( "Пожалуйста заполните поле 'Номер строки'." );
        valid = false;
    }
    else if(patt_delete.test(delete_num) == false){
        alert("Номер строки введен в неправильном формате. Он должна состоять не менее из 1 и не более из 3 цифр. ");
        valid = false;
    }
    
    if(valid == true){
        alert("Запись успешно удалена!");
    }

    return valid;
}