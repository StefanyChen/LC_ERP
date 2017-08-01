<?php session_start(); ?>
<?php
error_reporting(E_all);
ini_set('display_errors',1);


$servername = "localhost";
$username = "root";
$password = "Chen1010";
$dbname = "peopleresource";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_rror);
}
	//假設的有效會員帳號
	$id=$_POST['username'];
	$pw=$_POST['password'];

	$sql = "SELECT * FROM employees where e_sn = '$id' AND e_Password='$pw'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	//使用 isset 判別有沒有此變數可以使用
	
		//直接對傳過來的帳號密碼做比`對
	if($row['e_sn'] == $id && $row['e_password'] == $pw)
	{
		//如果密碼一樣，以及帳號一樣，那就代表正確，所以顯示登入成功
		//使用php header 來轉址 前往後台
		$_SESSION['is_login'] = TRUE;
      $_SESSION['id'] = $row['e_sn'];
      $_SESSION['name'] = $row['e_name_cn'];
		header('Location: index.php?msg=');
		
	}
	else
	{
		//要不然就是登入失敗
		//使用php header 來轉址回 login.php 必加入在網址加入 msg 的 GET 用變數 返回登入頁
		header('Location: login.php?msg=');
	}
?>
