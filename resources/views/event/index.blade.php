@extends('layout.navigation')
@extends('layout.header')
  </head>
  <body>
    <div>
      <link href="{{asset('css/event.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
          <div class="trangch-frame">

                <img
                  src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg"
                />
              </div>
              <div class="tieude">
                  <span class="tieude-text">Sự kiện nổi bật</span>
                </div>
                <img
                  src="{{asset('playground_assets/dayleft.svg')}}" class="event-dayleft"
                /> 
                <img
                  src="{{asset('playground_assets/dayright.svg')}}" class="event-dayright"
                /> 
            <div id="khung" class="event-khung">
              @foreach ($event as $event)
              <div class="event-event1">
                  <img
                    src="{{asset('playground_assets/'.$event->image.'')}}"
                    class="event-rectangle1"
                  />
                          <span class="event-text02">
                            <span>{{$event->tensukien}}</span>
                          </span>
                          <span class="event-text04 ">
                            <span>Đầm sen Park</span>
                          </span>
                        <div class="event-time">
                          <img
                            src="{{asset('playground_assets/calendar.svg')}}"
                            alt="Iconscalendar1265"
                            class="event-iconscalendar"
                          />
                          <span class="event-text06">
                            <span>{{$event->thoigiandienra}}</span>
                          </span>
                        </div>
                    <span class="event-text08"><span>{{$event->gia}} VNĐ</span></span>
                    <a href="{{url('/event/show', $event->id)}}">
                    <img src="{{asset('playground_assets/Btn xem chi tiết.svg')}}" class="event-btnxemchitit" />
                    </a>
              </div>  
            @endforeach
            </div>
            <button id="slideLeft">
            <img src="{{asset('playground_assets/Previous btn.svg')}}"  class="event-previousbtn" />
            </button>
            <button id="slideRight">
              <img src="{{asset('playground_assets/next btn.svg')}}" class="event-nextbtn" />
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
    </div>
      </div>
    </div>
  </body>
</html>
