var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('videoFrame', {
        height: '100%',
        width: '100%',
        videoId: 'D4MXowfOmII',
        autoplay: 1,
        controls: 0,
        start: 7,
        loop: 1,
        fs: 0,
        modestbranding: 1,
        showInfo: 0,

        events: {
            'onReady': onPlayerReady,
            'onError': onPlayerError,
            'onStateChange': onStateChange
        }
    });

}

function onPlayerReady(event) {
//        event.target.setVolume(0);
//        event.target.playVideo();       

    if (window.matchMedia('(min-width: 769px)').matches) {
        console.log("player should start");
        var embedCode = event.target.getVideoEmbedCode();
        event.target.mute();
        event.target.playVideo();
        if (document.getElementById('videoFrame')) {
            document.getElementById('videoFrame').innerHTML = embedCode;
        }
    } else if (!window.matchMedia('(min-width: 769px)').matches) {
        player.stopVideo();
        console.log("player stopped!");
    }
}

function onPlayerError(event) {

}

function onStateChange(event) {
    event.target.mute();
//    //event.target.playVideo();
    if (event && event.data === 1) {
//        var videoHolder = document.getElementById('video-holder');
//        if (videoHolder && videoHolder.id) {
//            videoHolder.classList.remove('loading');
 //       }
        console.log("on state change show picture");
        
   } else if (event && event.data === 0) {
//        event.target.mute();
//        event.target.playVideo();    
//        console.log("on state change play video");
    }

}