<?php
$connect = mysqli_connect("localhost", "root","", "students_data");

if($connect  == true){
    if(isset($_REQUEST)){
        $fname = htmlspecialchars($_REQUEST['Fast_Name']);
        $lname = htmlspecialchars($_REQUEST['Last_name']);
        $email = htmlspecialchars($_REQUEST['email']);
        $phone = htmlspecialchars($_REQUEST['phone']);

        $sql = "insert into users(firstname, lastname, email, phone) values('$fname', '$lname', '$email','$phone')"; 
        mysqli_query($connect, $sql);
    } 
}else{
    echo "not connect";
}



