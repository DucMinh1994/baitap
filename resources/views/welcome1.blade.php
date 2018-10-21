<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	
</head>
<body>
	<form id="upload" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		@csrf
			<input type="file" name="images" id="image" value="" placeholder="">
			<button type="">add</button>
		
		

	</form>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script type="text/javascript">
	$(function(){
			$('#upload').submit(function(e){
		e.preventDefault();
	
		var formData = new FormData();
		formData.append('_token',$('input[name="_token"]').val());
		formData.append('image',$('#image')[0].files[0]);
		$.ajax({
			type: 'post',
			url: '/upload',
			data: formData,
			processData: false,
			contentType: false,
			success: function(response){

			}
		})
	});
	});
	
</script>
</body>
</html>
