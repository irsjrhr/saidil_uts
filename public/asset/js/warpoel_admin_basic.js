$(document).ready(function(e) {
	$('.dropdown_item').find('a.nav-link, button').on('click', function(e) {
		var dropdown_content = $(this).parent().find('.yt_dropdown');
		// Daftarkan event objeck yt dropdown yang baru dibuka ke window, jika diklik windownya maka dropdown tersebut tertutup
		dropdown_content.show(100, function() {
			$(window).bind('click', function(event) {
				// yt_dropdown yang dipilih adalah yang 1 parent dengan tombolnya
				drop_outside(event, dropdown_content);
			});
		});	
	});
	$('.btn_sidebar').on('click', function(e) {	
		content_sidebar(this);
	});

	// Dark Mode Toggle
	$('#dark_mode_btn').on('change', function(e) {
		dark_mode_btn_toggle(this);
	});
	if ( $('.dark_theme').length > 0 ) {
		$('#dark_mode_btn').click();
	}
});
function dark_mode_btn_toggle(input_toggle) {
	input_toggle = $(input_toggle);
	if ( input_toggle.is(':checked') ) {
		// Aktifkan dark modenya
		$('body').addClass('dark_theme');
	}else{
		// Nonaktifkan dark modenya
		$('body').removeClass('dark_theme');
	}
}
function content_sidebar(btn) {
	// Note : atribut data-target-id-sidebar bisa selector class ataupun id di elemen selector css yang ada di content sidebar
	btn = $(btn);
	var sidebar; //Target sidebarnya

	// Tentukan sidebarnya

	// SELECTOR KETIKA MEMBUKA SIDEBAR
	// Dicek apakag itu didalam sidebarnya atau tidak agar bisa malakukan pengidentifikasian button secara benar
	// Atribut untuk mrmilih sidebar di btn => data-target-id-sidebar, dan digunakan hanya untuk btn_sidebar yang ada di luar sidebar.
	if ( btn.filter('.close_sidebar').parents('.content_sidebar').is('.content_sidebar') ) {
		// Jika tombol btn_sidebar yang dipencet ada didalam sidebar maka  target sidebarnya adalah elemen sidebar yang menjadi parent element btn_sidebar itu sendiri tanpa memedulikan 
		// Pengkondisian ini juga sebagai pencegah jika ada btn_sidebar yang ada didalam sidebar tapi memiliki atribut data-target-id-sidebar
		sidebar = btn.parents('.content_sidebar');
	}
	else if ( btn.attr("data-target-id-sidebar") ) {
		// Jika tombol btn_sidebar untuk sidebar ada diluar sidebar dan punya atrinut target sidebarnya sendiri, maka buka sidebarnya sesuai dengan nilai yang ada di atribut target sidebarnya. Tapi jika tidak maka jadikan secara general 
		var data_target_sidebar = btn.attr('data-target-id-sidebar');
		sidebar = $(data_target_sidebar);
	}
	else{
		// Jika tombol btn_sidebar tidak berada dalam suatu sidebar dan tidak mempunyai atribut 
		alert("Tidak ada atribut untuk memilih sidebar pada tombol");  
	}

	// Cek apakah side bar terbuka atau tertutup
	if ( sidebar.is(':visible') ) {
		// Jika sidebar Terbuka, Tutup sidebar
		sidebar.hide();	
	}else{
		// Jika sidebar tertutup, Buka sidebar
		sidebar.show();
	}
}

function drop_outside(event_obj, dropdown_content) {
	// Jika user klik di luar elemen dropdown, maka dropdown akan hilang
	var target = $(event_obj.target); //Mengembalikan object mouse yang klik secara spesifik
	if ( !target.is(dropdown_content.find('*')) ) {
		$(window).unbind('click'); //Menghilangkan event dropdown yang terbuka dan terdaftar pada window
		$(dropdown_content).hide(100);
	}
}



