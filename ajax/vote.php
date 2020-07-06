<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-05 21:46:55
 * @Last Modified by:   Hua Hua
 * @Last Modified time: 2020-07-05 23:23:44
 */
$num = (int) file_get_contents('./01.txt');
$num += 1;
file_put_contents('./01.txt', $num);

header('HTTP/1.1 204 No Content');
