{if $data.news}
    <h2>{$lab.word_003}</h2>
    {foreach from=$data.news item=one_news}
        <div style="padding:0 0 5px 0;">
            <h3><a href="/{$controllers.news}/{$one_news.path}.html" title="{$one_news.title}">{$one_news.title}</a></h3>
            <div>{$one_news.text|truncate:100}</div>
        </div>
    {/foreach}
{/if}