<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $heading;?></h1>
	

<table border=1>
	<tr>
		<th>タイトル</th>
		<th>内容</th>
		<th>コメント</th>
	</tr>
<?php foreach($query->result() as $row): ?>
	<tr>
		<td><?=$row->title ?></td>
		<td><?=$row->body ?></td>
		<td><?=anchor('blog/comments/'.$row->id,'Comments'); ?></td>
	</tr>
<?php endforeach; ?>

</body>
</html>