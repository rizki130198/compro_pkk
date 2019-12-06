function buttondeletekontak(id) {
	$.ajax({
		url: BASE_URL + 'admincontroller/getBerita',
		type: "POST",
		data : {idpengajuan:id},
		success: function (response) {

			var json = JSON.parse(response);
			if (json.code == 200) {
				$('#detailhistory').html(json.html);
				$('#detailSpj').modal('show'); 
			} else {
				
			}
			},
			error: function () {
				
			}
		});
	return false;
}
function buttondeletepengurus(id) {
	$.ajax({
		url: BASE_URL + 'admincontroller/actDeletePengurus',
		type: "POST",
		data : {idPengurus:id},
		success: function (response) {
			var json = JSON.parse(response);
			// console.log(json.berhasil);
			if (json.berhasil == true) {
				
				window.location.reload();
			} else {
				
			}
		},
		error: function () {
			
		}
	});
	return false;
}
function buttondeleteberita(id) {
	$.ajax({
		url: BASE_URL + 'admincontroller/actDeleteBerita',
		type: "POST",
		data : {idberita:id},
		success: function (response) {
			var json = JSON.parse(response);
			// console.log(json.berhasil);
			if (json.berhasil == true) {
				
				window.location.reload();
			} else {
				$.toast({
			      type: 'error',
			      title: ''+response.message+'',
			      position: 'top-end',
			      showConfirmButton: false,
			      timer: 3000
			    });
			}
		},
		error: function () {
			$.toast({
			    type: 'error',
			    title: ''+response.message+'',
			    position: 'top-end',
			    showConfirmButton: false,
			    timer: 3000
			});
		}
	});
	return false;
}
function buttondeletesubmenu(id) {
	$.ajax({
		url: BASE_URL + 'admincontroller/getBerita',
		type: "POST",
		data : {idpengajuan:id},
		success: function (response) {

			var json = JSON.parse(response);
			if (json.code == 200) {
				$('#detailhistory').html(json.html);
				$('#detailSpj').modal('show'); 
			} else {
				
			}
		},
		error: function () {
			
		}
	});
	return false;
}