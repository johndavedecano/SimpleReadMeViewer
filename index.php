<html>
    <head>
        <title>Readme Viewer</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </head>
    <body onload="view()">
        <div class="row">
            <div class="col-lg-4">
                <textarea id="markdown" onchange="view()" class="btn-block" style="min-height: 100%; font-size:11px; color:white; background: black; padding:5px; font-family: Courier;">
#Readme Viewer
View your .md files on a fly.

##Requirements
1. Node.js and Bower
2. Composer
3. PHP5+

##Installation
1. Clone the repository **git clone https://github.com/johndavedecano/SimpleReadMeViewer.git**
2. Assuming you already have bower and node.js installed in your system, using your commandline run **composer install** next **bower install**
3. Test it in your local server  php -S localhost:8000 
                </textarea>
            </div>
            <div class="col-lg-6" id="contents">
                
            </div>
        </div>
    </body>
</html>