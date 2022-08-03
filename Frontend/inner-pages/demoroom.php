<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wi-Fi Publications | Coaching Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
}

body {
  font-family: "Poppins", sans-serif;
  line-height: 1.6;
  color: #1a1a1a;
  font-size: 1.6rem;
  overflow-x: hidden;
}
a {
  color: #2196f3;
  text-decoration: none;
}

.container {
  display: grid;
  grid-template-rows: minmax(min-content, 100vh);
  grid-template-columns: repeat(2, 50vw);
}
.heading-secondary {
  font-size: 3rem;
}
.heading-primary {
  font-size: 2rem;
}
.span-blue {
  color: #2196f3;
}
.signup-container,
.signup-form {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}
.signup-container {
  width: 100vw;
  padding: 10rem 10rem;
  align-items: flex-start;
  justify-content: flex-start;

  grid-column: 1 / 2;
  grid-row: 1;
}
.signup-form {
  max-width: 45rem;
  width: 100%;
}
.text-mute {
  color: #aaa;
}

.input-text {
  font-family: inherit;
  font-size: 1.8rem;
  padding: 3rem 5rem 1rem 2rem;
  border: none;
  border-radius: 2rem;
  background: #eee;
  width: 100%;
} 
.form-select
{
    font-family: inherit;
  font-size: 1.8rem;
  padding: 3rem 5rem 1rem 2rem;
  border: none;
  border-radius: 2rem;
  background: #eee;
  width: 100%; 
}
.input-text:focus {
  outline-color: #2196f3;
}

.btn {
  padding: 2rem 3rem;
  border: none;
  background: #2196f3;
  color: #fff;
  border-radius: 1rem;
  cursor: pointer;
  font-family: inherit;
  font-weight: 500;
  font-size: inherit;
}
.btn-login {
  align-self: flex-end;
  width: 100%;
  margin-top: 2rem;
  box-shadow: 0 5px 5px #00000020;
}
.btn-login:active {
  box-shadow: none;
}
.btn-login:hover {
  background: #2180f9;
}
.inp {
  position: relative;
}
.label {
  pointer-events: none;

  position: absolute;
  top: 2rem;
  left: 2rem;
  color: #00000070;
  font-weight: 500;
  font-size: 1.8rem;

  transition: all 0.2s;
  transform-origin: left;
}
.input-text:not(:placeholder-shown) + .label,
.input-text:focus + .label {
  top: 0.7rem;
  transform: scale(0.75);
}
.input-text:focus + .label {
  color: #2196f3;
}

.input-icon {
  position: absolute;
  top: 2rem;
  right: 2rem;
  font-size: 2rem;
  color: #00000070;
}
.input-icon-password {
  cursor: pointer;
}

.btn-google {
  color: #222;
  background: #fff;
  border: solid 1px #eee;
  padding: 1.5rem;

  display: flex;
  justify-content: center;
  align-items: center;

  box-shadow: 0 1px 2px #00000020;
}

.btn-google img {
  width: 3rem;
  margin-right: 1rem;
}

.login-wrapper {
  max-width: 45rem;
  width: 100%;
}
.line-breaker .line {
  width: 50%;
  height: 1px;
  background: #eee;
}
.line-breaker {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #ccc;

  margin: 3rem 0;
}
.line-breaker span:nth-child(2) {
  margin: 0 2rem;
}

.welcome-container {
  background: #eeeeee75;
  grid-column: 2 / 3;
  grid-row: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 10rem;
}
.lg {
  font-size: 6rem;
}
.welcome-container img {
  width: 100%;
}

@media only screen and (max-width: 700px) {
  html {
    font-size: 54.5%;
  }
}

@media only screen and (max-width: 600px) {
  .signup-container {
    padding: 5rem;
  }
}
@media only screen and (max-width: 400px) {
  html {
    font-size: 48.5%;
  }

  .input-text:not(:placeholder-shown) + .label,
  .input-text:focus + .label {
    top: 0.6rem;
    transform: scale(0.75);
  }
  .label {
    font-size: 1.9rem;
  }
}

@media only screen and (max-width: 1200px) {
  .signup-container {
    grid-column: 1 / 3;
    grid-row: 1/3;
  }
  .welcome-container {
    display: none;
  }
}

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

  </style>
   
  <div class="container">
  <main class="signup-container">
    <h5 class="heading-primary"> COACHING SIGN UP<span class="span-blue">.</span></h5>
    
        
    <div class="login-wrapper">
    
     
    </div>

    <form class="signup-form">
      
      <select class="form-select py-4" aria-label="Default select example">
      <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
</select>
       
      <label class="inp">
        <input type="number" class="input-text" placeholder="&nbsp;" id="password">
        <span class="label">PIN CODE</span>
        <!-- <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span> -->
      </label>
      <label class="inp ">
        <input type="text" class="input-text" placeholder="&nbsp;" id="password">
        <span class="label">INSTITUTE NAME</span>
        <!-- <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span> -->
      </label>
      <label class="inp">
        <input type="text" class="input-text" placeholder="&nbsp;" id="password">
        <span class="label">DIRECTOR NAME</span>
        <!-- <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span> -->
      </label>
      <label class="inp">
        <input type="number" class="input-text" placeholder="&nbsp;" id="password">
        <span class="label">MOB. NO</span>
        <!-- <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span> -->
      </label>
      <button class="btn btn-login bg-info">SUBMIT</button>
    </form>
   
  </main>
  <div class="welcome-container">
    
    <img src="../images/home-banner__illust.svg" alt="">
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
  </body>
</html>