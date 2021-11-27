$(document).ready(function(){
	var dataHasil = 0;
	tampil();

	function tampil(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();
		$.ajax({
			type : 'GET',
			url : 'tampil.php',
			dataType : 'JSON',
			success : function(respon){
				var i;
				var data = '';
				for( i=0; i<respon.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td style="text-align: center;">`+respon[i].nama+`</td>
					<td style="text-align: center;">`+respon[i].nim+`</td>
					<td style="text-align: center;">`+respon[i].prodi+`</td>
					<td style="text-align: center;">`+ respon[i].angkatan +`</td>
					<td style="text-align: center;">`+respon[i].hutang+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+respon[i].nim+`'>Ubah</button>
						<button class='btn-delete' id='`+respon[i].nim+`'>Hapus</button>
					</td>
					</tr>
					`
				}
				$('.targetData').append(data);

				$('.btn-edit').click(function(){
					tampil_data($(this).attr('id'));
				})

				$('.btn-delete').click(function(){
					hapus($(this).attr('id'));
				})
			}
		})
	}


	function tambah(){
		var nim = $('.number_nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.number_angkatan').val();
		var hutang = $('.hutang').val();
		$.ajax({
			type : 'POST',
			url : 'tambah.php',
			data : 'nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			dataType : 'JSON',
			success : function(respon){
				if(respon.status == '1'){
					tampil();
					reset();
				}else{
					alert(respon.msg);
					tampil();
					reset();
				}

			}
		})
	}

	function tampil_data(x){
		$.ajax({
			type : 'POST',
			url : 'tampil_data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(respon){
				dataHasil = respon.nim;
				$('.number_nim').val(respon.nim);
				$('.nama').val(respon.nama);
				$('.prodi').val(respon.prodi);
				$('.number_angkatan').val(respon.angkatan);
				$('.hutang').val(respon.hutang);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	function edit(x){
		var id = x;
		var nim = $('.number_nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.number_angkatan').val();
		var hutang = $('.hutang').val();
		$.ajax({
			type : 'POST',
			url : 'edit.php',
			data : 'id='+id+'&nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			success : function(respon){
				tampil();
				reset();
			}
		})
	}

	function hapus(x){
		$.ajax({
			type : 'POST',
			url : 'delete.php',
			data : 'nim='+x,
			dataType : 'JSON',
			success : function(respon){
				if(respon.status == '1'){
					tampil();
					reset();
				}else{
					alert(respon.msg);
					tampil();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.number_nim').val('');
		$('.nama').val('');
		$('.prodi').val('');
		$('.number_angkatan').val('');
		$('.hutang').val('');
	}

	$('.btn-tambah').click(function(){
		tambah();
	});
	
	$('.btn-batal').click(function(){
		tampil();
		reset();
	});

	$('.btn-ubah').click(function(){
		edit(dataHasil);
	});


});