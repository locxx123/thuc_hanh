<link rel="stylesheet" href="index.css"></link>
<div class="col l-4 c-12 countdown1" data-aos="fade-left" data-aos-duration="2000">
    <div class="container2">
        <div class="s1-box-form">
            <div class="countdown">
                <ul class="flex">
                <li class="tag-li"><span id="days"></span>Ngày</li>
                <li class="tag-li"><span id="hours"></span>Giờ</li>
                <li class="tag-li"><span id="minutes"></span>Phút</li>
                <li class="tag-li"><span id="seconds"></span>Giây</li>
                </ul>
            </div>
            <?php
                // require_once('detail/s1form.php');
            ?>
        </div>
    </div>
</div>
<script>

setInterval(function time() {
    var d = new Date();
    console.log(d)
    var days = 7 - d.getDay();
    console.log(days)
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();


    if((min + '').length == 1){
        min = '0' + min;
    }
    var sec = 60 - d.getSeconds();
    if((sec + '').length == 1){
            sec = '0' + sec;
    }
    if(days == 7 && hours==24) {
        days = hours = 0
    }
    document.getElementById("days").innerText = Math.floor(days)
    document.getElementById("hours").innerText = Math.floor(hours),
    document.getElementById("minutes").innerText = Math.floor((min)),
    document.getElementById("seconds").innerText = Math.floor((sec));
}, 1000);


</script>