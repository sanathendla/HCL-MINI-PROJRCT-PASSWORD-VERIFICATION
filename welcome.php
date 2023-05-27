<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
			background-image: url(https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Fpremium-photo%2Fblue-background-graphic-modern-texture-blur-abstract-digital-design-backgrounds_22857642.htm&psig=AOvVaw0ZAW-6of2RF0Z_FKdvhjpk&ust=1679420152978000&source=images&cd=vfe&ved=0CA8QjRxqFwoTCNjpnN-F6_0CFQAAAAAdAAAAABAR);
			height: 350px;
			width: 920px;
			background-repeat: no-repeat;
			background-position: center;

            margin-left: 300px;
            margin-right: 400px;
            margin-top: 150px;
             padding-left: 20px;
		} 
        button {
    padding: 10px;
    width: 140%;
    border-radius: 15px;
    background-color: white;
    
    cursor: pointer;
    font-size: 15px;
    text-align: center;
}

.btn {
    text-align: left;
    margin-left: 850px;
    position: absolute;
    top: 8px;
    right: 60px;
    font-size: 18px;
   
}  

.venkat{
    text-align: center;
    font-size: 50px;
    position: relative;
    overflow: hidden;
    width: 900px;
    height: 100px;
}

#slide {
    position: relative;
    right: 1200px;
    
    -webkit-animation: slide 0.5s forwards;
    -webkit-animation-delay: 0s;
    animation: slide 0.5s forwards;
    animation-delay: 0.5s;
}

@-webkit-keyframes slide {
    100% { right: 0; }
}

@keyframes slide {
    100% { right: 0; }
}


    </style>
</head>
<body>
<div class="btn">
    <br><br>
    <a href="logout.php">
        <button type="submit">Logout</button>
    </a>
</div>
<br><br><br>
<div class="venkat" id="slide">
<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        echo "Welcome " . $row['name'];
     }
?>
</div>
<h2>
</h2>


</body>
</html>