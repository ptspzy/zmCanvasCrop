<?php

// Set a constant
define ("FILEREPOSITORY","/");

$base64Img = isset($_POST["img_data"]) ? $_POST["img_data"] : '';
$img = base64_decode($base64Img);
file_put_contents('./test.png', $img);//返回的是字节数


// Make sure that the file was POSTed.
// if (is_uploaded_file($_FILES['img_data']['tmp_name'])) {
//     // Was the file a PDF?
//     if ($_FILES['img_data']['type'] != "image/png") {
//         echo "<p>Class notes must be uploaded in PNG format.</p>";
//     } else {
//         // Move uploaded file to final destination.
//         $name = $_POST['name'];
//         $result = move_uploaded_file($_FILES['img_data']['tmp_name'],
//                                                         FILEREPOSITORY.$_FILES['img_data']['name']);
//        if ($result == 1) echo "<p>File successfully uploaded.</p>";
//            else echo "<p>There was a problem uploading the file.</p>";
//     }
// }
?>
