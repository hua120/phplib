<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-05 21:46:55
 * @Last Modified by:   Hua Hua
 * @Last Modified time: 2020-07-05 23:24:26
 */
if(mt_rand(1,10) < 4){
	echo 0;
}else{
	$num = (int) file_get_contents('./01.txt');
	$num += 1;
	file_put_contents('./01.txt', $num);

	echo 1;
}
