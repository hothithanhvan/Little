@extends('layout.header')
@extends('layout.navigation')
</head>
  <body>
    <div>
      <link href="{{asset('css/ticket.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
        
          <div class="trangch-frame">
                <img
                  src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg"
                />
                <img
                  src="{{asset('playground_assets/Frame.svg')}}"  class="pay-frame-bg"/>
            <div class="pay-frame">
                <img
                  src="{{asset('playground_assets/thongtinthanhtoan.svg')}}" class="pay-infopay"
                />
                <img
                  src="{{asset('playground_assets/vecongvegiadinh.svg')}}" class="pay-ticket"
                />
                <div class="pay-inside-frame">
                
                  <div class="ticket-row1">
                    <div class="ticket-row1-1">
                  <span class="ticket-text">Số tiền thanh toán</span>
                  <input type="text" class="pay-input1" />
                    </div>
                    <div class="ticket-row1-2">
                  <span class="ticket-text">Số lượng vé</span>
                  <input type="text" class="pay-input1-1" />
                    </div>
                    <div class="ticket-row1-3">
                  <span class="ticket-text">Ngày sử dụng</span>
                  <input type="text" class="pay-input1-2" />
                    </div>
                  </div>
                  <div class="ticket-row2">
                  <span class="ticket-text">Thông tin liên lạc</span>
                  <input type="text" class="pay-input2" />
                  </div>
                  <div class="ticket-row3">
                  <span class="ticket-text">Điện thoại</span>
                  <input type="text" class="pay-input3" />
                  </div>
                  <div class="ticket-row4">
                  <span class="ticket-text">Email</span>
                  <input type="text" class="pay-input4" />
                  </div>
                </div>
             <div class="pay-right-frame">
              <span class="ticket-text">Số thẻ</span>
              <input type="text" class="pay-input2" />
              <span class="ticket-text">Họ tên chủ thẻ</span>
              <input type="text" class="pay-input2" />
              <span class="ticket-text">Ngày hết hạn</span>
              <input type="text" class="pay-input5" />
              <img
                  src="{{asset('playground_assets/lich.svg')}}" class="pay-lich"
                />
              <span class="ticket-text">CVV/CVC</span>
              <input type="text" class="pay-input6" />
              <img
                  src="{{asset('playground_assets/thanhtoan.svg')}}" class="pay-thanhtoan"
                />
             </div>
              </div> 
      </div>
    </div>
  </body>
</html>
