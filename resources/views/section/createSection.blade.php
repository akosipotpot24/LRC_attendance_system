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

              <label for="cardnumber">Section:</label>
              <input type="text" name="section" class="form-control" id="cardnumber" >
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
</x-layout>
