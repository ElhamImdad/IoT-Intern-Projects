<?php
   include('config/db_connect.php');

    // write query for all input
    $sql = 'SELECT id, go_right, go_forward, go_left,id FROM directions ORDER BY id';

    //make query & get result
    $result = mysqli_query($conn, $sql);
    //fetch the resulting rows as an array
    // $direc = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // // free result from memory
    // mysqli_free_result($result);

    // //close connection
    // mysqli_close($conn);

    if(isset($_POST['save'])){
        include('config/db_connect.php');
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
                $Right= mysqli_real_escape_string($conn, $_POST['Right']);
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
                $Forward= mysqli_real_escape_string($conn, $_POST['Forward']);
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
                $Left= mysqli_real_escape_string($conn, $_POST['Left']);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <header>

        <section class= "main">
            <h4 class="autoControlText">Auto Control</h4>
            <form class="white" action="index.php" method="POST">
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

          <!--   <div>
                <input type="submit" name="save" value="save" class="button z-depth-0">
                <input type="submit" name="delete" value="delete" class="button z-depth-0">
                <input type="submit" name="start" value="start" class="button z-depth-0">
            </div> -->
            <div class="btn-group2" role="group" aria-label="Basic example">
                <input type="submit" name="save" value="save" class="btn btn-danger">
                <input type="submit" name="delete" value="delete" class="btn btn-danger">
                <input type="submit" name="start" value="start" class="btn btn-danger">
            </div>

            </form>

            <!-- <table algin="center" style="width:300px; line-height:30px;" text-align= "center">
                <t>
                    <th>right</th>
                    <th>forward</th>
                    <th>left</th>
                </r>
            </table> -->

            <table class="table table-dark" algin="center" style="width:500px; line-height:30px;">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Right</th>
                    <th scope="col">Forward</th>
                    <th scope="col">Left</th>
                    </tr>
                </thead>
                <?php
                    while($rows =mysqli_fetch_assoc($result)){
                ?>
                        <tbody>
                            <tr>
                
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['go_right'];?></td>
                            <td><?php echo $rows['go_forward']; ?></td>
                            <td><?php echo $rows['go_left']; ?></td>
                            </tr>
                            <tr>
                        </tbody>
                <?php
                    }
                ?>        
            </table>
        </section>
    </header>
</body>
</html> 