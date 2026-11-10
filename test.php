
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
   <form method="post"  action="test.php" enctype="multipart/form-data">
     <input type="file" name="image">
     <button type="submit" name="btn_submit">Submit Form</button>

   </form>
   <?php 
   if(isset($_POST['btn_submit'])){
      $imageName=$_FILES['image']['name'];//1.jpg
      $tmp_name=$_FILES['image']['tmp_name'];
    $uploadFile="image/".$imageName;//image/1.jpg
    $check=move_uploaded_file($tmp_name,$uploadFile);
    if($check){
       echo " Success";
    } 
   }
   ?>
   <img src="image/<?=$imageName?>" alt="">

</body>
</html>