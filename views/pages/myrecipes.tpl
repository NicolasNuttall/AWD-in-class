{extends file="layouts/main.tpl"}
{block name="body"}
    <h1 class="mb-4 pb-2">My Recipes</h1>
    <div class="btn-group mb-3 role="group" aria-label="Account Menu">
        <a href="index.php?p=account" class="btn btn-secondary">Home</a>
        <a href="index.php?p=favourite" class="btn btn-secondary">Favourites</a>
        <a href="index.php?p=myrecipes" class="btn btn-secondary">My recipes</a>
        <a href="index.php?p=addrecipes" class="btn btn-secondary">Add recipes</a>
        <a href="index.php?p=changepassword" class="btn btn-secondary">Change password</a>
    </div>
    <div class="row">
        {foreach from=$recipes item=recipe}
            <p>{$recipe.recipe_name}</p>
        {/foreach}
    </div>
{/block}