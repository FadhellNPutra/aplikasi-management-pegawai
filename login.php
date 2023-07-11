<!DOCTYPE HTML>
<html lang="en" class="h-100">
   <head>
      <title>Login Aplikasi</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <link rel="stylesheet" href="css/style.css"> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body class="h-100 ng-info d-flex align-items-center">
      <div class="container">
         <div class="row">
            <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
               <h3 class="text-center text-info pb-3 mb-3 border-bottom">Login Aplikasi</h3>
               <form method="POST" action="ceklogin.php">
                  <input type="text" placeholder="Username" id="username" name="username" class="form-control form-control-lg mb-3">
                  <input type="password" placeholder="Password" id="password" name="password" class="form-control form-control-lg mb-3">
                  <input type="submit" value="Login" class="btn btn-info btn-lg btn-block">
               </form>
            </div>
         </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>