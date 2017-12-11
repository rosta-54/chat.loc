<?php
require_once 'config.php';

$result = mysqli_query($connection, 'SELECT * FROM `chat`;');;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHAT</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Chat
                </div>
                <div class="panel-body">
                    <?php
                    while ($record = mysqli_fetch_assoc($result)){
                        echo '<p>'. $record['message']. '<br/>'.$record['time'] .'</p>';
                        echo '<hr>';
                    }
                    ?>
                    <div class="row_form">
                        <form method="post" class="form-group" action="post.php">
                            <div class="form-group">
                                <label for="text">Введите сообщение:</label>
                                <input class="form-control" name="text" title="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>