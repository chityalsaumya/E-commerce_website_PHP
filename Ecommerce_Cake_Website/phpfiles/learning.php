<?php
session_start();
if($_SESSION['username']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luscious Cakes</title>
    <link rel="stylesheet" href="../cssfiles/index.css">
    <link rel="stylesheet" href="../cssfiles/learning.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- header -->
    <header>


        <div id="menu" class="fas fa-bars"></div>


        <a href="#" class="logo">
            <i class="fas fa-fire"></i>
            Luscious Cakes        
        </a>
        
        <nav class="navbar">
            <a href='index.php'>Home</a>
            <a href='learning.php'>Lectures</a>
            <a href='shop.php'>Shop</a>
            <a href='#Videos'>Videos</a>
            <a href='recipe.php'>Recipes</a>
            <a href='aboutUs.html'>About us</a>
            <a href='logout.php'> LOGOUT</a>
        </nav>


        <div class="icons">
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
        </div>

        <form action="" id="search-box">
            <input type="search" id="search" placeholder="search here">
            <label for="search" class="fas fa-search"></label>
        </form>
    </header>

        <!------------------------------------------------ container1 ------------------------------------------------>

    <div class="container1">
        <div class="circles">
            <img class="bcirclepic" src="../images/pic3.jpg" alt="">
            <div class="circle1">
                <img class="scirclepic" src="../images/pic5.jpg" alt="">
            </div>
            <div class="circle"></div>
        </div>
        <div class="textarea">
          <div class="text1">
            <h2 class="learn">Learn</h2>
            <h3 class="learncake"> Learn Baking the easy way with this online culinary ...</h3>
            <p class="recipe">Nisl purus in mollis nunc sed id. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. Turpis egestas sed tempus urna et pharetra. Id aliquet risus feugiat in ante metus dictum.&nbsp;<br>
              <br>Here is a <a href="#" class="link1">Link</a>
            </p>
            <div class="linkcss"><a href="#" class="learnmore">learn more</a></div>
            
          </div>
        </div>
    </div>

        <!-----------------------------------------------container2 ------------------------------------------------>

    <div class="container2">
        <div class="firsthalf">
        <div class="halfcircle"></div>
        <div class="text2">
            <h2 class="btext">The Science of Gastronomy</h2>
            <p class="para1">This course if for you if you want to learn the basics skills of French patisserie</p>
        </div>
    </div>
        <div class="cards1">
            <div class="cards card1">
                <div class="numbercircle"><p>01</p></div>
                <div class="dummytext">
                    <h2>Teaching</h2>
                    <p>
                        Sample text. Click to select the text box. Click again or double click to start editing.
                    </p>
                    <p class="p">Learn more</p>
                </div>
            </div>
            <div class="cards card2">
                <div class="numbercircle"><p>02</p></div>
            <div class="dummytext">
                <h2>Innovations</h2>
                <p>
                    Sample text. Click to select the text box. Click again or double click to start editing.
                </p>
                <p class="p">Learn more</p>
            </div>
        </div>
            <div class="cards card3">
                <div class="numbercircle"><p>03</p></div>
                <div class="dummytext">
                    <h2>Lessons</h2>
                    <p>
                        Sample text. Click to select the text box. Click again or double click to start editing.
                    </p>
                    <p class="p">Learn more</p>
                </div>
            </div>
            <div class="cards card4">
                <div class="numbercircle"><p>04</p></div>
                <div class="dummytext">
                    <h2>Tips</h2>
                    <p>
                        Sample text. Click to select the text box. Click again or double click to start editing.
                    </p>
                    <p class="p">Learn more</p>
                </div>
            </div>
        
        
    </div>
    </div>

        <!-----------------------------------------------container3  ------------------------------------------------>
    <div class="container3">
        <div class="halfsides">
            <div class="onlineclass">
                <h2>Online Baking Classes</h2>
            </div>
            <img src="../images/pic1.jpg" alt="">
        </div>
        <div class="hoverside">
            <img src="../images/pic8.jpg"  alt="">
        </div>
        <div class="square">
            <h2>Course structure</h2>
            <p>The course is structured to make your learning experience easy and fun. Lessons are divided into 3 simple stages. First you learn the theory, then the technique with a series...&nbsp;<br>
                <br>Images from <a href="#" class="link2">Freepik</a></p>
                <div class="linkcss2"><a href="#" class="learnmore">learn more</a></div>
        </div>
        <div class="bsquare">
            
                <h2> WHO IS THIS COURSE FOR? </h2>
                <p>This <b>course</b>  is also great for people with some dessert making <b class="bold">experience</b> looking for a refresher course or a recap on patisserie techniques.</p>
                <b class="O">O</b>
          
        </div>
    </div>

     <!------------------------------------------------ Container4 ------------------------------------------------>

     <div class="container4">
         <div class="contact">
             <div class="design"> 
                 <div class="contactdetails">
                     <div class="venue">
                         <h2>Contact us</h2>
                         <p>3045 10 Sunrize Avenue, 123-456-7890 <br>
                            Mon – Fri: 9:00 am – 8:00 pm, <br>
                            Sat – Sun: 9:00 am – 10 pm &nbsp;<br><b>lusciouscakes@esbnyc.com</b></p>
                            <div class="allLogos">
                                <i class="fas fa-fire"></i>
                                <i class="fas fa-fire"></i>
                                <i class="fas fa-fire"></i>
                                <i class="fas fa-fire"></i>
                            </div>
                     </div>
                     <div class="input">
                        <input class="userinput" placeholder="Enter your name" type="text" name="" id="name">

                        <input class="userinput"  placeholder="Enter your email address" type="text" name="" id="email">

                        <textarea  class="userinput"  placeholder="Enter Message" type="text" name="" id="message"></textarea>
                        <button class="submit" type="submit"> Submit</button>
                     </div>
                 </div>
             </div>

         </div>
     </div>

    <!------------------------------------------------ footer ------------------------------------------------>

    <footer>
        <div class="footerc">

            <div class="one">
                <p><b style="font-size: 14px;"> International Olympic Committee</b> <br> <br>
                    Principles and Mission <br>
                    Organisation <br>
                    Events calendar <br>
                    Careers <br>
                    IOC Publications <br>
                </p>

                  <div class="two">  <p>
                    <b style="font-size: 14px;"> Explore </b>
                    <br> <br>
                    Athletes <br>
                    Olympic Games<br>
                    Olympic Movement<br>
                    TOP<br>
                  </p>
                    </div>

                   <div class="three"> <p>
                    <b style="font-size: 14px;"> Beyond the Games </b>
                   <br> <br>
                    Fight Against Doping<br>
                    Gender Equality<br>
                    Legacy<br>
                    Refugees<br>
                    Sustainability<br>
                   </p>
                    </div>

                    <div class="four"> <p>
                        <b style="font-size: 14px;">Media</b>
                         <br> <br>
                        Press releases <br>
                        Statements <br>
                        Media Accreditation <br>
                        News
                    </p>
                       
                    </div>

                    <div class="five"> <p>
                        <b style="font-size: 14px;"> More Olympic sites</b>
                        <br> <br>
                        Olympics.com <br>
                        Museum <br>
                        Athlete 365 <br>
                        Olympic Studies Centre <br>
                        Tokyo 2020<br>
                    </p>
                      
                    </div>

                    <div class="six"> <p>
                        <b style="font-size: 14px;"> Information </b>
                        <br> <br>
                        Information <br>
                        Cookie Policy <br>
                        Cookie Settings <br>
                        Privacy Policy <br>
                        Terms of Service <br>
                        FAQs <br>
                        About us <br>
                        Contact us <br>
                    </p>
                     
                    </div>
                  
            </div>

        </div>
    </footer>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="../jsfiles/script.js"></script>
</body>

</html>
</script>
<?php
}
else{
	header("location:index.php");
}