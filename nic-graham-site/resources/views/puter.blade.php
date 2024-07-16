<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/css/puter/puter.css', 'resources/js/puter/puter.js', 'build'])
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
        />
        <title>Puter</title>
    </head>
    <body>
        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.4.3/build/spline-viewer.js"></script>
        <spline-viewer class="spline-background" url="https://prod.spline.design/Z8RACqUkBOGKtNnE/scene.splinecode"></spline-viewer>
        <div class="watermark"></div>
        <div class="input-positioner">
            <div class="input-div"><input class="input-element" placeholder="Ask me something.."/></div>
        </div>

        <div class="answer-section"></div>
    </body>
</html>
