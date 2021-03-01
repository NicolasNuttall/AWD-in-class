<?php

$Category = new Category($Conn);
$categories = $Category->getCategories();

$smarty->assign("categories",$categories);

if($_POST){
    if(!$_POST['recipe_name']){
        $error = "Recipe name not set";
    }else if(!$_POST['recipe_instructions']){    
        $error = "Recipe instructions not set";
    }else if(!$_POST['recipe_time']){    
        $error = "Recipe time not set";
    }else if(!$_POST['recipe_servings']){    
        $error = "Recipe servings not set";
    }else if(!$_FILES['recipe_image']['name']) {
        $error = "Please upload a recipe image";    
    }

    if($error){
        $smarty->assign('error',$error);
    }else{
        $random = substr(str_shuffle(MD5(microtime())),0,10);
        $new_file_name = $random . $_FILES['recipe_image']['name'];

        if(move_uploaded_file($_FILES['recipe_image']['tmp_name'],__DIR__."/../user-images/" . $new_file_name)){
            $Recipe = new Recipe($Conn);
            $_POST['recipe_image'] = $new_file_name;
            $attempt = $Recipe->addRecipe($_POST);

            if($attempt){
                $smarty->assign('success',"Your recipe has been uploaded");
            }else{
                $smarty->assign("error", "Error occured");
            }


        }
    }
        
}