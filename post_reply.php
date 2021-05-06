<?php
  require_once("database.php");
	
  $name = $_POST["name"];
  $title = $_POST["title"]; 
  $content = $_POST["content"]; 
  $reply_id = $_POST["reply_id"];

  //建立資料連接
  $link = create_connection();
	
  //執行SQL查詢
  $sql = "INSERT INTO reply_message(name, title, content, reply_id) 
          VALUES ('$name', '$title', '$content', '$reply_id')";
  $result = execute_sql($link, "chat", $sql);

  //關閉資料連接

  
  //將網頁重新導向
  header("location:chat.php?id=" . $reply_id);
  exit();
?>