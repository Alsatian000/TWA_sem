


<div id="pridani_pacienta_page">
	
	<h1><b>Přidání nového pacienta</b> </h1>	<br><br>

	<input type="text" placeholder="Jméno"/><br/>
	<input type="text" placeholder="Příjmení"/><br/>
	<input type="text" placeholder="Rodné číslo"/><br/>
	<input type="text" placeholder="Datum narození"/><br/>
	<input type="text" placeholder="Státní příslušnost"/><br/>
	<input type="text" placeholder="Místo narození"/><br/>
	
	<input list="browsers">
	<datalist id="browsers">
		<option value="Diagnoza 1">
		<option value="iagnoza 2">
		<option value="iagnoza 3">
		<option value="iagnoza 4">
		<option value="iagnoza 5">
	</datalist> <br>

	<!--<input type="text" placeholder="Upřesnění diagnózy"/><br/>-->
	<input type="textarea" title="upresneni" name="upresneni" value="001">
	<select><br/>
		<option>RVP 1</option>
		<option>RVP 2</option>
	</select><br/>

	<div class="checkbox">
		<input type="checkbox" value="None" id="checkbox" name="check" />
		<label for="checkbox"></label>
		<h3><b>&nbsp;&nbsp;Jednorázově</b></h3>
	</div> <br>
	
	<input type="text" placeholder="Datum přijetí"/><br/>
	<input type="text" placeholder="Datum ukončení"/><br/>

	<select><br/>
		<option>Základka</option>
		<option selected="Zařízení">MŠ</option>
	</select><br/>

	<h3><b>&nbsp;&nbsp;Bydliště</b></h3> <br>
	<input type="text" placeholder="Ulice"/><br/>
	<input type="text" placeholder="ČP"/><br/>
	<input type="text" placeholder="Město"/><br/>
	<input type="text" placeholder="PSČ"/><br/>

	<h3><b>&nbsp;&nbsp;Zákonný zástupce</b></h3> <br>
	<input type="text" placeholder="Jméno"/><br/>
	<input type="text" placeholder="Příjmení"/><br/>
	<div class="checkbox">
		<input type="checkbox" value="None" id="checkbox" name="check" />
		<label for="checkbox"></label>
		<h3>&nbsp;&nbsp;Je-li adresa shodná, zaškrněte, <br>&nbsp;&nbsp; nevyplňujte</h3> <br>
	</div>

	<input type="text" placeholder="Ulice"/><br/>
	<input type="text" placeholder="ČP"/><br/>
	<input type="text" placeholder="Město"/><br/>
	<input type="text" placeholder="PSČ"/><br/>

	<input type="button" value="Uložit data"/><br/>
	

</div>
	

