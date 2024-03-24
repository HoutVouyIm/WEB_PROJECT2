<?php
    include '../ConnectDB/connect.php';
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

            <select class="add_category" name="category_id">
            <option>Choose Category</option>
            <?php
                $sql = "SELECT * FROM category_tb";
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "
                      <option value=$row[category_id] >$row[category_name]</option>
                    ";
                }
            ?>

        </select>
          </div>
          <textarea class="add_des" name="des"></textarea>
        </div>
    </div>
    <div class="button_style">
        <button class="btn_cancel" type="submit" >Cancel</button>
        <button class="btn_post" type="submit">Post</button>
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
    if(isset($_POST['submit'])){
        
        $title = $_POST['title'];
        $des = $_POST['des'];
        $category_id = $_POST['category_id'];

        session_start();
        if(isset($_SESSION['id']) && isset($_SESSION['email'])){
          $user_id = $_GET['id'];

        }

        echo "
            <script> alert($user_id); </script>
        ";
        
        // $insert = " INSERT INTO `curd` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone') ";
        // $query = $conn->query($insert);
       
        // if($query){
        //     echo "Add User Successfully";
        //     header('location:/CONNECT_DB/index.php');
        // }
    }

?>
</html>