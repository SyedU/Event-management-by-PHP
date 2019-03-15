<?php
session_start();
require_once('includes/header.php');
require_once('db.php');


$query_string ="SELECT * FROM event1";
$db_return = mysqli_query($db_connection, $query_string);

?>

<div class="container">
<div clas="row">



<div class="col-md-8 ">
<br>
<br>
  <h3>Event</h3>
  <hr>
  <table class="table table-bordered" id="listevent1">
    <thead>

      <td>Event Name</td>
      <td>Event Place</td>
      <td>Event Capacity</td>
      <td>Event Date</td>
      <td>Event Payment</td>

      <td>Action</td>
    </thead>
    <?php

    foreach ($db_return as $services1){

    ?>
    <tr>


      <td><?=$services1['bandname']?></td>
      <td><?=$services1['place']?></td>
      <td><?=$services1['capacity']?></td>
      <td><?=$services1['date']?></td>
      <td><?=$services1['payment']?></td>

      <td>

        <?php
        if($services1['status'] == 1){
        ?>

        <a href="makedeactive1.php?id=<?=$services1['id']?>" class="btn-sm btn-info">DeActive</a>

        <?php
      }
      else{
        ?>

        <a href="makeactive1.php?id=<?=$services1['id']?>" class="btn-sm btn-success">Active</a>

        <?php
        }
        ?>

      <a href="editevent1.php?id=<?=$services1['id']?>" class="btn-sm btn-warning">Edit</a>


      </td>
    </tr>
    <?php

    }
    ?>
  </table>
</div>
</div>
</div>

<?php
 require_once('includes/footer.php');
?>


<script type="text/javascript">

$(document).ready(function(){
  $('#listevent1').DataTable();
})

</script>
