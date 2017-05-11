require(["jquery", "domReady!"], function($){
	function waitForElement(elementPath, callBack){
	  window.setTimeout(function(){
		if($(elementPath).length){
		  callBack(elementPath, $(elementPath));
		}else{
		  waitForElement(elementPath, callBack);
		}
	  },500)
	}
	
   $.get('/crosssell/index/crosssell',function(response){
	   waitForElement("#crosssellblock",function(){
			$("#crosssellblock").html(response);
		});
	   })
});
