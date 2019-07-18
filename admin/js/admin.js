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
				$.notify({
					icon: "add_alert",
					message: ''+response.message+''	}, {
						type: 'danger',
						timer: 3000,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
			}
			},
			error: function () {
				$.notify({
					icon: "add_alert",
					message: ''+response.message+''}, {
						type: 'danger',
						timer: 3000,
						placement: {
							from: 'top',
							align: 'right'
						}
					});
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
				$.notify({
					icon: "add_alert",
					message: 'Berhasil'

				}, {
					type: 'success',
					timer: 3000,
					placement: {
						from: 'top',
						align: 'right'
					}
				});
				window.location.reload();
			} else {
				$.notify({
					icon: "add_alert",
					message: ''+response.message+''

				}, {
					type: 'danger',
					timer: 3000,
					placement: {
						from: 'top',
						align: 'right'
					}
				});
			}
		},
		error: function () {
			$.notify({
				icon: "add_alert",
				message: ''+response.message+''

			}, {
				type: 'danger',
				timer: 3000,
				placement: {
					from: 'top',
					align: 'right'
				}
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
				$.notify({
					icon: "add_alert",
					message: ''+response.message+''

				}, {
					type: 'danger',
					timer: 3000,
					placement: {
						from: 'top',
						align: 'right'
					}
				});
			}
		},
		error: function () {
			$.notify({
				icon: "add_alert",
				message: ''+response.message+''

			}, {
				type: 'danger',
				timer: 3000,
				placement: {
					from: 'top',
					align: 'right'
				}
			});
		}
	});
	return false;
}