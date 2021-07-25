<?php

include 'phpqrcode\qrlib.php';

$unique = uniqid (rand(), true);

createQRcode($unique);


function createQRcode($unique_number) {
            
    $text = $unique_number; 

    // $path variable to store  the QRcode image 
    $path = 'images/'; 
    $file = $path.uniqid().".png"; 
      
    // $ecc stores error correction capability('L') 
    $ecc = 'L'; 
    $pixel_Size = 10; 
    $frame_Size = 10; 
      
    // Generates QR Code and Stores it in directory given 
    QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size); 
      
    // Displaying the stored QR code from directory 
            
    echo"<a href='".$file."'>";
    echo "<center><img src='".$file."'></center>"; 
    echo"</a>";
}


?>