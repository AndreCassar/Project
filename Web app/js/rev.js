alert("skdfbslkdf");
alert("sfgsfg");
$('#rev').click(function()
{
    var id = document.getElementById("mid").value;
    var rating = document.getElementById("rati").value;
    var comments = document.getElementById("comment").value;

    $("#movie_id").val(id);
    $("#rating").val(rating);
    $("#comment").val(comments);
    alert("You will be redirected");
}