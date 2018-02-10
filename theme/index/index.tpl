{extends file="structure/skel.tpl"}
{block name=cell_container}
    <div class="SiteContent IndexData">
        <div class="SiteWidth Auto">
            Test index
            <br />
            {$lang}
            <br />
            {$controllers.news}
            <br />
            {$controller}
        </div>
    </div>
{/block}
{block name=site_title}{$config.site_title_home}{/block}