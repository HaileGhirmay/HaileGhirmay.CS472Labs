<?php

$name = $_POST['name'];
$id = $_POST['id'];

if (strlen($name) == 0 || strlen($id) == 0) {
    echo "<script>alert('Please fill form fields');</script>";
} elseif ($name == 'Haile Ghirmay Tesfay' && $id == '614139') {
    echo "Your grade is 93.67";
} else {
    echo "<script>alert('Grade not found.');</script>";
}


