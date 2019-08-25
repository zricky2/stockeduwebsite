<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>Account</title>
        <meta http-equiv="refresh" content="60" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/mainpage.css" type="text/css">
        <meta name="description" content="Learn How To Start and Grow as a Trader">
        <meta name="keywords" content="stocks, day, swing, trade, learn, candles">
        <meta name="author" content="Zheng">
        <script>
            .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
}
        </script>
    </head>

    <header>
        <div id="top-header"> 
            <div id="logo"> 
                <h1>The Bullish Channel</h1> 
            </div>   

            <nav> 
                <ul> 
                    
                    <li><a href="education-waccess.html">Education</a></li> 
                    <li><a href="trading-terms-waccess.html">Trading-terms</a></li> 
                    <li><a href="chatroom-waccess.php">Community</a></li> 
                    <li><a href="about-us-waccess.html">About Us</a></li> 
                    <div class = "dropdown">
                    <li><button class= "dropbtn"><a href="account-waccess.php">Account</a></button></li>
                    <div class = "dropdown-content">
                        <a href= "logout.php">Sign out</a>
                        
                    </div>
                </div>
                    
                    <div>
                    <form action="/search.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                    </form>
                    </div>
                </ul> 
            </nav> 
        </div>   
    </header>

    <body>
        <p>Hello <?php echo $_SESSION['username'] ?>
        <br>
        Status: <?php echo $_SESSION['status'] ?>
        <img src="images/_stockpic.jpg" alt="Avatar" class="avatar">
        
    </p>
        
</body>


