
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
								<input id="globalsearchtxt" type="text" name="searchTextInput" placeholder="输入书名/作者名/书单" class="form-control"><span class="input-group-btn"><button type="button" onclick="ys.common.globalsearch()" class="btn btn-default">搜索</button></span>
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
										<span><a onclick="addShelf({{ $uid }},{{ $val->id }}, 0);" class="btn btn-xs btn-primary">加入书架</a></span>
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
			<div class="clearfix"></div>
			<div style="padding-left:15px;padding-right:15px;">
				<div class="panel panel-primary">
				<div style="padding-top:0;padding-bottom:0;" class="panel-heading">
					<a style="display:block;color:#fff;padding:10px 0;" data-toggle="collapse" href="#zonghengTop" aria-expanded="false" aria-controls="zonghengTop" class="collapsed">纵横月票榜<i class="fa fa-autocaret pull-right"></i></a>
				</div>
			</div>
			<div id="zonghengTop" class="panel-collapse in">
				<div class="panel-body text-indent">
					@foreach($zongheng as $key => $val)
				<div class="col-md-4 col-sm-12">
				<div style="margin:0px;" class="booklist-item">
					<div class="mod">
						<div class="bd booklist-subject">
							<div class="post">
								<a href="/book/{{ $val->bookName }}" target="_blank"><img src="http://static.zongheng.com/upload/{{ $val->cover }}" style="max-height:125px;max-width:100px;"></a>
							</div>
							<div class="title">
								<a href="/book/{{ $val->bookName }}" target="_blank">{{ $val->bookName }}</a>
							</div>
							<div class="abstract">
								月票数:{{ $val->number }}<br>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			</div>
			</div>
		</div>
		<div style="padding-left:15px;padding-right:15px;">
				<div class="panel panel-primary">
				<div style="padding-top:0;padding-bottom:0;" class="panel-heading">
					<a style="display:block;color:#fff;padding:10px 0;" data-toggle="collapse" href="#qidianTop" aria-expanded="false" aria-controls="qidianTop" class="collapsed">起点月票榜<i class="fa fa-autocaret pull-right"></i></a>
				</div>
			</div>
			<div id="qidianTop" class="panel-collapse collapse">
				<div id='qidiantop' class="panel-body text-indent">

			</div>
			</div>
		</div>
		<div style="padding-left:15px;padding-right:15px;">
			<div class="ys-friendlinks clearfix">
			<h5 class="pull-left">友情链接：</h5>
			<ul class="list-inline">
				<li><a href="http://www.lkong.net" target="_blank">龙空论坛</a></li>
				<li><a href="http://www.tiandizw.com" target="_blank">天地中文网</a></li>
				<li><a href="http://yc.ireader.com.cn" target="_blank">掌阅小说网</a></li>
				<li><a href="http://www.zhulang.com" target="_blank">逐浪中文网</a></li>
				<li><a href="http://www.hongshu.com" target="_blank">红薯中文网</a></li>
				<li><a href="http://www.quyuewang.cn/" target="_blank">趣阅中文网</a></li>
				<li><a href="http://mm.17k.com " target="_blank">17K女生网</a></li>
				<li><a href="http://www.tadu.com/" target="_blank">塔读文学</a></li>
				<li><a href="http://www.ouj.com/" target="_blank">偶家中文网</a></li>
			</ul>
		</div>
	</div>	
		</div>
	</div>		
<script type="text/javascript">
function Book(a, b, c, d, e, f, g, h, i, j, k) { 
	this.BookId = a; this.BookName = b; this.AuthorId = c; this.AuthorName = d; this.CategoryId = e; this.CategoryName = f; this.Amount = g; this.BZ1 = h; this.BZ2 = i; this.BZ3 = j;
	}
</script>
<script type="text/javascript" src="http://script.cmfu.com/Script/Top.js"></script>
<script>
$(function () {
	var str = "";
	for (var i = 0; i < TopMonthTicketPK.length ; i++) {
		str += "<div class='col-md-6 col-sm-12'><div style='margin:0px;' class='booklist-item'><div class='mod'><div class='bd booklist-subject'><div class='post'><a href='/book/"+TopMonthTicketPK[i].BookName+"' target='_blank'><img src='"+TopMonthTicketPK[i].BZ1+"' style='max-height:125px;max-width:100px;'></a></div><div class='title'><a href='/book/"+TopMonthTicketPK[i].BookName+"' target='_blank'>"+TopMonthTicketPK[i].BookName+"</a></div><div class='abstract'>月票数:"+ TopMonthTicketPK[i].Amount+"<br></div></div></div></div></div>"
	}
	$("#qidiantop").append(str);
})
</script>
</div>
@include("footer")