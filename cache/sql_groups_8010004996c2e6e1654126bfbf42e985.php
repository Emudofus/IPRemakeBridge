<?php exit; ?>
1384812651
SELECT group_id, group_name, group_color FROM ip_groups WHERE group_single_user <> 1 AND group_legend = 1 ORDER BY group_legend_order ASC, group_name ASC
310
a:3:{i:0;a:3:{s:8:"group_id";s:1:"3";s:10:"group_name";s:14:"Administrators";s:11:"group_color";s:7:"#dd2222";}i:1;a:3:{s:8:"group_id";s:1:"4";s:10:"group_name";s:10:"Moderators";s:11:"group_color";s:7:"#228844";}i:2;a:3:{s:8:"group_id";s:1:"5";s:10:"group_name";s:5:"Users";s:11:"group_color";s:7:"#224488";}}