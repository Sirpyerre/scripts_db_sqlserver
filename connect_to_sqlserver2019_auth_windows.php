<?php
   $database = "blog";
   try {  
      $conn = new PDO( "sqlsrv:server=IDEAPAD320-57;Database = $database", NULL,NULL);   
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
   }  
  
   catch( PDOException $e ) {  
      die( "Error connecting to SQL Server: ".$e->getMessage() );   
   }  
  
   echo "<strong>Connected to SQL Server</strong>";  
  
   $query = 'select * from post';   
   $stmt = $conn->query( $query );   
   while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){  
      echo '<pre>';
      print_r( $row );   
      echo '</pre>';
   
   }  
  
   // Free statement and connection resources.   
   $stmt = null;   
   $conn = null;   
?> 