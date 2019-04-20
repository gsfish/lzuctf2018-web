<?php

$ext_list = array('jpg','jpeg','png');
$type_list = array('image/jpeg', 'image/png');
$max_size = 10000000;
$target_path = 'uploads/';

if (isset($_FILES['upload'])) {
    $upload_name = $_FILES['upload']['name'];
    $upload_ext = substr($upload_name, strrpos($upload_name, '.')+1);
    $upload_size = $_FILES['upload']['size']; 
    $upload_type = $_FILES['upload']['type']; 
    $upload_tmp  = $_FILES['upload']['tmp_name']; 

    if (is_uploaded_file($upload_tmp) && $_FILES['upload']['error'] == 0) {
        $target_file = $target_path . $upload_name;
        if (!move_uploaded_file($upload_tmp, $target_file)) {
            die('Upload failed: move error');
        }
    } else {
        die('Upload failed: upload error');
    }
    
    if ($upload_size <= $max_size &&
        in_array($upload_ext, $ext_list) &&
        in_array($upload_type, $type_list)) {
        echo "<a href='${target_file}'>${upload_name}</a> 上传成功 (=￣ω￣=)";
    } else {
        unlink($target_file);
        echo '上传失败。我们只接受 JPEG/PNG 格式的图片哦 (￣_￣ )';
    }
}

?>