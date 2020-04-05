//writer
$(document).on('click', '.view', function() {
	var id=$(this).attr('data');
	$.ajaxSetup({
		headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	$.ajax({
		method :'POST',
		url :"/writerview",
		dataType :"json",
		data : {id:id},
		success:function(data)
		{
			console.log(data);
			var html="<tr><td class='font-weight-bold'>ID</td><td class='text-center'>"+data.result.id+"</td></tr>";
			html=html+"<tr><td class='font-weight-bold'>Title</td><td class='text-center'>"+data.result.title+"</td></tr>";
			html=html+"<tr><td class='font-weight-bold'>Description</td><td class='text-center'>"+data.result.body+"</td></tr>";
			html=html+"<tr><td class='font-weight-bold'>Image</td><td class='text-center'><img src='{{ URL::to('/') }}/img/" + data.result.image + "' width='70' class='img-thumbnail' /></td></tr>";
			html=html+"<tr><td class='font-weight-bold'>Date</td><td class='text-center'>"+data.result.created_at+"</td></tr>";
			$('#myModal').modal('show');
			$("#tableview").html(html);
		}
	})
});

//writer Edit
$(document).on('click', '.edit', function() {
	var id=$(this).attr('data');
	alert(id)
	$.ajaxSetup({
		headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	$.ajax({
		method :'GET',
		url :"/WriterEdit",
		dataType :"json",
		data : {id:id},
		success:function(data)
		{
			$('#id').val(data.result.id);
		    $('#title').val(data.result.title);
		    $('#body').val(data.result.body);
		    $('#image').html("<img src={{ URL::to('/') }}/img/" + data.result.image + " width='70' class='img-thumbnail' />");
		    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+data.result.image+"' />");
		    $('#Modaledit').modal('show');
		    console.log(data);
		}
	})
});