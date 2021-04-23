@extends('layouts.app')

@section('content')
<div class="container">

<div class="row d-flex justify-content-around">
    

    <div class="col-md-8">

        
        @if($family)
        <div class="d-flex my-5  justify-content-around">

        <h1>Family Information</h1> 
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-dark font-weight-bold text-light" data-toggle="modal" data-target="#myModal">
        Edit family Information
        </button>




         <!-- Modal -->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" arialabelledby="
        exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                 <div class="modal-body">
                    <h2>Modal body heading</h2>
                    <form class="p-3" style="background-color: white" method="POST" action="/manage/family" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="imputs d-flex justify-content-around">

            
        
            <div class="left mr1 ">

                <!-- <h5 class="mt-5 mb-4  text-center">Family Details</h5> -->
            <div class="form-group">
                <label for="familyName">Family Name</label>
                <input name="family_name" value="{{$family->family_name}}" type="text" class="form-control" id="familyName" ariadescribedby="
                familyname" >
            </div>
        
            <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input name="father_name" value="{{$family->father_name}}" type="text" class="form-control" id="fatherName" ariadescribedby="
                fathername">
            </div>
            <div class="form-group">
                <label for="motherName">Mother's Name</label>
                <input name="mother_name" value="{{$family->mother_name}}" type="text" class="form-control" id="motherName" ariadescribedby="
                mothername">
            </div>
            <div class="form-group">
                <label for="maidName">Maid's Name</label>
                <input name="maid_name" value="{{$family->maid_name}}" type="text" class="form-control" id="maidName" ariadescribedby="
                maidname">
            </div>

            </div>
        
            
            <div class="right ml-1">

                <!-- <h5 class="mt-5 mb-4 text-center">Contact Information</h5> -->
            <div class="form-group">
                <label for="primaryPhone">Family Phone</label>
                <input name="phone" value="{{$family->phone}}" type="text" class="form-control" id="primaryPhone" ariadescribedby="
                familyphone" >
            </div>
            <div class="form-group">
                <label for="secondaryPhone">Alternative Phone</label>
                <input name="phone_alt" value="{{$family->phone_alt}}" type="text" class="form-control" id="secondaryPhone" ariadescribedby="
                secondaryphone" >
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" value="{{$family->email}}" class="form-control" id="exampleInputEmail1" ariadescribedby="
                emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                anyone else.</small>
            </div>

            
            <div class="form-group">
                <label for="exampleFormControlFile1">Family picture</label>
                <input name="image_url" type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

            </div>
        </div>
        <div class="thebutton">

            <div class="form-group">
                <label for="preferredcode">Preferred Code</label>
                <input name="preferred_check_code"  value="{{$family->preferred_check_code}}" type="text" class="form-control" id="preferredcode" ariadescribedby="
                preferredcode" >
            </div>


        </div>
        
        </form>
                    
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</
                        button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>

    </div>

    <!-- end of modal -->


        </div>

        <form class="p-3" style="background-color: white" method="POST" action="/manage/family" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="imputs d-flex justify-content-around">

            
        
            <div class="left mr1 ">

                <!-- <h5 class="mt-5 mb-4  text-center">Family Details</h5> -->
            <div class="form-group">
                <label for="familyName">Family Name</label>
                <input name="family_name" value="{{$family->family_name}}" type="text" class="form-control" id="familyName" ariadescribedby="
                familyname" >
            </div>
        
            <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input name="father_name" value="{{$family->father_name}}" type="text" class="form-control" id="fatherName" ariadescribedby="
                fathername">
            </div>
            <div class="form-group">
                <label for="motherName">Mother's Name</label>
                <input name="mother_name" value="{{$family->mother_name}}" type="text" class="form-control" id="motherName" ariadescribedby="
                mothername">
            </div>
            <div class="form-group">
                <label for="maidName">Maid's Name</label>
                <input name="maid_name" value="{{$family->maid_name}}" type="text" class="form-control" id="maidName" ariadescribedby="
                maidname">
            </div>

            </div>
        
            
            <div class="right ml-1">

                <!-- <h5 class="mt-5 mb-4 text-center">Contact Information</h5> -->
            <div class="form-group">
                <label for="primaryPhone">Family Phone</label>
                <input name="phone" value="{{$family->phone}}" type="text" class="form-control" id="primaryPhone" ariadescribedby="
                familyphone" >
            </div>
            <div class="form-group">
                <label for="secondaryPhone">Alternative Phone</label>
                <input name="phone_alt" value="{{$family->phone_alt}}" type="text" class="form-control" id="secondaryPhone" ariadescribedby="
                secondaryphone" >
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" value="{{$family->email}}" class="form-control" id="exampleInputEmail1" ariadescribedby="
                emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                anyone else.</small>
            </div>

            
            <div class="form-group">
                <label for="exampleFormControlFile1">Family picture</label>
                <input name="image_url" type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

            </div>
        </div>
        <div class="thebutton">

            <div class="form-group">
                <label for="preferredcode">Preferred Code</label>
                <input name="preferred_check_code"  value="{{$family->preferred_check_code}}" type="text" class="form-control" id="preferredcode" ariadescribedby="
                preferredcode" >
            </div>


        </div>
        
        </form>

        @else

        <div class="d-flex flex-column">

            <h6 class="mx-auto">No family record found</h6>
            <h1 class="mx-auto">Create Family</h1>
        
        </div>

        <form class="p-3" style="background-color: white" method="POST" action="/manage/family" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="imputs d-flex justify-content-around">

            
        
            <div class="left mr1 ">

                <h5 class="mt-5 mb-4  text-center">Family Details</h5>

                <input name="user_id" type="hidden" value="1"  ariadescribedby="id" >

            <div class="form-group">
                <label for="familyName">Family Name</label>
                <input name="family_name" type="text" class="form-control" id="familyName" ariadescribedby="
                familyname" >
            </div>
        
            <div class="form-group">
                <label for="fatherName">Father's Name</label>
                <input name="father_name" type="text" class="form-control" id="fatherName" ariadescribedby="
                fathername">
            </div>
            <div class="form-group">
                <label for="motherName">Mother's Name</label>
                <input name="mother_name" type="text" class="form-control" id="motherName" ariadescribedby="
                mothername">
            </div>
            <div class="form-group">
                <label for="maidName">Maid's Name</label>
                <input name="maid_name" type="text" class="form-control" id="maidName" ariadescribedby="
                maidname">
            </div>

            </div>
        
            
            <div class="right ml-1">

                <h5 class="mt-5 mb-4 text-center">Contact Information</h5>
            <div class="form-group">
                <label for="primaryPhone">Family Phone</label>
                <input name="phone" type="text" class="form-control" id="primaryPhone" ariadescribedby="
                familyphone" >
            </div>
            <div class="form-group">
                <label for="secondaryPhone">Alternative Phone</label>
                <input name="phone_alt" type="text" class="form-control" id="secondaryPhone" ariadescribedby="
                secondaryphone" >
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" ariadescribedby="
                emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                anyone else.</small>
            </div>

            
            <div class="form-group">
                <label for="exampleFormControlFile1">Family picture</label>
                <input name="image_url" type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
            <div class="form-group">
                <input name="image_url" type="hidden" value="8000/manage/family/create/" class="form-control-file" id="exampleFormControlFile1">
              </div>

            </div>
        </div>
        <div class="thebutton">

            <div class="form-group">
                <label for="preferredcode">Preferred Code</label>
                <input name="preferred_check_code" type="text" class="form-control" id="preferredcode" ariadescribedby="
                preferredcode" >
            </div>


            <button type="submit" class="d-block my-4 mx-auto btn btn-primary">Register</button>

        </div>
        
        </form>

        @endif

    </div>


    <div class="col-md-4 d-flex flex-md-column align-items-center">
 
       

       

    <h2>Children list</h2>

</div>



</div>
@endsection