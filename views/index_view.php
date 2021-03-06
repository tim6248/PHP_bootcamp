<!DOCTYPE html>
<html>
<head>
  <title>Instagram</title>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width">

  <link rel="stylesheet" href="./css/stylesheet.css" type="text/css">
</head>

<body>
  <div class="download_bar">
    <div class="grd_bar"></div>
    <div class="content">
      <a href="" class="dl_link">
        <section class="desc">
          <p class="desc_header">Instagram</p>
          <p class="desc_text">Windows 스토어에서 무료로 다운로드하세요.</p>
        </section>
        <section class="dl_btn">
          <button>받기</button>
        </section>
      </a>
    </div>
  </div>
  <div class="main">
    <div class="container">
      <div class="phone">
        <div class="phone_img">
          <img src="img/screenshot1.jpg" alt="">
          <img src="img/screenshot2.jpg" alt="">
          <img src="img/screenshot3.jpg" alt="">
          <img src="img/screenshot4.jpg" alt="">
          <img src="img/screenshot5.jpg" alt="">
        </div>
      </div>
      <div class="total_box">
        <div class="signup_box">
            <h1 class="header">Instagram</h1>
          <div class="login_box">
            <form action="./php/sign_up.php" method="post">
              <h2 class="signup_text">친구들의 사진과 동영상을 보려면 가입하세요.</h2>
              <div class="btn_box">
                <button class="btn">
                  <span class="fb_logo"></span>
                  Facebook으로 로그인
                </button>
              </div>
              <div class="gap"></div>
              <div class="bd_box">
                <div class="bd_line"></div>
                <div class="bd_text">또는</div>
                <div class="bd_line"></div>
              </div>
              <div class="input_box">
                <div class="input_s_box">
                  <input type="text" placeholder="휴대폰 번호 또는 이메일 주소" name="address">
                </div>
              </div>
              <div class="input_box">
                <div class="input_s_box">
                  <input type="text" placeholder="성명" name="name" maxlength="45">
                </div>
              </div>
              <div class="input_box">
                <div class="input_s_box">
                  <input type="text" placeholder="사용자 이름" name="nickname">
                </div>
              </div>
              <div class="input_box">
                <div class="input_s_box">
                  <input type="password" placeholder="비밀번호" name="password">
                </div>
              </div>
                <div class="btn_box">
                    <button type="submit" class="btn">
                      <p>가입</p>
                    </button>
                </div>
            </form>
            <p class="agree">가입하면 Instagram의 <a href="">약관</a> 및 <a href="">개인정보처리방침</a>에 동의하게 됩니다.</p>
          </div>
        </div>
        <div class="signin_box">
          <p class="ask">계정이 있으신가요? <a href="">로그인</a></p>
        </div>
        <div class="download_box">
          <p class="dl_text">앱을 다운로드하세요.</p>
          <div class="badge_box">
            <a href="#"><img src="img/ios_badge.png" alt=""></a>
            <a href="#"><img src="img/android_badge.png" alt=""></a>
            <a href="#"><img src="img/microsoft_badge.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer_area">
      <nav class="nav_left">
        <ul class="nav_li">
          <li class="nav_unit"><a href="">INSTAGRAM 정보</a></li>
          <li class="nav_unit"><a href="">지원</a></li>
          <li class="nav_unit"><a href="">블로그</a></li>
          <li class="nav_unit"><a href="">홍보 센터</a></li>
          <li class="nav_unit"><a href="">API</a></li>
          <li class="nav_unit"><a href="">채용 정보</a></li>
          <li class="nav_unit"><a href="">개인정보처리방침</a></li>
          <li class="nav_unit"><a href="">약관</a></li>
          <li class="nav_unit"><a href="">디렉터리</a></li>
          <li class="nav_unit"><a href="">언어</a></li>
        </ul>
      </nav>
      <span class="copyright">© 2017 INSTAGRAM</span>
    </div>
  </footer>
</body>
</html>
