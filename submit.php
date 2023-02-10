<?php
require 'function.php';

if(isset($_POST['email'])){
    setFlashData('success', 'Islem basarili bir sekilde tamamlandi.');
    redirect('index.php');
}else{
    setFlashData('error', 'Islem sirasinda bir sorun olustu.');
    redirect('index.php');
}