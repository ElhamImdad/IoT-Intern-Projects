<?php
    if(isset($_POST['save'])){
        if (empty($_POST["Right"]) && empty($_POST["Forward"]) && empty($_POST["Left"])){
             $errors = "Nothing to save";
             echo "<script type='text/javascript'>alert('$errors');</script>"; 
        }else {
            $Right= htmlspecialchars($_POST["Right"]);
            $Forward= htmlspecialchars($_POST["Forward"]);
            $Left= htmlspecialchars($_POST["Left"]);
            if (!empty($_POST["Right"]) && !filter_var(($_POST["Right"]), FILTER_VALIDATE_INT)){
                $errors = 'please enter a number';
                echo "<script type='text/javascript'>alert('$errors');</script>";
            }else{
                $Right= myqli_real_escape_string($conn, $_POST['Right']);
                $sql = "INSERT INTO directions(go_right) VALUES ('$Right')";
                if (mysqli_query($conn, $sql)){
                    header('Location: index.php');
                }else{
                    echo 'query error: ' . mysqli_error($conn);
                }
            }
            if (!empty($_POST["Forward"]) && !filter_var(($_POST["Forward"]), FILTER_VALIDATE_INT)){
                $errors = 'please enter a number';
                echo "<script type='text/javascript'>alert('$errors');</script>";
            }else{
                $Forward= myqli_real_escape_string($conn, $_POST['Forward']);
                $sql = "INSERT INTO directions(go_forward) VALUES ('$Forward')";
                
                if (mysqli_query($conn, $sql)){
                    header('Location: index.php');
                }else{
                    echo 'query error: ' . mysqli_error($conn);
                }
            }
            if (!empty($_POST["Left"]) && !filter_var(($_POST["Left"]), FILTER_VALIDATE_INT)){
                $errors = 'please enter a number';
                echo "<script type='text/javascript'>alert('$errors');</script>";
            }else{
                $Left= myqli_real_escape_string($conn, $_POST['Left']);
                $sql = "INSERT INTO directions(go_left) VALUES ('$Left')";
                
                if (mysqli_query($conn, $sql)){
                    header('Location: index.php');
                }else{
                    echo 'query error: ' . mysqli_error($conn);
                }
            }

        }//end of else
    }//end of POST check

?>

<!DOCTYPE html>
<html>
<head>
    <title>Task3 auto control</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <section class= "main">
            <h4 class="autoControlText">Auto Control</h4>
            <form class="white" action="autoControl.php" method="POST">
            <br><br>
            <label>Right</label>
            <input type="text" name="Right">
            <br><br>
            <label>Forward</label>
            <input type="text" name="Forward">
            <br><br>
            <label>Left</label>
            <input type="text" name="Left">
            <br><br>

            <div>
                <input type="submit" name="save" value="save" class="button z-depth-0">
            </div>

            </form>
        </section>
    </header>
</body>
</html> 