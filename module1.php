<!doctype html>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>
<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"test/".$file_name);
        $text1='python D:\xampp2\htdocs\imagehac\malariacell.py D:/xampp2/htdocs/imagehac/test/'.$file_name;
	#echo $text1;
	$command = escapeshellcmd($text1);
	$output = shell_exec($command);
	echo($output);
      }else{
         print_r($errors);
      }
   }
   #echo $file_name;
   
	$text1='python D:\xampp2\htdocs\imagehac\malariacell.py D:/xampp2/htdocs/imagehac/test/'.$file_name;
	#echo $text1;
	$command = escapeshellcmd($text1);
	$output = shell_exec($command);
	echo($output);

?>