<?php 
 session_start();
 if(!$_SESSION['login']){     
    echo "<script>alert('Please Login to continue')</script>";       
    header('Location: login.html');
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0%;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            height: 100vh;
            width: 100%;
        }

        .nav {
            height: 10vh;
            width: 100%;
            background: #000;
            color: aliceblue;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 5vh;
            padding-right: 5vh;
        }

        .middle {
            height: 90vh;
            width: 100%;
            background: #000;
            display: flex;
        }

        .left {
            height: 90vh;
            width: 50%;
            background: linear-gradient(111deg, #053e85, #06011a);
            text-align: center;
  padding-top: 20vh;

        }

        .right {
            height: 90vh;
            width: 50%;
            background-color: rgb(235, 235, 241);
        }

        .t1 {
            padding: 8px;
        }

        .t2 {
            padding: 20px;
        }

        .btn {
            padding: 5px;
            background-color: rgb(190, 209, 243);
        }
        .img{
            height: 90vh;
            width: 100%;
            background-size: cover;
        }
        h1{
color:whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="nav">
            <p>+91 7067452088</p>
            <P>Vishweb@gmail.com</P>
        </div>
        <div class="middle">
            <div class="left">
                <h1>Contact us</h1><br>
                <form action="contactdb.php" method="post">

                    <input type="text" name="name" class="t1" placeholder="name" required><br>
                    <br>
                    <input type="email" name="gmail" class="t1" placeholder="Email" required><br>
                    <br>
                    <input type="text" name="contact" class="t1" placeholder="Contact" required><br>
                    <br>
                    <input type="text" name="qry" class="t2" placeholder="Enter Query Here" required><br>
                    <br>
                    <button class="btn" type="submit">Submit</button>
                </form>


            </div>

            <div class="right">
                <img src="https://www.kindpng.com/picc/m/268-2686356_email-blue-icon-white-png-transparent-png.png" class="img">


            </div>
        </div>

    </div>
</body>

</html>