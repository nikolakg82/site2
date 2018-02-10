{block name=right_cell}
    <div class="RightCell TableCell Top">
        <div class="Content">
            {block name=right_cell_news_category}
                {php}
                    $objController = CregistryController::load(CMS_C_NEWS);
                    $objController->get_view()->box_category();
                {/php}
            {/block}
        </div>
    </div>
{/block}