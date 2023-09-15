<?php include('header.php');?>

<body>

    <div class="container">
        <form action="index.php" method="POST">
            <label for="">الاسم الاول+العائله+(ام كذا)</label><br>
            <input type="text" name="teacher_name" required><br>
            <label for=""> التخصص والمواد بينهم فواصل </label><br>
            <input type="text" name="subject"><br>
            <label for="">الاحياء التي تناسبك بينهم فاصل </label><br>
            <input type="text" name="place" required><br>
            <label for="">رقم الجوال</label><br>
            <input type="tel" required name="phone"><br>
            <label for=""> الجنسيه</label><br>
            <input type="text" name="nationality"><br>
            <input type="submit" name="submit" value="سجل">

        </form>

    </div>
    <?php

include('./inc/connection.php');
   $teacher_name= $_POST['teacher_name'];
    $subject= $_POST['subject'];
  $place= $_POST['place'];
   $phone= $_POST['phone'];
 $nationality= $_POST['nationality'];

if(isset($_POST['submit']) and isset($teacher_name) and isset($_POST['subject']) and isset($place) and isset($phone) and isset( $nationality)){
$insert = "INSERT INTO  fuldata_teacher values('','$teacher_name',' $subject', '$place', '$phone','$nationality')";
  $q = mysqli_query($conn, $insert);
  if ($q) {
    echo"<p style='color:green';text >". "تم الارسال"."</p>" ;
} else {
    echo "<p style='color:green'>" ."   تواصل مع صاحب الموقع لم يتم الارسال"."</p>";
}


}


?>



</body>

</html>