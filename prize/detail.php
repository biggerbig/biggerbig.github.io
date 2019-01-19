<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/header.php';
?>

<!-- 컨텐츠 영역 -->
<div class="detail_top prize_list_wrap">
    <h5>825회차 당첨번호(2018.09.15)</h5>
    <a href="/prize/detail.php" class="prize_item_numwrap">
        <ul>
            <li class="mynum_item">
                <div>
                    <span>1</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>12</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>15</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>22</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>38</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>38</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>+</span>
                </div>
            </li>
            <li class="mynum_item">
                <div>
                    <span>17</span>
                </div>
            </li>
        </ul>
    </a>
</div>
<div class="dash_con_wrap">
    <div class="mydash">
        <h4>이 조합으로 당첨된 금액</h4>
        <div class="dash_con_inner">
            <div class="myprize">
                <p>총 <span>1,255,000</span> 원</p>
            </div>
        </div>
    </div>
    <div class="mydash">
        <h4>이 조합으로 당첨된 이력<span>12회</span></h4>
        <div class="dash_con_inner">
            <div class="myprize">
                <ul>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>50,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>5등</em>5,000원</dd>
                    </li>
                </ul>
                <ul class="empty_list">
                    <li>
                        <p>아직 당첨 되지 않았어요.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 컨텐츠 영역 끝 -->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/middle.php';
?>

<!-- JS 영역 -->
<script>
    $('.mynum_item').each(function () {
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
    $('.menu_btn_m').addClass('active');
</script>
<script src="/js/prize_num.js"></script>
<!-- JS 영역 끝-->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/footer.php';
?>