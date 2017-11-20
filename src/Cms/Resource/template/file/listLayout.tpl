{foreach $files as $file}
    <li>
        <a class="insert ui-icon ui-icon-circle-plus" {if $file['class']=="video"}data-poster="{$file['poster']}"{/if} data-typ="{$file['class']}" href="{$file['full']}" title="dodaj"></a>
        <a class="delete ui-icon ui-icon-circle-minus" data-file="{$file['title']}" data-id="{$file['id']}" title="usuń"></a>
        {if $file['class']=="video"}<a class="edit ui-icon ui-icon-pencil" data-name="{$file['title']}" data-id="{$file['id']}" title="edytuj"></a>{/if}

        {if $file['class']=="image"}<div class="thumbbox image" style="background:url({$file['thumb']})"></div>{/if}
        {if $file['class']=="audio"}<a class="edit b_audio ico i_play" data-id="{$file['id']}" href="#odtworz"></a><div class="thumbbox audio"><audio src="{$file['full']}" {if $file['poster']}poster="{$file['poster']}"{/if}></audio></div>{/if}
        {if $file['class']=="video"}<a class="edit b_video ico i_play" data-id="{$file['id']}" href="#odtworz"></a><div class="thumbbox video"><video src="{$file['full']}" {if $file['poster']}poster="{$file['poster']}"{/if}></video></div>{/if}
    </li>	
{/foreach}