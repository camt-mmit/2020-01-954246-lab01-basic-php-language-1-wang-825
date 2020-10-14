/
  ID:602110191;
  name:Wang Zexue;
  wechat name:Wang
/
<?php
  printf("input price : ");
  fscanf(STDIN, "%d", $a);
  printf("input discount : ");
  fscanf(STDIN, "%f", $b,);
  printf("price %d,discount %f,net %.2f\n", $a,$b=$a*($b/100),$c=$a-$b);
 