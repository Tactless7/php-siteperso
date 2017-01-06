<?php $user = getUserData('/../data/user.json'); ?>
<h1>maison sucré maison</h1>



<h2><?= $user['first_name']?> <?= $user['name']?></h2>
<h3><?= $user['occupation']?></h3>
<dl>	
<?php foreach ($user['experiences'] as $value) : ?>
	<dt>Année</dt><dd><?= $value['year']; ?></dd>
	<dt>Entreprise</dt><dd> <?= $value['company']; ?></dd>
<?php endforeach; ?>
</dl>