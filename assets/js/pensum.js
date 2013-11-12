$(document).ready(function()
{

	$buttonAdd = $('a.add-anchor');
	$selectDepart = $('select#select_departamento');
	$selectCarrer = $('select#select_carrera');
	$buttonNext = $('button#next');
	$buttonPrev = $('button#prev');
	var step = 1;
	var totalStep = parseInt($('input#total-step').val());


	// Cambia direccion del boton de agregar
	$buttonAdd.attr('href', 'add');


	// Controlar el select departamento para cambiar carrera
	$selectDepart.on('change', function()
	{
		var value = $(this).val();

		if(value == '')
		{
			buildSelect($selectCarrer, '', null);
		}
		else{

			$.ajax({
				cache: false,
				type: 'POST',
				data: 'id_dep=' + value,
				dataType: "json",
				url: base_url + 'pensum/carrera',
				success: function(arrayObject)
				{
					buildSelect($selectCarrer, arrayObject, 'add');
				},
				error: function()
				{ alert('Error'); }
			});
		}
	})


	// Controlar el boton de Next y Prev
	$buttonNext.on('click', function()
	{
		managerStep('next');
	});

	$buttonPrev.on('click', function()
	{
		managerStep('prev');
	});

	
	
	// ++++++++++ Funciones ++++++++++
	function buildSelect(objectSelect, objectValue, opc)
	{
		if(opc === null)
		{	
			objectSelect.html('<option value="">...</option>');
			objectSelect.attr('disabled', 'disabled');
		}else if(opc === 'add')
		{
			var length = objectValue.length;

			objectSelect.removeAttr('disabled');
			objectSelect.html('<option value="">Seleccionar carrera</option>');
			for(var i = 0; i < length; i++)
			{
				objectSelect.append('<option value="'+objectValue[i].id+'">'+objectValue[i].nombre+'</option>');
			}
		}
	}


	function managerStep(opc)
	{
		if(step == totalStep && opc === 'next')
		{ 
			window.location = base_url + 'pensum/all'; 
		}else
		{
			if(opc === 'next')
			{
				$('li[data-target="#step'+ step +'"]').attr('class', 'complete');
				$('div#step'+ step).attr('class', 'step-pane');
				step+=1;
				$('li[data-target="#step'+ step +'"]').attr('class', 'active');
				$('div#step'+ step).attr('class', 'step-pane active');

			}
			else if(opc === 'prev')
			{
				$('li[data-target="#step'+ step +'"]').attr('class', '');
				$('div#step'+ step).attr('class', 'step-pane');
				step-=1;
				$('li[data-target="#step'+ step +'"]').attr('class', 'active');
				$('div#step'+ step).attr('class', 'step-pane active');
			}

			switch(step)
			{
				case 1:
					$buttonPrev.attr('disabled', 'disabled');
				break;

				case totalStep:
					$buttonNext.html('Finalizar <i class="icon-arrow-right icon-on-right"></i>');
					//$buttonNext.attr('id', 'finish');
				break;

				default:
					$buttonPrev.removeAttr('disabled');
					//$buttonNext.attr('id', 'next');
					$buttonNext.html('Sign <i class="icon-arrow-right icon-on-right"></i>');
				break;
			}
		}

		
	}


});