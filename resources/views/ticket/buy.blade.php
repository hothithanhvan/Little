@extends('layout.header')
@extends('layout.navigation')

  <body>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <div>
      <link href="{{asset('css/ticket.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
          <div class="trangch-frame">
                <img
                  src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg"
                />
              </div>
            </div>
            <img class="ticket-damsen" src="{{asset('playground_assets/image 2.svg')}}" />
            <span class="trangch-text">ĐẦM SEN PARK</span>
            <img class="ticket-4nguoi" src="{{asset('playground_assets/4nguoi.svg')}}" />
            <div class="trangch-frame03">
            <div class="trangch-group57">
                <img
                  src="{{asset('playground_assets/Group 1.svg')}}"
                  alt="Vector1944"
                  class="trangch-vector108"
                />
              </div>
              <div class="ticket-text1">
              Đến với Công Viên Nước Đầm Sen, các bạn sẽ cảm nhận ngay về một ốc đảo xanh mát tọa lạc ngay 
              giữa lòng thành phố.Với 36 thiết bị trò chơi dưới nước hiện đại cùng một hồ tạo sóng mát lạnh
               rộng 3000m2 hứa hẹn sẽ mang đến cho bạn nhiều cảm giác thư giãn thú vị.
               <br>
               Công viên nước Đầm Sen với không gian hài hòa được kết hợp với những dòng sông đầy lãng mạn làm 
               tan đi những lo lắng buồn phiền đồng thời cũng là nguồn cung cấp năng lượng cho một ngày mới. 
               Hãy hít thật sâu để tận hưởng cái không khí trong lành của một thiên nhiên thơ mộng rồi đắm mình 
               vào sóng biển nhấp nhô hay thả mình bồng bềnh giữa trời mây nước để Dòng Sông Lơ Đãng xoa dịu và 
               xua tan đi những lo lắng muộn phiền trong cuộc sống đầy lo toan.
              </div>
            <img
                  src="{{asset('playground_assets/Frame.svg')}}"  class="frame03"/>
                  <form method="post" action="{{route('ticket.create')}}">
                    @csrf
       
              <div class="trangch-frame7">
                
                <input class="trangch-frame5" id ="goi" name="goi" placeholder="Gói gia đình">
                <div class="div-dropdown">
                <button class="button-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img
                  src="{{asset('playground_assets/dropdown.svg')}}" class="button-dropdown1"
                />
                </button>
                <ul class="dropdown-menu">
                  <option id="d" class="dropdown-item" >Gói gia đình</option>
                  <option id="d1" class="dropdown-item" >Gói cá nhân</option>
                </ul>
                <script>
 
                  $('#d').click(function(){
                  document.getElementById('goi').value = this.value;
                  });
                  $('#d1').click(function(){
                    document.getElementById('goi').value = this.value;
                  });
                  </script>
                </div>
                <input type="text" class="trangch-frame6" name="soluongve" placeholder="Số lượng vé">
                <input class="trangch-frame71" placeholder="Ngày sử dụng" name="ngaysd" id="datepicker">
                <img
                  src="{{asset('playground_assets/lich.svg')}}" class="button-lich" 
                />
                <script>
                  
                    $( function() {
                      $( "#datepicker" ).datepicker({
                        showButtonPanel: true,
                        dateFormat: 'dd-mm-yy'
                      });
                    } );
                  
                </script>
                <input type="text" class="trangch-frame8" name="hoten" placeholder="Họ và tên">
                <input type="text" class="trangch-frame8" name="sdt" placeholder="Số điện thoại">
                <input type="text" class="trangch-frame8" name="email" placeholder="Địa chỉ email">
                <button type="submit">
                <img
                  src="{{asset('playground_assets/datve.svg')}}" class="trangch-frame06"
                />
                </button>
                  </form>
            </div>        
      </div>      
            <img class="ticket-bupbe" src="{{asset('playground_assets/bupbe.svg')}}" /> 
              </div>
      </div>
    </div>
  </body>
</html>
