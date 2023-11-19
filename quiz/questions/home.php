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
    <title>Geography Simple Quiz</title>
</head>
<body class="bg-warning">
    <div class="home">
        <h3 class="text-danger">Welcome to this simple Geography test!</h3>
        <p>We're going to ask you few questions about Geography.</p>
        <p>These questions are very easy you must be able to solve them.</p>
        <h2 class="text-danger">Levels :</h2>
        <ul>
            <li>90% or grater : <span class="text-primary grade">Exellent</span></li>
            <li>80% - 89% : <span class="text-primary grade">very Good</span></li>
            <li>70% - 79% : <span class="text-primary grade">Good</span></li>
            <li>60% - 69% : <span class="text-primary grade">Normal</span></li>
            <li>50% - 59% : <span class="text-primary grade">Not Bad</span></li>
            <li>Less than 50% : <span class="text-primary grade">Bad</span></li>
        </ul>
        <form action="board.php" method="post">
        <input type="submit" name="next" class="btn btn-outline-primary w-50" value="See Leaderboard">
        </form>
        <form action="page1.php" method="post">
        <input type="submit" name="next" class="btn btn-outline-primary w-50" value="Begin Quiz!">
        </form>
    </div>
</body>
</html>