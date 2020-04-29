

<?php
 require_once 'vendor/autoload.php';
 use App\classes\Student;
 $message='';

  if(isset($_POST['btn'])){
     $message= Student::saveStudentInfo($_POST);

 }
?>
<a href="add-student.php">Add Students</a>||
<a href="view-student.php">view Students</a>
<h1><?php echo $message?></h1>

<form action="" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" </td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="text" name="mobile" </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit" </td>
        </tr>
    </table>
</form>