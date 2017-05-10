require(['jquery'],function($){
   $.get('crosssell/index/crosssell',function(response){
      $("#crosssellblock").html(response);
   })
})
