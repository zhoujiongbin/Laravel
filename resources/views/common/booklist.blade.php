<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
	<table class="table shudanlist">
	<tbody>
	@foreach($booklist as $k => $val)
	<tr class="list-item">
		<td style="width:40px;">
			<a onclick="" data-listid="" class="votes"><i class="fa fa-thumbs-o-up"></i><small>{{ $val->love }}</small></a>
		</td>
		<td>

			<h4 style="line-height:30px;"><a href="/booklist/{{ $val->id }}" target="_blank" class="name"><small style="color:red">[{{ $val->type }}] </small>{{ $val->title }}</a></h4>
		</td>
		<td class="fixedwidth2">
			<p>
				{{ $val->count }}
			</p>
			<p class="small">
				本书
			</p>
		</td>
		<td class="fixedwidth hidden-xs">
			<p>
				 {{ $val->Humans }}
			</p>
			<p class="small">
				时间
			</p>
		</td>
		<td class="fixedwidth2">
			<p>
				{{ $val->username }}
			</p>
			<p>
				用户
			</p>
		</td>
	</tr>
	@endforeach
	</tbody>
	</table>
</div>
@if($uid != 0)
<div>
	<button data-target="#addbooklist" data-toggle="modal" class="btn btn-primary btn-block">新建推书单</button>
</div>
<div id="addbooklist" tabindex="-1" role="dialog" aria-labelledby="mybooklist" aria-hidden="true" data-backdrop="false" class="modal fade">
	<div class="modal-dialog modal-sm" style="width:520px">
		<form class="modal-content" onsubmit="return false;" method="post">
			{!! csrf_field() !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="mybooklist">新建推书单</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" name="listid" value="">
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