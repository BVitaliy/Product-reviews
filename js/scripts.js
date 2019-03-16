$(document).ready(function(){
   $('#review-form').submit(function(e){
       e.preventDefault();
       
       $.ajax({
			type: "POST",
			url: "send.php",
           data: new FormData(this),
           contentType: false,
           cache: false,
           processData: false,
           success: function(result){
               $("#review-form").trigger("reset");
               setTimeout(function(){
                   
               },1000);
           }
       });
   }); 
});