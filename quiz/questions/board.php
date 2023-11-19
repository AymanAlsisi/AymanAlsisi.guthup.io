<?php
$conn = mysqli_connect('localhost','alsisi','Alsisi123456$','sisi');
$result = mysqli_query($conn, "SELECT * FROM board");
$show = mysqli_fetch_all($result);
mysqli_close($conn);
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
    <title>Leaderboard</title>
    <style>
        body {
            justify-content: center;
        }
    </style>
</head>
<body class="bg-warning">
    <div class="board">
        <h2 class="text-danger">Leaderboard </h2>
        <table>
            <tr>
                <td class="th">Player_id</td>
                <td class="th">score</td>
                <td class="th">grade</td>
            </tr>
            <tr>
            <?php foreach ($show as $key) : ?>
                <td><?php echo htmlspecialchars($key[0])?></td>
                <td><?php echo htmlspecialchars($key[1])?>%</td>
                <td><?php echo htmlspecialchars($key[2])?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <form action="home.php">
            <input type="submit" id="back" name="back" class="btn btn-outline-primary w-50" value="Homepage">
        </form>
    </div>
</body>
</html>