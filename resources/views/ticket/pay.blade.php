@extends('layout.header')
@extends('layout.navigation')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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
                  <div class="tieude">
                  <span class="tieude-text">Thanh toán</span>
                </div>
            <div class="pay-frame">
                <img
                  src="{{asset('playground_assets/thongtinthanhtoan.svg')}}" class="pay-infopay"
                />
                <img
                  src="{{asset('playground_assets/vecongvegiadinh.svg')}}" class="pay-ticket"
                />
                <form method="post" action="{{route('ticket.update')}}">
                  @csrf
                <div class="pay-inside-frame">
                
                  <div class="ticket-row1">
                    <div class="ticket-row1-1">
                  <span class="ticket-text">Số tiền thanh toán</span>
                  <input type="text" class="pay-input1" value="{{($a->soluongve)*100000}}"/>
                    </div>
                    <div class="ticket-row1-2">
                  <span class="ticket-text">Số lượng vé</span>
                  <input type="text" class="pay-input1-1" value="{{$a->soluongve}}"/>
                    </div>
                    <div class="ticket-row1-3">
                  <span class="ticket-text">Ngày sử dụng</span>
                  <input type="text" class="pay-input1-2" value="{{$a->ngaysd}}"/>
                    </div>
                  </div>
                  <div class="ticket-row2">
                  <span class="ticket-text">Thông tin liên lạc</span>
                  <input type="text" class="pay-input2" name="hoten" value="{{$a->hoten}}"/>
                  </div>
                  <div class="ticket-row3">
                  <span class="ticket-text">Điện thoại</span>
                  <input type="text" class="pay-input3" value="{{$a->sdt}}" />
                  </div>
                  <div class="ticket-row4">
                  <span class="ticket-text">Email</span>
                  <input type="text" class="pay-input4" value="{{$a->email}}"/>
                  </div>
                </div>
             <div class="pay-right-frame">
              <span class="ticket-text">Số thẻ</span>
              <input type="text" class="pay-input2" name="sothe"/>
              <span class="ticket-text">Họ tên chủ thẻ</span>
              <input type="text" class="pay-input2" name="hotenchuthe" />
              <span class="ticket-text">Ngày hết hạn</span>
              <input type="text" class="pay-input5" name="ngayhethan" id="datepicker"/>
              <img
                  src="{{asset('playground_assets/lich.svg')}}" class="pay-lich"
                />
                <script>
                  
                    $( function() {
                      $( "#datepicker" ).datepicker({
                        showButtonPanel: true,
                        dateFormat: 'dd-mm-yy'
                      });
                    } );
                  
                </script>
              <span class="ticket-text">CVV/CVC</span>
              <input type="text" class="pay-input6" name="cvv"/>
              <button type="submit">
              <img
                  src="{{asset('playground_assets/thanhtoan.svg')}}" class="pay-thanhtoan"
                />
              </button>
              </form>
             </div>
              </div> 
      </div>
    </div>
  </body>
</html>
