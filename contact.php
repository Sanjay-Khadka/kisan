<?php

include 'dbconn.php';

if (isset($_POST['fname']) && $_POST['contactn'] && $_POST['email']) {
    $fname = $_POST['fname'];
    $contactn = $_POST['contactn'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
}
if (empty($fname && $contactn && $email)) {
    echo "<script>
    alert('Please fill up the form');
    window.location.href = 'regform.php'
</script>";
}
if (empty($fname)) {
    echo "<script>
    alert('You forgot to enter your first name!');
    window.location.href = 'regform.php'
</script>";
}

if (empty($contactn)) {
    echo "<script>
    alert('You forgot to enter your contact no!');
    window.location.href = 'regform.php'
</script>";
}
if (empty($email)) {
    echo "<script>
    alert('You forgot to enter your email!');
    window.location.href = 'regform.php'
</script>";
}

$sql = "INSERT INTO contact(fname,contactn,email,comments)
VALUES ('$fname','$contactn','$email','$comments')";

if ($connection->query($sql) > 0) {
    echo "<script>
    alert('Contact Successfull');
    window.location.href = 'home.php'
</script>";
} else {
    echo 'Error Inserting Record: ' . $connection->error;
}
