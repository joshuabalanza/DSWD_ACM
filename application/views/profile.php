<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DSWD | Home</title>

    <!-- Bootstrap -->
    <!-- <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet"> -->

    <!-- Bootstrap 2 -->
    <link href="<?php echo base_url() ?>assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/css/bootstrap.css" rel="stylesheet">
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand"><h1 style="color:white;">DSWD ACCESS CONTROL MODULE</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto"></ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="form-control mr-sm-2" style="font:bold;">Welcome! <?php echo $_SESSION['username']; ?></a>
    <a class="btn btn-secondary my-2 my-sm-0" href="<?php echo base_url();?>auth/logout" role="button">Logout</a>
    </form>
  </div>
</nav>
        
                
                <div class="alert alert-dismissible alert-success">
                <?php if(isset($_SESSION['success'])){?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><?php echo $_SESSION['success'];?></a>.
                    <?php
                }?>
                </div>

                <!-- USER DATA -->
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Created_Date</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach($query as $row): ?>
                                <tr>
                                <th scope="row"><?php echo $row->user_id; ?></th>
                                <td ><?php echo $row->fullname; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->gender; ?></td>
                                <td><?php echo $row->phone; ?></td>
                                <td><?php echo $row->created_date; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            </table>
                <!-- END OF USER DATA -->
                <p class="lead">
                    
                </p>
                </center>
                
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets2/js/bootstrap.min.js"></script>
  </body>
</html>