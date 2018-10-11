function Creer()
{
    $.ajax
    (
        {
            type:"get",
            url:"PHP/getLesActivites.php",
            success:function(data)
            {
                // On vide la DIV
                $('#divCreer').empty();
                $('#divCreer').append(data);
            },
            error:function()
            {
                alert("Erreur sur les activités");
            }
        }
    );
}

function Voter()
{
    $.ajax
    (
        {
            type:"get",
            url:"PHP/getLesFormations.php",
            data:"id="+$('#lstCateg').val(),
            success:function(data)
            {
                // On vide la DIV
                $('#divVoter').empty();
                $('#divVoter').append(data);
            },
            error:function()
            {
                alert("Erreur sur les activités");
            }
        }
    );
}
