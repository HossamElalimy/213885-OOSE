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
 $myfile=fopen("students.txt","r+") or die("Unable to open file");
 while(!feof($myfile))
    {
     $line=fgets($myfile);
     echo"<tr>";
     $ArrayLine=explode("~",$line);
     for($i=0;$i<count($ArrayLine);$i++)
     {
     echo"<td>".$ArrayLine[$i]."</td>";
     }
     echo "</tr>";
    }
 fclose($myfile);

?>
</table>
</body>
</html>