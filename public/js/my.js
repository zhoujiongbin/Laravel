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
