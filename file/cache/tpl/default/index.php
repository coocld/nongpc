<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php include template('header');?>
<!-- <div id="ipad_tips" style="display:none;"></div>
 -->
<div class="m clearfix">
<div class="topr">
<div><?php echo ad(14);?></div>
</div>


<div class="side-info f_l">
<div class="iuser">
<?php if($_userid) { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?>" rel="nofollow" class="iuser_u" title="商务中心">商务中心</a>
<a href="<?php echo $MODULE['2']['linkurl'];?>edit.php" rel="nofollow" class="iuser_e" title="资料">资料</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>" rel="nofollow" class="iuser_m" title="发布信息">发布信息</a>
<?php } else { ?>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_login'];?>" rel="nofollow" class="iuser_l" title="登录">登录</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_register'];?>" rel="nofollow" class="iuser_r" title="注册">注册</a>
<a href="<?php echo $MODULE['2']['linkurl'];?><?php echo $DT['file_my'];?>" rel="nofollow" class="iuser_m" title="发布信息">发布信息</a>
<?php } ?>

</div>

<div class="box_head">
<div id="site_stats">
<ul>
<li>产品总数:<span><?php echo $db->count($DT_PRE.'sell_5', 'status=3', 1800);?></span></li>
<li>求购总数:<span><?php echo $db->count($DT_PRE.'buy_6', 'status=3', 1800);?></span></li>
<li>企业总数:<span><?php echo $db->count($DT_PRE.'company', '1', 1800);?></span></li>
<li>在线会员:<span><?php echo $db->count($DT_PRE.'online', '1', 1800);?></span></li>
</ul>
</div>
<a href="<?php echo $EXT['announce_url'];?>"><strong>网站动态</strong></a>
</div>
<div class="box_body li_dot">
<div class="announce"><?php echo tag("table=announce&condition=(totime=0 or totime>$today_endtime-86400)&areaid=$cityid&pagesize=3&datetype=2&order=listorder desc,addtime desc&target=_blank");?></div>
</div>
<div class="box_head" style="margin-top: 15px;">
<span class="f_r"><a href="/quote/product.php" rel="nofollow" class="g">更多»</a></span>
<a href="/quote/product.php"><strong>最新报价</strong></a>
</div>
<div class="box_body top-baojia" style="height: 230px;">
<div class="top-baojia-head clearfix">
                  <span class="row1">品名</span>
                  <span class="row3">时间</span>
                  <span class="row4">批发价</span>
              </div>
 <ul class="top-baojia-list" id="top-baojia-list">
              <?php if($DT['page_price'] && isset($MODULE['7'])) { ?> 
<?php $tags=tag("table=quote_product&condition=level>0 &areaid=$cityid&pagesize=14&order=addtime desc&length=14&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li class="top-baojia-item clearfix">
<span class="row1"><a href="<?php echo $MODULE['7']['linkurl'];?><?php echo rewrite('price.php?itemid='.$t['itemid']);?>"><?php echo $t['title'];?></a></span>
                <span class="row3"><?php echo date('m-d', $t['edittime']);?> </span>
                <span class="row4 red"><?php echo $t['price'];?>元/<?php echo $t['unit'];?></span>
              </li>
<?php } } ?>


<?php } ?>
              
              </ul>
</div>
</div>
</div>
<div class="m">
<div style="margin: 15px 0">
<table width="100%" cellspacing="0" cellpadding="0" >
<tr align="center">
<td><?php echo ad(20);?></td>
<td><?php echo ad(21);?></td>
<td><?php echo ad(22);?></td>
<td><?php echo ad(23);?></td>
<td><?php echo ad(24);?></td>
<td><?php echo ad(25);?></td>
</tr>
</table>
</div>
</div>
<div class="m">
<?php if($DT['page_com']) { ?>
<div class="box_head">
<span class="f_r"><a href="<?php echo $MODULE['4']['linkurl'];?>" rel="nofollow" class="g">更多&raquo;</a></span>
<a href="<?php echo $MODULE['4']['linkurl'];?>"><strong>优质商家</strong></a>
</div>
<div class="box_body li_dot">
<?php echo tag("moduleid=4&condition=vip>0 and catids<>''&areaid=$cityid&order=fromtime desc&pagesize=10&template=list-com");?>
</div>
<?php } ?>
</div>
<div class="m">
<?php if($DT['page_trade']) { ?>
<div class="supper">
<div class="box_head">
<span class="f_r"><a href="<?php echo $MODULE['16']['linkurl'];?>" rel="nofollow" class="g">更多»</a></span>
<a href="<?php echo $MODULE['16']['linkurl'];?>"><strong>供应大厅</strong></a>
</div>
<div class="box_body">
<?php echo tag("moduleid=16&condition=status=3&areaid=$cityid&pagesize=".$DT['page_trade']."&datetype=2&target=_blank&order=addtime desc&pagesize=12&template=list-sup");?>

</div>
</div>
<div class="purch">
<div class="box_head">
<span class="f_r"><a href="<?php echo $MODULE['6']['linkurl'];?>" rel="nofollow" class="g">更多»</a></span>
<a href="<?php echo $MODULE['6']['linkurl'];?>"><strong>采购大厅</strong></a>
</div>
<div class="box_body">
<div class="purch-title clearfix">
<span class="row1">发布时间</span>
<span class="row2">采购产品</span>
<span class="row6">采购总量</span>
<span class="row3">所在地区</span>
<span class="row4">联系人</span>
<span class="row5"></span>
</div>
<ul class="purch-list clearfix">
<?php echo tag("moduleid=6&condition=status=3&areaid=$cityid&pagesize=".$DT['page_trade']."&datetype=2&target=_blank&order=addtime desc&pagesize=10&template=list-pur");?>

</ul>
</div>
</div>
<?php } ?>
</div>
<div class="m b15">&nbsp;</div>
<div class="m">
<div class="news clearfix">
<div class="new-mark">
<div class="box_head">
<span class="f_r"><a href="<?php echo $MODULE['7']['linkurl'];?>" rel="nofollow" class="g">更多»</a></span>
<a href="<?php echo $MODULE['7']['linkurl'];?>"><strong>市场行情</strong></a>
</div>
<div class="new-cont box_body">
<?php echo tag("moduleid=7&condition=status=3&areaid=$cityid&pagesize=".$DT['page_quote']."&datetype=2&order=addtime desc&target=_blank&pagesize=5&template=list-new");?>

</div>
</div>
<div class="new-price">
<div class="box_head">
<span class="f_r"><a href="/quote/product.php" rel="nofollow" class="g">更多»</a></span>
<a href="/quote/product.php"><strong>最新报价</strong></a>

</div>
<div class="new-price-cont">
<div class="new-price-head clearfix">
                  <span class="row1">品名</span>
                  <span class="row2">地区</span>
                  <span class="row3">时间</span>
                  <span class="row4">批发价</span>
                  <span class="row5">涨跌</span>
              </div>
              <ul class="new-price-list">
              <?php if($DT['page_price'] && isset($MODULE['7'])) { ?> 
<?php $tags=tag("table=quote_product&condition=level>0 &areaid=$cityid&pagesize=14&order=addtime desc&length=14&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li class="new-price-item clearfix">
<span class="row1"><a href="<?php echo $MODULE['7']['linkurl'];?><?php echo rewrite('price.php?itemid='.$t['itemid']);?>"><?php echo $t['title'];?></a></span>
                <span class="row2"><?php echo area_pos($t['areaid'], '/', 2);?> </span>
                <span class="row3"><?php echo date('m-d', $t['edittime']);?> </span>
                <span class="row4 red"><?php echo $t['price'];?>元/<?php echo $t['unit'];?></span>
                <span class="row5 green">→</span>
              </li>
<?php } } ?>


<?php } ?>
              
              </ul>
</div>
</div>
<div class="new-trade">
<div class="box_head">
<span class="f_r"><a href="<?php echo $MODULE['21']['linkurl'];?>" rel="nofollow" class="g">更多»</a></span>
<a href="<?php echo $MODULE['21']['linkurl'];?>"><strong>行业资讯</strong></a>

</div>
<div class="new-cont box_body">
<?php $tags=tag("moduleid=21&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=hits desc&pagesize=5&template=list-new");?>

</div>
</div>

</div>
</div>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/index.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/marquee.js"></script>
<script type="text/javascript">
new dmarquee(22, 10, 3000, 'site_stats');
new dmarquee(62, 10, 1000, 'top-baojia-list');
</script>
<?php include template('footer');?>