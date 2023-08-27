<?php
//session start
session_start();

if (isset($_POST['next'])) {
    //create new session variable any put inside key and value from post array
    foreach ($_POST as $key => $value) {
        $_SESSION['info'][$key] = $value;
    }
    //remove next key 
    $keys = array_keys($_SESSION['info']);

    if (in_array('next', $keys)) {
        unset($_SESSION['info']['next']);
    }
    echo "<pre>";
    print_r($_SESSION['info']);
    echo "</pre>";
    //redirecting to next page
    header("Location: form2.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <title>Survey Form 1</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <header class="text-center">
            <h1 class="id">Employee Engagement Survey Form</h1>
            <p id="description" class="description">
                <em>Thank you for taking time to help us improve the platform</em>
            </p>

        </header>
        <form action="" id="survey-form" class="form-label" method="post">
            <div class="form-group">
                <label for="name" id="name-label">Name </label>
                <input type="text" name="name" id="name" class="form-control" value="<?= isset($_SESSION['info']['name']) 
              ? $_SESSION['info']['name'] : '' ?>" placeholder="Enter your Name">
            </div>

            <div class="form-group">
                <label for="email" id="email-label">Email </label>
                <input type="text" name="email" id="email" class="form-control" value="<?= isset($_SESSION['info']['email']) 
              ? $_SESSION['info']['email'] : '' ?>" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="department" id="name-label">Department </label>
                <input type="text" name="department" id="department" class="form-control" value="<?= isset($_SESSION['info']['department']) 
              ? $_SESSION['info']['department'] : '' ?>" placeholder="Enter your Department">
            </div>

            <div class="form-group">
                <label for="number" id="number-label">Age </label>
                <input type="number" name="age" id="number" value="<?= isset($_SESSION['info']['age']) 
               ? $_SESSION['info']['age'] : ''?>" min="10" max="99" class="form-control" placeholder="Enter your Number">
            </div>
       <div>
                <input type="submit" class="next" name="next" value="Next"></input>
            </div>
        </form>
    </div>
</body>

</html>