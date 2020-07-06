<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-06 18:39:11
 * @Last Modified by:   Hua Hua
 * @Last Modified time: 2020-07-06 18:48:03
 */

print_r($_FILES);

if(empty($_FILES)){
	exit('没有文件被上传');
}

if($_FILES['pic']['error'] != 0) {
	exit('fail');
}

move_uploaded_file($_FILES['pic']['tmp_name'], './upload/'.$_FILES['pic']['name']);

echo "ok";
