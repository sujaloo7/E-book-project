<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>
  </head>

<style>
.login {
  --primary-color: #000;
  --secondary-color: #fff;
  --hover-color: #111;
  --arrow-width: 10px;
  --arrow-stroke: 2px;
  box-sizing: border-box;
  border: 0;
  border-radius: 35px;
  color: var(--secondary-color);
  padding: 1em 1.8em;
  background: var(--primary-color);
  display: flex;
  transition: 0.2s background;
  align-items: center;
  gap: 0.6em;
  font-weight: bold;
}

.login .arrow-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

.login .arrow {
  margin-top: 1px;
  width: var(--arrow-width);
  background: var(--primary-color);
  height: var(--arrow-stroke);
  position: relative;
  transition: 0.2s;
}

.login .arrow::before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  border: solid var(--secondary-color);
  border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
  display: inline-block;
  top: -3px;
  right: 3px;
  transition: 0.2s;
  padding: 3px;
  transform: rotate(-45deg);
}

.login:hover {
  background-color: var(--hover-color);
}

.login:hover .arrow {
  background: var(--secondary-color);
}

.login:hover .arrow:before {
  right: 0;
}
a
{
    color:black;
    font-size:14px;
}
</style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-4">
  <div class="container">
  <a class="navbar-brand" href=" {{ route('home') }}"> <img src="{{ URL::asset('public/assets/frontend/images/logo.png') }}" height="25" alt="Logo"> </a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bold text-info" aria-current="page" href="#">Home</a>
        </li>
      <!-- Navbar dropdown -->
<li class="nav-item dropdown dropdown-hover position-static ">
  <a class="nav-link " href="#" id="navbarDropdown" role="button"
    data-mdb-toggle="dropdown" aria-expanded="false">
   All Exams
  </a>
  <!-- Dropdown menu -->
  <div class="dropdown-menu w-75 p-3 mt-0 border-0 shadow" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                    border-top-right-radius: 0;
                  ">
                <h5 class="text-center">All Types Of Exams</h5>

    <div class="container border-0">
      <div class="row my-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="list-group list-group-flush">
          <a href="" class="text-decoration-none p-2"><img src="./images/ssc.webp"  height="30" alt=""> SSC Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/bank.webp"  height="30"  alt="">&nbsp;&nbsp;BANK Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/teach.webp"  height="30"  alt="">&nbsp;&nbsp;Teaching Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/UPSC.webp"  height="30"  alt="">&nbsp;&nbsp;Civil Services Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering.webp"  height="30"  alt="">&nbsp;&nbsp;Railways Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="list-group list-group-flush">
          <a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="list-group list-group-flush">
          <a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="list-group list-group-flush">
          <a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="30"  alt="">&nbsp;&nbsp;Engineering Recruitment Exams</a>  
<a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="30" alt="">&nbsp;&nbsp;Defence Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="30"  alt="">&nbsp;&nbsp;State Govt. Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="30" alt="">&nbsp;&nbsp;Engineering Entrance Exams</a>
<a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="30"  alt="">&nbsp;&nbsp;Police Exams</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
      <!-- Navbar dropdown -->
      <li class="nav-item dropdown dropdown-hover position-static ">
  <a class="nav-link " href="#" id="navbarDropdown" role="button"
    data-mdb-toggle="dropdown" aria-expanded="false">
   State Exams
  </a>
  <!-- Dropdown menu -->
  <div class="dropdown-menu w-100 mt-0 border-0 shadow" aria-labelledby="navbarDropdown" style="border-top-left-radius: 0;
                    border-top-right-radius: 0;
                  ">

    <div class="container border-0">
      <div class="row my-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="list-group list-group-flush">
          <ol>
      <li>
        <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/cbse.php"; ?>">
        <img height="30" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/cbse.jfif"; ?>" alt="">
      CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI
      </a>

      </li>
      <br>
     
      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/nios.php"; ?>">
        <img height="30" src="https://www.omegaschools.org/wp-content/uploads/2017/11/NIOS.jpg" alt="">
        NATIONAL INSTITUTE OF OPEN SCHOOLING, NEW DELHI
      </a>
      </li>
      <br>
      <!-- <li>
      <a href="">
        <img height="25" src="https://upload.wikimedia.org/wikipedia/en/1/19/CISCE_Logo.gif" alt="">
        COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI
      </a>
      </li> -->

      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/bie.php"; ?>">
        <img height="30" src="https://pbs.twimg.com/profile_images/1065518279601512448/1Ks8b0Yf_400x400.jpg" alt="">
        BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH
      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://i2.wp.com/govinfo.me/wp-content/uploads/2018/03/Board-of-Secondary-Education-Andhra-Pradesh.png?ssl=1" alt="">
        BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://sebaonline.org/seba_logo_color_small.png" alt="">
        BOARD OF SECONDARY EDUCATION, ASSAM


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://upload.wikimedia.org/wikipedia/en/a/a4/BSER-Logo.png" alt="">
        BOARD OF SECONDARY EDUCATION, RAJASTHAN
            </a>
      </li>

    
    </ol>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
          <div class="list-group list-group-flush">
          <ol>
      <li>
        <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/cbse.php"; ?>">
        <img height="30" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/cbse.jfif"; ?>" alt="">
      CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI
      </a>

      </li>
      <br>
      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/nios.php"; ?>">
        <img height="30" src="https://www.omegaschools.org/wp-content/uploads/2017/11/NIOS.jpg" alt="">
        NATIONAL INSTITUTE OF OPEN SCHOOLING, NEW DELHI
      </a>
      </li>

      <!-- <li>
      <a href="">
        <img height="25" src="https://upload.wikimedia.org/wikipedia/en/1/19/CISCE_Logo.gif" alt="">
        COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI
      </a>
      </li> -->
      <br>
      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/bie.php"; ?>">
        <img height="30" src="https://pbs.twimg.com/profile_images/1065518279601512448/1Ks8b0Yf_400x400.jpg" alt="">
        BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH
      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://i2.wp.com/govinfo.me/wp-content/uploads/2018/03/Board-of-Secondary-Education-Andhra-Pradesh.png?ssl=1" alt="">
        BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://sebaonline.org/seba_logo_color_small.png" alt="">
        BOARD OF SECONDARY EDUCATION, ASSAM


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://upload.wikimedia.org/wikipedia/en/a/a4/BSER-Logo.png" alt="">
        BOARD OF SECONDARY EDUCATION, RAJASTHAN
            </a>
      </li>

    
    </ol>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="list-group list-group-flush">
          <ol>
      <li>
        <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/cbse.php"; ?>">
        <img height="30" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/cbse.jfif"; ?>" alt="">
      CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI
      </a>

      </li>
      <br>
      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/nios.php"; ?>">
        <img height="30" src="https://www.omegaschools.org/wp-content/uploads/2017/11/NIOS.jpg" alt="">
        NATIONAL INSTITUTE OF OPEN SCHOOLING, NEW DELHI
      </a>
      </li>
      <br>
      <!-- <li>
      <a href="">
        <img height="25" src="https://upload.wikimedia.org/wikipedia/en/1/19/CISCE_Logo.gif" alt="">
        COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI
      </a>
      </li> -->

      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/bie.php"; ?>">
        <img height="30" src="https://pbs.twimg.com/profile_images/1065518279601512448/1Ks8b0Yf_400x400.jpg" alt="">
        BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH
      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://i2.wp.com/govinfo.me/wp-content/uploads/2018/03/Board-of-Secondary-Education-Andhra-Pradesh.png?ssl=1" alt="">
        BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://sebaonline.org/seba_logo_color_small.png" alt="">
        BOARD OF SECONDARY EDUCATION, ASSAM


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://upload.wikimedia.org/wikipedia/en/a/a4/BSER-Logo.png" alt="">
        BOARD OF SECONDARY EDUCATION, RAJASTHAN
            </a>
      </li>

    
    </ol>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="list-group list-group-flush">
          <ol>
      <li>
        <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/cbse.php"; ?>">
        <img height="30" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/cbse.jfif"; ?>" alt="">
      CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI
      </a>

      </li>
      <br>
      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/nios.php"; ?>">
        <img height="30" src="https://www.omegaschools.org/wp-content/uploads/2017/11/NIOS.jpg" alt="">
        NATIONAL INSTITUTE OF OPEN SCHOOLING, NEW DELHI
      </a>
      </li>
      <br>
      <!-- <li>
      <a href="">
        <img height="25" src="https://upload.wikimedia.org/wikipedia/en/1/19/CISCE_Logo.gif" alt="">
        COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS, NEW DELHI
      </a>
      </li> -->

      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/bie.php"; ?>">
        <img height="30" src="https://pbs.twimg.com/profile_images/1065518279601512448/1Ks8b0Yf_400x400.jpg" alt="">
        BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH
      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://i2.wp.com/govinfo.me/wp-content/uploads/2018/03/Board-of-Secondary-Education-Andhra-Pradesh.png?ssl=1" alt="">
        BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://sebaonline.org/seba_logo_color_small.png" alt="">
        BOARD OF SECONDARY EDUCATION, ASSAM


      </a>
      </li>
      <br>
      <li>
      <a href="">
        <img height="30" src="https://upload.wikimedia.org/wikipedia/en/a/a4/BSER-Logo.png" alt="">
        BOARD OF SECONDARY EDUCATION, RAJASTHAN
            </a>
      </li>

    
    </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
        
      </ul>
      <form class="d-flex input-group w-50 me-auto">
        <input
          type="search"
          class="form-control py-3"
          placeholder="Search Here ..."
          aria-label="Search"
        />
        <button
          class="btn btn-info text-light"
          type="button"
          data-mdb-ripple-color="dark"
        >
        <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      
      <a href="{{ route('front_login') }}" class="text-decoration-none text-light mb-1">
      <button class=" login p-0 px-4 py-2">
       
    Sign In
    <div class="arrow-wrapper">
        <div class="arrow"></div>

    </div>
    
</button>
</a>

    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
  </body>
</html>