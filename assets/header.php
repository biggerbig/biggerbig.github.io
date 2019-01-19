<!DOCTYPE html>
<html lang="ko">

<head>
    <meta name="theme-color" content="#242425" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="로또롱또똣">
    <title>로또롱또똣</title>
    <link rel="icon" sizes="192x192" href="/icon.png" />
    <link rel="apple-touch-icon" href="/icon.png">
    <meta name="msapplication-TileImage" content="icon.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">
    <link rel="manifest" href="/manifest.json">
    <style>
        .loader_wrap {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: rgba(24, 24, 25, 0.9);
            z-index: 999;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .loader_wrap>div {
            width: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            flex-direction: column;
        }

        .loader_wrap>div>p {
            text-align: center;
            font-size: 20px;
            font-family: 'chosun_ilbo_myungjo';
            line-height: 26px;
        }
    </style>
    <link href="/css/base.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $(".loader_wrap").fadeOut("3000");
            setTimeout(function () {
                $(".loader_wrap").remove();
            }, 2000);
            var splashCopy = '';
            var letters = ['1등은 예기치 않게<br>찾아옵니다.','정말 예상 가능하다고<br>생각하시나요?','1,2,3,4,5,6과 당신이 고른번호<br>당첨확률은 같습니다.', '로또는<br>운 입니다.', '약 815만분의 1.<br>확률은 모두 동일합니다.', '로또하기<br>딱 좋은 기분', '오늘은 왠지<br>느낌이 좋다.', '자주사는 번호는<br>꼭 등록해 주세요.', '당첨은<br>생일과 상관 없습니다.', '자동이 아니라면<br>언제 사든 똑같습니다.', '자동이 아니라면<br>어디서 사든 똑같습니다.', '주변 사람들에게<br>추천하기♥', '매주한번 돌아오는<br>기부의 시간', '로또롱또똣<br>별 뜻은 없습니다.', '과학적 근거<br>그런건 없습니다.'];
            splashCopy += letters[Math.floor(Math.random() * letters.length)];
            document.getElementById('splash_copy').innerHTML = splashCopy;
        });
    </script>
</head>

<body>
    <div class="loader_wrap">
        <div>
            <p id="splash_copy" style="color:#fff;"></p>
        </div>
    </div>
    <div id="header">
        <div class="logo_area">
            <a href="/"></a>
        </div>
        <div class="go_mylotto"></div>
    </div>
    <div class="menu_btn_m">
        <i></i>
        <i></i>
        <i></i>
    </div>
    <div class="page_cover" onclick="history.back();"></div>
    <div class="layer_cover" onclick="history.back();"></div>
    <div class="menu">
        <div>
            <p>약 814만분의 1.
                <br>모두의 확률은 같다.
                <br>하지만 오늘은,
                <br>왠지 느낌이 좋다.</p>
            <h2>로또
                <br>롱또똣</h2>
        </div>
        <ul class="gnb">
            <li>
                <a href="/">홈</a>
            </li>
            <li>
                <a href="/manage/buynum/list.php">내 로또</a>
            </li>
            <li>
                <a href="/manage/mynum/list.php">자주 쓰는 조합</a>
            </li>
            <li>
                <a href="/picker/picker.php">랜덤 번호 뽑기</a>
            </li>
            <li>
                <a href="naversearchapp://search?qmenu=qrcode&version=1">QR 당첨확인</a>
            </li>
            <li>
                <a href="/prize/list.php">회차별 당첨번호</a>
            </li>
            <li>
                <a href="#">커뮤니티</a>
            </li>
        </ul>
        <ul class="gnb_sub">
            <li>
                <a href="#">로그인</a>
            </li>
            <!-- <li><a href="#">로그아웃</a></li> -->
        </ul>
    </div>
    <div id="content">
        <div class="container">
