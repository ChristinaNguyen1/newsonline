
<?php
include 'top.php';
if(isset($_GET['id'])&&isset($_GET['idg'])
&&$dt->CheckNull($_GET['id'])&&$dt->CheckNumber($_GET['id'])
&&$dt->CheckNull($_GET['idg'])&&$dt->CheckNumber($_GET['idg'])){
    $id=$_GET['id'];
    $id=addslashes($id);
    $idg=$_GET['idg'];
    $idg=addslashes($idg);
    $dt->select("SELECT * FROM groupnews WHERE idGroup='$idg'");
    $rn=$dt->fetch();

?>
 <h1><?php echo $rn['groupName'];?></h1></h1>
            <div id="noidung">
         
<?php
if(isset($_SESSION['username'])){
    echo("<p align='right'>");
    echo("<a href='newsadd.php?idg=$idg'>Add a news</a>");
    echo("|<a href='newsupdate.php?id=$id'>Edit news</a>");
    echo("|<a href='newsdelete.php?id=$id'>Delete news</a>");
    echo("</p>");
}
  $dt->select("SELECT * FROM news WHERE idNews='$id'" );
  $r=$dt->fetch();
  
  echo("<h4>");
  echo $r['title'];
  echo("</h4>");
  echo("<h5>".$r['citation']."</h5>");

  echo("<p align=justify>".$r['content']."</p>");
  echo("<h4> Xem Them</h4>");
  $dt=select("SELECT * FROM news WHERE idNews !='$id' ORDER BY idNews DESC LIMIT 10");
  while($r=$dt->fetch()){
    $idNews=$r['idNews'];
    $title=$r['title'];
    echo("<a href='newsdetail.php?idg=$idg&&id=$idNews'>$title</a><br/><br/>");
  }
  }else{
    header("location:index.php");
  }
include 'right.php';
include 'bottom.php'
?>
