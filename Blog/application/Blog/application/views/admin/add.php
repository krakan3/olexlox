<section class='add'>
	<p>Добавить пост</p>
	<form method='post' enctype="multipart/form.data">
		<p>Название</p>
		<input type='name' placeholder="Name"></input>
		<p>Описание</p>
		<input type='name' placeholder="Description"></input>
		<p>Текст</p>
		<input type='name' placeholder="Text"></input>
		<p>Изображение</p>
		<div class="input__wrapper">
   <input name="file" type="file" name="file" id="input__file" class="input input__file" multiple>
   <label for="input__file" class="input__file-button">
      <span class="input__file-icon-wrapper"><i class="fas fa-upload"></i></span>
      <span class="input__file-button-text">Выберите файл</span>
   </label>
</div>
		<button type='submit'>Submit</button>
	</form>
</section>