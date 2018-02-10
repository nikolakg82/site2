{block name=pagination}
    {if $data.pagination.first}
        <a href="{$data.pagination.first}">
    {/if}
    Prva
    {if $data.pagination.first}
        </a>
    {/if}
    {if $data.pagination.previous}
        <a href="{$data.pagination.previous}">
    {/if}
    Predhodna
    {if $data.pagination.previous}
        </a>
    {/if}

    {if $data.pagination.beginPoint}
        ...
    {/if}

    {foreach key=key from=$data.pagination.page item=page}
        {if $page}
            <a href="{$page}">
        {/if}
        {$key}
        {if $page}
            </a>
        {/if}
    {/foreach}

    {if $data.pagination.endPoint}
        ...
    {/if}

    {if $data.pagination.next}
        <a href="{$data.pagination.next}">
    {/if}
    Sledeca
    {if $data.pagination.next}
        </a>
    {/if}

    {if $data.pagination.last}
        <a href="{$data.pagination.last}">
    {/if}
    Poslednja
    {if $data.pagination.last}
        </a>
    {/if}
{/block}