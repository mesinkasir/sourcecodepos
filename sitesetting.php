<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
  <div class="container content2">
   
    <div class="text-center row">
<div class="columns">
    <div class="column col-3"></div>
<div class="column col-6">
      <h4>Resto Setting</h4><hr>
      <form method="POST">
         <div class="form-group">
            <label for="some" class="col-form-label">Resto Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo siteTitle() ?>" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Resto Name</label>
            <input type="text" name="name" value="<?php echo siteName() ?>" class="form-control" id="some"  required>
          </div> 
          <div class="center">
            <button class="btn btn-primary btn-lg btn-block" name="saveSetting">Save Setting</button>
          </div>   
        </form>
    </div>
</div>
</div>

 <?php include 'include/footer.php';?>