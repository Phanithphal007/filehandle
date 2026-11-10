<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
  <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: 100vh;">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Add Student
    </button>
    <?php
    if (isset($_POST['btn_submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $phone = $_POST['phone'];
      $gender = $_POST['gender'];
      $profileName = $_FILES['profile']['name'];
      $tmp_name = $_FILES['profile']['tmp_name'];
      $uploadFile = "image/" . $profileName;
      $check = move_uploaded_file($tmp_name, $uploadFile);
      if ($check) {
        echo '<script>
       Swal.fire({
  title: "Success Hx brooo!!",
  text: "Good Boy!!!!",
  icon: "success"
});
       </script>';
      }
    ?>

      <div>
        <table class="table text-center table-bordered">
          <tr class="table-dark">
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Profle</th>
          </tr>
          <tr>
            <td><?= $username ?></td>
            <td><?= $email ?></td>
            <td><?= $password ?></td>
            <td><?= $phone ?></td>
            <td><?= $gender ?></td>
            <td>
              <div class=" rounded-circle shadow" style="width: 40px; height: 40px;">
                <img class="w-100 h-100  rounded-circle" src="image/<?= $profileName ?>" alt="">
              </div>
            </td>
          </tr>
        </table>
      </div>
  </div>
<?php

    }
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">+Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="form.php" enctype="multipart/form-data">
        <div class="modal-body">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="Enter Username" class="form-control mt-1">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Enter Email" class="form-control mt-1">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Enter Username" class="form-control mt-1">
          <label for="">Phone Number</label>
          <input type="number" name="phone" placeholder="Enter Number" class="form-control mt-1">
          <label for="">Select Gender</label>
          <select class="form-select" name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">other</option>
          </select>
          <label for="">Profile</label>
          <input type="file" name="profile" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="btn_submit" class="btn btn-primary">Save Student</button>
        </div>
      </form>
    </div>
  </div>
</div>





</body>

</html>