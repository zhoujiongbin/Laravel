@include("header")

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">起点月票榜</p>
			<table id="qidian1" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						数量
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://top.qidian.com/Default.aspx" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">起点月点击</p>
			<table id="qidian2" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						数量
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://top.qidian.com/Default.aspx" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">起点月推荐</p>
			<table id="qidian3" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						数量
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://top.qidian.com/Default.aspx" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">起点新人榜</p>
			<table id="qidian4" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						作者
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://top.qidian.com/Default.aspx" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">起点女频月票</p>
			<table id="qidian5" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						数量
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://top.qidian.com/Default.aspx" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">起点收藏榜</p>
			<table id="qidian6" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						作者
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://top.qidian.com/Default.aspx" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">纵横月票榜</p>
			<table id="zongheng1" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						月票数
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://book.zongheng.com/rank.html" target="_blank"><p class="text-center">查看更多</p></a>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<p class='bg-info' style="padding:10px;">纵横潜力月票榜</p>
			<table id="zongheng2" class="table table-striped">
				<thead>
					<tr>
					<th>
						书名
					</th>
					<th>
						月票数
					</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<a href="http://book.zongheng.com/rank.html" target="_blank"><p class="text-center">查看更多</p></a>
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
		str += "<tr><td>"+TopMonthTicketPK[i].BookName+"</td><td>"+TopMonthTicketPK[i].Amount+"</td></tr>"
	}
	$("#qidian1").append(str);
	str = "";
	for (var i = 0; i < TopMonthHit.length ; i++) {
		str += "<tr><td>"+TopMonthHit[i].BookName+"</td><td>"+TopMonthHit[i].Amount+"</td></tr>"
	}
	$("#qidian2").append(str);
	str = "";
	for (var i = 0; i < TopMonthVote.length ; i++) {
		str += "<tr><td>"+TopMonthVote[i].BookName+"</td><td>"+TopMonthVote[i].Amount+"</td></tr>"
	}
	$("#qidian3").append(str);
	str = "";
	for (var i = 0; i < TopXRAuthorVip.length ; i++) {
		str += "<tr><td>"+TopXRAuthorVip[i].BookName+"</td><td>"+TopXRAuthorVip[i].AuthorName+"</td></tr>"
	}
	$("#qidian4").append(str);
	str = "";
	for (var i = 0; i < TopMMMonthTicket.length ; i++) {
		str += "<tr><td>"+TopMMMonthTicket[i].BookName+"</td><td>"+TopMMMonthTicket[i].Amount+"</td></tr>"
	}
	$("#qidian5").append(str);
	str = "";
	for (var i = 0; i < TopCollect.length ; i++) {
		str += "<tr><td>"+TopCollect[i].BookName+"</td><td>"+TopCollect[i].AuthorName+"</td></tr>"
	}
	$("#qidian6").append(str);

	str = "";
	$.ajax({
        type: "GET",
        dataType: "json",
        url: "http://guiyu.org/api/zongheng/1/10",
        success: function(json) {
        	var str = "";
        	for(var i in json){
        		str += "<tr><td>"+json[i].bookName+"</td><td>"+json[i].number+"</td></tr>";
        	}
        	$("#zongheng1").append(str);
        }
    });
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "http://guiyu.org/api/zongheng/2/10",
        success: function(json) {
        	var str = "";
        	for(var i in json){
        		str += "<tr><td>"+json[i].bookName+"</td><td>"+json[i].number+"</td></tr>";
        	}
        	$("#zongheng2").append(str);
        }
    });
})
</script>
@include("footer")