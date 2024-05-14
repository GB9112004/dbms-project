<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylel2.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="connect.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <fieldset class="foodoptions">
                <legend>Food Preferences:</legend>
                <input type="radio" id="veg" name="foodoption" value="veg" required>
                <label for="veg">Veg</label>
                <input type="radio" id="non-veg" name="foodoption" value="non-veg">
                <label for="non-veg">Non-Veg</label>
            </fieldset>
            <h2>Add Recipe</h2>
            <label for="foodname">Food Name:</label><br>
            <input type="text" id="food-name" name="foodname" required><br>
            <label for="ingredients">Ingredients:</label><br>
            <textarea id="ingredients" name="ingredients" rows="4" required></textarea><br>
            <label for="recipe">Recipe:</label><br>
            <textarea id="recipe" name="recipe" rows="8" required></textarea><br>
            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>