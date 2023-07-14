<?
    session_start();
    $host='localhost';
    $database='reestr';
    $user='root';
    $password='';

    $link = mysqli_connect($host, $user, $password, $database);

    $login=$_POST['login'];
    $pass=$_POST['password'];

    $clog="SELECT `login` FROM `users` WHERE `login`='$login'";
    $clresult= mysqli_query($link,$clog) or die(mysqli_error($link));

    $cpass="SELECT `password` FROM `users` WHERE (`login`='$login' AND `password`='$pass') ";
    $cpresult=mysqli_query($link,$cpass) or die(mysqli_error($link));
    
    if (empty($login)){
      echo json_encode ("emptyLog");
    }
    else if (empty($pass)){
      echo json_encode ("emptyPass");
    }
    else if ( (mysqli_num_rows($clresult)==0) || (mysqli_num_rows($cpresult)==0)){
      echo json_encode ("errUsr");
    }
    else{
      $query = "SELECT `status` FROM `users` WHERE (`login`='$login' AND `password`='$pass') ";
      $result = mysqli_query($link, $query) or die(mysqli_error($link));;
      // Проверка наличия результатов запроса
      $row = mysqli_fetch_assoc($result);
      $status = $row['status'];
      // Установка сессии пользователя в зависимости от статуса
      if ($status == 1) {
            // Пользователь - админ
            $_SESSION['name'] = 'admin';
            $_SESSION['login'] = $login;
      } else {
            // Пользователь - обычный
            $_SESSION['name'] = 'user';
            $_SESSION['login'] = $login;
      }
      echo json_encode ("success");
    }
    
    
    /*if(!empty($login)&&!empty($pass)){

      if (mysqli_num_rows($clresult)==0)
      {
          echo ('err_input');
      }
      if (mysqli_num_rows($cpresult)==0)
      {
          echo ('err_input2');
      }

      //Заносим результат выборки в массив 
      $query = "SELECT `status` FROM `users` WHERE (`login`='$login' AND `password`='$pass') ";
      $result = mysqli_query($link, $query) or die(mysqli_error($link));;
      // Проверка наличия результатов запроса
      $row = mysqli_fetch_assoc($result);
      $status = $row['status'];
      // Установка сессии пользователя в зависимости от статуса
      if ($status == 1) {
            // Пользователь - админ
            $_SESSION['name'] = 'admin';
            $_SESSION['login'] = $login;
      } else {
            // Пользователь - обычный
            $_SESSION['name'] = 'user';
            $_SESSION['login'] = $login;
      }
      // Перенаправление пользователя после успешной авторизации
      echo ('success');
    }*/
?>

