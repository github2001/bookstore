<?php
if(!isset($_COOKIE['vi']))
{ //$_COOKIE['visits']�ĳ�ֵ�����ȷȷ�����ͼ���
  
  //setcookie("visits",1);
  $_COOKIE['vi']=0;
  echo "<br><b>��ӭ���<font color=red>".$_COOKIE['vi']."</font>�ι����ҵ���ҳ</b><br>";
  
}
else
{
 
 $visits=$_COOKIE['vi']+1;
 setcookie("vi",$visits,time()+3600);//�ȼ��� $_COOKIE['vi']=$visits;��$visits�ı�֮���ٸ���$_COOKIE['vi']
  //$_COOKIE['vi']��$visits��ϵ���ư�B+1����A���ٰ�A����B��
 echo "<br><b>���ǵ�<font color=red>".$visits."</font>�ι����ҵ���ҳ</b><br>";
}
?>