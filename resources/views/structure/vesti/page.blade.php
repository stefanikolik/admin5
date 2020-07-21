@extends('layouts.app')

@section('title', 'Admin - KumanovoNews')

@section('content')

<form class="ui form">
		<div class="ui relaxed grid">
			<div class="ten wide column">
					<div class="field">
						<label>Наслов</label>
						<input name="title" placeholder="Наслов" type="text">
					</div>
					<div class="field">
						<label>slug</label>
						<input name="url" placeholder="slug" type="text">
					</div>
			</div>

			
			<div class="two wide column"></div>
			
			<div class="four wide column">
				
				<div class="field">
					<label>Категорија</label>
					
					<select name="gender" class="ui dropdown" id="select">
						<option value="">Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
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

				<div class="inline field">
				    <div class="ui toggle checkbox">
				      <input tabindex="0" class="hidden" type="checkbox">
				      <label>Избор на уредникот</label>
				    </div>
				</div>
			</div>
		
			<div class="row">
				<div class="sixteen wide column">
					<div class="field">
						<label>Вовед</label>
						<textarea></textarea>
					</div>
				</div>

				
			</div>
		</div>	
</form>

@endsection