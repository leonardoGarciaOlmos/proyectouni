$(window).load(function()
{

	
	$uploadButton = $('#upload_button');
	$inputFile = $('#id-input-file-3');
	$formBD = $('form#form_bd');
	$urlSystem = $('#url_system');
	$boxModal = $("div.modal");


	// proceso de backup
	$uploadButton.on('click', function()
	{
		var url = base_url + $urlSystem.attr('value');

		$formBD.attr('action', url);
		$formBD.submit();

	});
	
	// Proceso de restore	
	$('#id-input-file-3').ace_file_input({
		style:'well',
		btn_choose:'Restaurar Base de Dato',
		btn_change:null,
		no_icon:'icon-cloud-upload',
		droppable:true,
		thumbnail:'large'//large | fit
		//,icon_remove:null//set null, to hide remove/reset button
		/**,before_change:function(files, dropped) {
			//Check an example below
			//or examples/file-upload.html
			return true;
		}*/
		/**,before_remove : function() {
			return true;
		}*/
		,
		preview_error : function(filename, error_code) {
			//name of the file that failed
			//error_code values
			//1 = 'FILE_LOAD_FAILED',
			//2 = 'IMAGE_LOAD_FAILED',
			//3 = 'THUMBNAIL_FAILED'
		}

	}).on('change', function(){
		bootbox.confirm("¿Desea realizar la restauración de la Base de dato?", function(result) {
			if(result == false){
				
			}
			else if(result == true)
			{
				var url = base_url + $urlSystem.attr('value');

				$formBD.attr('action', url);
				$formBD.submit();
			}
		}); 
	});
	

	//dynamically change allowed formats by changing before_change callback function
	$('#id-file-format').removeAttr('checked').on('change', function() {
		var before_change
		var btn_choose
		var no_icon
		if(this.checked) {
			btn_choose = "Restaurar Base de Dato";
			no_icon = "icon-picture";
			before_change = function(files, dropped) {
				var allowed_files = [];
				for(var i = 0 ; i < files.length; i++) {
					var file = files[i];
					if(typeof file === "string") {
						//IE8 and browsers that don't support File Object
						if(! (/\.(gz)$/i).test(file) ) return false;
					}
					else {
						var type = $.trim(file.type);
						if( ( type.length > 0 && ! (/^image\/(gz)$/i).test(type) )
								|| ( type.length == 0 && ! (/\.(gz)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
							) continue;//not an image so don't keep this file
					}
					
					allowed_files.push(file);
				}
				if(allowed_files.length == 0) return false;

				return allowed_files;
			}
		}
		else {
			btn_choose = "Restaurar Base de Dato";
			no_icon = "icon-cloud-upload";
			before_change = function(files, dropped) {
				return files;
			}
		}
		var file_input = $('#id-input-file-3');
		file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
		file_input.ace_file_input('reset_input');
	});
				
		
		
})

