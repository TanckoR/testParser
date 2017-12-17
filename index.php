<?php 
    header('Content-Type: text/html; utf-8; charset=UTF-8'); 
    $ch = curl_init('https://novomarket.net/categories/pylesosy'); 
    //Установка опций 
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    curl_setopt($ch, CURLOPT_HEADER, 0);     
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    $html=curl_exec($ch); 
    curl_close($ch); 
   
    preg_match_all('/price-number">(.*?)<\/div/',$html,$prodPrice); 
    preg_match_all('/products-view-name-link".*?>(.*)?<\/a/',$html,$prodName);
    preg_match_all('/<img[^>]*?src=\"(.*)\"/iU',$html,$prodPic);
    echo '<pre>'; 
    print_r($prodName[1]);
    print_r($prodPrice[1]);   
    print_r($prodPic);    
    echo '</pre>';
?>