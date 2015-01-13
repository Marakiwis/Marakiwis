$(document).ready(function() {
	var inputs = "input[type=text], input[type=password], select,textarea, input[type=number]"
	$(inputs).addClass('form-control');
	$('i.glyphicon.glyphicon-globe').parent().css('padding','7px');
	$('a[data-placement=top]').tooltip('show');
})