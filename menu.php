<div id="nav_dropper"></div>
<nav class="collaps">
    <ul>
        <li>
        <?php 
		if ($settings['home_in_nav'] == "true"){
			echo '<li><a href="index.php">Home';
			if ($current_selection == "home") { echo '<b> &#9899;</b>';}
			echo '</a></li>';
			
		}
		foreach (get_pagelist_array() as $id => $name) {
			echo '<li><a href="index.php?p='.$id.'">'.$name;
			if ($current_selection == $id) { echo '<b> &#9899;</b>';}
			echo '</a></li>';
		} 
		?>

    </ul>
</nav>
