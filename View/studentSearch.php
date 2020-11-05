<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Danh sach sinh vien can tim kiem</title>
        <style>
            .flex-container{
                display: flex,
            }
        </style>
    </head>
    <body>
        <h2>Danh sach sinh vien can tim kiem</h2>
        <div class="flex-container">
        <?php
            foreach($studentSearch as $key => $student){
                
                echo "<p>" .$student->id.".<a href='?stid=" .$student->id."'>".$student->name."</a></p>";
            }
        ?>
        </div>
        <a href="../Controller/C_student.php">back</a>
        <br>
    </body>
</html>