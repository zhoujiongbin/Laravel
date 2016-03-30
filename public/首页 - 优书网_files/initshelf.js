if(typeof ys=="undefined")ys={};
ys.initshelf=initShelf;


function initShelf(dom){
	var dom=$(dom);
	if(!dom[0])return false;
	var bid=parseInt(dom.data("bid")),cls=dom.data("cls"),shelfstat=dom.data("shelfstat");
	var menu=dom.data("menu"),menuExtraStr="";
	if(menu ==="right") menuExtraStr="dropdown-menu-right";
	if(!bid)return false;

	if(!cls)cls="";
	var statText={
		follow:"追看本书",
		already:"已经看完",
		wait:"加入待看"
	};
	switch(shelfstat){
		case "wait":
			cls += " btn-info";
			var btnStr='<a class="btn '+cls+'" disabled>正在养肥</a>';
			var liArr=['follow','already'];
			
			break;
		case "already":
			cls += " btn-success";
			var btnStr='<a class="btn '+cls+'" disabled>已经看完</a>';
			var liArr=['follow','wait'];
			
			break;
		case "rubbish":
			cls += " btn-primary ys-blackbtn";
			var btnStr='<a class="btn '+cls+'" disabled>已经忽略</a>';
			var liArr=['follow','wait','already'];
			break;
		case "follow":
			cls += " btn-warning";
			var btnStr='<a class="btn '+cls+'" disabled>正在追看</a>';
			var liArr=['wait','already'];
			break;
		default:
			cls += " btn-primary";
			var btnStr = '<a onclick="ys.common.changeBookShelfState(this)" data-state="follow" data-bid="'+bid+'" class="btn '+cls+'">加入书架</a>';
			var liArr=['wait','already'];
			break;
	}
	if(dom.data("nomenu")){
		return dom.html(btnStr);
	}
	var tmpArr = [];
	for(var i=0;i<liArr.length;i++){
		var stat = liArr[i];
		var text = statText[stat];
		var aDomText = '<a href="javascript:;" onclick="ys.common.changeBookShelfState(this);" data-state="'+stat+'" data-bid="'+bid+'"> '+text+' </a>'
		tmpArr.push('<li>'+aDomText+'</li>');
	}
	var tmpStr= tmpArr.join("");
	var domStr = [btnStr,
		'<div class="btn-group">',
			'<button type="button" data-toggle="dropdown" aria-expanded="false" class="btn dropdown-toggle '+cls+'">',
				'<span class="caret"></span>',
				'<span class="sr-only">Toggle Dropdown</span>',
			'</button>',
			'<ul role="menu" class="dropdown-menu '+menuExtraStr+'">',
				tmpStr,
				'<li class="divider"></li>',
				'<li><a href="javascript:;">取消</a></li>',
			'</ul>',
		'</div>'
	].join("");
	dom.html(domStr);
 	return true;
}
