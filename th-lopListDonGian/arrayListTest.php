<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 27/10/2018
 * Time: 21:55
 */
include "th-lopListDonGian.php";
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(6);
echo $listInteger->get(3)."<br>";
//echo $listInteger->get(4)."<br>";
