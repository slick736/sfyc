$(document).ready(function () {
	$('.browse').hover(function(){
		$(this).addClass('browse-hover');
		$(this).find("ul").show();
	},
	function(){
		$(this).removeClass('browse-hover');
		$(this).find("ul").hide();
	}
	);
}
);