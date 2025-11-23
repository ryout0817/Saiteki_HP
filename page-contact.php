<?php
/* Template Name: お問い合わせテスト */
get_header();
?>
<form action="" method="post">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="message">お問い合わせ内容:</label>
    <textarea id="message" name="message" required></textarea>
    <br>
    <input type="submit" value="送信">
</form>
<?php
get_footer();
?>
