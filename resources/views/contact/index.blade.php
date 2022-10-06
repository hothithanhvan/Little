@extends('layout.header')
@extends('layout.navigation')
</head>
  <body>
    <div>
      <link href="{{asset('css/contact.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
          <div class="trangch-frame">

                <img
                  src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg"
                />

                
                <img
                    src="{{asset('playground_assets/khungguilienhe.svg')}}" class="contact-left-bg"
                  />
              <div class="contact-left">
                
                <div class="contact-row1">
                <input type="text" class="contact-input1" placeholder="Tên">
                <input type="text" class="contact-input2" placeholder="Email">
                </div>
                <div class="contact-row2">
                <input type="text" class="contact-input1" placeholder="Số điện thoại">
                <input type="text" class="contact-input2" placeholder="Địa chỉ">
                </div>
                <div class="contact-row3">
                <input type="text" class="contact-input3" placeholder="Lời nhắn">
                </div>
                <img src="{{asset('playground_assets/guilienhe.svg')}}" class="contact-send" />

              </div>
                <div class="contact-right">
                  <div class="contact-address">
                  <img
                  src="{{asset('playground_assets/địa chỉ.svg')}}" class="contact-address-svg"
                />
                  </div>
                  <div class="contact-address">
                  <img
                  src="{{asset('playground_assets/mail.svg')}}" class="contact-address-svg"
                />
                  </div>
                  <div class="contact-address">
                  <img
                  src="{{asset('playground_assets/điện thoại.svg')}}" class="contact-address-svg"
                />
                  </div>
                </div>
            </div>
      </div>
    </div>
  </body>
</html>
