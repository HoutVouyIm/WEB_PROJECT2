<?php
    include '../ConnectDB/connect.php';
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
<style>

.post_style {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  gap: 10px;
  height: 200px;
}

.image-upload {
     display: flex;
     flex-direction: row;
     text-align: center;
     background-color: #ddd;
     border: 1px solid #ccc;
     border-radius: 3px;
     align-items: center;
     font-size: 13px;
     max-width: 100%; 
     max-height: 100%;
}

.image-upload label {
  display: flex;
  flex-direction: row;
  padding: 10px;
  border: 1px dashed #ccc;
  border-radius: 3px;
  cursor: pointer;
}

/* .image-upload input[type="file"] {
  display: none;
} */

.title_category_style {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  gap: 10px;
  margin-bottom: 20px;
}

.add_title {
    width: 50%;
    padding: 10px;
    border: none;
    border: 1px solid gray;
    border-radius: 6px;
    outline: none;
}

.add_category {
  width: 50%;
}
.add_des {
  width: 100%;
  height: 140px;
}
.button_style {
  display: flex;
  justify-content: flex-end;
  gap: 5px;
  margin-top: 5px;
} 
.btn_cancel {
  padding: 10px;
  border: 1px solid #ffff;
  border-radius: 5px;
}
.btn_post {
  padding: 10px 30px;
  color: white;
  background: #FF9201;
  border: 1px solid #FF9201;
  border-radius: 5px;
}
</style>
</head>
<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">
    <h1>Create Post</h1>
    <div class="post_style">
        <label class="image-upload" for="inputFile">
            <!-- Image preview -->
            <img id="previewImage" style="max-width: 100%; max-height: 100%;" src="../Assert/images/upload_image.jpeg"/>
            <input type="file" name="image" id="inputFile" onchange="readUrl(this)" style="display: none;" accept=".jpg, .jpeg, .png">

        </label>

        <div style="width: 30vw;">
          <div class="title_category_style">
            <input type="text" name="title" class="add_title" placeholder="Enter Title">

          <?php
            $sql = "SELECT id, category_name FROM `category_tb`";
            $ca_results = mysqli_query($conn, $sql);
          ?>

          <select class="add_category" name="category_id">
              <option>Choose Category</option>
              <?php foreach($ca_results as $row) : ?>
                  
                      <option value="<?php echo $row['id']; ?>" name="">
                          <?php echo $row['category_name']; ?>
                      </option>
                  
              <?php endforeach; ?>
          </select>

          </div>
          <textarea class="add_des" name="des"></textarea>
        </div>
    </div>
    <div class="button_style">
        <button class="btn_cancel" type="submit">Cancel</button>
        <button class="btn_post" type="submit" name="add_post">Post</button>
    </div>
  </form>

  <script>
    var a = document.getElementById("previewImage");
    function readUrl(input){
      if(input.files){
        var reader = new FileReader();
        reader.readAsDataURL(input.files[0]);
        reader.onload=(e)=>{
          a.src = e.target.result;
        }
      
      }
    }

  </script>
</body>

<?php
    if(isset($_POST['add_post'])){
      $title = $_POST['title'];
      $des = $_POST['des'];
      $category_id = $_POST['category_id'];
      $user_id = $_POST['user_id'];
     
      if($_FILES["image"]["error"] === 4){
          echo "
              <script> alert('Image Does Not Exist'); </script>
          ";
      }else{
          $fileName = $_FILES["image"]["name"];
          $fileSize = $_FILES["image"]["size"];
          $tmpName  = $_FILES["image"]["tmp_name"];

          $validImageExtension = ['jpg','jpeg','png'];
          $imageExtension = explode('.', $fileName);
          $imageExtension = strtolower(end($imageExtension));

          if(!in_array($imageExtension, $validImageExtension)){
              echo "
                  <script> alert('Invalid Image Extension'); </script>
              ";
          }else if($fileSize > 1000000){
              echo "
                  <script> alert('Image Size Is Too Large'); </script>
              ";
          }else{
              $newImageName = uniqid();
              $newImageName .='.'.$imageExtension;

              move_uploaded_file($tmpName, '../Assert/images'. $newImageName);
              $query = "INSERT INTO `create_post_tb` (`title`,`des`,`image`, `user_id`,`category_id`) 
              VALUES('$title','$des','$newImageName','$user_id','$category_id')";
              mysqli_query($conn, $query);

              echo "
                  <script> 
                      alert('Successfully Added'); 
                      document.location.href = '../Pages/index.php';
                  </script>
              ";
          }
      }
  }
?>
</html>