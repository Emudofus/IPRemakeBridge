<?php exit; ?>
1384812928
SELECT u.username, u.user_id, u.user_active, u.user_color, u.user_level, u.user_posts, u.user_avatar, u.user_avatar_type, u.user_allowavatar FROM ip_users u WHERE (u.user_id <> -1) AND u.user_active = 1 ORDER BY u.user_posts DESC LIMIT 8
519
a:2:{i:0;a:9:{s:8:"username";s:5:"Vende";s:7:"user_id";s:1:"2";s:11:"user_active";s:1:"1";s:10:"user_color";s:7:"#dd2222";s:10:"user_level";s:1:"1";s:10:"user_posts";s:1:"2";s:11:"user_avatar";s:0:"";s:16:"user_avatar_type";s:1:"0";s:16:"user_allowavatar";s:1:"1";}i:1;a:9:{s:8:"username";s:5:"Salut";s:7:"user_id";s:1:"3";s:11:"user_active";s:1:"1";s:10:"user_color";s:0:"";s:10:"user_level";s:1:"0";s:10:"user_posts";s:1:"0";s:11:"user_avatar";s:0:"";s:16:"user_avatar_type";s:1:"0";s:16:"user_allowavatar";s:1:"1";}}