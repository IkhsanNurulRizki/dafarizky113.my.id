<?php
                    $row = $user->fetch_assoc();

                    if (isset($_POST['update'])){
                        $update = $userObj->updateUser($_POST);

                        if ($update == true){
                            $table = base64_url_encode("Pengguna");
                            ?>
                            <script>
                                window.location.replace("home.php?t=<?php echo $table?>");
                            </script>
                            <?php
                        }else {
                            $errMsg = "Data Gagal Diupdate";
                        }
                    }
?>
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
        <?php
    if (isset($errMsg)){
        echo "<div class='alert alert-danger alert-dismissible'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                $errMsg
                            </div>";
    }
?>
          <div class="card">
            <div class="card-header">
              EDIT PENGGUNA
            </div>
            <div class="card-body">
              <form method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" value="<?php echo $row['Username'] ?>" placeholder="Insert Username" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $id?>">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" value="<?php echo $row['Email'] ?>" placeholder="Insert Email" class="form-control">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" value="<?php echo $row['Password'] ?>" placeholder="Insert Password" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success" name="update">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>