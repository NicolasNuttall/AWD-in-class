{extends file="layouts/main.tpl"}
{block name="body"}
<div class="glide">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/burger.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/chicken.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/egg.jpg');"></div>
                            <h3>Recipe name</h3> 
                        </div></li>
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/noodles.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/pasta.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>                       
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/pierogi.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/rice.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>
                        <li class="glide__slide"><div class="recipe-slide-card">
                            <div class="recipe-slide-card-img" style="background-image:url('./recipe-images/roll.jpg');"></div>
                            <h3>Recipe name</h3>
                        </div></li>
                    </ul>
                </div>
                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left darkBut" data-glide-dir="<">
                        <i class="fa fa-arrow-circle-left"></i>
                    </button>
                    <button class="glide__arrow glide__arrow--right darkBut" data-glide-dir=">">
                        <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>
            </div>
            <h1 class="mb-4 pb-2">Welcome to StudentEat</h1>
            <div class="row">
                <div class="col-lg-9">
                    <p>Never run out of recipe ideas, we are here to provide you with an endless amount of affordable recipes.</p>
                    <p>In a hurry? No need to compromise even if you're pressed for time - we've stacks of delicious recipes that are simple, quick and easy to make.</p>                
                    <a href="categories.php" class="btn btn-studenteat">Browse recipes</a>
                </div>
                <div class="col-lg-3">
                    <img src="./images/plate.png" alt="Plate of food">
                </div>
            </div>
{/block}