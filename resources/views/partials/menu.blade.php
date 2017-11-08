<nav class="navbar has-shadow">
	<div class="container">
		<div class="navbar-start">
			<a class="navbar-item" href="/">
				<img src="images/logo.svg" width="100%" height="150" alt="Akcelon">
			</a>
		</div>

		<div class="navbar-end">
			<a class="navbar-item" href="#" v-scroll-to="'#missie'">
				{{ __('content.missie') }}
			</a>
			<a class="navbar-item" href="#" v-scroll-to="'#wie'">
				{{ __('content.wie') }}
			</a>
			<a class="navbar-item" href="#" v-scroll-to="'#wat'">
				{{ __('content.wat') }}
			</a>
			<a class="navbar-item" href="#" v-scroll-to="'#klanten'">
				{{ __('content.klanten') }}
			</a>
			<a class="navbar-item" href="#" v-scroll-to="'#contact'">
				{{ __('content.contact') }}
			</a>
		</div>

	</div>
</nav>


<div class="change-lang">
	<a href="/lang/nl">NL</a>
	|
	<a href="/lang/en">EN</a>
</div>