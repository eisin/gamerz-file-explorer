<?php
### What Files Not To Show In The List
$ignore_files = array(
    '.gitignore',
    '.htaccess',
    '404.php',
    'circle.yml',
    'config.php',
    'deploy.sh',
    'functions.php',
    'index.php',
    'phpinfo.php',
    'robots.txt',
    'search.php',
    'settings.php',
    'view.php',
);

### What Extentsions Not To Show In The List
$ignore_ext = array('htaccess');

### What Folders Not To Show In The List
$ignore_folders = array(
    '.circleci',
    '.well-known',
    'cgi-bin',
    'resources',
    'uploads',
);

### File Extension To Be Parsed As Text
$text_ext = array(
);

### File Extension To Be Parsed As Image
$image_ext = array(
);

### File Extensions Description
$extensions = array(
    'ai' => array('Adobe Illustrator Artwork', 'fa-file-o'),
    'avi' => array('AVI Movie', 'fa-file-video-o'),
    'bmp' => array('Bitmap Image', 'fa-file-image-o'),
    'css' => array('Cascading Style Sheet Document', 'fa-file-code-o'),
    'doc' => array('Microsoft Word Document', 'fa-file-word-o'),
    'exe' => array('Application', 'fa-file-o'),
    'fla' => array('Flash Document', 'fa-file-o'),
    'gif' => array('GIF Image', 'fa-file-image-o'),
    'htm' => array('HTML Document', 'fa-file-code-o'),
    'html' => array('HTML Document', 'fa-file-code-o'),
    'ico' => array('Icon', 'fa-file-image-o'),
    'jpg' => array('JPEG Image', 'fa-file-image-o'),
    'js' => array('JScript Script File', 'fa-file-code-o'),
    'mdb' => array('Microsoft Access Database', 'fa-file-o'),
    'mid' => array('MIDI Music', 'fa-file-audio-o'),
    'mov' => array('QuickTime Video Clip', 'fa-file-video-o'),
    'mp3' => array('MPEG Audio Layer 3', 'fa-file-audio-o'),
    'mpeg' => array('MPEG Movie', 'fa-file-video-o'),
    'mpg' => array('MPEG Movie', 'fa-file-video-o'),
    'msi' => array('Windows Installer Package', 'fa-file-o'),
    'pdf' => array('Adobe Acrobat Document', 'fa-file-pdf-o'),
    'php' => array('PHP File', 'fa-file-code-o'),
    'png' => array('PNG Image', 'fa-file-image-o'),
    'ppt' => array('Microsoft PowerPoint Presentation', 'fa-file-powerpoint-o'),
    'psd' => array('Adobe Photoshop Image', 'fa-file-o'),
    'ra' => array('Real Media Audio', 'fa-file-audio-o'),
    'rar' => array('RAR Compressed Archive', 'fa-file-archive-o'),
    'rm' => array('Real Media Video', 'fa-file-video-o'),
    'swf' => array('Flash Movie', 'fa-file-video-o'),
    'tif' => array('Tagged Image Format File', 'fa-file-image-o'),
    'txt' => array('Text Document', 'fa-file-text-o'),
    'wav' => array('Waveform Sound', 'fa-file-audio-o'),
    'wma' => array('Windows Media Audio File', 'fa-file-audio-o'),
    'wmv' => array('Windows Media Video File', 'fa-file-video-o'),
    'xls' => array('Microsoft Excel Worksheet', 'fa-file-excel-o'),
    'zip' => array('Zip Compressed Archive', 'fa-file-archive-o'),
);

### GaMerZ File Explorer Version (Please Do Not Edit This)
define('GFE_VERSION', '2.0.0');
