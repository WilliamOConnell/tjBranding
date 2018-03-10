<?php require_once( "couch/cms.php" ); ?>
<cms:template title="Home Page" />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TJ Branding</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="topbar">
        <div id="topbarInside"><a href="/">TJ Branding</a></div>
    </div>
    <div id="content">
        <h1>Assets</h1>
        <div id="assetGrid">
            <cms:pages masterpage="asset.php">
                <a class="assetGridItem" href="<cms:show k_page_link />">
                    <div class="previewContainer">
                        <div class="itemPreview" style="background-image: url('<cms:show preview_image />');"></div>
                    </div>
                    <div class="itemTitle"><cms:show k_page_title /></div>
                </a>
            </cms:pages>
        </div>
    </div>
</body>
</html>

<?php COUCH::invoke(); ?>