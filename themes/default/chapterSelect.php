<?php fr_get_header(); ?>

<?php 
// html displayed when the user reads the last chapter
// great to add contacts like twitter or facebook like page

if(isset($_GET['last']))
	{
?>

<div class="theList">
	
	<h3>This was the lastest chapter we released of this manga. Thanks for reading our releases!</h3>

</div>


<?php
	}
?>

<?php fr_list_chapters(); ?>

<?php fr_get_footer(); ?>