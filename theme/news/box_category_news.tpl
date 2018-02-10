{if $data}
    <h2>{$lab.word_004}</h2>
    {foreach from=$data item=one_category}
        <div style="padding:0 0 5px 0;">
            <h4><a href="/{$controllers.news}/{$one_category.path}.html" title="{$one_category.title}">{$one_category.title}</a></h4>
        </div>
    {/foreach}
{/if}