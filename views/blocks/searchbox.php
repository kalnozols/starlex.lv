<div class="searchbox">
	<form>

	<input type="number" placeholder="Objekta ID" name="id">

	<label class="checklabel sm">
		<input class="toggle-show nonzerobk" type="checkbox" name="cb_d_from" >Pārdošana
		<span class="checkmark"></span>
	</label>

	<label class="checklabel sm">
		<input class="toggle-show nonzerobk" type="checkbox" name="cb_d_from"> Īre / Noma
		<span class="checkmark"></span>
	</label>

		<select name="rajons" placeholder="Rajons">
			<option>Rajons</option>
			<option>Jūrmala</option>
			<option>Rīga</option>
		</select>
		<input data-index="0" class="priceValue sm" type="number" placeholder="Cena no" > -
		<input data-index="1" class="priceValue sm" type="number" placeholder="Cena lidz" > 
		<div id="price-slider" ></div>

		<input data-index="0" class="areaValue sm" type="number" placeholder="Platība no" > -
		<input data-index="1" class="areaValue sm" type="number" placeholder="Platība lidz" > 
		<div id="area-slider" ></div>

	<input class="sm" type="number" placeholder="Telpas no" > -  <input  class="sm" type="number" placeholder="Telpas līdz" > 
	<input class="sm" type="number" placeholder="Stāvs no" > -  <input  class="sm" type="number" placeholder="Stāvi līdz" > 
		<select name="rajons" placeholder="Stāvoklis">
			<option>Slikts</option>
			<option>Jauns</option>
			<option>Rīga</option>
		</select>


	<label class="checklabel">
		<input class="toggle-show nonzerobk" type="checkbox" name="cb_d_from" >Tikai jaunajos projektos
		<span class="checkmark"></span>
	</label>

	<input type="submit" value="Atlasīt">

	<div class="see-on-map">
		<a><img src="../public/img/on-map-icon.png" /> Skatīt uz kartes </a>
	</div>

	</form>
</div>