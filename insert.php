<?php

$conn=mysql_connect("localhost","root","101389");
mysql_select_db("books",$conn);
$sql1="insert into products values('2','php����ʵ��','����','describe the basic knowledge of php','39.0','1')";
$sql2="insert into category values('1','tool','used to assist engineer','1')";
$sql3="insert into category values('2','fiction','interesing stories')";
 $result1=mysql_query($sql1,$conn);
 $result2=mysql_query($sql2,$conn);
 $result3=mysql_query($sql3,$conn);
 if(!($result1))
  echo "�����productsʧ��";
  if (!($result2))
  echo "�����categoryʧ��";
  if (!($result3))
  echo "�����category��ʧ����";
  else 
  echo "OK,sucessed!";
?>