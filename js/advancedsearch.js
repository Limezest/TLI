
$( document ).ready(function() {
	$('#description').on('keypress', preventSubmit);
	$("#description").keyup(function() {
		var description = $("#description").val();
		if (!!description) {
			desc = description;
			handler();
		}
	});
	$('#pathoList').on('change', function(){
		patho = $('#pathoList').val();
		handler();
	});
	$('#meridienList').on('change', function(){
		meridien = $('#meridienList').val();
		handler();
	});
});

function check() {
	return(desc &&
		(patho!='defaultPatho')&&
		(meridien!='defaultMeridien')
	);
}

function handler() {
	check() && filter();
}

function filter() {
   $.post( "/tli/advancedsearch", { action: 'filter', kind_action: 'search', description: desc, patho: patho, meridien: meridien} )
	.done(function( data ) {
console.log(data);
		if (!data) {viderTable();}
		var results = jQuery.parseJSON(data);
		viderTable();
		if (!results[0]) {prompt();}
		$(results).each(function(key, value) {
			drawRow(key, value);
		});
	});
}

function drawRow(key, value) {
    var row = $("<tr role='row' id='"+key+"'/>")
    $("#resultDataTable").append(row);
    row.append($("<td>" + value.Type + "</td>"));
    row.append($("<td>" + value.Description + "</td>"));
    row.append($("<td>" + value.Medidien + "</td>"));
}

function viderTable() {
	$('#resultDataTable > tbody > tr').remove();
}

var preventSubmit = function(e) {
     if(e.keyCode == 13) {
         e.preventDefault();
         return false;
     }
}

function prompt() {
	var row = $("<tr role='row' id='prompt'/>");
	$('#resultDataTable').append(row);
	row.append($('<td colspan="3" align="center" class="warning">Aucun r&#233;sultat</td>'));
}


