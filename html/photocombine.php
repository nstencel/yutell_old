
<?php
$Rimage = demo.jpg;
$my_img = imagecreate( 320, 180 );
$Yimage = imagecolorallocate( $Rimage );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
imagestring( $my_img, $Yimage );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );
?>
