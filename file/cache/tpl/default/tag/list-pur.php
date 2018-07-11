<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li class="purch-item">
    <span class="row1"><?php echo $t['adddate'];?></span>
    <span class="row2"><?php echo $t['title'];?></span>
    <span class="row6"><?php echo $t['amount'];?></span>
    <span class="row3"><?php echo area_pos($t['areaid'], '/', 2);?></span>
    <span class="row4"><?php echo $t['truename'];?></span>
    <span class="row5"><a href="<?php echo $t['linkurl'];?>" class="purch-btn">查看详情</a></span>
</li>
<?php } } ?>
