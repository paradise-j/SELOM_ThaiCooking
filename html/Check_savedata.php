<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    session_start();
    require_once "../connect.php";
    try {
       
        if (isset($_POST['submit'])) {
            $company = $_POST['company'];
            $date = $_POST['date'];
            $name = $_POST['name'];
            $quan = $_POST['quan'];
            $code = $_POST['code'];
            $course = $_POST['course'];
            $price = $_POST['price'];
            $tname = $_POST['tname'];
            
            $pb = $db->query("INSERT INTO `savedata`(`com_name`, `date`, `name`, `quantity`, `code`, `course`, `price`, `teacher_name`) VALUES 
                                                    ('$company','$date','$name','$quan','$code','$course','$price','$tname')");
            $pb->execute();


            if ($pb) {
                $_SESSION['success'] = "เพิ่มข้อมูลเรียบร้อย";
                echo "<script>
                    $(document).ready(function() {
                        Swal.fire({
                            title: 'สำเร็จ',
                            text: 'เพิ่มข้อมูลเรียบร้อย',
                            icon: 'success',
                            timer: 5000,
                            showConfirmButton: false
                        });
                    })
                </script>";
                header("refresh:1; url=InExType.php");
            } else {
                $_SESSION['error'] = "เพิ่มข้อมูลเรียบร้อยไม่สำเร็จ";
                header("location: InExType.php");
            }      
        }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
   }
?>