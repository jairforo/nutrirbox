jQuery(function ($) {
    $('.btn-delete').click(function(){
        bootbox.confirm("Você tem certeza?", function(result) {
            if (result === true) {
                $('.btn-delete-hidden').click();
            }
        }); 
    })
});