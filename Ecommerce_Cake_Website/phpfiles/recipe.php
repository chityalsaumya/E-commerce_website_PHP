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
    <link rel="stylesheet" href="../cssfiles/recipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!------------------------------------------------ header ------------------------------------------------>
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
    <!------------------------------------------------ content ------------------------------------------------>
    <div class="bgimg">
        <div class="part1">
            <div class="part2">

            </div>
            <div class="part3"></div>
 
        </div>
        <div class="part1">
            <div class="part2">

            </div>
            <div class="part3"></div>
 
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
<?php
}
else{
	
	header("location:index.php");
}
