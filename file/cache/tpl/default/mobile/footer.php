<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if($share_icon == 'auto') { ?><div class="share_icon"><img src="<?php echo DT_PATH;?>apple-touch-icon-precomposed.png"/></div><?php } ?>
<?php if($foot) { ?>
<div class="foot-bar-fix"></div>
<div class="foot-bar">
<ul>
<li class="icon-buy<?php if($foot=='home') { ?>-on<?php } ?>
"><a href="index.php" data-transition="none" data-ajax="false"><span>我要买</span></a></li>
<li class="icon-sell<?php if($foot=='channel') { ?>-on<?php } ?>
"><a href="index.php?moduleid=6" data-transition="none"><span>我要卖</span></a></li>
<li class="icon-msg<?php if($foot=='message') { ?>-on<?php } ?>
"><a href="message.php" data-transition="none"><span>聊生意</span></a><?php if($_message || $_chat || $_cart) { ?><em></em><?php } ?>
</li>
<li class="icon-my<?php if($foot=='my') { ?>-on<?php } ?>
"><a href="my.php" data-transition="none"><span>我的</span></a></li>
</ul>
</div>
<?php } ?>
<?php if($DT_MOB['browser'] == 'weixin' || $DT_MOB['browser'] == 'qq') { ?>
<script type="text/javascript">
$(document).on('pageshow', function(event) {
    $("[data-role='page']").each(function(i) {
        if($(this).attr('class').indexOf('-active') != -1) {
            $(this).find('.share_icon img').css('display', 'block');
        } else {
            $(this).find('.share_icon img').css('display', 'none');
        }
    });
});
</script>
<?php } ?>
</div>
</body>
 
</html>