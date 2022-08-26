<?php
include $_SERVER['DOCUMENT_ROOT']."/homepage/data/dbconfig.php";
session_start();
?>
<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>게시판</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- 서머노트를 위해 추가해야할 부분 -->
    <script src="plugin/summernote/lang/summernote-ko-KR.js"></script>
    <script src="plugin/summernote/summernote-lite.js"></script>
    <link rel="stylesheet" href="plugin/summernote/summernote-lite.css">
    <!-- 끝 -->

    <style>
        .note-insert {
            display: none !important;
        }
    </style>
</head>

<body>
    <?php
	if(isset($_SESSION['userid'])){ ?>
    <div id="board_write">
        <h1><a href="./board.php">게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
        <div id="write_area">
            <form action="./write_ok.php" method="post" enctype="multipart/form-data" id="insertBoardFrm">
                <div id="in_title">
                    <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_name">
                    <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="내용" style="width: 100%" required></textarea>

                    <script>
                        $('#ucontent').summernote({
                            height: 150,
                            lang: "ko-KR"
                        });

                    </script>
                </div>
                <div id="in_pw">
                    <input type="password" name="pw" id="upw" placeholder="비밀번호" required />
                </div>

                <div id="in_file">
                    <input type="file" value="1" id="b_file" name="b_file" />
                </div>

                <div class="bt_se">
                    <button type="submit" id="">글 작성</button>
                </div>
            </form>
        </div>
    </div>

    <?php 
		}else{
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	} 
	?>

</body>
