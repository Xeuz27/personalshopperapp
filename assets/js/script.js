$(document).scroll(function(){
    var isScrolled = $(this).scrollTop() > $(".topBar").height();
    $(".topBar").toggleClass("scrolled", isScrolled);
})


function volumeToggle (button){
    var muted = $(".previewVideo").prop("muted");
    $(".previewVideo").prop("muted", !muted);

    $(button).find("i").toggleClass("fa-volume-xmark");
    $(button).find("i").toggleClass("fa-volume-high");
}

function previewEnded() {
    $(".previewVideo").toggle();
    $(".previewImage").toggle();
}

function goBack(){
    window.history.back();
}

function startHideTimer(){
    var timeout = null;
    $(document).on("mousemove", function() {
        clearTimeout(timeout);
        $(".watchNav").fadeIn();
        timeout = setTimeout(function() {
            $(".watchNav").fadeOut();

        }, 1350);
    })
}

function initVideo (videoId, username){
    startHideTimer();
    setStartTime(videoId, username);
    updateProgessTimer(videoId, username)
    
}
function updateProgessTimer(videoId, username){
    addDuration(videoId, username)

    var timer;
    $("video").on("playing", function(event){
        window.clearInterval(timer);
        timer = window.setInterval(function(){
            updateProgress(videoId, username, event.target.currentTime);
        }, 3000);
    })
    .on("ended", function(){
        setFinished(videoId, username);
        window.clearInterval(timer);
    })
    .on("stop pause", function(){
        window.clearInterval(timer);
    })


}

function addDuration (videoId, username){
    $.post("ajax/addDuration.php",{videoId: videoId, username: username}, function (data){
        if (data !== null && data !== "" ) {
            alert(data);
        }
    })
}
function updateProgress(videoId, username, progress){
    $.post("ajax/updateDuration.php",{videoId: videoId, username: username, progress: progress}, function (data){
        if (data !== null && data !== "" ) {
            alert(data);
        }
    })
}
function setFinished(videoId, username){
    $.post("ajax/setFinished.php",{videoId: videoId, username: username}, function (data){
        if (data !== null && data !== "" ) {
            alert(data);
        }
    })
}
function setStartTime(videoId, username){
    $.post("ajax/getProgress.php",{videoId: videoId, username: username}, function (data){
        if (isNaN(data)) {
            alert(data);
            console.log(data);
            return;
        }
            $("video").on("canplay", function(){
                this.currentTime = data;
                $("video").off("canplay");
            })
    })
}

function restartVideo(){
    $("video")[0].currentTime = 0;
    $("video")[0].play();

    $(".upNext").fadeOut();

}

function watchVideo (videoId){
    window.location.href = "watch.php?id=" + videoId;
}

function showUpNext(){
    $(".upNext").fadeIn();
}

let nav = document.getElementById("nav");
let menu = document.getElementById("navLinks");
let abrirMenu = document.getElementById("open");
let botones = document.getElementsByClassName("btn-header");
let cerrado = true;

$(document).ready(function () {
    $('#click').click(function () {
        $('.navLinks').toggleClass('invisible')
        $('.navLinks').toggleClass('visible')
    
    })
})


function apertura() {
    if (cerrado) {
        menu.style.width = "180px";
        cerrado = false;
    } else {
        menu.style.width = "0%";
        menu.style.overflow = "hidden";
        cerrado = true;
    }
}

function OcultarLoader() {
    let Loader = document.getElementById("onload")
    Loader.style.display = "none";
    Loader.style.transition = "1.5s";

}

// dom events 

window.addEventListener("load", function() {
    OcultarLoader();
    ChangeMenu();
    HeightResponsive();
});

window.addEventListener("scroll", function() {
    ChangeMenu();
    console.log(this.window.pageYOffset)

});

window.addEventListener("resize", function() {


    if (screen.width <= 700) {
        cerrado = true;
        menu.style.removeProperty("overflow");
        menu.style.width.value('0px');
    }

});

window.addEventListener("click", function(e) {
    if (cerrado == false) {
        let span = document.querySelector("span")
        if (e.target !== span && e.target !== abrirMenu) {
            menu.style.width = "0%"
            menu.style.overflow = "hidden";
            cerrado = true
        }
    }
})
