<html>  
<head>  
<title>Jiamid's Message</title>  
<style>
.boody{
background-color:white;
font-family:"Impact";
width:700px;
border-radius:16px;
border-size:2px;
height:700px;
box-shadow: 5px 5px 5px black;
position: relative;
top:50px;
margin-top:0px;
}
a:link{
text-decoration:none;
color:red;
}
.outer-container {
 border: 0px solid purple;
 position: relative; 
 overflow: hidden;
}
 
.inner-container {
 position: absolute;

 overflow-x: hidden;
 overflow-y: scroll;
}
.element, .outer-container {
 width: 600px;
 height: 600px;
  min-width: 0px;
}
.inner-container::-webkit-scrollbar {
 display: none;
}

</style>
<script>  
function dodel(id){  
  if(confirm("del sure?"))  
  {  
    window.location ='del.php?id='+id;   
  }  
}  
</script>  
</head>  
<body style="background-color:pink;">  
<center>  
<div class="boody">
<a href = "index.php">input Massage</a>   
<hr width = "90%" color="white">  
<div class="outer-container">
<div class="inner-container">
<div class="element" align=center>

<h3>show Massage</h3>  
 <table border = "1" width = "88%" style="border:1px;border-collapse:collapse;" >  
     <tr>  
        
       <th>Message</th>  
       <th>IPaddress</th>  
       <th>Time</th>  
       <th>Do</th>  
    </tr>  
<?php  
  // ��ȡ������Ϣ������������������  
// 1.������liuyan.txt�л�ȡ������Ϣ  
  $info = file_get_contents("liuyan.txt");  
  // 2.ȥ������������������@@@����  
  $info = rtrim($info,"@");  
  if(strlen($info)>=8){  
  // 3.��@@@���Ų��������ϢΪһ��һ���ģ���������Ϣ��@@@���Ų�ֳ��������飩  
  $lylist = explode("@@@",$info);  
     
  // 4.����������Ϣ���飬��ÿ���������ٴν�����  
  foreach($lylist as $k=>$v){  
   $ly = explode("##",$v);  
   echo "<tr>";  
   echo "<td>{$ly[0]}</td>";  
   echo "<td>{$ly[1]}</td>";     
   echo "<td>".date("m-d H:i:s",$ly[2])."</td>"; 
   echo "<td><a href = 'javascript:dodel({$k})'>Del</a></td>";  
   
  }  
  }  
   echo "<tr>";  
   echo "<td colspan=4 align=center >Last One</td>";  
   echo "<tr>";  
   echo "<td colspan=4 align=center bgcolor=red> </td>";
   echo "<tr>";  
   echo "<td colspan=4 align=center bgcolor=orange> </td>";
   echo "<tr>"; 
   echo "<td colspan=4 align=center bgcolor=yellow> </td>";
   echo "<tr>";  
   echo "<td colspan=4 align=center bgcolor=green> </td>";
   echo "<tr>";  
   echo "<td colspan=4 align=center bgcolor=cyan> </td>"; 
   echo "<tr>";  
   echo "<td colspan=4 align=center bgcolor=blue> </td>";
   echo "<tr>";  
   echo "<td colspan=4 align=center bgcolor=purple> </td>";
   echo "<tr>";  
   echo "<td colspan=4 align=center> </td>";



?>  
</div>
</div>
</div>
</div>
</center>  
</body>  
</html>  