{include file="header.tpl" no_index="1" p="upload" tpl_name="upload"}
{include file="profile-header.tpl" p="upload"}

<script src="headercode.js"></script>
<script src="croppie.js"></script>
<link rel="stylesheet" href="croppie.css" />

		
<div id="content" class="content-detached content-video-handler">
	<div class="container-fluid">
	
	<div class="row row-page-heading">
		<div class="col-xs-7 col-sm-7 col-md-10">
			<h1>{$lang.upload_video}</h1>
		</div>
		<div class="col-xs-5 col-sm-5 col-md-2">
			<div class="pull-right">
				<div>
					<ol id="upload-video-selected-files-container"></ol>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row"> 
	   <div class="col-md-12">
	   
		{if $success == 1}
		
			<div class="alert alert-success">
			{$lang.suggest_msg4}
			<br />
			<a href="upload.{$smarty.const._FEXT}">{$lang.add_another_one}</a> or <a href="index.{$smarty.const._FEXT}">{$lang.return_home}</a>
			</div>
		{elseif $success == 2}
			<div class="alert alert-warning">
			{$lang.upload_errmsg11} 
			<a href="index.{$smarty.const._FEXT}">{$lang.return_home}</a>
			</div>
		{elseif $success == 'custom'}
			<div class="alert alert-success">
			{$success_custom_message} 
			<a href="upload.{$smarty.const._FEXT}">{$lang.add_another_one}</a> or <a href="index.{$smarty.const._FEXT}">{$lang.return_home}</a>
			</div>
		{else}

			{if count($errors) > 0}
			<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<ul class="list-unstyled">
				{foreach from=$errors item=v}
					<li>{$v}</li>                        
				{/foreach}
			</ul>
			</div>
			{/if}

			
			<div class="hide-me" id="manage-video-ajax-message"></div>
			<div class="form-horizontal">
			<div class="pm-upload-file-select" id="upload-video-dropzone">
				<i class="mico mico-cloud_upload"></i>
				<p>{$lang.drop_files|default:"Drop file here"}</p>
				<div class="clearfix"></div>
				<span class="btn-upload fileinput-button">
					<span class="btn-upload-value">{$lang.upload_video1}</span>
					<input type="file" name="video" id="upload-video-file-btn" />
				</span>
			</div>
			

			<form class="form-horizontal" name="upload-video-form" id="upload-video-form" enctype="multipart/form-data" method="post" action="{$form_action}" role="form">
				<div class="alert alert-danger hide-me" id="error-placeholder"></div>

				<div class="pm-video-manage-form">
					<fieldset>
						<div id="upload-video-extra">
						
							<div class="form-group">
							  <label for="video_title" class="col-md-2 control-label">{$lang.video}</label>
							  <div class="col-md-10">
							  <input name="video_title" type="text" value="{$smarty.post.video_title}" class="form-control">
							  </div>
							</div>
                           
							<div class="form-group">
								<label for="capture" class="col-md-2 control-label">{$lang.upload_video2}</label>
								<div class="col-md-10">
                                <div id="modal">
                                    <div id="main-cropper"></div>
                                          
                                              <span>Choose Picture</span>
 		
									<input type="file"  name="capture" id="imgInp" />
									<img id="my-image"  name="capture" src="" />
									
									<button type="button" class="btn btn-default display_message">Click to display message</button>

								  
									<div id="uploaded_image"></div>
                                </div>
								</div>
                            </div>	
														
						     
                                        
{literal}            
<script>
/*
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#my-image').attr('src', e.target.result);
      var resize = new Croppie($('#my-image')[0], {
        viewport: { width: 200, height: 180 },
        boundary: { width: 320, height: 180 },
        showZoomer: true,
        enableResize: false,
        enableOrientation: true
      });
      $('#use').fadeIn();
      $('#use').on('click', function() {
        resize.result('base64').then(function(dataImg) {
          var data = [{ image: dataImg }, { name: 'myimgage.jpg' }];
          // use ajax to send data to php
          $('#capture').attr('src', dataImg);
        })
      })
    }
    reader.readAsDataURL(input.files[0]);
  }
}
*/
$(document).ready(function(){
/*
$("#imgInp").change(function() {
  readURL(this);
});
*/

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
  
$('#imgInp').change(function(){
	var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
	console.log("Image uploaded");
	$('#uploadimageModal').modal('show');
});

$('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
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

$('.display_message').click(function(){
	headerdisplaymessage();
});

});

</script>                 
{/literal}							
                                                                  
                                                                 
							<div class="form-group">
							  <label for="duration" class="col-md-2 control-label">{$lang._duration} <a href="#" rel="tooltip" title="{$lang.duration_format}"><i class="fa fa-question-circle"></i></a></label>
							  <div class="col-md-10">
							  <input name="duration" id="duration" type="text" value="{$smarty.post.duration}" class="form-control text-center">
							  </div>
							</div>
							<div class="form-group">
							  <label for="category" class="col-md-2 control-label">{$lang.category}</label>
							  <div class="col-md-10">
								{$categories_dropdown}
							  </div>
							</div>
							<div class="form-group">
							  <label for="description" class="col-md-2 control-label">{$lang.description}</label>
							  <div class="col-md-10">
								<textarea name="description" class="form-control" rows="3">{if $smarty.post.description}{$smarty.post.description}{/if}</textarea>
							  </div>
							</div>
							<div class="form-group">
							  <label for="tags" class="col-md-2 control-label">{$lang.tags} <a href="#" rel="tooltip" title="{$lang.suggest_ex}"><i class="fa fa-question-circle"></i></a></label>
							  <div class="col-md-10">
								<span class="tagsinput">
								  <input id="tags_upload" name="tags" type="text" class="form-control tags" value="{$smarty.post.tags}">
								</span>
							  </div>
							</div>
							{if isset($mm_upload_fields_inject)}{$mm_upload_fields_inject}{/if}
							<div class="form-group">
							  <div class="col-md-offset-2 col-md-10">
								<button name="Submit" type="submit" id="upload-video-submit-btn" value="{$lang.submit_upload}" class="btn btn-success crop_image" data-loading-text="{$lang.submit_send}">{$lang.submit_upload}</button>
								<a href="{$smarty.const._URL}/upload.{$smarty.const._FEXT}" class="btn btn-link">{$lang.submit_cancel}</a>
							  </div>
							</div>
						</div><!-- #upload-video-extra -->
					</fieldset>

					<input type="hidden" name="form_id" value="{$form_id}" />
					<input type="hidden" name="_pmnonce_t" id="upload-video-form-nonce" value="{$form_csrfguard_token}" />
					<input type="hidden" name="temp_id" id="temp_id" value="" />
					<input type="hidden" name="p" value="upload" />
					<input type="hidden" name="do" value="upload-media-file" />
					<input type="hidden" name="MAX_FILE_SIZE" value="{$max_file_size}">
					
				</div>
			</form>
		{/if}
		</div><!-- .col-md-12 -->
	</div><!-- .row --> 
  </div>
  </div>             
     
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
                
  <!-- .container -->
<!--{include file="footer.tpl" tpl_name="upload"}-->

 <!--             
															 
															 
{literal} 
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

  $('#imgInp').on('change', function(){
  /*
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
	*/
	console.log("HURR DURR THERE WAS A CHANGE HURR");
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
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
{/literal}   
-->    