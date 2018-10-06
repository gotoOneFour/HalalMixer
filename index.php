<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>this is test</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <link rel="stylesheet" href="css/iziModal.min.css">
        <script type="text/javascript" src="js/iziModal.min.js"></script>
        
    </head>
    <body>
        <?php
        
        $hoge = include("php/loginToTwitter.php");
        echo("<p>{$hoge}</p>");
        
        ?>
        
        <!-- modal window divs -->
        <div id="modal-licences" data-izimodal-title=licences></div>
        
        <!-- modal settings -->
        <script type="text/javascript">
            
            $("#modal-licences").iziModal({
                headerColor: '#26A69A', //ヘッダー部分の色
                width: 400, //横幅
                transitionIn: 'fadeInUp', //表示される時のアニメーション
                transitionOut: 'fadeOutDown', //非表示になる時のアニメーション
                iframe: true, //iframeを利用
                iframeHeight: 300, //iframeの高さ
                iframeURL: 'licences.html' //iframe内に表示するurl
            });
            function openModal_licences(){
                $('#modal-licences').iziModal('open', this);
            }
            
        </script>
    </body>
</html>