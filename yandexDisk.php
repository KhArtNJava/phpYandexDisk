<?php

error_reporting( 0 );

if ( !class_exists( 'webdav_client' ) )
{
    require('class_webdav_client.php');
}

$wdc = new webdav_client();
$wdc->set_server( 'ssl://webdav.yandex.ru' );
$wdc->set_port( 443 );
$wdc->set_user( 'projectalterpeople' );
$wdc->set_pass( '457project' );
// use HTTP/1.1
$wdc->set_protocol( 1 );
// enable debugging
$wdc->set_debug( false );


if ( !$wdc->open() )
{
    print 'Error: could not open server connection <br /> \r\n';
    exit;
}

// check if server supports webdav rfc 2518
if ( !$wdc->check_webdav() )
{
    print 'Error: server does not support webdav or user/password may be wrong <br /> \r\n';
    exit;
}

$http_status = $wdc->mkcol( "/backups" );

$http_status = $wdc->put_file( "/backups/" . "test.zip", "test.zip" );
print 'webdav server returns ' . $http_status;

$urlToThePublishedFile = $wdc->filePublish( "/backups/test.zip" );
print 'link to the published file: ' . $urlToThePublishedFile;

$fileUnpublishinStatus = $wdc->fileUnPublish( "/backups/test.zip" );
if ( $fileUnpublishinStatus )
{
    echo "File UnPublished correctly <br /> \r\n";
} else
{
    echo "Some errors occured on file UnPublish <br /> \r\n";
}

if ( $wdc->get_file( "/soutcast/woman/gogo/2_1.jpg", "1.jpg" ) )
{
    Echo "returned true <br /> \r\n";
} else
{
    Echo "returned false <br />\r\n";
}

$wdc->close();

$wdc = new webdav_client();
$wdc->set_server( 'ssl://webdav.yandex.ru' );
$wdc->set_port( 443 );
$wdc->set_user( 'projectalterpeople' );
$wdc->set_pass( '457project' );
// use HTTP/1.1
$wdc->set_protocol( 1 );
// enable debugging
$wdc->set_debug( false );


if ( !$wdc->open() )
{
    print 'Error: could not open server connection <br /> \r\n';
    exit;
}

// check if server supports webdav rfc 2518
if ( !$wdc->check_webdav() )
{
    print 'Error: server does not support webdav or user/password may be wrong <br /> \r\n';
    exit;
}


if ( $wdc->get_file( "/soutcast/woman/gogo/2_2.jpg", "2.jpg" ) )
{
    Echo "returned true <br />\r\n";
} else
{
    Echo "returned false <br />\r\n";
}

$wdc->close();

$wdc = new webdav_client();
$wdc->set_server( 'ssl://webdav.yandex.ru' );
$wdc->set_port( 443 );
$wdc->set_user( 'projectalterpeople' );
$wdc->set_pass( '457project' );
// use HTTP/1.1
$wdc->set_protocol( 1 );
// enable debugging
$wdc->set_debug( false );


if ( !$wdc->open() )
{
    print 'Error: could not open server connection <br /> \r\n';
    exit;
}

// check if server supports webdav rfc 2518
if ( !$wdc->check_webdav() )
{
    print 'Error: server does not support webdav or user/password may be wrong <br /> \r\n';
    exit;
}


if ( $wdc->get_file( "/soutcast/woman/gogo/1arhiv.rar", "1arhiv.rar" ) )
{
    Echo "returned true <br />\r\n";
} else
{
    Echo "returned false <br />\r\n";
}



$wdc->close();
flush();
?>
