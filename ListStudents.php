<!DOCTYPE html>
<html>
    <body>
    <h2> Student File  </h2>  
    <table border=1>
        <tr>
            <td>Student ID</td>
            <td>Student Name</td>
            <td>Student Email</td>
            <td>Student DOB</td>
            <td>Student Phone no</td>
            <td>Student Class ID</td>



<?php
 //studentID~studentName~Email~DOB~PhoneNUmber~ClassID
 include_once "function.php";
fileTableCreator("students.txt");


?>
<tr>
<td>
   <button><a href="AddStudent.html">Add</a></button> 
   <button><a href="#">Update</a></button> 
   <button><a href="#">Delete</a></button> 
</td>
</tr>
</table>
</body>
</html>