<?php

$str = '<?php – всегда доступен, <?= может отключаться через php.ini';

echo quotemeta($str);

?>