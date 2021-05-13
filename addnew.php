<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
  <div class="content2 container">

    <?php echo $notice ?>
<div class="columns">
    <div class="column col-3"></div>
<div class="column col-6">
      <h4>Add New Items</h4><hr>
      <form method="POST">
         <div class="form-group">
		        <div class="form-group">
            <label for="some" class="col-form-label">Select Category</label>
            <select class="form-control" required name="catId">
              <option selected disabled value="">Please Select Category</option>
            <?php getAllCat(); ?>
              
            </select>
          </div>
   
            <label for="some" class="col-form-label">Name</label>
            <input type="text" name="name" placeholder="menu name" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Unit</label>
            <input type="text" name="unit" placeholder="each / pcs others" class="form-control" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Price</label>
            <input type="number" placeholder="input price" name="price"  class="form-control" id="some" required>
          </div>
       
           <div class="form-group">
            <label for="some" class="col-form-label">Discription / Recepis</label>
          <textarea class="form-control" name="discription" required placeholder="Write some discription"></textarea> 
          </div>
          <div class="center">
            <button type="submit" name="saveProduct" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-success">Reset</button>
          </div>
        </form>
    </div>
</div>

<?php include 'include/footer.php';?>