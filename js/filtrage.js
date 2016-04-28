$(document).ready(function() {
	// Submit les filtres + recherche


	//Bare de recherche de Tags

	var sampleTags = JSON.parse(sampleTag);
	var assignedTags = [];

	//Store the current tags
	//Note: the tags here can be split by any of the trigger keys
	//      as tagit will split on the trigger keys anything passed

	$("#singleFieldTags").tagit({
		autocomplete:{source : sampleTags} ,
		singleField: true,
		singleFieldNode: $('#mySingleField'),
		allowSpaces: true,
		placeholderText: ' Ajoutez vos mots clés ...',
		beforeTagAdded: function(event, ui){
			//get id for that tag and signal if it was in the tagSource list
			var id, result = false;
			$.each(sampleTags, function(){
				if(ui.tagLabel === this.label){
					result = true;
					id=this.id;
					return false;
				}
			});
			if(result){
				//put id in the list of ids we are using
				assignedTags.push(id);
			}
			return result;
		},
		afterTagAdded: function(event, ui){
			//replace the values in the single input field with the assigned ids
			$('#mySingleField').val(assignedTags.join(','));
		},
		afterTagRemoved: function(event, ui){
			$('#mySingleField').val(assignedTags.join(','));
		},
		beforeTagRemoved: function(event, ui){
			var id;
			//get the id for the removed tag and signal if it was in the tagSource list
			$.each(sampleTags, function(){
				if(ui.tagLabel === this.label){
					result = true;
					id = this.id;
					return false;
				}
			});
			if(result){
				//remove the unassigned tag's id from our list
				assignedTags = $.grep(assignedTags, function(el){
					return el != id;
				});
			}
		}
	});
	

	// Afficher la barre de recherche
	$('#tagName').fadeIn(1000);
	$('#tagName').removeClass("hidden");

	//reinitialiser l'affichage
	$('#multiselectResetButton').click(function() {
		$('.select').each(function(){
			$('#'+this.id+' option:selected').each(function() {
	            $(this).prop('selected', false);
	        })
	        $('#'+this.id).multiselect('refresh');

		});
		
		$('#singleFieldTags').tagit('removeAll');
		$('.displayCriteria').empty();
		$('.displayCriteria').slideUp(90);
		$('.btn-filtrer').trigger("click");
     });

//créer la liste des citeres
	$('.select').each(function() {
	  var elementId = $(this).attr("id");
	  var elementValue = $(this).attr("name");

	  $('#'+elementId).multiselect({
		maxHeight: 200,
        includeSelectAllOption: true,
		buttonText: function(options, select) {
			return elementValue;
		},
		buttonTitle: function(options, select) {
			var labels = [];
			options.each(function () {
				labels.push($(this).text());
			});
			return labels.join(' - ');
		}
		});
	});

    //afficher les critères
	$('.btn-filtrer').click(function(){
		//Initialisation
		var data = new Object;
		var dataToSend = new Object();
		var dataJson = new Object();
		var criteriaID=0;
		var criteriaChosen=false;
		var keysArray = [];

		data["Recherche"]=$('#singleFieldTags >li > span').map(function() { return $(this).text() }).get();
		data["Types de pathologie"] = $('#selectTypePatho option:selected').map(function() { return $(this).text() }).get();
		data["Caractéristiques"] = $('#selectCarac option:selected').map(function() { return $(this).text() }).get();
		data["Méridiens"] = $('#selectMeridien option:selected').map(function() { return $(this).text() }).get();

		dataJson["Types de pathologie"]=$('#selectTypePatho option:selected').map(function(a, item){return item.value;}).get();
		dataJson["Caractéristiques"]=$('#selectCarac option:selected').map(function(a, item){return item.value;}).get();
		dataJson["Méridiens"]=$('#selectMeridien option:selected').map(function(a, item){return item.value;}).get();


		$('.displayCriteria').empty();

		for(var i in data){
			var criteria=data[i];
			if(criteria.length>0){
				criteriaChosen=true;
				dataToSend[i]= new Array();
				var criteriaItemClass="CriteriaItem"+criteriaID;
					$('.displayCriteria').append('<div class="displayCriteriaItem '+criteriaItemClass+'"><span class="criteriaItemTitle">'+i+' </span></div>');
					for(var x=0;x<criteria.length;x++){
						$('.'+criteriaItemClass).append('<span class="criteriaItemValue">'+criteria[x]+' </span>');
						dataToSend[i].push(criteria[x]);
					}
				criteriaID++;
			}
			else continue;
		}
		if(!criteriaChosen){
			$('.displayCriteria').empty();
			$('.displayCriteria').hide();
			keysArray = [];
		}
		else{
				$('.noCriteriaMessage').hide();
				$('.displayCriteria').prepend('<div class="displayCriteriaTitle">Vous avez choisi les critères suivants :</div>');
				$('.displayCriteria').slideDown("fast");
	
				if ($("#mySingleField").length == 0){
					keysArray = [];
				}else{
					var keysArray = $("#mySingleField").val().split(',');
				}
			}
            $.ajax(
                    {
                        type: "POST",
                        url: "controller/getResults.php",
                        dataType : 'json',
                        data: {data : dataJson, keysId : keysArray},
                        success: function (result) {
							if (result == "error") {
								console.log("bad");
							}else{
								var table = $('#pathoTable').DataTable();
								table.clear();
								table.rows.add(result).draw();
							}
                        }
                    });
	});

	//créer la table de données
	$('#pathoTable').DataTable({
		"language": {"url": "json/dataTable.json"},
		"searching":false,
	   data:JSON.parse(listePatho),
	   columns: [
	      { data: 'patho.0.desc' },
	      { data: 'meridien.0.nom' },
	      { data: 'symptomList.[].desc', render: function (data, type, row){
	         var affichage = '<ul>';
	         $.each(row.symptomList, function(){
	            affichage = affichage +'<li>'+this.desc+'</li>' ;
	         });
	         affichage = affichage + '</ul>';
	         return affichage
	      }}
	   ]
	});

	//Afficher les résultats dans le tableau
	$('#sorting').fadeIn(1000);
	$('#sorting').removeClass("hidden");
	
});


