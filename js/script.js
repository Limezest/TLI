function getInfos(){

$(document).ready(function(){
    var $form = $('#form');
    
    $('#submit').on('click', function() {
        $form.trigger('submit');
        return false;
    });

$("#form").on('submit',function(){

            
        var meridien = $('#meridien').val();
     
    $.ajax({
       url: $(this).attr('action'),
      type: $(this).attr('method'),
       dataType : 'html',
       data : 'meridien=' + meridien,
        success : function(code_html, statut){ // success est toujours en place, bien sûr !
           console.log('Oui');
       },

       error : function(resultat, statut, erreur){
          console.log('Non');
       },
    });
   
});
});
};