<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
  
  <body class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 mx-auto">

                <!-- registration form -->
                <div class="card">
                    <h6 class="card-title text-center">Registration</h6>
                    <hr>
                    <!-- registration form code -->
                    <form class="p-2">
                        <!-- name input -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="enter your name" name="name">
                        </div>
                        <!-- name input ends -->

                        <!-- number input -->
                        <div class="mb-3">
                            <label class="form-label">Number</label>
                            <input type="number-to-text" class="form-control" placeholder="enter your number" number="number">
                        </div>
                        <!-- number input ends -->

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email" name="email">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="inputPassword" placeholder="enter your password"
                           name="password">
                           
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Retype your password" id="confirmPassword" 
                            name="password" onkeyup="verify()">
                        </div>
                        <p id="password" class="text-danger" style="display:none"; ></p>
                
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                      <!-- registration form ends -->
                </div>
            </div>
        </div>
    </div>

























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- custom js -->
<script src="./assests/js/main.js"></script>

  </body>
</html>