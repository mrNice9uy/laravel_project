<?php
echo "<a href ='".route('news.create')."'>Добавить новость</a><br>";
foreach ($newsList as $key => $news) {
    $key++;
    echo $news . "<a href='".route('news.edit', ['news' => $key])."'>Ред.</a><br>";
}
