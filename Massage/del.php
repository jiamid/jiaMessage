<html>  
<head>  
<title>Jiamid's Message</title>  
</head>  
<style>
.boody{
background-color:pink;
}
</style>

<body class="boody">  
<center>     
<?php  
//1. ��ȡҪɾ�����Ժ�  
$id = $_GET["id"];  
// 2.������liuyan.txt�л�ȡ������Ϣ  
  $info = file_get_contents("liuyan.txt");  
   
  //3.����������Ϣ��@@@���Ų�ֳ��������飩  
  $lylist = explode("@@@",$info);  
  //4.ʹ��unsetɾ��ָ����id����  
  unset($lylist[$id]);  
  //��ԭ������ϢΪ�ִ�����д�������ļ�  
  $newinfo = implode("@@@",$lylist);  
  file_put_contents("liuyan.txt",$newinfo);  
  echo "del success!";  
  echo "<script>window.location.href='show.php'</script>" 
?>  
</center>  
</body>  
</html>  