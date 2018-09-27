<!DOCTYPE html>
<html>
<head>  
      <title>DSWD | Registration</title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
  </head>
  <body>
    
    
    <div id="loginkoto">
        
            <div>
                <center>
                     <label class="introreg">DSWD</label> <br />
                     <label class="intro2reg">Access Control Module | Registration</label>
                </center>
            </div>

        <center>
        <form action="" method="POST"  class="formkoto2">
           
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
                <button class="btn btn-info" name="register">Register</button>
                <br />
                <br />
                <a href="<?php echo base_url(''); ?> ">Already have an Account?</a>
                <br/>
                <br/>
                <br/>
            </div>
        </form>
        </center>

  </body>
</html>