<?php
    include '../assets/header.php';
?>
    <div class="page_tool">
        <div class="picker_filter"></div>
    </div>
    <!-- 컨텐츠 영역 -->
    <div class="picker_top">
        <h3 id="pick_copy">자, 뽑아 봅시다.</h3>
        <div id="balls">

        </div>
        <button onclick="lottery();">번호뽑기</button>
    </div>
    <div class="pick_con_wrap">
        <h4>지금 뽑은 번호
            <span>눌러서 저장</span>
        </h4>
        <div class="pick_con_inner">
            <div class="mypick" codepen="visible">
                <ul>
                </ul>
            </div>
        </div>
    </div>

    <div class="paper_layer_wrap">
        <h5>직접등록</h5>
        <div class="picked_layer">
            <p>이 조합을 저장 하시겠습니까?</p>
        </div>

        <div class="paper_layer_btn_wrap">
            <a>저장</a>
            <a style="background-color: #666;" onclick="history.back();">취소</a>
            <!-- <a onclick="history.back();">확인</a> -->
        </div>
    </div>

    <div class="filter_layer">
        <div class="filter_wrap">
            <h6>과거 1등 번호</h6>
            <div>
                <input type="radio" id="except" name="filter_radio" checked />
                <label for="except">제외</label>
                <input type="radio" id="accept" name="filter_radio" />
                <label for="accept">포함</label>
            </div>
        </div>
        <div class="filter_wrap open_fixnum">
            <h6>고정수</h6>
            <p>
                <span class="fixnum_leng">0</span>개</p>
        </div>
        <div class="filter_wrap open_accept">
            <h6>제외수</h6>
            <p>
                <span class="acceptnum_leng">0</span>개</p>
        </div>
        <div class="filter_btn" onclick="history.back();">숨기기</div>
    </div>

    <div class="fixnum_layer">
        <div class="number_picker_wrap">
            <div class="number_picker">
                <h5>포함 할 번호 선택</h5>
                <input type="checkbox" id="fixnum1" value="1" />
                <label for="fixnum1">1</label>
                <input type="checkbox" id="fixnum2" value="2" />
                <label for="fixnum2">2</label>
                <input type="checkbox" id="fixnum3" value="3" />
                <label for="fixnum3">3</label>
                <input type="checkbox" id="fixnum4" value="4" />
                <label for="fixnum4">4</label>
                <input type="checkbox" id="fixnum5" value="5" />
                <label for="fixnum5">5</label>
                <input type="checkbox" id="fixnum6" value="6" />
                <label for="fixnum6">6</label>
                <input type="checkbox" id="fixnum7" value="7" />
                <label for="fixnum7">7</label>
                <input type="checkbox" id="fixnum8" value="8" />
                <label for="fixnum8">8</label>
                <input type="checkbox" id="fixnum9" value="9" />
                <label for="fixnum9">9</label>
                <input type="checkbox" id="fixnum10" value="10" />
                <label for="fixnum10">10</label>
                <input type="checkbox" id="fixnum11" value="11" />
                <label for="fixnum11">11</label>
                <input type="checkbox" id="fixnum12" value="12" />
                <label for="fixnum12">12</label>
                <input type="checkbox" id="fixnum13" value="13" />
                <label for="fixnum13">13</label>
                <input type="checkbox" id="fixnum14" value="14" />
                <label for="fixnum14">14</label>
                <input type="checkbox" id="fixnum15" value="15" />
                <label for="fixnum15">15</label>
                <input type="checkbox" id="fixnum16" value="16" />
                <label for="fixnum16">16</label>
                <input type="checkbox" id="fixnum17" value="17" />
                <label for="fixnum17">17</label>
                <input type="checkbox" id="fixnum18" value="18" />
                <label for="fixnum18">18</label>
                <input type="checkbox" id="fixnum19" value="19" />
                <label for="fixnum19">19</label>
                <input type="checkbox" id="fixnum20" value="20" />
                <label for="fixnum20">20</label>
                <input type="checkbox" id="fixnum21" value="21" />
                <label for="fixnum21">21</label>
                <input type="checkbox" id="fixnum22" value="22" />
                <label for="fixnum22">22</label>
                <input type="checkbox" id="fixnum23" value="23" />
                <label for="fixnum23">23</label>
                <input type="checkbox" id="fixnum24" value="24" />
                <label for="fixnum24">24</label>
                <input type="checkbox" id="fixnum25" value="25" />
                <label for="fixnum25">25</label>
                <input type="checkbox" id="fixnum26" value="26" />
                <label for="fixnum26">26</label>
                <input type="checkbox" id="fixnum27" value="27" />
                <label for="fixnum27">27</label>
                <input type="checkbox" id="fixnum28" value="28" />
                <label for="fixnum28">28</label>
                <input type="checkbox" id="fixnum29" value="29" />
                <label for="fixnum29">29</label>
                <input type="checkbox" id="fixnum30" value="30" />
                <label for="fixnum30">30</label>
                <input type="checkbox" id="fixnum31" value="31" />
                <label for="fixnum31">31</label>
                <input type="checkbox" id="fixnum32" value="32" />
                <label for="fixnum32">32</label>
                <input type="checkbox" id="fixnum33" value="33" />
                <label for="fixnum33">33</label>
                <input type="checkbox" id="fixnum34" value="34" />
                <label for="fixnum34">34</label>
                <input type="checkbox" id="fixnum35" value="35" />
                <label for="fixnum35">35</label>
                <input type="checkbox" id="fixnum36" value="36" />
                <label for="fixnum36">36</label>
                <input type="checkbox" id="fixnum37" value="37" />
                <label for="fixnum37">37</label>
                <input type="checkbox" id="fixnum38" value="38" />
                <label for="fixnum38">38</label>
                <input type="checkbox" id="fixnum39" value="39" />
                <label for="fixnum39">39</label>
                <input type="checkbox" id="fixnum40" value="40" />
                <label for="fixnum40">40</label>
                <input type="checkbox" id="fixnum41" value="41" />
                <label for="fixnum41">41</label>
                <input type="checkbox" id="fixnum42" value="42" />
                <label for="fixnum42">42</label>
                <input type="checkbox" id="fixnum43" value="43" />
                <label for="fixnum43">43</label>
                <input type="checkbox" id="fixnum44" value="44" />
                <label for="fixnum44">44</label>
                <input type="checkbox" id="fixnum45" value="45" />
                <label for="fixnum45">45</label>
            </div>
            <div class="filter_btn close_fixnum">적용</div>
        </div>

    </div>

    <div class="acceptnum_layer">
        <div class="number_picker_wrap">
            <div class="number_picker">
                <h5>제외 할 번호 선택</h5>
                <input type="checkbox" id="exceptnum1" value="1" />
                <label for="exceptnum1">1</label>
                <input type="checkbox" id="exceptnum2" value="2" />
                <label for="exceptnum2">2</label>
                <input type="checkbox" id="exceptnum3" value="3" />
                <label for="exceptnum3">3</label>
                <input type="checkbox" id="exceptnum4" value="4" />
                <label for="exceptnum4">4</label>
                <input type="checkbox" id="exceptnum5" value="5" />
                <label for="exceptnum5">5</label>
                <input type="checkbox" id="exceptnum6" value="6" />
                <label for="exceptnum6">6</label>
                <input type="checkbox" id="exceptnum7" value="7" />
                <label for="exceptnum7">7</label>
                <input type="checkbox" id="exceptnum8" value="8" />
                <label for="exceptnum8">8</label>
                <input type="checkbox" id="exceptnum9" value="9" />
                <label for="exceptnum9">9</label>
                <input type="checkbox" id="exceptnum10" value="10" />
                <label for="exceptnum10">10</label>
                <input type="checkbox" id="exceptnum11" value="11" />
                <label for="exceptnum11">11</label>
                <input type="checkbox" id="exceptnum12" value="12" />
                <label for="exceptnum12">12</label>
                <input type="checkbox" id="exceptnum13" value="13" />
                <label for="exceptnum13">13</label>
                <input type="checkbox" id="exceptnum14" value="14" />
                <label for="exceptnum14">14</label>
                <input type="checkbox" id="exceptnum15" value="15" />
                <label for="exceptnum15">15</label>
                <input type="checkbox" id="exceptnum16" value="16" />
                <label for="exceptnum16">16</label>
                <input type="checkbox" id="exceptnum17" value="17" />
                <label for="exceptnum17">17</label>
                <input type="checkbox" id="exceptnum18" value="18" />
                <label for="exceptnum18">18</label>
                <input type="checkbox" id="exceptnum19" value="19" />
                <label for="exceptnum19">19</label>
                <input type="checkbox" id="exceptnum20" value="20" />
                <label for="exceptnum20">20</label>
                <input type="checkbox" id="exceptnum21" value="21" />
                <label for="exceptnum21">21</label>
                <input type="checkbox" id="exceptnum22" value="22" />
                <label for="exceptnum22">22</label>
                <input type="checkbox" id="exceptnum23" value="23" />
                <label for="exceptnum23">23</label>
                <input type="checkbox" id="exceptnum24" value="24" />
                <label for="exceptnum24">24</label>
                <input type="checkbox" id="exceptnum25" value="25" />
                <label for="exceptnum25">25</label>
                <input type="checkbox" id="exceptnum26" value="26" />
                <label for="exceptnum26">26</label>
                <input type="checkbox" id="exceptnum27" value="27" />
                <label for="exceptnum27">27</label>
                <input type="checkbox" id="exceptnum28" value="28" />
                <label for="exceptnum28">28</label>
                <input type="checkbox" id="exceptnum29" value="29" />
                <label for="exceptnum29">29</label>
                <input type="checkbox" id="exceptnum30" value="30" />
                <label for="exceptnum30">30</label>
                <input type="checkbox" id="exceptnum31" value="31" />
                <label for="exceptnum31">31</label>
                <input type="checkbox" id="exceptnum32" value="32" />
                <label for="exceptnum32">32</label>
                <input type="checkbox" id="exceptnum33" value="33" />
                <label for="exceptnum33">33</label>
                <input type="checkbox" id="exceptnum34" value="34" />
                <label for="exceptnum34">34</label>
                <input type="checkbox" id="exceptnum35" value="35" />
                <label for="exceptnum35">35</label>
                <input type="checkbox" id="exceptnum36" value="36" />
                <label for="exceptnum36">36</label>
                <input type="checkbox" id="exceptnum37" value="37" />
                <label for="exceptnum37">37</label>
                <input type="checkbox" id="exceptnum38" value="38" />
                <label for="exceptnum38">38</label>
                <input type="checkbox" id="exceptnum39" value="39" />
                <label for="exceptnum39">39</label>
                <input type="checkbox" id="exceptnum40" value="40" />
                <label for="exceptnum40">40</label>
                <input type="checkbox" id="exceptnum41" value="41" />
                <label for="exceptnum41">41</label>
                <input type="checkbox" id="exceptnum42" value="42" />
                <label for="exceptnum42">42</label>
                <input type="checkbox" id="exceptnum43" value="43" />
                <label for="exceptnum43">43</label>
                <input type="checkbox" id="exceptnum44" value="44" />
                <label for="exceptnum44">44</label>
                <input type="checkbox" id="exceptnum45" value="45" />
                <label for="exceptnum45">45</label>
            </div>
            <div class="filter_btn close_accept">적용</div>
        </div>
    </div>


    <!-- 컨텐츠 영역 끝 -->

    <?php
    include '../assets/middle.php';
?>

        <!-- JS 영역 -->
        <script src="/js/picker.js"></script>
        <script>
            function pickedSave() {
                console.log("ss")
                $('.paper_layer_wrap').fadeIn(200);
                $(".layer_cover").fadeIn(200);
                window.location.hash = "#menu-open";
            };

            $('.picker_filter').click(function () {
                $('.layer_cover').fadeIn(200);
                $('.filter_layer').addClass('open');
                window.location.hash = "#menu-open";
            });

            $('.open_fixnum').click(function () {
                $('.fixnum_layer').addClass('open')
            });

            $('.close_fixnum').click(function () {
                $('.fixnum_layer').removeClass('open')
            })

            $('.open_accept').click(function () {
                $('.acceptnum_layer').addClass('open')
            });

            $('.close_accept').click(function () {
                $('.acceptnum_layer').removeClass('open')
            })

            $('.fixnum_layer input[type="checkbox"]').click(function () {
                $('.fixnum_leng').html($('.fixnum_layer input:checked').length);
            });

            $('.acceptnum_layer input[type="checkbox"]').click(function () {
                $('.acceptnum_leng').html($('.acceptnum_layer input:checked').length);
            });
        </script>
        <!-- JS 영역 끝-->

        <?php
    include '../assets/footer.php';
?>