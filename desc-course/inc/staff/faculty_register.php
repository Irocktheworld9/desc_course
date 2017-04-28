<div class="row">
	<div class="col s12">
	  <ul class="tabs" >
	    <li class="tab col s6"><a class="active" href="#test1">Add New Faculty</a></li>
	    <li class="tab col s6"><a href="#test2">Update Faculty Details</a></li>
	  </ul>
	</div>

	<!--Add New Faculty-->

	<div id="test1" class="col s12">
		<div class=" row">
			<form name="faculty_add" class="col s12">
				<div class="row">
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
			          <input  id="post" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="post" data-error="wrong" data-success="right">Post</label>
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
			        	<i class="material-icons prefix">today</i>
			          	<input id="doa" type="date" class="datepicker">
      					<label for="doa">Date of Joining</label>
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
			<form name="faculty_search" class="col s12">
      				<div class="input-field col s4">
			          <input  id="reg_no" type="text" class="validate" pattern="[a-zA-Z0-9]+">
			          <label for="reg_no" data-error="wrong" data-success="right">Registration Number</label>
			          <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
						<i class="material-icons right">send</i>
						</button>
			        </div>
      			</div>
			</form>

			<hr>
			<hr>

			<form name="faculty_update" class="col s12">
				<div class="row">
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
			          <input  id="post" type="text" class="validate" pattern="[a-zA-Z]+">
			          <label for="post" data-error="wrong" data-success="right">Post</label>
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
			        	<i class="material-icons prefix">today</i>
			          	<input id="doa" type="date" class="datepicker">
      					<label for="doa">Date of Joining</label>
			        </div>
			    </div>

			    <button class="btn waves-effect waves-light"  type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
</div>