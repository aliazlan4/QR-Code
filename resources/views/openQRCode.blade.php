
<html>
	<head>
		<title>@yield('title')</title>
    <script src="https://www.youtube.com/player_api"></script>
	</head>
	<body>
		<div id="player"></div>
      <script>
        var player;
        function onYouTubePlayerAPIReady() {
          player = new YT.Player('player', {
            height: '100%',
            width: '100%',
            playerVars: {'controls': 0, 'autoplay':1, 'rel':0},
            videoId: '{{ $youtube }}',
            events: {
              'onReady': onPlayerReady,
              'onStateChange': onPlayerStateChange
            }
          });
        }
        function onPlayerReady(event) {
          event.target.playVideo();
        }
        function onPlayerStateChange(event) {
          if(event.data === 0) {
            window.location = "{{ $url }}";
          }
        }
      </script>
	</body>
</html>
