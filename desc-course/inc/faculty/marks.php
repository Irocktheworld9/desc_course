<div class="row">
	<form name="faculty_marks" class="col s12">
		<div class="row ">
			<div class="input-field col s4">
				 <select>
			      <option value="" disabled selected>Chose your option</option>
			      <option value="1">MCA</option>
			      <option value="2">M.Sc.</option>
			      <option value="3">M.Tech.</option>
			  </select>
			  <label>Course</label>
			</div>
			<div class="input-field col s4">
				 <select>
			      <option value="" disabled selected>Chose your option</option>
			      <option value="1">Subject 1</option>
			      <option value="2">Subject 2</option>
			      <option value="3">Subject 3</option>
			  </select>
			  <label>Subject</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				 <select>
			      <option value="" disabled selected>Chose your option</option>
			      <option value="1">Internal</option>
			      <option value="2">External</option>
			  </select>
			  <label>Exam</label>
			</div>
			<div class="input-field col s4">
				 <select>
			      <option value="" disabled selected>Chose your option</option>
			      <option value="1">Internal 1</option>
			      <option value="2">Internal 2</option>
			      <option value="3">Internal 3</option>
			  </select>
			  <label>Internal</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				 <select>
			      <option value="" disabled selected>Chose your option</option>
			      <option value="1">MCA</option>
			      <option value="2">M.Sc.</option>
			      <option value="3">M.Tech.</option>
			  </select>
			  <label>Admission Year</label>
			</div>
		</div>

		<button class="btn waves-effect waves-light" type="submit" name="action">Submit
			<i class="material-icons right">send</i>
		</button>
	</form>
</div>

<?php
/*
1.	Select the course
2.	Select the subject(If the faculty has multiple subject under a single course)
3.	Select the year of students
4.	Select Internal/External
5.	Select Internal number
6.	Table details for marks:
	i.	Registration No.
	ii.	Internal 1
	iii.Internal 2
	iv.	Internal 3
	v.	External 4

7.Condition:
	i.	Depending on the internal number selected by the faculty, only that field will be active*/
?>