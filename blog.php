<?php 
                    
$host="localhost";   //服务器名
$user="root";        //登录数据库的用户名
$password="6515" ;        //登录数据库的密码

$my_connect=mysql_connect($host,$user,$password);  //打开数据库
if($my_connect)
         {
         echo "成功<p>";
         mysql_select_db("MY_blog",$my_connect);
         $sql="select * from blog2012";
         $result=mysql_query($sql,$my_connent);
         print_r(mysql_fetch_array($result));     
         mysql_close($my_connect);  //关闭数据库
   
          }
         else{echo "fail";}

echo var_dump($_GET)."<p>";



 ?>

