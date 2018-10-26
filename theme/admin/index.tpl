Test

{if isset($data)}
    {foreach from=$data key=name item=chapter}
        <div>
            {$name}
            {if isset($chapter.controller_data)}
                {foreach from=$chapter.controller_data item=controllers}
                    {$controllers.title}
                {/foreach}
            {/if}
        </div>
    {/foreach}
{/if}