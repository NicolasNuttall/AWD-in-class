<?php

$Category = new Category($Conn);
$categories = $Category->getCategories();

$smarty->assign("categories",$categories);