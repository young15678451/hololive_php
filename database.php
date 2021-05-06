<?php
	$server='localhost';
	$id='root';
	$pwd='';
	$dbname='chat';   
	$con = mysqli_connect($server , $id , $pwd);
	if (!$con){
  		die("Could not connect: " . mysql_error());
  	}
	mysqli_select_db($con , $dbname);
	mysqli_query($con ,"SET NAMES utf8");
	// mysql_close($con);
?>

<?php
  function create_connection()
  {
    $link = mysqli_connect("localhost", "root", "")
      or die("無法建立資料連接: " . mysqli_connect_error());
	  
    mysqli_query($link, "SET NAMES utf8");
			   	
    return $link;
  }
	
  function execute_sql($link, $database, $sql)
  {
    mysqli_select_db($link, $database)
      or die("開啟資料庫失敗: " . mysqli_error($link));
						 
    $result = mysqli_query($link, $sql);
		
    return $result;
  }
?>