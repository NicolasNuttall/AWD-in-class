<?php
$cat_id=$_GET['id'];
$Recipe = new Recipe($Conn);
$recipes = $Recipe->getRecipesFromCategory($cat_id);
$smarty->assign("recipes",$recipes);
$Category= new Category($Conn);
$category= $Category->getCategory($cat_id);
$smarty->assign("category",$category);