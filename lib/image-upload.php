<?php
    // function imageUpload($uploadFile, $uploadPath) {
    //     if(isset($uploadFile)) {
    //         $errors= array();
    //         $file_name = $uploadFile['name'];
    //         $file_size = $uploadFile['size'];
    //         $file_tmp = $uploadFile['tmp_name'];
    //         $file_type= $uploadFile['type'];
    //         //$file_ext=strtolower(end(explode('.',$uploadFile['name'])));
    //         $file_ext = pathinfo($uploadFile['name'], PATHINFO_EXTENSION);

    //         $expensions= array("jpeg","jpg","png","gif");
            
    //         if(in_array($file_ext,$expensions)=== false) {
    //            $errors[]="Extension not allowed, please choose a JPEG or PNG or GIF file.";
    //         }
            
    //         if($file_size > 2097152) {
    //            $errors[]='File size must be less than 2 MB';
    //         }
            
    //         if(empty($errors)==true) {
    //            move_uploaded_file($file_tmp,$uploadPath.$file_name);
    //            return $file_name;
    //         } else {
    //            echo $errors[0];
    //            return "";
    //         }
    //     }
    // }

    // function fileUpload($uploadFile, $uploadPath) {
    //     if(isset($uploadFile)) {
    //         $errors= array();
    //         $file_name = $uploadFile['name'];
    //         $file_size = $uploadFile['size'];
    //         $file_tmp = $uploadFile['tmp_name'];
    //         $file_type= $uploadFile['type'];
    //         //$file_ext=strtolower(end(explode('.',$uploadFile['name'])));
    //         $file_ext = pathinfo($uploadFile['name'], PATHINFO_EXTENSION);

    //         $expensions= array("pdf","doc","docx","txt");
            
    //         if(in_array($file_ext,$expensions)=== false) {
    //            $errors[]="Extension not allowed, please choose a pdf or doc or docx file.";
    //         }
            
    //         if(empty($errors)==true) {
    //            move_uploaded_file($file_tmp,$uploadPath.$file_name);
    //            return $file_name;
    //         } else {
    //            echo $errors[0];
    //            return "";
    //         }
    //     }
    // }
?>