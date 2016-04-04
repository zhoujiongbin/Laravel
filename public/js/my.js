$(function () {
	  $('[data-toggle="popover"]').popover()
})

function  jumpurl(key,word){
		var astr=document.location.search;
		if(astr.substr(0,1)==="?"){
			astr=astr.substr(1);
		}
		var a=astr.split("&");

		var keyInUrl=false;
		for(var i=0;i<a.length;i++){
		  var tmparr=a[i].split("=");
		  if(tmparr[0] =="page" && key!=="page"){
				a[i]="";
				continue;
			}
		  if(tmparr[0] == key){
		    keyInUrl=true;
		    tmparr[1]=word;
		    if(word!==null){
		    	a[i]=tmparr.join("=");
		    }else{
		    	a[i]="";
		    }
		    continue;
		  }
		}
		if(!keyInUrl && word !== null){
		  a.push(key+"="+word);
		}

		var searchstr=a.join("&");
		var length=searchstr.length;
		if(searchstr.substr(0,1)==="&")searchstr=searchstr.substr(1);
		if(length && searchstr.substr(length-1,1)==="&")searchstr=searchstr.substr(0,length-1);
		document.location.search=searchstr;
}
function addShelf(uid, bookid, status){
	if(uid == 0){
		$("#login-modal-sm").modal('show');
	} else {
		$.ajax({
        type: "GET",
        dataType: "json",
        url: "http://guiyu.org/api/addShelf",
        data:{bookid:bookid,status:status},
        success: function(json) {
        	if(json.status == 'ok'){
        		alert("操作成功");
        	}else{
        		alert(json.message);
        	}
        }
   		});
	}
}

function changeShelf(uid, bookid, status){
	if(uid == 0){
		$("#login-modal-sm").modal('show');
	} else {
		$.ajax({
        type: "GET",
        dataType: "json",
        url: "http://guiyu.org/api/changeShelf",
        data:{bookid:bookid,status:status},
        success: function(json) {
        	if(json.status == 'ok'){
        		alert("操作成功");
        	}else{
        		alert(json.message);
        	}
        }
   		});
	}
}

function showShelf(uid,status){
	if(uid == 0){
		$("#login-modal-sm").modal('show');
	} else {
		$.ajax({
        type: "GET",
        dataType: "json",
        url: "http://guiyu.org/api/bookshelf/"+status,
        success: function(json) {
        	var str = "";
        	for (var i = 0; i < json.length; i++) {
        		str +='<tr id="listbook_2"><td><a href="/book/'+ json[i].id +'" target="_blank">'+ json[i].name+'</a></td><td class="hidden-xs">'+json[i].author+'</td><td>'+json[i].lastest+'</td><td>'+json[i].updatetime+'</td><td class="hidden-xs"><a href="'+json[i].source_url+'" target="_blank">点击阅读</a></td><td><div class="btn-group"><button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-xs btn-primary dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" style="float:right;right:0;left:auto;" class="dropdown-menu"><li><a  onclick="changeBookShelfState('+json[i].id+',0);">移动至：正在看</a></li><li><a  onclick="changeBookShelfState('+json[i].id+',2);"> 移动至：养肥中</a></li><li><a  onclick="changeBookShelfState('+json[i].id+',1);"> 弃书或忽略本书</a></li><li class="divider"></li><li><a href="javascript:;">取消</a></li></ul></div></td></tr>';
        	}
        	$("#tboddyconten").html(str);
        }
   		});
	}
}