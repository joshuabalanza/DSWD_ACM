<!DOCTYPE html>
<html>
<head>  
      <title>DSWD | Login</title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
  </head>
  <body>
    
  <div class="container" id="loginkoto">
        <center>
        <form action="" method="POST"  class="formkoto2">
            <label class="intro">DSWD</label>
                <label class="intro2">Access Control Module | Registration</label>
                <br />
                <br />

            <?php if(isset($_SESSION['success'])){?>
                <div class="alert alert-success"> <?php echo $_SESSION['success'];?></div>   
            <?php
            }?>
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>


            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" name="username" id="username" type="text">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" name="email" id="email" type="text">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="form-group">
                <label for="password">Confirm Password:</label>
                <input class="form-control" name="password2" id="password" type="password">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" name="gender" id="gender" value>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input class="form-control" name="phone" id="phone" type="text">
            </div>

            <div class="text-center">
                <button class="btn btn-primary" name="register">Register</button>
            </div>
        </form>
        </center>
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>