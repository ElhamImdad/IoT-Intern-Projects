<!DOCTYPE html>
<html>
<head>
    <title>Task1 Web Creations</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!-- <body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="stop">
                <img src="stopicon.png">
            </div>
        </div>
        <div class="button">
            <?php
                if(isset($_POST['submit'])){
                    $left= $_POST["L"];
                }
            ?>
            <form action="../IoT_task2/task2.php" method="post">
                <input type="submit" class="btn1" value="Left" name="L">
            </form>
        </div>

    </header>
</body> -->

 <body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="stop">
                <img src="stopicon.png">
            </div>
        </div>
        <div class="button">
            <a href="../IoT_task2/Left.php" class="btn1">Left</a>
            <a href="../IoT_task2/Right.php" class="btn2">Right</a>
            <a href="../IoT_task2/Forwards.php" class="btn3">Forwards</a>
            <a href="../IoT_task2/Backwards.php" class="btn4">Backwards</a>
        </div>

    </header>
</body> 

</html> 