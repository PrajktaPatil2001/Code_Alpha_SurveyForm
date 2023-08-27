<?php
//session start
session_start();

if (isset($_POST['submit'])){
    //create new session variable any put inside key and value from post array
    foreach ($_POST as $key => $value)
    {
        $_SESSION['info'][$key] = $value;
     }
//remove submit key 
     $keys = array_keys($_SESSION['info']);

     if (in_array('submit', $keys)){
        unset($_SESSION['info']['submit']);
        
     }
    echo "<pre>";
     print_r ($_SESSION['info']);
     echo "</pre>";
     //redirecting to next page
     header("Location: submit.php");
     
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
    <title>Survey Form 4</title>
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
                <label for="favourite">My Company believes that people can always greatly improve their talents and abilities.</label>
                <select name="talent" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['talent'])
                                                                                            ? $_SESSION['info']['talent'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>

            <div class="form-group">
                <label for="favourite">Working at my company is important to the way that i think of myself as a person.</label>
                <select name="myself_as_person" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['myself_as_person'])
                                                                                            ? $_SESSION['info']['myself_as_person'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>


            <div class="form-group">
                <p>Any Comments or Suggestions?</p>
                <textarea name="comment" id="comment" cols="50" rows="6" placeholder="Ente your comment here ...." value="<?= isset($_SESSION['info']['comment'])
                                                                                            ? $_SESSION['info']['comment'] : '' ?>"required></textarea>
            </div>
            <div >
            <a href="form3.php"  class="prev">Previous</a>
                <input type="submit" name="submit" class="submit" value="Submit"></input>
               
            </div>
        </form>
    </div>
</body>

</html>