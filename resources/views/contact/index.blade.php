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
                  <div class="tieude">
                  <span class="tieude-text">Liên lạc</span>
                </div>
               
              <div class="contact-left">
                <form action="{{route('contact.create')}}" >
                <div class="contact-row1">
                <input type="text" name="ten" class="contact-input1" placeholder="Tên">
                <input type="text" name="email" class="contact-input2" placeholder="Email">
                </div>
                <div class="contact-row2">
                <input type="text" name="sdt" class="contact-input1" placeholder="Số điện thoại">
                <input type="text" name="diachi" class="contact-input2" placeholder="Địa chỉ">
                </div>
                <div class="contact-row3">
                <input type="text" name="loinhan" class="contact-input3" placeholder="Lời nhắn">
                </div>
                <button type="submit">
                <img src="{{asset('playground_assets/guilienhe.svg')}}" class="contact-send" />
                </button>
                </form>
              </div>
              <img
                    src="{{asset('playground_assets/boylienhe.svg')}}" class="contact-boylienhe"
                  />
                <div class="contact-right">
                  <div class="contact-address">
                  <img
                  src="{{asset('playground_assets/địa chỉ.svg')}}" class="contact-address-svg"
                />
                <span class="contact-tieude1">Địa chỉ</span>
                <span class="contact-noidung1">Âu cơ</span>
                  </div>
                  <div class="contact-address">
                  <img
                  src="{{asset('playground_assets/mail.svg')}}" class="contact-address-svg"
                />
                <span class="contact-tieude2">Email</span>
                <span class="contact-noidung2">Thanhvan@gmail.com</span>
                  </div>
                  <div class="contact-address">
                  <img
                  src="{{asset('playground_assets/điện thoại.svg')}}" class="contact-address-svg"
                />
                <span class="contact-tieude3">Điện thoại</span>
                <span class="contact-noidung3">0123456789</span>
                  </div>
                </div>
            </div>
      </div>
    </div>
  </body>
</html>
