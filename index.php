<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style/form.css">
</head>
<body>

<div class ="container">
<div class ="box form-box"> 
<header>Sign up </header>

<form method="post" action="formHandling.php">

      <div class="field input"> 
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>
        </div>

        <div class ="field input">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        </div>

        <div class="field input"> 
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>
        </div>

        <div class="field input">  
        <label for="address">Address:</label>

        <textarea id="address" name="address" rows="4" required></textarea><br><br>
        </div>
        <div class="field">  
        <input type="submit" name="Submit" value="Submit" class="btn">
        </div>
    </form>

    

</body>
</html>