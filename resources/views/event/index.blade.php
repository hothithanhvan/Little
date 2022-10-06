@extends('layout.navigation')
@extends('layout.header')
  </head>
  <body>
    <div>
      <link href="{{asset('css/event.css')}}" rel="stylesheet" />

      <div class="trangch-container">
        <div class="trangch-trangch">
          <div class="trangch-frame">
            <div class="">
              <div class="">
                <img
                  src="{{asset('playground_assets/bg.svg')}}" class="trangch-bg"
                />
              </div>
              <span class="skin-text header"><span>Sự kiện nổi bật</span></span>
              <div class="skin-skin1">
                <div class="skin-skin11">
                  <img
                    src="{{asset('playground_assets/rectangle11265-lipj-300h.png')}}"
                    alt="Rectangle11265"
                    class="skin-rectangle1"
                  />
                  <div class="skin-frame31">
                    <div class="skin-group3">
                      <div class="skin-frame29">
                        <div class="skin-frame30">
                          <span class="skin-text02">
                            <span>Sự kiện 1</span>
                          </span>
                          <span class="skin-text04 ">
                            <span>Đầm sen Park</span>
                          </span>
                        </div>
                        <div class="skin-time">
                          <img
                            src="{{asset('playground_assets/calendar.svg')}}"
                            alt="Iconscalendar1265"
                            class="skin-iconscalendar"
                          />
                          <span class="skin-text06">
                            <span>30/05/2021 - 01/06/2021</span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <span class="skin-text08"><span>25.000 VNĐ</span></span>
                    <div class="skin-btnxemchitit">
                    <img
                            src="{{asset('playground_assets/Btn xem chi tiết.svg')}}"
                          />
                    </div>
                  </div>
                </div>
              </div>
                  <img
                            src="{{asset('playground_assets/Previous btn.svg')}}" class="skin-previousbtn"
                          />
                
                </div>
              </div>
              <img
                            src="{{asset('playground_assets/next btn.svg')}}" class="skin-nextbtn"
                          />
            </div>

          </div>
          
        </div>
      </div>
    </div>
  </body>
</html>
