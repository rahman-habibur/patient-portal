<!DOCTYPE html>
<html>

<head>
    <title>laravel webcam capture image and save from camera - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

</head>

<body>

    <div class="container">
        <h1 class="text-center display-2 my-3 text-primary">Insert Image</h1>

        <form method="POST" action="{{ route('webcam.capture') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">Live view</div>
                    <div id="my_camera" class="border"></div>
                    <br />
                    <div class="text-center">
                    <input type="button" value="Take Snapshot" class="text-center" onClick="take_snapshot()">
                    </div>
                    <input type="hidden" name="image" class="image-tag">
                </div>
                <div class="col-md-6">
                    <div class="mb-2">Captured Image</div>
                </div>
                <div class="col-md-12 text-center">
                    <br />
                    <button class="btn btn-success">Submit</button>
                    <a class="btn btn-danger" type="button" href="{{url('/patient')}}">Back to Patient</a>
                </div>
            </div>
        </form>
    </div>

    <script language="JavaScript">
        Webcam.set({
            width: 490,
            height: 350,
            image_format: 'jpeg',
            jpeg_quality: 90
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function (data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
            });
        }

    </script>

</body>

</html>
