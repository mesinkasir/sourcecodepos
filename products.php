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
  <a href="addnew.php" class="btn btn-primary float-right"><i class="icon icon-plus"></i> New Item</a>
  <br/><br/>
  <div class="tableBox" >
    <table id="dataTable" class="table table-striped table-hover">
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
         
              <td colspan="center"><a href="delete.php?item=<?php echo $row['id'] ?>&url=<?php echo $_SERVER['QUERY_STRING'] ?>"><button class='btn btn-primary'>Delete Item</button></a></td>
          </tr>
      <?php
        }
       ?>
     </tbody>
    </table>
  </div>                      

  </div>  

  <?php include 'include/footer.php';?>