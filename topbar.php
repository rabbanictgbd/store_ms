<div class="row">
						<div class="col-sm-9 bg-light p-0 m-0">
							<h1>
							<a href='index.php' class='text-decoration-none text-dark'>Welcome to Store Management System </a>
							</h1>
						</div>
						<div class="col-sm-3 bg-light p-0 m-0">
							<?php
								if(empty($user_first_name)) {
									echo header ('location:login.php');
								}
								?>
								<p> <?php echo $user_first_name ." ". $user_last_name ?> <br>
									<a href="logout.php" class="text-white text-decoration-none btn btn-success px-1 m-0 "> Logout </a>
								</p>
									
						</div>
					</div>