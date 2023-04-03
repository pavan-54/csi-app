<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IOTOMATIC - REGISTER</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <img src="{{ asset('img/csi-poster.jpg') }}"
                  class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">IOTOMATIC Registration Form</h3>
                  @include('partials.error')
      
                  <form class="px-md-2" method="POST" action="/">

                    @csrf
                    <div class="form-outline mb-4">
                      <h3 class="text-danger">"Registratons are closed"</h3>
                    </div>
      
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1q">Name</label>
                      <input type="text" id="form3Example1q" name="name" class="form-control" />
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <label class="form-label" for="gender">Select Your Gender</label>
                        <select name="gender" class="select">
                          <option value="" >Gender</option>
                          <option value="2">Female</option>
                          <option value="3">Male</option>
                          <option value="4">Other</option>
                        </select>
      
                      </div>
                    </div>
      
                    <div class="mb-4">
                    <label class="form-label" for="branch">Select Your Branch</label>
                      <select name="branch" class="select">
                        <option value="" >Branch</option>
                        <option value="2">CSE-A</option>
                        <option value="3">CSE-B</option>
                        <option value="4">CSE-C</option>
                        <option value="5">CSE-D</option>
                        <option value="6">IT-A</option>
                        <option value="7">IT-B</option>
                        <option value="8">IT-C</option>
                        <option value="9">CSIT</option>
                        <option value="10">CSD</option>
                        <option value="11">CSC</option>
                        <option value="12">CSM</option>
                      </select>
      
                    </div>
      
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                      <div class="col-md-6">
      
                        <div class="form-outline">
                          
                          <label class="form-label" for="form3Example1w">Enter Your Email</label>
                          <input type="email" name="email" id="form3Example1w" class="form-control" />
                        </div>
      
                      </div>
                      <div class="col-md-6">
      
                        <div class="form-outline">
                          
                          <label class="form-label" for="form3Example1w">Enter Roll No</label>
                          <input type="text" name="roll" id="form3Example1w" class="form-control" />
                        </div>
      
                      </div>
                    </div>
        
                  </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>