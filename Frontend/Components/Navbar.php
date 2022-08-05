<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wi-Fi Publictaion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/favicon.ico"; ?>" type="image/x-icon">


  </head>
  <body>

  
   

  <style>
     ::-webkit-scrollbar {
    width: 7px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background:#0cc5cd; 
    border-radius: 10px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background:#0cc5cd; 
  }
  
    /* From uiverse.io by @alexroumi */
/* From uiverse.io by @satyamchaudharydev */
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
a:hover
{
  color:#0cc5cd;
}
ol li a{
  font-size:11px;
  margin-bottom: 10px !important;
}
ol li img{
  font-size:11px;
  margin-bottom: 10px !important;
}
  </style>

  <nav class="navbar navbar-expand-lg bg-white shadow p-3 sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href=" <?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/Homepage.php"; ?>."> <img src=" <?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/logo.png"; ?>." height="25" alt="Logo"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2 " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

      <li class="nav-item">
          <a class="nav-link" href="#" style="font-weight:bold;" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">All Exam</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">State Exam</a>
        </li>
        <form action="" class="ms-5">

        <div class="input-group flex-nowrap">
        <select class="form-select " aria-label="Default select example ">
  <option selected >All</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  
  <input type="search" class="form-control outline-0" style="width:500px;" placeholder="Search Here..." aria-label="Username" aria-describedby="addon-wrapping">
  <button class="btn btn text-light border-0" style="background-color:#0cc5cd;"><i class="fa-solid fa-magnifying-glass"></i></button>
</div>
</form>
       
        
      </ul>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/Authentication/login.php"; ?>" class="text-decoration-none text-light mb-1">
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

<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button> -->

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">All Exams Types</h5>
    <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body text-decoration-none">
    <a href="" class="text-decoration-none p-2"><img src="./images/ssc.webp"  height="20" alt=""> &nbsp; SSC Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/bank.webp"  height="20"  alt="">&nbsp;BANK Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/teach.webp"  height="20"  alt="">&nbsp;Teaching Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/UPSC.webp"  height="20"  alt="">&nbsp;Civil Services Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/engineering.webp"  height="20"  alt="">&nbsp;Railways Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/defence.webp"  height="20"  alt="">&nbsp;Engineering Recruitment Exams</a><br><br>  
    <a href="" class="text-decoration-none p-2"><img src="./images/state govt exams.webp"   height="20" alt="">&nbsp;Defence Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/engineering entrance.webp"  height="20"  alt="">&nbsp;State Govt. Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/police.webp"   height="20" alt="">&nbsp;Engineering Entrance Exams</a><br><br>
    <a href="" class="text-decoration-none p-2"> <img src="./images/insurance.webp"  height="20"  alt="">&nbsp;Police Exams</a><br><br>
    <!-- <a href="" class="text-decoration-none"> <img src="./images/.webp"   height="20" alt=""> Insurance Exams</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"  height="20"  alt="">Nursing Exams</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"  height="20"  alt="">Other Govt. Exams</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"   height="20" alt="">NRA CET</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"   height="20" alt="">Campus Placement</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"   height="20" alt="">MBA Entrance Exam</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"  height="20"  alt="">CUET and UG Entrance</a><br>
    <a href="" class="text-decoration-none"> <img src="./images/ssc.webp"  height="20"  alt="">Accounting and Commerce</a><br> -->


    
  </div>
</div>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Types Of All State Boards</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ol>
      <li>
        <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/cbse.php"; ?>">
        <img height="30" src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/images/cbse.jfif"; ?>" alt="">
      CENTRAL BOARD OF SECONDARY EDUCATION, NEW DELHI
      </a>

      </li>
     
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

      <li>
      <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/E-book-project/Frontend/boards/bie.php"; ?>">
        <img height="30" src="https://pbs.twimg.com/profile_images/1065518279601512448/1Ks8b0Yf_400x400.jpg" alt="">
        BOARD OF INTERMEDIATE EDUCATION, ANDHRA PRADESH
      </a>
      </li>

      <li>
      <a href="">
        <img height="30" src="https://i2.wp.com/govinfo.me/wp-content/uploads/2018/03/Board-of-Secondary-Education-Andhra-Pradesh.png?ssl=1" alt="">
        BOARD OF SECONDARY EDUCATION, ANDHRA PRADESH


      </a>
      </li>

      <li>
      <a href="">
        <img height="30" src="https://sebaonline.org/seba_logo_color_small.png" alt="">
        BOARD OF SECONDARY EDUCATION, ASSAM


      </a>
      </li>

      <li>
      <a href="">
        <img height="30" src="https://upload.wikimedia.org/wikipedia/en/a/a4/BSER-Logo.png" alt="">
        BOARD OF SECONDARY EDUCATION, RAJASTHAN
            </a>
      </li>

    
    </ol>
    
    
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>