<html>  
<head>  
<title>Jiamid's Message</title>  
<!--
<embed src='UNRAVEL.mp3'hidden='true' loop='true' autostart='true'/>
-->
<style>
.boody{
background-color:white;
font-family:"Impact";
background-image:url(jia.png);
background-position:center top;
background-attachment: relative;
background-repeat:no-repeat;
background-size:700px 800px;
border-radius:16px;
color:#35bbe0;
width:700px;
position: relative;
top:35px;
margin-top:0px;
}
.textareacss{
width:100%;
height:55%;
overflow:hidden;
background-color:transparent;
resize:none;
border:0px;
border-top-left-radius:6px; 
border-top-right-radius:6px;
}
.textareacss:focus {
outline: none;
} 
.button{
width:100%;
height:30px;
background-color:gray;
border:0px;
border-radius:6px;
font-family:"Impact";
color:white;
}
.button:active{
background-color:red;
}
.main{
box-shadow: 5px 5px 5px black;
border-style:dotted;
border-color:black;
width:88%;
padding:0px;
border-radius:10px;
}
.aa{
color:red;
text-decoration:none;
}
</style>

</head>  
<body style="background-color:grey;">  
<center>   
<div class="boody">
<center>
<h1 style="color:black;">JIAMID's Message</h1>
<hr width = "100%" color="black">    
<form action = "doAdd.php" method = "post"> 
<div class="main"> 
<div>
 <textarea name = "content" class="textareacss" placeholder="Leave your Message"></textarea>  
</div> 
<div>
 <input type = "submit" value = "submit" class="button">  
</div> 
</div> 
</form> 
 <a href = "show.php" class="aa">showMessage</a> 
<br/>
<br/>
<br/>
<br/>
<br/>
<p>#JIA</p>
 
<?php
function get_client_ip()
{
if ($_SERVER['REMOTE_ADDR']) {
$cip = $_SERVER['REMOTE_ADDR'];
} elseif (getenv("REMOTE_ADDR")) {
$cip = getenv("REMOTE_ADDR");
} elseif (getenv("HTTP_CLIENT_IP")) {
$cip = getenv("HTTP_CLIENT_IP");
} else {
$cip = "unknown";
}
return $cip;
}
echo "Your IP:".get_client_ip();
?>
<br/>
</center>
</div>
</center> 
</body>  
</html>  
