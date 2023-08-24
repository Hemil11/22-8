 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="">
     <title>create Page</title>
     <style>
        .error {
            color: #F00;
            background-color: #FFF;
        }
     </style>
 </head>

 <body>

     <div class="container mt-5">
         <h1 class="d-flex justify-content-center mt-4">
             <---create new users--->
         </h1>
         <form class="form" id="form-data" method="POST" action="{{ route('user.store') }}"
             enctype="multipart/form-data">
             @csrf
             <!-- Name input -->

             <div class="form-outline mb-4">
                 <label class="form-label">Name :-</label>
                 <input type="text" id="name" class="form-control" name="name"sy placeholder="name" />
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">email :-</label>
                 <input type="email" id="email" class="form-control" name="email" placeholder="email" />
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">password :-</label>
                 <input type="password" id="password" class="form-control" name="password" placeholder="password" />
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">mo_no :-</label>
                 <input type="number" id="mo_no" class="form-control" name="mo_no" placeholder="mo_no" />
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">gender :-</label>&nbsp;&nbsp;&nbsp;
                 <input type="radio" value="male" name="gender"
                     placeholder="gender" checked    />male&nbsp;&nbsp;&nbsp;
                 <input type="radio" value="female" name="gender" placeholder="gender" />female
             </div>
            
             <div class="form-outline mb-4">
                 <label class="form-label">Date_Of_Birth :-</label>
                 <input type="date" id="dob" class="form-control" name="dob"
                     placeholder="Date_Of_Birth" />
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">hobby &nbsp;:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="checkbox" value="gaming" name="hobby[]" />&nbsp;gaming&nbsp;
                 <input type="checkbox" value="movie" name="hobby[]" />&nbsp;movie&nbsp;
                 <input type="checkbox" value="travel" name="hobby[]" />&nbsp;travel&nbsp;
                 <span  >(Optional)</span>
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">city &nbsp;:-</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <select id="city_id" class="form-control" placeholder="city" name="city_id">
                     @foreach ($cities as $city)
                         <option value="{{ $city->id }}">{{ $city->name }}</option>
                     @endforeach
                 </select>  
             </div>

             <div class="form-outline mb-4">
                 <label class="form-label">image :-</label>
                 <input type="file" id="image" class="form-control" name="image"
                     placeholder="Date_Of_Birth" />
             </div>
             <div class="form-outline mb-4">
                 <label class="form-label">description :-</label>
                 <textarea name="description" id="description" class="form-control"></textarea>
             </div>


             <!-- Submit button -->
             <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
         </form>
     </div>
     </div>
     <!-- Pills content -->
     </div>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
     integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
     integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script>
         $(document).ready(function() {
             
            $("#form-data").validate({
                 rules: {
                     name: {
                         required: true,
                     },
                     email: {
                         required: true,
                         email: true,
                     },
                     password: {
                         required: true,
                         maxlength: 4
                     },
                     mo_no: {
                        required: true,
                        minlength: 10
                    },
                    dob:{
                        required: true,
                    }
                },
                messages: {
                    dob: {
                        required: "Pleace Enter Your Date Of Birth"
                    },
                    mo_no: {
                        required: "Enter Your Phone Number",
                        minlength: "Name should be at least {0} characters long" // <-- removed underscore
                        }
                 },

 
 
             });


         });
     </script>
 </body>

 </html>
