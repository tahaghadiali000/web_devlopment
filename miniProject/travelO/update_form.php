<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $loction= $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];
        $updatee = $_POST['updatee']


        $request = "insert into update(name,email,phone,address, location, guests, arrivals, leaving,updatee) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$updatee')";

        mysqli_query($connection,$request);

        header('location:book.php');
    }else{
        echo 'something went wwrong try again';
    }
?>