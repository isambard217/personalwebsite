<?php 

  session_start();
  
  $server = 'localhost';
  $db_username = 'root';
  $db_password = '';
  $database='personalwebsite';
  $userexist = 
  
      if(mysql_connect($server, $db_usernmae, $db_password)){
        die('Could not connect to the database');
    
      }
      
      if(!mysql_select_db($database)){
        die('Could not connect to the Database');
      
      }
      
      
?>