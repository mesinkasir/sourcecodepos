<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
<?php 
if (isset($_GET['catId']))
{
  $catId = $_GET['catId'];
  $array = $con->query("select * from categories where id='$catId'");
  $catArray =$array->fetch_assoc();
  $catName = $catArray['name'];
  $stockArray = $con->query("select * from inventeries where catId='$catArray[id]'");
 
}
else
{
  $catName = "All Inventeries";
  $stockArray = $con->query("select * from inventeries");
}
  include 'assets/bill.php';
 ?>
  <div class="content container">
  
  <div class="tableBox" >
    <table id="dataTable" class="table" style="z-index: -1">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Unit</th>
        <th>Price</th>
        <th></th>
      </thead>
     <tbody>
      <?php $i=0;
        while ($row = $stockArray->fetch_assoc()) 
        { 
          $i=$i+1;
          $id = $row['id'];
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['unit']; ?></td>
          <td> <?php echo number_format ($row['price'],0);?></td>
            <?php 
            if (!empty($_SESSION['bill'])) 
            {
             
            foreach ($_SESSION['bill'] as $key => $value) 
            {
              if (in_array($row['id'], $_SESSION['bill'][$key])) 
              {
                echo "<td>Selected</td>";break;
              }            
               else
               {
              ?>
            <td id='selection<?php echo $i; ?>'><button class="btn btn-primary btn-xs" onclick="addInBill('<?php echo $id ?>','<?php echo $i; ?>')">Select Menu</button></td>
              <?php break;} } } else {?>
              <td id='selection<?php echo $i; ?>'><button class="btn btn-primary btn-xs" onclick="addInBill('<?php echo $id ?>','<?php echo $i; ?>')">Select Menu</button></td>
              <?php } ?>
            </tr>
      <?php
        }
       ?>
     </tbody>
    </table>
  </div>                      

  </div> 
  <?php include 'include/footer.php';?>