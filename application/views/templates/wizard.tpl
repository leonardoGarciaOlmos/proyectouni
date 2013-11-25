<input type="hidden" value="{$totalStep}" id="total-step" />
<input type="hidden" value="" id="id_carrera" />
<input type="hidden" value="" id="id_pensum" />

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
							{if $status eq "add"}
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
								
							{elseif $status eq "update"}
								<select id="select_departamento" disabled="disabled">
									{foreach from=$depart key=key item=item}
										<option value="{$item['id']}">{$item['nombre']}</option>
									{/foreach}
								</select>

								<h3>Carrera</h3>
								<select disabled="disabled" id="select_carrera" disabled="disabled">
									{foreach from=$carrera key=key item=item}
										<option value="{$item['id']}">{$item['nombre']}</option>
									{/foreach}
								</select>
							{/if}
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
						
						{if $status eq "add"}
							<input type="hidden" value="1" id="num_semestre" />
							<div id="accordion" class="accordion-style1 panel-group">
								<h4>No existe semestre ni materia</h4>
							</div>
						{elseif $status eq "update"}
							<h3>Materia</h3>
						{/if}

						
					{/if}

					{if $data eq "addElect"}
						<h3 class="lighter block green">Agregar seminario a la materia que pertenesca</h3>

						<div class="row-fluid">
							<div class="span4" >
								<select id="seminario">
									<option value="">...</option>
								</select>
							</div>

							<div class="span4" >
								<select id="mat_has_pensum">
									<option value="">...</option>
								</select>
							</div>

							<div class="span4 center" >
								<button class="btn btn-primary" name="agregarSemes" id="addSeminario"><i class="icon-plus icon-white"></i> Agregar Seminario</button>
							</div>
						</div>

						{if $status eq "add"}
							<div id="accordion-semestre" class="accordion-style1 panel-group" style="margin-top:10px;">
								<h4>No existe seminario registrado</h4>
							</div>
						{elseif $status eq "update"}
							<h3>No existe seminario registrado</h3>
						{/if}

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