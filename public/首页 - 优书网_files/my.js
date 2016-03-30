$(function(){
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})

	$(window).on("storage",function(e){
		var event=e.originalEvent;
		if(event.key==="ysnotice"){
			var value=event.newValue;
			if(!value)return false;
			try{
				var data=JSON.parse(value)
				ys.common.setNotice(data);
			}catch(err){}
		}
	});

	// init shelf
	(function(){
		var initshelfArr=$(".initshelf");
		if(initshelfArr[0]){
			for(var i=0;i<initshelfArr.length;i++){
				ys.initshelf(initshelfArr[i]);
			}
		}
	})();



	var headeruser=$("#headeruser");
	if(headeruser[0]){
		headeruser.on("mouseover", function() {
    	if ($(this).parent().is(".open")) {
        return;
    	}
    	$(this).dropdown("toggle");
		})
	}

$("[name='switch-checkbox']").bootstrapSwitch();
	$(".ys-index-bdlist").on("mouseenter","li.oneitem",function(ev){
		var self=$(this),parent=self.parent();
		parent.children("li.oneitem").removeClass("on");
		self.addClass("on");
	}).on("mouseleave",function(ev){
		$(this).children("li.oneitem").removeClass("on").first().addClass("on");
	})
	 $('.selectpicker').selectpicker();
})
if(typeof ys=="undefined")ys={};
(function(window,$){
	var SOKK={};
	ys.common=SOKK;
	// 加入书架
	SOKK.jumpurl=function(key,word){
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
	SOKK.num2star=function(objArr){
	  objArr.each(function(key,val){
	    var dom=$(val),num=parseInt(dom.text());
	    var strArr=[];
	    if(num>0 && num<=5){
	      for(var i=1;i<=5;i++){
	        if(i>num){
	          strArr.push('<i style="color:#ccc" class="fa fa-star"></i>');
	        }else{
	          strArr.push('<i style="color:#4D7BD6" class="fa fa-star"></i>');
	        }
	      }
	      var str=strArr.join("");
	      dom.html(str);
	    }
	  })
	}

	SOKK.setNotice=function(data){
		var all=0;
		for(var i in data){
			var s =parseInt(data[i]);
			if(s)all +=s;
		}
		if(typeof data!=="object")return false;
		var navbarButton = $("#notice-navbar-button");
		if(!navbarButton[0])return false;
		if(all){
			navbarButton.html('<span class="badge">'+all+'</span>');
		}else{
			navbarButton.html('<i class="fa fa-bell"></i>');
		}
		var parentDom =$("header > .container");
		var noticeBadge = parentDom.find("span.ysh-notice-badge"),blBadge = parentDom.find("span.ysh-bl-badge"),fansBadge = parentDom.find("span.ysh-fans-badge");
		noticeBadge.text(data.noticenum?data.noticenum:"");
		blBadge.text(data.blnum?data.blnum:"");
		fansBadge.text(data.fansnum?data.fansnum:"");
		return true;
	}
	SOKK.setNoticeAll = function(data){
		SOKK.setNotice(data);
		if(window.localStorage){
			var str=JSON.stringify(data),ls=window.localStorage;
			// ls.removeItem("ysnotice");
			ls.setItem("ysnotice",str);
		}
	}
	// 全局搜索的连接转换
	SOKK.globalsearch=function(){
		var value=$("#globalsearchtxt").val();
		if(value){
				value=$.trim(value);
				value=encodeURIComponent(value);
				window.location.href="/search/"+value;
		}
		return false;
	}
	// 添加新书
	SOKK.addbook=function(){

		var value=$("#globalsearchtxt").val();
		var nomodal=false;
		if(value){
				value=$.trim(value);
				if(value.substr(0,4)==="http"){
					var data={bookurl:value};
					nomodal=true;
					SOKK.addbooksubmit(data,function(result){
						if(!result || result.error){
							newModal();
						}else if(result.bid){
							window.location="/book/"+result.bid;
						}
					})
				}
		}

		if(!nomodal){
			newModal();
		}

		function newModal(){
			var content=[
				'<p>请在下方输入需要添加的书页地址(http开头)</p>',
				'<input type="text" class="form-control" name="bookurl" />'].join("");
			var config={title:"添加新书",content:content,submit:function(){
				if(this.form){
					var data=this.form.serialize();
					var modal=this;
					SOKK.addbooksubmit(data,function(result){
						if(result && result.bid){
							modal.modal("hide");
							window.location="/book/"+result.bid;
						}
					})
				}

			}};
			createModal(config).modal("show");
		}
		return false;
	}


	SOKK.addbooksubmit=function(data,callback){
		submitForm({data:data,url:"/addbook",callback:callback});
	}
	// 加入书架
	SOKK.toshelf=function(bid){
		var data={bid:bid,state:"follow"};
		submitForm({data:data,url:"/ajax/readbookstate",type:"get",callback:function(data){

		}});
	}
	// 关注推书单
	SOKK.followbooklist=function(listid){
		var obj=null,hasfollow=false;
		if(typeof listid === "object"){
			obj=$(listid);
			var listid = obj.data("listid");
			var hasfollow = parseInt(obj.data("hasfollow"));
		}
		var action = hasfollow?"nofollow":"follow";
		UserBookList(listid,action,function(data){
			if(obj){
				if(data.action === "nofollow"){
					obj.data("hasfollow","0").removeClass("btn-danger").addClass("btn-success").find("span.word").text("关注书单 ");
				}else if(data.action === "follow"){
					obj.data("hasfollow","1").removeClass("btn-success").addClass("btn-danger").find("span.word").text("取消关注 ");
				}
				var small = obj.children("small");
				if(!small[0]){
					small = obj.parent().parent().children("p").first();
					var text = data.action === "nofollow"?"关注":"取关";
					obj.text(text);
				}
				small.text(data.actionnum);
			}
		});
		//toastr.success("成功关注了推书单！");
	}
	// 关注推书单
	SOKK.lovebooklist=function(obj){
		var dom=$(obj);
		var listid=dom.data("listid");
		if(!listid)return false;
		UserBookList(listid,"love",function(data){
			var num=parseInt(data.actionnum);
			if(num){
				dom.children("small").text(num);
			}
		});
		//toastr.error("Mongoose Error:can not be require one static parse syntax in line ···");
	}
	SOKK.loveonecomment=function(obj){
		var dom=$(obj),parent=dom.parent();
		var cid=parent.data("cid");
		if(!cid)return;
		var data={cid:cid};
		var spandom=dom.children(".num");
		var options={url:"/ajax/loveonecomment",data:data,callback:function(data,form){
			if(data.action == "love"){
				dom.removeClass("btn-default").addClass("btn-danger");
				setspannum(spandom,"love");
			}else if(data.action == "dislove"){
				dom.removeClass("btn-danger").addClass("btn-default");
				setspannum(spandom,"dislove");
			}
		}}
		submitForm(options);
	}

	SOKK.loveonebook=function(obj){
		var dom=$(obj),parent=dom.parent();
		var bid=parent.data("bid"),listid=parent.data("listid");
		var data={lid:listid,bid:bid};
		var spandom=dom.children(".num");
		var options={url:"/ajax/lovebooklistbook",data:data,callback:function(data,form){
			if(data.action == "love"){
				dom.removeClass("btn-default").addClass("btn-danger");
				setspannum(spandom,"love");
			}else if(data.action == "dislove"){
				dom.removeClass("btn-danger").addClass("btn-default");
				setspannum(spandom,"dislove");
			}
		}}
		submitForm(options);
	}
	function setspannum(spandom,action){
			var s=parseInt(spandom.text());
			if(!s)s=0;
			if(action=="love"){
				s++;
			}else{
				s--;
			}
			if(s<=0)spandom.text("");
			else
			spandom.text(""+s);
	}

	function UserBookList(listid,action,callback){
		var data={lid:listid,action:action};
		var options={url:"/ajax/userbooklist",data:data,callback:function(data,form){
			if(data.action == action){
				typeof callback ==="function" && callback(data);
			}
		}}
		submitForm(options);
	}

	// 登录
	SOKK.login=function(form){
		var form=$(form);
		var input=form.find("input");
		var username=input[0].value;
		var password=input[1].value;
		var dataParam={};
		dataParam.username=$.trim(username);
		dataParam.password=$.trim(password);
		if(!dataParam.username){
			changeTip("请输入用户名");
			return false;
		}else if(!dataParam.password){
			changeTip("请输入密码");
			return false;
		}
		$.post("/login",dataParam,function(data){
			if(!data){
				changeTip("网络请求失败！");
			}else if(data.ok){
				toastr.success("登录已经成功！");
				location.reload();
			}else if(data.error){
				changeTip(data.error);
			}else{
				changeTip("登录失败！");
			}

		})
		function changeTip(info){
			toastr.error(info);
		}
	}

	SOKK.logout=function(){
			$.get("/logout",function(data){
					if(data && data.ok) location.reload();
			})
	}
	SOKK.submitform=function(form){



	}
	SOKK.inputFocus=function(obj){
		$(obj).closest('.input-group, .form-group').addClass('focus');
	}
	SOKK.inputBlur=function(obj){
		$(obj).closest('.input-group, .form-group').removeClass('focus');
	}

	SOKK.showmenu=function(obj){
		var dom=$(obj),menuDom=dom.parent().prev();
		var offtext=dom.data("offtext"),ontext=dom.data("ontext");
		if(menuDom.hasClass("hidden-xs")){
			menuDom.removeClass("hidden-xs");
			dom.data("status","on").text(offtext).removeClass("btn-primary").addClass("btn-default");
		}else{
			menuDom.addClass("hidden-xs");
			dom.data("status","off").text(ontext).removeClass("btn-default").addClass("btn-primary");
		}
	}
	// 快速回复
	SOKK.quickreply=function(obj){
		var form=$(obj);
		var data=form.serialize();
		var options={url:"/ajax/replybookreview",form:form,data:data,callback:function(data,form){
			if(data.pid){
				var tourl="/thread/"+data.bid+"/"+data.tid;
				if(data.page>1){
					tourl = tourl+"/"+data.page;
				}
				var num=~~(Math.random()*9999);
				tourl = tourl+"?r="+num;
				tourl = tourl+"#p_"+data.pid;
				var textarea=$("#reply_textarea");
				if(textarea.get(0)){
					textarea.val("");
				}
				document.location.href=tourl;
			}
		}}
		submitForm(options);
	}
	// 回复弹窗
	SOKK.replyModal=function(obj){
		var dom=$(obj);
		var tid=dom.data("tid"),pid=dom.data("pid"),bid=dom.data("bid");
		var content=[
			'<input type="hidden" name="bid" value="'+bid+'" />',
			'<input type="hidden" name="tid" value="'+tid+'" />',
			'<input type="hidden" name="pid" value="'+pid+'" />',
			'<textarea name="message" style="margin-top:6px;width:100%;height:200px;" class="form-control"></textarea>'
		].join("");
		var config={
			title:"回复",
			content:content,
			submit:function(){
				var form=this.form;
				var data=form.serialize();
				var modal=this;
				var options={url:"/ajax/replybookreview",form:form,data:data,callback:function(data,form){
					if(data.pid){
						var tourl="/thread/"+data.bid+"/"+data.tid;
						if(data.page>1){
							tourl = tourl+"/"+data.page;
						}
						var num=~~(Math.random()*9999);
						tourl = tourl+"?r="+num;
						tourl = tourl+"#p_"+data.pid;
						modal.modal("hide");
						document.location.href=tourl;
					}
				}}
				submitForm(options);
			}
		}
		createModal(config).modal("show");
	}
	SOKK.editBookListUser=function(obj){
		var listid=$(obj).data("listid");
		if(!listid)return false;
		var listid = $.trim(listid);
		var content=[
			'<input type="hidden" name="listid" value="'+listid+'" />',
			'<div>',
				'<input type="text" name="username" placeholder="书单作者的用户名" class="form-control" />',
			'</div>',
			'<p class="clearfix bg-info" style="margin: 7px 0;padding:4px;">',
				'这里的作者的用户名必须填写全称',
			'</p>'
		].join("");
		var config={content:content};
		config.title="修改书单的作者";
		config.submit=function(){
			var modal=this,form=this.form;
			var data=form.serialize();
			var options={data:data,url:"/ajax/editbooklistuser"};
			options.callback=function(data){
				if(data.ok){
					location.reload(true);
				}
			}
			submitForm(options);
			this.modal("hide");
		}
		createModal(config).modal("show");
	}


	SOKK.blToTopic=function(obj){
		var listid=$(obj).data("listid");
		if(!listid)return false;
		$.get("/ajax/gettopics",function(data){
			var options=[];
			options.push("<option>选择专题</option>")
			for(var i=0;i<data.length;i++){
				var option='<option value="'+data[i]._id+'" data-num="'+data[i].num+'">'+data[i].name+'</option>';
				options.push(option);
			}
			var content=[
			'<input type="hidden" name="listid" value="'+listid+'" />',
			'<div style="" >',
				'<select name="topic" autocomplete="off" class="form-control">',
					options.join(""),
				'</select>',
			'</div>',
			'<div style="margin-top:10px">',
				'<input type="text" name="smallname" placeholder="请输入分期名" class="form-control" />',
			'</div>',
			'<p class="clearfix bg-info" style="margin: 7px 0;padding:4px;">',
				'加入专题之前，你必须确保这个书单已经完成，切记',
			'</p>',
			'<textarea name="info" placeholder="本期的推荐感言>10字" style="margin-top:6px;width:100%;height:80px;" class="form-control"></textarea>'
			].join("");
			var config={title:"加入专题",content:content,size:"small"};
			config.submit=function(){
				var modal=this,form=this.form;
				var data=form.serialize();
				var options={data:data,url:"/ajax/booklisttotopic"};
				options.callback=function(data){
					if(data.topicid){
						window.document.location="/topic/"+data.topicid;
					}
				}
				submitForm(options);
				this.modal("hide");
			}
			createModal(config).modal("show");
		})
	}

	// 编辑
	SOKK.editBookListModal=function(obj){
		var listid="";
		var listname="",listinfo="",listcategory="",acceptanceText;
		var acceptance = false;
		if(obj){
			var dom=$(obj);
			if(dom[0]){
				listid = dom.data("listid");
				listname = dom.data("listname");
				listinfo = dom.data("listinfo");
				listcategory = dom.data("listcategory");
				acceptanceText = dom.data("acceptance");
			}
		}
		if(acceptanceText !== "noacceptance"){
			if(!acceptanceText)acceptanceText="";
			var acceptancehiddenvalue = "1";
			var acceptanceInputHTML = '<input type="checkbox" checked data-on-text="开启" data-off-text="关闭" data-label-width="10px" id="acceptance"/>';
			var acceptanceTextHTML = '<input type="text" class="form-control" placeholder="请输入征求小说的方向，20字符以内" id="acceptanceText" value="'+acceptanceText+'" name="acceptancetext"/>';
		}else{
			var acceptancehiddenvalue = "2";
			var acceptanceInputHTML = '<input type="checkbox" data-on-text="开启" data-off-text="关闭" data-label-width="10px" id="acceptance"/>';
			var acceptanceTextHTML = '<input type="text" class="form-control" placeholder="请输入征求小说的方向，20字符以内" id="acceptanceText" style="display:none" name="acceptancetext" />';
		}
		var optionarr=[{name:"选择分类",value:""},{name:"男频",value:"male"},{name:"女频",value:"female"},{name:"综合",value:"all"}];
		var options=[];
		for(var i=0;i<optionarr.length;i++){
			if(listcategory && listcategory==optionarr[i].name){
				var option='<option value="'+optionarr[i].value+'" selected>'+optionarr[i].name+'</option>'
			}else{
				var option='<option value="'+optionarr[i].value+'">'+optionarr[i].name+'</option>';
			}
			options.push(option);
		}
		var listid = $.trim(listid);
		var content=[
			'<input type="hidden" name="listid" value="'+listid+'" />',
			'<div style="width:88px;" class="pull-right">',
				'<select name="category" autocomplete="off" class="form-control">',
					options.join(""),
				'</select>',
			'</div>',
			'<div style="margin-right:90px">',
				'<input type="text" name="listname" placeholder="推书单标题" class="form-control" value="'+listname+'"/>',
			'</div>',
			'<p class="clearfix bg-info" style="margin: 7px 0;padding:8px;">',
				'推书单的分类代表你这个推书单的主要受众，如果面向男性可选男频，面向女性可选女频。',
			'</p>',
			'<textarea name="listinfo" placeholder="推书单简介" style="margin:6px 0 ;width:100%;height:80px;" class="form-control">'+listinfo+'</textarea>',
			'<p class="bg-info" style="margin: 7px 0;padding:8px;">',
				'你还可以选择是否求助网友来帮你补充书单内容，如果选择开启，请填写要征求的题材、分类或其他特点，比如说 仙侠类 足球小说 无敌流 等等',
			'</p>',
			'<span>是否开启求助网友补单：</span>',
			'<input type="hidden" name="acceptance" id="acceptancehidden" value="'+acceptancehiddenvalue+'">',
			'<span style="margin-left:10px">',
					acceptanceInputHTML,
			'</span>',
			'<div style="margin-top:15px;">',
				acceptanceTextHTML,
			'</div>'
		].join("");
		var config={content:content};
		if(listid){
			config.title="编辑推书单";
		}else{
			config.title="新建推书单";
		}
		config.submit=function(){
				var form=this.form;
				var data=form.serialize();
				var modal=this;
				var options={url:"/ajax/editbooklist",form:form,data:data,callback:function(data,form){
					if(data.listid){
						var needlocation=true;
						if(data.tag=="new"){
							var booklistselect=$("#booklistselect");
							if(booklistselect[0]){
								needlocation=false;
								var optionstr="<option value='"+data.listid+"'>"+data.listname+"</option>";
								booklistselect.append(optionstr).selectpicker('render').selectpicker('val', data.listid);
							}
						}
						modal.modal("hide");
						if(needlocation){
							document.location="/booklist/"+data.listid;
						}
					}
				}}
				submitForm(options);

		}
		createModal(config).modal("show");
		$("#acceptance").bootstrapSwitch().on("switchChange.bootstrapSwitch",function(ev,data){
        if(data){
        	$("#acceptancehidden").val("1");
        	$("#acceptanceText").show();
        }else{
        	$("#acceptancehidden").val("2");
        	$("#acceptanceText").hide();
        }
    })
	}
	SOKK.proposal = function(obj){
		var dom = $(obj);
		var listid = dom.data("listid"),acceptance=dom.data("acceptance");
		if(!listid)return false;
		var config={title:"给书单提书"};
		config.content=[
			'<p class="bg-info" style="margin: 7px 0;padding:8px;">',
				'你可以在这里给这个书单添加一本书，本书单征求的书是',
				'<span style="font-weight:bold;color:red;">',
				acceptance,
				"</span>",
				'方向的图书，请在书名框里输入书名，并从下拉提示框选择你想添加的书',
			'</p>',
			'<input type="hidden" name="lid" value='+listid+'>',
			'<input type="hidden" name="bid" id="proposalbooklist_bid">',
			'<p class="pull-right" style="width:100px;line-height: 30px;height:30px;overflow:hidden;">未选择图书</p>',
      '<div class="input-group" style="width: auto;margin-right:110px;">',
		    '<input type="text" class="form-control" id="proposalbooklist_name" placeholder="输入书名">',
		    '<div class="input-group-btn" style="position:static;">',
		        '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">',
		            '<span class="caret"></span>',
		        '</button>',
		        '<ul class="dropdown-menu dropdown-menu-right hidebookid" role="menu" style="padding-left:15px;">',
		        '</ul>',
		    '</div>',
			'</div>',
			'<p class="bg-info" style="margin: 7px 0;padding:8px;">',
				'你需要填写一段为何推荐本书的理由，该理由只有单主才能看到',
			'</p>',
			'<textarea name="reason" placeholder="简短的推荐语,不超过300字" style="margin-top:6px;width:100%;height:120px;" class="form-control"></textarea>'
		].join("");
		config.submit=function(){
			var modal=this,form=this.form;
			var data=form.serialize();
			var options={data:data,url:"/ajax/proposal"};
			options.callback=function(data){
				modal.modal("hide");
			}
			submitForm(options);
		}
		var modal=createModal(config);
		var proposalbooklist_bid=$("#proposalbooklist_bid");
		$("#proposalbooklist_name").bsSuggest({
			allowNoKeyword: false,
			autoMinWidth:false,
			getDataMethod: "url",
			indexId: 2, //data.value 的第几个数据，作为input输入框的内容
      indexKey: 0,
      listAlign:"right",
			url: '/ajax/quickbook?name=',
			processData: function (json) {// url 获取数据时，对数据的处理，作为 getData 的回调函数
				var data = {value: []};
				if(json){
					data.value=json;
				}
	      return data;
	    }
		}).on("onSetSelectValue", function (event, result) {
			if(result && result.id){
				console.log(result);
				proposalbooklist_bid.val(result.id).next().text(result.key);

			}
		});
		modal.modal("show");
	}
	SOKK.removeBookList=function(listid){
		if(!listid)return false;
		var config={title:"删除图书",content:"你确定要把删除这个推书单么？<br>注意：只有当书单里没有任何书的时候才能删除",size:"small"};
		config.submit=function(){
			var option={url:"/ajax/removebooklist"};
			option.data={listid:listid};
			option.callback=function(data){
				if(data.uid){
					document.location="/user/"+data.uid+"/booklist";
				}
			}
			submitForm(option);
			this.modal("hide");
		}
		createModal(config).modal("show");
	}

	SOKK.ignoreBookList=function(obj){
		var obj=$(obj);
		var listid=obj.data("listid"),ignore=obj.data("ignore");
		var config={size:"small"};
		var newignore;
		if(ignore){
			config.title="取消屏蔽";
			config.content="点击确定可以取消屏蔽这个推书单";
			newignore=0;
		}else{
			config.title="屏蔽推书单";
			config.content=
				["你确定要屏蔽这个推书单么？",
				'<p class="bg-info" style="margin:5px 0;padding:10px">',
					'屏蔽后不会在书单列表中显示',
				'</p>',
				'<p class="normalp">',
					'<input type="checkbox" value="1" id="flushremoveblcheck"> &nbsp;&nbsp;',
					'<label for="flushremoveblcheck">直接强制删除书单(慎选)</label>',
				'</p>'].join("");
			newignore=1;
		}
		config.submit=function(){
			var flushDom=$("#flushremoveblcheck");
			if(flushDom[0] && flushDom.prop("checked")){
				this.modal("hide");
				flushRemoveBookList(listid);
				return;
			}
			var option={url:"/ajax/ignorebooklist"};
			option.data={listid:listid,ignore:newignore};
			option.callback=function(data){
				if(data.ok){
					location.reload(true);
				}
			}
			submitForm(option);
			this.modal("hide");
		}
		createModal(config).modal("show");
	}

	function flushRemoveBookList(listid){
		var config={size:"small",title:"警告！"};
		config.content=[
			'<p class="bg-danger" style="margin:10px 0;padding:10px;">',
				'警告！你可能在强制删除一个有用的书单！为了谨慎起见，请在输入框中填入 DELETE 字符并确定',
			'</p>',
			'<input type="hidden" name="listid" value='+listid+'>',
			'<input type="text" class="form-control" autocomplete="off" name="checktext">'
		].join("");
		config.submit=function(){
			var modal=this,form=this.form;
			var data=form.serialize();
			var options={data:data,url:"/ajax/flushremovebooklist"};
			options.callback=function(data){
				if(data.ok){
					location.reload(true);
				}
			}
			submitForm(options);
			this.modal("hide");
		}
		createModal(config).modal("show");
	}

	SOKK.digestBookList=function(obj){
		var obj=$(obj);
		var listid=obj.data("listid"),digest=obj.data("digest");
		var config={size:"small"},newdigest;
		if(digest){
			config.title="取消精华";
			config.content="你确定要取消这个推书单的精华么？";
			newdigest=0;
		}else{
			config.title="加入精华";
			config.content="点击确定可以把该书单加入精华书单";
			newdigest=1;
		}
		config.submit=function(){
			var option={url:"/ajax/digestbooklist"};
			option.data={listid:listid,digest:newdigest};
			option.callback=function(data){
				if(data.ok){
					location.reload(true);
				}
			}
			submitForm(option);
			this.modal("hide");
		}
		createModal(config).modal("show");
	}

	SOKK.findBookToBookList=function(listid){
		if(!listid)return false;
		var content=[
			'<input type="hidden" name="listoptions" value="'+listid+'" />',
			'<input type="hidden" name="bid" value="0" id="tobooklist_bid" />',
			'<div style="width:88px;" class="pull-right">',
			'<select  name="rate" autocomplete="off" class="form-control">',
				'<option value="0">选择评分</option>',
				'<option value="5">仙草</option>',
				'<option value="4">粮草</option>',
				'<option value="3">干粮</option>',
				'<option value="2">毒草</option>',
				'<option value="1">剧毒</option>',
			'</select>',
			'</div>',
      '<div class="input-group" style="width: auto;margin-right:90px;">',
		    '<input type="text" class="form-control" id="tobooklist_name" placeholder="输入书名">',
		    '<div class="input-group-btn" style="position:static;">',
		        '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">',
		            '<span class="caret"></span>',
		        '</button>',
		        '<ul class="dropdown-menu dropdown-menu-right hidebookid" role="menu" style="padding-left:15px;">',
		        '</ul>',
		    '</div>',
			'</div>',
			'<textarea name="reason" placeholder="简短的推荐语,不超过300字" style="margin-top:6px;width:100%;height:140px;" class="form-control" id="tobooklist_textarea"></textarea>'
		].join("");
		var config={content:content,title:"添加新书"};
		config.submit=function(){
			var modal=this,form=this.form;
			var data=form.serialize();
			var options={data:data,url:"/ajax/tobooklist"};
			options.callback=function(data){
				modal.modal("hide");
				document.location="/booklist/"+listid;
			}
			submitForm(options);
		}
		var modal=createModal(config);
		var tobooklist_bid=$("#tobooklist_bid");
		$("#tobooklist_name").bsSuggest({
			allowNoKeyword: false,
			autoMinWidth:false,
			getDataMethod: "url",
			indexId: 2, //data.value 的第几个数据，作为input输入框的内容
      indexKey: 0,
      listAlign:"right",
			url: '/ajax/quickbook?name=',
			processData: function (json) {// url 获取数据时，对数据的处理，作为 getData 的回调函数
				var data = {value: []};
				if(json){
					data.value=json;
				}
	      return data;
	    }
		}).on("onSetSelectValue", function (event, result) {
			if(result && result.id){
				tobooklist_bid.val(result.id);
			}
		});
		$("#tobooklist_textarea").maxlength();
		modal.modal("show");
	};
	// 建议反馈
	SOKK.feedback=function(){
		var modal = createModal({
			size:'middle',
			title:'建议反馈',
			content:[
				'<div>',
					'<textarea class="form-control" style="min-height:120px;margin-bottom:1em;" placeholder="欢迎提出你在使用优书网时遇到的问题或对优书网的建议" name="content"></textarea>',
					'<input type="text" class="form-control" name="qq" placeholder="你也可以留下QQ或邮箱，以便优书网回复"/>',
				'</div>'
			].join(""),
			submit:function(){
				var option={url:"/ajax/feedback"};
				option.data=this.form.serialize();
				var modal=this;
				option.callback=function(data){
					if(data.ok){
						modal.modal("hide");
					}
				}
				submitForm(option);
			}
		}).modal("show");

	}

	// 编辑推书单的评语
	SOKK.editBookListBook=function(obj){
		var dom=$(obj).parent();
		var config={title:"编辑评语"};
		var bid=dom.data("bid"),listid=$(dom).data("listid");
		if(!bid || !listid)return false;
		var pyspan=$("#pyspan_"+bid);
		if(!pyspan[0])return false;
		config.content=[
			'<input type="hidden" name="bid" value="'+bid+'" / >',
			'<input type="hidden" name="listid" value="'+listid+'" / >',
			'<textarea name="content" class="form-control" style="height:140px;">'+pyspan.text()+'</textarea>',
		].join("");

		config.submit=function(){
			var option={url:"/ajax/editbooklistbook"};
			option.data=this.form.serialize();
			var modal=this;
			option.callback=function(data){
				if(data.text){
					pyspan.text(data.text);
					modal.modal("hide");
				}
			}
			submitForm(option);
		}
		createModal(config).modal("show");
	}
	// 删除推书单中的书
	SOKK.deleteBookListBook=function(obj){
		var dom=$(obj).parent();
		var config={title:"删除图书",content:"你确定要把本书移除这个推书单么？",size:"small"};
		var bid=dom.data("bid"),listid=dom.data("listid");
		if(!bid || !listid)return false;
		config.submit=function(){
			var option={url:"/ajax/removebooklistbook"};
			option.data={bid:bid,listid:listid};
			option.callback=function(data){
				if(data.bid){
					$("#listbook_"+data.bid).animate({height:0},"normal","swing",function(){
						$(this).remove();
					});
				}
			}
			submitForm(option);
			this.modal("hide");
		}
		createModal(config).modal("show");
	}
	// 转移书架的状态
	SOKK.changeBookShelfState=function(obj){
		var dom=$(obj);
		var bid=dom.data("bid"),state=dom.data("state");
		if(!bid || !state)return false;
		if(state!=="wait"){
			changeReadState(bid,state);
		}else{
			var body='<div class="input-group"><span class="input-group-addon">本书到了</span><input type="text" value="30" name="wordnum" onfocus="ys.book.inputFocus(this)" onblur="ys.book.inputBlur(this)" class="form-control"><span class="input-group-addon">万字后提醒我</span></div>';
			var config={title:"养肥本书",content:body};
			config.submit=function(){
				var modal=this,form=this.form;
				var arr=form.serializeArray();
				var extra={};
				for(var i=0;i<arr.length;i++){
					extra[arr[i].name]=arr[i].value;
				}
				extra.modal=modal;
				changeReadState(bid,state,extra);
				modal.modal("hide");
			}
			createModal(config).modal("show");
		}
	}

	SOKK.viewOneComment=function(cid){
		if(!cid)return;
		var baseUrl="/ajax/getonecomment";
		var data={render:true,cid:cid};
		ajaxPromise(function(){
			return $.getJSON(baseUrl,data,function(data){
				if(!data) {
					toastr.error("未接受到数据");
				}else if(data.error){
					toastr.error(data.error);
				}else if(data.html){
					var config={title:"书评",content:data.html,size:"large",footer:false};
					config.submit=function(){
						var modal=this,form=this.form;
						var option={url:"/ajax/postcommentreply"};

					}
					createModal(config).modal("show");
					ys.common.num2star($(".num2star"));
				}
			})
		})
	}
	SOKK.replyComment=function(obj){
		var parent=$(obj).parent();
		var cid=parent.data("cid");
		if(!cid)return ;
		var option={url:"/ajax/postcommentreply"};
		var textInput=parent.children(".ys-editdiv");
		if(textInput[0]){
			var message = $(textInput[0]).text();
		}
		if(!message)return;
		textInput=$(textInput[0]);
		option.data={cid:cid,message:message};
		option.callback=function(data){
			textInput.html("");
			SOKK.getcommentreply(cid,null);
		}
		submitForm(option);
	}
	SOKK.showreplycommentbox=function(obj,name){
		var parent=$(obj).parent().parent();
		var replyBox = parent.children(".ys-replycomment");
		if(!replyBox[0])return;
		replyBox=replyBox.first();
		if(replyBox.is(":hidden") === false){
			return replyBox.hide();
		}
		replyBox.show();
		if(name){
			var textInput=replyBox.children(".ys-editdiv");
			var thetext = textInput.text();
			if(thetext.indexOf("@"+name)===-1){
				textInput.text("@"+name+" ");
			}
		}
	}
	SOKK.sendPhoneMessage = function(obj){
		var phone = $(obj).find("input").first().val();
		if(!phone){
			toastr.error("你没有输入手机号");
			return;
		}
		phone = phone.trim();
		var option={url:"/ajax/sendphonemessage",type:"get",data:{phone:phone}};
		submitForm(option);
	}

	SOKK.hiddenrepycommentbox=function(obj){
		var parent=$(obj).parent();
		if(parent[0])parent.hide();
	}
	SOKK.getcommentreply=function(cid,t){
		renewCommentReply(cid,t,function(html){
			if(html)$("#comment-reply-list").html(html);
		})
	}
	SOKK.followuser=function(obj){
		if(!obj)return;
		var dom=$(obj);
		var uid = dom.data("uid"),action=dom.data("action");
		if(!uid)return;
		var option={url:"/ajax/followuser",type:"get"};
		option.data={uid:uid,action:action};
		option.callback=function(data){
			if(data){
				if(data.action=="follow"){
					dom.data("action","unfollow");
					dom.removeClass("btn-info").addClass("btn-danger").text("取消关注");
				}else{
					dom.data("action","");
					dom.removeClass("btn-danger").addClass("btn-info").text("关注Ta");
				}
			}
		}
		submitForm(option);
	}
	function renewCommentReply(cid,t,callback){
		var data={cid:cid,t:t,render:true};
		$.getJSON("/ajax/getcommentreply",data,function(data){
			if(data && data.html && typeof callback==="function"){
				callback(data.html);
			}
		})
	}
	function changeReadState(bid,state,extra){
	  var data={bid:bid,state:state};
    var modal=null;
    if(extra){
    	for(var i in extra){
    		if(extra.hasOwnProperty(i) && i!=="modal") {
					data[i]=extra[i];
				}
    	}
    	if(extra.modal)modal= extra.modal;
    }
		var option={url:"/ajax/readbookstate",type:"get"};
		option.data=data;
		option.callback=function(data){
			if(data.state){
				// $("#listbook_"+data.bid).animate({height:0},"normal","swing",function(){
				// 	$(this).remove();
				// });
				// 改变一下加入书架的状态
				var doms = $(".initshelf[data-bid='"+data.bid+"']");
				if(doms[0]){
					for(var i=0;i<doms.length;i++){
						$(doms[i]).data("shelfstat",data.state);
						ys.initshelf(doms[i]);
					}
				}
			}
		}
		submitForm(option);
	}

	if(typeof ysNoticeData==="object"){
		SOKK.setNoticeAll(ysNoticeData);
	}
})(window,$)


function ajaxPromise(ajaxfunc,keyword){
	if(!keyword)keyword="default";
	if(!this.promise_)this.promise_={};
	if(this.promise_[keyword] && this.promise_[keyword].state() === "pending"){
		this.promise_[keyword].abort();
	}
	this.promise_[keyword]=ajaxfunc();
}
window._manas = [];
function showManas(manas){
	if(typeof manas === "string"){
		try{
			manas = JSON.parse(manas);
		}catch(err){}
	}

	if(typeof manas!=="object" || !manas.length)return false;
	for(var i=0;i<manas.length;i++){
		this._manas.push(manas[i]);
	}
	displayManas();
}

function displayManas(){
	if(this._showmanaprocess) return;
	if(!this._manas || !this._manas.length) return;
	this._showmanaprocess=true;
	var mana = this._manas.shift();
	setTimeout(function(){
		this._showmanaprocess=false;
		displayManas();
	},2000);
	if(mana.num>0){
		var text = "积分 +"+mana.num;
		var x = toastr.info;
	}else{
		var text = "积分 "+mana.num;
		var x = toastr.error;
	}
	x(mana.title,text,{
		positionClass:"toast-top-center",
		containerId:"ys-container",
		timeOut: "2000",
	})
}

function defaultDataHandler(data){
	if(data && data.manas && data.manas.length){
		showManas(data.manas);
	}
	if(!data) {
		toastr.error("未接受到数据",null,{
				timeOut: "2000",
			});
	}else if(data.error){
		toastr.error(data.error,null,{
				timeOut: "2000",
			});
		if(data.needlogin){
			needLogin();
		}else if(data.needVerify){
			needValidate();
		}
	}else if(data.ok){
		if(typeof data.okmsg !=="undefined"){
			if(data.okmsg) toastr.success(data.okmsg);
		}else{
			toastr.success("操作已经成功",null,{
				timeOut: "2000",
			});
		}
		return true;
	}else if(!data.content){
		toastr.error("未知错误！",null,{
				timeOut: "2000",
			});
	}else if(data.needModal){
		return true;
	}
	return false;
}

// SOKK.createModal=createModal;
function createModal(config){
	//config={title:"",size:"",content:"",submit=function(){}}
	var commonModal=$("#commonModal");
	if(commonModal[0])commonModal.remove();
	var sizecls="";
	if(config.size=="small"){
		var sizecls="modal-sm";
	}else if(config.size=="large"){
		var sizecls="modal-lg";
	}
	if(config.footer!==false){
		config.footer=true;
	}
	var html=['<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="commonModalLabel" aria-hidden="true" id="commonModal">',
  	'<div class="modal-dialog '+sizecls+'">',
    	'<form class="modal-content">',
      	'<div class="modal-header">',
        	'<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>',
        	'<h4 class="modal-title" id="commonModalLabel">',
        		config.title,
        	'</h4>',
      	'</div>',
      	'<div class="modal-body">',
      	config.content,
      	'</div>'].join("");
  if(config.footer){
		html = html + ['<div class="modal-footer">',
        	'<a class="btn btn-default" data-dismiss="modal">取消</a>',
        	'<button type="button" class="btn btn-primary">确定</button>',
      	'</div>'].join("");
  };
 	html = html + ['</div>',
  	'</div>',
	'</div>'].join("");

	commonModal=$(html);
	if(typeof config.submit =="function"){
		commonModal.form=commonModal.find("form");
		var func=config.submit.bind(commonModal);
		commonModal.form.on("submit",function(){
			func();
			return false;
		})
		commonModal.find("button:last-child").on("click",func);
	}
	$("body").append(commonModal);
	return commonModal;
}

function submitForm(config){
	var data=config.data,baseUrl=config.url;
	var form=config.form;
	var callback=config.callback;
	if(config.type && config.type.toLowerCase()=="get"){
		var type="get";
	}else{
		var type="post";
	}
	ajaxPromise(function(){
		var options = {
			url:baseUrl,
			data:data,
			type:type,
			dataType:"json",
			success:function(data){
				var result = defaultDataHandler(data);
				if(result && typeof callback =="function"){
					callback.call(null,data,form);
				}
			},
			error:function(err){
				toastr.error("网络错误！");
			}
		}
		if(typeof config.extra  === "object"){
			for(var i in config.extra){
				options[i] = config.extra[i];
			}
		}
		return $.ajax(options);
	})
}



function commonFormData(obj,callback){
	if(!obj)return false;
	var form =$(obj);
	var baseUrl = form.attr("action");
	var data=form.serialize();
	var returns= {data:data,url:baseUrl,form:form};
	if(typeof callback=="function"){
		returns.callback=callback;
		submitForm(returns);
	}
	return returns;
}

function needLogin(){
	var modal=$('#login-modal-sm');
	if(modal[0]){
	  $('#login-modal-sm').modal();
	}
}
function needValidate(){
	var config = {size:"small",title:"验证身份"}
	config.content = [
		'<div>',
			'<div class="input-group" style="margin-bottom:1em;">',
				'<input type="text" name="phone" class="form-control" placeholder="11位手机号码">',
				'<span class="input-group-btn">',
					'<a href="javascript:;" onclick="ys.common.sendPhoneMessage(this.parentNode.parentNode)" class="btn btn-success">发送验证码</a>',
				'</span>',
			'</div>',
			'<input type="text" class="form-control" name="code" placeholder="请输入手机接受到的验证码">',
		'</div>'
	].join("");
	config.submit=function(){
		var modal=this,form = this.form;
		var option = {url:"/ajax/checkphonecode"};
		option.data=form.serialize();
		option.callback=function(data){
			modal.modal("hide");
		}
		submitForm(option);
	}
	createModal(config).modal("show");
}

// $("body").on("copy",function(e){
// 		var event = e.originalEvent;
// 		var data = event.clipboardData;
// 		 event.preventDefault();
// 		 var range = window.getSelection().getRangeAt(0);

// 		 var dom = $("<div></div>").append(range.cloneContents());
// 		 var url = location.href;
// 		 var html;
// 		if(dom.html()){
// 			var preHtml = [
// 			"<p>本文来源龙空<br></p>",
// 			"<p>链接为：",
// 				"<a href='"+url+"' target='_blank'>"+url+"</a><br>",
// 			"</p>"].join("");
// 			html = preHtml+dom.html();
// 			data.setData("text/html",html);
// 		}
// 		if(html){
// 			var str = html.replace(/(<\/div>|<\/br>|<\/p>)/g,"\r\n").replace(/<[^>]+?>/g,"").replace(/(&nbsp;)+/g," ");
//       if(str){
//          var arr = str.split("\r\n");
//          str = arr.map(function(str){return str.trim();}).filter(function(str){return !!str}).join("\r\n");
//       }
// 			if(!str) {
// 				var preStr = "本文来源龙空:\r\n链接为："+url+"\r\n";
// 				str = preStr + range.toString();
// 			}
// 			if(str) data.setData("text",str);
// 		}
	// })