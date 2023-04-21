<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    </head>
    <body>
        <div class="container">
            <<button>Send AJAX Request</button>
        </div>
        <div id ="result">

        </div>
        <script>
$(document).ready(function(){
  $('button').click(function(){
    $.ajax({
      type:'post',
      url : "<?php echo base_url();?>fetch",
      success: function(data){
        console.log(data);
      }
    });
  });
});
// function sendRequest() {
// 			var xhttp = new XMLHttpRequest();
			
// 			xhttp.open("POST", "<?php echo base_url('fetch'); ?>", true);            
//             // setting "X-Requested-With" as "XMLHTTPRequest" in header is important
//             // otherwise the request->isAJAX() does not work.
// 			xhttp.setRequestHeader("X-Requested-With", "XMLHTTPRequest");
// 			xhttp.send();
            
//             xhttp.onreadystatechange = function() {
// 				if (this.readyState == 4 && this.status == 200) {                    
//                     alert('Response received!');
//                     document.getElementById("ajaxResponse").innerHTML = this.responseText;                                                             
// 				}
// 			};
// 		} 
</script>
    </body>
</html>