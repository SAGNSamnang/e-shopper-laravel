<!DOCTYPE html>
<html lang="en">
<!-- include head -->
@include("includes.head")
<body>
	<!-- include header -->
	@include("includes.header")
	<section>
		<div class="container">
			<div class="row">
				<!-- include sidebar -->
				@include("includes.sidebar")
				<!-- include page  -->
				@yield("content")
			</div>
		</div>
	</section>
	<!-- include footer  -->
	@include("includes.footer")
</body>
</html>