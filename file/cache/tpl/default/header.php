<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<?php } ?>
<?php if($head_mobile) { ?>
<meta http-equiv="mobile-agent" content="format=html5;url=<?php echo $head_mobile;?>">
<?php } ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico?v=1"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico?v=1"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<?php if($EXT['archiver_enable']) { ?>
<link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>style.css"/>
<?php if($moduleid>4) { ?><link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $module;?>.css"/><?php } ?>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?><?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<![endif]-->
<?php if(!DT_DEBUG) { ?><script type="text/javascript">window.onerror=function(){return true;}</script><?php } ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/common.js"></script>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/page.js"></script>
<?php if($lazy) { ?><script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/jquery.lazyload.js"></script><?php } ?>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<?php $searchid = ($moduleid > 3 && $MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) ? $moduleid : 16;?>
<script type="text/javascript">
<?php if($head_mobile && $EXT['mobile_goto']) { ?>
GoMobile('<?php echo $head_mobile;?>');
<?php } ?>
var searchid = <?php echo $searchid;?>;
<?php if($itemid && $DT['anticopy']) { ?>
document.oncontextmenu=function(e){return false;};
document.onselectstart=function(e){return false;};
<?php } ?>
</script>
</head>
<body>
<div class="head" id="head">
<div class="head_m">
<div class="f_r" id="destoon_member"></div>
<div class="head_l">
<ul>
<?php if($DT['city']) { ?><li class="h_city">[<span id="destoon_city"><?php echo $city_name;?></span>] <a href="<?php echo DT_PATH;?>api/city.php" title="点击切换城市" rel="nofollow">切换</a></li><?php } ?>
<li class="h_fav"><script type="text/javascript">addFav('收藏本页');</script></li>
<!-- <?php if($EXT['mobile_enable']) { ?><li class="h_mobile"><a href="<?php echo $EXT['mobile_url'];?>mobile.php">手机版</a>&nbsp;</li><?php } ?>
 -->
<!-- <?php if($head_mobile) { ?><li class="h_qrcode"><a href="javascript:Dqrcode();">二维码</a>&nbsp;</li><?php } ?>
 -->
<?php if(isset($MODULE['16'])) { ?><li class="h_cart"><a href="<?php echo $MODULE['16']['linkurl'];?>cart.php" rel="nofollow">购物车</a>(<span class="head_t" id="destoon_cart">0</span>)</li><?php } ?>
</ul>
</div>
</div>
</div>
<?php if($moduleid==1) { ?>
<div class="m"><?php echo ad(26);?></div>
<?php } ?>
<?php if($head_mobile) { ?><div id="destoon_qrcode" style="display:none;"></div><?php } ?>
<!-- <div class="m head_s" id="destoon_space"></div> -->
<div class="m clearfix">
<div class="logo f_l"><a href="<?php echo $MODULE['1']['linkurl'];?>"><img src="<?php if($MODULE[$moduleid]['logo']) { ?><?php echo DT_SKIN;?>image/logo_<?php echo $moduleid;?>.gif<?php } else if($DT['logo']) { ?><?php echo $DT['logo'];?><?php } else { ?><?php echo DT_SKIN;?>image/logo.gif<?php } ?>
" alt="<?php echo $DT['sitename'];?>"/></a></div>
<div class="top-bar-right">
<form id="destoon_search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" onsubmit="return Dsearch(1);">
<input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="destoon_moduleid"/>
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<div class="head_search" onmouseover="this.className='head_search_on';" onmouseout="this.className='head_search';">
<div>
<input name="kw" id="destoon_kw" type="text" class="search_i" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>请输入关键词<?php } ?>
" onfocus="if(this.value=='请输入关键词') this.value='';"<?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech/><input type="text" id="destoon_select" class="search_m" value="<?php echo $MODULE[$searchid]['name'];?>" readonly onfocus="this.blur();" onclick="$('#search_module').fadeIn('fast');"/><input type="submit" value=" " class="search_s"/>
</div>
<div id="search_module" style="display:none;" onmouseout="Dh('search_module');" onmouseover="Ds('search_module');">
<?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu'] && !$m['islink']) { ?><a href="javascript:void(0);" onclick="setModule('<?php echo $m['moduleid'];?>','<?php echo $m['name'];?>')"><?php echo $m['name'];?></a><?php } ?>
<?php } } ?>
</div>
</div>
</form>
<div class="head_search_kw"><!-- <a href="" onclick="Dsearch_top();return false;"><strong>标王</strong></a>
<a href="" onclick="Dsearch_adv();return false;"><strong>热搜：</strong></a> -->
<span id="destoon_word"><?php echo tag("moduleid=$searchid&table=keyword&condition=moduleid=$searchid and status=3&pagesize=10&order=total_search desc&template=list-search_kw");?></span></div>
  <div id="search_tips" style="display:none;"></div>
</div>
</div>
<div class="menu">
<ul class="clearfix m">
<li class="market">
<span>正农市场</span>
<div class="topl">
<?php if($DT['page_catalog']) { ?>
<!-- <div class="icatalog_head">
<div class="dt"><a href="#">我的关注</a></div>
</div> -->
<div class="icatalog_body">
<div class="icatalog">
<?php $mid = 16;?>
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if($i<12 && $c['child']) { ?>
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
<dl class="cate cate<?php echo $i ?>">
<dt class="cat-tit"><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $c['linkurl'];?>" target="_blank"><?php echo set_style($c['catname'], $c['style']);?></a></dt>
<dd class="cat-sub ">
<?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
<?php if($j<2) { ?><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?></a><?php } ?>
<?php } } ?>
</dd>
</dl>
<?php } ?>
<?php } } ?>
</div>
</div>
<?php } ?>
</div>
<div class="panel">
<?php $mid = 16;?>
<?php $child = get_maincat(0, $mid, 1);?>
<?php if(is_array($child)) { foreach($child as $i => $c) { ?>
<?php if($i<8 && $c['child']) { ?>
<?php $sub = get_maincat($c['catid'], $mid, 1);?>
          <div class="item item<?php echo $i ?>">
            <div class="sub-cate">
            <?php if(is_array($sub)) { foreach($sub as $j => $s) { ?>
             <dl>
            <dt><a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $s['linkurl'];?>" target="_blank"><?php echo set_style($s['catname'], $s['style']);?><i>&gt;</i></a></dt>
            <dd>
            <?php $sun = get_maincat($s['catid'], $mid, 1);?>
<?php if(is_array($sun)) { foreach($sun as $m => $n) { ?>
            <a href="<?php echo $MODULE[$mid]['linkurl'];?><?php echo $n['linkurl'];?>" target="_blank"><?php echo set_style($n['catname'], $n['style']);?></a>
<?php } } ?>
</dd>
</dl>
<?php } } ?>
            </div>
            <?php if($i==0) { ?>
            <div class="sub-rcmd">
<?php echo ad(28);?><?php echo ad(29);?><?php echo ad(30);?>
            </div>
<?php } else if($i==1) { ?>
<div class="sub-rcmd">
            </div>
            <?php } else if($i==2) { ?>
<div class="sub-rcmd">
            </div>
            <?php } else if($i==3) { ?>
<div class="sub-rcmd">
            </div>
            <?php } else if($i==4) { ?>
<div class="sub-rcmd">
            </div>
            <?php } else if($i==5) { ?>
<div class="sub-rcmd">
            </div>
            <?php } else if($i==6) { ?>
<div class="sub-rcmd">
            </div>
            <?php } else if($i==7) { ?>
<div class="sub-rcmd">
            </div>
             <?php } ?>
          </div>
          <?php } ?>
<?php } } ?>
        </div>
</li>
<li<?php if($moduleid<4) { ?> class="menuon"<?php } ?>
><a class="menu-link" href="<?php echo $MODULE['1']['linkurl'];?>"><span>首页</span></a></li><?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu']) { ?><li<?php if($m['moduleid']==$moduleid) { ?> class="menuon"<?php } ?>
><a class="menu-link" href="<?php echo $m['linkurl'];?>"<?php if($m['isblank']) { ?> target="_blank"<?php } ?>
><span<?php if($m['style']) { ?> style="color:<?php echo $m['style'];?>;"<?php } ?>
><?php echo $m['name'];?></span></a></li><?php } ?>
<?php } } ?></ul>
</div>
