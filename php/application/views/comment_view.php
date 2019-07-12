<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $heading;?></h1>

<?php if ($query->num_rows() > 0 ): ?>
	<table border=1>
		<tr>
			<th>コメント人</th>
			<th>コメント</th>			
		</tr>
	<?php foreach($query->result() as $row): ?>
		<tr>
			<td><?=$row->author ?></td>
			<td><?=$row->body ?></td>
		</tr>
	<?php endforeach; ?>
<?php endif; ?>

<p><?=anchor('blog','back to blog'); ?></p>

<table border=1>
<?=form_open('blog/comment_insert'); ?>
<?=form_hidden('entry_id',$this->uri->segment(3)); ?>
	<tr>
		<td>コメント人</td><td><input type="text" name="author"></td>
	</tr>
	<tr>	
		<td>コメントの内容</td>
		<td><textarea name="body" rows="10"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="こめんと"></td>
	</tr>
</table>


</body>
</html>