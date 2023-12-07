	<div class="container">

	    <div class="profile">

	        <div class="profile-image">

	            <img class="profile-img" src="uploads/<?php echo $user[
                 'userImg'
             ]; ?>" width="250" height="250">

	        </div>

	        <div class="profile-user-settings">

	            <h1 class="profile-user-name"><?php echo ucwords(
                 $user['uidUsers']
             ); ?></h1>

	            <a href="edit.profile.php" class="btn btn-primary profile-edit-btn">Modifier Le profil</a>
	        </div>

	        <div class="profile-stats">

	            <ul>
	                <li><span class="profile-stat-count">Nom et prenoms : </span> <?php echo ucwords(
                     $user['f_name']
                 ) .
                     ' ' .
                     ucwords($user['l_name']); ?></li>
	            </ul>
	            <ul>
	                <li><span class="profile-stat-count">Email : </span> <?php echo '<small class="text-muted">' .
                     $user['emailUsers'] .
                     '</small>'; ?></li>
	            </ul>
	            <ul>
	                <li><span class="profile-stat-count">Sexe : </span> <?php if (
                     $user['gender'] == 'M'
                 ) {
                     echo 'Masculin';
                 } elseif ($user['gender'] == 'F') {
                     echo 'Feminin';
                 } ?></li>
	            </ul>


	        </div>

	        <div class="profile-bio">

	            <p><span class="profile-real-name">Bio : </span> <?php echo $user[
                 'bio'
             ]; ?></p>

	        </div>

	    </div>
	    <!-- End of profile section -->

	</div>
	<!-- End of container -->