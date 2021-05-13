<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
  <div class="content2">
  	<div class="well well-sm" style="width: 77%;margin:auto;margin-top: 33px;">
      <div class="well well-sm text-center"><h1>Axcora Tech</h1><p>Axcora Spectre Resto Web Apps<br/>https://axcora.com<br/>
	  Sourcecode : https://hockeycomputindo.com</p></div> 
    </div>
    <br>
    <div class="well well-sm" style="width: 77%;margin: auto;">
      <table class="table table-striped table-hover">
        <tr>
          <th>Customer :</th>
          <td><?php echo $_POST['name'] ?></th>
          <th>Phone : </th>
          <td><?php echo $_POST['contact'] ?></th>
        </tr>
        <tr>
          <th>Date :</th>
          <td><?php echo date("Y-m-d h:i:sa"); ?></td>
          <th>Staff :</th>
          <td><?php echo adminName(); ?></td>
        </tr>
        <tr>
          <th colspan="4" class="center"><h3>Order Details</h3></th>
        </tr>
          <tr>
        <th>#</th>
        <th>Item</th>
        <th>Qty</th>
        <th>Price</th>
      </tr>
        <?php
        $i=$total=0;
    foreach ($_SESSION['bill'] as $row) 
    {
      $i++;
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>$row[name]</td>";
      echo "<td>$row[qty] x</td>";
      echo "<td>$row[price]</td>";
      echo "</tr>";
      $total = $total + $row['price']*$row['qty'];
    }
  ?>
  <tr>
    <td colspan="3" style="text-align: right;">Total</td><th><?php echo $total; ?></th>
  </tr>
  <tr>
    <td colspan="3" style="text-align: right;">Discount</td><th style="border-bottom: 1px solid blue;"><?php echo $_POST['discount']; ?></th>
  </tr>
  <tr>
    <td colspan="3" style="text-align: right;">Total</td><th><strong><?php echo $total-$_POST['discount']; ?></strong></th>
  </tr>
  <tr>
    <td class="center" colspan="4"><button class="btn btn-primary" onclick="window.print()">Print</button> <a href="pos.php"><button class="btn btn-success">Go Back</button></a></td>
  </tr>
      </table>
    </div>
  </div>

<div id="billOut" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Purchaser Information</h4>
      </div>
      <div class="modal-body"> <form method="POST" action="billout.php">
        <div style="width: 77%;margin: auto;">
         
          <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Contact</label>
            <input type="text" name="contact" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="safeIn">View Bill</button>
      </div>
    </form>
    </div>

  </div>
</div>
<?php 
$total = $total-$_POST['discount'];
    if (!$con->query("insert into sold (name,contact,discount,amount,item,userId) values ('$_POST[name]','$_POST[contact]','$_POST[discount]','$total','$i','$_SESSION[userId]')")) 
    {
      echo "Error is:".$con->error;
    }
 if (isset($_POST['billInfo'])) 
  {
   
    unset($_SESSION['bill']);
    $_SESSION['bill'] = array();
  }
 ?>

 <?php include 'include/footer.php';?>