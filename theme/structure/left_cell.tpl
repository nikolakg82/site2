{block name=left_cell}
    <div class="LeftCell TableCell Top">
        <div class="Content">
            {block name=left_cell_news}
                {php}
                    cms\lib\help\ControllerLoader::load(CMS_C_NEWS)->boxLatestNews();
                {/php}
            {/block}
        </div>
    </div>
{/block}