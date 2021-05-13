<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
  <?php 
  $notice="";
  if (isset($_POST['safeIn'])) 
  {
    $filename = $_FILES['inPic']['name'];
    move_uploaded_file($_FILES["inPic"]["tmp_name"], "photo/".$_FILES["inPic"]["name"]);
    if ($con->query("insert into categories (name,pic) value ('$_POST[inName]','$filename')")) {
      $notice ="<div class='alert alert-success'>Successfully Saved</div>";
    }
    else
      $notice ="<div class='alert alert-danger'>Not saved Error:".$con->error."</div>";
  }

   ?>

  <div class="content2 container">
     <?php echo $notice; ?>
    <div class="center">
  <h3>Payment Bill</h3>
    </div>

  <?php 
  if (isset($_POST['updateBill'])) 
  {
    $id = $_POST['id'];
    $qty = $_POST['qty'];
    foreach ($_SESSION['bill'] as $key => $value) 
    {
      if($_SESSION['bill'][$key]['id'] == $id) $_SESSION['bill'][$key]['qty'] = $qty;
    }
  }
  	$i=0;$total = 0;
    ?>
    <br>
<table class="table table-striped table-hover">
    	<tr>
    		<th>#</th>
    		<th>Item</th>
    		<th>Price</th>
        <th></th>
    		<th>Qty</th>
    	</tr>
    <?php
    foreach ($_SESSION['bill'] as $row) 
    {
      $i++;
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>$row[name]</td>";
      echo "<td>$row[price]</td>";
      echo "<td><a href='called.php?remove=$row[id]'><button class='btn btn-primary'>Remove</button></a></td>";
      echo "<td> 
            <form method='POST'>
            <input type='hidden' value='$row[id]' name='id'>
            <input type='number' min='1' class='form-control input-sm pull-left' value ='$row[qty]' style='width:88px;' name='qty'>  <button type='submit' name='updateBill' style='margin-left:2px' class='btn'>Update</button>
            </form>
            </td>";
      echo "</tr>";
      $total = $total + $row['price']*$row['qty'];
    }
  ?>
  <tr>
    <td colspan="2">Total Bill</td>
    <td colspan="2"><strong><?php echo $total ?></strong></td>
    <td><button class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#billOut">Transaction</button></td>
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
        <h4 class="modal-title">Receipt Payment</h4>
      </div>
      <div class="modal-body"> <form method="POST" action="billout.php">
        <div style="width: 77%;margin: auto;">
         
          <div class="form-group">
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" class="form-control" id="some" required>
          </div>
		  
           <div class="form-group">
            <label for="some" class="col-form-label">Discount</label>
            <input type="text" name="discount" value="0" min="1" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Notes / Contact</label>
            <input type="text" name="contact" class="form-control" id="some" required>
          </div>
       
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="billInfo">View Bill</button>
      </div>
    </form>
    </div>

  </div>
</div>

<?php include 'include/footer.php';?>