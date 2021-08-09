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
    <title>Dashbboard | Project</title>
</head>

<style>
body {
  font-family: sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0px;
  left: 0px;
  overflow-x: hidden;
  transition: 0.5s;
  background-color: #111;
  padding-top: 20px;
}

.sidenav a {
  padding: 15px 15px 70px 10px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
 
}

.sidenav a:hover {
  color: white;
}

.main {
  margin-left: 20px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 20px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 20px;}
  .sidenav a {font-size: 18px;}
}

</style>
</head>

  <div class="sidenav">
  <div class="collapse navbar-collapse">
  <a style="color:white"> <h3>Admin Panel</h3></a>
  <br>
  <br>
    <ul class="navbar-nav">
    
  <li class="nav-item">
        <a class="nav-link" href="profile"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tickets"><i class="fas fa-ticket-alt"></i>  Tickets </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="accounts"><i class="fas fa-users"></i>   Accounts </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="category"><i class="fas fa-list-alt"></i>   Categories </a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link" href="emails.php"><i class="fa fa-envelope"></i> Email Templates </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="settings.php"><i class="fa fa-tools"></i> Settings </a>
      </li>
<br>
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/auth/logout"><i class="fa fa-lock"></i> Logout</a>
      </li>
    </ul>
  </div>
</div>
</div> 

<br>
<br>
 <h1>Dashboard</h1>
 </div>

    <section class="dashboard-header" style="margin-top: 2em;">
        <div class="box">
                <div class="col-lg-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                            <h3>All Tickets</h3>
</div>
</div>
</div>


                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    
                    <br>
                   <div><i class="fas fa-ticket-alt" style="font-size:36px;"></i>
                            <h3>Total Tickets</h3>
                            <h1><?php echo $this->db->count_all_results('tickets'); ?> </h1>
                           
                      </div>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                    <div><i class="fas fa-clock" style="font-size:36px;"></i>                       
                    <h3>Open Tickets</h3>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-md-3">
                    <div class="statistic d-flex align-items-center bg-white has-shadow custom-border-radius">
                        <div><i class="fas fa-check" style="font-size:36px;"></i>
                            <h3>Closed Tickets</h3
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section> 
<br>
<div class="col-lg-5 col-lg-offset-2">
<hr>
<!-- <div class="col-lg-5 col-lg-offset-2"> -->
  
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

<?php
 $conn = mysqli_connect('localhost', 'root', '', 'loginproject');

 $getusers = mysqli_query($conn, "SELECT * FROM tickets ORDER by id ASC");

?>

<h3> Open tickets </h3>
<hr>

<div class="container">
  <table class="table-dark">
  <table class="table table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
      
        <th> Title</th>
        <th>Email</th>
        <th> Category</th>
        <th> Priority</th>
        <th> Status</th>
        <th> Msgs</th>
        <th> Date</th>
        <th> Action</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    while($data = mysqli_fetch_array($getusers))
    {
    ?>
    <tr>
   
    <td><?php echo $data['title'];?></td>
    <td><?php echo $data['email'];?></td>
    <td><?php echo $data['category'];?></td>
    <td <span style="color:red";></span><?php echo $data['priority'];?></td>
    <td <span style="color:Orange";></span><?php echo $data['status'];?></td>
    <td><?php echo $data['msgs'];?></td>
    <td><?php echo $data['date'];?></td>
    <td>
    <button onclick="location.href='<?php echo base_url();?>register/index'">View</button>
    <button onclick="location.href='<?php echo base_url();?>register/index'">Edit</button>
</td>
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