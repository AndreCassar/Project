$("#movieInfo").hide();
$("#info").hide();
//$("#Info").toggleClass('hidden');
console.log('adasdas');
$('#search').click(function() 
{
    //document.getElementById('preview').style.visibility = 'visible';
    $("#movieInfo").show();
    $("#added").hide();
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
            //alert(data.imdbID);
            
            $("#id").val(data.imdbID);
            $("#title").val(data.Title);
            $("#dat").val(data.Released);
            $("#ratin").val(data.imdbRating);
            $("#genr").val(data.Genre);
            $("#imag").val(data.Poster);
            
            $("#fid").val(data.imdbID);
            $("#ftitle").val(data.Title);
            $("#fdat").val(data.Released);
            $("#fratin").val(data.imdbRating);
            $("#fgenr").val(data.Genre);
            $("#fimag").val(data.Poster);
            
            $("#pid").val(data.imdbID);
            $("#ptitle").val(data.Title);
            $("#pdat").val(data.Released);
            $("#pratin").val(data.imdbRating);
            $("#pgenr").val(data.Genre);
            $("#pimag").val(data.Poster);
            
            //document.getElementById("id").innerHTML = data.imdbID;
            document.getElementById("titl").innerHTML = data.Title;
            document.getElementById("genre").innerHTML = data.Genre;
            document.getElementById("date").innerHTML = data.Released;
            document.getElementById("rating").innerHTML = data.imdbRating;
            document.getElementById("url").src = data.Poster;

        } 
    });
});