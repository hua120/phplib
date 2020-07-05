<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-05 18:30:40
 * @Last Modified by:   Hua Hua
 * @Last Modified time: 2020-07-05 18:44:19
 */


set_time_limit(0);
ob_start();

$pad = str_repeat(' ', 5000);

echo $pad,'<br>';
ob_flush();
flush();

$i=1;
while($i++){
	echo $pad,'<br>';
	echo $i,'<br>';
	ob_flush();
	flush();
	sleep(1);
}
