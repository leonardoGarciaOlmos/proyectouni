<div class="widget-box">
	<div class="widget-header widget-header-blue widget-header-flat">
		<h4 class="lighter">{$title}</h4>
	</div>

	<div class="widget-body">
		<div class="widget-main">
			<div id="fuelux-wizard" class="row-fluid" data-target="#step-container">
				<ul class="wizard-steps">
					{foreach from=$step key=key item=data}
						{if $key+1 eq 1}
							<li data-target="#step{$key+1}" class="active">
						{else}
							<li data-target="#step{$key+1}" class="">
						{/if}
							<span class="step">{$key+1}</span>
							<span class="title">Seleccionar Carrea</span>
						</li>
					{/foreach}
				</ul>
			</div>

			<hr>

			<div class="step-content row-fluid position-relative" id="step-container">
				
				{foreach from=$stepConten key=key item=data}
					{if $key+1 eq 1}
						<div class="step-pane active" id="step{$key+1}">
					{else}
						<div class="step-pane" id="step{$key+1}">
					{/if}

					
					{if $data eq "selectCarre"}
						<select>
							<option>Valor</option>
						</select>
					{/if}

					{if $data eq "addMateria"}
						<select>
							<option>Valor</option>
						</select>
					{/if}

					{if $data eq "addElect"}
						<select>
							<option>Valor</option>
						</select>
					{/if}

					</div>

				{/foreach}
			</div>

			<hr>

			<div class="row-fluid wizard-actions">
				<button class="btn btn-prev" disabled="disabled">
					<i class="icon-arrow-left"></i>
					Prev
				</button>

				<button class="btn btn-success btn-next" data-last="Finish ">
					Next
					<i class="icon-arrow-right icon-on-right"></i>
				</button>
			</div>


		</div>
	</div>

</div>