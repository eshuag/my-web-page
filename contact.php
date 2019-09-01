<?php
     $conn=mysqli_connect("localhost","root","root","login.db");
     if(isset($_POST['btnSubmit']))
     {
     	$name=$POST['name'];
     	$pwd=$POST['pwd'];
     	$email=$POST['email'];
     	$pass=$POST['pass'];
     }
     $query="select*  from login_details where username='{$name} and email_id='{$email}'";
     $result= mysqli_query($conn,$query);

     if($res=mysqli_fetch_array($result)
     {
     	echo "<script>alert{\"Login Successful\"};</script>";
     }
     else
     {
     		echo "<script>alert{\"Login UnSuccessful\"};</script>";
     }
?>
