<div id="dropzone">
	<div class="dropzone dz-clickable">
		
		<div class="dz-default dz-message">
			<span>
				{if $process eq "backup"}

					<form id="form_bd" type="POST" action="">
						<input type="hidden" name="nothing" value="basededatos/generateBackup" id="url_system"/>

						<span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Backup</span> base de dato
						<span class="smaller-80 grey">(click)</span> 
						<br> 
						<i id="upload_button" class="upload-icon icon-cloud-download blue icon-3x"></i>
					</form>

				{elseif $process eq "restore"}

					<form id="form_bd" action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
						<input type="hidden" name="nothing" value="basededatos/generateRestore" id="url_system"/>
						<input  type="file" id="id-input-file-3" name="input_file_restore">
					</form>

				
				{elseif $process eq "failRestore"}
					<h4>Problema con el archivo</h4>

				{elseif $process eq "successRestore"}
					<h4>Se realizo el proceso satisfactoriamente</h4>
				{/if}
			</span>
		</div>
	</div>
</div>