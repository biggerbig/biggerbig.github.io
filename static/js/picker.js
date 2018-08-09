





function lottery() {
	var numbers = [];
	//empty array
	//loop to get 6/7 numbers
	for (var i = 0; i < 6;) {
		//generate random number into variable
		number = Math.floor(Math.random() * (45)) + 1;
		// console.log(number);
		if (numbers.indexOf(number) === -1) {
			//check if number exists
			numbers.push(number);
			//add number to array
			// console.log("unique");
			//console logging number to check for unique value
			i++;
			//increment for counter
		} else {
			// console.log("notunique");
			//console logging number to check for unique value
		}
	}
	sort(numbers);
	console.log(numbers)
	// javascript number sort

	//return the array to the div#lotteryNumbers

}

function sort(numbers) {
	numbers.sort(function (a, b) {
		return b - a;
	});
	// console.log("sort function has fired");
	print(numbers);
}


function print(numbers) {

	// console.log("print function has fired");
	var html = '';
	for (i = 0; i < numbers.length; i++) {
		html += '<div class="ball"><div><span data-value="' + numbers[i] + '">' + numbers[i] + '</span></div></div>';
	}
	document.getElementById('balls').innerHTML = html;
	$('.ball').each(function () {
		var numResult = parseInt($(this).find('span').html());
		if (numResult >= 1 && numResult <= 9) {
			$(this).addClass('yellow');
		} else if (numResult >= 10 && numResult <= 19) {
			$(this).addClass('blue');
		} else if (numResult >= 20 && numResult <= 29) {
			$(this).addClass('red');
		} else if (numResult >= 30 && numResult <= 39) {
			$(this).addClass('purple');
		} else if (numResult >= 40 && numResult <= 45) {
			$(this).addClass('green');
		}
	});
	// individual balls
	var $ball = $('#balls > div'),

		// standard foundation guttering
		gutter = 10,

		// width of the column they're sat in
		ballHold = $('#balls').width() + (gutter * 2),

		// width/height of ball + 10px for spacing
		diameter = ($ball.height() + 10),

		//  ratio of the circumference of a circle to its diameter
		perimeter = Math.PI * diameter,

		// how many balls
		n = $ball.length,

		// max amount of balls per line, 11 is a nice fit
		total = 6,

		// base
		i = 0,

		// interval between balls rolling in
		interval;


	// get the balls rolling
	function rotateBall(distance, depth) {

		// console.log(distance + ' = ' + depth);
		var degree = distance * 720 / perimeter,

			// reusable transition
			transition = "1.3s cubic-bezier(1.000, 1.450, 0.185, 0.850)",
			opacity = '1';

		// rotate the balls
		$ball.eq(i).css({
			transition: transition,
			transform: 'translateX(' + distance + 'px)',
			// top: depth * diameter,
			top: depth,
			opacity: opacity

			// rotate the inner text
		}).find('div').css({
			transition: transition,
			transform: 'rotate(' + degree + 'deg)'

			// on animation end, rotate all the balls back to their starting position
		}).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
			function () {
				$(this).css('transform', 'rotate(0)');
			}
		);
	}


	// the time between balls rolling 
	interval = setInterval(function () {

		// if we have number balls
		if (i > n) clearInterval(interval);

		// use the column var to gauage rolling width
		rotateBall(ballHold - (diameter * (i % total)), Math.floor(i / total));

		// up dee count 
		i++;
	}, 200);
}