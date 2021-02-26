<?php  
   $serverName = "IDEAPAD320-57";   
   $database = "escuela";  
  
//    // Get UID and PWD from application-specific files.   
//    $uid = file_get_contents("C:\AppData\uid.txt");  
//    $pwd = file_get_contents("C:\AppData\pwd.txt");  
  
   try {  
      $conn = new PDO( "sqlsrv:server=$serverName;Database = $database", 'sa','asd12345');   
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
   }  
  
   catch( PDOException $e ) {  
      die( "Error connecting to SQL Server: ".$e->getMessage() );   
   }  
  
   echo "Connected to SQL Server\n";  
  
   $query = 'select * from alumnos';   
   $stmt = $conn->query( $query );   
   while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){   
      print_r( $row );   
   }  
  
   // Free statement and connection resources.   
   $stmt = null;   
   $conn = null;   
?> 