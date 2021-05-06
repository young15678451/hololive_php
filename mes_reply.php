

<?php 
	include_once "database.php";
    session_start();
		
	switch ($_GET["method"]) {
		case "add":
			add();
			break;
		case "update":
			update();
			break;
			
		case "del":
			del();
			break;
		default:
			break;
	}

	
     
	
	function add(){
		$uid = $_SESSION["id"];
		
		$name = $_POST["name"];
		$content = $_POST["content"];
		$reply_id = $_POST["reply_id"];
		$sql = "INSERT INTO `reply_mes` (uid, name, content,reply_id)
		VALUES ('$uid', '$name','$content','$reply_id')";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('新增留言成功');";
		echo "history.back()";
		echo "</script>";
	}
	
	function update(){
		$id = $_GET["id"];
		$title = $_POST["title"];
		$name = $_POST["name"];
		$content = $_POST["content"];
		$sql = "UPDATE `reply_mes` SET title = '$title',name = '$name', content = '$content' WHERE id = $id";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('編輯留言成功');";
		echo "history.back()";
		echo "</script>";
	}

	function del(){
		$id = $_GET["id"];
		
		$sql = "DELETE FROM `reply_mes` WHERE id = $id";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('刪除留言成功');";
		echo "history.back()";
		echo "</script>";
	}

?>