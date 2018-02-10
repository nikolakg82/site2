{extends file="structure/skel.tpl"}
{block name=cell_container}
    <div class="SiteWidth Auto SiteContent">
        <div class="CellContainer Table Full">
            {block name=left_cell}
                {include file='structure/left_cell.tpl'}
            {/block}
            {block name=center_cell}{/block}
            {block name=right_cell}
                {include file='structure/right_cell.tpl'}
            {/block}
        </div>
        <div class="Clear"></div>
    </div>
{/block}