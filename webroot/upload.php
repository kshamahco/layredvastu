<?php
if(isset($_FILES['upload']['name'])){
    $file = $_FILES['upload']['tmp_name'];
    $file_name = $_FILES['upload']['name'];
    $file_name_array = explode(".", $file_name);
    $extension = end($file_name_array);
 
    $new_image_name = time() . rand(). '.' . $extension;
    chmod('img/blogs', 0777);
    $allowed_extension = array("jpg", "gif", "png");
    if(in_array($extension, $allowed_extension)){
        move_uploaded_file($file, 'img/blogs/' . $new_image_name);
        $function_number = $_GET['CKEditorFuncNum'];
        $url = 'https://www.layeredvastu.com/img/blogs/' . $new_image_name;
        echo $url;die;
    }
}
?>