<?php
   //    created table name is the file name
   $servername="localhost";
   $username="root";
   $password="";
   $db_name="codsoft_login_db";
   $conn=mysqli_connect($servername,$username,$password,$db_name);
   if(!$conn){
       die("Connection failed".mysqli_connect_error());
   }
   if(isset($_POST['submit']))
   {
    $username=$_POST['user'];
    $password=$_POST['pass'];
    $sql_query="INSERT INTO log(username,password)VALUES('$username',$password)";
    if(mysqli_query($conn,$sql_query)){
        echo "inserted successfully";
    }
    else{
        echo "Error:" .$sql. "" .mysqli_error($conn);
    }
    mysqli_close($conn);
   }
   

?>