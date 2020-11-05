<html>
    <head>
        <h2>SEARCH</h2>
    </head>
    <body>
        <form action="../Controller/C_student.php" method="post">
            <input type="radio" name="check" value="id">
            <label for="">id</label>
            <input type="radio" name="check" value="name">
            <label for="">name</label>
            <input type="radio" name="check" value="age">
            <label for="">age</label>
            <input type="radio" name="check" value="university">
            <label for="">university</label>
            <br><br>
            <input type="text" name="search">
            <input type="submit" name="form_search" value="Search"> 
        </form>
    </body>
</html>