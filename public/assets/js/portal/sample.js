$(document).ready(function(){
	SAMPLE.sample();
});

let baseUrl = $('#txt_baseUrl').val();

const SAMPLE = (function(){

	let thisSample = {};

	thisSample.sample = function()
	{
		console.log(baseUrl);
	}

	return thisSample;

})();