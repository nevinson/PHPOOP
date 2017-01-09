<html>
    <head>
        <title>PHP | Forms Basics</title>
    </head>
    <body>
        <br />

        Hi <?php echo htmlspecialchars($_POST['txtName']); ?>.
        You are <?php echo (int)$_POST['txtAge']; ?> years old.

        <br />
    </body>
</html>