@extends('layouts.app')
@section('content')



        <div id="about" class="container">


            <div class="content-top">
                <div class="content-head" style="color:#6D0CEE;">เกี่ยวกับ</div>
            </div>

            <div class="collapsible-head">
                <button type="button" class="collapsible">เกี่ยวกับงานไซด์ไลน์</button>
                <div class="content-cola" style="display: block;">
                    <p class="text-cola">งานไซด์ไลน์ หมายถึง การทำงานที่นอกเหนืองานประจำที่ทำอยู่ เพื่อหารายได้เสริม หรือ
                        การรับงานฝิ่นเพิ่มเติม จากสิ่งที่ทำอยู่แล้ว
                        งานไซด์ไลน์ ไม่จำเป็นจะต้องเป็นการขายบริการทางเพศเท่านั้น แต่รวมถึง การรับงานเป็นแฟน กิน เที่ยว
                        ดูหนัง ฟังเพลง หรือ การ
                        อยู่เป็นเพื่อน เป็นเพื่อนเที่ยว ดังนั้นสาว หรือ หนุ่มไซด์ไลน์
                        ไม่จำเป็นต้องเป็นผู้ที่ให้บริการในเรื่องอย่างว่าซะทีเดียว
                        สำหรับผู้ที่ต้องการเก็บ Profile และ Comment รีวิวได้ สามารถเปิดบัญชี
                    </p>
                    <p class="text-cola">
                        ในต่างประเทศ มักไม่นิยมใช้คำว่า Sideline เนื่องจาก คำนี้มีความหมายได้หลายประการ เช่นการรับงานเสริม
                        แต่ จะใช้ใช้คำว่า
                        Escort Service โดยที่งานนี้มีความหมายเฉกเช่นเดียวกันกับ สาวรับงาน และ ไซด์ไลน์ สำหรับคนไทย
                        และในต่างประเทศ มีการรวบ
                        รวม Profile เป็นเว็บรับงานต่างประเทศ เช่นเดียวกัน แต่ความแตกต่างก็คือ
                        จะมีหลายภาษาสำหรับการรับงานของชาวต่างประเทศ
                        และมี Profile หลากเชื้อชาติมากกว่า โดยบางแห่งมีการเก็บค่าเข้าเพื่อดู Profile ด้วย
                    </p>
                    <p class="text-cola">
                        สำหรับ ไซด์ไลน์ ใน TH-SIDELINE.com จะเป็นไซด์ไลน์ ประเภทรับงานนอก ที่มาจาก คนเที่ยวกลางคืน
                        ชอบออกจากบ้าน ขี้เบื่อ
                        และอยากหารายได้ โดยการ พบเจอผู้ว่าจ้าง โดยรับเป็นจ๊อบ ราวๆ 1,000 - 2,000+ บาท
                        ซึ่งราคาขึ้นอยู่กับความพอใจของ
                        แต่ละบุคคล และสำหรับ น้องๆที่อยากเปิด Profile ไซด์ไลน์ รับงาน สามารถ เปิดได้ที่นี่
                        <a href="{{ url('register') }}">ได้ที่นี่ </a>
                    </p>
                </div>
                <button type="button" class="collapsible">ความปลอดภัยและความน่าเชื่อถือของผู้ใช้งานและโพสต์หางาน</button>
                <div class="content-cola" style="display: block;">
                    <p class="text-cola">เว็บ <a href="{{ url('main') }}">sideline-bkk.com </a> เป็นแหล่งรวมโพสต์ไซด์ไลน์ที่ออกแบบมาให้ใช้ง่าย สะดวกสะบายต่อการค้นหา และสร้างความน่าเชื่อถือ
                        ต่อทุกคน เราไม่เปิดเผยข้อมูลส่วนตัวในบัญชีผู้ใช้ เช่น บัตรประชาชนหรือภาพเปิดหน้าที่น้องๆใช้ยืนยันรูปภาพ เบอร์โทร ไลน์พิเศษ
                        ของน้อง
                    </p>
                    <ul>
                        <li>น้องไซด์ไลน์ที่เห็นในเว็บทั้งหมด ผ่านการสกรีนโดยทีมแอดมินก่อนถูกโพสต์ (แต่แอดมินก็พลาดได้เช่นกัน ช่วยกันแจ้งด้วย
                            หากพบน้องบังคับโอนหรือโกง)
                            สอบและสอบถามเจ้าของ Profile ทาง LINE ก่อนทุกครั้ง</li>
                        <li>แอดมินไม่เคยบอกแอดไลน์ไปเพื่อชมน้องๆ แล้วให้โอนเงิน
                            แอดมินไม่รับจัดหาน้องๆให้ใครทั้งนั้น
                            ไม่มีการโอนเงินผ่าน
                            แอดมินโดยเด็ดขาด</li>

                    </ul>
                </div>
                <button type="button" class="collapsible">คำถามที่พบบ่อย?</button>
                <div class="content-cola" style="display: block;">
                    <ul>
                        <li>โปรไฟล์ น้องๆ เป็นของจริงหรือไม่? - โปรไฟล์ เป็นของจริง แต่อาจมีความผิดพลาดทางการยืนยันตัวตน จึงควรตรวจ
                            สอบและสอบถามเจ้าของ Profile ทาง LINE ก่อนทุกครั้ง
                        </li>
                        <li>ทำไมต้อง เบลอตา? - เพื่อป้องกันการถูกเผยแพร่ และการแอบอ้าง นำเอารูปของคนอื่นมาใช้งาน</li>
                        <li>สมัครบัญชีแบบไหนดี? - มีตัวเลือกระหว่าง นักเที่ยว และ น้องไซด์ไลน์ - หากคุณเป็นผู้ว่าจ้าง หาคนมาเป็นแฟน ให้เลือก
                            นักเที่ยว แต่หากเป็นน้องๆ ไซด์ไลน์ เปิดรับงาน สามารถลงทะเบียนในหมวด น้องไซด์ไลน์ ต้องการลงโพสต์ได้</li>
                        <li>ต้องใช้ ชื่อ นามสกุล หรือเบอร์โทรจริงมั้ย? - ห้ามใส่ ชื่อจริง นามสกุลจริง และเบอร์โทรลงใน Post เด็ดขาด เพื่อความ
                            ปลอดภัยของเจ้าของ Profile</li>
                        <li>"น้องตรงปกไหม ?"
                            ไม่สามารถตอบได้ น้องส่วนใหญ่จะใช้แอพแต่งเป็นปกติ ฉะนั้นขึ้นอยู่ที่คนมอง หากไปถึงแล้วไม่พอใจสามารถออกมาได้
                            </li>

                    </ul>
                </div>
                <button type="button" class="collapsible">คุณจะติดต่อพวกเราได้อย่างไง?</button>
                <div class="content-cola" style="display: block;">
                    <ul>
                        <li>เราไม่รับการติดต่อเกี่ยวกับการค้นหาน้องๆหรือการนัดน้องๆ เพราะเราเป็นเพียงผู้ให้น้องลงโพสต์โฆษณา
                        </li>
                        <li>ไลน์ Service ใช้เพื่อการติดต่อแอดมินเพื่อสอบถามหรือรีพอร์ตน้องในเว็บเท่านั้น
                        </li>
                        <li>ติดต่อ รีพอร์ต สอบ-ถาม:
                        </li>
                        <li>ติดต่อ ลงโพสต์:
                        </li>
                    </ul>
                </div>
                {{-- <button type="button" class="collapsible">ความปลอดภัยและความน่าเชื่อถือของผู้ใช้งานและโพสต์หางาน</button>
            <div class="content-cola">
                <p>เว็บ TH-SIDELINE.com เป็นแหล่งรวมโพสต์ไซด์ไลน์ที่ออกแบบมาให้ใช้ง่าย สะดวกสะบายต่อการค้นหา และสร้างความน่าเชื่อถือ
                    ต่อทุกคน เราไม่เปิดเผยข้อมูลส่วนตัวในบัญชีผู้ใช้ เช่น บัตรประชาชนหรือภาพเปิดหน้าที่น้องๆใช้ยืนยันรูปภาพ เบอร์โทร ไลน์พิเศษ
                    ของน้อง</p>
                <ul>
                    <li>น้องไซด์ไลน์ที่เห็นในเว็บทั้งหมด ผ่านการสกรีนโดยทีมแอดมินก่อนถูกโพสต์ (แต่แอดมินก็พลาดได้เช่นกัน ช่วยกันแจ้งด้วย
                        หากพบน้องบังคับโอนหรือโกง)
                    </li>
                    <li>แอดมินไม่เคยบอกแอดไลน์ไปเพื่อชมน้องๆ แล้วให้โอนเงิน
                        แอดมินไม่รับจัดหาน้องๆให้ใครทั้งนั้น
                        ไม่มีการโอนเงินผ่าน
                        แอดมินโดยเด็ดขาด
                    </li>
                </ul>
            </div> --}}
            </div>
        </div>




    </html>



    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
@stop

<style>
    #about .content .content-grid .content-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: left;
    }

    #about .card-description-nemaF {
        text-align: center;
        position: relative;
        /* padding-top: 50%; */
        display: flex;
        align-items: center;
        flex-direction: column;
        font-size: 30px;
        color: white;
        transform: translateY(50%);
    }

    #about .collapsible-head {
        margin: 20px 0px 20px 0px;
    }

    #about .active,
    #about .collapsible:hover {
        /* background-color: #858181; */
    }

    #about .collapsible {
        background-color: #6D0CEE;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: 1px solid #A5A5A5;
        text-align: left;
        outline: none;
        font-size: 30px;
        border-radius: 10px 10px 0px 0px;
    }

    #about a {
    color: #6D0CEE;
}

    #about .content-cola {
        padding: 15px 15px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
        font-size: 25px;
        margin-bottom: 20px;
    }

    @media screen and (min-device-width: 280px) and (max-device-width: 1024px) {
        #about .collapsible {
            font-size: 20px;
            padding: 13px;
        }

        #about .content-cola {

            font-size: 15px
        }
    }

</style>
