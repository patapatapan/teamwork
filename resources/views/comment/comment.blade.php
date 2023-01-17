<div class="container">
	<div class="row">
	  <div class="col-lg-10 m-auto blog-content">
			<h4 class="comment-title">Leave A Comment</h4>
			<form class="comment-form" method="post" action="{{ asset('api/comment') }}">
        @csrf
				<div class="row">
					<div class="col-lg-4">
						<input type="text" placeholder="Name" name="name" >
					</div>
					<div class="col-lg-4">
						<input type="email" placeholder="E-mail" name="email" required>
					</div>
					<div class="col-lg-4">
						<input type="phone" placeholder="Phone" name="phone">
					</div>
					<div class="col-lg-12">
						<textarea placeholder="Comment" name="comment" required></textarea>
						<button type="submit" class="site-btn">Post Comment</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
