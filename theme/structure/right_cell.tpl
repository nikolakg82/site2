{block name=right_cell}
    <div class="RightCell TableCell Top">
        <div class="Content">
            {block name=right_cell_news_category}
                {php}
                    cms\lib\help\ControllerLoader::load(CMS_C_NEWS)->boxCategories();
                {/php}
            {/block}
        </div>
    </div>
{/block}