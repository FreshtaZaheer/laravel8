
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{mix('css/app.css')}}" rel = "stylesheet" />
    </head>

    <body class="bg-gray-300" >
        <div class="container">
        <div class=" form-group col-12 p-0">
        @if(Session:: has('success'))
        <div class=" alert alert-succes">
        {{Session:: get('success')}}
        </div>
        @endif
        </div>
        
        <form action="{{route('store')}}" mothod="POST"> 
        
        @csrf
        <div class="form-group ">
        <div class="gride gride-col-12">
           <h2 class="text-center text-blue-700">Student Details</h2>
        </div>
        </div>
        <hr>

        <div class="row">
        <div class=" form-group mx-8 my-8 col-md-6  ">
        <label for="">Student Name</label>
        <input type="text" name="name" class="form-control ml-5 " placeholder="Student Name here">
        </div>
        <div class=" form-group mx-8 my-8 col-md-6 ">
        <label for="">Course</label>
        <input type="text" name="course" class="form-control ml-5 " placeholder="Course Name here">
        </dive>
        <div class=" form-group mx-8 my-8 col-md-6 ">
        <label for="">Fee</label>
        <input type="text" name="fee" class="form-control ml-5 " placeholder="Fee">
        </dive>
        <div class=" form-group mx-8 my-8 col-md-6 align-center   ">
        <button type="button " class="bg-green-300 border-2 border-gray-600">Submit</button>
       
        </dive>


        </div>

        </form>
        


         </div>
    </body>
</html>