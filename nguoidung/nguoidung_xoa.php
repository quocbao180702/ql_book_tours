<?php
	require_once '../config.php';
	
	$id = $_GET['id'];
	
	try
	{
		$sql = 'DELETE FROM nguoidung WHERE MaNguoiDung = :ID';
		$cmd = $conn->prepare($sql);
		$cmd->bindValue(':ID', $id);
		$result = $cmd->execute();
		
		header('Location: nguoidung.php');
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>