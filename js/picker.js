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
	// console.log(numbers)

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
		html += '<div class="ball"><div><span class="num_data" data-value="' + numbers[i] + '">' + numbers[i] + '</span></div></div>';
	}
	document.getElementById('balls').innerHTML = html;

	// 랜덤으로 뽑은 번호 리스트로 표시
	var variid = $.now();
	var myclasss = 'picknum' + variid

	$('.mypick > ul').append('<li class="pickednum" onclick="pickedSave()"><div class="pick_layer_trigger"><ul class="' + myclasss + '"></ul></div></li>');

	var reNumber = numbers.reverse();
	$.each(reNumber, function (index, value) {
		$('.' + myclasss).append('<li class="mynum_item"><div><span>' + value + '</span></div></li>')
	});
	// 랜덤으로 뽑은 번호 리스트로 표시:끝


	// 문구 표시
	$('.picker_top h3').css('opacity', '0');

	setTimeout(function () {
		var pickerCopy = '';
		var rndmcopy = ['진짜 느낌 좋은 조합', '1,2,3,4,5,6과 같은 확률의 번호', '진심으로 1등 걸리길 바랍니다.', '진지하게 사야할 번호', '로또는 운입니다.', '정말 예상 가능하다고 생각하시나요?', '약 815만분의 1. 확률은 모두가 동일합니다.', '소문 많이 내주세요♥', '1등걸리면 커피한잔 사주세요♥', '이 조합 좋은데요?', '운수대통하세요!', '어때요? 느낌 좋은가요?', '어젯밤 꿈은 잘 꾸셨나요?', '이 번호에요! 이 번호!'];
		pickerCopy += rndmcopy[Math.floor(Math.random() * rndmcopy.length)];
		document.getElementById('pick_copy').innerHTML = pickerCopy;
	}, 200);
	setTimeout(function () {
		$('.picker_top h3').css('opacity', '1');
	}, 3000);


	// 문구 표시:끝



	$('.ball,.mynum_item').each(function () {
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