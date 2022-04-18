<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript">
      document.getElementById("captcha").addEventListener("submit",function(evt)
        {
        
        var response = grecaptcha.getResponse();
        if(response.length == 0) 
        { 
          //reCaptcha not verified
          alert("please verify you are humann!"); 
          evt.preventDefault();
          return false;
        }
        //captcha verified
        //do the rest of your validations here
        
      });
    </script>

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" method="POST" action="cek_login.php" id="captcha">
  <img class="mb-4" src="assets/brand/user-login-icon.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
  <label class="sr-only">Password</label>
  <input type="password" name="password" class="form-control" placeholder="Password" required>

  <div class="g-recaptcha" data-sitekey="6LdbwNYcAAAAAEwNH_0oOiCbaq9De8bbau39-XRb "></div>

  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log in</button>
</form>


    
  </body>
</html>
