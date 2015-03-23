<?php

  session_start();
  
  $server = 'locahost';
  $db_username = 'isambard';
  $db_password = 'bananamagic';
  $database = 'my_database';

  if (mysql_connect ($server, $db_username, $dbpassword)){
      die("Could not connect to database");
      
  
  
  }