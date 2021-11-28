<?php

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "local_idm232";  
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (myqli_connect_errno()) {
    die ("Datasbase connection failed: " .
       mysqli_connect_error() . 
       " (" . mysqli_connect_errno() . ")"
    );
  }