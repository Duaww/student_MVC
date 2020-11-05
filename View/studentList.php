<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Danh sach sinh vien</title>
        <style>
            .flex-container{
                display: flex,
            }
        </style>
    </head>
    <body>
        <h2>Danh sach sinh vien</h2>
        <div class="flex-container">
        <?php
            
            foreach($studentList as $key => $student){
                echo "<p>" .$student->id.".<a href='?stid=" .$student->id."'>".$student->name."</a>----<a href='?update=$student->id'>update</a>----<a href='?delete=$student->id'>delete</a></p>";
            }
        ?>  
        </div>
        
        <br>
        <!-- <p><a href="../index.php">Home page</a></p> -->
        <p><a href="../View/insert.php">insert</a></p>
        <p><a href="../View/search.php">search</a></p>
        
    </body>
</html>