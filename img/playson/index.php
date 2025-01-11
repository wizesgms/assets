<?php
//Saturday, 11 January 2020 @kevin

header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Error><Code>AccessDenied</Code>
    <Message>Access Denied</Message>
    <RequestId><?php echo strtoupper(substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,10))), 1, 15)); ?></RequestId>
    <HostId><?php echo substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', mt_rand(1,10))), 1, 90); ?></HostId>
</Error>