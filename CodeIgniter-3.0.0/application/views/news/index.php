<h2><?php echo $title ?></h2>

<table border="2px">
	
<thead>
	<tr>
		<td>TITULO</td>
		<td>TEXTO</td>
		<td>SLUG</td>
	</tr>
</thead>

<tbody>
		<?php foreach ($news as $news_item): ?>
			<tr>
				<td><?php echo $news_item['title'] ?></td>
				<td><?php echo $news_item['text'] ?></td>
				<td><a href="<?php echo $news_item['slug'] ?>">View article</a></td>
		    </tr>
		<?php endforeach ?>
</tbody>

</table>
