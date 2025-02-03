<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    

<style>
    #envelope {
    position: relative;
    width: 480px;
    height: 380px;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
    margin-left: auto;
    margin-right: auto;
    top: 250px;
    background-color: #00334c;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}
.front {
    position: absolute;
    width: 0;
    height: 0;
    z-index: 3;
}
.flap {
    border-left: 240px solid transparent;
    border-right: 240px solid transparent;
    border-bottom: 182px solid transparent;
    border-top: 198px solid #00334c;
    transform-origin: top;
}
.pocket {
    border-left: 240px solid #0077b2;
    border-right: 240px solid #0077b2;
    border-bottom: 190px solid #006da3;
    border-top: 190px solid transparent;
    border-bottom-left-radius: 16px;
    border-bottom-right-radius: 16px;
}
.letter {
    position: relative;
    background-color: #fff;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    height: 90%;
    top: 5%;
    border-radius: 6px;
    box-shadow: 0 2px 26px rgba(0, 0, 0, .12);
}
.letter:after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 25%, rgba(215, 227, 239, 0.70) 55%, rgba(215, 227, 239, 1.00) 100%);
}
.words {
    position: absolute;
    left: 10%;
    width: 80%;
    height: 14%;
    background-color: #eeeff0;
}
.words.line1 {
    top: 15%;
    width: 20%;
    height: 7%;
}
.words.line2 {
    top: 30%;
}
.words.line3 {
    top: 50%;
}
.words.line4 {
    top: 70%;
}
.open .flap {
    transform: rotatex(180deg);
    transition: transform 0.4s ease, z-index 0.6s;
    z-index: 1;
}
.close .flap {
    transform: rotatex(0deg);
    transition: transform 0.4s 0.6s ease, z-index 1s;
    z-index: 5;
}
.close .letter {
    transform: translatey(0px);
    transition: transform 0.4s ease, z-index 1s;
    z-index: 1;
}
.open .letter {
    transform: translatey(-60px);
    transition: transform 0.4s 0.6s ease, z-index 0.6s;
    z-index: 2;
}
.hearts {
    position: absolute;
    top: 90px;
    left: 0;
    right: 0;
    z-index: 2;
}
.heart {
    position: absolute;
    bottom: 0;
    right: 10%;
}
.heart:before, .heart:after {
    position: absolute;
    content: '';
    left: 50px;
    top: 0;
    width: 50px;
    height: 80px;
    background: #d00000;
    border-radius: 50px 50px 0 0;
    transform: rotate(-45deg);
    transform-origin: 0 100%;
}
.heart:after {
    left: 0;
    transform: rotate(45deg);
    transform-origin: 100% 100%;
}
.close .heart {
    opacity: 0;
    animation: none;
}
.a1 {
    left: 20%;
    transform: scale(0.6);
    opacity: 1;
    animation: slideUp 4s linear 1, sideSway 2s  ease-in-out 4 alternate;
    animation-fill-mode: forwards;
    animation-delay: 0.7s;
}
.a2 {
    left: 55%;
    transform: scale(1);
    opacity: 1;
    animation: slideUp 5s linear 1, sideSway 4s  ease-in-out 2 alternate;
    animation-fill-mode: forwards;
    animation-delay: 0.7s;
}
.a3 {
    left: 10%;
    transform: scale(0.8);
    opacity: 1;
    animation: slideUp 7s linear 1, sideSway 2s  ease-in-out 6 alternate;
    animation-fill-mode: forwards;
    animation-delay: 0.7s;
}
@keyframes slideUp {
    0% {
        top: 0;
    }
    100% {
        top: -600px;
    }
}
@keyframes sideSway {
    0% {
        margin-left: 0px;
    }
    100% {
        margin-left: 50px;
    }
}
body {
    background-color:  #a8e2ff;
}
.envelope-wrapper {
    height: 380px;
}
.reset {
    text-align: center;
}
.reset button {
    font-weight: 800;
    font-style: normal;
    transition: all 0.1s linear;
    -webkit-appearance: none;
    background-color: transparent;
    border: solid 2px #0077b2;
    border-radius: 4px;
    color: #0077b2;
    display: inline-block;
    font-size: 14px;
    text-transform: uppercase;
    margin: 5px;
    padding: 10px;
    line-height: 1em;
    text-decoration:  none;
    min-width: 120px;
    outline: none;
}
.reset button:hover {
    background-color: #0077b2;
    color: #fff;
}
</style>
</head>
<body>
    <div class="envelope-wrapper">
    <div id="envelope" class="close">
        <div class="front flap"></div>
        <div class="front pocket"></div>
        <div class="letter">
            <div class="words line2">Dear Babeby</div>
            <div class="words line2">Happy 1st love day ❤️</div>
            <div class="words line3">ขอบคุณที่อยู่เคียงข้างกันเสมอ</div>
            <div class="words line4">สำหรับทุกช่วงเวลาที่มีค่าและเป็นความทรงจำของเรา</div>
        </div>
        <div class="hearts">
            <div class="heart a1"></div>
            <div class="heart a2"></div>
            <div class="heart a3"></div>
        </div>
    </div>
</div>
<div class="reset">
    <button id="open">Open</button>
    <button id="reset">Close</button>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>



<script>
    $(document).ready(function() {
    var envelope = $('#envelope');
    var btn_open = $("#open");
    var btn_reset = $('#reset');
    
    envelope.click(function() {
        open();
    });
    btn_open.click(function() {
        open();
    });
    btn_reset.click(function() {
        close();
    });
    
    function open() {
        envelope.addClass('open')
            .removeClass('close');
    }
    function close() {
        envelope.addClass('close')
            .removeClass('open');
    }
})
</script>