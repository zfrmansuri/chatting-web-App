

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

  
  <div class="wrapper">
    <section class="form login">
      <header>forget password</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Enter your Email id </label>
          <input type="text" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div class="field input">
          <label>Enter your new Password</label>
          <input type="password" name="password" id="password" placeholder=" password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
        
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now!</a></div>
      
      
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  
  
</body>
</html>
