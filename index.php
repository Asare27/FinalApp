<?php

 include 'connect.php';
// Assuming you've established a database connection here

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatPassword = $_POST["repeat_password"];

    // Check if passwords match
    if ($password === $repeatPassword) {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute SQL statement to insert data into the 'users' table
        $pdo = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $pdo->execute([$name, $email, $hashedPassword]);

        // Redirect to a success page or perform other actions after successful registration
        echo "You are now registered";
        header("Location: login.php");
        exit();
    } else {
        // Passwords don't match, handle the error (e.g., display an error message)
        echo "Passwords do not match!";
    }
}
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <form  method="POST">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example1c" class="form-control" name="name" />
                            <label class="form-label" for="form3Example1c">Your Name</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" class="form-control" name="email" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4c" class="form-control" name="password" />
                            <label class="form-label" for="form3Example4c">Password</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="form3Example4cd" class="form-control" name="repeat_password" />
                            <label class="form-label" for="form3Example4cd">Repeat your password</label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <a href="login.php">Click Here to Login</a>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg" name="submit">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="draw1.jpg"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

 </form>
    



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


    </script>
  </body>
</html>