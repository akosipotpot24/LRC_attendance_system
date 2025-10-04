<x-layout>
    <form action="/createsection" method="POST" >
    @csrf
    @if (session()->has('success'))
    <div class="container container--narrow">
        <div class="alert alert-success text-center">
        {{ session('success') }}
        </div>
    </div>
    @endif

    @if (session()->has('failure'))
    <div class="container container--narrow">
    <div class="alert alert-danger text-center">
        {{ session('failure') }}
    </div>
    </div>
    @endif

   <div class="card-body">
         <div class="">
          Note: Please make sure to input the CORRECT Section name
          <br>
          to avoid error in statistics
         </div>



    <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="card shadow">
        <div class="card-header clearfix">
    <h3 class="mb-0 text-center">CREATE SECTION
        <a href="{{ url()->previous() }}" class="btn btn-danger btn-sm float-right">Back</a>
    </h3>
    </div>
        <div class="card-body">
          <div class="row g-4">


             <div class="col-lg-4">
              <label for="branchcode">Location:</label>
              <select name="grade_level_code" id="grade_level_code" class="form-control">
                <option value="preschool" >PRESCHOOL</option>
                <option value="gradeschool" >GRADESCHOOL</option>
                <option value="highschool" >HIGH SCHOOL</option>
                <option value="college" >COLLEGE</option>
              </select>
            </div>

            <div class="col-lg-4">
              <label for="cardnumber">Section:</label>
              <input type="text" name="section" class="form-control" id="section
              " >
            </div>


            <div class="col-lg-2 d-flex align-items-end justify-content-center mt-4 mb-3">
              <button class="btn btn-success w-100">Submit</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>




   <div class="container  mb-5  ">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-lg ">
                <div class="card-header text-center">
                    <h2>Sections

                    </h2>
                </div>
                <div class="card-body">
                    <table id="ABENG" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                             <th>Grade level</th>
                             <th>Section</th>
                             <th>Action</th>


                                {{-- <th>Action</th> -- --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sections as $section)
                            <tr>
                             <td>{{ $section['grade_level_code'] }}</td>
                              <td>{{ $section['section'] }}</td>

                                 <td >
                                     <a href="/editcollege/{{$section->borrowernumber}}" title="EDIT"><i style ="color:green;" class="fa-solid fa-pen"></i></a>
                                     {{-- <a href="/view/{{$section->borrowernumber}}"><i class="fa-solid fa-user"></i></a>  --}}
                                     {{-- <a href="{{ route('borrowers.deactivate', $section->borrowernumber) }}" title="DEACTIVATE MAM WENA WAG MONG PINDUTIN PLEASE">   <i style="color: red;" class="fa-solid fa-trash-can"></i></a> --}}

                                     {{-- <form action="/delete/{{ $section->borrowernumber }}" method="POST" style="display: inline-block; margin-right: 5px;">
                                         @csrf
                                         @method('DELETE')
                                         <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                             <i style="color: red;" class="fa-solid fa-trash-can"></i>
                                         </button>
                                     </form> --}}
                                 </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layout>
