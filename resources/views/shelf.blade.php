@include('header')

<div class="sokk-body">
	<div class="container">
		<div class="row">
			<div class="col-md-2 sokk-index-left">
				<ul style="margin-bottom:10px;" class="nav nav-stacked sokk-shelf-nav">
					<li id="li0" class="start"><a onclick="showShelf({{ $uid }},0);">正在看</a></li>
					<li id="li2"><a onclick="showShelf({{ $uid }},2);">养肥中</a></li>
					<li id="li1"><a onclick="showShelf({{ $uid }},1);">已看完</a></li>
				</ul>
			</div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-body">
						【正在看】保存正在看的书<br>
						【养肥中】保存有意向但字数少的书<br>
						【已看完】保存看完的书，记录浏览记录<br>
						已经弃书或者不想看的书，可以移动到【弃书或者忽略】，<a href="#" onclick="showShelf({{ $uid }},3)">点击这里 </a>查看已经忽略的书籍。
					</div>
				</div>
				<div class="table-responsive11">
					<table class="table table-striped">
					<thead>
					<tr>
						<th>
							书名
						</th>
						<th class="hidden-xs">
							作者
						</th>
						<th>
							最后章节
						</th>
						<th>
							更新时间
						</th>
						<th style="width:6em;" class="hidden-xs">
							阅读链接
						</th>
						<th>
						</th>
					</tr>
					</thead>
					<tbody id="tbodycontent" >
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(function () {
	showShelf({{ $uid }}, 0);
})
</script>
@include('footer')