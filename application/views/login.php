<!DOCTYPE html>
<html>

  <head>  
      <title>DSWD | Login</title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
  </head>


  <body>
    
    <!-- <div class="col-lg-5 col-lg-offset-2"> -->
    <div class="container" id="loginkoto">  
        
        <center>
        <form action="" method="POST" class="formkoto" >
        <label class="intro">DSWD</label>
               <label class="intro2">Access Control Module</label>
               <br />
               <br />

            <!-- Message Alert -->
            <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"> <?php echo $_SESSION['success'];?></div>   
            <?php
            }?>
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <!-- End -->
            
            <!-- Start Login Field -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input class="form-control" name="username" id="username" type="text">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="text-center">
                <button class="btn btn-info" name="login">Login</button>
                <br />
                <br />
                <a href="<?php echo base_url('').'auth/register'; ?> ">Don't have an Account?</a>
            </div>
        </form>
        </center>
    </div>


  </body>
</html>