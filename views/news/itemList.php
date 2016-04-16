<table>
	<caption>list item : </caption>
		<tr>
		<?php foreach($model as $item): ?>
			<th><?php echo $item['title'] ; ?></th>
		</tr>
		<tr>
			<td><?php echo $item['time'] ;?></td>
		</tr>
	<?php endforeach;?>
</table>