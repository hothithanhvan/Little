@extends('layout.header')
@extends('layout.navigation')
</head>
  <body>
    <div>
      <link href="{{asset('css/ticket.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
          <div class="trangch-frame">
            <div class="">
              <div class="">
                <img
                  src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg"
                />
              </div>
            </div>
            
            <span class="trangch-text">ĐẦM SEN PARK</span>
            <div class="trangch-frame03">
            <div class="trangch-group57">
                <img
                  src="{{asset('playground_assets/Group 1.svg')}}"
                  alt="Vector1944"
                  class="trangch-vector108"
                />
              </div>
            <img
                  src="{{asset('playground_assets/Frame.svg')}}"  class="frame03"/>
              <div class="trangch-frame7">
                <input class="trangch-frame5" placeholder="Gói gia đình">
                <img
                  src="{{asset('playground_assets/dropdown.svg')}}" class="button-dropdown"
                />
                <input type="text" class="trangch-frame6" placeholder="Số lượng vé">
                <input class="trangch-frame71" placeholder="Ngày sử dụng">
                <img
                  src="{{asset('playground_assets/lich.svg')}}" class="button-lich"
                />
                <input type="text" class="trangch-frame8" placeholder="Họ và tên">
                <input type="text" class="trangch-frame8" placeholder="Số điện thoại">
                <input type="text" class="trangch-frame8" placeholder="Địa chỉ email">
                
                </div>
                <img
                  src="{{asset('playground_assets/datve.svg')}}" class="trangch-frame06"
                />
</div>               
              </div>
          </div>
</div>
            
      </div>
    </div>
  </body>
</html>
