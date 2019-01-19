<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/header.php';
?>

<div class="page_tool">
    <div class="add_item add_trigger">번호 추가하기</div>
</div>

<!-- 컨텐츠 영역 -->
<div class="dash_con_wrap">
    <div class="mydash">
        <h4>자주 쓰는 조합
            <span>등록된 번호 관리</span>
        </h4>
        <div class="dash_con_inner">
            <div class="mynumber">
                <ul>
                    <li>
                        <div class="mynum_check">
                            <input type="checkbox" id="mynum1" name="mynum" class="mynum_checkbox" />
                            <label for="mynum1"></label>
                        </div>
                        <a href="/manage/mynum/detail.php">
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
                        <div class="mynum_check">
                            <input type="checkbox" id="mynum2" name="mynum" class="mynum_checkbox" />
                            <label for="mynum2"></label>
                        </div>
                        <a href="/manage/mynum/detail.php">
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
                        <div class="mynum_check">
                            <input type="checkbox" id="mynum3" name="mynum" class="mynum_checkbox" />
                            <label for="mynum3"></label>
                        </div>
                        <a href="/manage/mynum/detail.php">
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
                    <!-- 등록된 번호가 없을 경우 -->
                    <!-- <li>
                        <strong>아직 등록된 번호가 없어요.</strong>
                    </li> -->
                    <!-- 등록된 번호가 없을 경우:끝 -->
                    
                    
                    <!--안씀-->
                    <!-- <li>
                        <div class="add_num_item"></div>
                    </li> -->
                    <!--안씀:끝-->


                </ul>
            </div>
        </div>
        <div class="mynum_console">
            <ul>
                <li><a>선택한 번호 삭제</a></li>
                <li><a>이번주 구매 등록</a></li>
            </ul>
        </div>
        <div class="paper_layer_wrap">
            <h5>직접등록</h5>
            <!-- <h5>자세히 보기</h5> -->
            <ul>
                <li>
                    <input type="checkbox" id="reg_num1" name="reg_num" class="reg_num" />
                    <label for="reg_num1"></label>
                    <a>1</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num2" name="reg_num" class="reg_num" />
                    <label for="reg_num2"></label>
                    <a>2</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num3" name="reg_num" class="reg_num" />
                    <label for="reg_num3"></label>
                    <a>3</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num4" name="reg_num" class="reg_num" />
                    <label for="reg_num4"></label>
                    <a>4</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num5" name="reg_num" class="reg_num" />
                    <label for="reg_num5"></label>
                    <a>5</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num6" name="reg_num" class="reg_num" />
                    <label for="reg_num6"></label>
                    <a>6</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num7" name="reg_num" class="reg_num" />
                    <label for="reg_num7"></label>
                    <a>7</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num8" name="reg_num" class="reg_num" />
                    <label for="reg_num8"></label>
                    <a>8</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num9" name="reg_num" class="reg_num" />
                    <label for="reg_num9"></label>
                    <a>9</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num10" name="reg_num" class="reg_num" />
                    <label for="reg_num10"></label>
                    <a>10</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num11" name="reg_num" class="reg_num" />
                    <label for="reg_num11"></label>
                    <a>11</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num12" name="reg_num" class="reg_num" />
                    <label for="reg_num12"></label>
                    <a>12</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num13" name="reg_num" class="reg_num" />
                    <label for="reg_num13"></label>
                    <a>13</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num14" name="reg_num" class="reg_num" />
                    <label for="reg_num14"></label>
                    <a>14</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num15" name="reg_num" class="reg_num" />
                    <label for="reg_num15"></label>
                    <a>15</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num16" name="reg_num" class="reg_num" />
                    <label for="reg_num16"></label>
                    <a>16</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num17" name="reg_num" class="reg_num" />
                    <label for="reg_num17"></label>
                    <a>17</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num18" name="reg_num" class="reg_num" />
                    <label for="reg_num18"></label>
                    <a>18</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num19" name="reg_num" class="reg_num" />
                    <label for="reg_num19"></label>
                    <a>19</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num20" name="reg_num" class="reg_num" />
                    <label for="reg_num20"></label>
                    <a>20</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num21" name="reg_num" class="reg_num" />
                    <label for="reg_num21"></label>
                    <a>21</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num22" name="reg_num" class="reg_num" />
                    <label for="reg_num22"></label>
                    <a>22</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num23" name="reg_num" class="reg_num" />
                    <label for="reg_num23"></label>
                    <a>23</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num24" name="reg_num" class="reg_num" />
                    <label for="reg_num24"></label>
                    <a>24</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num25" name="reg_num" class="reg_num" />
                    <label for="reg_num25"></label>
                    <a>25</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num26" name="reg_num" class="reg_num" />
                    <label for="reg_num26"></label>
                    <a>26</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num27" name="reg_num" class="reg_num" />
                    <label for="reg_num27"></label>
                    <a>27</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num28" name="reg_num" class="reg_num" />
                    <label for="reg_num28"></label>
                    <a>28</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num29" name="reg_num" class="reg_num" />
                    <label for="reg_num29"></label>
                    <a>29</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num30" name="reg_num" class="reg_num" />
                    <label for="reg_num30"></label>
                    <a>30</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num31" name="reg_num" class="reg_num" />
                    <label for="reg_num31"></label>
                    <a>31</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num32" name="reg_num" class="reg_num" />
                    <label for="reg_num32"></label>
                    <a>32</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num33" name="reg_num" class="reg_num" />
                    <label for="reg_num33"></label>
                    <a>33</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num34" name="reg_num" class="reg_num" />
                    <label for="reg_num34"></label>
                    <a>34</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num35" name="reg_num" class="reg_num" />
                    <label for="reg_num35"></label>
                    <a>35</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num36" name="reg_num" class="reg_num" />
                    <label for="reg_num36"></label>
                    <a>36</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num37" name="reg_num" class="reg_num" />
                    <label for="reg_num37"></label>
                    <a>37</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num38" name="reg_num" class="reg_num" />
                    <label for="reg_num38"></label>
                    <a>38</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num39" name="reg_num" class="reg_num" />
                    <label for="reg_num39"></label>
                    <a>39</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num40" name="reg_num" class="reg_num" />
                    <label for="reg_num40"></label>
                    <a>40</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num41" name="reg_num" class="reg_num" />
                    <label for="reg_num41"></label>
                    <a>41</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num42" name="reg_num" class="reg_num" />
                    <label for="reg_num42"></label>
                    <a>42</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num43" name="reg_num" class="reg_num" />
                    <label for="reg_num43"></label>
                    <a>43</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num44" name="reg_num" class="reg_num" />
                    <label for="reg_num44"></label>
                    <a>44</a>
                </li>
                <li>
                    <input type="checkbox" id="reg_num45" name="reg_num" class="reg_num" />
                    <label for="reg_num45"></label>
                    <a>45</a>
                </li>
            </ul>
            <div class="paper_layer_btn_wrap">
                <a>저장</a>
                <a style="background-color: #666;" onclick="history.back();">취소</a>
                <!-- <a onclick="history.back();">확인</a> -->
            </div>
        </div>
        <div class="add_num_layer">
            <ul>
                <li class="paper_layer_trigger">
                    <div style="background-image:url(/img/assets/write_btn.png)"></div>
                    <span>직접등록</span>
                </li>
                <li class="qr_layer_trigger">
                    <div style="background-image:url(/img/assets/qr_btn.png)"></div>
                    <span>QR등록</span>
                </li>
            </ul>
        </div>
        <div class="qr_layer">
            <h5>QR등록</h5>
            <div class="qr_layer_inner">
                <div class="camera_area">
                    <input type=text class="code_readed" id="code_result">
                    <label class="select_qr_btn">
                        <input type="file" accept="image/*" capture="environment" onchange="openQRCamera(this);"
                            tabindex="-1" class="select_qr_input">
                    </label>
                </div>
                <div class="qr_error" style="display:none;">다시한번 촬영해 주세요.</div>
                <div id="qrdata">
                    <div class="qrdata_inner">
                        <h6>⦿버튼을 눌러 QR코드를 촬영해주세요.</h6>
                    </div>
                </div>
            </div>
            <div class="paper_layer_btn_wrap">
                <a>저장</a>
                <a style="background-color: #666;" onclick="history.back();">취소</a>
                <!-- <a onclick="history.back();">확인</a> -->
            </div>
        </div>
    </div>
</div>
<!-- 컨텐츠 영역 끝 -->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/middle.php';
?>

<!-- JS 영역 -->
<script src="/js/qr.js"></script>
<script>
    function openQRCamera(node) {
        var reader = new FileReader();
        reader.onload = function () {
            node.value = "";
            qrcode.callback = function (res) {
                if (res instanceof Error) {
                    alert("QR코드가 확인되지 않습니다. 밝고 선명하게 촬영해주세요.");
                    $('.qr_error').css("display", "block");
                } else {
                    node.parentNode.previousElementSibling.value = res;
                    $('.qr_error').css("display", "none")
                }
            };
            qrcode.decode(reader.result);

        };
        reader.readAsDataURL(node.files[0]);
    }
</script>
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

    $(document).ready(function () {
        $('.mynum_checkbox').click(function () {
            if ($('.mynum_checkbox:checked').length > 0) {
                console.log("체크된 상태");
                $('.mynum_console').addClass('open');
            } else {
                console.log("체크 안된 상태");
                $('.mynum_console').removeClass('open');
            }
        });
        $('.reg_num').click(function () {
            if ($('.reg_num:checked').length > 6) {
                event.preventDefault();
                alert('번호는 6개까지만 선택 가능합니다.');
            }
        });

        $('.add_trigger').click(function (event) {
            event.stopPropagation();
            $('.add_num_layer').fadeIn(200);
        });

        $(document).click(function () {
            $('.add_num_layer').fadeOut(200);
        });
    });
</script>
<!-- JS 영역 끝-->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/footer.php';
?>