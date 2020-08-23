<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php include 'link/links.php'; ?>
<?php include 'css/style.php'; ?>

</head>
<body>
	<nav class="navbar navbar-expand-lg nav_style P-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">prevention</a>
      </li>

    </ul>
   
  </div>
</nav>

 <!--  data upload  -->

 <section class="corono_update container-fluid">
  <div class=" my-5">
    <h3 class="text-center text-uppercase "> COVID-19 LIVE UPDATE OF THE INDIA</h3>
    
  </div>
  <div class="table-responsive">
    <table class="table table-borderd table-striped text-center" id="tbval">
      <tr>
        <th class="text-capitalize">lastupdatedtime</th>
        <th class="text-capitalize">state</th>
        <th class="text-capitalize">confirmed</th>
        <th class="text-capitalize">active</th>
        <th class="text-capitalize">recovered</th>
        <th class="text-capitalize">Deaths</th>
      </tr>
      
      <?php

    $data = file_get_contents('https://api.covid19india.org/data.json');
     $coranalive = json_decode($data, true);
   

     $statescount = count($coranalive['statewise']);
     $i=1;
     while($i <=$statescount){

      ?>

      <tr>
        <td>  <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>

        <td>  <?php echo $coranalive['statewise'][$i]['state'] ?></td>
        <td>  <?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
        <td>  <?php echo $coranalive['statewise'][$i]['active'] ?></td>
        <td>  <?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
        <td>  <?php echo $coranalive['statewise'][$i]['deaths'] ?></td>

      </tr>


     <!--echo $coranalive['statewise'][$i]['lastupdatetime'] ."<br>";
      echo $coranalive['statewise'][$i]['state']."<br>";
      echo $coranalive['statewise'][$i]['confirmed']."<br>";
      echo $coranalive['statewise'][$i]['active']."<br>";
      echo $coranalive['statewise'][$i]['recovered']."<br>";
      echo $coranalive['statewise'][$i]['deaths']."<br>"; -->

      <?php
   

      $i++;
     }
      ?>
    </table>
    
  </div> 
</div>

 </section>

 
 
</body>
</html>