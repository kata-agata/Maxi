/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
        var embedCode = event.target.getVideoEmbedCode();
        player.seekTo(63);
        event.target.mute();
        event.target.playVideo();
        if (document.getElementById('videoFrame')) {
            document.getElementById('videoFrame').innerHTML = embedCode;
        }
    } else if (!window.matchMedia('(min-width: 769px)').matches) {
        player.stopVideo();
    }
}

function onPlayerError(event) {

}

function onStateChange(event) {
    event.target.mute();
    event.target.playVideo();

}
