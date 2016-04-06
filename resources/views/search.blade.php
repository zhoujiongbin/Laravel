@include("header")

<div class="container">
<div class="row">
@foreach($book as $key => $val)
	<div class="col-md-4 col-sm-12">
	<div style="margin:0px;" class="booklist-item">
		<div class="mod">
			<div class="bd booklist-subject">
				<div class="post">
					<a href="/book/{{ $val->id }}" target="_blank"><img src="{{ $val->img_url }}" style="max-height:125px;max-width:100px;"></a>
				</div>
				<div class="title">
					<a href="/book/{{ $val->id }}" target="_blank">{{ $val->name }}</a>
				</div>
				<div class="abstract">
					作者:{{ $val->author }}<br>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
</div>
</div>
</div>

@include("footer")