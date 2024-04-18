// Switching section by clicking on links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// View recipe function
function view_recipe(id) {
    $("#viewRecipeModal").modal("show");

    const viewRecipeName = $("#recipeName-" + id).text();
    const viewCategoryName = $("#categoryName-" + id).text();
    const viewRecipeImage = $("#recipeImage-" + id).find('img').attr('src');
    const viewRecipeIngredients = $("#recipeIngredients-" + id).text();
    const viewRecipeProcedure = $("#recipeProcedure-" + id).text();

    // Update modal content with fetched data
    $("#viewRecipeName").text(viewRecipeName);
    $("#viewCategoryName").text(viewCategoryName);
    $("#viewRecipeImage").attr('src', viewRecipeImage);
    $("#viewRecipeIngredients").text(viewRecipeIngredients);
    $("#viewRecipeProcedure").text(viewRecipeProcedure);
}

// Update recipe function
function update_recipe(id) {
    $("#updateRecipeModal").modal("show");

    const updateRecipeID = $("#recipeID-" + id).text();
    const updateCategoryName = $("#categoryName-" + id).text();
    const updateRecipeImage = $("#recipeImage-" + id).find('img').attr('src');
    const updateRecipeName = $("#recipeName-" + id).text();
    const updateRecipeIngredients = $("#recipeIngredients-" + id).text();
    const updateRecipeProcedure = $("#recipeProcedure-" + id).text();

    $("#updateRecipeID").val(updateRecipeID);
    $("#updateRecipeCategory option").each(function() {
        const category = $(this).text();
        if (category === updateCategoryName) {
            $(this).prop("selected", true);
            return false;
        }
    });
    $("#updateRecipeName").val(updateRecipeName);
    $("#updateRecipeIngredients").val(updateRecipeIngredients);
    $("#updateRecipeProcedure").val(updateRecipeProcedure);
    $("#updateRecipeImage").html(updateRecipeImage);
}

// Delete recipe function
function delete_recipe(id) {
    if (confirm("Do you confirm to delete this recipe?")) {
        window.location = "endpoint/delete-recipe.php?recipe=" + id;
    }
}

// Search function
function performSearch() {
    const input = document.getElementById("searchInput");
    const filter = input.value.toLowerCase();
    const table = document.getElementById("foodListTable");
    const tr = table.getElementsByTagName("tr");

    for (let i = 0; i < tr.length; i++) {
        const nameColumn = tr[i].getElementsByTagName("td")[1]; // Column for Recipe Name
        const categoryColumn = tr[i].getElementsByTagName("td")[2]; // Column for Category

        if (nameColumn && categoryColumn) {
            const nameText = nameColumn.textContent || nameColumn.innerText;
            const categoryText = categoryColumn.textContent || categoryColumn.innerText;

            if (nameText.toLowerCase().indexOf(filter) > -1 || categoryText.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// Attach event listener to search input field
document.getElementById("searchInput").addEventListener("keyup", performSearch);
