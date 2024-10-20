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
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
*{
padding: 0px;
margin: 0px;
}
        .main{
            height: auto;
            width: 100%;
        }
.header{
    height: 7vh;
            width: 100%;
           /* background-color: black; */
           background: rgb(3, 42, 74);
            color: rgb(245, 249, 253);
            display:flex;
            align-items: center;
}

.hleft{ 
    
    height: 7vh;
            width: 90%;
            padding-left: 5vh;
            padding-top: 2vh;                 
            
} 
 
.hright{
    
display: flex;
justify-content: space-evenly;
height: 7vh;
            width: 10%;
            padding-right: 3vh;
            padding-top: 3vh;  
}
.navbar{
    height: 10vh;
    width: 100%;
  
    color: aliceblue;
    display: flex;
    justify-content: space-around;
    text-align: center;
    align-items: center;
    background-color: rgb(23, 24, 24); 
}
.nleft{
    height: 10vh;
    width: 35%;
    display: flex;
    align-items: center;

    
}
.nright{
    height: 10vh;
    width: 65%;

    display: flex;
    justify-content: space-evenly;
    align-items: center;
}
.m1{
    height: 10vh;
    width: 100%;
    display: flex;
    align-items: center;
    background: #000;
    color: aliceblue;
  
}
h2{
    padding-left: 40%;
}
.courses1{
    height: 63vh;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
  padding-top: 5vh;
 

}
.courses2{
    height: 63vh;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
} 
.courses3{
    height: 63vh;
    width: 100%;
    display: flex;
    justify-content: space-evenly;
}
.c1{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center;
    border: 2px solid black;
}
.c2{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center;
    
}
.c3{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}
.c4{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}
.c5{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}
.c6{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}

.c7{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}
.c8{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}
.c9{
    height: 300px;
width: 300px;
background-color: black;
text-align: center;
}
.img1{
    height: 300px;
width: 300px;
}

.img2{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center;
    border: 2px solid black;
    background-size: cover;

}
.img3{
    height: 300px;
width: 300px;

align-items: center;
    text-align: center;

}
.img4{
    height: 300px;
width: 300px;
align-items: center;
    text-align: center

}
.img5{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center
}
.img6{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center
}
.img7{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center
}
.img8{
    height: 300px;
width: 300px;
background-color: black;
align-items: center;
    text-align: center
}
.img9{
    height: 220px;
width: 220px;
align-items: center;
    text-align: center
}
.btn1{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
        
}
.btn2{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
.btn3{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
}
.btn4{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
.btn5{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
.btn6{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
.btn7{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
.btn8{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
.btn9{
    background-color: rgb(29, 133, 219);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none
}
a{
            text-decoration: none;
            color: #fff;
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
<div class="m1">
    <h2>"ALL COURSES"</h2>
    
</div>
<div class="courses1">
   <div class="c1">
     <img  class="img1"  src="https://t3.ftcdn.net/jpg/06/80/13/40/360_F_680134039_guelR6j6lGnkyVq5Vzd6IbePJot5FMU0.jpg">
     <br>
     <br>
     <a href="https://www.youtube.com/watch?v=MdG0Vw9f1A4" class="btn1">Learn Now</a>
   </div>
   <div class="c2">
     <img  class="img2" src="https://i.pinimg.com/736x/9b/6e/fe/9b6efe430ed7a89b0f31832b971cf1c6.jpg">
     <br>
     <br>
     <a href="https://www.youtube.com/watch?v=e7sAf4SbS_g" class="btn2">Learn now</a>
   </div>
   <div class="c3">
       <img class="img3" src="https://i.pinimg.com/736x/6a/fb/f4/6afbf45910b9b4c344737f76043d2cbc.jpg">
       <br>
       <br>
       <a href="https://www.youtube.com/watch?v=UrsmFxEIp5k" class="btn3">Learn now</a>
   </div>
</div>
<div class="courses2">
    <div class="c4">
<img  class="img4" src="https://miro.medium.com/v2/resize:fit:1400/0*y6IcBe5J1AdALzXw.png">
<br>
<br>
<a href="https://www.youtube.com/watch?v=SqcY0GlETPk" class="btn4">Learn now</a>
    </div>
    <div class="c5">
        <img class="img5" src="https://i.pinimg.com/originals/1e/4c/7e/1e4c7e48e499e866be6085a8112c878b.jpg">
        <br>
        <br>
        <a href="https://www.youtube.com/watch?v=1SnPKhCdlsU" class="btn5">Learn now</a>
    </div>
    <div class="c6">
        <img class="img6" src="https://www.shutterstock.com/image-vector/letter-css-building-vector-monogram-600nw-2393150327.jpg">
        <br>
        <br>
        <a href="https://www.youtube.com/watch?v=irqbmMNs2Bo" class="btn6">Learrn now</a>
    </div>

</div>
<div class="courses3">
    <div class="c7">
        <img class="img6" src="https://miro.medium.com/v2/resize:fit:1400/1*98ydKJQSWDGwHZxUV_-kLw.png">
        <br>
        <br>
        <a href="https://www.youtube.com/watch?v=427pAhy9dI8" class="btn7">Learn now</a>
    </div>
    <div class="c8">
        <img class="img6" src="https://user-images.githubusercontent.com/34319922/39473646-82767980-4d58-11e8-90a9-696182b80751.png">
        <br>
        <br>
        <a href="https://www.youtube.com/watch?v=nPxCYOO1e44" class="btn7">Learn now</a>
    </div>
    <div class="c9">
        <img class="img6" src="https://seeklogo.com/images/M/mongodb-logo-3659963037-seeklogo.com.png">
        <br>
        <br>
        <a href="https://www.youtube.com/watch?v=J6mDkcqU_ZE" class="btn7">Learn now</a>
    </div>
</div>

    </div>
</body>
</html>
