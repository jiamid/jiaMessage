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
//1. 获取要删除留言号  
$id = $_GET["id"];  
// 2.从留言liuyan.txt中获取留言信息  
  $info = file_get_contents("liuyan.txt");  
   
  //3.（将留言信息以@@@符号拆分成留言数组）  
  $lylist = explode("@@@",$info);  
  //4.使用unset删除指定的id留言  
  unset($lylist[$id]);  
  //还原留言信息为字串，并写回留言文件  
  $newinfo = implode("@@@",$lylist);  
  file_put_contents("liuyan.txt",$newinfo);  
  echo "del success!";  
  echo "<script>window.location.href='show.php'</script>" 
?>  
</center>  
</body>  
</html>  