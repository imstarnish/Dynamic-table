<?php
$ec2_id = exec('wget -q -O - http://169.254.169.254/latest/meta-data/instance-id');
$zone = exec('wget -q -O - http://169.254.169.254/latest/meta-data/placement/availability-zone');
echo $ec2_id;
echo $zone;
?>