<?php
	$MAXLIMIT = 5242880; // 5MByte limit
	if($_FILES['attach']['size'] > $MAXLIMIT) {
		$ment = "파일 사이즈가 ".($MAXLIMIT/1024/1024)."MByte를 초과하였습니다.\\n";
		$ment .= ($MAXLIMIT/1024/1024)."MByte 이하의 파일만 첨부가능합니다.";
		echo "<script>alert('".$ment."');</script>";
		return;
	}
	if($_FILES['attach']) {
		$attach = $_FILES['attach'];
		$name = preg_replace("/\.(php|phtm|htm|cgi|pl|exe|jsp|asp|inc)/i", "$0-x", $attach['name']);
		$name = substr(md5(uniqid($_SERVER['REQUEST_TIME'])),0,8).'_'.str_replace('%', '', urlencode($name));
		$ATTACH_DIR = "./attach/mail/";
		$dest_file  = $ATTACH_DIR.$name;
		$url = $ATTACH_DIR.$name;
		if(!is_dir($ATTACH_DIR)) {
			if(@mkdir($ATTACH_DIR, 0777, true)) {
				if(is_dir($ATTACH_DIR)) {
					@chmod($ATTACH_DIR, 0777);
				}
			}
		}
		if(move_uploaded_file($attach['tmp_name'], $dest_file)) {
			$attach_url = $url;
			$attach_name = $attach['name'];
			$attach_size = $attach['size'];
			$attach_type = $attach['type'];
		}
	}
	
	$femail = $_POST['femail'];
	$temail = $_POST['temail'];
	$remail = $_POST['remail'];
	$hemail = $_POST['hemail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$boundary = "----" . uniqid("part"); // 구분자
	
	// --- 헤더 --- //
	$headers = "Return-Path: ".str_replace("\\", "", $femail)."\r\n";
	$headers .= "From: ".str_replace("\\", "", $femail)."\r\n";
	if($remail) {
		$headers .= "Cc: ".str_replace("\\", "", $remail)."\r\n";
	}
	if($hemail) {
		$headers .= "Bcc: ".str_replace("\\", "", $hemail)."\r\n";
	}
	
	if($attach_url && $attach_name) { // --- 첨부파일 --- //
		$filename=$attach_name;
		$fp = fopen($attach_url,"r");
		$file = fread($fp,$attach_size);
		fclose($fp);
		if ($attach_type == ""){
			$attach_type = "application/octet-stream";
		}
		// --- 헤더 --- //
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: Multipart/mixed; boundary=\"$boundary\"";
		// --- 본문 --- // 
		$mailbody = "This is a multi-part message in MIME format.\r\n\r\n";
		$mailbody .= "--$boundary\r\n";
		$mailbody .= "Content-Type: text/html; charset=utf-8\r\n";
		$mailbody .= "Content-Transfer-Encoding: base64\r\n\r\n";
		$mailbody .= chunk_split(base64_encode(str_replace("\\", "", $message))) . "\r\n";
		// --- 첨부 --- // 
		$mailbody .= "--$boundary\r\n"; 
		$mailbody .= "Content-Type: ".$attach_type."; name=\"".$filename."\"\r\n";
		$mailbody .= "Content-Transfer-Encoding: base64\r\n";
		$mailbody .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
		$mailbody .= base64_encode($file)."\r\n\r\n";
		$mailbody .= "--$boundary--";
	}
	else {
		// --- 헤더 --- // 
		$headers .= "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-Type: Multipart/alternative; boundary = \"$boundary\"";
		// --- 본문 --- //
		$mailbody = "--$boundary\r\n"; 
		$mailbody .= "Content-Type: text/html; charset=utf-8\r\n";
		$mailbody .= "Content-Transfer-Encoding: base64\r\n\r\n";
		$mailbody .= chunk_split(base64_encode(str_replace("\\", "", $message))) . "\r\n";
		$mailbody .= "--$boundary--\r\n\r\n"; 
	}
	
	$ret = mail($temail, $subject, $mailbody, $headers);
	if(!$ret) {
		$msg = "메일 발송을 실패하였습니다.";
	}
	else {
		$msg = "메일을 발송하였습니다.";
	}
?>
<!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Cache-Control" content="No-Cache" />
	<meta http-equiv="Pragma" content="No-Cache" />
	<script>alert('<?=$msg?>');</script>
</head>
</html>
