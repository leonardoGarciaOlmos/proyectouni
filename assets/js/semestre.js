$(document).ready(function()
{
	$accordion = $('div#accordion');
	$semestre = $('input#num_semestre');
	$pensum = $('input#id_pensum');

	// Agregar semestre
	$('#addSemes').click(function()
	{
		addPensum();
	});



	// ++++++++++ Funciones ++++++++++
	function addPensum()
	{
		var id_pensum = $pensum.val();
		var id_carrera = $carrera.val();

		if(id_pensum == '')
		{
			
		}
		else
		{

		}
	}

	function addSemestre()
	{
		var numSemes = parseInt($semestre.val());

		var panel =  '<div class="panel panel-default">';
		panel += '<div class="panel-heading">';
		panel += '<h3 class="panel-title">';
		panel += '<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse'+numSemes+'">';
		panel += '<i class="bigger-110 icon-angle-right" data-icon-hide="icon-angle-down" data-icon-show="icon-angle-right"></i>';
		panel += '&nbsp;Semestre #'+numSemes+'';
		panel += '</a>';
		panel += '</h3>';
		panel += '</div>';

		panel += '<div class="panel-collapse collapse" id="collapse'+numSemes+'" style="height: 0px;">';
		panel += '<div class="panel-body">';
		panel += '<input type="hidden" value="'+numSemes+'", name="semestre" id="semestre">';
        panel += '<input type="hidden" value="" name="materia_id" id="materia_id">';
        panel += '<div class="span1"> <h4>Materia</h4> </div>'
        panel += '<div class="span3"> <input type="text" value="" name="materia" id="materia"> </div>';
        panel += '<div class="span12">';
        panel += '<table class="table" id="tableMateria">';
        panel += '<tr>';
        panel += '<td><h5>Codigo</h5></td>';
        panel += '<td><h5>Uni. Curricular</h5></td>';
        panel += '<td><h5>H. Teoricas</h5></td>';
        panel += '<td><h5>H. Practicas</h5></td>';
        panel += '<td><h5>Total Horas</h5></td>';
        panel += '<td><h5>Uni. Credito</h5></td>';
        panel += '<td><h5>Cod. Prelacion</h5></td>';
        panel += '<td></td>';
        panel += '</tr>';
        panel += '</table>';
		panel += '</div>';
		panel += '</div>';
		panel += '</div>';

		if(numSemes == 1)
			$accordion.html(panel);
		else
			$accordion.append(panel);

		$semestre.val(++numSemes);
	}

})