<nav class="container">
	<div class="columns is-centered">
		<!-- Branding Image -->
		<a class="column" href="{{ url('/') }}">
			{{ config('app.name', 'Admin-KumanovoNews') }}
		</a>

		<ul class="column has-text-right">
			<!-- Authentication Links -->
			@if (Auth::guest())
				<li><a href="{{ route('login') }}">Login</a></li>
			@else

			<div class="dropdown is-right is-hoverable">
				<div class="dropdown-trigger">	
					<a href="#" aria-haspopup="true" aria-controls="dropdown-menu4">
						{{ Auth::user()->name }} <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
					</a>
				</div>
				<div class="dropdown-menu" id="dropdown-menu4" role="menu">
					<div class="dropdown-content">
						<div class="dropdown-item">
							<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
								Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</div>
					</div>
				</div>
			</div>
			@endif
		</ul>
	</div>
</nav>