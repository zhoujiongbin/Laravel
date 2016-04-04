
@include("header")

<div class="sokk-body">
	<div class="container">
		<div class="row">
			<div class="sokk-index-left col-sm-3 col-md-2 col-lg-2 col-xs-12">
				<div class="hidden-xs">
					<ul style="background-color:#4596d3;" class="nav nav-stacked categorynav">
						@if($tagId == 0)
							<li class="start active">
						@else
							<li>
						@endif
						<a href="/tag/all">全部分类</a></li>
						@foreach($tag as $key => $val)
							@if($tagId == ( $key + 1 ))
								<li class="start active">
							@else
								<li>
							@endif
							<a href="/tag/{{ $val->tag }}">{{ $val->tag }}</a></li>
						@endforeach
					</ul>
				</div>
				<div style="margin:10px 0;" class="visible-xs">
					<a onclick="ys.common.showmenu(this);" data-offtext="关闭所有分类" data-ontext="查看所有分类" class="btn btn-block btn-primary">查看所有分类</a>
				</div>
			</div>
			<div class="col-sm-9 col-md-10 col-lg-10 col-xs-12">
				<div class="categorymain">
					<div class="list">
						<table style="border:1px solid #ddd;" class="table table-condensed">
						<tbody>
						<tr>
							<td id="category_wordnum">
								<small>字数</small>
								@if($wordnum == 0)
									<a href="/tag/{{ $name }}"><button  class="btn btn-sm btn-primary">不限制</button></a>
								@else
									<a href="/tag/{{ $name }}"><button  class="btn btn-sm btn-link">不限制</button></a>
								@endif
								@foreach($wordOption as $key => $val)
									@if($wordnum == $key)
										<a href="/tag/{{ $name }}?wordnum={{ $key }}"><button  class="btn btn-sm btn-primary">{{ $val }}</button></a>
									@else
										<a href="/tag/{{ $name }}?wordnum={{ $key }}"><button  class="btn btn-sm btn-link">{{ $val }}</button></a>
									@endif
								@endforeach
							</td>
						</tr>
						</tbody>
						</table>
					</div>
					<div style="background-color:#eee;border-radius: 4px;" class="sort">
						<ul id="category_sort" class="nav nav-pills">
						@if($sortid == 0) 
						<li class="active"><a onclick="jumpurl('sort',null)" class="btn">默认排序</a></li>
						<li><a onclick="jumpurl('sort','word')" class="btn">字数</a></li>
						<li><a onclick="jumpurl('sort','rate')" class="btn">评分</a></li>
						@elseif($sortid == 1)
						<li><a onclick="jumpurl('sort',null)" class="btn">默认排序</a></li>
						<li class="active"><a onclick="jumpurl('sort','word')" class="btn">字数</a></li>
						<li><a onclick="jumpurl('sort','rate')" class="btn">评分</a></li> 
						@else
						<li><a onclick="jumpurl('sort',null)" class="btn">默认排序</a></li>
						<li><a onclick="jumpurl('sort','word')" class="btn">字数</a></li>
						<li class="active"><a onclick="jumpurl('sort','rate')" class="btn">评分</a></li>
						@endif
						</ul>
					</div>
					<div style="margin:1em 0;" class="books"> 
						<p style="margin:0;padding:0;height:45px;" class="clearfix">
						</p>
						<div class="row">
							@foreach($book as $key => $val)
							<div class="col-md-6 col-sm-12">
								<div style="margin:0px;" class="booklist-item">
									<div class="mod">
										<div class="bd booklist-subject">
											<div data-cls="btn-sm" data-bid="{{ $val->id }}" data-shelfstat="undefined" data-menu="right" class="pull-right hidden-xs btn-group initshelf">
												<a onclick="addShelf({{ $uid }},{{ $val->id }},0)" data-state="follow" data-bid="{{ $val->id }}" class="btn btn-sm btn-primary">加入书架</a>
												<div class="btn-group">
													<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle btn-sm btn-primary"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
													<ul role="menu" class="dropdown-menu dropdown-menu-right">
														<li><a href="javascript:;" onclick="addShelf({{ $uid }},{{ $val->id }},0);" data-state="wait" data-bid="{{ $val->id }}"> 加入待看 </a></li>
														<li><a href="javascript:;" onclick="addShelf({{ $uid }},{{ $val->id }},1);" data-state="already" data-bid="{{ $val->id }}"> 已经看完 </a></li>
														<li class="divider"></li>
														<li><a href="javascript:;">取消</a></li>
													</ul>
												</div>
											</div>
											<div class="post">
												<a href="/book/{{ $val->id }}" target="_blank"><img src="{{ $val->img_url }}" style="max-height:125px;max-width:100px;"></a>
												<div data-cls="btn-block" data-bid="{{ $val->id }}" data-shelfstat="undefined" data-nomenu="true" class="imgextra visible-xs-block btn-group initshelf">
													<a onclick="addShelf({{ $uid }},{{ $val->id }},0);" data-state="follow" data-bid="{{ $val->id }}" class="btn btn-block btn-primary">加入书架</a>
												</div>
											</div>
											<div class="title">
												<a href="/book/{{ $val->id }}" target="_blank">{{ $val->name }}</a>
											</div>
											<div class="rating">
												<span class="allstar00"></span><span class="rating_nums"></span><span>(0人评价)</span>
											</div>
											<div class="abstract">
												作者: {{ $val->author }}<br>
												字数: {{ $val->wordnum }}万<br>
												最后更新: {{ $val->Humans}}<br>
												综合评分: <span class="num2star">0.0</span>
											</div>
										</div>
									</div>
								</div>
							</div> 
							@endforeach
						</div>
						<ul style="margin-top:5px;margin-bottom:8px;" class="pagination pull-right">
							{!! $book->appends($args)->render() !!}

							<!-- <li><a href="javascript:;" onclick="ys.common.jumpurl('page',null)">«</a></li>
							<li class="active"><a href="javascript:;" onclick="ys.common.jumpurl('page',1)">1       </a></li>
							<li><a href="javascript:;" onclick="ys.common.jumpurl('page',2)">2       </a></li>
							<li><a href="javascript:;" onclick="ys.common.jumpurl('page',3)">3       </a></li>
							<li><a href="javascript:;" onclick="ys.common.jumpurl('page',4)">4       </a></li>
							<li><a href="javascript:;" onclick="ys.common.jumpurl('page',5)">5       </a></li>
							<li><a href="javascript:;" onclick="ys.common.jumpurl('page',829)">» </a></li> -->
						</ul>
						<p style="margin:0;padding:0;height:30px;" class="clearfix">
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include("footer")