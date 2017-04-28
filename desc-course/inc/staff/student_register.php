<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Add New Student</a></li>
	    <li class="tab col s6"><a href="#test2">Update Student Details</a></li>
	  </ul>
	</div>

	<!--Add New Student-->

	<div id="test1" class="col s12">
		<div class=" row">
			<form name="student_add" class="col s12">
				<div class="row">
			        <div class="input-field col s6">

			          <input  id="reg_no" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="reg_no" data-error="wrong" data-success="right">Registration Number</label>
			        </div>

			        <div class="input-field col s6">

			          <input  id="id_no" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="id_no" data-error="wrong" data-success="right">ID Card Number</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			        	<i class="material-icons prefix">account_circle</i>
			          <input  id="first_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="first_name" data-error="wrong" data-success="right">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			        	<i class="material-icons prefix">account_circle</i>
			          <input  id="father_first_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="father_first_name" data-error="wrong" data-success="right">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="father_last_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="father_last_name" data-error="wrong" data-success="right">Last Name</label>
			        </div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					<i class="material-icons prefix">today</i>
      					<input id="dob" type="date" class="datepicker">
      					<label for="dob">Date of Birth</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					<p class="col s6">
      						<label for="gender">Gender</label><br>
					      	<input name="gender" type="radio" id="male" />
					      	<label for="male">Male</label>
					      	<input name="gender" type="radio" id="female" />
					      	<label for="female">Female</label>
					    </p>
      				</div>

      				<div class="input-field col s6">
			          <input  id="blood_group" type="text" class="validate" pattern="[A-Z+-]+">
			          <label for="blood_group" data-error="wrong" data-success="right">Bloog Group</label>
			        </div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					<i class="material-icons prefix">phone</i>
      					<input id="phone" type="text" class="validate" pattern="[0-9]+" data-length="10">
      					<label for="phone" data-error="wrong" data-success="right">Phone</label>
      				</div>
      		
      				<div class="input-field col s6">
      					<i class="material-icons prefix">email</i>
      					<input id="email" type="email" class="validate">
          				<label for="email" data-error="wrong" data-success="right">Email</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s12">
      					<i class="material-icons prefix">location_on</i>
      					<textarea id="primary_add" class="materialize-textarea" data-length="100"></textarea>
          				<label for="primary_add" data-error="wrong" data-success="right">Primary Address</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s12">
      					<p>
					      <input type="checkbox" id="add" />
					      <label for="add">Local address is same as Primary address</label>
					    </p>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s12">
      					<i class="material-icons prefix">location_on</i>
      					<textarea id="local_add" class="materialize-textarea" data-length="100"></textarea>
          				<label for="local_add" data-error="wrong" data-success="right">Local Address</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					 <select>
						      <option value="" disabled selected>Chose your option</option>
						      <option value="1">General</option>
						      <option value="2">OBC</option>
						      <option value="3">SC</option>
						      <option value="4">ST</option>
						    </select>
						    <label>Category</label>
      				</div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
      					 <select>
						      <option value="" disabled selected>Chose your option</option>
						      <option value="1">Integrated</option>
						      <option value="2">M.Sc.</option>
						      <option value="3">MCA</option>
						      <option value="4">M.Tech.</option>
						      <option value="5">PhD</option>
						    </select>
						    <label>Course</label>
      				</div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix">today</i>
			          	<input id="doa" type="date" class="datepicker">
      					<label for="doa">Date of Admission </label>
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
			<form name="student_search" class="col s12">
				<div class="row">
			        <div class="input-field col s4">
      					 <select>
						      <option value="" disabled selected>Chose your option</option>
						      <option value="1">Integrated</option>
						      <option value="2">M.Sc.</option>
						      <option value="3">MCA</option>
						      <option value="4">M.Tech.</option>
						      <option value="5">PhD</option>
						    </select>
						    <label>Course</label>
						    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
								<i class="material-icons right">send</i>
							</button>
      				</div>

      				<div class="input-field col s4">

			          <input  id="reg_no" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="reg_no" data-error="wrong" data-success="right">Registration Number</label>
			        </div>
      			</div>
			</form>

			<hr>
			<hr>
			
			<form name="student_update" class="col s12">
				<div class="row">
			        <div class="input-field col s6">

			          <input  id="reg_no" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="reg_no" data-error="wrong" data-success="right">Registration Number</label>
			        </div>

			        <div class="input-field col s6">

			          <input  id="id_no" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="id_no" data-error="wrong" data-success="right">ID Card Number</label>
			        </div>
			    </div>
				 <div class="row">
			        <div class="input-field col s6">
			        	<i class="material-icons prefix">account_circle</i>
			          <input  id="first_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="first_name" data-error="wrong" data-success="right">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="last_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
			        </div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
			        	<i class="material-icons prefix">account_circle</i>
			          <input  id="father_first_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="father_first_name" data-error="wrong" data-success="right">First Name</label>
			        </div>
			        <div class="input-field col s6">
			          <input id="father_last_name" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="father_last_name" data-error="wrong" data-success="right">Last Name</label>
			        </div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					<i class="material-icons prefix">today</i>
      					<input id="dob" type="date" class="datepicker">
      					<label for="dob">Date of Birth</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					<p class="col s6">
      						<label for="gender">Gender</label><br>
					      	<input name="gender" type="radio" id="male" />
					      	<label for="male">Male</label>
					      	<input name="gender" type="radio" id="female" />
					      	<label for="female">Female</label>
					    </p>
      				</div>

      				<div class="input-field col s6">
			          <input  id="blood_group" type="text" class="validate" pattern="[A-Z+-]+">
			          <label for="blood_group" data-error="wrong" data-success="right">Bloog Group/label>
			        </div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					<i class="material-icons prefix">phone</i>
      					<input id="phone" type="text" class="validate" pattern="[0-9]+" data-length="10">
      					<label for="phone" data-error="wrong" data-success="right">Phone</label>
      				</div>
      		
      				<div class="input-field col s6">
      					<i class="material-icons prefix">email</i>
      					<input id="email" type="email" class="validate">
          				<label for="email" data-error="wrong" data-success="right">Email</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s12">
      					<i class="material-icons prefix">location_on</i>
      					<textarea id="primary_add" class="materialize-textarea" data-length="100"></textarea>
          				<label for="primary_add" data-error="wrong" data-success="right">Primary Address</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s12">
      					<p>
					      <input type="checkbox" id="add" />
					      <label for="add">Local address is same as Primary address</label>
					    </p>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s12">
      					<i class="material-icons prefix">location_on</i>
      					<textarea id="local_add" class="materialize-textarea" data-length="100"></textarea>
          				<label for="local_add" data-error="wrong" data-success="right">Local Address</label>
      				</div>
      			</div>

      			<div class="row">
      				<div class="input-field col s6">
      					 <select>
						      <option value="" disabled selected>Chose your option</option>
						      <option value="1">General</option>
						      <option value="2">OBC</option>
						      <option value="3">SC</option>
						      <option value="4">ST</option>
						    </select>
						    <label>Category</label>
      				</div>
      			</div>

      			<div class="row">
			        <div class="input-field col s6">
      					 <select>
						      <option value="" disabled selected>Chose your option</option>
						      <option value="1">Integrated</option>
						      <option value="2">M.Sc.</option>
						      <option value="3">MCA</option>
						      <option value="4">M.Tech.</option>
						      <option value="5">PhD</option>
						    </select>
						    <label>Course</label>
      				</div>

			        <div class="input-field col s6">
			        	<i class="material-icons prefix">today</i>
			          	<input id="doa" type="date" class="datepicker">
      					<label for="doa">Date of Admission </label>
			        </div>
			    </div>

			    <button class="btn waves-effect waves-light"  type="update" name="action">Update
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</div>