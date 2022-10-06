@extends('layout.navigation')
@extends('layout.header')
  </head>
  <body>
    <div>
      <link href="{{asset('css/event.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
          <div class="trangch-frame">
                <img src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg" />
              </div>
              <img
                  src="{{asset('playground_assets/khung chứa vé.svg')}}" class="sc-khungchuave"
                />
                <div class="tieude">
                  <span class="tieude-text">Thanh toán thành công</span>
                </div>
              <div class="sc-all">
                <div class="sc-detail">
                  <img src="{{asset('playground_assets/image 3.svg')}}" class="sc-image3" />
                  <span class="sc-alt">ALT</span>
                  <span class="sc-vecong">Vé cổng</span>
                 <img src="{{asset('playground_assets/---.svg')}}" class="sc-gach" />
                  <span class="sc-ngaysd">Ngày sử dụng: 31/05/2022</span>
                </div>
                  <div class="sc-detail"></div>
                  <div class="sc-detail"></div>
                  <div class="sc-detail"></div>
              </div>
              <img src="{{asset('playground_assets/Previous btn.svg')}}" class="sc-previousbtn" />
              <img src="{{asset('playground_assets/next btn.svg')}}" class="sc-nextbtn" />
              <div class="sc-last-button">
                <img src="{{asset('playground_assets/tải về.svg')}}" class="sc-taive" />
                <img src="{{asset('playground_assets/gửi mail.svg')}}" class="sc-taive" />
              </div>
      </div>
    </div>
  </body>
</html>
