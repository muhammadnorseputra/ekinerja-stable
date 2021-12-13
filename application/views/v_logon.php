<html>
    <head>
        <title>E-KINERJA</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="EKINERJA" />
        
        <style>
            html,body
            {background: rgb(30,87,153); /* Old browsers */
                background: -moz-linear-gradient(top,  rgba(30,87,153,1) 0%, rgba(41,137,216,1) 50%, rgba(32,124,202,1) 51%, rgba(125,185,232,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom,  rgba(30,87,153,1) 0%,rgba(41,137,216,1) 50%,rgba(32,124,202,1) 51%,rgba(125,185,232,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */

                width: 100%;
                height: 100%;
                margin: 0px;
                overflow-x: hidden; 
                font-family: "lobster"
            }
            .judul1{
                font-size: 18px;
                text-align: center;
                font-weight: bold; 
                color: darkorange;
            }
            .judul2{
                font-size: 26px; color:#666; text-align: left;font-weight: bold;
            }

            @font-face {
                font-family: "lobster";
                src: url("_fonts/LobsterTwo-Regular.otf");
            }
            @font-face {
                font-family: "gotham";
                src: url("_fonts/Gotham Bold Regular.ttf");
            }
            #logo_bkn,img{
                width:100px;margin-left:10px;  
                -webkit-filter: drop-shadow(6px 6px 5px rgba(3,0,0,0.5));float:left;
            }
            .tbl_login{
                font-family: "Arial";color: white;font-size: 12px;
            }
            #kiri{
                height: 100%;
                background-image: url('_images/bg-pahlawan.jpg');
                background-repeat: no-repeat;
                -moz-background-size:100% 100%;
                -webkit-background-size:100% 100%;
                background-size:100% 100%;
				box-shadow: 0 3px 1em #000;

            }#kanan{
                height: 100%;
                color:white;
                font-family: "Arial";
                align: center;     

            }#layout-kanan{
                margin-top:35%;
            }#div_login:hover{
                opacity:1;
                -webkit-transition:opacity 1s ease-in-out;
                -moz-transition:opacity 1s ease-in-out;
                -ms-transition:opacity 1s ease-in-out;
                -o-transition:opacity 1s ease-in-out;
                transition:opacity 1s ease-in-out;
            }#logo_kanan{
                float:right;
                -webkit-filter: drop-shadow(6px 6px 5px rgba(3,0,0,5));

            }#logo_kiri{
                float:left;
                -webkit-filter: drop-shadow(6px 6px 5px rgba(3,0,0,0.5));
            }
        </style>
        <link href="_images/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="_css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="_css/bootstrap-table.css" type="text/css" rel="stylesheet" media="all">
        <link href="_css/bootstrap-dialog.min.css" type="text/css" rel="stylesheet" media="all">
        <link href="_css/nprogress.css" type="text/css" rel="stylesheet" media="all">
        <link href="_css/font-awesome.min.css" type="text/css" rel="stylesheet" media="all">

        <link href="_plugins/jqueryui/jquery-ui.min.css" type="text/css" rel="stylesheet" media="all">
        <meta name="google-site-verification" content="685uuxqu76JDgkvpNNj0Ojz9AhpNUylPgXLLt7vbgdI" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-199508931-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-199508931-3');
        </script>
    </head>
    <body>

        <div id="layout" style="min-width: 1368px !important;">
            <div class="row">
                <div class="col-md-7" id="kiri">
                    <div id="logo_kiri" style="margin:10px;">
                        <img style='width:70px' src="_images/logotrans.png">
                    </div>  
                    
                    <div id="logo_kanan" style="margin-top:10px;">
                        <a href="_files/petunjuk.pdf"><i class='fa fa-4x fa-book'></i>PETUNJUK</a>
                        <a href="_files/faq.pdf"><i class='fa fa-4x fa-question-circle'></i>FAQ</a>
                    </div>
                    
                    <div style="width:350px;margin:auto;margin-top:210px;opacity:0.8;" id="div_login">
                        <!--                        <div style="width: 330px;margin-bottom: 10px;">
                                                    <img src="_images/icon_dialScore.png" class="gambar" style="width:100px;">
                                                    <img src="_images/logo.png" class="gambar" style="width:200px;">
                                                </div>-->
                        <div class="panel" style="background: #171b1f;color:white;font-weight: bold;">
                            <div class="panel-heading text-center text-capitalize text-primary"><?= $pesan ?></div>
                            <div class="panel-body" style="background: #37424f;">
                                <form action="c_main/validasi" method="post">
                                    <table class="table tbl_login">
                                        <tr style="border:0px !important;">
                                            <td>Username</td>
                                            <td>
                                                <div class="input-group">					
                                                    <input class="form-control" name="username" type="text"/>
                                                    <div class="input-group-addon">
                                                        <i class="glyphicon glyphicon-user"/></i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>
                                                <div class="input-group">					
                                                    <input class="form-control" name="password" type="password"/>
                                                    <div class="input-group-addon">
                                                        <i class="glyphicon glyphicon-lock"/></i>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td/>
                                            <td>
                                                <input type="submit" class="btn" style="background: orange;color:white;font-weight: bold;width:130px;" value="Login">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $bulan = date('m') == '1' ? 12 : (int) date('m') - 1
                ?>
                <div class="col-md-5" id="kanan" style="padding-left:0px;">
                    <canvas id="Cankanan" style="position:absolute;width:100%;height:100%;"></canvas>                   

                    <div id="layout-kanan" style="left:5%;position:absolute;">
                        <div style="font-size:30px; text-align: left; color:white;">
                                <b>Daily Evaluation System (e-Kinerja)</b><br/>
                                Pemerintah Kabupaten Balangan
                        </div>                    
                        <p align='left'><i class='fa fa-2x fa-home'></i><span style="padding:20px;">Badan Kepegawaian, Pendidikan dan Pelatihan Daerah Kabupaten Balangan</span></p>
                        <p align='left'><i class='fa fa-2x fa-map-marker'></i><span style="padding:20px;">Jln. A. Yani Km 4,5 No. 1 Kel. Batu piring Kec. Paringin Selatan Kab. Balangan</span></p>
                        <p align='left'><i class='fa fa-2x fa-phone'></i><span style="padding:20px;">0526-2028060 (Telp / Fax)</span></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="_js/jquery-3.2.0.min.js"></script>
        <script src="_js/bootstrap.min.js"></script>
        <script src="_js/jquery.pixelentity.shiner.min.js"></script>
        <script src="_js/bootstrap-table.js"></script>
        <script src="_plugins/jqueryui/jquery-ui.min.js"></script>

        <script>
            function ubahUkuran() {
                var ukuran = screen.width - 15;
                $('#layout').css('max-width', ukuran + 'px');
                $('#layout').css('height', '100%');
            }
            ubahUkuran();
            $(window).resize(function () {
                ubahUkuran();
            });
            $(document).ready(function () {
                $(".peShiner").peShiner({api: true, paused: true, reverse: true, repeat: 1});
            });


            $("#frm_login").on('submit', (function (e) {
                e.preventDefault();
                var frm_login = $("#frm_login");
                var form = getFormData(frm_login);
                $.ajax({
                    type: "POST",
                    url: "c_main/validasi",
                    data: JSON.stringify(form),
                    dataType: 'json',
                    //contentType: 'application/json; charset=utf-8'
                }).done(function (response) {
                    if (response.status === 1) {
                        alert('Berhasil Login');
                        window.location.replace('./');
                    } else {
                        alert(response.ket);
                    }
                });

            }));

            var c = document.getElementById("Cankanan");
            var ctx = c.getContext("2d");
    
            function resize() {
                var box = c.getBoundingClientRect();
                c.width = box.width;
                c.height = box.height;
            }
    
            var light = {
                x: 160,
                y: 200
            }
    
            //var colors = ["#f5c156", "#e6616b", "#5cd3ad", "#4169E1"];
            var colors = ["#FFD700", "#32CD32", "#F0E68C", "#4169E1"];
    
            function drawLight() {
                ctx.beginPath();
                ctx.arc(light.x, light.y, 1000, 0, 2 * Math.PI);
                var gradient = ctx.createRadialGradient(light.x, light.y, 0, light.x, light.y, 1000);
                gradient.addColorStop(0, "#3b4654");
                gradient.addColorStop(1, "#2c343f");
                ctx.fillStyle = gradient;
                ctx.fill();
    
                ctx.beginPath();
                ctx.arc(light.x, light.y, 20, 0, 2 * Math.PI);
                gradient = ctx.createRadialGradient(light.x, light.y, 0, light.x, light.y, 5);
                gradient.addColorStop(0, "#fff");
                gradient.addColorStop(1, "#3b4654");
                ctx.fillStyle = gradient;
                ctx.fill();
            }
    
            function Box() {
                this.half_size = Math.floor((Math.random() * 50) + 1);
                this.x = Math.floor((Math.random() * c.width) + 1);
                this.y = Math.floor((Math.random() * c.height) + 1);
                this.r = Math.random() * Math.PI;
                this.shadow_length = 2000;
                this.color = colors[Math.floor((Math.random() * colors.length))];
              
                this.getDots = function() {
    
                    var full = (Math.PI * 2) / 4;
    
    
                    var p1 = {
                        x: this.x + this.half_size * Math.sin(this.r),
                        y: this.y + this.half_size * Math.cos(this.r)
                    };
                    var p2 = {
                        x: this.x + this.half_size * Math.sin(this.r + full),
                        y: this.y + this.half_size * Math.cos(this.r + full)
                    };
                    var p3 = {
                        x: this.x + this.half_size * Math.sin(this.r + full * 2),
                        y: this.y + this.half_size * Math.cos(this.r + full * 2)
                    };
                    var p4 = {
                        x: this.x + this.half_size * Math.sin(this.r + full * 3),
                        y: this.y + this.half_size * Math.cos(this.r + full * 3)
                    };
    
                    return {
                        p1: p1,
                        p2: p2,
                        p3: p3,
                        p4: p4
                    };
                }
                this.rotate = function() {
                    var speed = (30 - this.half_size) / 20;
                    this.r += speed * 0.002;
                    this.x += speed;
                    this.y += speed;
                }
                this.draw = function() {
                    var dots = this.getDots();
                    ctx.beginPath();
                    ctx.moveTo(dots.p1.x, dots.p1.y);
                    ctx.lineTo(dots.p2.x, dots.p2.y);
                    ctx.lineTo(dots.p3.x, dots.p3.y);
                    ctx.lineTo(dots.p4.x, dots.p4.y);
                    ctx.fillStyle = this.color;
                    ctx.fill();
    
    
                    if (this.y - this.half_size > c.height) {
                        this.y -= c.height + 100;
                    }
                    if (this.x - this.half_size > c.width) {
                        this.x -= c.width + 100;
                    }
                }
                this.drawShadow = function() {
                    var dots = this.getDots();
                    var angles = [];
                    var points = [];
    
                    for (dot in dots) {
                        var angle = Math.atan2(light.y - dots[dot].y, light.x - dots[dot].x);
                        var endX = dots[dot].x + this.shadow_length * Math.sin(-angle - Math.PI / 2);
                        var endY = dots[dot].y + this.shadow_length * Math.cos(-angle - Math.PI / 2);
                        angles.push(angle);
                        points.push({
                            endX: endX,
                            endY: endY,
                            startX: dots[dot].x,
                            startY: dots[dot].y
                        });
                    };
    
                    for (var i = points.length - 1; i >= 0; i--) {
                        var n = i == 3 ? 0 : i + 1;
                        ctx.beginPath();
                        ctx.moveTo(points[i].startX, points[i].startY);
                        ctx.lineTo(points[n].startX, points[n].startY);
                        ctx.lineTo(points[n].endX, points[n].endY);
                        ctx.lineTo(points[i].endX, points[i].endY);
                        ctx.fillStyle = "#696969";
                        ctx.fill();
                    };
                }
            }
    
            var boxes = [];
    
            function draw() {
                ctx.clearRect(0, 0, c.width, c.height);
                drawLight();
    
                for (var i = 0; i < boxes.length; i++) {
                    boxes[i].rotate();
                    boxes[i].drawShadow();
                };
                for (var i = 0; i < boxes.length; i++) {
                    collisionDetection(i)
                    boxes[i].draw();
                };
                requestAnimationFrame(draw);
            }
    
            resize();
            draw();
    
            while (boxes.length < 14) {
                boxes.push(new Box());
            }
    
            window.onresize = resize;
            c.onmousemove = function(e) {
                light.x = e.offsetX == undefined ? e.layerX : e.offsetX;
                light.y = e.offsetY == undefined ? e.layerY : e.offsetY;
            }
    
    
            function collisionDetection(b){
                for (var i = boxes.length - 1; i >= 0; i--) {
                    if(i != b){ 
                        var dx = (boxes[b].x + boxes[b].half_size) - (boxes[i].x + boxes[i].half_size);
                        var dy = (boxes[b].y + boxes[b].half_size) - (boxes[i].y + boxes[i].half_size);
                        var d = Math.sqrt(dx * dx + dy * dy);
                        if (d < boxes[b].half_size + boxes[i].half_size) {
                            boxes[b].half_size = boxes[b].half_size > 1 ? boxes[b].half_size-=1 : 1;
                            boxes[i].half_size = boxes[i].half_size > 1 ? boxes[i].half_size-=1 : 1;
                        }
                    }
                }
            }

        </script>
    </body>
</html>