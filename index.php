<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/header.php';
?>
<div class="page_tool">
    <a href="/picker/picker.php" class="go_pick">번호뽑기</a>
</div>
<!-- 컨텐츠 영역 -->

<div class="main_top">
    <select id="prize_count">
        <option value="817">817회차 당첨번호(2018.07.28)</option>
        <option value="816">816회차 당첨번호(2018.07.28)</option>
        <option value="815">815회차 당첨번호(2018.07.28)</option>
        <option value="814">814회차 당첨번호(2018.07.28)</option>
        <option value="813">813회차 당첨번호(2018.07.28)</option>
        <option value="812">812회차 당첨번호(2018.07.28)</option>
        <option value="811">811회차 당첨번호(2018.07.28)</option>
        <option value="810">810회차 당첨번호(2018.07.28)</option>
        <option value="809">809회차 당첨번호(2018.07.28)</option>
        <option value="808">808회차 당첨번호(2018.07.28)</option>
    </select>
    </option>
    <div id="balls" class="prize_num">

    </div>
</div>
<div class="mydash">
    <div class="dash_con_wrap">
        <h4>내 당첨금<span>4주간 당첨된 금액</span></h4>
        <div class="dash_con_inner">
            <div class="myprize">
                <ul>
                    <li>
                        <span></span>
                        <dt><em>817</em>회</dt>
                        <dd><em>4등</em>5,000원</dd>
                    </li>
                    <li>
                        <span></span>
                        <dt><em>815</em>회</dt>
                        <dd><em>2등</em>1,125,000원</dd>
                    </li>
                </ul>
                <!-- <ul class="empty_list">
                    <li>
                        <p>아직 당첨 되지 않았어요.</p>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="dash_con_wrap">
        <h4>이번주 내 로또 번호<span>825회</span></h4>
        <div class="dash_con_inner">
            <div class="mybuynum">
                <ul>
                    <li>
                        <a href="/manage/buynum/detail.php">
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
                                        <span>42</span>
                                    </div>
                                </li>
                            </ul>
                        </a>
                    </li>
                    <li>
                        <a href="/manage/buynum/detail.php">
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
                                        <span>42</span>
                                    </div>
                                </li>
                            </ul>
                        </a>
                    </li>
                </ul>
                <!-- <ul class="empty_list">
                    <li>
                        <p>등록되지 않았어요.</p>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
    <div class="dash_con_wrap">
        <h4>내 행운 번호<span>당첨이 많은 번호</span></h4>
        <div class="dash_con_inner">
            <div class="mybestnum">
                <ul>
                    <li>
                        <span></span>
                        <div class="mybestnum_item">
                            <div class="mynum_item">
                                <div>
                                    <span>42</span>
                                </div>
                            </div>
                        </div>
                        <div class="mybestnum_count">
                            <span><em>12</em>회</span>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="mybestnum_item">
                            <div class="mynum_item">
                                <div>
                                    <span>18</span>
                                </div>
                            </div>
                        </div>
                        <div class="mybestnum_count">
                            <span><em>7</em>회</span>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="mybestnum_item">
                            <div class="mynum_item">
                                <div>
                                    <span>6</span>
                                </div>
                            </div>
                        </div>
                        <div class="mybestnum_count">
                            <span><em>3</em>회</span>
                        </div>
                    </li>
                </ul>
                <!-- <ul class="empty_list">
                    <li>
                        <p>아직 알려드릴 만한 내용이 없어요.</p>
                    </li>
                </ul> -->
            </div>
        </div>
    </div>
</div>
<!-- 컨텐츠 영역 끝 -->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/middle.php';
?>

<!-- JS 영역 -->
<script src="/js/change_prize.js"></script>
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
</script>

<!-- JS 영역 끝-->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/footer.php';
?>