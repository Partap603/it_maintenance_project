<div class="page-section">
    <div class="container">
      <h1 style="color:blue" class="text-center "><b>Make Request</b></h1>

      <form class="main-form" action="{{url('upload_request')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          
            <input type="text" class="form-control" placeholder="Student Number" name="student_id">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Phone Number" name="phone">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Type of Service" name="type">
          </div>
        </div>
        <input type="submit" class="btn btn-primary" style="background-color: #3081D0;">
      </form>
    </div>
  </div> <!-- .page-section -->