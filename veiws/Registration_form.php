<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card shadow-lg">
                  <div class="card-body p-4">
                      <h2 class="text-center mb-4">Registration</h2>
                      <form action="../controllers/UserController.php" method="post">
                          <div class="mb-3">
                              <label for="fullName" class="form-label">Full Name</label>
                              <div class="input-group">
                                  <span class="input-group-text">
                                      <i class="bi bi-person-circle"></i>
                                  </span>
                                  <input type="text" class="form-control" id="fullName" name="fullName" required>
                              </div>
                          </div> 
                          <div class="mb-3">
                              <label for="login" class="form-label">Login</label>
                              <div class="input-group">
                                  <span class="input-group-text">
                                      <i class="bi bi-envelope"></i>
                                  </span>
                                  <input type="text" class="form-control" id="login" name="login" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="phoneNumber" class="form-label">Phone number</label>
                              <div class="input-group">
                                  <span class="input-group-text">
                                      <i class="bi bi-telephone"></i>
                                  </span>
                                  <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" required>
                              </div>
                          </div>
                          <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <div class="input-group">
                                  <span class="input-group-text">
                                      <i class="bi bi-lock"></i>
                                  </span>
                                  <input type="password" class="form-control" id="password" name="password" required>
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                          <div class="text-center mt-3">
                              <a href="./login_form.php">Already have an account?</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
<style>
    body {
        background: linear-gradient(135deg, #9932CC, #008080);
    }
</style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
