<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-07 00:59:33
 * @Last Modified by:   Hua Hua
 * @Last Modified time: 2020-07-07 01:04:36
 */

if(!file_exists('./upload/up.wmv')){
	move_uploaded_file($_FILES['part']['tmp_name'], './upload/up.wmv');
}else{
	file_put_contents('./upload/up.wmv', file_get_contents($_FILES['part']['tmp_name']),FILE_APPEND);
}

echo "ok";
