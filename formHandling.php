<?php
require_once('processes.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Submit'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $db = new DbCon();
    $db->connect();
    $db->insertUserData($full_name, $username, $email, $address);
    $db->disconnect();
}
?>
