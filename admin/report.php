<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>



<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->






        <h3 class="text-dark">Customer Order Reports</h3>

    


<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm text-dark">Order ID
      </th>
      <th class="th-sm text-dark">Date of Purchase
      </th>
      <th class="th-sm text-dark">Product Code
      </th>
      <th class="th-sm text-dark">Product Name
      </th>
      <th class="th-sm text-dark">Price Per Unit
      </th>
      <th class="th-sm text-dark">Unit Bought
      </th>
      <th class="th-sm text-dark">Total Cost
      </th>
    </tr>
  </thead>
  <tbody>
       <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<tr>';
     echo '<td class="text-dark">'.$obj->id.'</td>';
     echo '<td class="text-dark">'.$obj->date.'</td>';
     echo '<td class="text-dark">'.$obj->product_code.'</td>';
     echo '<td class="text-dark">'.$obj->product_name.'</td>';
     echo '<td class="text-dark">'.$obj->price.'</td>';
     echo '<td class="text-dark">'.$obj->units.'</td>';
     echo '<td class="text-dark">'.$currency.$obj->total.'</td>';
    echo '</tr class="text-dark">';

            }
          }
        ?>
    


  </tbody>
  <tfoot>
    <tr>
      <th class="text-dark">Order ID
      </th>
      <th class="text-dark">Date of Purchase
      </th>
      <th class="text-dark">Product Code
      </th>
      <th class="text-dark">Product Name
      </th>
      <th class="text-dark">Price Per Unit
      </th>
      <th class="text-dark">Unit Bought
      </th>
      <th class="text-dark">Total Cost
      </th>
    </tr>
  </tfoot>
</table>



  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>