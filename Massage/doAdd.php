<html>  
<head>  
<title>Jiamid's Message</title>  
<style>
#body{
background-color:pink;
}
</style>
</head>  
<body>  
<center>  
 <?php  
 //执行留言信息添加操作  
//1.获取要添加的留言信息，并补上其他辅助信息（ip地址、添加时间）  

$content = $_POST["content"];  
$ip = $_SERVER["REMOTE_ADDR"];  
$addtime = time();
//2.拼装留言信息  
$ly = "{$content}##{$ip}##{$addtime}@@@";  
//echo $ly;  
//3. 将留言添加到liuyan.txt文件中  
$info = file_get_contents("liuyan.txt");  
file_put_contents("liuyan.txt",$info.$ly);  
echo "</br>";  
//file_put_contents("liuyan.txt",$ly); 直接输出会覆盖上一条留言！  
//4.输出留言成功！  
echo "<script>alert('Massage success!')</script>";
echo "<script>window.location.href='index.php'</script>";
 ?>  
</center>  
  
</body>  
</html>  