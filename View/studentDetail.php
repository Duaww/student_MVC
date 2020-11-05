<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Danh sach sinh vien</title>
    </head>
    <body>
        <h2>Chi tiet sinh vien :</h2>
        <?php
            echo "<p>Name: <b>".$student->name."</b></p>";
            echo "<p>Age: ".$student->age."</p>";
            echo "<p>University: ".$student->university."</p>";
        ?>
        <br>
        <p><a href="../index.php">Home page</a></p>
    </body>
</html>