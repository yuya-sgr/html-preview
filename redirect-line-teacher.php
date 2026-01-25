<?php
/*
Template Name: LINEリダイレクト用（計測あり）
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow"> <title>LINEアプリを起動中...</title>

<?php wp_head(); ?>

<style>
    /* 読み込み中の簡易的なデザイン */
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        color: #333;
        font-family: sans-serif;
        text-align: center;
    }
    .loader {
        margin-bottom: 20px;
        font-weight: bold;
        font-size: 18px;
    }
    .sub-text {
        font-size: 12px;
        color: #666;
    }
</style>

<script>
    // LINEの友達追加URL（ここを書き換えてください！）
    const lineUrl = "https://line.me/R/ti/p/あなたのアカウントID";

    // ページ読み込み完了後に転送
    window.onload = function() {
        // 計測タグの発火を確実にするため、わずかに遅らせる（0.5秒〜1秒）
        setTimeout(function() {
            window.location.href = lineUrl;
        }, 800); 
    };
</script>

</head>
<body>

    <div>
        <div class="loader">LINEを起動しています...</div>
        <div class="sub-text">画面が切り替わらない場合は<a href="https://line.me/R/ti/p/あなたのアカウントID">こちら</a>をタップしてください。</div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
