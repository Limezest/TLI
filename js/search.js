var MIN_LENGTH = 3;
$( document ).ready(function() {
	$('#keyword').on('keypress', preventSubmit);
	$("#keyword").on('input', function() {
		var keyword = $("#keyword").val();
		if (keyword.length >= MIN_LENGTH) {
			search(keyword);
		}
	});
	$('#keywordList').on('change', function(){
		$('#keyword').val('');
		var keyword = $('#keywordList').val();
		search(keyword);
	});
});


function search(keyword) {
   $.post( "/tli/search", { action: 'keyword', kind_action: 'search', keyword: keyword} )
	.done(function( data ) {
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

function prompt() {
	var row = $("<tr role='row' id='prompt'/>");
	$('#resultDataTable').append(row);
	row.append($('<td colspan="3" align="center" class="warning">Aucun r&#233;sultat</td>'));
}

var preventSubmit = function(e) {
     if(e.keyCode == 13) {
         e.preventDefault();
         return false;
     }
}
