<html>
    <head>
        <title>Readme Viewer</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-4">
                <textarea id="markdown" onchange="view()" class="btn-block" style="min-height: 100%;"></textarea>
            </div>
            <div class="col-lg-6" id="contents">
                
            </div>
        </div>
    </body>
</html>