<!--[if lt IE 8]>
<header>
<![endif]-->
    <div class="Header">
        <div class="HeaderTop">
            <div class="SiteWidth Auto">
                <div class="Left">

                </div>
                <div class="Right">
                    {if $ch_lang}
                        {foreach from=$ch_lang key=key_lang item=one_lang}
                            {if isset($one_lang.path)}
                                <a href="{$one_lang.path}">
                            {/if}
                            {$one_lang.name}
                            {if isset($one_lang.path)}
                                </a>
                            {/if}
                        {/foreach}
                    {/if}
                </div>
                <div class="Clear"></div>
            </div>
        </div>
        <div class="HeaderMiddle">
            <div class="SiteWidth Auto">
                <div class="Left">
                    <div class="TableCell Middle Content Picture">
                        <a href="/{if $controllers.index}{$controllers.index}.html{/if}"><img src="/design/images/ims-groups-logo.png" /></a>
                    </div>
                </div>
                <div class="Right">
                    <div class="TableCell Middle Content">
                        <a href="/{if $controllers.index}{$controllers.index}.html{/if}">{$lab.word_001}</a> <a href="/{$controllers.news}.html">{$lab.word_002}</a>
                    </div>
                </div>
                <div class="Clear"></div>
            </div>
        </div>
    </div>
<!--[if lt IE 8]>
</header>
<![endif]-->