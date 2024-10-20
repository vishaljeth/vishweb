<?php 
                session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }
        a{
            text-decoration: none;
            color: #fff;
        }
        .main {
            height: 100vh;
            width: 100%;
        }

        .header {
            height: 7vh;
            width: 100%;
            background: rgb(3, 42, 74);
            color: rgb(245, 249, 253);
            display: flex;
            align-items: center;
        }

        .hleft {

            height: 7vh;
            width: 90%;
            padding-left: 5vh;
            padding-top: 2vh;

        }

        .hright {

            display: flex;
            justify-content: space-evenly;
            height: 7vh;
            width: 10%;
            padding-right: 3vh;
            padding-top: 3vh;
        }

        .navbar {
            height: 10vh;
            width: 100%;
            background-color: rgb(23, 24, 24);
            color: aliceblue;
            display: flex;
            justify-content: space-around;
            text-align: center;
            align-items: center;
    
   }

        .nleft {
            height: 10vh;
            width: 35%;
            display: flex;
            align-items: center;
     }

        .nright {
            height: 10vh;
            width: 65%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            text-decoration: none; 

        }

        .middle {
            height: 80vh;
            width: 100%;
            display: flex;
        }

        .mleft {
            height: 80vh;
            width: 50%;
        }

        .mright {
            height: 80vh;
            width: 50%;
            align-items: center;
            text-align: center;
        }

        .img {
            height: 75vh;
            width: 95%;
        }

        h1 {
            color: rgb(43, 44, 44);
            padding-top: 9vh;
            align-items: center;
            display: flex;
            text-align: center;
        }

        h2 {
            font-size: 7vh;
            padding-top: 20%;
        }

        p1 {
            font-size: 4vh;
        }

        .loginbtn {
            background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
        }

        .footer {
            height: 35vh;
            width: 100%;
            display: flex;
            background: #000;
            color: white;

        }

        .fleft {
            height: 35vh;
            width: 50%;
            color: aliceblue;
            padding-left: 10vh;
            padding-top: 5vh;
        }

        .fright {
            height: 35vh;
            width: 50%;
            /* background-color: rgb(0, 0, 0); */
            color: aliceblue;
            text-align: center;
            padding-top: 5vh;
        }

        .end {
            height: 10vh;
            background: #000;
            color: aliceblue;
            align-items: center;
            text-align: center;
        }
        .cpage{
            text-decoration: none;
            color: aliceblue;
        }

    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="hleft">
                <p>Online Education course millions of people learning</p>

            </div>
            <div class="hright">
                <i class="fa-brands fa-youtube"></i>
                <br>
                <i class="fa-brands fa-facebook"></i>
                <br>
                <i class="fa-brands fa-linkedin"></i>
                <br>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </div>
        <div class="navbar">
            <div class="nleft">
                <p>Vishweb</p>
            </div>
            <div class="nright">
            
            <a href="index.php">Home</a>
            <a class="cc" href="courses.php">Course</a>
                <a href="contact.php">Contact Us</a>
                <a href="teachers.php">Teachers</a>
                <?php 
             if (isset($_SESSION['login']) && $_SESSION['login']) {
                echo "<a href='logout.php'>Logout</a>";
            }
                ?>
            </div>
        </div>
        <div class="middle">
            <div class="mleft">
                <img class="img"
                    src="https://png.pngtree.com/png-clipart/20230929/original/pngtree-teenagers-distance-learning-online-education-3d-character-illustration-png-image_13016448.png">
            </div>
            <div class="mright">
                <h2>"Stay curious, keep learning!"</h2>
                <p1>"Education is not just about learning facts; it’s about developing critical thinking skills.""</p1>
                <br>
                <br>
                <a href="login.html">
                    <button class="loginbtn">ENROLL NOW</button>
                </a>
            </div>
        </div>
        <div class="footer">

            <div class="fleft">
                <P>CONTACT US</P><bR>
                <br>
                <p>+927067452088</p><br>
                <br>
                <p>vishweb@gmail.com</p><br>

            </div>
            <div class="fright">
                <b>ABOUT US</b>
                <br>
                <br>
                <p>We Are Here to provide u online<br> Education which you can use to<br> chnage the world||</p>

                <br>
                <i class="fa-brands fa-instagram"></i>&nbsp; &nbsp;
                <i class="fa-brands fa-whatsapp"></i>&nbsp;&nbsp;
                <i class="fa-brands fa-twitter"></i>&nbsp;&nbsp;
                <i class="fa-brands fa-facebook"></i>&nbsp;&nbsp;
            </div>
        </div>
        <div class="end">
            __________________________TEAM VISHWEB_____________________________
        </div>
    </div>
</body>

</html>