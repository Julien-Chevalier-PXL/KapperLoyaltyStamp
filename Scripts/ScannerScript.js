$(document).ready(function () {
    var cameraIsOn = false;
    let scanner = new Instascan.Scanner({
        video: document.getElementById('vid-stream')
    });
    let camera = undefined;
    scanner.addListener('scan', function (content) {
        console.log("Restult: " + content);
        // TODO 





    });
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            camera = cameras[0];
        } else {
            console.error('No cameras found.');
            $("#jbtContainer").html('<div class="alert alert-danger" role="alert">No camera found !</div>');
        }
    }).catch(function (e) {
        console.error(e);
        $("#jbtContainer").html('<div class="alert alert-danger" role="alert">Error while looking for a camera.</div>');
    });

    $("#btnStart").on("click", function () {
        if(camera!=undefined){
            if (cameraIsOn) {
                scanner.stop();
            } else {
                scanner.start(camera).catch(function(e){
                    console.error(e);
                    $("#jbtContainer").append('<div class="alert alert-danger" role="alert">Error when trying to start the camera !</div>');
                });
            }
            cameraIsOn = !cameraIsOn;
            $("#startStopSpan").text(cameraIsOn ? "Stop" : "Start");
        }        
    });
});