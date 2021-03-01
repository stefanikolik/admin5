@extends('layouts.auth')

@section('content')
<div class="container">
	<div class="columns is-centered">
		<div class="column  is-half">
			
	
		<form class="" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			
			<div class="field">
			 	<label class="label">Е-маил</label>
				<div class="control has-icons-left has-icons-right">
					<input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
					<span class="icon is-small is-left">
					  <i class="fas fa-envelope"></i>
					</span>
					<span class="icon is-small is-right">
					  <i class="fas fa-check"></i>
					</span>
				</div>
			  	@if ($errors->has('email'))
					<p class="help is-danger">{{ $errors->first('email') }}</p>
				@endif
			</div>

			<div class="field">
				<label class="label">Лозинка</label>
				
				<p class="control has-icons-left">
					<input id="password" type="password" class="input" name="password" required>
					<span class="icon is-small is-left">
						<i class="fas fa-lock"></i>
					</span>
				</p>
			  	
			  	@if ($errors->has('password'))
					<p class="help">{{ $errors->first('password') }}</p>
				@endif
			</div>

			<div class="field">
			  <p class="control">
				<button type="submit" class="button is-success">
				  Логирај се
				</button>
			  </p>
			</div>

	<!-- <a class="btn btn-link" href="{{ route('password.request') }}"></a> -->

			<div class="has-text-right">
				
				<div class="dropdown is-right is-hoverable ">
					<div class="dropdown-trigger">	
						<a href="#" aria-haspopup="true" aria-controls="dropdown-menu4">
								Заборавена лозинка?
						</a>
					</div>
					<div class="dropdown-menu" id="dropdown-menu4" role="menu">
						<div class="dropdown-content">
							<div class="dropdown-item">
								<p>Контактирајте го систем администраторот</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
			</div>
	</div>
</div>
@endsection
