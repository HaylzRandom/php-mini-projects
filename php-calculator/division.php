<html>

<body>
    <!--Your code goes here-->
    <?= "${_GET['numerator']} divided by ${_GET['denominator']} is:" ?>
    <h4>
        <?= $_GET['numerator'] / $_GET['denominator'] ?>
    </h4>

    <a href="index.php">Reset</a>
</body>

</html>