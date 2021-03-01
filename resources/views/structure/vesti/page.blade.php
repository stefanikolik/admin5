@extends('layouts.app')

@section('title', 'Admin - KumanovoNews')

@section('content')

<form class="ui form">
	{{csrf_field()}}
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
		
			
				<div class="sixteen wide column">

					<div class="field">
						<label>Мала слика</label>
						<input name="litlePhoto" placeholder="url" type="text">
					</div>


					<div class="field">
						<label>Вовед</label>
						<textarea></textarea>
					</div>

					<div class="field">
							<label>Текст</label>
							<textarea></textarea>
						</div>
					
					<div class="field">
						<label>Голема слика</label>
						<input name="bigPhoto" placeholder="url" type="text">
					</div>


					<div class="field">
						<label>Видео код</label>
						<input name="video" placeholder="url" type="text">
					</div>

				</div>
				
<button class="ui primary button" style="float: right;">
  Save
</button>

		</div>
</form>

@endsection