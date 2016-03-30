<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>首页 - 游书网</title>
<meta name="Description" content="游书网(www.youshu.com)集小说搜索、追更阅读、读者评分、书单推荐于一体，不但可以追看小说最新更新，还可以解决书荒寻找到更多更好看的小说，在这里你可以阅读、评论、推荐、打分、吐槽，尽情的与其他书友一起分享关于阅读的快乐。欢迎大家加入游书网">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="icon" href="./images/logo.ico" type="image/x-icon">
<link rel="stylesheet" href="http://img.yousuu.com/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://img.yousuu.com/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="http://js.yousuu.com/css/toastr.min.css">
<link rel="stylesheet" href="http://js.yousuu.com/css/bootstrap-select.min.css">
<link rel="stylesheet" href="http://js.yousuu.com/css/bootstrap-switch.min.css">
<link rel="stylesheet" href="http://js.yousuu.com/my.css?v=1411">
<script src="http://cbjs.baidu.com/js/m.js"></script>
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<div class="navbar-header">
		<button data-toggle="collapse" data-target="#header-navbar" type="button" class="navbar-toggle"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="http://guiyu.org" style="padding:0;" class="navbar-brand"><img src="./images/logo.png" style="height:50px"></a>
	</div>
	<div id="header-navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://www.yousuu.com/booklist">所有书单</a></li>
			<li><a href="http://www.yousuu.com/comments">小说评论</a></li>
			<li class="hidden-xs"><a href="http://www.lkong.net/" target="_blank">龙空论坛</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="droupdown"><a href="http://www.yousuu.com/#" data-target="#login-modal-sm" data-toggle="modal">登录</a></li>
		</ul>
	</div>
	<div id="login-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" class="modal fade">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button data-dismiss="modal" class="close"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
					<h4 id="myModalLabel" class="modal-title">登录</h4>
				</div>
				<div class="modal-body">
					<p style="margin:5px 0;padding:10px;" class="bg-info">
						使用龙空的邮箱和密码登录优书网
					</p>
					<form style="padding:8px" method="post" action="http://www.yousuu.com/login" onsubmit="ys.common.login(this);return false;" class="login-form">
						<div class="control-group">
							<input id="login-name" type="text" placeholder="输入用户邮箱" class="form-control login-field"><label for="login-name" class="login-field-icon fui-user"></label>
						</div>
						<div class="control-group">
							<input id="login-pass" type="password" placeholder="输入密码" class="form-control login-field"><label for="login-pass" class="login-field-icon fui-lock"></label>
						</div>
						<button type="submit" href="#" class="btn btn-primary btn-large btn-block">登录</button>
						<hr>
						<a href="http://www.yousuu.com/signup" target="_blank" class="btn btn-success btn-block btn-large">还没有帐号？立即注册</a>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-default">关闭</button>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
<div class="sokk-body">
	<div class="container">
		<div class="row">
			<div class="sokk-index-left col-sm-3 col-md-3 col-lg-3 col-xs-12">
				<div class="hidden-xs">
					<ul style="background-color:#4596d3;" class="nav nav-stacked">
						<li class="start"><a href="http://www.yousuu.com/category/fantasy" target="_blank"><em class="pull-right">&gt;</em>玄幻奇幻</a></li>
						<li><a href="http://www.yousuu.com/category/wuxia" target="_blank"><em class="pull-right">&gt;</em>仙侠武侠</a></li>
						<li><a href="http://www.yousuu.com/category/city" target="_blank"><em class="pull-right">&gt;</em>现代都市</a></li>
						<li><a href="http://www.yousuu.com/category/history" target="_blank"><em class="pull-right">&gt;</em>历史军事</a></li>
						<li><a href="http://www.yousuu.com/category/game" target="_blank"><em class="pull-right">&gt;</em>游戏竞技</a></li>
						<li><a href="http://www.yousuu.com/category/future" target="_blank"><em class="pull-right">&gt;</em>科幻灵异</a></li>
						<li><a href="http://www.yousuu.com/category/doujin" target="_blank"><em class="pull-right">&gt;</em>同人短篇</a></li>
						<li><a href="http://www.yousuu.com/category/love" target="_blank"><em class="pull-right">&gt;</em>古代言情</a></li>
						<li><a href="http://www.yousuu.com/category/romance" target="_blank"><em class="pull-right">&gt;</em>现代言情</a></li>
						<li><a href="http://www.yousuu.com/category/fantasylove" target="_blank"><em class="pull-right">&gt;</em>玄幻言情</a></li>
						<li><a href="http://www.yousuu.com/category/literature" target="_blank"><em class="pull-right">&gt;</em>文学艺术</a></li>
					</ul>
				</div>
				<div style="margin:10px 0;" class="visible-xs">
					<a onclick="ys.common.showmenu(this);" data-offtext="关闭所有分类" data-ontext="查看所有分类" class="btn btn-block btn-primary">查看所有分类</a>
				</div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9 col-xs-12">
				<div class="center-block sokk-index-middle">
					<div class="online">
						<div style="margin-left:10px;" class="sd pull-right">
							<button onclick="ys.common.addbook()" class="btn btn-primary">添加新书</button>
						</div>
						<form id="globalsearchform" style="margin-bottom:10px;" onsubmit="ys.common.globalsearch();return false;" class="form">
							<div class="input-group">
								<input id="globalsearchtxt" type="text" name="searchTextInput" placeholder="输入书名/作者名/用户/书单" class="form-control"><span class="input-group-btn"><button type="button" onclick="ys.common.globalsearch()" class="btn btn-default">搜索</button></span>
							</div>
						</form>
					</div>
					<div class="panel panel-default sokk-index-middle-panel">
						<div class="panel-body">
							<div style="margin-bottom:10px;overflow-x:hidden;" class="visible-md-block visible-lg-block">
								<script>BAIDU_CLB_fillSlot("1120637");</script>
							</div>
							<div class="sokk-panel-table">
								<table class="table table-condensed sokk-index-middle-table">
								<thead>
								<tr>
									<th>
										书名
									</th>
									<th class="hidden-xs">
										作者
									</th>
									<th>
										章节
									</th>
									<th style="max-width:6em;">
										更新
									</th>
									<th align="right">
										<span class="hidden-xs">阅读</span>
									</th>
								</tr>
								</thead>
								<tbody class="bookname">
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/40144" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>学霸终结者</a>
									</td>
									<td class="hidden-xs">
										浙东匹夫
									</td>
									<td class="small">
										第十九章 衣冠禽兽
									</td>
									<td class="hidden-xs">
										5 小时前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(40144)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/34688" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>九符鬼书</a>
									</td>
									<td class="hidden-xs">
										林中之马
									</td>
									<td class="small">
										第384章 捕蝉
									</td>
									<td class="hidden-xs">
										5 小时前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(34688)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/38787" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>巅峰玩家</a>
									</td>
									<td class="hidden-xs">
										孤枫枭寒
									</td>
									<td class="small">
										194章 《抉择》收费
									</td>
									<td class="hidden-xs">
										7 小时前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(38787)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/35341" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>一剑飞仙</a>
									</td>
									<td class="hidden-xs">
										流浪的蛤蟆
									</td>
									<td class="small">
										三百三十七、“符文流”
									</td>
									<td class="hidden-xs">
										11 小时前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(35341)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/39258" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>修仙界移民</a>
									</td>
									<td class="hidden-xs">
										蓝色胡子
									</td>
									<td class="small">
										第302章 生亦何欢
									</td>
									<td class="hidden-xs">
										14 小时前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(39258)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/36235" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>执剑写春秋</a>
									</td>
									<td class="hidden-xs">
										殊彦
									</td>
									<td class="small">
										第139章 和皇后玩密室pla
									</td>
									<td class="hidden-xs">
										1 天前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(36235)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/39678" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>邪神旌旗</a>
									</td>
									<td class="hidden-xs">
										楚白
									</td>
									<td class="small">
										第188章
									</td>
									<td class="hidden-xs">
										1 天前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(39678)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/29084" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>死亡女神</a>
									</td>
									<td class="hidden-xs">
										九片竹叶
									</td>
									<td class="small">
										第三百六十二章 荒芜之地（57
									</td>
									<td class="hidden-xs">
										1 天前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(29084)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/22272" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>科技王座</a>
									</td>
									<td class="hidden-xs">
										急冻人
									</td>
									<td class="small">
										第286章 一起来山寨，可好？
									</td>
									<td class="hidden-xs">
										1 天前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(22272)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								<tr>
									<td>
										<a href="http://www.yousuu.com/book/34580" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>超级修理大师</a>
									</td>
									<td class="hidden-xs">
										八爪章鱼
									</td>
									<td class="small">
										第三百一十九章 活埋
									</td>
									<td class="hidden-xs">
										8 天前
									</td>
									<td style="min-width:43px;pading:1px;">
										<span><a onclick="ys.common.toshelf(34580)" class="btn btn-xs btn-primary">加入书架</a></span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
						<div class="panel-footer">
							<a href="http://www.yousuu.com/shelf" style="text-align:center;font-size: 14px;" class="center-block">点击进入书架</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_digestnew" class="visible-xs">龙空新书<span class="small"> 
字数(万)  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/digestnew" target="_blank" class="hidden-xs">龙空新书<span class="small">字数(万)</span></a>
					</div>
					<div id="bd_digestnew" class="panel-collapse collapse in">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">31.7</span>
								</p>
								<a href="http://www.yousuu.com/book/40133" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3679026.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/40133" target="_blank" class="bookname"><span>时空棋局</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="40133" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="40133" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="40133"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="40133"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">47.3</span>
								</p>
								<a href="http://www.yousuu.com/book/40682" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3683189.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/40682" target="_blank" class="bookname"><span>恣意人生</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="40682" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="40682" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="40682"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="40682"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">22.4</span>
								</p>
								<a href="http://www.yousuu.com/book/40673" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3683219.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/40673" target="_blank" class="bookname"><span>青玄道主</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="40673" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="40673" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="40673"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="40673"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">38.7</span>
								</p>
								<a href="http://www.yousuu.com/book/39928" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3676417.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/39928" target="_blank" class="bookname"><span>玄界之门</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="39928" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="39928" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="39928"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="39928"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">26.1</span>
								</p>
								<a href="http://www.yousuu.com/book/40058" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1576316-1451622145000.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/40058" target="_blank" class="bookname"><span>寒门贵子</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="40058" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="40058" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="40058"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="40058"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">17.9</span>
								</p>
								<a href="http://www.yousuu.com/book/41596" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3687132.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/41596" target="_blank" class="bookname"><span>偷香</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="41596" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="41596" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="41596"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="41596"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">131.7</span>
								</p>
								<a href="http://www.yousuu.com/book/34664" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3584300.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34664" target="_blank" class="bookname"><span>颤栗世界</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34664" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34664" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34664"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34664"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">105.9</span>
								</p>
								<a href="http://www.yousuu.com/book/34691" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3581496.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34691" target="_blank" class="bookname"><span>德鲁伊之王</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34691" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34691" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34691"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34691"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">64.3</span>
								</p>
								<a href="http://www.yousuu.com/book/30896" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3452482.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/30896" target="_blank" class="bookname"><span>伯符的恐怖故事集</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="30896" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="30896" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="30896"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="30896"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">54.9</span>
								</p>
								<a href="http://www.yousuu.com/book/34145" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3568897.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34145" target="_blank" class="bookname"><span>捉鬼游戏</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34145" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34145" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34145"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34145"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/digestnew" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_digestbooklist" class="visible-xs">精品推书单<span class="small"> 
关注数  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/booklist?s=digest" target="_blank" class="hidden-xs">精品推书单<span class="small">关注数</span></a>
					</div>
					<div id="bd_digestbooklist" class="panel-collapse collapse in">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem ys-index-bl-li clearfix on">
								<p style="float:right;">
									<span class="small">149</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/56868131ef41b37748fda055">2016  在看的书</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="56868131ef41b37748fda055" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">289</small></a><a onclick="ys.common.followbooklist(&#39;56868131ef41b37748fda055&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">108</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/551d2ab0ccabefbc2e5f0156">我感觉文字合理，剧情无大BUG的小说。</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="551d2ab0ccabefbc2e5f0156" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">145</small></a><a onclick="ys.common.followbooklist(&#39;551d2ab0ccabefbc2e5f0156&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">287</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/553de5c335abe89e5dbbb8a4">偏奇幻与无限，偶尔（经常）夹杂改善口味的其他书。</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="553de5c335abe89e5dbbb8a4" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">270</small></a><a onclick="ys.common.followbooklist(&#39;553de5c335abe89e5dbbb8a4&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">194</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/55470a88bc48eaa064c05eb9">单身22年人品保证`所推全是精华！</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="55470a88bc48eaa064c05eb9" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">247</small></a><a onclick="ys.common.followbooklist(&#39;55470a88bc48eaa064c05eb9&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">117</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/55e714df794399201ae2f0c1">赤戟的蜀山同人作品盘点</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="55e714df794399201ae2f0c1" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">148</small></a><a onclick="ys.common.followbooklist(&#39;55e714df794399201ae2f0c1&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">452</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/555ae6deb0d421845bd19408">【风萤月】专注后宫万万年【第二季】</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="555ae6deb0d421845bd19408" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">305</small></a><a onclick="ys.common.followbooklist(&#39;555ae6deb0d421845bd19408&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">12</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/56cd56dc823fa9f04b214ce3">只看在更小说</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="56cd56dc823fa9f04b214ce3" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">33</small></a><a onclick="ys.common.followbooklist(&#39;56cd56dc823fa9f04b214ce3&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">689</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/553c8965a928b815481924ef">厂长的最新粮草书单，附各种小众型粮草。 </a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="553c8965a928b815481924ef" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">624</small></a><a onclick="ys.common.followbooklist(&#39;553c8965a928b815481924ef&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix ">
								<p style="float:right;">
									<span class="small">12</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/54fef2d2fe4e2df6a5ee2165">书粮记录1</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="54fef2d2fe4e2df6a5ee2165" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">32</small></a><a onclick="ys.common.followbooklist(&#39;54fef2d2fe4e2df6a5ee2165&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
								<li class="oneitem ys-index-bl-li clearfix end ">
								<p style="float:right;">
									<span class="small">123</span>
								</p>
								<p class="name">
									<a href="http://www.yousuu.com/booklist/54fef32cfe4e2df6a5ee3f54">強勢的主角們啊【全本】</a>
								</p>
								<p class="vobes btn-group">
									<a onclick="ys.common.lovebooklist(this)" data-listid="54fef32cfe4e2df6a5ee3f54" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞&nbsp;<small style="font-size:100%">110</small></a><a onclick="ys.common.followbooklist(&#39;54fef32cfe4e2df6a5ee3f54&#39;)" class="btn btn-success btn-sm"><i class="fa fa-plus-square-o"></i>&nbsp;关注           </a>
								</p>
								</li>
							</ul>
							<a href="http://www.yousuu.com/booklist?s=digest" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_topic" class="visible-xs">【每周专题】三月新书推<span class="small"> 
字数(万)  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topic/551660131f986995063234c4" target="_blank" class="hidden-xs">【每周专题】三月新书推<span class="small">字数(万)</span></a>
					</div>
					<div id="bd_topic" class="panel-collapse collapse in">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">4.5</span>
								</p>
								<a href="http://www.yousuu.com/book/42164" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1001788040.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/42164" target="_blank" class="bookname"><span>草根石布衣</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="42164" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="42164" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="42164"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="42164"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">28.9</span>
								</p>
								<a href="http://www.yousuu.com/book/40133" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3679026.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/40133" target="_blank" class="bookname"><span>时空棋局</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="40133" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="40133" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="40133"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="40133"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">29.6</span>
								</p>
								<a href="http://www.yousuu.com/book/39568" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3665173.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/39568" target="_blank" class="bookname"><span>永恒高塔</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="39568" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="39568" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="39568"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="39568"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">41.5</span>
								</p>
								<a href="http://www.yousuu.com/book/40034" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3679425.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/40034" target="_blank" class="bookname"><span>完美大明星</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="40034" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="40034" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="40034"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="40034"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">10.6</span>
								</p>
								<a href="http://www.yousuu.com/book/41926" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1001758585.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/41926" target="_blank" class="bookname"><span>崛起之第三帝国</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="41926" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="41926" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="41926"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="41926"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">6.0</span>
								</p>
								<a href="http://www.yousuu.com/book/42117" target="_blank" class="avatar"><img src="./首页 - 优书网_files/56d64ebb1bab5.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/42117" target="_blank" class="bookname"><span>全真仙门</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="42117" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="42117" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="42117"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="42117"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">13.6</span>
								</p>
								<a href="http://www.yousuu.com/book/41596" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3687132.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/41596" target="_blank" class="bookname"><span>偷香</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="41596" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="41596" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="41596"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="41596"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">17.0</span>
								</p>
								<a href="http://www.yousuu.com/book/41618" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3687207.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/41618" target="_blank" class="bookname"><span>太易</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="41618" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="41618" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="41618"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="41618"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">5.4</span>
								</p>
								<a href="http://www.yousuu.com/book/42173" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1001827159.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/42173" target="_blank" class="bookname"><span>侠行天下</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="42173" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="42173" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="42173"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="42173"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">2.3</span>
								</p>
								<a href="http://www.yousuu.com/book/42191" target="_blank" class="avatar"><img src="./首页 - 优书网_files/56e6254d8b0eb.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/42191" target="_blank" class="bookname"><span>纨绔邪皇</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="42191" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="42191" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="42191"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="42191"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topic/551660131f986995063234c4" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_digest" class="visible-xs collapsed">龙空精选集<span class="small"> 
综合评分  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/digest" target="_blank" class="hidden-xs">龙空精选集<span class="small">综合评分</span></a>
					</div>
					<div id="bd_digest" class="panel-collapse collapse in">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">7.8</span>
								</p>
								<a href="http://www.yousuu.com/book/3173" target="_blank" class="avatar"><img src="./首页 - 优书网_files/51004.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/3173" target="_blank" class="bookname"><span>格斗狂想</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="3173" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="3173" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="3173"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="3173"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.3</span>
								</p>
								<a href="http://www.yousuu.com/book/278" target="_blank" class="avatar"><img src="./首页 - 优书网_files/31468.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/278" target="_blank" class="bookname"><span>变脸武士</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="278" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="278" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="278"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="278"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.4</span>
								</p>
								<a href="http://www.yousuu.com/book/1701" target="_blank" class="avatar"><img src="./首页 - 优书网_files/175848.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/1701" target="_blank" class="bookname"><span>无敌黑拳</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="1701" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="1701" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="1701"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="1701"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.3</span>
								</p>
								<a href="http://www.yousuu.com/book/4639" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/4639" target="_blank" class="bookname"><span>来到城市的东方驱魔人</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="4639" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="4639" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="4639"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="4639"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.8</span>
								</p>
								<a href="http://www.yousuu.com/book/352" target="_blank" class="avatar"><img src="./首页 - 优书网_files/18201.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/352" target="_blank" class="bookname"><span>天地战魂</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="352" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="352" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="352"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="352"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.5</span>
								</p>
								<a href="http://www.yousuu.com/book/8400" target="_blank" class="avatar"><img src="./首页 - 优书网_files/2274136.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/8400" target="_blank" class="bookname"><span>刑名小师爷</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="8400" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="8400" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="8400"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="8400"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.6</span>
								</p>
								<a href="http://www.yousuu.com/book/13227" target="_blank" class="avatar"><img src="./首页 - 优书网_files/2583260.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/13227" target="_blank" class="bookname"><span>一级安保</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="13227" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="13227" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="13227"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="13227"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">7.4</span>
								</p>
								<a href="http://www.yousuu.com/book/9457" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1335884107785.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/9457" target="_blank" class="bookname"><span>我是教练</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="9457" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="9457" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="9457"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="9457"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix">
								<p style="float:right;">
									<span class="small">6.0</span>
								</p>
								<a href="http://www.yousuu.com/book/8276" target="_blank" class="avatar"><img src="./首页 - 优书网_files/2130742.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/8276" target="_blank" class="bookname"><span>药祖</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="8276" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="8276" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="8276"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="8276"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end">
								<p style="float:right;">
									<span class="small">6.7</span>
								</p>
								<a href="http://www.yousuu.com/book/7975" target="_blank" class="avatar"><img src="./首页 - 优书网_files/2234059.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/7975" target="_blank" class="bookname"><span>神煌</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="7975" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="7975" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="7975"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="7975"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/digest" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_zhyuepiao" class="visible-xs collapsed">纵横月票榜<span class="small"> 
月票数  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/zhyuepiao" target="_blank" class="hidden-xs">纵横月票榜<span class="small">月票数</span></a>
					</div>
					<div id="bd_zhyuepiao" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">2045</span>
								</p>
								<a href="http://www.yousuu.com/book/19221" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1438853211657.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/19221" target="_blank" class="bookname"><span>我们的1649</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="19221" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="19221" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="19221"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="19221"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1822</span>
								</p>
								<a href="http://www.yousuu.com/book/27394" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1423817695194.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/27394" target="_blank" class="bookname"><span>丹武九重天</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="27394" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="27394" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="27394"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="27394"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1616</span>
								</p>
								<a href="http://www.yousuu.com/book/32366" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1434102240753.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32366" target="_blank" class="bookname"><span>绝品保镖</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32366" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32366" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32366"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32366"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1571</span>
								</p>
								<a href="http://www.yousuu.com/book/27365" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1434416579785.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/27365" target="_blank" class="bookname"><span>最强狂兵</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="27365" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="27365" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="27365"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="27365"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1570</span>
								</p>
								<a href="http://www.yousuu.com/book/13512" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1416982124364.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/13512" target="_blank" class="bookname"><span>九阳踏天</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="13512" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="13512" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="13512"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="13512"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1373</span>
								</p>
								<a href="http://www.yousuu.com/book/31451" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1438340492194.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31451" target="_blank" class="bookname"><span>纯禽记者</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31451" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31451" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31451"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31451"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1251</span>
								</p>
								<a href="http://www.yousuu.com/book/27373" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1418879275565.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/27373" target="_blank" class="bookname"><span>仙侠世界</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="27373" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="27373" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="27373"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="27373"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1099</span>
								</p>
								<a href="http://www.yousuu.com/book/20137" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1437542877723.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/20137" target="_blank" class="bookname"><span>雷血战神</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="20137" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="20137" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="20137"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="20137"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">666</span>
								</p>
								<a href="http://www.yousuu.com/book/244" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1419218702365.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/244" target="_blank" class="bookname"><span>问镜</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="244" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="244" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="244"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="244"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">662</span>
								</p>
								<a href="http://www.yousuu.com/book/29589" target="_blank" class="avatar"><img src="./首页 - 优书网_files/1451994415518.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/29589" target="_blank" class="bookname"><span>御天神帝</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="29589" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="29589" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="29589"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="29589"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/zhyuepiao" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_qdyuepiao" class="visible-xs collapsed">起点月票榜<span class="small"> 
月票数  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/qdyuepiao" target="_blank" class="hidden-xs">起点月票榜<span class="small">月票数</span></a>
					</div>
					<div id="bd_qdyuepiao" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">3548</span>
								</p>
								<a href="http://www.yousuu.com/book/19145" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3106580.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/19145" target="_blank" class="bookname"><span>我欲封天</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="19145" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="19145" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="19145"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="19145"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">2140</span>
								</p>
								<a href="http://www.yousuu.com/book/11763" target="_blank" class="avatar"><img src="./首页 - 优书网_files/2470949.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/11763" target="_blank" class="bookname"><span>武极天下</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="11763" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="11763" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="11763"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="11763"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1726</span>
								</p>
								<a href="http://www.yousuu.com/book/23705" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3362920.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/23705" target="_blank" class="bookname"><span>天域苍穹</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="23705" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="23705" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="23705"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="23705"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1481</span>
								</p>
								<a href="http://www.yousuu.com/book/21290" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3218385.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/21290" target="_blank" class="bookname"><span>医统江山</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="21290" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="21290" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="21290"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="21290"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1472</span>
								</p>
								<a href="http://www.yousuu.com/book/18951" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3054965.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/18951" target="_blank" class="bookname"><span>星战风暴</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="18951" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="18951" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="18951"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="18951"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1389</span>
								</p>
								<a href="http://www.yousuu.com/book/21235" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3249362.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/21235" target="_blank" class="bookname"><span>一世之尊</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="21235" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="21235" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="21235"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="21235"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1361</span>
								</p>
								<a href="http://www.yousuu.com/book/23693" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3354701.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/23693" target="_blank" class="bookname"><span>天火大道</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="23693" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="23693" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="23693"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="23693"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1354</span>
								</p>
								<a href="http://www.yousuu.com/book/29509" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3452145.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/29509" target="_blank" class="bookname"><span>天启之门</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="29509" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="29509" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="29509"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="29509"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1195</span>
								</p>
								<a href="http://www.yousuu.com/book/20067" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3079913.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/20067" target="_blank" class="bookname"><span>超品相师</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="20067" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="20067" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="20067"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="20067"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">1166</span>
								</p>
								<a href="http://www.yousuu.com/book/20517" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3234652.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/20517" target="_blank" class="bookname"><span>夜天子</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="20517" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="20517" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="20517"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="20517"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/qdyuepiao" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_qdfenhong" class="visible-xs collapsed">起点女频粉红榜<span class="small"> 
月票  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/qdfenhong" target="_blank" class="hidden-xs">起点女频粉红榜<span class="small">月票</span></a>
					</div>
					<div id="bd_qdfenhong" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">4657</span>
								</p>
								<a href="http://www.yousuu.com/book/32353" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3357187.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32353" target="_blank" class="bookname"><span>邪王追妻：废材逆天小姐</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32353" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32353" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32353"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32353"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1033</span>
								</p>
								<a href="http://www.yousuu.com/book/27803" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3301828.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/27803" target="_blank" class="bookname"><span>金陵春</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="27803" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="27803" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="27803"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="27803"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">912</span>
								</p>
								<a href="http://www.yousuu.com/book/28706" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3428302.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/28706" target="_blank" class="bookname"><span>诛砂</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="28706" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="28706" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="28706"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="28706"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">700</span>
								</p>
								<a href="http://www.yousuu.com/book/32336" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3416111.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32336" target="_blank" class="bookname"><span>征服游戏：野性小妻难驯服</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32336" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32336" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32336"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32336"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">688</span>
								</p>
								<a href="http://www.yousuu.com/book/32333" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3363231.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32333" target="_blank" class="bookname"><span>龙妃凤舞：压倒妖佞帝君</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32333" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32333" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32333"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32333"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">464</span>
								</p>
								<a href="http://www.yousuu.com/book/27785" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3222161.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/27785" target="_blank" class="bookname"><span>炮灰攻略</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="27785" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="27785" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="27785"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="27785"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">372</span>
								</p>
								<a href="http://www.yousuu.com/book/32348" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3360339.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32348" target="_blank" class="bookname"><span>魅王火妃：兽黑大姐大</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32348" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32348" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32348"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32348"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">310</span>
								</p>
								<a href="http://www.yousuu.com/book/32332" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3480625.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32332" target="_blank" class="bookname"><span>名门止步：黑帝的复制宠儿</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32332" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32332" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32332"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32332"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">301</span>
								</p>
								<a href="http://www.yousuu.com/book/20593" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3247938.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/20593" target="_blank" class="bookname"><span>金枝</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="20593" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="20593" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="20593"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="20593"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">280</span>
								</p>
								<a href="http://www.yousuu.com/book/32341" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3447263.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32341" target="_blank" class="bookname"><span>豪门隐婚：慕少的神秘冷妻</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32341" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32341" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32341"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32341"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/qdfenhong" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_qdsanjiang" class="visible-xs collapsed">起点三江榜<span class="small"> 
字数(万)  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/qdsanjiang" target="_blank" class="hidden-xs">起点三江榜<span class="small">字数(万)</span></a>
					</div>
					<div id="bd_qdsanjiang" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">21.8</span>
								</p>
								<a href="http://www.yousuu.com/book/34745" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3552978.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34745" target="_blank" class="bookname"><span>巫神纪</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34745" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34745" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34745"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34745"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">26.4</span>
								</p>
								<a href="http://www.yousuu.com/book/34460" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3600346.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34460" target="_blank" class="bookname"><span>绝世天君</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34460" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34460" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34460"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34460"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">21.9</span>
								</p>
								<a href="http://www.yousuu.com/book/34676" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3600494.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34676" target="_blank" class="bookname"><span>仙门弃少</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34676" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34676" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34676"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34676"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">20.9</span>
								</p>
								<a href="http://www.yousuu.com/book/34582" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3604049.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34582" target="_blank" class="bookname"><span>永恒剑主</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34582" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34582" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34582"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34582"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">18.3</span>
								</p>
								<a href="http://www.yousuu.com/book/35019" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3526189.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/35019" target="_blank" class="bookname"><span>儒术王座</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="35019" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="35019" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="35019"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="35019"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">17.6</span>
								</p>
								<a href="http://www.yousuu.com/book/34424" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3573039.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34424" target="_blank" class="bookname"><span>恶灵国度</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34424" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34424" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34424"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34424"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">20.3</span>
								</p>
								<a href="http://www.yousuu.com/book/34939" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3602364.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34939" target="_blank" class="bookname"><span>步步惊唐</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34939" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34939" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34939"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34939"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">20.7</span>
								</p>
								<a href="http://www.yousuu.com/book/34766" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3609800.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34766" target="_blank" class="bookname"><span>盛唐崛起</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34766" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34766" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34766"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34766"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">20.0</span>
								</p>
								<a href="http://www.yousuu.com/book/35528" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3611216.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/35528" target="_blank" class="bookname"><span>剑主苍穹</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="35528" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="35528" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="35528"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="35528"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">21.3</span>
								</p>
								<a href="http://www.yousuu.com/book/34735" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3600328.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/34735" target="_blank" class="bookname"><span>盛世娱乐</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="34735" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="34735" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="34735"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="34735"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/qdsanjiang" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_qdmmpk" class="visible-xs collapsed">起点女频PK榜<span class="small"> 
PK分数  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/qdmmpk" target="_blank" class="hidden-xs">起点女频PK榜<span class="small">PK分数</span></a>
					</div>
					<div id="bd_qdmmpk" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">666</span>
								</p>
								<a href="http://www.yousuu.com/book/31560" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3503289.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31560" target="_blank" class="bookname"><span>小胖妹修仙记</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31560" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31560" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31560"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31560"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">200</span>
								</p>
								<a href="http://www.yousuu.com/book/31194" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3497476.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31194" target="_blank" class="bookname"><span>花样男友是妖怪</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31194" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31194" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31194"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31194"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">106</span>
								</p>
								<a href="http://www.yousuu.com/book/32085" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3495031.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32085" target="_blank" class="bookname"><span>庶庶得正</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32085" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32085" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32085"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32085"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">60</span>
								</p>
								<a href="http://www.yousuu.com/book/31187" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3496338.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31187" target="_blank" class="bookname"><span>仙云之巅</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31187" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31187" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31187"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31187"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">55</span>
								</p>
								<a href="http://www.yousuu.com/book/32083" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3511797.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32083" target="_blank" class="bookname"><span>花落风轻</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32083" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32083" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32083"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32083"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">50</span>
								</p>
								<a href="http://www.yousuu.com/book/32322" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3515358.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32322" target="_blank" class="bookname"><span>男神不好嫁</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32322" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32322" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32322"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32322"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">39</span>
								</p>
								<a href="http://www.yousuu.com/book/32317" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3513869.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32317" target="_blank" class="bookname"><span>医妆</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32317" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32317" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32317"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32317"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">37</span>
								</p>
								<a href="http://www.yousuu.com/book/31180" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3491969.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31180" target="_blank" class="bookname"><span>茶香传奇</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31180" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31180" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31180"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31180"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">36</span>
								</p>
								<a href="http://www.yousuu.com/book/31211" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3478744.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31211" target="_blank" class="bookname"><span>左手写爱</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31211" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31211" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31211"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31211"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">31</span>
								</p>
								<a href="http://www.yousuu.com/book/32308" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3517562.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32308" target="_blank" class="bookname"><span>炮灰不服</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32308" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32308" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32308"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32308"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/qdmmpk" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_csyuepiao" class="visible-xs collapsed">创世月票榜<span class="small"> 
月票数  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/csyuepiao" target="_blank" class="hidden-xs">创世月票榜<span class="small">月票数</span></a>
					</div>
					<div id="bd_csyuepiao" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">1726</span>
								</p>
								<a href="http://www.yousuu.com/book/23243" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3362920(1).jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/23243" target="_blank" class="bookname"><span>天域苍穹</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="23243" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="23243" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="23243"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="23243"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">1093</span>
								</p>
								<a href="http://www.yousuu.com/book/32364" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_557fbada0524b.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32364" target="_blank" class="bookname"><span>执掌乾坤</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32364" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32364" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32364"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32364"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">988</span>
								</p>
								<a href="http://www.yousuu.com/book/22873" target="_blank" class="avatar"><img src="./首页 - 优书网_files/5664f7beab933.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/22873" target="_blank" class="bookname"><span>择天记</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="22873" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="22873" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="22873"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="22873"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">973</span>
								</p>
								<a href="http://www.yousuu.com/book/22853" target="_blank" class="avatar"><img src="./首页 - 优书网_files/530fe6bb4bc88.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/22853" target="_blank" class="bookname"><span>三界独尊</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="22853" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="22853" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="22853"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="22853"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">823</span>
								</p>
								<a href="http://www.yousuu.com/book/22539" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_5588bad14e0d7.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/22539" target="_blank" class="bookname"><span>不死武尊</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="22539" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="22539" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="22539"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="22539"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">720</span>
								</p>
								<a href="http://www.yousuu.com/book/23534" target="_blank" class="avatar"><img src="./首页 - 优书网_files/t5_161342.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/23534" target="_blank" class="bookname"><span>校花之贴身高手</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="23534" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="23534" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="23534"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="23534"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">576</span>
								</p>
								<a href="http://www.yousuu.com/book/22928" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_53db5166bdbca.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/22928" target="_blank" class="bookname"><span>焚天之怒</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="22928" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="22928" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="22928"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="22928"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">377</span>
								</p>
								<a href="http://www.yousuu.com/book/32365" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3494835.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32365" target="_blank" class="bookname"><span>霸皇纪</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32365" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32365" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32365"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32365"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">336</span>
								</p>
								<a href="http://www.yousuu.com/book/23033" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_53b4b1d7d5cdd.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/23033" target="_blank" class="bookname"><span>重生之神级学霸</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="23033" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="23033" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="23033"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="23033"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">323</span>
								</p>
								<a href="http://www.yousuu.com/book/23159" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_5414445789882.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/23159" target="_blank" class="bookname"><span>兵者为王</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="23159" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="23159" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="23159"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="23159"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/csyuepiao" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_qdqiangtui" class="visible-xs collapsed">起点强推榜<span class="small"> 
字数(万)  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/qdqiangtui" target="_blank" class="hidden-xs">起点强推榜<span class="small">字数(万)</span></a>
					</div>
					<div id="bd_qdqiangtui" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">27.5</span>
								</p>
								<a href="http://www.yousuu.com/book/32736" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3482809.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32736" target="_blank" class="bookname"><span>未来眼</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32736" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32736" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32736"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32736"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">35.1</span>
								</p>
								<a href="http://www.yousuu.com/book/32238" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3480592.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32238" target="_blank" class="bookname"><span>符道真解</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32238" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32238" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32238"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32238"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">44.9</span>
								</p>
								<a href="http://www.yousuu.com/book/30838" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3484111.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/30838" target="_blank" class="bookname"><span>万兽王座</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="30838" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="30838" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="30838"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="30838"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">33.7</span>
								</p>
								<a href="http://www.yousuu.com/book/31676" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3484855.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31676" target="_blank" class="bookname"><span>万能高手</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31676" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31676" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31676"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31676"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">32.5</span>
								</p>
								<a href="http://www.yousuu.com/book/32078" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3495389.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/32078" target="_blank" class="bookname"><span>天才杂役</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="32078" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="32078" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="32078"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="32078"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">28.7</span>
								</p>
								<a href="http://www.yousuu.com/book/31227" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3475482.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31227" target="_blank" class="bookname"><span>魔术天王</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31227" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31227" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31227"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31227"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">30.8</span>
								</p>
								<a href="http://www.yousuu.com/book/31806" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3489766.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31806" target="_blank" class="bookname"><span>全职法师</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31806" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31806" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31806"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31806"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">40.3</span>
								</p>
								<a href="http://www.yousuu.com/book/30840" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3482918.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/30840" target="_blank" class="bookname"><span>武道天心</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="30840" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="30840" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="30840"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="30840"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">29.1</span>
								</p>
								<a href="http://www.yousuu.com/book/31989" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3483546.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/31989" target="_blank" class="bookname"><span>寒门崛起</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="31989" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="31989" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="31989"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="31989"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">70.1</span>
								</p>
								<a href="http://www.yousuu.com/book/29969" target="_blank" class="avatar"><img src="./首页 - 优书网_files/3440796.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/29969" target="_blank" class="bookname"><span>帝级大明星</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="29969" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="29969" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="29969"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="29969"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/qdqiangtui" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div style="border:none;" class="panel panel-default ys-index-bd-panel">
					<div class="panel-heading ys-index-bd-panel-header">
						<a data-toggle="collapse" href="http://www.yousuu.com/#bd_csqiangtui" class="visible-xs collapsed">创世强推榜<span class="small"> 
字数(万)  
						<i class="fa fa-autocaret"></i></span></a><a href="http://www.yousuu.com/topshow/csqiangtui" target="_blank" class="hidden-xs">创世强推榜<span class="small">字数(万)</span></a>
					</div>
					<div id="bd_csqiangtui" class="panel-collapse collapse">
						<div style="padding:0;" class="panel-body clearfix">
							<ul class="list-unstyled ys-index-bdlist">
								<li class="oneitem clearfix on">
								<p style="float:right;">
									<span class="small">33.1</span>
								</p>
								<a href="http://www.yousuu.com/book/33215" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_5588bb2edc0a6.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33215" target="_blank" class="bookname"><span>九霄剑帝</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33215" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33215" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33215"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33215"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">30.7</span>
								</p>
								<a href="http://www.yousuu.com/book/33213" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_558e5efc19786.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33213" target="_blank" class="bookname"><span>神武觉醒</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33213" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33213" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33213"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33213"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">30.9</span>
								</p>
								<a href="http://www.yousuu.com/book/33216" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_559119c128656.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33216" target="_blank" class="bookname"><span>星辰剑神</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33216" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33216" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33216"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33216"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">30.0</span>
								</p>
								<a href="http://www.yousuu.com/book/33214" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_553ee73a0043e.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33214" target="_blank" class="bookname"><span>全能武帝</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33214" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33214" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33214"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33214"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">33.8</span>
								</p>
								<a href="http://www.yousuu.com/book/33217" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_5537890518a5f.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33217" target="_blank" class="bookname"><span>原始战神</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33217" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33217" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33217"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33217"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">40.6</span>
								</p>
								<a href="http://www.yousuu.com/book/33226" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_55743bbd14113.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33226" target="_blank" class="bookname"><span>气御阴阳</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33226" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33226" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33226"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33226"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">36.7</span>
								</p>
								<a href="http://www.yousuu.com/book/33225" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_5572ff67eb2a4.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33225" target="_blank" class="bookname"><span>绝品魔医</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33225" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33225" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33225"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33225"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">24.6</span>
								</p>
								<a href="http://www.yousuu.com/book/33218" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_55ba2d2f7492a.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33218" target="_blank" class="bookname"><span>凶宅代理人</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33218" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33218" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33218"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33218"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix ">
								<p style="float:right;">
									<span class="small">35.6</span>
								</p>
								<a href="http://www.yousuu.com/book/33220" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_5560ffc1c624e.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33220" target="_blank" class="bookname"><span>校园皇级高手</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33220" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33220" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33220"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33220"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
								<li class="oneitem clearfix end ">
								<p style="float:right;">
									<span class="small">42.8</span>
								</p>
								<a href="http://www.yousuu.com/book/33221" target="_blank" class="avatar"><img src="./首页 - 优书网_files/cb_557104e73f9c7.jpg" class="smallbookavatar"></a>
								<div class="item-info">
									<a href="http://www.yousuu.com/book/33221" target="_blank" class="bookname"><span>我的异能女友</span></a>
								</div>
								<div data-cls="btn-sm" data-bid="33221" data-shelfstat="false" class="initshelf vobes sleft btn-group clearfix">
									<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="33221" class="btn btn-sm btn-primary">加入书架</a>
									<div class="btn-group">
										<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
										<ul role="menu" class="dropdown-menu ">
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="33221"> 加入待看 </a></li>
											<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="33221"> 已经看完 </a></li>
											<li class="divider"></li>
											<li><a href="javascript:;">取消</a></li>
										</ul>
									</div>
								</div>
								</li>
							</ul>
							<a href="http://www.yousuu.com/topshow/csqiangtui" target="_blank" style="color:#111;text-decoration:underline;" class="pull-right small">查看更多&nbsp; »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ys-friendlinks clearfix">
			<h5 class="pull-left">友情链接：</h5>
			<ul class="list-inline">
				<li><a href="http://www.lkong.net/" target="_blank">龙空论坛</a></li>
				<li><a href="http://lkong.cn/" target="_blank">龙空新版</a></li>
				<li><a href="http://www.tiandizw.com/" target="_blank">天地中文网</a></li>
				<li><a href="http://yc.ireader.com.cn/" target="_blank">掌阅小说网</a></li>
				<li><a href="http://www.zhulang.com/" target="_blank">逐浪中文网</a></li>
				<li><a href="http://www.hongshu.com/" target="_blank">红薯中文网</a></li>
				<li><a href="http://www.quyuewang.cn/" target="_blank">趣阅中文网</a></li>
				<li><a href="http://mm.17k.com/" target="_blank">17K女生网</a></li>
				<li><a href="http://www.tadu.com/" target="_blank">塔读文学</a></li>
				<li><a href="http://www.ouj.com/" target="_blank">偶家中文网</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="common-footer container">
	<div style="margin-bottom:10px;overflow-x:hidden;" class="visible-md-block visible-lg-block">
		<script>BAIDU_CLB_fillSlot("1120640");</script>
	</div>
	<div class="footer clearfix">
		<ul>
			<li><a href="http://www.yousuu.com/help">新手帮助</a></li>
			<li><a href="http://www.yousuu.com/help/booklist">推书指南</a></li>
			<li><a href="javascript:;" onclick="ys.common.feedback();">建议反馈</a></li>
			<li><a href="http://www.yousuu.com/#">移动应用</a></li>
			<li class="bd dropdown">
			<div aria-labelledby="yousuuBD" data-nohide="true" class="dropdown-menu">
				<p>
					商务合作请联系QQ：<span class="bold">3323780180</span>
				</p>
				<p>
					合作邮箱：bd@yousuu.com
				</p>
				<p>
					广告合作请联系QQ：<span class="bold">780282553</span>
				</p>
				<p>
					广告邮箱：ad@yousuu.com
				</p>
			</div>
			<a id="yousuuBD" href="http://www.yousuu.com/#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">商务合作</a></li>
		</ul>
		<span class="copy">© 2015 优书网</span>
		<div>
			<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010602000919"><img src="./首页 - 优书网_files/4ddead09gw1f1xbafz282j200k00k3y9.jpg">&nbsp;&nbsp;浙公网安备 33010602000919号</a>
		</div>
	</div>
</div>
<script src="./首页 - 优书网_files/moment.min.js"></script>
<script src="./首页 - 优书网_files/zh-cn.min.js"></script>
<script src="./首页 - 优书网_files/jquery-1.11.2.min.js"></script>
<script src="./首页 - 优书网_files/maxlength.js"></script>
<script src="./首页 - 优书网_files/underscore.min.js"></script>
<script src="./首页 - 优书网_files/bootstrap.min.js"></script>
<script src="./首页 - 优书网_files/bootstrap-suggest.min.js"></script>
<script src="./首页 - 优书网_files/bootstrap-select.js"></script>
<script src="./首页 - 优书网_files/jquery.tagsinput.js"></script>
<script src="./首页 - 优书网_files/jquery.placeholder.js"></script>
<script src="./首页 - 优书网_files/jquery.stacktable.js"></script>
<script src="./首页 - 优书网_files/application.js"></script>
<script src="./首页 - 优书网_files/bootstrap-rating-input.min.js"></script>
<script src="./首页 - 优书网_files/bootstrap-switch.min.js"></script>
<script src="./首页 - 优书网_files/jquery.easypiechart.min.js"></script>
<script src="./首页 - 优书网_files/toastr.min.js"></script>
<script src="./首页 - 优书网_files/typeahead.js"></script>
<script src="./首页 - 优书网_files/masonry.pkgd.min.js"></script>
<script src="./首页 - 优书网_files/jquery.peity.min.js"></script>
<script src="./首页 - 优书网_files/my.js"></script>
<script src="./首页 - 优书网_files/initshelf.js"></script>
<script>var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan style='display:none' id='cnzz_stat_icon_1254705611'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1254705611%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));    </script>
<span style="display:none" id="cnzz_stat_icon_1254705611"><a href="http://www.cnzz.com/stat/website.php?web_id=1254705611" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="./首页 - 优书网_files/pic1.gif"></a></span>
<script src="./首页 - 优书网_files/stat.php" type="text/javascript"></script>
<script src="./首页 - 优书网_files/core.php" charset="utf-8" type="text/javascript"></script>
</body>
</html>