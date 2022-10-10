<?php 
require_once('./connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['uname']) || empty($_POST['pass']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin where uname='".$_POST['uname']."' and pass='".$_POST['pass']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['uname'];
                header("location:wellcome.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }

?>