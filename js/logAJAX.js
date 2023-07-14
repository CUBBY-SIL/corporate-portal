$( document ).ready(function() {
  $("#btn-log").click(    //Вешаем на кнопку отправки клик
  function(){
    sendAjaxForm('form-enter');
    return false; 
  }
);
});

function sendAjaxForm(ajax_form) {
  $.ajax({
    url: './php/logPHP.php', //url страницы (comment.php)
      type:     "POST", //метод отправки из формы
      dataType: "json", //формат данных
      data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
      success: function(response) {
        if (response == "emptyLog"){
          alert("Поле 'Логин' осталось пустым. Пожалуйста заполните его.");
        }

        if (response == "emptyPass"){
          alert("Поле 'Пароль' осталось пустым. Пожалуйста заполните его.");
        }

        if (response == "errUsr"){
          alert("Логин или пароль указано неправильно. Пожалуйста проверьте данные.");
        }

        if (response == "success"){
          alert("Вы успешно авторизовались!");
          window.location.href = '?id=0';
        }        
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
  })
};