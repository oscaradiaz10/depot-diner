<!DOCTYPE html>
<html lang="en">
<head>
    <title>Depot Diner - Test Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include ("includes/links.php"); ?>
</head>
<body>
    <?php include ("includes/contact-form.php"); ?>

    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="media/Depot Diner.png" width="210px" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/menu.php">Our Menu</a>
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
            <div class="col-lg-12">
                <div class="container">
                    <ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="starters-tab" data-bs-toggle="tab" data-bs-target="#starters" type="button" role="tab" aria-controls="starters" aria-selected="true">Starters</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pizza-tab" data-bs-toggle="tab" data-bs-target="#pizza" type="button" role="tab" aria-controls="pizza" aria-selected="false">Pizza</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="breakfast-tab" data-bs-toggle="tab" data-bs-target="#breakfast" type="button" role="tab" aria-controls="breakfast" aria-selected="false">Breakfast</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lunchdinner-tab" data-bs-toggle="tab" data-bs-target="#lunchdinner" type="button" role="tab" aria-controls="lunchdinner" aria-selected="false">Lunch/Dinner</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="dessert-tab" data-bs-toggle="tab" data-bs-target="#dessert" type="button" role="tab" aria-controls="dessert" aria-selected="false">Dessert</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="drinks-tab" data-bs-toggle="tab" data-bs-target="#drinks" type="button" role="tab" aria-controls="drinks" aria-selected="false">Drinks</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="kids-tab" data-bs-toggle="tab" data-bs-target="#kids" type="button" role="tab" aria-controls="kids" aria-selected="false">Kids Menu</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="starters" role="tabpanel" aria-labelledby="starters-tab"></div>
                        <div class="tab-pane fade" id="pizza" role="tabpanel" aria-labelledby="pizza-tab"></div>
                        <div class="tab-pane fade" id="breakfast" role="tabpanel" aria-labelledby="breakfast-tab"></div>
                        <div class="tab-pane fade" id="lunchdinner" role="tabpanel" aria-labelledby="lunchdinner-tab"></div>
                        <div class="tab-pane fade" id="dessert" role="tabpanel" aria-labelledby="dessert-tab"></div>
                        <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinks-tab"></div>
                        <div class="tab-pane fade" id="kids" role="tabpanel" aria-labelledby="kids-tab"></div>
                    </div>
                </div>
            </div>
        </div>       
    </div>

    <?php include ("includes/footer.php"); ?>

    <script>
    // Load the JSON data
    document.addEventListener("DOMContentLoaded", () => {
        fetch('includes/menu_items.json')
            .then(response => response.json())
            .then(data => {
                populateMenu(data.menu);
            })
            .catch(error => console.error('Error loading the menu:', error));
    });

    function populateMenu(menu) {
        menu.forEach(category => {
            const categoryId = category.category.toLowerCase().replace(/\s+/g, ''); // Match tab IDs
            const tabPane = document.getElementById(categoryId);

            if (tabPane) {
                // Add category description and time at the top of the tab
                let content = `
                    <div class="mb-4">
                        <p class="text-muted" style="margin-top: 4%">${category.time}</p>
                        <p>${category.category_description}</p>
                    </div>
                    <div class="row">
                `;

                // Loop through each item and place it in a responsive grid
                category.items.forEach(item => {
                    content += `
                        <div class="col-sm-6 col-md-6 col-lg-4 mb-4">
                            <div class="card">
                                ${item.image ? `
                                    <img src="${item.image}" class="card-img-top" alt="${item.name}">
                                ` : ''}
                                <div class="card-body">
                                    <h5 class="card-title">${item.name}</h5>
                                    ${item.description ? `<p class="card-text">${item.description}</p>` : ''}
                                    <p class="card-text">
                                        <small class="text-muted">$${item.price.toFixed(2)}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    `;
                });

                content += `</div>`; // Close row
                tabPane.innerHTML = content;
            }
        });
    }
</script>

</body>
</html>
