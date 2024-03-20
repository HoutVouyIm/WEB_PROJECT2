<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Information</title>
  <style>
    body {
      font-family: Ubuntu, sans-serif;
    }
    .container {
      margin: 20px;
    }
    h1 {
      text-align: left;
      font-size: 20px;
    }
    .info-links {
      margin-bottom: 20px;
    }
    .info-links a {
      display: inline-block;
      margin-right: 20px;
      padding: 10px 20px;
      /* background-color: #007bff; */
      color: black;
      text-decoration: underline solid #FF9201 2px;
    }
    .info-links a :active{
        text-decoration: underline solid green;
    }
     a :hover{
        color: red;
    }
    .form {
      display: none;
      margin-top: 20px;
    }
    .form label {
      display: block;
      margin-bottom: 5px;
      border-radius: 3px;
    }
    .form input[type="text"],
    .form input[type="date"]
{
      width: 50%;
      margin-bottom: 10px;
      padding: 5px;
    }
    .save-btn {
      padding: 8px 20px;
      background-color: #FF9201;
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 3px;
    }
    .save-btn:hover {
      background-color: #FF9201;
      border-radius: 3px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Add Information <Add Information></h1>
    <div class="info-links">
      <a href="#" onclick="showForm('education-form')">Education</a>
      <a href="#" onclick="showForm('experience-form')">Experience</a>
    </div>
    <div id="education-form" class="form">
      <form>
        <label for="education-title">Title:</label>
        <input type="text" id="education-title" name="education-title">
        <label for="education-company">Company Name:</label>
        <input type="text" id="education-company" name="education-company">
        <label for="education-location">Location:</label>
        <input type="text" id="education-location" name="education-location">
        <label for="education-start-date">Start Date:</label>
        <input type="date" id="education-start-date" name="education-start-date">
        <label for="education-end-date">End Date:</label>
        <input type="date" id="education-end-date" name="education-end-date">
        <label><input type="checkbox" id="currently-working">I'm currently working on this role</label>
        <button type="submit" class="save-btn">Save</button>
      </form>
    </div>
    <div id="experience-form" class="form">
      <form>
        <label for="experience-school">School:</label>
        <input type="text" id="experience-school" name="experience-school">
        <label for="experience-degree">Degree:</label>
        <input type="text" id="experience-degree" name="experience-degree">
        <label for="experience-field">Field of Study:</label>
        <input type="text" id="experience-field" name="experience-field">
        <label for="experience-start-date">Start Date:</label>
        <input type="date" id="experience-start-date" name="experience-start-date">
        <label for="experience-end-date">End Date:</label>
        <input type="date" id="experience-end-date" name="experience-end-date"><br>
        <button type="submit" class="save-btn">Save</button>
      </form>
    </div>
  </div>

  <script>
    function showForm(formId) {
      var forms = document.querySelectorAll('.form');
      forms.forEach(function(form) {
        form.style.display = 'none';
      });
      document.getElementById(formId).style.display = 'block';
    }
  </script>
</body>
</html>