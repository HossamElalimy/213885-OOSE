<?php
Function fileTableCreator($filename)
{
    $myfile=fopen($filename,"r+") or die("Unable to open file");
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
}
?>