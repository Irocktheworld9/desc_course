<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Add New Subject</a></li>
	    <li class="tab col s6"><a href="#test2">Update Subject Details</a></li>
	  </ul>
	</div>

	<!--Add New Subject-->

	<div id="test1" class="col s12">
		<div class=" row">
			<form name="subject_add" class="col s12">
				<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="course_id" data-error="wrong" data-success="right">Course ID</label>
			        </div>
			        <div class="input-field col s6">
			          <input  id="subject_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="subject_id" data-error="wrong" data-success="right">Subject ID</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			          <input  id="subject_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="subject_name" data-error="wrong" data-success="right">Subject Name</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			          <input  id="subject_credit" type="text" class="validate" pattern="[0-9]" Data-length="1">
			          <label for="subject_credit" data-error="wrong" data-success="right">Credit</label>
			        </div>

			        <div class="input-field col s4">
						<select>
					     	<option value="" disabled selected>Chose your option</option>
					     	<option value="1">Hardcore</option>
					     	<option value="2">Softcore</option>
					  	</select>
					  	<label>Type</label>
					</div>
      			</div>

      			<div class="row">
			        <div class="input-field col s4">
						<select>
					     	<option value="" disabled selected>Chose your option</option>
					     	<option value="1">1</option>
					     	<option value="2">2</option>
					     	<option value="2">3</option>
					     	<option value="2">4</option>
					     	<option value="2">5</option>
					     	<option value="2">6</option>
					  	</select>
					  	<label>Semester</label>
					</div>
      			</div>
			    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>


	<!--Update Student Details-->

	<div id="test2" class="col s12">
		<div class=" row">
			<form name="subject_search" class="col s12">
				<div class="input-field col s4">
					<select>
			      		<option value="" disabled selected>Chose your option</option>
			      		<option value="1">MCA</option>
			      		<option value="2">M.Sc.</option>
			      		<option value="3">M.Tech.</option>
			  		</select>
			  		<label>Corse</label>

			  		<button class="btn waves-effect waves-light"  type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
			  	</div>
      				<div class="input-field col s4">
			          	<input  id="subject_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          	<label for="subject_id" data-error="wrong" data-success="right">Subject ID</label>
			        </div>
			</form>

			<hr>
			<hr>

			<form name="subject_update" class="col s12">
				<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="course_id" data-error="wrong" data-success="right">Course ID</label>
			        </div>
			        <div class="input-field col s6">
			          <input  id="subject_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="subject_id" data-error="wrong" data-success="right">Subject ID</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			          <input  id="subject_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="subject_name" data-error="wrong" data-success="right">Subject Name</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			          <input  id="subject_credit" type="text" class="validate" pattern="[0-9]" Data-length="1">
			          <label for="subject_credit" data-error="wrong" data-success="right">Credit</label>
			        </div>

			        <div class="input-field col s4">
						<select>
					     	<option value="" disabled selected>Chose your option</option>
					     	<option value="1">Hardcore</option>
					     	<option value="2">Softcore</option>
					  	</select>
					  	<label>Type</label>
					</div>
      			</div>

      			<div class="row">
			        <div class="input-field col s4">
						<select>
					     	<option value="" disabled selected>Chose your option</option>
					     	<option value="1">1</option>
					     	<option value="2">2</option>
					     	<option value="2">3</option>
					     	<option value="2">4</option>
					     	<option value="2">5</option>
					     	<option value="2">6</option>
					  	</select>
					  	<label>Semester</label>
					</div>
      			</div>
			    <button class="btn waves-effect waves-light"  type="submit" name="action">Update
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</div>