<?php

include 'dbconn.php';

if (isset($_POST['username']) && $_POST['password']) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
}
if (empty($fname && $email && $username && $password)) {
    echo "<script>alert('Please fill up the form');
    window.location.href='buyer.php'</script>";
}

if (empty($fname)) {
    echo "<script>alert('You forgot to enter your fullname!');
    window.location.href='buyer.php'</script>";
}

if (empty($email)) {
    echo "<script>alert('You forgot to enter your email!');
    window.location.href='buyer.php'</script>";
}
if (empty($username)) {
    echo "<script>alert('You forgot to enter your email!');
    window.location.href='buyer.php'</script>";
}

if (empty($password)) {
    echo "<script>alert('You forgot to enter your password!');
    window.location.href='buyer.php'</script>";
}

$sql = "INSERT INTO users(fname,email,username,password)
    VALUES ('$fname','$email','$username','PASSWORD($password)')";

if ($connection->query($sql) > 0) {
    echo "<script>alert('Buyer Registered Successfully');
    window.location.href='login.php';</script>";
} else {
    echo "<script>alert('Error while registering: ' . $connection->error;');
    </script>";
}
