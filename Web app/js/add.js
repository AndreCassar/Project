$("#movieInfo").hide();
$("#info").hide();
//$("#Info").toggleClass('hidden');
console.log('adasdas');
$('#search').click(function() 
{
    //document.getElementById('preview').style.visibility = 'visible';
    $("#movieInfo").show();
    //$("#title").clear();
    var movie_name = $("#movieSearch").val();
    console.log(movie_name);
    $.get( "http://www.omdbapi.com/?apikey=78a1fb50&t="+movie_name, function( data )
    {
        console.log(data.Title);
        if(data.Response == "False")
        {
            alert("Movie not found");
        }
        else
        {
            $("#info").show();
            //alert(movie_name);
            //alert( "Load was performed, we got the books" );
            console.log(data.Title);
            console.log(data.Genre);
            $("#title").val(data.Title);
            $("#genre").val(data.Genre);
            $("#date").val(data.Released);
            $("#rating").val(data.imdbRating);
            $("#url").val(data.Poster);

        } 
    });
});