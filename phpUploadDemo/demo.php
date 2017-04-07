<?php
if (is_uploaded_file($_FILES['homework']['tmp_name'])) {
     copy($_FILES['homework']['tmp_name'],$_FILES['homework']['name']);
} else {
     echo "<p>Potential script abuse attempt detected.</p>";
}
?>
