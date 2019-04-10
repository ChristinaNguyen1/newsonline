<?php
session_start();
include'data.php';
$dt= new database;
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta  content="text/html" />


	<title>Trang thong tin tong hop ve cong nghe thong tin</title>
    <link rel="stylesheet" href="Style.css"/>
    
</head>

<body>
   <div id="top">
      <div id="menutop">
         <ul>
<?php
if(isset($_SESSION['username'])){
    echo"<li><a href='logout.php'>Log out</a></li>";
    echo"<li><a href='groupadd.php'>Add Group News</a></li>";
}else{
    echo"<li><a href='login.php'>Log in</a><li>";
    
}
?>
          
            <li><a href="https://www.w3schools.com/" target="_blank">PHP</a></li>
            <li><a href="https://www.w3schools.com/" target="_blank">Facebook</a></li>
            <li><a href="https://www.w3schools.com/" target="_blank">Gmail</a></li>
            <li><a href="https://www.w3schools.com/" target="_blank">Youtube</a></li>
            
         </ul>
         <ol>
            <li><a href="#">Trang chu</a></li>
         </ol>
      </div>
   </div>
   <div id="main"><!-- bao toan bo khung website-->
     <div id="banner"><!--phan Banner-->
          <h1>TONG HOP VE CONG NGHE THONG TIN</h1>
     </div><!--End phan banner-->
     <div id="maincontent">
       <div id="content">
         <div class="cauhinh">
           