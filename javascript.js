

document.addEventListener('DOMContentLoaded', function() {
    const introVideo = document.getElementById('video');
    const content = document.getElementById('login-container');

    introVideo.addEventListener('ended', function() {
        // When the intro video ends, hide the video and show the content.
        introVideo.style.display = 'none';
        content.style.display = 'block';
    });
});

