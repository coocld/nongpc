<?php defined('IN_DESTOON') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $t) { ?>
<a href="<?php echo $t['linkurl'];?>" class="new-item">
    <h4 class="d-t"><?php echo $t['title'];?></h4>
    <p class="d-c"><?php echo dsubstr($t['introduce'], 105, '...');?> </p>
</a>
<?php } } ?>