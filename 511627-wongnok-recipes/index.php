<?php 
include('conn/conn.php'); 
include('assets/modal.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Food Recipe</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand ml-5" href="http://localhost/Wongnok/index.php">My Food Recipe</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#category">Food Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#food">Food List</a>
                </li>
            </ul>   
            <div class="form-inline my-2 my-lg-0 mr-5">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle link-unstyled" style="text-decoration: none; color: #eee;" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">View Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Home Section -->
    <section id="home">
        <div class="main">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/bg4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="caption"><strong>Welcome to My Food Recipe</strong></h1>
                            <p class="caption caption-p">Create delicious recipes with ease using our interactive web application. Simply input the dishes you intend to cook, along with their corresponding ingredients and step-by-step procedures, to ensure a seamless and delightful cooking experience.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/bg3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="caption"><strong>Learn Web Design</strong></h1>
                            <p class="caption caption-p">Embark on a journey into the world of web design—a dynamic fusion of creativity and technology. Discover the art of crafting captivating digital experiences through layout, color, and typography. Dive into coding languages like HTML and CSS to bring your imaginative designs to life on the vast canvas of the internet.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/bg5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="caption"><strong>Sourcecodester.com</strong></h1>
                            <p class="caption caption-p">Visit our free source code website to access a wide range of coding resources, tutorials, and examples. Whether you're a beginner or an experienced developer, our platform offers valuable insights and code snippets to enhance your coding skills. Explore different programming languages, frameworks, and projects to expand your knowledge and create innovative applications. Happy coding!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="image/card1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center"><strong>Ingredients List</strong></h4>
                                <p class="card-text text-center">This should be detailed and include important information to tell the user how much of each ingredient they should be using.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="image/card2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center"><strong>Foods List</strong></h4>
                                <p class="card-text text-center">This is typically the name of the food the user will be making when they follow the recipe.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="image/card3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title text-center"><strong>Procedures</strong></h4>
                                <p class="card-text text-center">These are the steps the user should take and are numbered and ordered chronologically in the way they should be done.</p>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section id="category">
        <div class="container mt-5">
            <div class="row">
                <!-- Category Cards -->
                <!-- Repeat this block for each category -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/breakfast.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Breakfast Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#breakfastModal">View List</a>
                        </div>
                    </div>
                </div>
                <!-- End of Category Cards -->
            </div>   
        </div>
    </section>

    <!-- Food List Section -->
    <section id="food">
        <!-- Food List Table -->
        <div class="card card-food-list">
            <h1 class="text-center"><strong>Food Lists</strong></h1>
            <!-- Search and Add Recipe -->
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-2 mr-auto">
                        <button type="button" class="btn btn-add-food btn-secondary" data-toggle="modal" data-target="#addRecipeModal">Add Recipe</button>
                    </div>
                    <div class="col-md-2">
                        <input class="form-control p-4" type="text" id="searchInput" placeholder="Search...">
                    </div>
                </div>
            </div>

            <!-- Food List Table -->
            <table id="foodListTable" class="table table-responsive mt-4" style="text-align:center;">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">Food ID</th>
                        <th scope="col" style="width: 10%;">Recipe Image</th>
                        <th scope="col" style="width: 10%;">Recipe Name</th>
                        <th scope="col" style="width: 10%;">Category</th>
                        <th scope="col" style="width: 10%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PHP Loop to Display Recipes -->
                    <?php 
                    $stmt = $conn->prepare("
                        SELECT * 
                        FROM 
                            `tbl_recipe`
                        LEFT JOIN
                            `tbl_category` ON
                            `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id` 
                        ");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach ($result as $row) {
                        $recipeID = $row['tbl_recipe_id'];
                        $categoryName = $row['category_name'];
                        $recipeImage = $row['recipe_image'];
                        $recipeName = $row['recipe_name'];
                        ?>
                        <tr>
                            <th id="recipeID-<?= $recipeID ?>"><?php echo $recipeID ?></th>
                            <td id="recipeImage-<?= $recipeID ?>"><img src="http://localhost/Wongnok/uploads/<?php echo $recipeImage ?>" class="img-fluid" style="height: 50px; width: 90px" alt="Recipe Image"></td>
                            <td id="recipeName-<?= $recipeID ?>"><?php echo $recipeName ?></td>
                            <td id="categoryName-<?= $recipeID ?>"><?php echo $categoryName ?></td>
                            <td>
                                <button type="button" onclick="view_recipe('<?php echo $recipeID ?>')" title="View"><i class="fa-solid fa-list p-1"></i></button>
                                <button type="button" onclick="update_recipe('<?php echo $recipeID ?>')" title="Edit"><i class="fa-solid fa-pencil p-1"></i></button>
                                <button type="button" onclick="delete_recipe('<?php echo $recipeID ?>')" title="Delete"><i class="fa-solid fa-trash p-1"></i></button>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <!-- End of PHP Loop -->
                </tbody>
            </table>
        </div>
        <!-- End of Food List Table -->
    </section>

    <!-- JavaScript Libraries -->
    <script src="assets/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
