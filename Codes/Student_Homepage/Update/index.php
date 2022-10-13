<?php
session_start();

require ("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Student Info</title>
    <style>
        body{
            background-image: url("background.jpg");    
            background-size: cover;
            background-position: center;
        }
        input{
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>
</head>

<body>
    <center>
    <h1>Update Personal Info</h1>
        <form action="" method="POST">
            <input type="text" name="School_ID" placeholder="Enter ID"/> <br><br>
            <input type="text" name="DOB" placeholder="Enter Date Of Birth"/> <br><br>
            <input type="text" name="Address" placeholder="Enter Address"/> <br><br>
            <input type="text" name="ContactNo" placeholder="Enter Contact No"/> <br><br>
            <input type="text" name="Email" placeholder="Enter email"/> <br><br>

            <input type="submit" name="update" value="UPDATE DATA"/>
        </form>
    </center>
</body>