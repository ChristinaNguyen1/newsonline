
<?php
include 'top.php';
?>
 <h1>MAnage Group news</h1></h1>
   <div id="noidung">
     <table>
       <tr>
        <td>STT</td><td>ID Nhom</td><td>Group Name</td><td>Manage</td>
        
       </tr>
     
         
         
<?php
$dt->select("SELECT * FROM groupnews");
$i=0;
while($r=$dt->fetch()){
 $i++;
 $idg=$r['idGroup'];
 $gName=$r['groupName'];
 echo("<tr>");
 echo("<td>$i</td><td>$idg</td><td>$gName</td>");
 echo("<td>");
 echo("<a href='groupupdate.php?idg=$idg'>Edit</a>");
 echo(" | <a href='groupdelete.php?idg=$idg'>Delete</a>");
 echo("</td>");
 echo("</tr>");
}
echo("</table>"); 
?>
<h4 style="margin: 15px 0;">Add new Group</h4>
 <form method="POST">
    <table width="50%" align="center">
                <tr>
                  <td>Group ID:</td>
                  <td><input type="text" name="idg" size="25"/></td>
                </tr>
                <tr>
                  <td>Group Name:</td>
                  <td><input type="text" name="groupname" size="25"/></td>
                </tr>
                <tr>
                  <td colspan="2" align="right"><input type="submit" name="add" value="Add"/></td>
                </tr>
     </table>
 </form>
<?php  
if(isset($_POST['add'])){
    if($dt->CheckNull($_POST['idg'])&&$dt->CheckNumber($_POST['idg'])&&$dt->CheckNull($_POST['groupname'])){
    $idg=$_POST['idg'];
    $gName=$_POST['groupname'];
    $dt->command("INSERT INTO groupnews(idGroup, groupName) VALUE('$idg','$gName')");
    header("location:groupadd.php");
}  }
include 'right.php';
include 'bottom.php'
?>
