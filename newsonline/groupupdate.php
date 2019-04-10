
<?php
session_start();
include'data.php';
$dt= new database;
include 'top.php';

if(isset($_GET['idg'])){
    $idg=$_GET('idg');
    $dt->select("SELECT * FROM groupnews WHERE idGroup='$idg'");
    $r=$dt->fetch();
    $gName=$r['groupName'];
    }
?>
 <h1>Edit Group News:<?php echo $gName;?></h1>
    <div id="noidung">
      <form method="POST">
       Group Name:<input type="text" size="40" name="groupname" value="<?php echo $gName;?>"/>
       <input type="submit" name="update" value="Edit"/>
      </form>
         
<?php
  if(isset($_POST['update'])){
    $groupName=$_POST['groupname'];
    $dt->command("UPDATE groupnews SET groupName='$groupname' WHERE idGroup='$id'");
    header("location: groupadd.php");
  }
include 'right.php';
include 'bottom.php'
?>
