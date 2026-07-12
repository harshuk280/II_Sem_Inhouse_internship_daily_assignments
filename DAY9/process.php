<?php

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhoneno = $_POST['PhoneNo'];
$branch = $_POST['branch'];

$imageName = $_FILES['myFile']['name'];
$tempName = $_FILES['myFile']['tmp_name'];

move_uploaded_file($tempName, "uploads/".$imageName);

?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Success</title>

<style>

body{
    margin:0;
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#00c6ff,#0072ff,#8e2de2);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.result-box{
    width:500px;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
    text-align:center;
}

.result-box img{
    width:150px;
    height:150px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #0072ff;
    margin-bottom:20px;
}

h2{
    color:green;
}

p{
    font-size:18px;
    margin:10px 0;
}

b{
    color:#0072ff;
}

</style>
</head>

<body>

<div class="result-box">

    <h2>Registration Successful</h2>

    <img src="uploads/<?php echo $imageName; ?>">

    <p><b>Name:</b> <?php echo $txtName; ?></p>

    <p><b>Email:</b> <?php echo $txtEmail; ?></p>

    <p><b>Phone:</b> <?php echo $txtPhoneno; ?></p>

    <p><b>Branch:</b> <?php echo $branch; ?></p>

</div>

</body>
</html>