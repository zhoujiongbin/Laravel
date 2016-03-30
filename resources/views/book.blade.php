
@include("header")


<div class="container">
	<div class="row">
		<div class="col-md-7 col-sm-12"><div  id="booktag" class="sokk-book-buttons"><a href="/tag/{{ $book->tag }}" style="background-color:#5bc0de;color:#fff" class="tag category">{{ $book->tag }}</a></div>
	</div>
	<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-sm-7">
				<div style="height:30px;line-height:30px;">
					<span style="font-size:18px;font-weight:bold;">{{ $book->name }}</span>
				</div>
				<div class="media">
					<a href="{{ $book->source_url }}" target="_blank" class="hidden-xs pull-left"><img src="{{ $book->img_url }}" class="bookavatar"><button style="margin-top:-3px" class="btn btn-primary btn-block">开始阅读</button></a><a href="{{ $book->source_url }}" target="_blank" class="visible-xs pull-left"><img src="{{ $book->img_url }}" class="bookavatar"><button style="margin-top:-3px" class="btn btn-primary btn-block">开始阅读</button></a>
					<div class="media-body ys-bookmain">
						<ul class="list-unstyled list-sm">
							<li>作者:<a href="/search/{{ $book->author }}?type=author" target="_blank">{{ $book->author }}</a></li>
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
							<span style="font-size:20px;color:#4d7bd6">&nbsp;<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>&nbsp;5.9</span><small>&nbsp;&nbsp;本书共有16个评价</small>
						</div>
					</div>
					<div class="rate-bar-chart">
						<div class="progress">
							<div style="width:1.6%" class="progress-bar progress-bar-primate">
							</div>
							<div style="width:25%" class="progress-bar progress-bar-hidden">
								1.6%
							</div>
						</div>
						<div class="progress">
							<div style="width:40.3%" class="progress-bar progress-bar-primate">
								40.3%
							</div>
						</div>
						<div class="progress">
							<div style="width:25.0%" class="progress-bar progress-bar-primate">
								25.0%
							</div>
						</div>
						<div class="progress">
							<div style="width:20.2%" class="progress-bar progress-bar-primate">
								20.2%
							</div>
						</div>
						<div class="progress">
							<div style="width:12.9%" class="progress-bar progress-bar-primate">
								12.9%
							</div>
						</div>
						<div style="height:40px;line-height:40px;" class="xs-align-left">
							<span style="font-size:18px">我的评分: &nbsp;</span><span id="myrate" style="font-size:21px;" data-bid="{{ $book->id }}" data-rate="1"><i style="color:#4d7bd6" class="fa fa-star"></i><i style="color:#ccc" class="fa fa-star"></i><i style="color:#ccc" class="fa fa-star"></i><i style="color:#ccc" class="fa fa-star"></i><i style="color:#ccc" class="fa fa-star"></i></span><span>&nbsp;</span><span id="myratelabel" style="font-size:18px;width:56px;display:inline-block;">剧毒</span>
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
						<button data-readstate="follow" data-bid="{{ $book->id }}" class="sokk-readstate-btn btn btn-default">追看本书</button><button data-readstate="wait" data-bid="{{ $book->id }}" class="sokk-readstate-btn btn btn-default">养肥本书</button><button data-readstate="already" data-bid="{{ $book->id }}" class="sokk-readstate-btn btn btn-default">已看本书</button>
					</div>
					<div class="btn-group">
						<button id="btn-rubbish" data-readstate="rubbish" data-bid="{{ $book->id }}" class="btn sokk-readstate-btn btn-default">不看本书</button>
					</div>
					<div class="btn-group">
						<button onclick="ys.book.tobooklist();" class="btn btn-warning">加入推书单</button>
					</div>
					<div class="btn-group">
						<a href="/newthread/{{ $book->id }}" target="_blank" class="btn btn-default">写书评</a>
					</div>
				</div>
			</div>
			<div class="hide">
				<div id="readstatewait">
					<div class="input-group">
						<span class="input-group-addon">本书到了</span><input type="text" value="30" name="wordnum" onfocus="ys.book.inputFocus(this)" onblur="ys.book.inputBlur(this)" class="form-control"><span class="input-group-addon">万字后提醒我</span>
					</div>
				</div>
				<div id="writecontent">
					<div class="form-group">
						<input type="text" name="title" value="" class="form-control"><br>
						<textarea rows="6" name="content" class="form-control"></textarea>
					</div>
				</div>
				<div id="tobooklist" data-url="/ajax/getsimplebooklist">
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
	</div>
</div>	


@include("footer")