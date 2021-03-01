{extends file="layouts/main.tpl"}
{block name="body"}
    <h1 class="mb-4">The weather in {$location}</h1>
    <p>The current weather in {$location} is {$current_weather.weather[0].main}</p>
{/block}