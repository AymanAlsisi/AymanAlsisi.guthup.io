<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$_SESSION["a8"] = $_POST["a8"];
?>

<?php 
$total = $_SESSION["a1"] + $_SESSION["a2"] + $_SESSION["a3"] + $_SESSION["a4"] + $_SESSION["a5"] + $_SESSION["a6"] + $_SESSION["a7"] + $_SESSION["a8"];
$score = ($total/8) * 100;
$result = $score . "%";
if ($score >= 90) {
    $grade = "Exellent";
} else if ($score >= 80 ){
    $grade = "Very Good";
} else if ($score >= 70 ){
    $grade = "Good";
} else if ($score >= 60 ){
    $grade = "Normal";
} else if ($score >= 50 ){
    $grade = "Not Bad";
} else if ($score < 50 ){
    $grade = "Bad";
}

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
    <title>Quiz finished!</title>
    <style>
        body {
            height: 100vh;
            justify-content: center;
            flex-direction: column;
        }
        .finish {
            margin:70px;
            width: 60%;
        }
        h1,h2 {
            text-align: center;
        }
    </style>
</head>
<body class="bg-warning">
    <h2 style="text-align:center" class="alert alert-success w-50">Finished!</h2>
    <div class="finish">
        <h5>Congratulations! you've answerd <span class="text-primary text-lg"><?php echo $total?></span> questions out of <span class="text-primary">8</span></h5>
        <h5>Your score is <span class="text-primary text-lg score"><?php echo $result?></span></h5>
        <h5>grade : <span class="text-primary text-lg grade"><?php echo $grade?></span></h5>
        <h5>Well Done!</h5>
        <div class="btns">
            <form action="board.php">
                <input type="submit" id="board" name="board" class="btn btn-outline-primary w-100" value="See Leaderboard">
            </form>
            <form action="page1.php">
                <input type="submit" id="back" name="back" class="btn btn-outline-primary w-25" value="Start Again">
            </form>
        </div>
    </div>
</body>
</html>


<?php
$conn = mysqli_connect('localhost','alsisi','Alsisi123456$','sisi');
mysqli_query($conn, "INSERT INTO board VALUES('','$score','$grade')");
mysqli_close($conn);
?>