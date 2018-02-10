{extends file="structure/center_cel.tpl"}
{block name=data}
    <h1>{$data.title}</h1>
    <div>
        {$data.text}
    </div>
{/block}
{block name=site_title prepend}{$data.title}{if $data.category.title} - {$data.category.title}{/if} - {/block}