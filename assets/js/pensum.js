$(document).ready(function()
{

	$buttonAdd = $('a.add-anchor');
	$selectDepart = $('select#select_departamento');
	$selectCarrer = $('select#select_carrera');
	$buttonNext = $('button#next');
	$buttonPrev = $('button#prev');
	$carrera = $('input#id_carrera');
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
				url: base_url + 'pensum/json_carrera',
				success: function(arrayObject)
				{
					buildSelect($selectCarrer, arrayObject, 'add');
				},
				error: function()
				{ alert('Error'); }
			});
		}
	})


	$selectCarrer.on('change', function()
	{
		var val = $(this).val();
		var pensum = $pensum.val();

		if(pensum != '')
		{
			bootbox.confirm("El pensum esta en proceso de construccion, si cambia la carrera se perderan los datos.\n Desea crear nuevo pensum?", function(result)
			{
				// ACTUALIZAR PENSUM

				if(result == true)
				{
					// $.ajax({
					// 	cache: false,
					// 	type: 'POST',
					// 	data: 'id_dep=' + value,
					// 	dataType: "json",
					// 	url: base_url + 'pensum/json_carrera',
					// 	success: function(arrayObject)
					// 	{
					// 		buildSelect($selectCarrer, arrayObject, 'add');
					// 	},
					// 	error: function()
					// 	{ alert('Error'); }
					// });
				}else
					$("select#select_carrera option[value="+ $carrera.val() +"]").attr("selected",true);
			})
		}
	});


	// Controlar el boton de Next y Prev
	$buttonNext.on('click', function()
	{
		if(step == 1)
		{
			var retVal = validateCarrera($selectCarrer);
			$carrera.val($selectCarrer.val());

			if(retVal == false)
				bootbox.alert('Debe seleccionar la carrera para seguir con los siguientes pasos');
			else if(retVal == true)
				managerStep('next');
		}
		else
			managerStep('next');
	});

	$buttonPrev.on('click', function()
	{
		if(step == 1)
		{
			var retVal = validateCarrera($selectCarrer);
			$carrera.val($selectCarrer.val());

			if(retVal == false)
				bootbox.alert('Debe seleccionar la carrera para seguir con los siguientes pasos');
			else if(retVal == true)
				managerStep('prev');
		}
		else
			managerStep('prev');
	});

	
	
	// ++++++++++ Funciones ++++++++++
	function validateCarrera(objectSelect)
	{
		var valRet = false;
		var valObject = objectSelect.val(); 

		if(valObject == '')
			valRet = false;  // No ha sido seleccionado la carrera
		else
			valRet = true;	 // ha sido seleccionado la carrera

		return valRet;
	}


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
		var ret = false;

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
				break;

				default:
					$buttonPrev.removeAttr('disabled');
					$buttonNext.html('Sign <i class="icon-arrow-right icon-on-right"></i>');
				break;
			}
		}

		
	}


});