
<?php
include 'top.php';
if(isset($_GET['id'])&&$dt->CheckNull($_GET['id'])&&$dt->CheckNumber($_GET['id'])){
 $id=$_GET['id'];
 $id=addslashes($id);
 $dt->select("SELECT groupName FROM groupnews WHERE idGroup='$id'");
 $row=$dt->fetch();


?>
 <h1><?php echo $row['groupName'];?></h1></h1>
            <div id="noidung">
         
<?php
if(isset($_SESSION['username'])){
    echo("<p align='right'>");
    echo("<a href='newsadd.php?idg=$id'>Add a new news</a>");
    echo("</p>");
}
 $dt->select("SELECT * FROM news WHERE idGroup='$id' ORDER BY idNews DESC");

   while($r=$dt->fetch()){
    $idNews=$r["idNews"];
    $idGroup=$r["idGroup"];
    $title=$r["title"];
    $citation=$r['citation'];
    echo("<a href='newsdetail.php?idg=$idGroup&&id=$idNews'>$title</a>");
    echo("<br/><br/>$citation<br/><br/>");
  }}
  else{
    header("location:index.php");
  }

include 'right.php';
include 'bottom.php'
?>
