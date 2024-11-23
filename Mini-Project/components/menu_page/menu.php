<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Pie - Menu</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="menu.css">
    <script src="menu.js"></script>
    <script src="/Main2.js"></script>
</head>
<body>
    <header>
        <a href="#" class="logo">Pizza Pie</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- <li><a href="#" id="loginLink">Log out</a></li> -->

            <!-- Dark Mode -->
            <div class="bx bx-moon" id="darkmode"></div>
        </ul>
    </header>

    <main>
        <h2>Menu Options</h2>
        <section class="menu" id="menu">
            <div class="heading">
                <span>Menu</span>
                <h2>Tasty menu of the week</h2>
            </div>
            <div class="menu-container">
                <div class="box">
                    <div class="box-img">
                        <img src="https://images.pexels.com/photos/803290/pexels-photo-803290.jpeg?cs=srgb&dl=pexels-beqa-tefnadze-803290.jpg&fm=jpg" alt="Cheese Pizza">
                    </div>
                    <h2>Cheese Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price" >$30.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
                
                <div class="box">
                    <div class="box-img">
                        <img src="https://img.freepik.com/free-photo/pepperoni-pizza-with-sausages-cheese-dark-wooden-table_220768-9277.jpg?size=626&ext=jpg" alt="Tropical Pizza">
                    </div>
                    <h2>Tropical Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price">$42.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
            
                <div class="box" data-name="Mecaroni Pizza" data-price="12.05">
                    <div class="box-img">
                        <img src="https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=740&t=st=1661842808~exp=1661843408~hmac=c40f0c154036b96b1dba17947c4e4f7c07f40db983106490402bb0b7b6ec452e" alt="Mecaroni Pizza">
                    </div>
                    <h2>Mecaroni Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price">$12.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
                
                <div class="box">
                    <div class="box-img">
                        <img src="https://images.pexels.com/photos/803290/pexels-photo-803290.jpeg?cs=srgb&dl=pexels-beqa-tefnadze-803290.jpg&fm=jpg" alt="Cheese Pizza">
                    </div>
                    <h2>Cheese Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price" >$30.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="https://img.freepik.com/free-photo/pepperoni-pizza-with-sausages-cheese-dark-wooden-table_220768-9277.jpg?size=626&ext=jpg" alt="Tropical Pizza">
                    </div>
                    <h2>Tropical Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price">$42.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
            
                <div class="box" data-name="Mecaroni Pizza" data-price="12.05">
                    <div class="box-img">
                        <img src="https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=740&t=st=1661842808~exp=1661843408~hmac=c40f0c154036b96b1dba17947c4e4f7c07f40db983106490402bb0b7b6ec452e" alt="Mecaroni Pizza">
                    </div>
                    <h2>Mecaroni Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price">$12.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
                
                <div class="box">
                    <div class="box-img">
                        <img src="https://images.pexels.com/photos/803290/pexels-photo-803290.jpeg?cs=srgb&dl=pexels-beqa-tefnadze-803290.jpg&fm=jpg" alt="Cheese Pizza">
                    </div>
                    <h2>Cheese Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price" >$30.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>

                <div class="box">
                    <div class="box-img">
                        <img src="https://img.freepik.com/free-photo/pepperoni-pizza-with-sausages-cheese-dark-wooden-table_220768-9277.jpg?size=626&ext=jpg" alt="Tropical Pizza">
                    </div>
                    <h2>Tropical Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price">$42.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
            
                <div class="box" data-name="Mecaroni Pizza" data-price="12.05">
                    <div class="box-img">
                        <img src="https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=740&t=st=1661842808~exp=1661843408~hmac=c40f0c154036b96b1dba17947c4e4f7c07f40db983106490402bb0b7b6ec452e" alt="Mecaroni Pizza">
                    </div>
                    <h2>Mecaroni Pizza</h2>
                    <h3>Tasty Food</h3>
                    <button id="price">$12.05</button>
                    <i class='bx bx-cart-alt add-to-cart'></i>
                </div>
                
            </div>
            
            <!-- Proceed to Payment button -->
            <button id="proceedToPayment" style="display:none;">Proceed to Payment</button>
            
        </section>
    </main>
</body>
</html>