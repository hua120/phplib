<?php

/**
 * php通过socket发送http GET请求
 */

$fp  =  fsockopen ( "ssl://www.163.com" ,  443 ,  $errno ,  $errstr ,  30 );
// var_dump($fp);exit;	文件句柄
if (! $fp ) {
    echo  " $errstr  ( $errno )<br />hello\n" ;
} else {
     $out  =  "GET / HTTP/1.1\r\n" ;
     $out  .=  "Host: www.163.com\r\n" ;
     $out  .=  "Connection: Close\r\n\r\n" ;
     fwrite ( $fp ,  $out );
    while (! feof ( $fp )) {
        echo  fgets ( $fp ,  128 );
    }
     fclose ( $fp );
}
