
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Melon Farm</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" type="img/png" href="img/muk.png">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
 
 

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
           
            <!-- Navbar End -->
           


                <!-- Recent Sales Start -->
                <div class="container-fluid pt-4 px-4 text-dark">
                    <div class="bg-light text-center rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">ธาตุสารอาหารในดิน</h6>

                        </div>

                        
                <!-- Recent Sales End -->

                <div class="container-fluid pt-4 px-4 text-dark">
    <div id="other-status " class="bg-white rounded h-100 p-4 ">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="modal-npk-button" data-bs-toggle="modal" data-bs-target="#modal-npk"><i class="bi bi-chat-text-fill me-2"></i>NPK คืออะไร?</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="modal-n-button" data-bs-toggle="modal" data-bs-target="#modal-n"><i class="bi bi-chat-text-fill me-2"></i>ไนโตรเจน (N)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="modal-p-button" data-bs-toggle="modal" data-bs-target="#modal-p"><i class="bi bi-chat-text-fill me-2"></i>ฟอสฟอรัส (P)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="modal-k-button" data-bs-toggle="modal" data-bs-target="#modal-k"><i class="bi bi-chat-text-fill me-2"></i>โพแทสเซียม (K)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="modal-criterion-button" data-bs-toggle="modal" data-bs-target="#modal-criterion"><i class="bi bi-chat-text-fill me-2"></i>ประโยชน์ของธาตุอาหารหลักของพืช</button>
            </li>
        </ul>
        <hr>
    </div>
</div>

<!-- Modal NPK -->
<div class="modal fade" id="modal-npk" tabindex="-1" aria-labelledby="modal-npk-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-npk-label">NPK คืออะไร?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><a class="text-dark">NPK</a> คือ ปุ๋ยหรือธาตุอาหารหลักของพืชที่ประกอบไปด้วยธาตุ 3 ชนิด N ไนโตรเจน ( Nitrogen ) P ฟอสฟอรัส ( Phosphorus ) และ K โพแทสเซียม ( Potassium ) โดยธาตุแต่ละชนิดนั้นมีหน้าที่ในการบำรุงพืชแตกต่างกัน</p>
                <div class="container-fluid pt-4 px-4">
                    <div class="p-2 text-center">
                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                            <img src="img/npk.png" alt="" style="width: 100px; height: 100px;">
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <p>แหล่งที่มา: <a class="text-light" href="https://www.ponpe.com/tech/767-soil-ph-npk.html">https://www.ponpe.com</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Nitrogen -->
<div class="modal fade" id="modal-n" tabindex="-1" aria-labelledby="modal-n-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-n-label">ไนโตรเจน (N)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><a class="text-dark">N ไนโตรเจน ( Nitrogen )</a> คือ ธาตุอาหารของพืชที่เป็นองค์ประกอบหลักของเซลล์พืช และพบว่า พืชส่วนใหญ่ขาดธาตุอาหารหลักชนิดนี้เป็นอย่างมาก เพราะมักเกิดการชะล้างหรือสูญเสียจากการระเหยได้ง่าย โดยมีหน้าที่ในการสร้างเสริม ซ่อมแซม และสังเคราะห์แสง N ไนโตรเจน ( Nitrogen ) ช่วยการส่งเสริมโปรตีนในพืช ทำให้พืชสามารถเจริญเติบโตได้ดี โดยเฉพาะกิ่งและใบของพืชต่างๆ ซึ่งหากไม่ได้รับแร่ธาตุนี้ก็จะทำให้พืชไม่เจริญเติบโต และใบมีสีเหลืองเนื่องจากขาดสาร คลอโรฟิลล์ ( Chlorophyll )</p>
                <div class="container-fluid pt-4 px-4">
                    <div class="p-2 text-center">
                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                            <img src="img/nitrogen.png" alt="" style="width: 100px; height: 100px;">
                            <h3 class="text-dark m-2">ไนโตรเจน (N)</h3>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <p>แหล่งที่มา: <a class="text-light" href="https://www.ponpe.com/tech/767-soil-ph-npk.html">https://www.ponpe.com</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Phosphorus -->
<div class="modal fade" id="modal-p" tabindex="-1" aria-labelledby="modal-p-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-p-label">ฟอสฟอรัส (P)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><a class="text-dark">P ฟอสฟอรัส ( Phosphorus )</a> คือ แร่ธาตุที่ละลายไปกับน้ำได้ค่อนข้างยาก โดยมีการดูดซีมไปใช้ของพืชขึ้นอยู่กับความเป็นกรดหรือด่างของดิน โดยจะช่วยให้รากสามารถดูดซึมไปใช้ได้มากที่สุด ส่งผลให้ลำต้นมีความแข็งแรง ทำให้เซลล์เนื้อเยื่อเจริญเติบโตแล้วยังจะกระตุ้นให้เกิดดอกได้ดี และหากขาดแร่ธาตุชนิดนี้ไปจะทำให้รากเกิดการเปลี่ยนสีเป็นสีเหลือง และไม่เจริญเติบโต รวมทั้งลำต้นไม่แข็งแรง</p>
                <div class="container-fluid pt-4 px-4">
                    <div class="p-2 text-center">
                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                            <img src="img/phosphorus.png" alt="" style="width: 100px; height: 100px;">
                            <h3 class="text-dark m-2">ฟอสฟอรัส (P)</h3>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <p>แหล่งที่มา: <a class="text-light" href="https://www.ponpe.com/tech/767-soil-ph-npk.html">https://www.ponpe.com</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Potassium -->
<div class="modal fade" id="modal-k" tabindex="-1" aria-labelledby="modal-k-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-k-label">โพแทสเซียม (K)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><a class="text-dark">K โพแทสเซียม ( Potassium )</a> คือ แร่ธาตุที่สามารถละลายน้ำได้ดี จะคอยทำหน้าที่ในการสังเคราะห์คาร์โบไฮเดรต เพื่อให้พืชสามารถสังเคราะห์แสงได้ดี และยังช่วยในการเจริญเติบโตของพืชในส่วนของลำต้น และผล</p>
                <div class="container-fluid pt-4 px-4">
                    <div class="p-2 text-center">
                        <div id="other-status" class="container-fluid p-4" style="width:max-content; height:max-content; border-radius: 10px;">
                            <img src="img/potassium.png" alt="" style="width: 100px; height: 100px;">
                            <h3 class="text-dark m-2">โพแทสเซียม (K)</h3>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <p>แหล่งที่มา: <a class="text-light" href="https://www.ponpe.com/tech/767-soil-ph-npk.html">https://www.ponpe.com</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Criterion -->
<div class="modal fade" id="modal-criterion" tabindex="-1" aria-labelledby="modal-criterion-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-criterion-label">ประโยชน์ของธาตุอาหารหลักของพืช</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>การดูแลดินที่ถูกวิธีด้วยการปรับสภาพดินอยู่เสมอ จะช่วยให้พืชที่ปลูกเจริญเติบโต และได้ผลผลิตที่มีประสิทธิภาพมากขึ้น โดยธาตุอาหารหลักอย่าง N P K มีประโยชน์ต่างๆกัน ดังนี้:</p>
                <ul>
                    <li><b>N (ไนโตรเจน):</b> ช่วยการเจริญเติบโตของใบ</li>
                    <li><b>P (ฟอสฟอรัส):</b> ช่วยการเจริญเติบโตของรากและดอก</li>
                    <li><b>K (โพแทสเซียม):</b> ช่วยการเจริญเติบโตของผล</li>
                </ul>
                <hr>
                <p>แหล่งที่มา: <a class="text-light" href="https://www.ponpe.com/tech/767-soil-ph-npk.html">https://www.ponpe.com</a></p>
            </div>
        </div>
    </div>
</div>


            
           
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>