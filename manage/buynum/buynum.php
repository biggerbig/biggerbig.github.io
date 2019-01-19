<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/header.php';
?>

<!-- 컨텐츠 영역 -->
<div class="dash_con_wrap">
    <div class="mydash">
        <h4>815회에 구매한 로또
            <span>총 5게임</span>
        </h4>
        <div class="dash_con_inner">
            <div class="mynumber">
                <ul>
                    <li>
                        <div class="mynum_check">
                            <input type="checkbox" id="mynum1" name="mynum" class="mynum_checkbox" />
                            <label for="mynum1"></label>
                        </div>
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
                        <div class="mynum_check">
                            <input type="checkbox" id="mynum2" name="mynum" class="mynum_checkbox" />
                            <label for="mynum2"></label>
                        </div>
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
                        <div class="mynum_check">
                            <input type="checkbox" id="mynum3" name="mynum" class="mynum_checkbox" />
                            <label for="mynum3"></label>
                        </div>
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
            </div>
        </div>
        <div class="mynum_console">
            <ul>
                <li><a>선택한 번호 삭제</a></li>
                <li><a>자주 쓰는 조합 등록</a></li>
            </ul>
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
        $('.menu_btn_m').addClass('active');
    });
</script>
<!-- JS 영역 끝-->

<?php
    include $_SERVER["DOCUMENT_ROOT"].'/assets/footer.php';
?>