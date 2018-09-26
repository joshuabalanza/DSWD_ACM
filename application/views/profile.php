<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DSWD | Home</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="col-lg-5 col-lg-offset-2">
        <center>    
            <h1>DSWD Access Control Module <br /> Welcome! <?php echo $_SESSION['username']; ?> </h1>
        </center>
        
        <?php if(isset($_SESSION['success'])){?>
            <div class="alert alert-success"> <?php echo $_SESSION['success'];?></div>   
        <?php
        }?>

        HELLO, <?php echo $_SESSION['username']; ?>

        <br /><br />
        <a href="<?php echo base_url();?>index.php/auth/logout">Logout</a>

        <br /><br />
        <table>
          <tr>
            <th colspan="2"><h4 class="text-center">Users Details</h3></th>
          </tr>
          <?php foreach($query as $row): ?>
          <tr>
              <td>Username</td>   
              <td><?php echo $row->username; ?></td>
          </tr>
          <tr>
              <td>Email</td>
              <td><?php echo $row->email; ?></td>
          </tr>
          <tr>
              <td>Gender</td>
              <td><?php echo $row->gender; ?></td>
          </tr>
          <tr>
              <td>Phone</td>
              <td><?php echo $row->phone; ?></td>
          </tr>
          <tr>
              <td>Created_Date</td>
              <td><?php echo $row->created_date; ?></td>
          </tr>
          <tr> <td style="padding-top: 20px;"> </td></tr>
          <?php endforeach; ?>
        </table>  
        
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>