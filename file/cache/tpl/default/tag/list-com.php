<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="company-list clearfix">
    <?php if(is_array($tags)) { foreach($tags as $t) { ?>
    <li class="company-item">
        <a href="<?php echo $t['linkurl'];?>" class="company-link">
            <div class="com-photo">
                <img src="<?php echo $t['thumb'];?>">
            </div>
            <div class="company-mc">
                <div class="com-name"><?php echo $t['company'];?></div>
                <div class="com-adress"><span class="orange">所在地址：</span><?php echo area_pos($t['areaid'], '/', 2);?></div>
                <div class="com-sell"><span class="orange">主营产品：</span><?php echo $t['business'];?></div>
                <div class="com-tag">
                    <span class="tag tag-phone"></span>
                </div>
            </div>
            
        </a>
    </li>
    <?php } } ?>
</ul>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
