<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>Home Page</title>
        <meta http-equiv="refresh" content="60" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/mainpage.css" type="text/css">
        <meta name="description" content="Learn How To Start and Grow as a Trader">
        <meta name="keywords" content="stocks, day, swing, trade, learn, candles">
        <meta name="author" content="Zheng">
    
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
        <img src="images/_stockpic.jpg" style= "width:auto;height:auto;">
        <h1 style= "font-size: 10 vw"> 
    <?php
    if(isset($_SESSION['success'])) : ?>

    <div>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    Welcome back <?php echo $_SESSION['username'];?>

        </h1>
        <h1>Time.</h1>

        <h2>Learn from our moderaters whether you're a begininning or intermediate trader!</h2>

        <p>A stock market, equity market or 
            share market is the aggregation of buyers and sellers of stocks, which represent ownership claims on businesses; these may include securities listed on a 
            public stock exchange, as well as stock that is only traded privately.
            <br>
            The term stock trader typically refers to someone who frequently buys and sells stocks to capitalize on daily price fluctuations. These short-term traders are betting that they can make a few bucks in the next minute, hour, days or month, rather than buying shares in a blue-chip company to pass along to their grandkids someday.

Stock trading can be further refined based on certain criteria:

Active trading is what an investor who places 10 or more trades per month does. Typically, they use a strategy that relies heavily on timing the market, trying to take advantage of short-term events (at the company level or based on market fluctuations) to turn a profit in the coming weeks or months.

Day trading is the strategy employed by investors who play hot potato with stocks — buying, selling and closing their positions of the same stock in a single trading day, caring little about the inner workings of the underlying businesses. (Position refers to the amount of a particular stock or fund you own.) The aim of the day trader is to make a few bucks in the next few minutes, hours or days based on daily price fluctuations.

Passive investing is what long-term investors do — and the intent behind their actions is very different. Their approach to buying and selling stocks is considered passive in that they tend not to transact often. Instead of relying mostly on technical analysis (as active traders do) and trying to time the market, passive investors use fundamental analysis to carefully examine the strength of the businesses behind the ticker symbols 
and then buy shares with the hope that they’ll be rewarded over years — decades, even — through share price appreciation and dividends.
        
        </p>
       
        
    </body>

</html>