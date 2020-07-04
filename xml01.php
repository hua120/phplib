<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-04 21:38:40
 * @Last Modified by:   Hua Hua
 * @Last Modified time:  2020-07-04 21:54:49
 */

$dom = new Domdocument('1.0','utf-8');

$t1 = $dom->createTextNode('天龙八部');

$name = $dom->createElement('name');

$name->appendChild($t1);

$cdata = $dom->createCDATASection('天龙<>八八是盗版书;"');

$intro = $dom->createElement('intro');

$intro->appendChild($cdata);

$goods = $dom->createElement('goods');

$goods->appendChild($intro);

$goods->appendChild($name);

$attr = $dom->createAttribute('goods_id');

$attr->value = 'j0001';

$goods->appendChild($attr);

$appstore = $dom->createElement('appstore');

$appstore->appendChild($goods);

$dom->appendChild($appstore);

header('content-type: text/xml');

echo $dom->savexml();	//直接输出

// $dom->save('03.xml');	直接保存
