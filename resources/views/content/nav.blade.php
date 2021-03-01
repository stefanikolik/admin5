<div class="item">
	{{ config('app.name', 'Admin-KumanovoNews') }}
</div>

<div class="item">
	<div class="ui inline dropdown">
	    <div class="text">
	      <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/jenny.jpg">
	      {{ Auth::user()->name }}
	    </div>
	    <i class="dropdown icon"></i>
	    <div class="menu">
			<div class="item">
	        	<a href="{{ route('logout') }}" style="color: black !important" 
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