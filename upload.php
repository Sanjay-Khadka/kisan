<?php

if (isset($_POST['submit']) && isset($_FILES['image'])) {
    include "dbconn.php";
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";

    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $tempName = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    if ($error === 0) {
        if ($imageSize > 125000) {
            $em = "Sorry, your file is too large to upload.";
            header("Location: home.php?error=$em");
        } else {
            $imageEx = pathinfo($imageName, PATHINFO_EXTENSION);
            $imageExLc = strtolower($imageEx);
            $allowedExs = array("jpg", "jpeg", "png");

            if (in_array($imageExLc, $allowedExs)) {
                $newImgName = uniqid("IMG-", true) . '.' . $imageExLc;
                $imageUploadPath = 'uploads/' . $newImgName;
                move_uploaded_file($tempName, $imageUploadPath);
            } else {
                $em = "You can't upload files of this type.";
                header("Location: home.php?error=$em");
            }
        }
    } else {
        $em = "Unknown error occured!";
        header("Location: home.php?error=$em");
    }
} else {
    header("Location: home.php");
}