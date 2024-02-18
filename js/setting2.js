$(document).ready(function(){
	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();

	calc( parseInt($("#Ultra").val()));
	//Calculator

	function calc(plan){	
		var money = parseFloat($("#money").val());

		switch (plan) {
		    case 1:
		        if(money >= 10 && money <= 1000){
					var profitDaily = money / 100 * 160;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);

				}else{
					$("#profitDaily").text("Error!");
				}
				break;
		    case 2:
				if(money > 100 && money <= 2500){
					var profitDaily = money / 100 * 240;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);

				}else{
					$("#profitDaily").text("Error!");
				}
				break;
		    case 3:
		        if(money > 250 && money < 5000){
					var profitDaily = money / 100 * 320;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);

				}else{
					$("#profitDaily").text("Error!");
				}
				break;
		    case 4:
		        if(money > 500 && money <= 7500){
					var profitDaily = money / 100 * 400;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);

				}else{
					$("#profitDaily").text("Error!");
				}
				break;

		    case 5:
		       if(money > 1000 && money <= 10000){
					var profitDaily = money / 100 * 480;
					var profitDaily = profitDaily.toFixed(2);

					$("#profitDaily").text(profitDaily);
				//} else if(isNaN(money) == true) {
				}else{
					$("#profitDaily").text("Error!");
				}
				break;
		}
	}
	$("#money").keyup(function(){
		calc( parseInt($("#Ultra").val()));
	});

	$("#Ultra").on('change', function() {
		calc(parseInt($(this).val()));
	})
});