<?php

if ($_POST) {

$name = $_POST['name'];

$content = $_POST['commentContent'];

$handle =fopen("comments.html","a");



fwrite($handle, "<b>". $name. "</b>:<br/>" . $content. "<br/>");

fclose ($handle);
 

}
 
?>

<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

 
.row:after {
  content: "";
  display: table;
  clear: both;
}

 
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<center><h2>Comment Here</h2></center>
 

<div class="container">
  <form action=""method="POST">
  <div class="row">
    <div class="col-25">
      <label>Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name= "name" placeholder="Your name..">
    </div>
  </div>
   
     
  <div class="row">
    <div class="col-25">
      <label>Comment</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name ="commentContent" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Post!">
  </div>
  </form>
</div>
<?php include "comments.html";?>

</body>
</html>
