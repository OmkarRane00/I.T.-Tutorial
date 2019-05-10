$(document).ready(function(){
	// alert()

	$("#btnvid").click(function(){
		// alert()

		data = $("#myform1").serialize()
		// alert(data)

		$.ajax({
			url : "../../ajax/video.php",
			data : data,
			type : "post",
			success : function(result){
				$("#err3").show()
				$("#err3").html("Please wait..")
				setTimeout(function(){
					$("#err3").html(result)
				},1000)
			}
		})
	})



	$("#btnsnip").click(function(){
		// alert()

		data = $("#myform2").serialize()
		// alert(data)

		$.ajax({
			url : "../../ajax/snippet.php",
			data : data,
			type : "post",
			success : function(result){
				$("#err4").show()
				$("#err4").html("Please wait..")
				setTimeout(function(){
					$("#err4").html(result)
				},1000)
			}
		})
	})



	// alert()

	$("#myform3").on('submit', function(e){
			e.preventDefault();

			// return;
			var form_data = new FormData(this);                  
    		// alert(form_data);	

    		$.ajax({
        		url: '../../ajax/uploadfile.php', 
        		cache: false,
        		contentType: false,
        		processData: false,
        		data: form_data,                         
        		type: 'post',
        		success: function(response){
            		
            		$("#err5").html("Please wait...")

        			setTimeout(function(){
        				$("#err5").html(response)
        			},1000)
        		}
     		});
		})	



})



