/*首先在MYSQL新建数据库MY_blog,新建表blog2012
<?php
$host="localhost";   //服务器名
$user="root";        //登录数据库的用户名
$password=""         //登录数据库的密码
$blog_content="";   //定义bolg内容的变量
class BLOG                          //定义类BLOG
      {
        var $num;         //BLOG编号，作为表的主键
        var $title;
        var $content;
        var $created;
        var $updated;
      function add_blog()
         {
         $my_connect=mysql_connect($host,$user,$password);  //打开数据库
         if($my_connect){
             mysql_select_db("MY_blog",$my_connect);  //选择数据库
             $sql="INSERT INTO blog2012 
                    (num,title,content) VALUES 
                    ($this->num,$this->title,$this->content)";   //定义插入的sql语句   
                    mysql_query($sql,$my_connect); //执行插入
                    mysql_close($my_connect);  //关闭数据库
   
                       }
         else{
              echo "连接服务器失败";
              }
         
           }
      function  modify_blog()
         {
          $my_connect=mysql_connect($host,$user,$password); //打开数据库
         if($my_connect){
             mysql_select_db("MY_blog",$my_connect);  //选择数据库
             $sql="UPDATA  blog2012 
                    SET content=$this->content";   //定义修改的sql语句   
                    mysql_query($sql,$my_connect); //执行修改
                    mysql_close($my_connect);  //关闭数据库
                          }
         else{
              echo "连接服务器失败";
              }
            }
      function delete_blog()
         {
          $my_connect=mysql_connect($host,$user,$password);  //打开数据库
         if($my_connect){
             mysql_select_db("MY_blog",$my_connect);
             $sql="DELETE FROM blog2012 
                    WHERE num=$this->num";   //定义删除的sql语句   
                    mysql_query($sql,$my_connect); //执行删除
                    mysql_close($my_connect);  //关闭数据库 
         
                          }
         else{
              echo "连接服务器失败";
              }
           }



?>
