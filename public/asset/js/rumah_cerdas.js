$(document).ready(function() {


	// Script untuk Menu header saat website memasuki mode responsive mobile di halaman landing
	var time_speed = 200; //Mili second
	$('.toggle_responsive').on('click', function(e) {
		$('.container_menu').addClass('active');
		setTimeout(function(e) {
			$('.container_menu').addClass('animate_menu');
		}, time_speed);
	});
	$('.container_menu').find('.btn_close').on('click', function(e) {
		var container_menu = $(this).parents('.container_menu');
		container_menu.removeClass('animate_menu');
		setTimeout(function(e) {
			container_menu.removeClass('active');
		}, time_speed);
	});
	// TOC FULL MODE LAYOUT 
	$('.toc_menu').on('click', function(e) {
		var target_id = $(this).attr('target-id');
		$('.menu_modefull').addClass('active');
		$( target_id ).addClass('mode_full');
	});
	$('.menu_modefull').find('.btn_close').on('click', function(e) {
		$(this).parents('.menu_modefull').removeClass('active');
		$('.layout_box').removeClass('mode_full');
	});
	$('.btn_layout.next').on('click', function(e) {
		var layout_modefull = $('.layout_box').filter('.mode_full');
		var layout_modefull_next = layout_modefull.next().filter('.layout_box'); //pilih elemen selanjutnya yang memiliki class layout box
		// Jika layout next sudah habis, alihkan ke layout box yang pertama ( Infinite rekursif slide )
		if ( layout_modefull_next.length < 1) {
			layout_modefull_next = $('.layout_box').first();
		}
		// tutup layout box yang sedang mode full
		layout_modefull.removeClass('mode_full');
		// buka mode full layout box yang selanjutnya
		layout_modefull_next.addClass('mode_full');
	}); 
	$('.btn_layout.prev').on('click', function(e) {
		var layout_modefull = $('.layout_box').filter('.mode_full');
		var layout_modefull_prev = layout_modefull.prev().filter('.layout_box'); //pilih elemen sebelumnya yang memiliki class layout box
		// Jika layout prev sudah habis, alihkan ke layout box yang terakhir ( Infinite rekursif slide )
		if ( layout_modefull_prev.length < 1) {
			layout_modefull_prev = $('.layout_box').last();
		}
		// tutup layout box yang sedang mode full
		layout_modefull.removeClass('mode_full');
		// buka mode full layout box yang sebelumnya
		layout_modefull_prev.addClass('mode_full');
	}); 
	$('.form_produk').find('input[type=file]').on('change', function(dataFile) {
		upload_img_produk( this, dataFile );
	});


});
function upload_img_produk(obj, dataFile) {
	var inputUpload = $(obj);
	//Methode untuk mengambil dan membuat link source file 
	var file = dataFile.target.files[0]; 
	var fileSrc = URL.createObjectURL(file);
	//Menampilkan gambar di frame elemen dan hilangkan efek border
	var img_frame = $('img.img_upload');
	img_frame.attr('src', fileSrc);
	img_frame.show();

	$('.gambar h1').remove();
}
