<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
  <div class="content container">

  <div class="tableBox" >
    <table id="dataTable" class="table table-responsive table-hover">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Disc</th>
        <th>Qty</th>
        <th>Amount</th>
        <th>Staff</th>
        <th>Date</th>
        
      </thead>
     <tbody>
      <?php $i=0;
          $array = $con->query("select * from sold ORDER BY date DESC");
        while ($row = $array->fetch_assoc()) 
        { 
          $i=$i+1;
          $id = $row['id'];
        ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['discount']; ?></td>
            <td><?php echo $row['item']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo getAdminName($row['userId']); ?></td>
            <td><?php echo $row['date']; ?></td>

            
          </tr>
      <?php
        }
       ?>
     </tbody>
    </table>

  </div>                      

  </div>  
    <?php include 'include/footer.php';?>