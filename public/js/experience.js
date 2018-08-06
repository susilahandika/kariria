$(document).ready(function() {
	var tanggal;

	function formatDate(date) {
	    var d = new Date(date),
        month = '' + (d.getMonth() + 1);
        day = '' + d.getDate();
        year = d.getFullYear();

	    if (month.length < 2) month = '0' + month;
	    if (day.length < 2) day = '0' + day;

	    return [year, month, day].join('-');
	}
	
	$("#bt_tambah").click(function(event) {
		tanggal = new Date();

		$("#input_experience").append(
			'<div class="panel panel-default box">' +
			    '<div class="panel-body">' +
			    	'<div class="row">' +
			    	    '<div class="col-md-12">' +
			    	         '<div><a>Perusahaan</a></div>' +
			    	         '<div><input type="text" class="form-control input-sm" name="company[]" value="" placeholder=""></div>' +
			    	     '</div>' +
			    	'</div>' +

			    	'<div class="row">' +
			    	    '<div class="col-md-12">' +
			    	         '<div><a>Posisi</a></div>' +
			    	         '<div><input type="text" class="form-control input-sm" name="position[]" value="" placeholder=""></div>' +
			    	     '</div>' +
			    	'</div>' +

			    	'<div class="row">' +
			    	    '<div class="col-md-12">' +
							'<div><a>Pengalaman Kerja</a></div>' +
							'<div class="input-group">' +
								'<input type="date" class="form-control input-sm" name="from_date[]" value="'+ formatDate(tanggal) +'" placeholder="">' +
								'<span class="input-group-addon"> - </span>' +
								'<input type="date" class="form-control input-sm" name="to_date[]" value="'+ formatDate(tanggal) +'" placeholder="">' +
							'</div>' +
			    	     '</div>' +
			    	'</div>' +

			    	'<div class="row">' +
			    	    '<div class="col-md-12">' +
			    	         '<div><a>Deskripsi Pekerjaan</a></div>' +
			    	         '<div><textarea name="desc[]" rows="6" class="form-control"></textarea></div>' +
			    	     '</div>' +
			    	'</div>' +

			    	'<div class="row" style="padding-top: 10px;">' +
			    		'<div class="col-md-12">' +
			    		    '<a href="#" class="btn btn-danger btn-sm pull-right" id="bt_hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></a>' +
			    		'</div>' +
			    	'</div>' +
			    '</div>' +

			'</div>');

	});

	$("body").on('click', '#bt_hapus', function(event) {
	    event.preventDefault();
	    $(this).parents(':eq(3)').remove();
	});

});