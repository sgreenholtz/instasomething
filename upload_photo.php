<?php
    $filename = $_FILES['user_file']['name'];
    $filesize = $_FILES['user_file']['size'];
    $directory = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
    $uploadFile = $directory . $filename;
    
    if (file_exists($_FILES['user_file']['tmp_name']))
    {
        if (move_uploaded_file($_FILES['user_file']['tmp_name'], $uploadFile))
        {
            echo 'The file is valid and was successfully uploaded.  <br />';
            echo "The file, $filename, is $filesize bytes.<br />";

        }else{
          echo 'The file was not moved';
        }
    }
    else
    {
        echo "The file is not there!";
    }

?>