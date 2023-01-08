<?php  // function to connect to the database
function connect_db(){   // 
  $servername = 'localhost';  // name of server 
  $username = 'root';  // username and password written in phpmyadmin home page
  $password ='';
  $database_name = 'kredo_it_abroad';  // the db name to put data in

  $conn = new mysqli($servername, $username, $password, $database_name);

  if($conn -> connect_error):  //if $conn has connect_erro
    die('Connection error '.$conn -> connect_error);  //die=stop execution and show error message
  else:
    return $conn; // 
  endif;
}
?>