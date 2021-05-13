<?php include 'include/head.php';?>
<?php include 'include/nav.php';?>
    <div class="text-center container">
    <?php echo $notice ?>
<div class="columns">


    <div class="column col-3"></div>
<div class="column col-6">
      <h4>Login Setting</h4><hr>
      <form method="POST">
         <div class="form-group">
            <label for="some" class="col-form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo $user['email'] ?>" id="some" required>
          </div>
          <div class="form-group">
            <label for="some" class="col-form-label">Password</label>
            <input type="password" name="password" value="<?php echo $user['password'] ?>" class="form-control" id="some"  required>
          </div>
          <div class="center">
            <button class="btn btn-primary btn-lg btn-block" name="saveSetting">Save Setting</button>
          </div>   
        </form>
    </div>
</div>
</div>
 <?php include 'include/footer.php';?>