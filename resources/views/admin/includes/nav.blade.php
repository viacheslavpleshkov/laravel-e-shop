<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="{{ route('admin.index') }}">{{ __('admin.admin-panel') }}</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item {{ url()->current() == route('admin.index') ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('admin.index') }}"><i class="fas fa-home"></i> {{ __('admin.nav-home') }}</a>
			</li>
			@if(in_array(Auth::user()->role->name, ['Moderator','Admin']))
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-shopping-cart"></i> {{ __('admin.nav-online-shop') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ Request::is('*products*') ? 'active' : '' }}" href="{{ route('products.index') }}"><i class="fas fa-tshirt"></i> {{ __('admin.nav-products') }}</a>
						<a class="dropdown-item {{ Request::is('*categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}"><i class="fab fa-amilia"></i> {{ __('admin.nav-categories') }}</a>
						<a class="dropdown-item {{ Request::is('*brands*') ? 'active' : '' }}" href="{{ route('brands.index') }}"><i class="fas fa-anchor"></i> {{ __('admin.nav-brands') }}</a>
						<a class="dropdown-item {{ Request::is('*mades*') ? 'active' : '' }}" href="{{ route('mades.index') }}"><i class="fas fa-globe"></i> {{ __('admin.nav-mades') }}</a>
						<a class="dropdown-item {{ Request::is('*reviews*') ? 'active' : '' }}" href="{{ route('reviews.index') }}"><i class="fas fa-comments"></i> {{ __('admin.nav-reviews') }}</a>
					</div>
				</li>
				<li class="nav-item {{ Request::is('*help*') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('admin.help') }}"><i class="fas fa-question-circle"></i> {{ __('admin.nav-help') }}</a>
				</li>
				<li class="nav-item {{ Request::is('*subscribes*') ? 'active' : '' }}">
					<a class="nav-link" href="{{ route('subscribes.index') }}"><i class="fas fa-bell"></i> {{ __('admin.nav-subscribes') }}</a>
				</li>
			@endif
			@if(in_array(Auth::user()->role->name, ['Admin']))
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
					   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-users-cog"></i> {{ __('admin.nav-user-manager') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ Request::is('*users*') ? 'active' : '' }}" href="{{ route('users.index') }}"><i class="fas fa-users"></i> {{ __('admin.nav-users') }}</a>
						<a class="dropdown-item {{ Request::is('*roles*') ? 'active' : '' }}" href="{{ route('roles.index') }}"><i class="fas fa-user-shield"></i> {{ __('admin.nav-roles') }}</a>
						<a class="dropdown-item {{ Request::is('*wishlists*') ? 'active' : '' }}" href="{{ route('wishlists.index') }}"><i class="fas fa-list-ul"></i> {{ __('admin.nav-wishlists') }}</a>
						<a class="dropdown-item {{ Request::is('*purchased-commodities*') ? 'active' : '' }}" href="{{ route('purchased-commodities.index') }}"><i class="fas fa-list-ol"></i> {{ __('admin.nav-purchased-commodities') }}</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cogs"></i> {{ __('admin.nav-settings') }}</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item {{ Request::is('*settings*') ? 'active' : '' }}" href="{{ route('admin.settings') }}"><i class="fas fa-wrench"></i> {{ __('admin.nav-settings') }}</a>
					</div>
				</li>
			@endif
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item {{ url()->current() == route('profile.index') ? 'active' : '' }}" href="{{ route('profile.index') }}"><i class="far fa-user-circle"></i> {{ __('admin.nav-profile') }}</a>
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('admin.nav-logout') }}</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
		</ul>
	</div>
</nav>