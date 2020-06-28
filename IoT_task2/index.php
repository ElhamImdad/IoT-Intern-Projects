<?php
   include('config/db_connect.php');
   // write query for all input
   $sql = 'SELECT * FROM directions ORDER BY id';

   //make query & get result
   $result = mysqli_query($conn, $sql);

   if(isset($_GET['Left1'])){
        include('config/db_connect.php');
  
        $sql = "INSERT INTO directions(F_direction) VALUES ('L')";

        if (mysqli_query($conn, $sql)){
            header('Location: index.php');
            echo "I'm elham";
        }else{
            echo 'query error: ' . mysqli_error($conn);
            echo 'it is error';
        }
    }//end of GET left check

    if(isset($_GET['Right'])){
        include('config/db_connect.php');
        $sql = "INSERT INTO directions(F_direction) VALUES ('R')";
        if (mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
    }//end of GET left check

    if(isset($_GET['Forwards'])){
        include('config/db_connect.php');
        $sql = "INSERT INTO directions(F_direction) VALUES ('F')";
        if (mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
    }//end of GET left check

    if(isset($_GET['Backwards'])){
        include('config/db_connect.php');
        $sql = "INSERT INTO directions(F_direction) VALUES ('B')";
        if (mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
    }//end of GET left check
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task1 Web Creations</title>
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
        <div class="main">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="stop">
                <img src="stopicon.png">
            </div>
        
        <!-- <div class="button">
            <a href="../IoT_task2/Left.php" class="btn1">Left</a>
            <a href="../IoT_task2/Right.php" class="btn2">Right</a>
            <a href="../IoT_task2/Forwards.php" class="btn3">Forwards</a>
            <a href="../IoT_task2/Backwards.php" class="btn4">Backwards</a>
        </div> -->
        <form action="index.php" method="get">
            <div>
                <button type="submit" name="Left1" value="Left1" class="btn1">Left</button>
                <button type="submit" name="Right" value="Right" class="btn2">Right</button>
                <button type="submit" name="Forwards" value="Forwards" class="btn3">Forwards</button>
                <button type="submit" name="Backwards" value="Backwards" class="btn4">Backwards</button>
                <br><br><br><br><br><br>
            </div>
        </form>
        <table class="table table-dark" algin="center" style="width:200px; line-height:30px;">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">direction clicked</th>
                    </tr>
                </thead>
                <?php
                    while($rows =mysqli_fetch_assoc($result)){
                ?>
                        <tbody>
                            <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['F_direction'];?></td>
                            </tr>
                            <tr>
                        </tbody>
                <?php
                    }
                ?>        
            </table>
        </div>
    </header>
</body> 

</html> 