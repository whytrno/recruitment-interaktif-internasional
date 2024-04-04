<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="" method="POST">
        <input type="number" name="number">
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $number_array = str_split($number);

        $sum = 0;
        foreach ($number_array as $value) {
            $sum += $value;
        }

        echo "<script>alert('Sum of digits: $sum')</script>";
    }
    ?>
</head>

<body>

</body>

</html>