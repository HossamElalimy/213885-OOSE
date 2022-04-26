<?php
 $_POST["StudentID"];
 $_POST["StudentName"];
 $_POST["StudentMail"];
 $_POST["StudentDOB"];
 $_POST["StudentNumber"];
 $_POST["StudentClass"];

$SID=$_POST["StudentID"];
$Sname= $_POST["StudentName"];
$Smail= $_POST["StudentMail"];
$SDOB= $_POST["StudentDOB"];
$Snumber= $_POST["StudentNumber"];
$Sclass=$_POST["StudentClass"];
$record=$SID."~".$Sname."~".$Smail."~".$SDOB."~".$Snumber."~".$Sclass;
$myfile=fopen("students.txt","a+");
{
fwrite($myfile,$record."\r\n");
fclose($myfile);

}
header("location:ListStudents.php");

?>