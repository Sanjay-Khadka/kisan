<?php

include 'dbconn.php';

if (isset($_POST['username']) && $_POST['password']) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}


// Code from Nishan
// Check if a user exists with given username & password
// $result = mysqli_query($mysqli, "SELECT * FROM users
// 		where username='$username' and password='$password'");

// while ($data = mysqli_fetch_array($result)) {
//     $userName = $data["username"];
//     $userID = $data["userid"];
//     $userFullname = $data["name"];
//     $userImage = $data["user_image"];
//     $user_role = $data["user_role"];


//     // Count the number of user/rows returned by query 
//     $user_matched = mysqli_num_rows($result);

//     // var_dump($user_matched);

//     // Check If user matched/exist, store user email in session and redirect to sample page-1
//     if ($user_matched > 0) {
//         session_start();
//         $_SESSION["email"] = $email;
//         $_SESSION["userid"] = $userID;
//         $_SESSION["username"] = $userName;
//         $_SESSION["password"] = $password;
//         $_SESSION["userFullname"] = $userFullname;
//         $_SESSION["userImage"] = $userImage;
//         $_SESSION["user_role"] = $user_role;
//         $_SESSION['logged_in'] = true;
//     }
// }
// Code from Nishan


$sql = "SELECT username = '$username' AND password = '$password' FROM users";

if ($mysqli->query($sql)) {
    session_start();
    $_SESSION['username'] = $username;

    echo "<script>alert('Login Successfull');
    
window.location.href='./index.php';</script>";
} else {
    echo "<script>alert('Login Failed: ' . $mysqli->error;');
    window.location.href='./login.php';</script>";
}
