<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$lang|lower}" xml:lang="{$lang|lower}">
    <head>
        <title>{block name=site_title}{$config.site_title}{/block}</title>
        <meta name="description" content="{block name=site_description}{$config.site_description}{/block}" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <link href="/design/css/css.css" rel="stylesheet" type="text/css" />
        {if $ch_lang}
            {foreach from=$ch_lang key=key_lang item=one_lang}
                {if $one_lang.path}
                    <link rel="alternate" href="{$domain}{$one_lang.path}" hreflang="{$key_lang|lower}" />
                {/if}
            {/foreach}
        {/if}
    </head>
    <body>
        <div class="Full Hidden">
            {block name=header}
                {include file='structure/header.tpl'}
            {/block}
            {block name=cell_container}{/block}
            {block name=footer}
                {include file='structure/footer.tpl'}
            {/block}
        </div>
    </body>
</html>
