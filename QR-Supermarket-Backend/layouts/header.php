<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
     
    <link rel="stylesheet" href="libs/css/bootstrap.css"/>
    
    

    <link rel="stylesheet" href="libs/css/main.css" />

    <script src="libs/js/new.js"></script>  
           </script>  

    <style>
      

    .product{
      boader: 1px solid;
      margin: -1px 19px 3px -1px;
      padding: 10px;
      text-align: center;
    }

    table, th,tr{
      text-align: center;
    }

    .tittle2{
      text-align: center;
      padding: 2%;

    }

    h2{
      text-align: center;

    padding: 2%;

    }

    </style>

    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "Simple inventory System";?>
    </title>
   
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): ?>
    <header id="header">
      <div class="logo pull-left">Supermarket-Inventory
        <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">

            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
            </a>
           
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>

      </div>
       

      <div class="header-content">
     
      
    </header></Br>
    </Br>
    </Br>
    </Br>
    </Br>
    <div class="sidebar">
      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- Special user -->
      <?php include_once('special_menu.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- User menu -->
      <?php include_once('user_menu.php');?>

      <?php endif;?>

   </div>
<?php endif;?>

<div class="page">
  <div class="container-fluid">
