<?php
$conn=mysql_connect("localhost","root","101389")or die("�������ӷ�����".mysql_error());
   mysql_select_db("test",$conn)or die("����ѡ���ض����ݿ�".mysql_error());
   $result=mysql_query("select * from users",$conn);
//��������ȼ���mysql_db_query();
//$result=mysql_db_query("test","select *from users",$conn) or die("���������������ݿ���߲�ѯ������".mysql_error());
print "connect to mysql database sucessfully.<br>";
echo "<br>";

while($row=mysql_fetch_array($result))
{
   print "name:".$row[name];
   print "<br>id:".$row[id];
   print "<br>tel:".$row[tel];
   echo "<br><br>";
}//mysql_create_db(dbname,$conn);�������ݿ�
//mysql_drop_db(dbname,$conn);ɾ�����ݿ�
//mysql_list_dbs($conn);����������ݿ����飻
//mysql_list_tables(dbname);������б����飻
//mysql_list_fields(dbname,tablename,$conn);��������ֶΣ�
//mysql_tablename();��ʾ���ݿ���߱�����ֶ�����
$insert="insert into users(name,tel)values('��ٻ','10010')";//��phpʵ��mysql�Ĳ��롢ɾ�������²�����
mysql_query($insert,$conn)or die("�������ʧ�ܣ�".mysql_error());
print "������ļ�¼��id:".mysql_insert_id();
?>