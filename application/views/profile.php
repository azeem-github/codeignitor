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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
    <title>Dashbboard</title>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
 <div class="container-fluid">
    <div class="navbar-header">
  <a style="color:white" class="navbar-brand" href="product.php"> <h2></h2>Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href=""><i class="fas fa-speedmeter-alt"></i>Dashboard |</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fas fa-ticket-alt"></i> Tickets |</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href=""><i class="fas fa-user-alt"></i>  Accounts |</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fas fa-list-alt"></i> Categories | </a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fa fa-envelope"></i>  Email Templates | </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/auth/logout"><i class="fa fa-lock"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav> 
<br>
  <div class="col-lg-5 col-lg-offset-1">
    <h3><b>Dashboard</b></h3>

   
    <?php if(isset($_SESSION['success'])) { ?>
    
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
    <?php } 
    ?>
    
    Hello, <?php echo $_SESSION['username']; ?> !
<br><br>

  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
* {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #FFFFFF;
    margin: 0;
}
.navtop {
    background-color: #3f69a8;
    height: 60px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #ecf0f6;
    font-weight: normal;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c5d2e5;
    font-weight: bold;
}
.navtop div a i {
    padding: 2px 8px 0 0;
}
.navtop div a:hover {
    color: #ecf0f6;
}
.content {
    width: 1000px;
    margin: 0 auto;
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #666666;
}
.btns {
    display: flex;
}
.btns .btn {
    display: inline-block;
    text-decoration: none;
    background-color: #38b673;
    font-weight: bold;
    font-size: 14px;
    border-radius: 5px;
    color: #FFFFFF;
    padding: 10px 15px;
    margin: 15px 10px 15px 0;
}
.btns .btn:hover {
    background-color: #32a367;
}
.btns .btn.red {
    background-color: #b63838;
}
.btns .btn.red:hover {
    background-color: #a33232;
}
.home .tickets-list {
    display: flex;
    flex-flow: column;
}
.home .tickets-list .ticket {
    padding: 15px 0;
    width: 100%;
    border-bottom: 1px solid #ebebeb;
    display: flex;
    text-decoration: none;
}
.home .tickets-list .ticket .con {
    display: flex;
    justify-content: center;
    flex-flow: column;
}
.home .tickets-list .ticket i {
    text-align: center;
    width: 80px;
    color: #b3b3b3;
}
.home .tickets-list .ticket .title {
    font-weight: 600;
    color: #666666;
}
.home .tickets-list .ticket .msg {
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 400px;
    color: #999999;
    font-size: 14px;
}
.home .tickets-list .ticket .created {
    flex-grow: 1;
    align-items: flex-end;
    color: #999999;
    font-size: 14px;
}
.home .tickets-list .ticket:last-child {
    border-bottom: 0;
}
.home .tickets-list .ticket:hover {
    background-color: #fcfcfc;
}
.view h2 .open, .view h2 .resolved {
    color: #38b673;
}
.view h2 .closed {
    color: #b63838;
}
.view .ticket {
    padding: 20px 0;
}
.view .ticket .created {
    color: gray;
}
.view .comments {
    margin-top: 15px;
    border-top: 1px solid #ebebeb;
    padding: 25px 0;
}
.view .comments .comment {
    display: flex;
    padding-bottom: 5px;
}
.view .comments .comment div {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    width: 70px;
    color: #e6e6e6;
    transform: scaleX(-1);
}
.view .comments .comment p {
    margin: 0 0 20px 0;
}
.view .comments .comment p span {
    display: flex;
    font-size: 14px;
    padding-bottom: 5px;
    color: gray;
}
.create form, .view form {
    padding: 15px 0;
    display: flex;
    flex-flow: column;
    width: 400px;
}
.create form label, .view form label {
    display: inline-flex;
    width: 100%;
    padding: 10px 0;
    margin-right: 25px;
}
.create form input, .create form textarea, .view form input, .view form textarea {
    padding: 10px;
    width: 100%;
    margin-right: 25px;
    margin-bottom: 15px;
    border: 1px solid #cccccc;
}
.create form textarea, .view form textarea {
    height: 200px;
}
.create form input[type="submit"], .view form input[type="submit"] {
    display: block;
    background-color: #38b673;
    border: 0;
    font-weight: bold;
    font-size: 14px;
    color: #FFFFFF;
    cursor: pointer;
    width: 200px;
    margin-top: 15px;
    border-radius: 5px;
}
.create form input[type="submit"]:hover, .view form input[type="submit"]:hover {
    background-color: #32a367;
}
</style>
<?php
 $conn = mysqli_connect('localhost', 'root', '', 'loginproject');

 $getusers = mysqli_query($conn, "SELECT * FROM tickets ORDER by  created ASC");

?>
<h2>Tickets</h2>

<p>Welcome to the index page. You can view the list of tickets below.</p>

<div class="btns">
  <a href="create.php" class="btn">Create Ticket</a>
</div>

<div class="tickets-list">
  <?php foreach ($tickets as $ticket): ?>
  <a href="view.php?id=<?=$ticket['id']?>" class="ticket">
    <span class="con">
      <?php if ($ticket['status'] == 'open'): ?>
      <i class="far fa-clock fa-2x"></i>
      <?php elseif ($ticket['status'] == 'resolved'): ?>
      <i class="fas fa-check fa-2x"></i>
      <?php elseif ($ticket['status'] == 'closed'): ?>
      <i class="fas fa-times fa-2x"></i>
      <?php endif; ?>
    </span>
    <span class="con">
      <span class="title"><?=htmlspecialchars($ticket['title'], ENT_QUOTES)?></span>
      <span class="msg"><?=htmlspecialchars($ticket['msg'], ENT_QUOTES)?></span>
    </span>
    <span class="con created"><?=date('F dS, G:ia', strtotime($ticket['created']))?></span>
  </a>
  <?php endforeach; ?>
</div>

</div>

<div class="container">
  <table class="table-dark">
  <table class="table table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th> Title</th>
        <th>E-mail</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while($data = mysqli_fetch_array($getusers))
    {
    ?>
    <tr>
   
    <td><?php echo $data['username'];?></td>
    <td><?php echo $data['email'];?></td>
    
    </tr>

    
    <?php
    }
     ?>
    </tbody>
  </table>
</div>
</body>


    <br><br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
