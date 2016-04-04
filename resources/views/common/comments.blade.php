<ul style="margin-top:5px;margin-bottom:12px;" class="pagination pull-right">
{!! $comment->render() !!}
</ul>
@foreach($comment as $key => $val)
	<div class="col-sm-12 col-lg-12 col-xs-12 needmasonry">
		<div data-id='{{ $val->id }}' class="thumbnail">
			<div class="caption">
				<div  class="media clearfix">
					<a href="/user/{{ $val->user_id }}/comments" target="_blank" class="pull-left"><img src="http://guiyu.org/images/logo.png"  class="img-rounded img48"></a>
					<div class="media-body">
						<a href="/user/{{ $val->user_id }}/comments" target="_blank"><span class="media-heading f16">{{ $val->username }}</span></a><br>
						<span class="small pull-right">{{  $val->Humans }}         </span>
						
					</div>
				</div>
				<p class="commentcontent">
					{{ $val->content }} <span class="pull-right">(本书评来自 <a href="/book/{{$val->bookname}}">{{$val->bookname}}</a>)</span>
				</p>
				<hr>
				<div data-id='{{ $val->id }}' style="width:100%" class="btn-group">
					<button type="button" onclick="love({{ $val->id }})" style="width:50%" class="btn btn-default"><i class="fa fa-heart-o"></i>&nbsp;喜欢 <span class="num"></span></button><button type="button"  onclick="response({{ $val->id }})" style="width:50%" class="btn btn-default"><i class="fa fa-reply"></i>&nbsp;评论<span class="num"></span></button>
				</div>
			</div>
		</div>
	</div>
	@endforeach