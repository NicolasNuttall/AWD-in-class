<?php
    $Recipe = new Recipe($Conn);
    $recipes = $Recipe->getRecipes($_SESSION);
    
    $smarty->assign("recipes",$recipes);