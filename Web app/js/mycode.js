$(document).ready(function()
{
	$('section').click(function() {
		if($(this).find('p').is(":visible"))
		{
			$(this).find('p').slideUp('fast');
			$(this).find(".slider").html("&uArr;");
		}
		else
		{
			$("main section p").slideUp();
			$(".slider").html("&uArr;");
			$(this).find('p').slideDown('fast');
			$(this).find(".slider").html("&dArr;");
		}
	});
	
	$('#submit').click(function() 
	{

		var first_name = $("#firstName").val();
		var last_name = $("#lastName").val();
		var address = $("#address").val();
		var comment = $("#comment").val();
		
		$("#contactMain p").hide();
		
		if(first_name == "")
		{
			$("#name").show();
		}
		if(last_name == "")
		{
			$("#surname").show();

		}
		if(address == "")
		{
			$("#paddress").show();
		}
		
		if(comment == "")
		{
			$("#pcomment").show();
		}
		
		if(first_name != "" && last_name != "" && address != "" && comment != "")
		{
			alert("Your form has been submitted");
		}
		return false;
	});

	
});
