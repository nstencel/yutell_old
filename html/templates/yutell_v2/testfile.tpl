{include file="header.tpl" no_index="1" p="upload" tpl_name="upload"}
{include file="profile-header.tpl" p="upload"}

<html>  
    <head>  
        <title>Testing croppie</title>  

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
		
		<!-- jQuery goes BEFORE croppie because croppie.js uses jQuery! -->
		<script src="croppie.js"></script>
		<link rel="stylesheet" href="croppie.css" />
    </head>

	
    <body>  
	<form>
		<div class="container">
				  <br />
			  <h3 align="center">Image Crop & Upload using JQuery with PHP Ajax</h3>
			  <br />
			  <br />
			<div class="panel panel-default">
			  <div class="panel-heading">Select Profile Image</div>
			  <div class="panel-body" align="center">
			   <input type="file" name="upload_image" id="upload_image" >
			   <br />
			   <div id="uploaded_image"></div>
			  </div>
			 </div>
			 <button type="button" class="btn btn-default merge_image">Merge Image with black background</button>
			 <div id="merged_image"></div>

		</div>
	</form>	
    </body>  
</html>

<div id="uploadimageModal" class="modal" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload & Crop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
       <div class="col-md-8 text-center">
        <div id="image_demo" style="width:350px; margin-top:30px"></div>
       </div>
       <div class="col-md-4" style="padding-top:30px;">
        <br />
        <br />
        <br/>
        <button class="btn btn-success crop_image">Crop & Upload Image</button>
     </div>
    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
    </div>
</div>

<script>  
$(document).ready(function(){

 $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });
  
  $('.merge_image').click(function(event){ // will only work after you've uploaded and cropped an image
	$.ajax({
		url:"merge.php",
		type:"POST",
		data:{"image": $('.img-thumbnail').attr("src")}, // send the filepath of the image you just uploaded to the merge file so it can merge it with the background
		success:function(data)
		{
			console.log('form was submitted');
			$('#merged_image').html(data);
		}
	});
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"/testfileupload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });

});  
</script>