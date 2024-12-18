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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Booking Details</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php include('../sidebar.php');?>
        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <center><h3 class="card-header ">Booking Details</h3></center>
                    <div class="row mt-1 ms-2">
                        <div class="col-md-3 mb-2">
                            <!-- <a class="btn btn-primary" style="border-radius: 30px; font-size: .8rem;" type="submit">เพิ่มข้อมูลรายการรายรับ-รายจ่าย</a> -->
                            <a href="SaveData.php" class="btn btn-primary" style="border-radius: 30px; font-size: .8rem;" type="submit">Add Booking Details</a>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap mb-3">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Company name</th>
                                    <th>Datetime</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Code</th>
                                    <th>Course</th>
                                    <th>Price</th>
                                    <th>Teacher's name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $stmt = $db->query("SELECT * FROM `savedata`");
                                    $stmt->execute();
                                    $ints = $stmt->fetchAll();
                                    $count = 1;
                                    if (!$ints) {
                                        echo "<p><td colspan='6' class='text-center'>ไม่พบข้อมูล</td></p>";
                                    } else {
                                        foreach($ints as $int)  {  
                                ?>
                                <tr align="center">
                                    <td><?= $int['com_name']; ?></td>
                                    <td><?= $int['date']; ?></td>
                                    <td><?= $int['name']; ?></td>
                                    <td><?= $int['quantity']; ?></td>
                                    <td><?= $int['code']; ?></td>
                                    <td><?= $int['course']; ?></td>
                                    <td><?= $int['price']; ?></td>
                                    <td><?= $int['teacher_name']; ?></td>
                                </tr>
                                <?php
                                        }      
                                    }?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
