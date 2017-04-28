<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Add New Course</a></li>
	    <li class="tab col s6"><a href="#test2">Update Course Details</a></li>
	  </ul>
	</div>

	<!--Add New Course-->

	<div id="test1" class="col s12">
		<div class=" row">
			<form name="subject_add" class="col s12">
				<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="course_id" data-error="wrong" data-success="right">Course ID</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			          <input  id="course_name" type="text" class="validate" pattern="[a-zA-Z.-_]+">
			          <label for="course_name" data-error="wrong" data-success="right">Course Name</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_duration" type="text" class="validate" pattern="[0-9]" Data-length="1">
			          <label for="course_duration" data-error="wrong" data-success="right">Duration(years)</label>
			        </div>

			        <div class="input-field col s6">
			          <input  id="total_credit" type="text" class="validate" pattern="[0-9]+" Data-length="2">
			          <label for="total_credit" data-error="wrong" data-success="right">Total Credit</label>
			        </div>
      			</div>
			    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>


	<!--Update Course Details-->

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
			</form>

			<hr>
			<hr>

			<form name="subject_update" class="col s12">
				<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_id" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="course_id" data-error="wrong" data-success="right">Course ID</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			          <input  id="course_name" type="text" class="validate" pattern="[a-zA-Z.-_]+">
			          <label for="course_name" data-error="wrong" data-success="right">Course Name</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			          <input  id="course_duration" type="text" class="validate" pattern="[0-9]" Data-length="1">
			          <label for="course_duration" data-error="wrong" data-success="right">Duration(years)</label>
			        </div>

			        <div class="input-field col s6">
			          <input  id="total_credit" type="text" class="validate" pattern="[0-9]+" Data-length="2">
			          <label for="total_credit" data-error="wrong" data-success="right">Total Credit</label>
			        </div>
      			</div>
			    <button class="btn waves-effect waves-light"  type="submit" name="action">Update
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</div>
