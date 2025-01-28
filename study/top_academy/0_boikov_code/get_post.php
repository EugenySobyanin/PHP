<?
// Для отправки переменной с одной страницы на другую в PHP, вы можете использовать методы GET и POST. 

// 1. Использование метода GET:
   - На странице, откуда вы отправляете переменную:
   
   $variable = 'значение переменной';
   header('Location: другая_страница.php?variable=' . urlencode($variable));
   exit;
   

//    - На странице, куда вы отправляете переменную:
   
   $variable = $_GET['variable'];
   echo $variable;
   

// 2. Использование метода POST:
//    - На странице, откуда вы отправляете переменную:
   
   $variable = 'значение переменной';
   $url = 'другая_страница.php';
   $data = array('variable' => $variable);

   $options = array(
       'http' => array(
           'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
           'method'  => 'POST',
           'content' => http_build_query($data),
       ),
   );

   $context  = stream_context_create($options);
   $result = file_get_contents($url, false, $context);
   

//    - На странице, куда вы отправляете переменную:
   
   $variable = $_POST['variable'];
   echo $variable;
   

// Обратите внимание, что при использовании метода GET переменная будет отображаться в URL-адресе, а при использовании метода POST она будет отправляться в теле запроса и не будет отображаться в URL. Выберите подходящий метод в зависимости от ваших потребностей.
