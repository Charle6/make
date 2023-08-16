
<?php
include'data.php';
if(isset($_POST['send'])){
    $email=$_POST['email'];
    $mobile=$_POST['subject'];
    $password=$_POST['message'];

    $sql="insert into `gmail` (name,email,subject,message)
    values('$name','$email','$subject','$message')";
    $result=mysqli_query($con,$sql);
    if($result){          
    
    }else{
        die(mysqli_error($con));
    }
 echo
    "
    <script>
    document.location.href = 'index.html';
    </script>

    "
}
?>
