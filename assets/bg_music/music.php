<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Background Sound Autoplay with Permission</title>
</head>
<body>
    <div id="permissionMessage">
        <p>Click below to allow background music:</p>
        <button onclick="requestPermission()">Allow Music</button>
    </div>

    <audio id="bg_music">
        <source src="bg_music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <!-- Optional: Display controls for the audio -->
    <p>Background Music Controls:</p>
    <button onclick="togglePlay()">Play/Pause</button>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var music = document.getElementById('bg_music');
            var permissionMessage = document.getElementById('permissionMessage');

            // Function to request permission
            function requestPermission() {
                music.play().then(function() {
                    // Autoplay permitted, hide permission message
                    permissionMessage.style.display = 'none';
                }).catch(function(error) {
                    // Autoplay not permitted, show error message or handle gracefully
                    console.log('Autoplay was prevented:', error);
                    // Optionally show an error message to the user
                    permissionMessage.innerHTML = 'Autoplay was prevented. Please manually start the music.';
                });
            }

            // Function to toggle play/pause
            function togglePlay() {
                if (music.paused) {
                    music.play().catch(function(error) {
                        console.log('Autoplay was prevented:', error);
                        // Optionally show an error message to the user
                        permissionMessage.innerHTML = 'Autoplay was prevented. Please click below to start the music.';
                        permissionMessage.style.display = 'block';
                    });
                } else {
                    music.pause();
                }
            }

            // Check if autoplay is permitted on page load
            music.play().then(function() {
                // Autoplay permitted, hide permission message
                permissionMessage.style.display = 'none';
            }).catch(function(error) {
                // Autoplay not permitted, show permission message
                permissionMessage.style.display = 'block';
            });
        });
    </script>
</body>
</html>
