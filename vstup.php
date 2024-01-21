<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adiutoris vstup</title>
</head>
<body>
    <a href = "index.php">Zpět na úvod, vlastně sem nechci</a>
    <form method="post" action="">
        <label for="inputData">Zadejte heslo</label>
        <input type="password" id="inputData" name="inputData" required>
        <button type="submit">Hotovo</button>
    </form>

    <?php
    // Check if form is submitted and input data is not empty
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputData"])) {
        if ($_POST["inputData"] == "supersilneheslo") {
            echo "<a href='stealutaris.html'>ZDE</a>";
        } else {
            echo "špatné heslo";
        }
    }
    ?>


</body>
</html>
