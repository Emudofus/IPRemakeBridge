<?php exit; ?>
1384807384
SELECT a.forum_id, a.auth_read, a.auth_mod FROM ip_auth_access a, ip_user_group ug WHERE ug.user_id = 3 AND ug.user_pending = 0 AND a.group_id = ug.group_id 
6
a:0:{}