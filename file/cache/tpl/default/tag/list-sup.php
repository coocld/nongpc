<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="supper-list clearfix">
    <?php if(is_array($tags)) { foreach($tags as $t) { ?>
    <li class="supper-item">
        <a href="<?php echo $t['linkurl'];?>" class="supper-link">
            <div class="photo"><img src="<?php echo str_replace('.thumb.'.file_ext($t['thumb']), '',$t['thumb']);?>"></div>
            <div class="supper-info">
                <div class="price orange clearfix"><span class="f_l">¥ <?php echo $t['price'];?>/<?php echo $t['unit'];?></span><span class="f_r">已售<?php echo $t['sales'];?><?php echo $t['unit'];?></span></div>
                <div class="proname"><?php echo $t['title'];?></div>
                <div class="uname"><?php echo $t['truename'];?></div>
                <div class="addres clearfix"><span class="f_l"><?php echo area_pos($t['areaid'], '/', 2);?></span><span class="f_r"><?php echo $t['adddate'];?></span></div>
            </div>
        </a>
    </li>
    <?php } } ?>
</ul>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
