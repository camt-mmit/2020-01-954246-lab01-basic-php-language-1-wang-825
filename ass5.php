/
  ID:602110191;
  name:Wang Zexue;
  wechat name:Wang
/
<?php
   printf("Input usage unit : ");
   fscanf(STDIN, "%d", $a);
   if ($a==0) printf ("price of electricity bill=0");
   if($a>=1 && $a<=5) printf("price of electricity bill=10");
   if($a>=6 && $a<=10) printf("price of electricity bill %f\n",$price=3*($a-5)+10);
   if($a>=11 && $a<=15) printf("price of electricity bill %f\n",$price=5*($a-10)+3*(10-5)+10);
   if($a>=16) printf("price of electricity bill %f\n",$price=10*($a-15)+5*(15-10)+3*(10-5)+10);
   