@extends('layouts.app')

@section('title', 'Admin - KumanovoNews')

@section('content')
	<form class="ui form">
		<div class="ui grid ">
			<h1 class="title ten wide column">Вести</h1>
			<br>
				<div class="six wide column">
					<div class="field">
						<label>Наслов</label>
						<input name="title" placeholder="Наслов" type="text">
					</div>
					<div class="field">
						<label>slug</label>
						<input name="url" placeholder="slug" type="text">
					</div>

					<div class="field">
					<label>Датум</label>
					  <div class="ui calendar" id="example1">
					    <div class="ui input left icon">
					      <i class="calendar icon"></i>
					      <input type="text" placeholder="Date/Time">
					    </div>
					  </div>
					</div>


				</div>
				<div class="six wide column">
					<div class="field">
						<label>Gender</label>
						<div class="ui selection dropdown">
							<input name="gender" type="hidden">
							
							<i class="dropdown icon"></i>
							
							<div class="default text">Gender</div>
							
							<div class="menu">
								<div class="item" data-value="1">Male</div>
								<div class="item" data-value="0">Female</div>
							</div>
						</div>
					</div>
				</div>
		</div>



	</form>

@endsection
