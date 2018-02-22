{extends file="structure/center_cel.tpl"}
{block name=data}
    <h1>{if isset($data.category)}{$data.category.title}{else}{$lab.word_002}{/if}</h1>
    {if isset($data.news)}
        {foreach from=$data.news item=one_news}
            <div style="padding:0 0 5px 0;">
                <h2><a href="/{$controllers.news}/{$one_news.path}.html">{$one_news.title}</a></h2>
                <div>{$one_news.text}</div>
                <div>{$one_news.date|date_format:"d.m.Y."}</div>
            </div>
        {/foreach}
        {if isset($data.pagination)}
            {block name=pagination}
                {include file='structure/pagination.tpl'}
            {/block}
        {/if}
    {else}
        {include file='structure/info.tpl' message=$lab.word_005}
    {/if}
{/block}