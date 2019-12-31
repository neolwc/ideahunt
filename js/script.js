$(function () {
	$('.tab-pane').first().addClass('in active');
	$('ul.nav.navbar-nav.nav-inline > li > a').tab();
	$('#typed').typed({
		stringsElement: $('#typed-strings'),
		backDelay: 700,
		cursorChar: '_'
	});
	$('button[data-target="#new"]').click(function () {
		$('button[data-target="#new"] img').toggleClass('clear');
		$(this).removeClass('animated');
	});
	$('.vote').click(function () {
		var id = parseInt($(this).attr('data-id'));
		if (!$('.vote[data-id='+id+']').hasClass('voted')) {
			$('.vote[data-id='+id+']').addClass('voted');
			$('.vote[data-id='+id+']').text(function () {
				return parseInt($(this).text()) + 1;
			});
			$.ajax({
				url: 'post.php',
				type: 'post',
				data: {'vote': id}
			});
		} else {
			$('.vote[data-id='+id+']').removeClass('voted');
			$('.vote[data-id='+id+']').text(function () {
				return parseInt($(this).text()) - 1;
			});
			$.ajax({
				url: 'post.php',
				type: 'post',
				data: {'unvote': id}
			});
		}
	});
});