<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	
		</style>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/update.css')}}">
</head>
<body class="body_body">
	<div class="main">

	<div class="headings">
				<h2> Update Data</h2>	
	

	<div class="updateForm">
		
		<form action="/update/{{$data->id}}" method="POST" enctype="multipart/form-data" >

			{{csrf_field()}}

		New Name....: <input class="input_name" value="{{$data->uploaded_by}}" type="text" name="new_Name" placeholder="Enter the name name" required > <br>


		New Category: <select class="input_category" name="new_Category" >  
	       <option value="Mobile" <?php if ($data->category =='Mobile') {
	       echo "selected"; }?>>  Mobile </option>

	       <option value="Laptop" <?php if ($data->category =='Laptop') {
	       echo "selected";}?> > Laptop   </option>

	       <option value="Camera" <?php if ($data->category =='Camera') {
	       echo "selected";}?>> Camera  </option>
	            </select>
	            <br>
	        New Image.....: <input class="input_image" type="file" name="new_Image" required>
            
           <div class="update">
			<input  class="input_btn" type="submit" name="submit" value="Update">
			</div>		    
				
		</form>

     </div>
</body>
</html>