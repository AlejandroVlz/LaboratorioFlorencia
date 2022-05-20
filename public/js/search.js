
    var datos = ['Alejandro', 'Juan', 'Carlos'];

    $('#search').autocomplete({
        source: function (request, response){
            $.ajax({
                url: "{{route('buscar.estudio')}}",
                dataType: "json",
                data: {
                    term: request.term
                },
                success: function(data){
                    response(data)
                }
            });
        }
    });