<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>START GOLGON</title>
        <link rel="stylesheet" href="/golgonphp/assets/fontawesome/css/all.css">
        <link rel="icon" href="/golgonphp/assets/images/game-console.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {box-sizing: border-box;}
            body {
                width: 100%;
                height: 100%;
                overflow:hidden;
                background-color: #222;
            }
            .content {
                text-align: center;
                position: relative;
                padding:200px 0;
            }
            .random span {width: 30px;display: inline-block;}
            a {text-decoration: none;color:#eee;}
            i {margin-left:5px;}
            .wrapper {
                font-family: sans-serif;
                color: #eee;
                text-align:center;
                font-weight:300;
                font-size:32px;
                margin:auto;
            }
            .origin,.expand {
                display:inline-block;
                overflow:hidden;
                white-space:nowrap;
            }
            .origin {
                animation: showup 7s;
            }
            .image {
                margin:auto;
                animation: showup 15s;
            }
            .image img {width:10%;}
            .expand {
                width:0px;
                animation: reveal 7s;
                animation-fill-mode: forwards;
            }

            .expand .exspan {
                animation: slidein 7s;
                animation-fill-mode: forwards;
            }

            @keyframes showup {
                0% {opacity:0;}
                20% {opacity:1;}
                80% {opacity:1;}
                100% {opacity:1;}
            }

            @keyframes slidein {
                0% { margin-left:-800px; }
                20% { margin-left:-800px; }
                35% { margin-left:0px; }
                100% { margin-left:-355px;}
            }

            @keyframes reveal {
                0% {opacity:0;width:0px;}
                20% {opacity:1;width:0px;}
                30% {width:220px;}
                80% {opacity:1;}
                100% {opacity:1;width:220px;}
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="wrapper">
                <div class="origin">G</div>
                <div class="expand"> 
                    <span class="exspan">
                        <a href="/golgonphp/home/index">
                            <div class="random">
                                <span class="nbr ltr">0</span>
                                <span class="nbr ltr">0</span>
                                <span class="nbr ltr">0</span>
                                <span class="nbr ltr">0</span>
                                <span class="nbr ltr">0</span>
                                <i class="fa fa-caret-right" style="color:#eee;font-size:32px;"></i>
                            </div>
                        </a>
                    </span>
                </div>
                </br>
                <div class="image">
                    <img src="/golgonphp/assets/images/gaming-icon.png"/>
                </div>
            </div>
        </div>
        <script src="/golgonphp/assets/js/jquery3-3-1.min.js"></script>
        <script>
            $(document).ready(function () {
                var $randomnbr = $('.nbr');
                var $data = 0;
                var index;
                var letters = ["O", "L", "G", "O", "N"];
                
                $randomnbr.each(function () {
                    var change = Math.round(Math.random() * 100);
                    $(this).attr('data-change', change);
                });
                function charPos() {
                    return Math.round(Math.random() * $randomnbr.length + 1);
                }
                ;
                function value() {
                    $('.nbr:nth-child('+charPos()+')').html('' + Math.round(Math.random() * 9) + '');
                    $('.nbr:nth-child('+charPos()+')').attr('data-number', $data);
                    $data++;
                    $randomnbr.each(function () {
                        if (parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
                            index = $('.ltr').index(this);
                            $(this).html(letters[index]);
                            $(this).removeClass('nbr');
                        }
                    });
                }
                ;
                setInterval(value, 25);
            });
        </script>
    </body>
</html>
