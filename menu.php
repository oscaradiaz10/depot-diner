<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner - Our Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include ("includes/links.php"); ?>
</head>
<body>
    <?php include ("includes/contact-form.php"); ?>
    
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/index.php"><img src="media/Depot Diner.png" width="210px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jobs.php">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://gotab.io/loc/depotdiner/spot/to-go/order/.9bpF0diqB8wqvqMclKDFP7Bw" target="_blank">Order Online</a>
                    </li>
                </ul>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#contact">CONTACT US</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <img class="image-intro" src="media/IMG_4490.jpg" alt="DD insde" width="100%">
        <?php include ("includes/svg.php"); ?>
        <div class="image-intro-gradient"></div>
    </div>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-11">
                <h1>Depot Diner Specialties</h1>
                <p>Our location and menu were designed hand-in-hand to give you a nostalgic, 1960s-style dining experience. We're serving some of the best breakfast plates this side of Table Rock Lake, as well as grilled Certified Angus Beef burgers that are always fresh, never frozen. We also have gourmet pizza, ice cream, and a delicious assortment of homemade desserts.</p>
                <p>Around here, we treat you like family, which is why we use the highest quality ingredients, served with a smile.</p>
            </div>
            <hr style="margin: 5% 0;"/>
            <!--
            <div class="col-12">
                <div class="menu-container">
                    <iframe src="/media/Menu_Jan2026.pdf" frameborder="0"></iframe>
                </div>
            </div>
            -->
        </div>       
    </div>

    <div class="container mt-4">
        <div class="row">

            <!-- LEFT: Categories -->
            <div class="col-lg-2 col-md-3 col-sm-3 mb-4">
                <div class="menu-categories sticky-top-custom">
                    <div class="list-group" id="menuCategories">
                        <button class="list-group-item list-group-item-action active" data-category="starters">Starters</button>
                        <button class="list-group-item list-group-item-action" data-category="pizza">Pizza</button>
                        <button class="list-group-item list-group-item-action" data-category="breakfast">Breakfast</button>
                        <button class="list-group-item list-group-item-action" data-category="lunch">Lunch</button>
                        <button class="list-group-item list-group-item-action" data-category="dinner">Dinner</button>
                        <button class="list-group-item list-group-item-action" data-category="dessert">Dessert</button>
                        <button class="list-group-item list-group-item-action" data-category="drinks">Drinks</button>
                    </div>
                </div>
            </div>

            <!-- RIGHT: Menu Items -->
            <div class="col-lg-10 col-md-9 col-sm-9">
                <!-- Appetizers -->
                <div class="menu-category" id="starters">
                    <!-- Starter Items -->
                    <h2>Starters</h2>
                    <p><strong>SERVED FROM 10:30 AM - CLOSE</strong></p>
                    <p>All starters served with dipping sauce</p>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$7.50</span>
                            <strong>French Fries</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$9</span>
                            <strong>Sweet Potato Fries</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$13.50</span>
                            <strong>Onion Rings</strong>
                            <img class="menu-item-img" src="/media/menu/OnionRings.png" alt="onion rings">
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$8</span>
                            <strong>Piglets</strong>
                            <p>Fried pork loin bites</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$11.50</span>
                            <strong>Chicken Wings</strong>
                            <p>6 chicken wings plain or tossed your choice of BBQ or Frank's Red Hot sauce</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$7.50</span>
                            <strong>Fried Pickle Spears</strong>
                            <p>6 fried pickle spears</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$7</span>
                            <strong>Side Salad</strong>
                            <p>Greens, cucumbers, tomatoes, Parmesan, dressing (ranch, blue cheese, mango vinaigrette, Dorothy Lynch (French), honey mustard, Thousand Island), club crackers on request</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$9</span>
                            <strong>Mozzarella Sticks</strong>
                            <p>6 Mozzarella sticks</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$10</span>
                            <strong>Jalapeno Poppers</strong>
                            <p>10 poppers</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$10</span>
                            <strong>Fried Okra</strong>
                        </div>
                    </div>
                </div>

                <!-- Pizza -->
                <div class="menu-category" id="pizza">
                    <h2>Pizza</h2>
                    <p><strong>SERVED FROM 11:00 AM - CLOSE</strong></p>
                    <p>All pizzas are 14 in, 8 slices</p>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$16</span>
                            <strong>MoJo Pizza</strong>
                            <img class="menu-item-img" src="media/menu/Pizza.png" alt="pizza">
                            <p>Pepperoni and Cream Cheese</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14</span>
                            <strong>Pepperoni, Sausage, or Hamburger</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$22</span>
                            <strong>Supreme</strong>
                            <p>Pepperoni, hamburger, sausage, onions, green peppers, black olives, mushrooms</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$12</span>
                            <strong>Cheese Pizza</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$2.50</span>
                            <strong>Add a Meat Topping</strong>
                            <p>Hamburger, pepperoni, sausage, Canadian bacon</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$1.50</span>
                            <strong>Add a Vegetable Topping</strong>
                            <p>Onion, green peppers, black olives, mushrooms, banana peppers</p>
                        </div>
                    </div>
                </div>

                <!-- Breakfast -->
                <div class="menu-category" id="breakfast">
                    <h2>Breakfast</h2>
                    <p><strong>SERVED ALL DAY</strong></p>
                    <p>Upgrade your toast to a pancake for $1.50</p>
                    <span>* Consuming raw or undercooked animal products may increase your chance of food borne illness.</span>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$12.50</span>
                            <strong>Depot Breakfast Plate*</strong>
                            <p>Bacon, ham, sausage, or Cajun sausage, 2 eggs your way, hash browns, white, wheat, or rye toast, or biscuit</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$16.50</span>
                            <strong>Country Fried Steak Breakfast</strong>
                            <img class="menu-item-img" src="/media/menu/CountryBreakfast.png" alt="Country Breakfast">
                            <p>Country fried steak with sausage gravy, 2 eggs your way, hash browns, white, wheat, or rye toast, or biscuit</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$8</span>
                            <strong>Pancakes</strong>
                            <p>3 pancakes (plain, blueberry, or chocolate chip) served with butter and syrup</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$10</span>
                            <strong>Biscuits and Gravy</strong>
                            <p>2 biscuits with sausage gravy and two eggs your way</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14.50</span>
                            <strong>Breakfast Casserole</strong>
                            <img class="menu-item-img" src="/media/menu/Casserole.png" alt="Casserole">
                            <p>Biscuit topped with scrambled eggs, hash browns, sausage gravy, cheese, and your choice of sausage, bacon or ham</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14.50</span>
                            <strong>Omelet</strong>
                            <p>3 eggs, up to 4 fillings of your choice (bacon, sausage, ham, green pepper, onion, mushroom, tomato), hash browns, white, wheat, or rye toast, or biscuit $1.50 upcharge for 5 or more fillings. Cheese comes included in all omelets unless otherwise specified</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$8</span>
                            <strong>French Toast</strong>
                            <p>6 half slices of French toast made with Texas toast, white or wheat bread, sprinkled with powdered sugar</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15</span>
                            <strong>Pork Chop Breakfast</strong>
                            <p>Pork chop, 2 eggs your way, hash browns, white, wheat, or rye, toast, or biscuit</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$18</span>
                            <strong>8 oz Strip Breakfast</strong>
                            <p>8 oz Strip, 2 eggs your way, hash browns, white, wheat, or rye, toast, or biscuit</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$5</span>
                            <strong>Cinnamon Roll</strong>
                        </div>
                    </div>
                </div>

                <!-- Lunch -->
                <div class="menu-category" id="lunch">
                    <h2>Lunch</h2>
                    <p><strong>SERVED FROM 10:30 AM - CLOSE</strong></p>
                    <p>All burgers cooked medium well unless otherwise specified.</p>
                    <span>* Consuming raw or undercooked animal products may increase your chance of food borne illness.</span>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14.50</span>
                            <strong>Depot Burger*</strong>
                            <img class="menu-item-img" src="/media/menu/Burger.png" alt="Burger">
                            <p>5 oz patty, bun, special sauce, Cheddar cheese, caramelized onions, bacon, pickles, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14.50</span>
                            <strong>Western BBQ Burger*</strong>
                            <p>5 oz patty, bun, bacon, cheddar cheese, caramelized onions, BBQ sauce, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$13.50</span>
                            <strong>Depot Dipper</strong>
                            <img class="menu-item-img" src="/media/menu/Dipper.png" alt="Dipper">
                            <p>Roast beef, American and Cheddar cheese on Parmesan crusted bread, brown gravy, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$13.50</span>
                            <strong>Cheeseburger*</strong>
                            <p>5 oz patty, bun, lettuce, tomato, onion, pickles, fries. (Swiss, Pepper Jack, Cheddar, or American cheese) Add bacon for additional $1.50</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15</span>
                            <strong>Chicken Sandwich</strong>
                            <p>Grilled or breaded chicken breast, Swiss cheese, caramelized onions, bacon, honey mustard, special sauce, bun, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15.50</span>
                            <strong>Depot Salad</strong>
                            <p>Grilled or breaded chicken, mixed greens, cucumbers, tomatoes, red onions, Parmesan cheese, club crackers, dressing (ranch, blue cheese, mango vinaigrette, Dorothy Lynch (French), honey mustard, Thousand Island)</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15.50</span>
                            <strong>Southwest Chicken Salad</strong>
                            <img class="menu-item-img" src="/media/menu/Salad.png" alt="Salad">
                            <p>Grilled or breaded chicken, mixed greens, black beans, corn, green pepper, tomatoes, onion, cheddar cheese, tortilla strips and jalapeno ranch</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$13</span>
                            <strong>Chicken Finger Basket</strong>
                            <p>Breaded chicken tenders plain or tossed in Frank's Red Hot sauce, fries, dipping sauce</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14</span>
                            <strong>Fish Basket</strong>
                            <p>Crispy fried fish, fries, homemade tartar sauce (Malt Vinegar on request)</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14</span>
                            <strong>Patty Melt</strong>
                            <p>5 oz hamburger patty, caramelized onions, Swiss cheese, special sauce, marble rye bread, pickle spear, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$13.50</span>
                            <strong>Hot Roast Beef Sandwich</strong>
                            <p>Shredded roast beef on white bread with mashed potatoes, covered in brown gravy (Add chef's choice veggie for $2)</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$17</span>
                            <strong>Reuben Sandwich</strong>
                            <img class="menu-item-img" src="/media/menu/Reuben.png" alt="Reuben">
                            <p>Corned beef, sauerkraut, Swiss cheese, Thousand Island sauce, marble rye bread, pickle spear, fries (Try with our special sauce instead of Thousand Island)</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14</span>
                            <strong>Breaded Pork Sandwich</strong>
                            <p>Fried pork loin, bun, mayo, lettuce, tomato, onion, pickle, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$14</span>
                            <strong>Grinder</strong>
                            <p>Salami, pepperoni, Canadian bacon, Swiss cheese, lettuce, tomato, onion, oil/vinegar mixture, garlic aioli on 6” hoagie, served cold or toasted, fries (Banana peppers on request)</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15</span>
                            <strong>Philly</strong>
                            <p>Beef, Swiss cheese, roasted onions and peppers on a 6” hoagie, fries</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$13</span>
                            <strong>BLT</strong>
                            <p>Bacon, lettuce, tomato, and mayo on white bread, fries</p>
                        </div>
                    </div>
                </div>

                <!-- Dinner -->
                <div class="menu-category" id="dinner">
                    <h2>Dinner</h2>
                    <p><strong>SERVED FROM 10:30 AM - CLOSE</strong></p>
                    <p>All dinner meals served with mashed potatoes, white or brown gravy (unless otherwise specified), chef’s choice veggie, and a roll.</p>
                    <p>Add a side salad to your dinner for $3.50</p>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$17</span>
                            <strong>Country Fried Steak</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$17</span>
                            <strong>Country Fried Chicken</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15</span>
                            <strong>Pork Fritter</strong>
                            <p>Breaded pork tenderloin</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$16</span>
                            <strong>Meatloaf</strong>
                            <img class="menu-item-img" src="/media/menu/Meatloaf.png" alt="Meatloaf">
                            <p>Caramelized onion and bacon meatloaf finished with pan gravy</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$15</span>
                            <strong>Pork Chop Dinner</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$18</span>
                            <strong>8 oz Strip</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$25</span>
                            <strong>10 oz Rib Eye</strong>
                            <img class="menu-item-img" src="/media/menu/Ribeye.png" alt="Ribeye">
                        </div>
                    </div>
                </div>

                <!-- Dessert -->
                <div class="menu-category" id="dessert">
                    <h2>Dessert</h2>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$2</span>
                            <strong>Ice Cream Cone</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$3</span>
                            <strong>Dish of Ice Cream</strong>
                            <img class="menu-item-img" src="/media/menu/IceCream.png" alt="Ice Cream">
                            <p>Sprinkles on request</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$.50</span>
                            <strong>Add a Topping</strong>
                            <p>Chocolate, strawberry or caramel syrup</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$5</span>
                            <strong>Malt or Milkshake</strong>
                            <p>Vanilla, chocolate or strawberry</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$4</span>
                            <strong>Fried Pie</strong>
                            <p>Cherry or apple (Top with ice cream for $2)</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$6</span>
                            <strong>Toasted Coconut Caramel Pecan Pie</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$5</span>
                            <strong>Peanut Butter Pie</strong>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$5</span>
                            <strong>Root Beer Float</strong>
                        </div>
                    </div>
                </div>

                <!-- Drinks -->
                <div class="menu-category" id="drinks">
                    <h2>Drinks</h2>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$2.75</span>
                            <strong>Free inhouse refills</strong>
                            <p>Dr. Pepper</p>
                            <p>Diet Dr. Pepper</p>
                            <p>Root Beer</p>
                            <p>Coke</p>
                            <p>Diet Coke</p>
                            <p>Sprite</p>
                            <p>Lemonade</p>
                            <p>Coffee</p>
                            <p>Iced Tea</p>
                        </div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-item-single">
                            <span class="menu-item-price">$2.75</span>
                            <strong>No free refills</strong>
                            <p>Orange Juice (Large +$1.50)</p>
                            <p>Milk - Add chocolate for $.25 (Large +$1.50)</p>
                        </div>
                    </div>
                </div>

             </div>
        </div>
    </div>

    <?php include ("includes/footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const categoryButtons = document.querySelectorAll('#menuCategories button');
  const categories = document.querySelectorAll('.menu-category');

  categoryButtons.forEach(button => {
    button.addEventListener('click', () => {

      // Remove active state
      categoryButtons.forEach(btn => btn.classList.remove('active'));

      // Hide all categories
      categories.forEach(cat => cat.classList.add('d-none'));

      // Activate selected
      button.classList.add('active');
      document.getElementById(button.dataset.category).classList.remove('d-none');
    });
  });
</script>

</body>
</html>
