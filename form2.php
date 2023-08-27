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
    header("Location: form3.php");
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
    <title>Survey Form 2</title>
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
                <label for="dropdown" id="name-label">What is your job role.</label>
                    <select name="job_role" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['job_role'])
                                                                                            ? $_SESSION['info']['job_role'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>


            <div class="form-group">
                <label for="favourite">Which Department do you work in?</label>
                <select name="work_in" id="favourite" class="form-control"  value="<?= isset($_SESSION['info']['work_in'])
                                                ? $_SESSION['info']['work_in'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
               
            </div>

            <div class="form-group">
                <label for="favourite">I am satisfied with my opportunities for professional growth.</label>
                <select name="opportunities" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['opportunities'])
                                                                                            ? $_SESSION['info']['opportunities'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value=" Strongly_Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>

            <div class="form-group">
                <label for="favourite"> I can voice a contrary opinion without fear of negative consequences.</label>
                <select name="neg_conseq" id="favourite" class="form-control" value="<?= isset($_SESSION['info']['neg_conseq'])
                                                                                            ? $_SESSION['info']['neg_conseq'] : '' ?>">
                    <option selected disabled>Select an Option</option>
                    <option value="Strongly Disagree">Strongly Disagree</option>
                    <option value="Disagree">Disagree</option>
                    <option value="Neutral/Neither agree nor Disagree">Neutral/Neither agree nor Disagree</option>
                    <option value="Agree">Agree</option>
                    <option value="Strongly Agree">Strongly Agree</option>
                </select>
            </div>


            <div>
                <a href="form1.php" class="prev" >Previous</a>
                <input type="submit" class="next" name="next" value="Next"></input>

            </div>
        </form>
    </div>
</body>

</html>