<?php
  session_start();
  require_once '../connect.php';
?>
<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>Save Data</title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include('../sidebar.php');?>
        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card mb-4">
                <div class="card-body">
                  <form action="Check_savedata.php" method="POST">
                    <div class="row mb-3">
                      <div class="col-md-3">
                          <label for="defaultSelect" class="form-label">Company name</label>
                          <select id="defaultSelect" class="form-select" style="border-radius: 30px;" name="company" required>
                            <option>please choose.......</option>
                            <option value="Thaiclub">Thaiclub</option>
                            <option value="klook">klook</option>
                            <option value="cookly">cookly</option>
                            <option value="Bemygeust">Bemygeust</option>
                            <option value="Toto">Toto</option>
                            <option value="hana">hana</option>
                            <option value="itc">itc</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                        <label for="defaultInput" class="col-form-label">Datetime</label>
                          <div class="col-md-10">
                            <input class="form-control" type="date" style="border-radius: 30px;" name="date" required> 
                          </div>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-md-3">
                        <label for="defaultInput" class="form-label">Name</label>
                        <input id="defaultInput" class="form-control" type="text" style="border-radius: 30px;" name="name" required>
                      </div>
                      <div class="col-md-1">
                        <label for="defaultInput" class="form-label">Quantity</label>
                        <input id="defaultInput" class="form-control" type="text" style="border-radius: 30px;" name="quan" required>
                      </div>
                      <div class="col-md-2">
                        <label for="defaultInput" class="form-label">Code</label>
                        <input id="defaultInput" class="form-control" type="text" style="border-radius: 30px;" name="code" required>
                      </div>
                      <div class="col-md-2">
                        <label for="defaultInput" class="form-label">Course</label>
                        <select id="defaultSelect" class="form-select" style="border-radius: 30px;" name="course" required>
                          <option>please choose.......</option>
                          <option value="Course 1 (Monday)">Course 1 (Monday)</option>
                          <option value="Course 2 (Tuesday)">Course 2 (Tuesday)</option>
                          <option value="Course 3 (Wednesday)">Course 3 (Wednesday)</option>
                          <option value="Course 4 (Thursday)">Course 4 (Thursday)</option>
                          <option value="Course 5 (Friday)">Course 5 (Friday)</option>
                          <option value="Course 6 (Saturday)">Course 6 (Saturday)</option>
                          <option value="Course 7 (Sunday)">Course 7 (Sunday)</option>
                        </select>
                      </div>
                      <div class="col-md-1">
                        <label for="defaultInput" class="form-label">Price</label>
                        <input id="defaultInput" class="form-control" type="text" style="border-radius: 30px;" name="price" required>  
                      </div>
                      <div class="col-md-3">
                        <label for="defaultInput" class="form-label">Teacher's name</label>
                        <input id="defaultInput" class="form-control" type="text" style="border-radius: 30px;" name="tname" required>
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary" style="border-radius: 30px;">Add Booking</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/form-basic-inputs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
