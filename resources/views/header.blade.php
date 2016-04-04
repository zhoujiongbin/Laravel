<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>首页 - 游书网</title>
<meta name="Description" content="游书网(www.youshu.com)集小说搜索、追更阅读、读者评分、书单推荐于一体，不但可以追看小说最新更新，还可以解决书荒寻找到更多更好看的小说，在这里你可以阅读、评论、推荐、打分、吐槽，尽情的与其他书友一起分享关于阅读的快乐。欢迎大家加入游书网">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="icon" href="http://guiyu.org/images/logo.ico" type="image/x-icon">
<link rel="stylesheet" href="http://guiyu.org/css/bootstrap.min.css">
<link rel="stylesheet" href="http://guiyu.org/css/font-awesome.min.css">
<link rel="stylesheet" href="http://guiyu.org/css/toastr.min.css">
<link rel="stylesheet" href="http://guiyu.org/css/bootstrap-select.min.css">
<link rel="stylesheet" href="http://guiyu.org/css/bootstrap-switch.min.css">
<link rel="stylesheet" href="http://guiyu.org/css/my.css">
<link rel="stylesheet" href="http://guiyu.org/css/youshu.css">
<script  src="http://guiyu.org/js/jquery-1.11.2.min.js"></script>
</head>
<body>
<header class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<div class="navbar-header">
		<button data-toggle="collapse" data-target="#header-navbar" type="button" class="navbar-toggle"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="http://guiyu.org" style="padding:0;" class="navbar-brand"><img src="http://guiyu.org/images/logo.png" style="height:50px"></a>
	</div>
	<div id="header-navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://www.yousuu.com/booklist">所有书单</a></li>
			<li><a href="/comments">小说评论</a></li>
			<li><a href="/top">排行榜</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		@if($uid != 0)
			<li class="smallpadding hidden-xs"><a href="/notice" target="_blank"> 通知 <span class="badge ysh-notice-badge"></span></a></li>
			<li class="smallpadding hidden-xs"><a href="/notice/booklist" target="_blank">书单 <span class="badge ysh-bl-badge"></span></a></li> 
			<li class="smallpadding hidden-xs"> <a href="/user/{{ $uid }}/fans" target="_blank">粉丝 <span class="badge ysh-fans-badge"></span></a></li>
			<li class="droupdown"><a aria-expanded="false" id="headeruser" data-toggle="dropdown" href="/user/{{ $uid }}" class="dropdown-toggle">{{ $username }}<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="/shelf" style="font-weight:bold;color:#337ab7">个人书架</a></li>
				<li><a href="/user/{{ $uid }}">我的书单</a></li>
				<li><a href="/settings">个人设置</a></li>
				<li><a href='/lagout'>退出登录</a></li>
				</ul>
			</li>
		@else
			<li class="droupdown"><a href="http://www.yousuu.com/#" data-target="#login-modal-sm" data-toggle="modal">登录</a></li>
		@endif
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
						使用邮箱和密码登录游书网
					</p>
					<form style="padding:8px" method="post" action="http://guiyu.org/login"  class="login-form">
						{!! csrf_field() !!}
						<div class="control-group">
							<input id="login-name" name="email" type="text" placeholder="输入用户邮箱" class="form-control login-field"><label for="login-name" class="login-field-icon fui-user"></label>
						</div>
						<div class="control-group">
							<input id="login-pass" name="password" type="password" placeholder="输入密码" class="form-control login-field"><label for="login-pass" class="login-field-icon fui-lock"></label>
						</div>
						<button type="submit" href="#" class="btn btn-primary btn-large btn-block">登录</button>
						<hr>
						<a href="http://guiyu.org/sign" target="_blank" class="btn btn-success btn-block btn-large">还没有帐号？立即注册</a>
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