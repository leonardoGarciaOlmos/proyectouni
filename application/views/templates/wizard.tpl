<input type="hidden" value="{$totalStep}" id="total-step" />


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
							<span class="title">{$data}</span>
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
						<h3 class="lighter block green">Seleccione la carrera de su preferencia</h3>
						<div class="center">
							<h3>Departamento</h3>
							<select id="select_departamento">
								<option value="">Seleccionar departamento</option>
								{foreach from=$depart key=key item=item}
									<option value="{$item['id']}">{$item['nombre']}</option>
								{/foreach}
							</select>

							<h3>Carrera</h3>
							<select disabled="disabled" id="select_carrera">
								<option value="">...</option>
							</select>
						</div>
					{/if}

					{if $data eq "addMateria"}
						<div class="row-fluid">
							<div class="span9">
								<h3 class="lighter block green">Agregar las materias a cada semestre</h3>
							</div>
							<div class="span3">
								<button style="float:right;" class="btn btn-primary" name="agregarSemes" id="addSemes"><i class="icon-plus icon-white"></i> Agregar Semestre</button>
							</div>
						</div>
						
						<div id="accordion" class="accordion-style1 panel-group">
							<h4>No existe semestre ni materia</h4>
						</div>
					{/if}

					{if $data eq "addElect"}
						<div class="center">
							<select>
								<option>Valor</option>
							</select>
						</div>
					{/if}

					{if $data eq "finish"}
						<div class="center">
							<h3 class="green">Proceso Finalizado</h3>
							El proceso de insercion de datos ha culminado, precione finalizar para concluir
						</div>
					{/if}


					</div>

				{/foreach}
			</div>

			<hr>

			<div class="row-fluid wizard-actions">
				<button class="btn btn-prev" disabled="disabled" id="prev">
					<i class="icon-arrow-left"></i>
					Prev
				</button>

				<button class="btn btn-success btn-next" data-last="Finish" id="next">
					Sign
					<i class="icon-arrow-right icon-on-right"></i>
				</button>
			</div>


		</div>
	</div>

</div>