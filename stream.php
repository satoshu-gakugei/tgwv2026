<?php

session_start();

if(
empty(
$_SESSION[
"allow_video"
]
)
){

http_response_code(
403
);

exit(
"アクセス拒否"
);

}

$file=
__DIR__
."/../private/kenshin.mp4";

if(
!file_exists(
$file
)
){

exit(
"動画なし"
);

}

header(
"Content-Type: video/mp4"
);

header(
"Content-Length: "
.filesize(
$file
)
);

readfile(
$file
);

exit;
