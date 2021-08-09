<h1>List categories</h1>
<br>
<?php foreach ($categories as $c): ?>
    <div>
        <strong><a href="<?=route('categories.show', [
                'id' => $c['id']
            ])?>"><?=$c['title']?></a></strong>
    </div>
<?php endforeach; ?>
