<?php
   session_start();
   ?>
<html>
    <head>
        <title>Tourist Spots</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="icon" type="image/png" href="images/logo1.png"/>
    </head>
    <body>
        <script type="text/javascript">
            function myfunc()
            {
                var inputVal = document.getElementById("myInput").value;
                if(inputVal=="india")
                {
                   window.location="india1.html";
                }else if(inputVal=="usa")
                {
                    window.location="us1.html";
                }else if(inputVal=="china")
                {
                    window.location="china1.html";
                }else if(inputVal=="france")
                {
                    window.location="france1.html";
                }else if(inputVal=="australia")
                {
                    window.location="aus1.html";
                }

            }
            
        </script>
        <section class="header">
         <div class="container" >
             <img src="images/logo.png">
             <a href="login.html"> <button type="button" class="login-btn">Log Out</button> </a>
             
             
        </div>   
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <p>Live with no excuses and travel with no regrets</p>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search Country" id="myInput">
            <div class="input-group-append">
            <button type="submit" class="input-group-text btn" onclick="myfunc()">Search</button>
            </div>    
        </div>
        </section>
        <section class=features>
        <h1>Featured Destination</h1> 
        <div class="container">
        <div class="row">
        <div class="col-md-4">
            <div class="feature-box">
            <div class="feature-img">
            <img src="images/2.jpg">
            <div class="price">
                <p>$85</p>   
            </div>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
            </div> 
            <div class="feature-details">
                <h4>Switzerland</h4>
                <p>Switzerland is a mountainous Central European country,home to numerous lakes,villages and the high peaks of the Alps.Its cities contain medieval quarters,with landmarks like capital Bern???s Zytglogge clock tower and Lucerne???s wooden chapel bridge.</p>
                <div>
                    <span><i class="fa fa-map-marker"></i>Switzerland</span>
                    <span><i class="fa fa-sun-o"></i>3 Days</span>
                    <span><i class="fa fa-moon-o"></i>3 Nights</span>
                    
                </div>
            </div>  
            </div>
        </div>  
        <div class="col-md-4">
            <div class="feature-box">
                <div class="feature-img">
                <img src="images/1.jpg">
                <div class="price">
                    <p>$80</p>   
                </div>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                </div> 
                <div class="feature-details">
                    <h4>Los Angeles</h4>
                    <p>Los Angeles is a sprawling Southern California city and the center of the nation???s film and television industry. Near its iconic Hollywood sign, studios such as Paramount Pictures, Universal and Warner Brothers offer behind-the-scenes tours. Los Angeles is known for its Mediterranean climate.</p>
                    <div>
                        <span><i class="fa fa-map-marker"></i>Los Angeles</span>
                        <span><i class="fa fa-sun-o"></i>4 Days</span>
                        <span><i class="fa fa-moon-o"></i>3 Nights</span>
                        
                    </div>
                </div>  
                </div>
        </div>
        <div class="col-md-4">
            <div class="feature-box">
                <div class="feature-img">
                <img src="images/3.jpg">
                <div class="price">
                    <p>$75</p>   
                </div>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                </div> 
                <div class="feature-details">
                    <h4>Dubai</h4>
                    <p>Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music.</p>
                    <div>
                        <span><i class="fa fa-map-marker"></i>Dubai</span>
                        <span><i class="fa fa-sun-o"></i>4 Days</span>
                        <span><i class="fa fa-moon-o"></i>4 Nights</span>
                        
                    </div>
                </div>  
                </div>

        </div>
        </div>   
        </div>  
        </section>
        <section class="gallery">
        <h1>Travelling Gallery</h1>
        <div class="container">
        <div class="row">
        <div class="col-md-3">
            <div class="gallery-box">
               <a href="https://www.google.com/search?safe=active&sxsrf=ALeKk037GZ9fA9Chm7SaGaRDf6Xc05NVMw%3A1602228147316&ei=sw-AX9nyEtTYz7sPn8K70Ao&q=paris+&oq=paris+&gs_lcp=CgZwc3ktYWIQAzIKCC4QyQMQJxCTAjIECAAQQzIKCC4QxwEQrwEQQzIECAAQQzICCAAyAggAMgoILhCxAxAUEIcCMgIIADIFCC4QsQMyBAgAEAo6BAgAEEdQ6ENY30tgtFBoAHACeACAAZwCiAG2C5IBAzItNpgBAKABAaoBB2d3cy13aXrIAQjAAQE&sclient=psy-ab&ved=0ahUKEwiZmMf8_KbsAhVU7HMBHR_hDqoQ4dUDCA0&uact=5"> <img src="images/travel 1.jpg"></a>
                <h4>Paris</h4>   
            </div>  
        </div> 
        <div class="col-md-3">
            <div class="gallery-box">
                <a href="https://www.google.com/search?safe=active&sxsrf=ALeKk00yJ0N283HtctS3fXXQHbC6t0Bg1g%3A1602228158879&ei=vg-AX5iMNZ_bz7sPvoy9wAU&q=venice&gs_ssp=eJzj4tDP1Tcwjy9IM2D0YitLzctMTgUAMHQFdQ&oq=ven&gs_lcp=CgZwc3ktYWIQAxgAMgoILhDJAxAnEJMCMgQILhAnMgUIABCxAzIHCAAQsQMQQzIHCC4QsQMQQzIECAAQQzIFCC4QsQMyBQgAELEDMgIIADIFCAAQsQM6CgguEOoCECcQkwI6BwguEOoCECc6BwgjEOoCECc6EwguEOoCELQCEEMQiwMQqAMQnQM6GQguEMcBEK8BEOoCELQCEEMQiwMQpgMQqAM6BwguECcQkwI6BAgjECc6DQguEMcBEK8BEMkDEEM6BAguEEM6AgguOggIABCxAxCDAToKCC4QxwEQrwEQQzoICC4QsQMQgwFQ9rICWP67AmCcxwJoAXABeACAAeMCiAGCBpIBBzAuMS4xLjGYAQCgAQGqAQdnd3Mtd2l6sAEKuAECwAEB&sclient=psy-ab"><img src="images/travel 2.jpg"></a>
                <h4>Venice</h4>   
            </div>  
        </div> 
        <div class="col-md-3">
            <div class="gallery-box">
               <a href="https://www.google.com/search?safe=active&sxsrf=ALeKk00a5EjucO4y1WFgVbhcqTAZzjj6nA%3A1602228202152&ei=6g-AX8nuCJK_8QPr9oLIBg&q=indian&gs_ssp=eJzj4tDP1TcwLso2MGD0YsvMS8lMzAMALmEFQg&oq=in&gs_lcp=CgZwc3ktYWIQAxgCMgQIIxAnMgQIIxAnMgQILhAnMgoIABCxAxCDARBDMg4ILhCxAxCDARDHARCjAjIECAAQQzIECAAQQzICCAAyBQgAELEDMgcIABCxAxBDOgoILhDqAhAnEJMCOgcILhDqAhAnOgcIIxDqAhAnOhMILhDqAhC0AhBDEIsDEKgDEJ0DOgcILhAnEJMCOgcILhDJAxBDOgQILhBDOggIABCxAxCDAToICC4QxwEQowJQhYoCWMCOAmC9mAJoAXABeACAAe0BiAHJA5IBAzItMpgBAKABAaoBB2d3cy13aXqwAQq4AQLAAQE&sclient=psy-ab"><img src="images/travel 3.jpg"></a>
                <h4>India</h4>   
            </div>  
        </div> 
        <div class="col-md-3">
            <div class="gallery-box">
               <a href="https://www.google.com/search?safe=active&sxsrf=ALeKk02wTrkezebWwXd2qk04Q_B9J3lR-Q%3A1602228239378&ei=DxCAX6TVFvDSz7sPmtS30As&q=egypt&gs_ssp=eJzj4tDP1TcwyjY1MWD0Yk1NrywoAQAmvgS9&oq=eg&gs_lcp=CgZwc3ktYWIQAxgAMg0ILhCxAxDJAxBDEJMCMgQIABBDMgQILhBDMgQIABBDMgQIABBDMgQIABBDMgQIABBDMgIIADICCAAyAggAOgoILhDqAhAnEJMCOgcILhDqAhAnOhkILhDHARCjAhDqAhC0AhBDEIsDEKcDEKgDOhMILhDqAhC0AhBDEIsDEKQDEKgDOgQIIxAnOg4ILhDHARCvARDJAxCRAjoFCC4QkQI6CAgAELEDEIMBOgIILjoOCC4QsQMQgwEQxwEQowI6CAguEMcBEK8BUJ2AA1iTiQNgsJcDaAFwAXgAgAH6AYgBqwOSAQUwLjEuMZgBAKABAaoBB2d3cy13aXqwAQq4AQLAAQE&sclient=psy-ab"><img src="images/travel 4.jpg"></a>
                <h4>Egypt</h4>   
            </div>  
        </div>  
        </div>
        </div>
        </section>
        <section class="banner">
            <div class="banner-highlights">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Get 30% offer on top destination</h2>
                            <p>Book your tickets 10th December and avail 30% flat discount.</p>
                        </div>
                        <div class="col-md-4">
                            <a href="booking.html"><button type="button" class="booking-btn">Book Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="users-feedback">
        <h1>Users Review</h1>  
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <div class="user-review">
                        <p>What a place, the history, architecture and culture is wonderful. So many sites to see, one more amazing then the next. A must see if you are going to visit the great cities of the world.</p> 
                        <h5>Charan</h5>  
                        <small>Paris</small>
                     </div>
                     <img src="images/user1.jpg">
                </div>
                <div class="col-md-4">
                    <div class="user-review">
                        <p>There are many places in this world where you go once and want to go again and again. But for dubai i would not say so You can visit it once but to go again you will not feel.</p> 
                        <h5>Arjun</h5>  
                        <small>Dubai</small>
                     </div>
                     <img src="images/user2.jpg">
                </div>
                <div class="col-md-4">
                    <div class="user-review">
                        <p>We have been visiting all of La, for many years. This time we ate at The Lobster by the Santa Monica Pier. The service is impeccable, the ocean views fabulous, and the food, delicious.</p> 
                        <h5>Balaji</h5>  
                        <small>Los Angeles</small>
                     </div>
                     <img src="images/user3.jpg">
                </div>
            </div>
        </div>
        </section>
        <section class="footer">
        <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="images/logo.png" class="footer-logo">
                <p>A travel website is a website that is dedicated to travel. The site may be focused on travel reviews, trip fares, or a combination of both. Over 1.5 billion people book travel per year, 70% of which is done online.</p>
            </div>
            <div class="col-md-3">
                <h4>Features</h4>
                <p>Deals and Offers</p>
                <p>Customer Review</p>
                <p>Cancelation Policy</p>
            </div>
            <div class="col-md-3">
                <h4>Quick Contact</h4>
                <p><i class="fa fa-phone-square"></i> +91 9324312345</p>
                <p><i class="fa fa-envelope"></i> charanspotify3@gmail</p>
                <p><i class="fa fa-home"></i> Anna Nagar,Chennai,Tamil Nadu</p>
                
            </div>
            <div class="col-md-3">
                <h4>Follow us on</h4>
                <p><i class="fa fa-facebook-official"></i> Facebook</p>
                <p><i class="fa fa-youtube-play"></i> Youtube</p>
                <p><i class="fa fa-twitter"></i> Twitter</p>

            </div>
            
        </div><hr>
              <p class="copyright">Made with <i class="fa fa-heart"></i> by specboi </p>
        </div>
        </section>

    </body>
</html>