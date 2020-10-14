/
  ID:602110191;
  name:Wang Zexue;
  wechat name:Wang
/
<?php
    printf("Input one number : ");
    fscanf(STDIN,"%d", $a);
    printf("Input other number : ");
    fscanf(STDIN,"%d", $b);
    If ($a==$b) printf("$a equal $b");
    else if($a < $b) printf( "$a less than $b"); 
    else printf( "$a greater $b");