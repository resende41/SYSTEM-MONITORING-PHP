<?php
exec("ping -n 1 8.8.8.2", $output, $result);
print_r($output);

if ($result == 0)
echo "Ping Online";
else
echo "Ping Offline";
