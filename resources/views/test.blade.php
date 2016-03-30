
@include("header")
	<div class="container">
		<div class="row">
			<div class="sokk-index-left col-sm-3 col-md-3 col-lg-3 col-xs-12">
				<div class="hidden-xs">
					<ul style="background-color:#4596d3;" class="nav nav-stacked">
					@foreach($category as $key => $value)
						@if($key == 0)
							<li class="start">
						@else
							<li>
						@endif
						<a href="/tag/{{ $value->tag }}" target="_blank"><em class="pull-right">&gt;</em>{{ $value->tag }}</a></li>
					@endforeach
					</ul>
				</div>
				<div style="margin:10px 0;" class="visible-xs">
					<a onclick="" data-offtext="关闭所有分类" data-ontext="查看所有分类" class="btn btn-block btn-primary">查看所有分类</a>
				</div>
			</div>
			<div class="col-sm-9 col-md-9 col-lg-9 col-xs-12">
				<div class="center-block sokk-index-middle">
					<div class="online">
						<div style="margin-left:10px;" class="sd pull-right">
							<button onclick="" class="btn btn-primary">添加新书</button>
						</div>
						<form id="globalsearchform" style="margin-bottom:10px;" onsubmit="" class="form">
							<div class="input-group">
								<input id="globalsearchtxt" type="text" name="searchTextInput" placeholder="输入书名/作者名/用户/书单" class="form-control"><span class="input-group-btn"><button type="button" onclick="ys.common.globalsearch()" class="btn btn-default">搜索</button></span>
							</div>
						</form>
					</div>
					<div class="panel panel-default sokk-index-middle-panel">
						<div class="panel-body">
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
									@foreach($top as $key => $val)
										<tr>
										<td>
										<a href="/book/{{ $val->id }}" target="_blank"><small style="padding:3px 6px;border-radius:4px;margin-right:3px;" class="bg-info">推荐</small>{{ $val->name }}</a>
										</td>
										<td class="hidden-xs">
										{{ $val->author }}
										</td>
										<td class="small">
										{{ $val->lastest }}
										</td>
										<td class="hidden-xs">
										{{ $val->Humans }}
										</td>
										<td style="min-width:43px;pading:1px;">
										<span><a onclick="{{ $val->id }}" class="btn btn-xs btn-primary">加入书架</a></span>
										</td>
										</tr>
									@endforeach
								</tbody>
								</table>
							</div>
						</div>
						<div class="panel-footer">
							<a href="/shelf" style="text-align:center;font-size: 14px;" class="center-block">点击进入书架</a>
						</div>
					</div>
				</div>
			</div>
		</div>
@include("footer")