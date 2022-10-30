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
                  <span class="tieude-text">{{$event->tensukien}}</span>
                </div>
              <img
                  src="{{asset('playground_assets/khung chứa vé.svg')}}" class="khungchuave"
                />
<div class="khungchuave1">
<div class="column1">
<img
                    src="{{asset('playground_assets/'.$event->image.'')}}"
                    class="event-rectangle1"
                  />
                 
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
                        <span class="event-text04 ">
                            <span>Đầm sen Park</span>
                          </span>
                    <span class="event-text08"><span>{{$event->gia}} VNĐ</span></span>
</div>
<div class="column2">
Những người ưa thích mạo hiểm không thể bỏ qua việc trượt trên thác Kamikaze. 
Bạn sẽ lao từ độ cao 19m trước khi tiếp nước cùng tiếng hò reo cực đã. 
Bên cạnh đó, bạn có thể tham gia loạt ống trượt “xoắn não” trên đường ống dốc đứng. 
Chỉ vỏn vẹn 12 giây bạn đã trải qua vòng xoắn lớn hai bên và rớt xuống hồ. 

</div>
<div class="column2">
Điển hình là các ống trượt như: Ống trượt lốc xoáy Tornado, 
Trượt xoắn cực căng – Twister Max, Máng trượt Sấm Đen – Black Thunder hay trò Đu dây vượt thác. 
Chưa hết, bạn còn có cơ hội thỏa sức trải nghiệm với các cụm máng trượt khác tại Công viên Văn hóa Đầm Sen. 
Điển hình như Máng trượt khổng lồ – Giant Slide, Máng trượt Rồng xanh – Green Dragon, Máng trượt nhiều lần
 – Multislide, Cụm máng trượt Love Storm & Space Bowl.
</div>
<div class="column2"></div>
</div>

      </div>
    </div>
  </body>
</html>
