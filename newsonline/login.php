
<?php
include 'top.php';
?>
 <h1>Log into Management site</h1></h1>
            <div id="noidung">
            <form method="POST">
              <table width="50%" align="center">
                <tr>
                  <td>User Name:</td>
                  <td><input type="text" name="user" size="25"/></td>
                </tr>
                <tr>
                  <td>Password:</td>
                  <td><input type="password" name="pass" size="25"/></td>
                </tr>
                <tr>
                  <td colspan="2" align="right"><input type="submit" name="login" value="Log in"/></td>
                </tr>
              </table>
             
            </form>
         
<?php
  if(isset($_POST['login'])){
    if($dt->CheckNull($_POST['user'])&&$dt->CheckNull($_POST['pass'])){
       
         
    $user= addslashes($_POST['user']);
    $pass= addslashes($_POST['pass']);
   
    $dt->select("SELECT* FROM login WHERE userName='$user' AND passWord='$pass'");
    if($dt->fetch()){
        $_SESSION['username']=$user;
        header("location:index.php");
    }
    else{
        echo"log in failed";
    } 
  }else{
    echo"please fill out all value";
  }}
include 'right.php';
include 'bottom.php'
?>
