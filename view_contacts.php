
<script src="assets/js/jquery-3.5.1.js"></script>
<?php
echo'<div class="inner cover">';
echo'<h1 class="cover-heading">Contact Form Entries</h1>';
 
echo '<table>';
echo '<tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Comments</td></tr>';
echo '<tbody id="results">';
echo '</tbody>';
echo '</table>';
?>
<script>
function refresh_data()
{
	$.ajax({
		type: 'post',
		url: 'https://ec2-3-140-216-36.us-east-2.compute.amazonaws.com/hw20/query_contacts.php',
		success:function(data) {
			$('#results').html(data);
		}
		});
	
}
		
setInterval(function(){ refresh_data(); },500);
</script>