var MIN_LENGTH = 3;
var desc = '';
var patho = 'defaultPatho';
var meridien = 'defaultMeridien';

$( document ).ready(function() {
	$('#description').on('keypress', preventSubmit);
	$("#description").keyup(function() {
		var description = $("#description").val();
		if (description.length >= MIN_LENGTH) {
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
   $.post( "/tli/advancedsearch", { action: 'filter', kind_action: 'search', description: desc, pathologie: patho, meridien: meridien} )
	.done(function( data ) {
console.log(data);
		if (!data) {viderTable();}
		var results = jQuery.parseJSON(data);
		if (!results[0]) {viderTable();}
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

