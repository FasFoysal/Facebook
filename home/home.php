<?php 
// no:-1
session_start();
 $total = $_SESSION ['first'] .' '. $_SESSION ['last'] ;
// no:-2  log out hole r oi page a jabe na and login er por back a gale o hobe na

if(!isset ($_SESSION['first'])) {
	header("location:../index.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $total ; ?></title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/uikit.min.css">
	<link rel="stylesheet" href="css/uikit.gradient.min.css">
	<link rel="stylesheet" href="css/uikit.almost-flat.min.css">
	
</head>
<body>
	<header class="header-area">
		<div class="search-area">
			<div class="logo-area">
				<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			</div>
			<div class="input-area">
				<input type="text" placeholder="search area">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
		</div>
		<div class="home-profile">
			<div class="profile-area">
				<a href="home.php"><img src="../upload/<?php echo $_SESSION['image']; ?>"  alt=""> <p>  <?php echo $_SESSION['first'] ?></p></a>
				<a href="admin.php" style="color:#fff;" >home</a>
			</div>
			<div class="home-area">
				<div class="col-6 lg-6">
					<a href="#"><span class = "categories-36 users"></span></a>
				</div>
				<div class="col-6 lg-6">
					<a href="#"><span class = "categories-36 massege"></span></a>
				</div>
				<div class="col-6 lg-6">
					<a href="#"><span class = "categories-36 globe"></span></a>
				</div>
			</div>
			<div class="privecy-area">
				<div class="col-7 lg-7">
					<a href="#"><span class = "categories-37 lock"></span></a>
				</div>
				<div class="col-7 lg-7 hideshotkorabo">
					<a href="#"><span class = "categories-37 dropdown"></span></a>
					<div class="log-out"> 
						<ul>
							<li><a href="#">Create Page</a></li>
							<li><a href="#">Manage Pages</a></li>
							<li><a href="#">Create Group</a></li>
							<li><a href="#">New Groups</a></li>
							<li><a href="#">Create Ads</a></li>
							<li><a href="#">Advertising on Facebook</a></li>
							<li><a href="#">Activity Log</a></li>
							<li><a href="#">News Feed Preferences</a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="../echo/logout.php">Log Out</a></li>
							<li><a href="#">Help</a></li>
							<li><a href="#">Support Inbox</a></li>
							<li><a href="#">Report a Problem</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<section class="main-area">
		<div class="left-area">
			<ul>
				<li>
					<div class="left-area-img">
						<a href="#"><img src="../upload/<?php echo $_SESSION['image']; ?>"  alt=""> </a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8"> 
						<a href="#"><span ></span><p id="p-p-1"><?php echo $total ; ?></p></a>
					</div>
				</li>
				<p class="p-area">favourites</p>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 news"></span><p>news feed</p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 message"></span><p>message</p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 event"></span><p>events</p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 save"></span><p>saved<span>2</span></p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 photo"></span><p>photos</p></a>
					</div>
				</li>
				<li> 
					<div class="left-area-img">
						<a href="#"> <img src="../upload/<?php echo $_SESSION['image']; ?>"  alt=""> <p><?php echo $total ; ?></p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 techtune"></span><p>techtunes <span>20+</span></p></a>
					</div>
				</li>
				<li>
					<div class="left-area-img">
						<a href="#"><img src="images/solutionbd.png" alt="" /><p>solutionbd</p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 subtitle"></span><p>bangla subtitle <span>20+</span></p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg8">
						<a href="#"><span class = "categories-38 softtech-49"></span><p>softtech-IT <span>20+</span></p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 softtech"></span><p>softtech-IT batch49 </p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 group"></span><p>discover groups</p></a>
					</div>
				</li>
				<li>
					<div class="col-8 lg-8">
						<a href="#"><span class = "categories-38 sale"></span><p>sale groups</p></a>
					</div>
				</li>
			</ul>
		</div>
		<!-- post pic mind  area-->
		<div class="middle-area">
			<div class="middle-area-left">
				<div class="middle-area-input">					
					<form action="../echo/post.php" method="POST" enctype="multipart/form-data"> 

						<div class="input-photo-area">
							<div class="col-5 lg-5">
								<a href="#"><span class = "categories-35 camera"> 
								
								<input name="postimage" type="file" /> 
								
								
								</span><p>photo/video</p></a>
							</div>
							<div class="col-5 lg-5">
								<a href="#"><span class = "categories-35 album"></span><p>photo album</p></a>
							</div>
						</div>
						<div class="input-field">
							<div class="input-img">
								<img src="../upload/<?php echo $_SESSION['image']; ?>" alt="">
							</div>
							<div class="input-textarea">
							
								<textarea name="postcont" id="" cols="" rows="" 

								placeholder="What's on your mind?"></textarea>
								
								
								
							</div>
						</div>
						<div class="submit-area">
							<div class="submit-area-left">
								<div class="col-4 lg-4">
									<a href="#"><span class = "categories-34 tag"></span></a>
								</div>
								<div class="col-4 lg-4">
									<a href="#"><span class = "categories-34 smaily"></span></a>
								</div>
								<div class="col-4 lg-4">
									<a href="#"><span class = "categories-34 location"></span></a>
								</div>
							</div>
							<div class="submit-area-right">
								<div class="submit-area-button">
									<a href="#"><i class="fa fa-globe" aria-hidden="true"></i><p>public</p><span>&dtrif;</span></a>
								</div>
								<div class="submit-area-button">
									<input type="submit" value="POST" />
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<?php 
				
				
				
				
				include('../echo/incload.php');
				//profile eikhane ace 
				
				$all_post = mysqli_query($conn,"SELECT * FROM user_ WHERE use_name='$total' ORDER BY post_id DESC");

				
				
				
				
				
			//* 1 jon post korle sobi dekte parbe   'while'   use kore
			while($post_tukra = mysqli_fetch_array($all_post)): 

				$post_id = $post_tukra['post_id'];

		   //nij nij jigai bosano ace
				//$post_tukra['pos_date'];
				//$post_tukra['pos_content'];
				//$post_tukra['pos_image'];
				//$post_tukra['pos_image'];
				//$post_tukra['user_pic'];
				?>
				
				
				
				
				<div class="total-post-area">
					<div class="post-area uk-article">
                        <a style="color: orange; float:right; padding:3px 3px; " href="#">Edit</a>
                <a style="color: red   ; float:right; padding:3px 3px; " href="../echo/delete.php?del=<?php echo $post_id ?>">Delete</a>
						<div class="article-img">
							<img src="../upload/<?php echo $post_tukra['user_pic'];?>" alt="">
						</div>
						<div class="article-title">
							<h1 class="uk-article-title"><?php echo $post_tukra['use_name'] ?></h1>
						<p class="uk-article-meta"><?php echo $post_tukra['pos_date']; ?></p>
						</div>
						<div class="article-content">
							<p><?php echo $post_tukra['pos_content']; ?></p>
							<img src="../postimage/<?php echo $post_tukra['pos_image'] ?>" alt="" />
						</div>
						<hr class="uk-article-divider">
						<div class="like-box">
							<div class="col-2 lg-2">
								<a href="#"><span class = "categories-32 like"></span><p>like</p></a>
							</div>
							<div class="col-2 lg-2">
								<a href="#"><span class = "categories-32 comment"></span><p>comment</p></a>
							</div>
							<div class="col-2 lg-2">
								<a href="#"><span class = "categories-32 share"></span><p>share</p></a>
							</div>
						</div>
					</div>
					
							<!-- //commend area -->
					<div class="commenter-area">

						<form action="../echo/comment.php" method="POST">
							<div class="comment-feild"> 
								<img src="../upload/<?php echo $_SESSION['image']; ?>" alt="" />
								<input name="usercomment" type="text" placeholder="Write a comment..."/>
								<input       type="hidden"      name="postid" value="<?php echo $post_id;   ?>" />
								
							</div>


							
						</form>

						<!-- //commend area -->
							<?php  
							
							
							
							$all_comm = mysqli_query($conn,"SELECT * FROM user_commend WHERE post_id='$post_id' ORDER BY use_id DESC");
							
							
							
							
							
							
							
							
							while($comm_tukra = mysqli_fetch_array($all_comm)): ?>

							<div class="comment-man">
								<img src="../upload/<?php echo $comm_tukra['user_pic']; ?>" alt="" />
								
								<a href="#"><?php echo $comm_tukra['user_nam']; ?></a>
								
								<p><?php echo $comm_tukra['comment_text']; ?></p>
								 
							</div>
							<?php endwhile; ?>
							
							
							
							
					</div>
				
				</div>


						<!-- //1 jon post korle sobi dekte parbe   while   use kore	 -->
				<?php endwhile; ?>
				
				
					
				</div>
			<div class="middle-area-right">
				<div class="page">
					<p>your pages</p>
				</div>
				<div class="like-page">
					<a href="#"> <img src="../upload/<?php echo $_SESSION['image']; ?>" alt=""> <p><?php echo $total ; ?></p></a>
				</div>
				<div class="post-page">
					<p>you haven't posted in 6 days</p>
					<a href="#"> <img src="../upload/<?php echo $_SESSION['image']; ?>" alt=""> <p>340 people who like <span><?php echo $total ; ?></span> haven't heard from you in a while</p></a>
					<button type="submit">write a post</button>
				</div>
				<div class="counter">
					<p>this week</p>
					<div class="post-people">
						<span>115</span>
						<p>post reach</p>
					</div>
					<div class="post-people">
						<span>31</span>
						<p>people engaged</p>
					</div>
				</div>
				<div class="recent-post">
					<p>recent posts</p>
					<div class="col-3 lg-3">
						<a href="#"><span class = "categories-33 write"></span><p>আপনাদের যাদের ড্রপবক্সে একাউন্ট নাই তারা...</p></a>
						<button type="submit">boost post</button>
					</div>
					<div class="col-3 lg-3">
						<a href="#"><span class = "categories-33 write"></span><p>আপনাদের যাদের ড্রপবক্সে একাউন্ট নাই তারা...</p></a>
					</div>
				</div>
			</div>
		</div>
		<div class="right-area">
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/sujon.jpg" alt=""><p>Mohammad Toriqul Mowla Sujan</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/sufian.jpg" alt=""><p>Sanaul Mowla Sufian</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/profile-img.jpg" alt=""><p>fardin hasan</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/nobin.jpg" alt=""><p>Safwan Äråfät Ñøbîñ</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/anondi.jpg" alt=""><p>Smiley Anondi</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/sohrab.jpg" alt=""><p>Sohrab Hossain</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/mojammel.jpg" alt=""><p>S.m. Mozammel Haque</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/anas.jpg" alt=""><p>Anas Masum</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/masum.jpg" alt=""><p>md masum</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/momin.jpg" alt=""><p>Momin Ahamed</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/imran.jpg" alt=""><p>SI Imran</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/masum-2.jpg" alt=""><p>মাহবুবুর রহমান মাছুম</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/ismail.jpg" alt=""><p>MD Ismail</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/sabbir.jpg" alt=""><p>Sabbir Ahmed</p></a></li>
				</ul>
			</div>
			<div class="chat-box">
				<ul>
					<li><a href="#"><img src="images/saiful.jpg" alt=""><p>Saiful Alam Palash</p></a></li>
				</ul>
			</div>
		</div>
	</section>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script>
		jQuery(document).ready(function(){
		
			jQuery('.dropdown').click(function(){
			
				jQuery('.log-out').fadeToggle(function(){
					
					
					jQuery('body').click(function(){
			
						jQuery('.log-out').fadeToggle();
					
					
					
					});
					
					
				});
				
				return false;
			
			});
			
		
		});
	</script>

</body>
</html>