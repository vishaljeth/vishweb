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

/* .c7{
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
} */
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

.footer{
    height: 10vh;
    width: 100%;
    background: #000;
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
    <h2>"OUR TEACHERS"</h2>
    
</div>
<div class="courses1">
   <div class="c1">
     <img  class="img1"  src="https://yt3.googleusercontent.com/sq5rm1ghog5nfzTN0zeUaeXxc2PtB3KvKG2AJpyGN_O0ZPxwUoOS0Y5y1AkbMT1_LTHXMJ94MA=s900-c-k-c0x00ffffff-no-r">
     <br>
     <b>Name : Shradha khapra </b><br>
     <b>Age : 24</b>
     <br>
     <b>TY : apna collage</b>
    
   </div>
   <div class="c2">
     <img  class="img2" src="https://i.ytimg.com/vi/yxtJaPX8MfU/oar2.jpg?sqp=-oaymwEYCJUDENAFSFqQAgHyq4qpAwcIARUAAIhC&rs=AOn4CLBkdYToPX0d37BrQdhnTQhiPGWxxA">
     <br>
     <b>Name : haris ali khan </b><br>
     <b>Age : 24</b>
     <br>
     <b>TY : code with harry</b>

   </div>
   <div class="c3">
       <img class="img3" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
       <br>
       <b>insta : pwcollage</b><br>
       <b>Age : 29</b>
       <br>
       <b>TY :Collage wallah</b>
  
      
   </div>
</div>
<div class="courses2">
    <div class="c4">
<img  class="img4" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
<br>
<b>Name : Unknown</b><br>
<b>Age : 25</b>



    </div>
    <div class="c5">
        <img class="img5" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
        <br>
<b>Name : Unknown</b><br>
<b>Age : 25</b>
       
    </div>
    <div class="c6">
        <img class="img6" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
        <br>
<b>Name : Unknown</b><br>
<b>Age : 25</b>
    
    </div>



    </div>
 
</body>
</html>
