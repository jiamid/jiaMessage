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
 //ִ��������Ϣ��Ӳ���  
//1.��ȡҪ��ӵ�������Ϣ������������������Ϣ��ip��ַ�����ʱ�䣩  

$content = $_POST["content"];  
$ip = $_SERVER["REMOTE_ADDR"];  
$addtime = time();
//2.ƴװ������Ϣ  
$ly = "{$content}##{$ip}##{$addtime}@@@";  
//echo $ly;  
//3. ��������ӵ�liuyan.txt�ļ���  
$info = file_get_contents("liuyan.txt");  
file_put_contents("liuyan.txt",$info.$ly);  
echo "</br>";  
//file_put_contents("liuyan.txt",$ly); ֱ������Ḳ����һ�����ԣ�  
//4.������Գɹ���  
echo "<script>alert('Massage success!')</script>";
echo "<script>window.location.href='index.php'</script>";
 ?>  
</center>  
  
</body>  
</html>  