<?php
//session start
session_start();

if (isset($_POST['next'])){
    //create new session variable any put inside key and value from post array
    foreach ($_POST as $key => $value)
    {
        $_SESSION['info'][$key] = $value;
     }
//remove next key 
     $keys = array_keys($_SESSION['info']);

     if (in_array('next', $keys)){
        unset($_SESSION['info']['next']);
        
     }
    echo "<pre>";
     print_r ($_SESSION['info']);
     echo "</pre>";
     //redirecting to next page
     header("Location: form4.php");
     
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
    <title>Survey Form 3</title>
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
                <label for="dropdown" id="name-label">Which option describes your current role. </label>
                <select name="current_role" id="dropdown" class="form-control" required>
                    <option selected disabled>Select an Option</option>
                    <option value="Student">Student</option>
                    <option value="Full Time Job">Full Time Job</option>
                    <option value="Full Time Learner">Full Time Learner</option>
                    <option value="Prefer Not to Say">Prefer Not to Say</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="favourite">I feel respected and valued by my teammates at my company.</label>
                <select name="res_teammates" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['res_teammates'])
                                                                                            ? $_SESSION['info']['res_teammates'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>
            <div class="form-group">
                <label for="favourite">I feel respected and valued by my Manager at my company.</label>
                <select name="res_manager" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['res_manager'])
                                                                                            ? $_SESSION['info']['res_manager'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>

            <div class="form-group">
                <label for="favourite">My company enables me to balance my work and personal life.</label>
                <select name="bal_work" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['bal_work'])
                                                                                            ? $_SESSION['info']['bal_work'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>
            <div>
            <a href="form2.php"  class="prev">Previous</a>
                <input type="submit" class="next" name="next" value="Next"></input>
                
            </div>
        </form>
    </div>
</body>

</html>