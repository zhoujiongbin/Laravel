@include('header')

<div class="sokk-body">
	<div class="container">
		<div class="row">
			<div class="col-md-2 sokk-index-left">
				<ul style="margin-bottom:10px;" class="nav nav-stacked sokk-shelf-nav">
					<li id="li0" class="start"><a onclik="showShelf({{ $uid }},0);">正在看</a></li>
					<li id="li2"><a onclik="showShelf({{ $uid }},2);">养肥中</a></li>
					<li id="li1"><a onclik="showShelf({{ $uid }},1);">已看完</a></li>
				</ul>
			</div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-body">
						【正在看】的书可以在首页直接查看最新更新，方便追更。<br>
						【养肥中】的书等到字数满足之后会自动跳到【正在看】书架，并且提醒阅读。<br>
						【已看完】的书，会保留阅读记录方便查看浏览和建立书单。<br>
						已经弃书或者不想看的书，可以移动到【弃书或者忽略】，<a onclick="showShelf({{ $uid }},1)">点击这里 </a>查看已经忽略的书籍。
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
						<th style="width:6em;">
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
					<tr id="listbook_2">
						<td>
							<a href="/book/2" target="_blank">风姿物语</a>
						</td>
						<td class="hidden-xs">
							罗森
						</td>
						<td>
							第二十三集（完结篇） 第八章
						</td>
						<td>
							06/01/20
						</td>
						<td class="hidden-xs">
							<a href="http://www.qidian.com/Book/878.aspx" target="_blank">点击阅读</a>
						</td>
						<td>
							<div class="btn-group">
								<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-xs btn-primary dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
								<ul role="menu" style="float:right;right:0;left:auto;" class="dropdown-menu">
									<li><a href="javascript:;" onclick="changeBookShelfState(this);" data-state="0" data-bid="2"> 
										移动至：正在看
									</a></li>
									<li><a href="javascript:;" onclick="changeBookShelfState(this);" data-state="2" data-bid="2"> 
										移动至：养肥中
									</a></li>
									<li><a href="javascript:;" onclick="changeBookShelfState(this);" data-state="1" data-bid="2"> 
										弃书或忽略本书
									</a></li>
									<li class="divider"></li>
									<li><a href="javascript:;">取消</a></li>
								</ul>
							</div>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@include('footer')