<?php exit; ?>
1384812928
SELECT aa.forum_id, g.group_id, g.group_name, g.group_color FROM ip_auth_access aa, ip_user_group ug, ip_groups g WHERE aa.auth_mod = 1 AND g.group_single_user = 0 AND g.group_type <> 2 AND ug.group_id = aa.group_id AND g.group_id = aa.group_id GROUP BY g.group_id, g.group_name, aa.forum_id ORDER BY aa.forum_id, g.group_id
6
a:0:{}