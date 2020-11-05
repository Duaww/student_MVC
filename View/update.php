<html>
    <head>
        <h1>UPDATE</h1>
    </head>
    <body>
        <form method="post">
            <label for="">id</label>
            <input type="text" name="id" value="<?php echo $_GET['update'];?>" readonly="readonly" name="id">
            <br>
            <br>
            <label for="">name</label>
            <input type="text" name="name">
            <br>
            <br>
            <label for="">age</label>
            <input type="text" name="age">
            <br>
            <br>
            <label for="">university</label>
            <input type="text" name="university">
            <br>
            <br>
            <input type="submit" name="form_update" value="update">
        </form>
    </body>
</html>