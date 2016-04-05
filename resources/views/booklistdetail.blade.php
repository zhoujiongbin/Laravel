@include("header")

<div class="sokk-body">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-md-3 col-lg-3 col-xs-12 col-md-push-9 col-sm-push-8">
				<div class="hidden-xs">
					<div class="panel panel-primary">
						<div class="panel-body clearfix">
							<a href="/user/{{ $userInfo->id }}/comments" target="_blank" class="pull-left"><img class="img48" src="/images/logo.png"></a>
							<div style="margin-left:55px;">
								<a href="/user/{{ $userInfo->id }}/comments" target="_blank">{{ $userInfo->username }}</a>
							</div>
						</div>
					</div>
					<p style="padding:15px;border-radius:3px;border:1px solid #337ab7" class="small">
						本书单共有{{ $info->count }}本书，创建于 {{ $info->Humans }}
					</p>
					<div class="panel panel-primary">
						<div class="panel-heading">
							书单简介
						</div>
						<div style="word-break: break-all;" class="panel-body">
							{{ $info->intro }}
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							该用户的其他书单
						</div>
						<ul class="list-group">
						@foreach($list as $key => $val)
							<li class="list-group-item start"><a href="/booklist/{{ $val->id }}">{{ $val->title }}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-8 col-xs-12 col-md-9 col-lg-9 col-md-pull-3 col-sm-pull-4">
				<h3 style="margin-top:0;" class="clearfix"><small style="color:red">[{{ $info->type }}] </small>{{ $info->title }} <span class="pull-right"></span></h3>
				<div class="sokk-book-buttons clearfix">
					@if($info->user_id == $uid)
					<div class="pull-left">
						<button id="booklist" data-target="#editbooklist" data-toggle="modal" onclick="editBooklist()" data-listid="{{ $info->id }}" data-title="{{ $info->title }}" data-intro="{{ $info->intro }}" data-type="{{ $info->type }}"  class="btn btn-primary">编辑推书单 </button><button onclick="" class="btn btn-primary">添加图书</button><button onclick="" class="btn btn-danger">删除推书单</button>
					</div>
					@endif
					<div class="ys-booklist-starBtn">
						<a class="btn btn-default"><i class="fa fa-thumbs-o-up"></i>&nbsp;赞 <small style="font-size:100%">{{ $info->love }}</small></a>
					</div>
				</div>
				<div style="background-color:#eee;border-radius: 4px;" class="sort">
					<ul class="nav nav-pills">
						<li class="active"><a href="/booklist/5702729c20a3ed9476d1b976" class="btn">最新加入</a></li>
						<li><a href="/booklist/5702729c20a3ed9476d1b976?sort=rate" class="btn">评分高低</a></li>
					</ul>
				</div>
				<div class="ro">
					<div>
						<div id="listbook_22873" class="booklist-item">
							<div class="mod">
								<div class="hd">
									<span class="pos">1</span>
								</div>
								<div class="bd booklist-subject">
									<div data-bid="22873" data-shelfstat="false" data-menu="right" class="pull-right hidden-xs btn-group initshelf">
										<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="22873" class="btn btn-primary">加入书架</a>
										<div class="btn-group">
											<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
											<ul role="menu" class="dropdown-menu dropdown-menu-right">
												<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="wait" data-bid="22873"> 加入待看 </a></li>
												<li><a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="already" data-bid="22873"> 已经看完 </a></li>
												<li class="divider"></li>
												<li><a href="javascript:;">取消</a></li>
											</ul>
										</div>
									</div>
									<div class="post">
										<a href="/book/22873" target="_blank"><img src="http://img1.write.qq.com/upload/cover/2016-03-22/cb_56f11d1242e04.jpg" style="max-height:125px;max-width:100px;"></a>
										<div data-cls="btn-block" data-bid="22873" data-shelfstat="false" data-nomenu="true" class="imgextra visible-xs-block initshelf">
											<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="22873" class="btn btn-block btn-primary">加入书架</a>
										</div>
									</div>
									<div class="title">
										<a href="/book/22873" target="_blank">择天记</a>
									</div>
									<div class="rating">
										<span class="allstar00"></span><span class="rating_nums"></span><span>(262人评价)</span>
									</div>
									<div class="abstract">
										作者: 猫腻<br>
										字数: 2231327<br>
										最后更新: 16/04/04 16:54<br>
										推荐指数: <span class="num2star"><i style="color:#4D7BD6" class="fa fa-star"></i><i style="color:#4D7BD6" class="fa fa-star"></i><i style="color:#4D7BD6" class="fa fa-star"></i><i style="color:#4D7BD6" class="fa fa-star"></i><i style="color:#4D7BD6" class="fa fa-star"></i></span>
									</div>
									<div class="meta">
										<span class="source">评分 : 6.3</span>
									</div>
								</div>
								<div class="ft clearfix">
									<blockquote>
										<span>评语：<span id="pyspan_22873">神人 神作者 顺心意</span></span>
									</blockquote>
									<time class="time"><span title="几秒前">几秒前加入书单                         </span></time>
									<div data-listid="5702729c20a3ed9476d1b976" data-bid="22873" class="booklist-item-opt">
										<a href="javascript:;" onclick="ys.common.editBookListBook(this)">修改评语</a><a href="javascript:;" onclick="ys.common.deleteBookListBook(this)">删除</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@if($uid != 0)
<div id="editbooklist" tabindex="-1" role="dialog" aria-labelledby="mybooklist" aria-hidden="true" data-backdrop="false" class="modal fade">
	<div class="modal-dialog modal-sm" style="width:520px">
		<form class="modal-content" onsubmit="return false;" method="post">
			{!! csrf_field() !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="mybooklist">新建推书单</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="listid" name="listid" value="">
				<div style="width:88px;" class="pull-right">
					<select id="type" name="type" autocomplete="off" class="form-control">
						<option value="综合">综合</option>
						<option value="男频">男频</option>
						<option value="女频">女频</option>
					</select>
				</div>
				<div style="margin-right:90px">
					<input id="title" type="text" name="title" placeholder="推书单标题" class="form-control" value="">
				</div>
				<p class="clearfix bg-info" style="margin: 7px 0;padding:8px;">
					推书单的分类代表你这个推书单的主要受众，如果面向男性可选男频，面向女性可选女频。
				</p>
				<textarea id="intro" name="intro" placeholder="推书单简介" style="margin:6px 0 ;width:100%;height:80px;" class="form-control"></textarea>
			</div>
			<div class="modal-footer">
				<a class="btn btn-default" data-dismiss="modal">取消</a><button type="button" onclick="addBooklist()" class="btn btn-primary">确定</button>
			</div>
		</form>
	</div>
</div>
@endif
@include("footer")