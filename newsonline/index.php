
<?php
include 'top.php';
?>
 <h1>Hot News</h1></h1>
            <div id="noidung">
         
<?php
  $dt->select('SELECT * FROM news ORDER BY idNews DESC LIMIT 10');
  while($r=$dt->fetch()){
    $id=$r['idNews'];
    $idg=$r['idGroup'];
    $title=$r['title'];
    $citation=$r['citation'];
   
    echo("<a href='newsdetail.php?idg=$idg&&id=$id'>$title</a>");
    echo("<br/><br/>$citation<br/><br/>");
  }
include 'right.php';
include 'bottom.php'
?>
