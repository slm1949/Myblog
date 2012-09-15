<?php 
                    
$host="localhost";   //服务器名
$user="root";        //登录数据库的用户名
$password="6515" ;        //登录数据库的密码

$my_connect=mysql_connect($host,$user,$password);  //打开数据库
if($my_connect)
         {
         echo "数组库连接成功";                      //数据库连接成功提示
         mysql_select_db("MY_blog",$my_connect);    //选择数据库
         $sql="select * from blog20122";            //SQL语句
         $result=mysql_query($sql,$my_connect);     //执行SQL语句，之前把$my_connect写成了$my_connnt了，要细心了
         echo mysql_error();                        //SQL语句执行错误提示
         print_r(mysql_fetch_array($result));      //把读出来的数据信息（数组）显示出来
         
         mysql_close($my_connect);                 //关闭数据库
   
          }
         else{echo "数据库连接失败";}              //数据库连接错误提示



 ?>

