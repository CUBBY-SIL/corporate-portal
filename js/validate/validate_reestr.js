
function validate_form_add_reestr ( )
{   
	valid = true;
    
    var num_contract = document.getElementById("reest-add_num_contract").value;
    
    var date_contr = document.getElementById("reest-add_date_contr").value;
    
    var subject_contr = document.getElementById("reest-add-subject_contr").value;
    
    var partner_name = document.getElementById("reest-add-partner_name").value;
    
    var partner_inn = document.getElementById("reest-add-partner_inn").value;
    
    var price_agreed = document.getElementById("reest-add-price_agreed").value;
    
    var price_concluded = document.getElementById("reest-add-price_concluded").value;

    var kosgu = document.getElementById("reest-add-kosgu").value;
    
    var nfin = document.getElementById("reest-add-nfin").value;
    
    var office = document.getElementById("reest-add-office").value;
    
    var kvr_contr = document.getElementById("reest-add-kvr_contr").value;
    
    var message_name = document.getElementById("reest-add-message_name").value;
    
    var message_date = document.getElementById("reest-add-message_date").value;
    
    var pfh = document.getElementById("reest-add-pfh").value;
    
    var paid = document.getElementById("reest-add-paid").value;
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    var patt_num_contract = /^[\d\-]{3,10}$/;
    
    var patt_subject_contr = /^[а-яёА-ЯЁ\.\,\-\s]{3,60}$/;
    
    var patt_partner_name = /^[а-яёА-ЯЁ\s\-\.\"]{3,20}$/;
    
    var patt_partner_inn = /^[\d]{10,15}$/;
    
    var patt_price_agreed = /^[\d\,\s]{4,18}$/;
    
    var patt_price_concluded = /^[\d\,\s]{4,18}$/;
    
    var patt_kosgu = /^[\d]{3}$/;

    var patt_nfin = /^[а-яёА-ЯЁ]{8,15}$/;
    
    var patt_office = /^[а-яёА-ЯЁ]{4,15}$/;
    
    var patt_kvr_contr = /^[\d]{3}$/;
    
    var patt_message_name = /^[а-яёА-ЯЁ\d\.\,\s]{3,15}$/;
    
    var patt_pfh = /^[\d]{5}$/;
    
    var patt_paid = /^[\d\,\s]{4,18}$/;
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    
    if ( num_contract == "" )
    {
        alert ( "Пожалуйста заполните поле 'Номер документа'." );
        valid = false;
        return valid;
    }
    else if(patt_num_contract.test(num_contract) == false)
    {
        alert ( "Введеное значение в поле 'Номер документа' указано неправильно. Разрешен ввод всех цифр, а также спец. символа <->. Примеры разрешенного ввода: 0367004, 03-22." );
        valid = false;
        return valid;
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( date_contr == "" )
    {
        alert ( "Пожалуйста заполните поле 'Дата договора'." );
        valid = false;
        return valid;
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( subject_contr == "" )
    {
        alert ( "Пожалуйста заполните поле 'Предмет договора'." );
        valid = false;
        return valid;
    }
    else if(patt_subject_contr.test(subject_contr) == false)
    {
        alert ( "Введеное значение в поле 'Предмет договора' указано неправильно. Разрешен ввод всех букв кириллицы, а также спец. символов <.>, <,>, <->. Примеры разрешенного ввода: <Хоз.товары, моющие, обеззараживающие>, <Мойка служебных автомобилей. Тойота Камри, Лада Гранта.>." );
        valid = false;
        return valid;    
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( partner_name == "" )
    {
        alert ( "Пожалуйста заполните поле 'Наименование контрагента'." );
        valid = false;
        return valid;
    }
    else if(patt_partner_name.test(partner_name) == false)
    {
        alert ( "Введеное значение в поле 'Наименование контрагента' указано неправильно. Разрешен ввод всех букв кириллицы, а также спец. символов <.>, <,>, <->. Примеры разрешенного ввода: <ИП Шмырин А.А.>, <ООО Сибирь-импульс>." );
        valid = false;
        return valid;   
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( partner_inn == "" )
    {
        alert ( "Пожалуйста заполните поле 'ИНН контрагента'." );
        valid = false;
        return valid;
    }
    else if(patt_partner_inn.test(partner_inn) == false)
    {
        alert ( "Введеное значение в поле 'ИНН контрагента' указано неправильно. Разрешен ввод всех цифр. Примеры разрешенного ввода: <5405061120>, <7719037972>." );
        valid = false;
        return valid;    
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( price_agreed == "" )
    {
        alert ( "Пожалуйста заполните поле 'Цена договора. Согласованная'." );
        valid = false;
        return valid;
    }
    else if(patt_price_agreed.test(price_agreed) == false)
    {
        alert ( "Введеное значение в поле 'Цена договора. Согласованная' указано неправильно. Разрешен ввод всех цифр, а также спец. символа <,>. Примеры разрешенного ввода: <18 690,00>, <122 592>." );
        valid = false;
        return valid;    
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/ 
    if ( price_concluded == "" )
    {
        alert ( "Пожалуйста заполните поле 'Цена договора. Заключенная'." );
        valid = false;
        return valid;
    }
    else if(patt_price_concluded.test(price_concluded) == false)
    {
        alert ( "Введеное значение в поле 'Цена договора. Заключенная' указано неправильно. Разрешен ввод всех цифр, а также спец. символа <,>. Примеры разрешенного ввода: <18 690,00>, <122 592>." );
        valid = false;
        return valid;      
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    if ( kosgu == "" )
    {
        if(document.getElementById('reest-add-check-select-kosgu-checkbox').checked)
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
        if(document.getElementById('reest-add-check-select-nfin-checkbox').checked)
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
        if(document.getElementById('reest-add-check-select-office-checkbox').checked)
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
    if ( kvr_contr == "" )
    {
        if(document.getElementById('reest-add-check-select-kvr-checkbox').checked)
        {
            var kvr_sel = document.getElementById("reest-add-sel_kvr").value;
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
    if ( message_name == "" )
    {
        if(document.getElementById('reest-add-check-select-message-checkbox').checked)
        {
            var mssg_sel = document.getElementById("reest-add-sel_letter").value;
            var mssg_sel_date = document.getElementById("reest-add-message_date2").value;
            if (mssg_sel == 0){
                alert ("Вы не выбрали значение Письмо согласования в выпадающем списке. Пожалуйста выберите значение.")
                valid = false;
                return valid;
            }
            else if (mssg_sel_date == ""){
                alert ( "Пожалуйста заполните поле 'Письмо согласования. Дата'." );
                valid = false;
                return valid;
            }
        }
        if(!(document.getElementById('reest-add-check-select-message-checkbox').checked)){
            if(message_name == ""){
                alert ( "Пожалуйста заполните поле 'Письмо согласования. Наименование'." );
                valid = false;
                return valid;
            }
        }    
    }
    else if(patt_message_name.test(message_name) == false)
    {
        alert ( "Введеное значение в поле 'Письмо согласования. Наименование' указано неправильно. Разрешен ввод всех цифр, всех букв кириллицы, а также спец. символа <.>. Примеры разрешенного ввода: <516>, <Вакуленко А.В.>." );
        valid = false; 
        return valid;     
    }

    if ( (message_date == "") && (!(document.getElementById('reest-add-check-select-message-checkbox').checked)) )
    {
        alert ( "Пожалуйста заполните поле 'Письмо согласования. Дата'." );
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
    else if ( paid == "" )
    {
        alert ( "Пожалуйста заполните поле 'Оплачено'." );
        valid = false;
    }
    else if(patt_paid.test(paid) == false)
    {
        alert ( "Введеное значение в поле 'Оплачено' указано неправильно. Разрешен ввод всех цифр, а также спец. символа <,>. Примеры разрешенного ввода: <18 690,00>, <122 592>." );
        valid = false;       
    }
/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    
    return valid;
}

function validate_form_delete_reestr ( )
{
	valid = true;
    
    var delete_num = document.getElementById("reestr-delete").value;

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