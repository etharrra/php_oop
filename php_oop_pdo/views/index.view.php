<!DOCTYPE html>
<html>
<head>
	<title>PDO View</title>
	<meta charset="utf-8">
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="about">About</a>
			</li>

			<li>
				<a href="contact">Contact</a>
			</li>
			<li>
				<a href="userinsert">Insert Users</a>
			</li>
			<li>
				<a href="users">View All Users</a>
			</li>
		</ul>
	</nav>

	<ul>
		<?php foreach ($tasks as $task): ?>
			<li>
				<?php if($task->completed): ?>
					<strike><?=$task->description?></strike>
				<?php else: ?>
					<?=$task->description?>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>