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
        		toastr.success('操作成功');
        	}else{
        		toastr.error(json.message);
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
        		toastr.success('操作成功');
        		window.location.reload();

        	}else{
        		toastr.error(json.message);
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
        		if(status == 0){
        			str +='<tr id="listbook_2"><td><a href="/book/'+ json[i].id +'" target="_blank">'+ json[i].name+'</a></td><td class="hidden-xs">'+json[i].author+'</td><td>'+json[i].lastest+'</td><td>'+json[i].updatetime+'</td><td class="hidden-xs"><a href="'+json[i].source_url+'" target="_blank">点击阅读</a></td><td><div class="btn-group"><button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-xs btn-primary dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" style="float:right;right:0;left:auto;" class="dropdown-menu"><li><a  onclick="changeShelf('+ uid +','+json[i].id+',1);">移动至：已看完</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',2);"> 移动至：养肥中</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',3);"> 弃书或忽略本书</a></li><li class="divider"></li><li><a href="javascript:;">取消</a></li></ul></div></td></tr>';
        		}
        		if(status == 1){
        			str +='<tr id="listbook_2"><td><a href="/book/'+ json[i].id +'" target="_blank">'+ json[i].name+'</a></td><td class="hidden-xs">'+json[i].author+'</td><td>'+json[i].lastest+'</td><td>'+json[i].updatetime+'</td><td class="hidden-xs"><a href="'+json[i].source_url+'" target="_blank">点击阅读</a></td><td><div class="btn-group"><button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-xs btn-primary dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" style="float:right;right:0;left:auto;" class="dropdown-menu"><li><a  onclick="changeShelf('+ uid +','+json[i].id+',0);">移动至：正在看</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',2);"> 移动至：养肥中</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',3);"> 弃书或忽略本书</a></li><li class="divider"></li><li><a href="javascript:;">取消</a></li></ul></div></td></tr>';
        		}
        		if(status == 2){
        			str +='<tr id="listbook_2"><td><a href="/book/'+ json[i].id +'" target="_blank">'+ json[i].name+'</a></td><td class="hidden-xs">'+json[i].author+'</td><td>'+json[i].lastest+'</td><td>'+json[i].updatetime+'</td><td class="hidden-xs"><a href="'+json[i].source_url+'" target="_blank">点击阅读</a></td><td><div class="btn-group"><button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-xs btn-primary dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" style="float:right;right:0;left:auto;" class="dropdown-menu"><li><a  onclick="changeShelf('+ uid +','+json[i].id+',0);">移动至：正在看</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',1);"> 移动至：已看完</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',3);"> 弃书或忽略本书</a></li><li class="divider"></li><li><a href="javascript:;">取消</a></li></ul></div></td></tr>';
        		}
        		if(status == 3){
        			str +='<tr id="listbook_2"><td><a href="/book/'+ json[i].id +'" target="_blank">'+ json[i].name+'</a></td><td class="hidden-xs">'+json[i].author+'</td><td>'+json[i].lastest+'</td><td>'+json[i].updatetime+'</td><td class="hidden-xs"><a href="'+json[i].source_url+'" target="_blank">点击阅读</a></td><td><div class="btn-group"><button type="button" data-toggle="dropdown" aria-expanded="false" class="btn btn-xs btn-primary dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" style="float:right;right:0;left:auto;" class="dropdown-menu"><li><a  onclick="changeShelf('+ uid +','+json[i].id+',0);">移动至：正在看</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',2);"> 移动至：养肥中</a></li><li><a  onclick="changeShelf('+ uid +','+json[i].id+',1);"> 已看完</a></li><li class="divider"></li><li><a href="javascript:;">取消</a></li></ul></div></td></tr>';
        		}
        	}
        	$("#tbodycontent").html(str);
        	$("#li0").removeClass("active");
        	$("#li1").removeClass("active");
			$("#li2").removeClass("active");
			$("#li"+status).addClass("active");
        }
   		});
	}
}


function checkLogin(){
    var email = $("#login-name").val();
    var password = $("#login-pass").val();
    var _token = $("input[name='_token']").val();
    if(!email){
        toastr.error("邮箱不能为空");
    } else if(!password){
        toastr.error("密码不能为空");
    } else{
        $.ajax({
        type: "POST",
        dataType: "json",
        url: "http://guiyu.org/login",
        data:{email:email,password:password,_token:_token},
        success: function(json) {
            if(json.status == "ok"){
                window.location.reload();
            } else{
                toastr.error(json.message);
            }
        }
        });
    }
}


function setting(uid){
    var email = $("#email").val();
    var password = $("#passwordold").val(); //旧密码
    var passwordnew = $("#password1").val(); //新密码
    var passwordcofirm = $("#password2").val(); //重复密码
    var _token = $("input[name='_token']").val();
    var sign = $("#sign").val();
    if(!password || !passwordnew || !passwordcofirm){
        toastr.error("密码不能为空");
    } else if(passwordnew != passwordcofirm){
        toastr.error("两次密码输入不一致");
    } else{
        $.ajax({
        type: "POST",
        dataType: "json",
        url: "http://guiyu.org/login",
        data:{email:email,password:password,_token:_token},
        success: function(json) {
            if(json.status == "ok"){
                $.ajax({type: "POST",dataType: "json",url: "http://guiyu.org/user/"+uid+"/setting",
                data:{password1:passwordnew,email:email,_token:_token,sign:sign},
                success: function(json) {
                    if(json.status == "ok"){
                        toastr.success("操作成功");
                        window.location.reload();
                    } else{
                        toastr.error("网络错误");
                    }
                }
                }); 
            } else{
                toastr.error("密码错误");
            }
        }
        });
    }
}

function comments(){
    var _token = $("input[name='_token']").val();
    var bookid = $("#bookid").val();
    var comment = $("#comment").val();
    var rate = $("#rate").val();
    if(!comment){
        toastr.error("评论不能为空");
    } else if(comment.length > 300) {
        toastr.error("评论内容超过字数");
    } else if(!rate){
        toastr.error("请为本书打分");
    }else{
        $.ajax({
        type: "POST",
        dataType: "json",
        url: "http://guiyu.org/api/addComment",
        data:{bookid:bookid,comment:comment,rate:rate,_token:_token},
        success: function(json) {
            if(json.status == "ok"){
                toastr.success("评论成功");
                window.location.reload();
            } else{
                toastr.error(json.message);
            }
        }
        });
    }
}
function love(id){
     toastr.success("操作成功");
}
function response(id){
    toastr.info("暂无该功能");
}

function addBooklist(){
    var title = $("#title").val();
    var intro = $("#intro").val();
    var type = $("#type").val();
    var listid = $("#listid").val();
    var _token = $("input[name='_token']").val();
    if(!title){
        toastr.error("标题不能为空");
    } else if(!intro){
        toastr.error("简介不能为空");
    } else{
        $.ajax({
        type: "POST",
        dataType: "json",
        url: "http://guiyu.org/api/addBooklist",
        data:{title:title,intro:intro,type:type,listid:listid,_token:_token},
        success: function(json) {
            if(json.status == "ok"){
                toastr.success("操作成功");
                window.location.reload();
            } else{
                toastr.error(json.message);
            }
        }
        });
    }
}

function editBooklist(){
    var title = $("#booklist").attr("data-title");
    var intro = $("#booklist").attr("data-intro");
    var type = $("#booklist").attr("data-type");
    var listid = $("#booklist").attr("data-listid");
    $("#title").val(title);
    $("#intro").val(intro);
    $("#type").val(type);
    $("#listid").val(listid);
}