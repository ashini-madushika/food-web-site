
   

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Order Website</title>

    <!-- font-awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">



    <!-- swiper cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>

    <!-- header section starts -->

    <header>

      <h2 class="logo"> <i class="fas fa-utensils"></i> C Face Resturent </h2>

        <ul class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#dishes">dishes</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
        </ul>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart">
		<span class="quantity">0</span></a>
		
        </div>

    </header>

	


    <!-- header section ends -->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>



    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                       

                      <p>   Always Choose Good... </p>
                        <a href="#order" class="btn btn-primary">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="spicy noodles">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>fried chicken</h3>
                        <p>   Always Choose Good... </p>

                        <a href="#order" class="btn btn-primary">order now</a>

                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="fried chicken">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>   Always Choose Good... </p>

                        <a href="#order" class="btn btn-primary">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="hot pizza">
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>


        </div>

    </section>

    <!-- home section ends  -->

    <!-- dishes section starts  -->

    <section class="dishes" id="dishes">

        <h3 class="sub-heading"> our dishes </h3>
        <h1 class="heading"> popular dishes </h1>

        <div class="box-container">

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-1.png" alt="">
                <h3>burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                
            </div>
		

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-2.png" alt="">
                <h3>hash browns</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-3.png" alt="">
                <h3>turkey chicken</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
              
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-4.png" alt="">
                <h3>pizza</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-5.png" alt="">
                <h3>chocolate cookies</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
               
            </div>

            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish-6.png" alt="">
                <h3>fried chicken</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>$15.99</span>
                
            </div>

		
    </section>

    <!-- dishes section ends  -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="images/menu-3.jpg" alt="">
            </div>

            <div class="content">

                <h3>best food in the country</h3>
                <p>We are an online food ordering website that specializes in providing our customers with the freshest, most flavorful pizzas, pastas and many more delicious food items.</p>

<p>At C Face Resturent, we believe that good food is meant to be shared with the people you love. That's why we use only the finest ingredients and time-tested recipes to create our signature dishes. Whether you're in the mood for a classic Margherita pizza, a hearty plate of spaghetti Bolognese, or something a little more adventurous like our spicy Arrabbiata pasta, we've got you covered.</p>

<p>We are committed to providing our customers with the highest level of quality and service, which is why we only work with trusted suppliers and employ experienced chefs who share our passion for great food. So whether you're craving a quick bite or a full meal, Pizza, Pasta & many more has got you covered. Order now and taste the difference!</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                    <a href="learnmore.php" class="btn  btn-primary">learn more</a>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends  -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h3 class="sub-heading"> our menu</h3>
        <h1 class="heading"> today's speciality </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/menu-1.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Pizza</h3>
                    <p>This homemade pizza recipe is perfect for parties! Everyone loves pizza, and your guests can customize their toppings to suit their personal tastes.</p>
                  
                    <span class="price">$5.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu2.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Soups</h3>
                    <p>Add this spice infused cauliflower soup recipe to your repertoire for a quick, delicious and healthy meal.</p>
                
                    <span class="price">$5.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu4.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Salads</h3>
                    <p>For a quick and easy throw together salad, this recipe should not be overlooked - packed with marinated veggies, risoni pasta and bocconcini, every bite is a pleasure.</p>
                  
                    <span class="price">$8.00</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-4.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Macaroni</h3>
                    <p>This Indian-style Macaroni recipe will leave you wanting more! It is filled with flavor and includes healthy & colorful veggies like carrots, green beans, cauliflower, capsicum, baby corn, potatoes, peas paired with Indian seasonings and herbs.</p>
                   
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Noodls</h3>
                    <p>a unique and tasty noodles recipe made with spice toppings and typical indo chinese sauce and ingredients. it is basically a fusion of indian spices with soy sauce and vinegar to result in a unique and tasty vegetable-based noodles recipe.</p>
                    
                    <span class="price">$12.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Chicken Curry </h3>
                    <p>This Indian-inspired creamy chicken curry recipe is similar to a curry I had in India. The aromatic spices and flavors are a delight to the senses! Delicious with fresh naan and basmati rice.</p>
                    
                    <span class="price">$10.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/menu-7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Special Donut</h3>
                    <p>Moist and fluffy, this homemade Chocolate Donut recipe is a sweet treat that your whole family will love. Baked, not fried, these donuts are perfectly tender, chocolaty, and rich. Topped with a chocolate glaze, these donuts are perfect for breakfast or a sweet afternoon snack.</p>
                  
                    <span class="price">$8.99</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/g-4.jpg" alt="">
                    <a href="" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Cup Cakes</h3>
                    <p>If you’ve been looking for The Best Chocolate Cupcake Recipe around, you can stop your search. Learning how to make this easy chocolate cupcake recipe from scratch will instantly add an impressive feather to your baking cap.</p>
                  
                    <span class="price">$6.99</span>
                </div>
            </div>

            
        </div>

    </section>

    <!-- menu section ends  -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h3 class="sub-heading"> Customer Reviews </h3>
        <h1 class="heading"> what they say </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/testi1.jpg" alt="">
                        <div class="user-info">
                            <h3>Scarlett Johanson</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Quick and convenient, this online food ordering website is a game-changer for busy foodies.

From the easy-to-use interface to the delicious food delivered straight to my door, I can't recommend this online food ordering website enough.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/testi3.webp" alt="">
                        <div class="user-info">
                            <h3>Robert Downey Jr.</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>FoodMania has become my go-to for delicious Italian food delivered right to my doorstep.

Their menu is extensive, their prices are reasonable, and their delivery is always prompt - I highly recommend them!</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/testi2.jpg" alt="">
                        <div class="user-info">
                            <h3>Chris Evans</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Ordering food online has never been easier - with just a few clicks, I had a delicious meal delivered right to my doorstep.

Highly recommend this online food ordering website - the food is always fresh, hot, and full of flavor.</p>
                </div>

                <div class="swiper-slide slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/pic-3.jpg" alt="">
                        <div class="user-info">
                            <h3>shanice kate</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Quick and convenient, this online food ordering website is a game-changer for busy foodies.

From the easy-to-use interface to the delicious food delivered straight to my door, I can't recommend this online food ordering website enough.</p>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends  -->

    <!-- order section starts -->

    <section class="order" id="order">

        <h3 class="sub-heading"> Order Now </h3>
        <h1 class="heading"> Free and Fast Deliver </h1>

        <form action="connect.php" method="POST">

            <div class="inputBox">
                <div class="input">
                    <span>your name</span>
                    <input type="text" name="name" placeholder="enter your name">
                </div>
                <div class="input">
                    <span>your number</span>
                    <input type="text" name="number" placeholder="enter your number">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your order</span>
                    <input type="text"  name="order" placeholder="enter food name">
                </div>
                <div class="input">
                    <span>additional food</span>
                    <input type="text"  name=" additional" placeholder="extra with food">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>how much</span>
                    <input type="number"  name="howmuch" placeholder="how many orders">
                </div>
                <div class="input">
                    <span>date and time</span>
                    <input type="datetime-local" name="date">
                </div>
            </div>
            <div class="inputBox">
                <div class="input">
                    <span>your address</span>
                    <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="message" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

            <input type="submit" value="order now" class="btn">

        </form>

    </section>



    <!-- order section ends  -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Locations</h3>
                <a href="#">Barak street,
			Hambantota,
			Sri Lanka</a>
            </div>

            
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#">+94705874547</a>
                <a href="#">+94726356467</a>
                <a href="#">cface@gmail.com</a>
                <a href="#"> Sri Lanka</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="https://www.linkedin.com/in/ashini05/" target="_blank">linkedin</a>
                <a href="#">facebook</a>
            </div>

        </div>

        <div class="credit"> copyright @ 2024 by <span>Ashi Liyanarachchi</span></div>

    </section>

    <!-- footer section ends  -->

    <!-- swiper script cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- js file link -->
    <script src="js/index.js"></script>
</body>

</html>