

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
		$title = $_POST["title"];
		$name = $_POST["name"];
		$content = $_POST["content"];
		$sql = "INSERT INTO `mes` (uid, title, name, content)
		VALUES ('$uid', '$title', '$name','$content')";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('新增留言成功');";
		echo "location.href='chat.php';";
		echo "</script>";
	}

	function update(){
		$id = $_GET["id"];
		$title = $_POST["title"];
		$name = $_POST["name"];
		$content = $_POST["content"];
		$sql = "UPDATE `mes` SET title = '$title',name = '$name', content = '$content' WHERE id = $id";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('編輯留言成功');";
		echo "location.href='chat.php';";
		echo "</script>";
	}

	function del(){
		$id = $_GET["id"];
		$sql = "DELETE FROM `mes` WHERE id = $id";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('刪除留言成功');";
		echo "location.href='chat.php';";
		echo "</script>";
	}

?>