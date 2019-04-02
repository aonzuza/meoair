@extends('layouts.app')


@section('content')

<div class="home-page-wrapper">


      <div class="first-row-img-wrapper">
              <!-- <img src="https://dummyimage.com/1920x800/000000/fffffff" /> -->
              <video width="100%" height="auto"  controls>
                    <source src="{{asset('images/home/meo.mp4')}}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
      </div>

      <div class="container-fluid">

          <div class="row home-first-text-wrapper">

                  <div class="col-12 col-sm-8 offset-sm-2 col-lg-5 offset-lg-1">

                        <div>


                          <h2>MEO<sup>TM</sup></h2>
                          <p>
                            หน้ากากอนามัยเยื่อกระดาษขนแกะ สำหรับผิวแพ้ง่าย เป็นเส้นใยธรรมชาติที่สามารถกรองฝุ่นต่างๆได้ดีกว่าเส้นใยสังเคราะห์ถึง 98%
                            ด้วยลักษณะพิเศษของขนแกะที่มีรูปแบบการเรียงตัวของเส้นใยทับกันไปมาจนบดบังช่องว่างระหว่างเส้นใยทำให้ฝุ่นขนาดเล็กมากอย่าง PM0.1 ผ่านไปไม่ได้
                            และยังลดการสะสมเชื้อแบคทีเรียบนแผ่นกรองด้วยสารสกัด UMF Manuka Honey จึงช่วยป้องกันการเกิดสิว ผดผื่น
                            และลดการระคายเคืองจากการเสียดสีกับผิวหน้าเมื่อใส่เป็นระยะเวลานาน และยังให้กลิ่นหอมอ่อนๆที่เป็นเอกลักษณ์ เพื่อการหายใจที่สดชื่น
                          </p>


                        </div>


                  </div>
                  <div class="col-12 col-sm-8 offset-sm-2 col-lg-5 offset-lg-0">

                    <div>
                        <h2>คุณสมบัติพิเศษ</h2>
                        <ul>
                          <li>
                            ป้องกันฝุ่น PM 2.5 ได้มากถึง 99.83% และ กรองสารก่อภูมิแพ้ กลิ่นต่างๆ
                          </li>
                          <li>
                            หายใสสะดวก เบาสบาย ไม่อึดอัดเวลาสวมใส่ โอบกระชับใบหน้า
                          </li>
                          <li>
                            ผลิตที่ประเทศนิวซีแลนด์ และ ยืนยันประสิทธิภาพการรองโดย Nelson lab ,USA
                            และผ่านมาตรฐานการทดสอบจาก 3 สถาบันระดับโลก : KN95, AS/NZS, GB/
                          </li>

                        </ul>
                    </div>

                      <!--   -ป้องกันฝุ่น PM 2.5 ได้มากถึง 99.83% และ กรองสารก่อภูมิแพ้ กลิ่นต่างๆ
                        -หายใสสะดวก เบาสบาย ไม่อึดอัดเวลาสวมใส่ โอบกระชับใบหน้า
                        -ผลิตที่ประเทศนิวซีแลนด์ และ ยืนยันประสิทธิภาพการรองโดย Nelson lab ,USA
                        และผ่านมาตรฐานการทดสอบจาก 3 สถาบันระดับโลก : KN95, AS/NZS, GB/
                       -->

                  </div>


          </div>


      </div>


      <div class="first-row-img-wrapper">
              <!-- <img src="https://dummyimage.com/1920x800/000000/fffffff" /> -->
              <img src="{{asset('images/home/bio.jpg')}}" >
      </div>


      <div class="container-fluid">

          <div class="row home-first-text-wrapper">

              <div class="col-12 col-sm-10 offset-sm-1">

                  <h2>BiOLuX</h2>

                  <p>
                    เครื่องผลิตน้ำดื่มไฮโดรเจนและน้ำโอโซนสำหรับล้างสิ่งต่างๆ น้ำไฮโดรเจนเหมาะสำหรับลูกน้อยตั้งแต่แรกเกิดและทุกคนในครอบครัว คุณค่าของน้ำไฮโดรเจนทำให้ร่างกายสามารถต้านอนุมูลอิสระได้ดี ส่งเสริมการสร้างเซลล์ต่างๆในร่างกาย  ตั้งแต่เซลล์สมอง กล้ามเนื้อ ผิวพรรณ และการฟื้นฟูร่างกายจากการเจ็บป่วยเรื้อรัง  และน้ำโอโซนมีคุณสมบัติในการฆ่าเชื้อโรค กำจัดแบคทีเรีย และ ยาฆ่าแมลง ได้อย่างรวดเร็วและได้ผลดี  ใช้ล้างมือ ล้างผัก ล้างเนื้อสัตว์ ล้างภาชนะสำหรับลูกน้อย และทำความสะอาดสิ่งต่างๆได้ดี
                    (Certifiled by U.S. NSF, U.K. Campeden BRI and SGS: 5 log kill in 10~20 seconds when used against E. coli, Salmonella spp., S. aureus, P. aeruginosa and C. albicans. (ie. 999%)
                    BiOLuX เป็นเครื่อง 2in1 ที่ทันสมัยที่สุด ด้วย “iEOG Technology” ที่สามารถเพิ่มคุณค่าให้กับน้ำกินน้ำใช้และยังกรองโลหะหนักที่ล่องลอยอยู่ในน้ำที่ตาเปล่ามองไม่เห็น เพื่อน้ำสะอาดบริสุทธิ์และมีคุณค่าในการดูแลสุขภาพของคุณและคนที่คุณรัก
                  </p>

              </div>


          </div>
      </div>



      <div class="first-row-img-wrapper">
              <!-- <img src="https://dummyimage.com/1920x800/000000/fffffff" /> -->
              <img src="{{asset('images/home/oxy.jpg')}}" >
      </div>


      <div class="container-fluid">

          <div class="row home-first-text-wrapper">

              <div class="col-12 col-sm-10 offset-sm-1">

                  <h2>Oxy'z</h2>

                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit
                      , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                       Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>

              </div>


          </div>
      </div>

      <!-- <div class="first-row-img-wrapper">
              <img src="https://dummyimage.com/1920x800/a674a6/0011ff" />
      </div>

      <div class="second-row-text-wrapper">

        <p class="lead">
          BiOLuX  มากกว่าการดื่มน้ำสะอาด คือคุณค่าสุขภาพที่ดี
BiOLuX   เครื่องผลิตน้ำดื่มไฮโดรเจนและน้ำโอโซนสำหรับล้างสิ่งต่างๆ น้ำไฮโดรเจนเหมาะสำหรับลูกน้อยตั้งแต่แรกเกิดและทุกคนในครอบครัว คุณค่าของน้ำไฮโดรเจนทำให้ร่างกายสามารถต้านอนุมูลอิสระได้ดี ส่งเสริมการสร้างเซลล์ต่างๆในร่างกาย  ตั้งแต่เซลล์สมอง กล้ามเนื้อ ผิวพรรณ และการฟื้นฟูร่างกายจากการเจ็บป่วยเรื้อรัง  และน้ำโอโซนมีคุณสมบัติในการฆ่าเชื้อโรค กำจัดแบคทีเรีย และ ยาฆ่าแมลง ได้อย่างรวดเร็วและได้ผลดี  ใช้ล้างมือ ล้างผัก ล้างเนื้อสัตว์ ล้างภาชนะสำหรับลูกน้อย และทำความสะอาดสิ่งต่างๆได้ดี
(Certifiled by U.S. NSF, U.K. Campeden BRI and SGS: 5 log kill in 10~20 seconds when used against E. coli, Salmonella spp., S. aureus, P. aeruginosa and C. albicans. (ie. 999%)
BiOLuX เป็นเครื่อง 2in1 ที่ทันสมัยที่สุด ด้วย “iEOG Technology” ที่สามารถเพิ่มคุณค่าให้กับน้ำกินน้ำใช้และยังกรองโลหะหนักที่ล่องลอยอยู่ในน้ำที่ตาเปล่ามองไม่เห็น เพื่อน้ำสะอาดบริสุทธิ์และมีคุณค่าในการดูแลสุขภาพของคุณและคนที่คุณรัก
        </p>


      </div>

      <div class="first-row-img-wrapper">
              <img src="https://dummyimage.com/1920x800/a674a6/0011ff" />
      </div>

      <div class="second-row-text-wrapper">

        <p class="lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>


      </div>
 -->


</div>


@endsection
