 0.23 KB | None |  
     
<?php
 
   $arr=array("12","13","14","15");
   $n=count($arr);
   for($i=0;$i<$n;$i=$i+1)
   {
    echo $arr[$i]."<br>";
   }
   $s=array("s1 MCA"=>"60","s3 MCA"=>"30");
   foreach($s as $v =>$s)
   echo $v,"=",$s,"<br>";
 
 
 
?>
