@include("header")

<div class="sokk-body">
	<div class="ys-userpage-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-md-4 col-lg-3 col-xs-12 col-md-push-8 col-lg-push-9 col-sm-push-7">
					<div style="margin:0 auto;text-align:center;">
						<img src="/images/logo.png" style="height: 120px;width: 120px;" class="img-rounded">
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
							<li class="start"><a href="/user/{{ $id }}/comments"><span>评论</span></a></li>
							<li  class="active"><a href="/user/{{ $id }}/booklist"><span>书单</span></a></li>
							<li><a href="/bookshelf"><span>书架</span></a></li>
							@if($id == $uid)<li><a href="/user/{{ $id }}/setting"><span>个人设置</span></a></li>@endif
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
				@include("common.booklist")
				</div>
			</div>
		</div>
	</div>
</div>

@include("footer")