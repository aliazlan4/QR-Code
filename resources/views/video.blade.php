@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <video id="video" width="500" height="500" controls>
                      <source src="https://www.aliazlan.com/testing/video.mp4" type="video/mp4">
                    </video>
                    <script type="text/javascript">
                      document.getElementById('video').addEventListener('ended',myHandler,false);
                      function myHandler(e) {
                        window.location="/home";
                      }
                    </script>

                  </br>
<!--
                  <div id="player"></div>
                    <script src="https://www.youtube.com/player_api"></script>
                    <script>
                      // create youtube player
                      var player;
                      function onYouTubePlayerAPIReady() {
                          player = new YT.Player('player', {
                            height: '390',
                            width: '640',
                            videoId: '0Bmhjf0rKe8',
                            events: {
                              'onReady': onPlayerReady,
                              'onStateChange': onPlayerStateChange
                            }
                          });
                      }
                      // autoplay video
                      function onPlayerReady(event) {
                          event.target.playVideo();
                      }
                      // when video ends
                      function onPlayerStateChange(event) {
                          if(event.data === 0) {
                              window.location.replace("/home");
                          }
                      }
                  </script>
                </div> -->
        </div>
    </div>
</div>
@endsection
