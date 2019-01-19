var prizeNum = [];
function call(call) {
  $.getJSON("https://www.geniecontents.com/api/v1/lotto?drawNo=", function (data) {
    prizeNum[7] = data.body.num1;
    prizeNum[6] = data.body.num2;
    prizeNum[5] = data.body.num3;
    prizeNum[4] = data.body.num4;
    prizeNum[3] = data.body.num5;
    prizeNum[2] = data.body.num6;
    prizeNum[1] = '+';
    prizeNum[0] = data.body.bonusNum;
    call(prizeNum);
  });
}

call(function(prizeNum) {
  print(prizeNum);
});
console.log('2', prizeNum);


$("#prize_count")
  .change(function () {
    var countVal = $("#prize_count option:selected").val();

    $.getJSON("https://www.geniecontents.com/api/v1/lotto?drawNo=" + countVal, function (data) {
      prizeNum[7] = data.body.num1;
      prizeNum[6] = data.body.num2;
      prizeNum[5] = data.body.num3;
      prizeNum[4] = data.body.num4;
      prizeNum[3] = data.body.num5;
      prizeNum[2] = data.body.num6;
      prizeNum[1] = '+';
      prizeNum[0] = data.body.bonusNum;
    });
    console.log(prizeNum);
    print(prizeNum);
  });

function print(prizeNum) {

  console.log("print function has fired");
  var html = '';
  for (i = 0; i < prizeNum.length; i++) {
    html += '<div class="ball"><div><span data-value="' + prizeNum[i] + '">' + prizeNum[i] + '</span></div></div>';
  }
  document.getElementById('balls').innerHTML = html;
  filter();
}



function filter() {
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
    } else {
      $(this).addClass('nonum');
      $(this).children().children('span').css('background', 'transparent')
      $(this).children().children('span').css('color', '#fff')
      $(this).children().children('span').css('font-size', '16px')
    }
  });
  // individual balls
  var $ball = $('#balls > div'),

    // standard foundation guttering
    gutter = 10,

    // width of the column they're sat in
    ballHold = $('#balls').width() + (gutter * 2),

    // width/height of ball + 10px for spacing
    diameter = ($ball.height() + 5),

    //  ratio of the circumference of a circle to its diameter
    perimeter = Math.PI * diameter,

    // how many balls
    n = $ball.length,

    // max amount of balls per line, 11 is a nice fit
    total = 8,

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