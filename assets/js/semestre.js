$(document).ready(function()
{
	$accordion = $('div#accordion');
	var numSemes = 1;

	// Agregar semestre
	$('#addSemes').click(function()
	{
		var panel;

		panel =  '<div class="panel panel-default">';
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
		panel += 'Anim pariatur cliche reprehenderit,kk';
		panel += '</div>';
		panel += '</div>';
		panel += '</div>';

		if(numSemes == 1)
			$accordion.html(panel);
		else
			$accordion.append(panel);

		numSemes += 1;
	});
})