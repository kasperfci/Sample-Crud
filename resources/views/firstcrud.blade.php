
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">

	<title>FirstCrud</title>	
	
</head>
<body class="body_body">

	<div class="main_div">

			<div class="headings">
				<h2> My First Crud</h2>
				
			</div>
                <form action="store" method="POST" enctype="multipart/form-data" accept-charset="utf8" >
                	{{csrf_field()}}
			<div class="selections_div" dir="rtl">
                    <input 
                         class="input1"
                         type="file" 
                         name="image"    
                         required />                       
                
				<select class="input2" name="category"  required >
	                        <option value=""> Select Category </option>
	                        <option value="Mobile"> Mobile         </option>
	                        <option value="Laptop"> Laptop         </option>
	                        <option value="Camera"> Camera         </option>
	            </select>

                    <input 
                          class="input2" 
                          type="text" 
                          name="name" 
                          placeholder="your name"        
                          required  />

			</div>
			<div class="upload">
			<input  class="input_btn" type="submit" name="submit" value="upload">
			</div>
		</form>
		<hr >

		<div class="image"> <h2 > Images Uploaded </h2> </div>

        <div class="myTable" >
         <table width="100%" >
		    <tr class="mainTr">
		          <td >ID       </td>
		          <td > Name    </td>
		          <td>Category  </td>
		          <td>Image     </td>
		          <td>control   </td>
		          
		    </tr>
		    
		     @foreach($data as $d)
		    <tr class="dataTr">
		          <td >{{ $d->id }}</td>
		          <td > {{ $d->uploaded_by }}</td>
		          <td > {{ $d->category }}</td>
		          <td > <img  src="{{asset('files_uploaded')}}/{{$d->image}}" ></td>	
		          <td   > 
		          	<button class="delete"> <a href="delete/{{$d->id}}" >delete</a> </button>
		          	<button class="update"> <a href="update/{{$d->id}}" >update</a> </button>
		          </td>		          
		    </tr>
		    @endforeach
		  

       </table>
        </div>
    </div>
	</div>

</body>
</html>

