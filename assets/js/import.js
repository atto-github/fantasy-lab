(function(){
	var s = document.getElementsByTagName("script");
	var d = s[s.length-1].src.substring(0, s[s.length-1].src.lastIndexOf("/")+1);
	for(var i=0; i<arguments.length; i++){
		document.write('<script type="text/javascript" src="'+d+arguments[i]+'"></script>');
	}
})(


//フッター固定
"footerFixed.js",
	

//ループスライダー
"endless-river.js",


//run
"run_common.js"	
);