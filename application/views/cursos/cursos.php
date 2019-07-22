<?
foreach ($cursos->result() as $curso) {?>
	<ul>
		<li><?= $curso->nombre; ?></li>
	</ul>

<? } ?>
</body>
</html