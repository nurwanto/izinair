<div id ="check"></div>
<script type="text/javascript">
	// console.log("ASDFAS")
	$.ajax({
		    type: 'get',
		    url: 'http://e-gov-bandung.tk/dukcapil/api/public/check/authenticated',
		    success: function(data) {
		    	console.log(data)
		    	if (data != 'false') {
		    		var url = "{{url()}}/izinair/home?id="+data;
		    		window.location.href = url;
		    	} else {
		    		var url = "{{url()}}/izinair/home"
		    		window.location.href = url
		    	}
		    },
		    error: function(data) {
		    	alert(data);
		    }
		});
</script>