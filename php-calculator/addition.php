<html>

<body>
    <!--Your code goes here-->
    <?= "The sum of ${_GET['first_number']} and ${_GET['second_number']} is:" ?>
    <h4>
        <?= $_GET['first_number'] + $_GET['second_number'] ?>
    </h4>

    <a href="index.php">Reset</a>
</body>

</html>