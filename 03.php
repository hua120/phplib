<?php

/**
 * @Author: Hua Hua
 * @Date:   2020-07-04 22:16:58
 * @Last Modified by:   Hua Hua
 * @Last Modified time : 2020-07-04 22:29:23
 */

$dom = new Domdocument('1.0','utf-8');

$dom->load('./02.xml');

$t1 = $dom->getElementsByTagName('goods')->item(0);

$t1->parentNode->removeChild($t1);

//接下来修改name的子节点

$name = $dom->getElementsByTagName('name')->item(0);

$seven = $dom->createTextNode('七种武器');

$name->replaceChild($seven,$name->firstChild);

header('content-type: text/xml');
echo $dom->savexml();

