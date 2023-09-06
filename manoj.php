<?php
    // $img='<img src="./cards/PrinceVerma.jpg" alt="">';
    $img="./cards/Manoj_Verma.jpg";
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($img) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($img));
    
    // Read the file and output it to the browser
    readfile($img);

?>
