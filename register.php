<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="logi.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="form">
        <h1>Register Here!</h1><br>
        <?php
        if(isset($error)){

    
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        }
    }

        ?>
        <form  action="" name="form" method="post">
            <label for="user">Username:</label>
            <input type="text" name="user" id="user" placeholder="enter ur username"><br><br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" placeholder="enter ur password"><br><br>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" placeholder="enter ur phone number"><br><br><br>
            <a href="login.php" id="btn">Register</a>
            <a href="login.php">Having an account?</a>
        </form>
    </div>
</body>
</html>




























<!-- // @include 'reg.php';
// if(isset($_POST['submit'])){
//     $username=mysqli_real_escape_string($conn,$_POST['user']);
//     $password=mysqli_real_escape_string($conn,$_POST['pass']);
//     $phone=mysqli_real_escape_string($conn,$_POST['phone']);
//     $select="SELECT * FROM reg WHERE username='$username' && password='$password'";
//     $result=mysqli_query($conn,$select);
//     if(mysqli_num_rows($result)>0){
//         $error[]='user already exists';

//     }
//     else{
//         $insert="INSERT INTO reg(username,password,phone)VALUES('$username',$password,$phone)";
//         mysqli_query($conn,$insert);
//         header('location:login.php');
//     }


// };  -->