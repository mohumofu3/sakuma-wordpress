<?php

// 変数
$num = 1;
echo $num;
$num = $num + 1;
echo $num;
$num += 2;
echo $num;

// 配列
$members = []; // array()
$members[0] = 'yamada';
$members[1] = 'tanaka';
$members[2] = 'suzuki';
echo $members[1]; //tanaka

// 連想配列
$human = [];
$human['hand'] = '手';
$human['leg'] = '足';
$human['face'] = '顔';
echo $human['hand']; // 手