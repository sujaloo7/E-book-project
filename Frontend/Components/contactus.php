<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

  <style>
    @import url("https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Spartan:400,700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #04ABE3;
}

.work-with-us {
  display: grid;
  grid-template-areas: "form illustration";
  grid-template-columns: 2fr 1.25fr;

}

.form {
  grid-area: form;
  padding: 50px 50px;
}
.form h1 {
  font-size: 28px;
  margin-bottom: 100px;
  font-weight: normal;
  font-family: "Spartan", sans-serif;
}
.form h2 {
  font-size: 28px;
  line-height: 40px;
  font-family: "Roboto Slab", serif;
}
.form form {
  margin-top: 100px;
}
.form label, .form input, .form textarea, .form button {
  display: block;
  outline: none;
  font-family: "Spartan", sans-serif;
  font-size: 18px;
  width: 100%;
}
.form label, .form input {
  border: 0;
  height: 40px;
  line-height: 40px;
}
.form input {
  border-bottom: 2px solid #000;
  margin-bottom: 40px;
}
.form textarea {
  line-height: 40px;
  border: 2px solid #000;
  margin-bottom: 20px;
  resize: none;
  padding: 5px;
}
.form input:focus, .form textarea:focus {
  border-color: #F74005;
  color: #F74005;
}
.form button {
  height: 50px;
  width: 150px;
  line-height: 50px;
  border: 2px solid #000;
  background: #000;
  color: #fff;
  transition: 0.2s all ease-in-out;
}
.form button:hover {
  background: #fff;
  color: #000;
  font-weight: bold;
}

.illustration {
  padding-top: 100px;
  grid-area: illustration;
}
.illustration h1 {
  font-family: "Roboto Slab", serif;
  font-size: 28px;
  font-weight: normal;
  margin-bottom: 40px;
  transition: 0.2s all ease-in-out;
}
.illustration h1:hover {
  text-decoration: underline;
}
.illustration h2 {
  font-family: "Spartan", sans-serif;
  font-size: 18px;
  font-weight: normal;
  margin-bottom: 20px;
}
.illustration img {
  width: 100%;
}
.illustration .link-rollup {
  padding: 145px 0 50px 20px;
}
  </style>
  <body>
    <div class="container-fluid">
  <div class="work-with-us">
  <div class="form">
  <h4 class=" mb-5" style="font-family: 'Ubuntu', sans-serif; font-weight:bold;">CONTACT <span class="text-muted">US</span></h4>
  
   
    <form>
      <label for="name">FIRST AND LAST NAME</label><input id="name" type="text" /><label for="work-email">WORK EMAIL</label><input id="work-email" type="text" /><label for="project-idea">HOW CAN WE WORK TOGETHER</label><textarea id="project-idea" rows="4"></textarea><button type="button">SUBMIT</button>
    </form>
  </div>
  <div class="illustration">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/flame-education-1.png" />
   
  </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>