<!DOCTYPE html>
<html lang="en">
<!-- include head -->
@include("includes.head")
<body>
	<!-- include header -->
	@include("includes.header")
	<section>
		<!-- include page  -->
		@yield("content")
	</section>
	<!-- include footer  -->
	@include("includes.footer")
</body>
</html>