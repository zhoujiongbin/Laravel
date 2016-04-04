@include("header")

<div class="sokk-body">
	<div class="ys-userpage-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 col-md-push-8 col-lg-push-9 col-sm-push-7">
					<div style="margin:0 auto;text-align:center;">
						<img src="http://guiyu.org/images/logo.png" style="height: 120px;width: 120px;" class="img-rounded">
						<h4>{{ $user->username }}</h4>
					</div>
				</div>
				<div class="col-sm-7 col-xs-12 col-md-8 col-lg-9 col-md-pull-4 col-lg-pull-3 col-sm-pull-5">
					<div class="hidden-xs">
						<div class="userword-main">
							<p class="userword">
								{{ $user->sign or '三更灯火五更鸡，正是男儿读书时。黑发不知勤学早，白首方悔读书迟。' }}
							</p>
						</div>
						<ul style="padding-top:10px" class="nav nav-pills">
							<li class="start"><a href="/user/{{ $uid }}/comments"><span>评论</span></a></li>
							<li><a href="/user/{{ $uid }}/booklist"><span>书单</span></a></li>
							<li><a href="/bookshelf"><span>书架</span></a></li>
							<li  class="active"><a href="/user/{{ $uid }}/setting"><span>个人设置</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="sokk-index-left col-sm-12 col-md-4 col-lg-3 col-xs-12 col-md-push-8 col-lg-push-9">
				<div style="height:10px;" class="visible-xs-block visible-sm-block">
				</div>
				<div class="ys-userpage-leftpane">
					<div class="row">
						<div class="col-xs-4">
							<a href="#"><strong>{{ $booklistcount }}</strong><span>书单数量 </span></a>
						</div>
						<div class="col-xs-4">
							<a href="#"><strong>{{ $commentcount }}</strong><span>书评数量</span></a>
						</div>
						<div class="col-xs-4">
							<a href="#"><strong>{{ $shelfcount }}</strong><span>已读数量</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xs-12 col-md-8 col-lg-9 col-md-pull-4 col-lg-pull-3">
				<ul style="padding-bottom:10px" class="visible-xs-block nav nav-pills">
					<li class="start"><a href="/user/{{ $uid }}/comments"><span>评论</span></a></li>
					<li><a href="/user/{{ $uid }}/booklist"><span>书单</span></a></li>
					<li><a href="/bookshelf"><span>书架</span></a></li>
					<li  class="active"><a href="/user/{{ $uid }}/setting"><span>个人设置</span></a></li>
				</ul>
				<div class="clearfix"></div>
				<div class="row">
				<div class="max-width mg-center" style="margin-top:2em">
					<form action="/user/{{ $uid }}/setting"  method="post" onsubmit="return false;" name="form" id="form" class="form-horizontal">
					{!! csrf_field() !!}
						<p class='bg-info' style="padding:15px;margin-bottom:15px;">修改个人信息</p>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">旧密码:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="passwordold" name="passwordold" placeholder="旧密码"/>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label">新密码:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password1" name="password1" placeholder="新密码"/>
							</div>
						</div>
						<div class="form-group">
							<label for="cofimPassword" class="col-sm-2 control-label">重复密码:</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password2" name="password2" placeholder="重复密码"/>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">邮箱:</label>
							<div class="col-sm-10">
							<input type="eamil" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly />
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">个性签名:</label>
							<div class="col-sm-10">
							<textarea type="textarea" style="min-height:80px;" class="form-control" placeholder="个性签名" id="sign" name="sign" ></textarea>
							</div>
						</div>
						<div class="col-sm-offset-2 col-sm-10">
						<button onclick="setting({{ $uid }});" class="btn btn-info btn-primary">保存设置</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include("footer")