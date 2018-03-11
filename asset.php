<?php require_once( "couch/cms.php" ); ?>
<cms:template title="Asset" clonable="1">
    <cms:editable
        name='preview_image'
        label='Preview Image'
        desc='This is the preview image of the asset, in most cases you should use the PNG or JPG version.'
        type='image'
        width='350'
        height='600'
    />
    <cms:editable
        name='asset_description'
        label='Description'
        desc='Information about how the asset is used, reccomended sizing/spacing, etc.'
        type='richtext'
    />
    <cms:repeatable name='asset_versions' >
        <cms:editable type='file' name='asset_file' label='Version' />
        <cms:editable type='text' name='file_type' label='Type' maxlength="10" />
    </cms:repeatable>
</cms:template>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><cms:show k_page_title /> - TJ Branding</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="topbar">
        <div id="topbarInside"><a href="/">TJ Branding</a></div>
    </div>
    <div id="content">
        <div id="assetSidebar">
            <img id="assetPreview" src="<cms:show preview_image />" alt="Image preview">
            <div id="assetDownloads">
                <cms:show_repeatable 'asset_versions'>
                    <a class="assetDownloadLink" href="<cms:show asset_file />"><cms:show file_type /></a>
                </cms:show_repeatable>
            </div>
        </div>
        <div id="assetText">
            <h1><cms:show k_page_title /></h1>
            <div><cms:show asset_description /></div>
        </div>
    </div>
    <a id="githubLink" href="https://github.com/WilliamOConnell/tjBranding"></a>
</body>
</html>

<?php COUCH::invoke(); ?>