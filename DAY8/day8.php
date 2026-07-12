<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $txtName = $_POST["txtName"];
    $txtEmail = $_POST["txtEmail"];
    $PhoneNo = $_POST["PhoneNo"];
    $Password = $_POST["Password"];


    echo "
    <div style='
        width:400px;
        margin:100px auto;
        padding:30px;
        background: white;
        border-radius:15px;
        box-shadow:0 10px 25px rgba(0,0,0,0.3);
        text-align:center;
        font-family:Arial;'>

        <h2 style='color:green;'> Registration Successful</h2>

        <p><b>Name:</b> $txtName</p>

        <p><b>Email:</b> $txtEmail</p>

        <p><b>Phone:</b> $PhoneNo</p>

        <a href='day8.html'
        style='
            display:inline-block;
            margin-top:15px;
            padding:10px 20px;
            background:#667eea;
            color:white;
            text-decoration:none;
            border-radius:8px;'>
        Back to Form
        </a>

    </div>";

}
?>