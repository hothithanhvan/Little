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
              <div id="khung" class="sc-all">
              @foreach($b as $b)
                <?php 
                for ($i = 0; $i < $b->soluongve;  $i++) { ?>
                
                <div class="sc-detail">
                {!! QrCode::size(200)->generate($b->tenve) !!}
                  <span class="sc-alt">{{$b->tenve}}</span>
                  <span class="sc-vecong">Vé cổng <?php echo $i+1; ?></span>
                 <img src="{{asset('playground_assets/---.svg')}}" class="sc-gach" />
                  <span class="sc-ngaysd">Ngày sử dụng: {{$b->ngaysd}}</span>
                </div>
                
                <?php } ?>
                @endforeach
              </div>
              
                <button id="slideLeft">
              <img src="{{asset('playground_assets/Previous btn.svg')}}" class="sc-previousbtn" />
                </button>
                <button id="slideRight">
              <img src="{{asset('playground_assets/next btn.svg')}}" class="sc-nextbtn" />
                </button>
                <script>
                const buttonRight = document.getElementById('slideRight');
                const buttonLeft = document.getElementById('slideLeft');

                buttonRight.onclick = function () {
                  document.getElementById('khung').scrollLeft += 250;
                };
                buttonLeft.onclick = function () {
                  document.getElementById('khung').scrollLeft -= 250;
                };

                </script>
              <div class="sc-last-button">
                <a href ="{{route('generate-pdf',$b->id )}}">
                <img src="{{asset('playground_assets/tải về.svg')}}" class="sc-taive" />
              </a>
                <img src="{{asset('playground_assets/gửi mail.svg')}}" class="sc-taive" />
              </div>
      </div>
    </div>
  </body>
</html>
