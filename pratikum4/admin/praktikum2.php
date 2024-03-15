<?php
require_once 'navbar.html' ; 
require_once 'sidebar.html' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form registrasi pengguna</h1>
    <form action="submit_post.php"method="POST"></from>
    <div>
        <label for="sername">username</label>
        <input type="text" name="username" id="username" required>
    </div><br>
    <div>
        <label for="password">password</label>
        <input type="password" name="password" id="password" required>
    </div><br>
    <div>
