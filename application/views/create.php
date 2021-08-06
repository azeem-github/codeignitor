<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <title>Create Ticket | Project</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/boostrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  </head>
  <body>
  <?php //echo form_open('user/tickets', ['class'=>'form->horizontal']); ?>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<div class="navbar-header">
<a style="color:white" class="navbar-brand"><h1>Ticketing System</a></h1>
</nav>
  <div class="col-lg-5 col-lg-offset-1">
    <h2>Create Ticket</h2>

    <?php if(isset($_SESSION['success'])) { ?>
    
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php } 
    ?>
    <form action="" method="POST"> 
    <h5>Title</h5>
<input type="text" name="title" value="<?php echo set_value('title'); ?>" size="50" />
<span style ="color:red"><?php echo form_error('title'); ?></span>

<h5>Email</h5>
<input type="email" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<span style ="color:red"><?php echo form_error('email'); ?></span>

<h5>Category</h5>

<input type="text" name="category" value="<?php echo set_value('category'); ?>" size="50" />
<span style ="color:red"><?php echo form_error('category'); ?></span>

<h5>Priority :</h5>
<input type="text" name="priority" value="<?php echo set_value('priority'); ?>" size="50" />
<span style ="color:red"><?php echo form_error('priority'); ?></span>

<h5>Status :</h5>
<input type="text" name="status" value="<?php echo set_value('status'); ?>" size="50" />
<span style ="color:red"><?php echo form_error('status'); ?></span>

<h5>Msgs :</h5>
<textarea type="textbox" name="msgs" value="<?php echo set_value('msgs'); ?>" rows="5" cols="30"/></textarea>
<span style ="color:red"><?php echo form_error('msgs'); ?></span>
<br>

<?php echo anchor('user/tickets', 'Back', ['class' =>'btn btn-default']); ?>

   <?php echo form_submit(['name'=>'create', 'value'=>'Create', 'class' => 'btn btn-primary']);?>
  
  </form>
  
  <br>
    </div>
    <form>
    <?php echo form_close(); ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>