<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-06 16:32:48
 * @Last Modified by:   Hua Hua
 * @Last Modified time: 2020-07-06 17:09:44
 */
sleep(3);

if(empty($_FILES)){
	exit('no files selected');
}

$error = $_FILES['pic']['error'] == 0 ? 'success' : 'fail';

// echo "<script>parent.document.getElementById('msg').innerHTML='$error'</script>";

echo "<script>parent.document.getElementById('progress').innerHTML='$error'</script>";
