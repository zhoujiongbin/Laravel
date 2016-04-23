
@include("header")


<div class="container">
	<div class="row">
		<div class="col-md-7 col-sm-12"><div  id="booktag" class="sokk-book-buttons"><a href="/tag/{{ $book->tag }}" style="background-color:#5bc0de;color:#fff" class="tag category">{{ $book->tag }}</a></div>
	</div>
	<div class="col-md-12">
			<div class="col-sm-7">
				<div style="height:30px;line-height:30px;">
					<span style="font-size:18px;font-weight:bold;">{{ $book->name }}</span>
				</div>
				<div class="media">
					<a href="{{ $book->source_url }}" target="_blank" class="hidden-xs pull-left"><img src="{{ $book->img_url }}" class="bookavatar"><button style="margin-top:-3px" class="btn btn-primary btn-block">开始阅读</button></a><a href="{{ $book->source_url }}" target="_blank" class="visible-xs pull-left"><img src="{{ $book->img_url }}" class="bookavatar"><button style="margin-top:-3px" class="btn btn-primary btn-block">开始阅读</button></a>
					<div class="media-body ys-bookmain">
						<ul class="list-unstyled list-sm">
							<li>作者:<a href="/search?word={{ $book->author }}" target="_blank">{{ $book->author }}</a></li>
							<li>字数: {{ $book->word }}字 </li>
							<li>章节数: {{ $book->chapter }}章 </li>
							<li>来自: {{ $book->source }}</li>
							<li>更新时间: {{ $book->updatetime }}</li>
							<li>最新章节: {{ $book->lastest }}</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div style="margin-top:20px;" class="clearfix">
					<div class="visible-xs block-height">
					</div>
					<div class="clearfix">
						<div class="ys-book-averrate xs-align-left">
							<span style="font-size:20px;color:#4d7bd6">书友评分:&nbsp;{{ $bookRate->rate or 0 }}</span><small>&nbsp;&nbsp;本书共有{{ $bookRate->total or 0 }}个评价</small>
						</div>
					</div>
					<div class="rate-bar-chart">
						<div class="progress">
							<div style="width:{{  isset($bookRate) ? $bookRate->rate1/$bookRate->total * 100 : 0 }}%" class="progress-bar progress-bar-primate">
							{{  isset($bookRate) ? $bookRate->rate1/$bookRate->total * 100 : 0 }}%
							</div>
						</div>
						<div class="progress">
							<div style="width:{{ isset($bookRate) ? $bookRate->rate2/$bookRate->total * 100 : 0 }}%" class="progress-bar progress-bar-primate">
								{{ isset($bookRate) ? $bookRate->rate2/$bookRate->total * 100 : 0 }}%
							</div>
						</div>
						<div class="progress">
							<div style="width:{{ isset($bookRate) ? $bookRate->rate3/$bookRate->total * 100 : 0 }}%" class="progress-bar progress-bar-primate">
								{{ isset($bookRate) ? $bookRate->rate3/$bookRate->total * 100 : 0 }}%
							</div>
						</div>
						<div class="progress">
							<div style="width:{{ isset($bookRate) ? $bookRate->rate4/$bookRate->total * 100 : 0 }}%" class="progress-bar progress-bar-primate">
								{{ isset($bookRate) ? $bookRate->rate4/$bookRate->total * 100 : 0 }}%
							</div>
						</div>
						<div class="progress">
							<div style="width:{{ isset($bookRate) ? $bookRate->rate5/$bookRate->total * 100 : 0 }}%" class="progress-bar progress-bar-primate">
								{{ isset($bookRate) ? $bookRate->rate5/$bookRate->total * 100 : 0 }}%
							</div>
						</div>
						<div style="height:40px;line-height:40px;" class="xs-align-left">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="margin-top:5px;margin-bottom:5px;" class="row">
			<div class="col-sm-5 col-sm-push-7">
				<div>
				</div>
			</div>
			<div class="col-sm-7 col-sm-pull-5">
				<div class="sokk-book-button-groups">
					<div class="btn-group">
						<button onclick="addShelf({{ $uid }},{{ $book->id }},0);" class="sokk-readstate-btn btn btn-default">追看本书</button>
						<button onclick="addShelf({{ $uid }},{{ $book->id }},2);" class="sokk-readstate-btn btn btn-default">养肥本书</button>
						<button onclick="addShelf({{ $uid }},{{ $book->id }},1);" class="sokk-readstate-btn btn btn-default">已看本书</button>
					</div>
				</div>
			</div>
		</div>
		<div class="panel panel-primary">
			<div style="padding-top:0;padding-bottom:0;" class="panel-heading">
				<a style="display:block;color:#fff;padding:10px 0;" data-toggle="collapse" href="#bookinfo" aria-expanded="false" aria-controls="bookinfo" class="collapsed">本书简介<i class="fa fa-autocaret pull-right"></i></a>
			</div>
			<div id="bookinfo" class="panel-collapse collapse">
				<div class="panel-body text-indent">
					{{ $intro }}
				</div>
			</div>
		</div>
		<div class="clearfix"></div> 
<div id="content"  class="row js-masonry">
	@if($uid != 0)
	<div class="col-sm-12 col-lg-12 col-xs-12 needmasonry">
		<div style="border-color:#3cf;border-width:2px;" class="thumbnail">
			<div class="caption">
				<form onsubmit="return false;" method="post" class="form">
					{!! csrf_field() !!}
					<div class="media">
						<input type="hidden" id="bookid" name="bookid" value="{{ $book->id }}"><button onclick="comments(0);" class="pull-right btn btn-primary btn-sm">发表书评</button><a href="/user/{{ $uid }}/comments" target="_blank" class="pull-left"><img src="http://guiyu.org/images/logo.png"  class="img-rounded img48"></a>
						<select id="rate" name="rate" style="margin-right: 12px;width: 100px;" autocomplete="off" class="form-control pull-right ">
						<option value="">选择评分</option>
							<option value="1">★</option>
							<option value="2">★★</option>
							<option value="3">★★★</option>
							<option value="4">★★★★</option>
							<option value="5">★★★★★</option>
						</select>
						<div class="media-body">
							<span class="media-heading f16">{{ $username }}</span><br>
						</div>
					</div>
					<textarea id="comment" style="margin-top:5px;height:100px;" name="content" placeholder="短评,最多不能超过300字" class="form-control"></textarea>
					<div class="status">
						最大输入300个字
					</div>
				</form>
			</div>
		</div>
	</div>
	@endif
	@foreach($comment as $key => $val)
	<div class="col-sm-12 col-lg-12 col-xs-12 needmasonry">
		<div data-id='{{ $val->id }}' class="thumbnail">
			<div class="caption">
				<div  class="media clearfix">
					<a href="/user/{{ $val->user_id }}/comments" target="_blank" class="pull-left"><img src="http://guiyu.org/images/logo.png"  class="img-rounded img48"></a>
					<div class="media-body">
						<a href="/user/{{ $val->user_id }}/comments" target="_blank"><span  class="media-heading f16">{{ $val->username }}</span></a><br>
						<span class="small pull-right">{{  $val->updatetime }}         </span>
					</div>
				</div>
				<p class="commentcontent">
					{{ $val->content }}
					@if($val->status == 1)
						<span class="pull-right">(本书评来自书单 <a href="/booklist/{{$val->to}}">{{$val->booklist}}</a>)</span>
					@endif
				</p>
				<hr>
				<div data-id='{{ $val->id }}' style="width:100%" class="btn-group">
					<button type="button" onclick="love({{ $val->id }})" style="width:50%" class="btn btn-default"><i class="fa fa-heart-o"></i>&nbsp;喜欢 <span class="num"></span></button><button type="button" onclick="response({{ $val->id }});"  style="width:50%" class="btn btn-default"><i class="fa fa-reply"></i>&nbsp;评论<span class="num"></span></button>
				</div>
			</div>
		</div>
	</div>
	@endforeach
	</div>
</div>



@include("footer")