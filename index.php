<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>


    <div class="container bg-info p-3">
        <form action="form_sub.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1"> Fast Name</label>
              <input type="text" name="Fast_Name" class="form-control" placeholder="Fast Name">
              
            </div> <br>

            <div class="form-group">
              <label for="exampleInputPassword1">Last Name</label>
              <input type="text" name="Last_name" class="form-control"  placeholder="Last Name">
            </div> <br>

            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="text" name="email" class="form-control"  placeholder="email">
            </div> <br>

            <div class="form-group">
              <label for="exampleInputPassword1">Number</label>
              <input type="number" name="phone" class="form-control"  placeholder="phone">
            </div> <br>
            
            
            <button type="submit" value="send" class="btn btn-primary">Submit</button>
          </form>
        
    </div>
    
</body>
</html>
