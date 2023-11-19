<?php 
error_reporting(E_ERROR | E_PARSE);
session_start();
$_SESSION["a1"] = $_POST["a1"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/bootstrap.css">
    <link rel="stylesheet" href="/quiz/style/style.css">
    <script src="/style/jQuery.min.js"></script>
    <script src="/style/popper.min.js"></script>
    <script src="/style/bootstrap.js"></script>
    <title>Question 2</title>
</head>
<body class="bg-warning">
    <div class="container">
        <h2 class="title">Simple Geography Quiz</h2>
        <h2 class="title text-danger">Question 2/8 :</h2>
        <div class="progress bg-warning" style="height: 4px">
            <div class="progress-bar bg-danger" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        <div class="q1 question-block">
            <h5 class="question">The capital of Belgium is?</h5>
            <form method="post" action="page3.php">
                <div class="ans">
                    <input type="radio" name="a2" class="btn-check inp" id="o1" value="0" autocomplete="off" required>
                    <label class="btn answer" for="o1">Amestardam</label>
                </div>
                <div class="ans">
                    <input type="radio" name="a2" class="btn-check inp" id="o2" value="1" autocomplete="off" required>
                    <label class="btn answer" for="o2">Brussels</label>
                </div>
                <div class="ans">
                    <input type="radio" name="a2" class="btn-check inp" id="o3" value="0" autocomplete="off" required>
                    <label class="btn answer" for="o3">Vienna</label>
                </div>
                <button type="button" id="change" class="btn btn-secondary w-25">Change Answer</button>
                <input type="submit" id="next" name="next" class="btn btn-secondary w-25" value="Next">
            </form>
            <form action="page1.php">
                <input type="submit" id="back" name="back" class="btn btn-secondary w-25" value="Back">
            </form>
            <script src="/quiz/main.js"></script>
</body>
</html>
