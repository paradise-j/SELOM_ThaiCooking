<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
    session_start();
    require_once "../connect.php";
    try {
       
        if (isset($_POST['submit'])) {
            $company = $_POST['company']; echo "company = ".$company."<br>";
            $date = $_POST['date']; echo "date = ".$date."<br>";
            $name = $_POST['name']; echo "name = ".$name."<br>";
            $quan = $_POST['quan']; echo "quan = ".$quan."<br>";
            $code = $_POST['code']; echo "code = ".$code."<br>";
            $course = $_POST['course']; echo "course = ".$course."<br>";
            $price = $_POST['price']; echo "price = ".$price."<br>";
            $tname = $_POST['tname']; echo "tname = ".$tname;
            
            $pb = $db->query("INSERT INTO `savedata`(`com_name`, `date`, `name`, `quantity`, `code`, `course`, `price`, `teacher_name`) VALUES 
                                                    ('$company','$date','$name',$quan,'$code','$course',$price,'$tname')");
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
                header("refresh:1; url=BookingData.php");
            } else {
                $_SESSION['error'] = "เพิ่มข้อมูลเรียบร้อยไม่สำเร็จ";
                header("location: BookingData.php");
            }      
        }
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
   }
?>