$(document).ready(function()
{
	$( document ).on( "change", "#pais", function(){
        var country = $(this).val();
        $.ajax({
            url : 'estado.php',
            type : 'POST',
            dataType : 'html',
            data: 
                {
                    country : country
                },
            success : function(json) {
                $("#estado").html(json);
            },
            error : function( xhr, status ) {
                console.log('Disculpe, existió un problema en Pais');
            }
        });
    });

    $( document ).on( "change", "#municipio", function(){
        var municipalities = $(this).val();
        $.ajax({
            url : 'parroquia.php',
            type : 'POST',
            dataType : 'html',
            data: 
                {
                    municipalities : municipalities
                },
            success : function(json) {
                $("#parroquia").html(json);
            },
            error : function( xhr, status ) {
                console.log('Disculpe, existió un problema en Municipios');
            }
        });
    });
});



 