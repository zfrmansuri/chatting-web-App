

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>startchat </title>
  <link rel="stylesheet" href="styless.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
<div class="navbar">
                <div class="logo">
                   <a href=""> <img src="bag/wp2731080.gif" width="80px" height="50px"></a>
                   <h3>CHATING</h3>
                </div>
                
                </div>
  <div class="wrap">
    <img src="bag/icon_sign_up.png" alt="" >
    <p>if you are new user to this chating app then click on below link to signup</p>
    <a href="index.php" ><button>signup</button></a><br>
    <div class="for"><a href="forget.php">Forget Password?</a></div>
  </div>
  <div class="wrapper">
    <section class="form login">
      <header>Start Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Enter your Email id </label>
          <input type="text" name="email" id="emai" placeholder="Enter email" required>
        </div>
        <div class="field input">
          <label>Enter your Password</label>
          <input type="password" name="password" id="pass" placeholder=" password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      
      <!-- </div> -->
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
