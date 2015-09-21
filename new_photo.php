<?php include('header.php') ?>
<div class="row">
    <div class="col-lg-12">
        <h1>Instasomething</h1>
        <h2>Add a new photo</h2>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
      <form enctype="multipart/form-data" action="upload_photo.php" method="post" role="form">
          <div class="form-group">
            <input name="user_file" type="file"/>
          </div>
          <div class="form-group">
              Description:
              <textarea name="description" class="form-control" rows="3">
              </textarea>
          </div>
          <div class="form-group">
            <input type=submit value="Get File"/>
          </div>
      </form>
    </div>
</div>
<?php include('footer.php') ?>