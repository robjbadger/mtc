<div id="mesanav">
<nav class="navbar navbar-default" id="mesanav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <i class="fa fa-bars" aria-hidden="true"></i>                      
      </button>
      <a class="navbar-brand" id="mesanav" href="../index.php"><img src="../favicon-16x16.png" alt="mesatech ico"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="user.php">
            <i class="fa fa-home"></i>
          </a>
        </li>
  
<?php 

      if(isset($_SESSION ['mesa_user']))
        {
		  	$user = $_SESSION['mesa_user'];

		      $sql = "SELECT catid, name FROM categories WHERE catalogid = '100'";
          $result = mysqli_query($dbc, $sql);
          while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $catid = $row['catid'];
            $name = $row['name'];
echo "<li><a href='user.php?content=viewcat&cat=$catid&name=$name'>$name</a></li>";
            
          }

         echo    "<li class='dropdown'>";
        echo   "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>Programs <span class='caret'></span></a>";
        echo "<ul class='dropdown-menu dropdown-content'>";
    
            echo "<li><a href='user.php?content=../mylibrary/chemical'>Chemical Program</a></li>";
			 echo "<li><a href='user.php?content=../mylibrary/dispenser'>Dispenser Program</a></li>";
		  	echo "<li><a href='user.php?content=../mylibrary/mesagreen'>MesaGreen</a></li>";
      
}
        echo  "</ul>";

       echo "</li>"  ?>
      


      </ul>
      	
      </li>
 
		</ul>
     <ul class="nav navbar-nav navbar-right">
      <?php

          if(!isset($_SESSION ['mesa_user']))
        {
          
       echo   "<li><a href='../index.php?content=register' class='btn btn-mesa'><i class='fa fa-user-plus'></i> Sign Up</a></li>";
     
  echo   "<li><a href='#myModalLogin' type='button' class='btn btn-mesa' data-toggle='modal' data-target='#myModalLogin'><i class='fa fa-sign-in' aria-hidden='true'></i> Login</a>";
echo "</li>";


        }else{
          
          
          echo "<li><a href='user.php?content=account&user=$user'><i class='fa fa-user'></i> My Account</a></li>";
          echo "<li><a href='../mylibrary/logout.php'><i class='fa fa-sign-out'></i> Logout</a></li>";
        
        
        }
		?>
      
      </ul>
   
   
   
   
   
    </div>
  </div>
</nav>



  