<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
<style>
    body {
  font-family: Ubuntu,sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  width: 600px;
  margin: 50px auto;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 10px;
}

.container h1 {
  text-align: left;
  font-size: 20px;
  margin-bottom: 20px;
  border-radius: 10px;
}

.post-info {
  text-align: right;
  margin-bottom: 20px;
}

.post-info input {
  width: 45%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 11px;
}

.post-info select {
  width: 25%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 11px;
}

.post-content {
  margin-bottom: 20px;
  text-align: center;
  display: flex;
  flex-direction: row;
  align-items: right;
  height: 250px;
}

.post-content textarea {
  text-align:left;
  width: 70%;
  height: 200px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 13px;
  margin: 0 auto;
}

.image-upload {
     display: flex;
     flex-direction: row;
     text-align: center;
     width: 150px;
     height: 150px;
     background-color: #ddd;
     border: 1px solid #ccc;
     border-radius: 3px;
     align-items: center;
     font-size: 13px;
    }


.image-upload label {
  display: flex;
  flex-direction: row;
  padding: 10px;
  border: 1px dashed #ccc;
  border-radius: 3px;
  cursor: pointer;
}

.image-upload input[type="file"] {
  display: none;
}

.buttons {
  text-align: right;
}

.buttons button {
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  font-size: 16px;
  cursor: pointer;
  margin-right: 10px;
}

.buttons .cancel {
  background-color: #b3afaf;
  color: #fff;
}

.buttons .post {
  background-color: #FF6D00;
  color: #fff;
}
#content{
  border-color: #FF6D00;
}

#category{
  background-color: #FF6D00;
  color: #fff;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Create Post</h1>
        <div class="post-info">
            <input type="text" id="title" placeholder="Enter Title">
            <select id="category">
                <option value="">Choose Category</option>
                <option value="Marketing">Marketing</option>
                <option value="IT">IT</option>
                <option value="HR">HR</option>
            </select>
        </div>

        <div class="post-content">
            <div class="image-upload">
                <label for="image">Drop your image here or Browse</label>
                <input type="file" id="image">
            </div>
            <textarea id="content" placeholder="Write something here...."></textarea>
        </div>
        <div class="buttons">
            <button type="button" class="cancel">Cancel</button>
            <button type="button" class="post">Post</button>
        </div>
        
    </div>
</body>
</html>