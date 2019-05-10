$(document).ready(function(){

	$("#btnregister").click(function(){
		data = $("#register-form").serialize()
		//alert(data)

		$.ajax({
			url : "../ajax/register.php",
			data : data,
			type : "post",
			success : function(result){
				$("#err2").show()
				$("#err2").html("Please wait....")

				setTimeout(function(){
					$("#err2").html(result)
				}, 1000)
			}
		})	
	})
	

	$("#btnlogin").click(function(){
		// alert()

		data = $("#login-form").serialize()
		// alert(data)

		$.ajax({
			url : "../ajax/login.php",
			data : data,
			type : "post",
			success : function(result){
				$("#err1").show()
				$("#err1").html("please wait...")

				setTimeout(function(){
					if(result.match('1'))
						window.location.href = "redirect.php";
					else
						$("#err1").html(result)
				}, 1000)
			}
		})
	})


	

})
