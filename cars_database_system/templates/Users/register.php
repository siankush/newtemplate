<style>
   .error{
      color: red;
   } 
</style>    
<?php 
// $template = ['inputContainer'=>'<div class="input-group input-group-outline my-3">{{content}}</div>'];
// $this->Form->setTemplates($template);
?>  
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              Material Dashboard 2
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-up.html">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-in.html">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-flex d-none">
                <li class="nav-item d-flex align-items-center">
                  <a class="btn btn-outline-primary btn-sm mb-0 me-2" target="_blank" href="https://www.creative-tim.com/builder/material?ref=navbar-dashboard">Online Builder</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/product/material-dashboard" class="btn btn-sm mb-0 me-1 bg-gradient-dark">Free download</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
            <div class="card-body">
              <?= $this->Form->create($user,['enctype'=>'multipart/form-data','id'=>'formid']) ?>
              <div class="input-group w-100 input-group-outline mb-3">
             
              
                  <?php echo $this->Form->control('name',['class'=>'form-control ','required' => false]); ?>
                   
                  <?php echo $this->Form->control('email', ['class'=>'form-control','required' => false]) ?>
               
                  <?php echo $this->Form->control('password', ['class'=>'form-control','required' => false]) ?>
                   
                  <label> Image</label>
                  <?php echo $this->Form->control('usrimage', ['type'=>'file','label'=>false,'class'=>'form-control','required' => false]) ?>

                    <div class="form-check form-check-info text-start mt-2 ps-0">
                      <input class="form-check-input form_check" type="checkbox" name="boxcheck" value="" id="flexCheck" >
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div style="display:none; color:red" id="agree_chk_error">please accept terms and condition!</div>
                    </div> 
                    <?= $this->Form->submit(__('Sign Up'), ['class'=>'btn bg-gradient-primary w-100 my-4 mb-2']); ?> 
                  

                  <p class="mt-4 text-sm text-center">
                   Already have an account?
                    <?= $this->Html->link(__('Sign in'), ['class'=>'text-primary text-gradient font-weight-bold','controller'=>'Users','action' => 'login'])?>
                  </p>
                  <?= $this->Form->end() ?> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>

$(document).ready(function(){
    $("#formid").validate({
  
    rules: {
        name:{
            required: true,
            minlength : 3,
            text: true
        },

        email: {
            required : true,
            email : true,
            // remote:{ 
            //   url: "checkemail.php",
            //   type: "POST",
            //  },
        },
        password: {
            required : true,
        },
        usrimage: {

          required: true,
        },
        boxcheck: {
            
            required: true,
        },
        
       
    },
    messages: {
        name: {
            required: "please enter name",
            minlength: "length atleast 3 characters",
            text: "please enter alphabets",
        },

        email: {
            required : "please enter email",
            email: "please enter valid email address",
            remote: "email exist",
        },
        password :{
            required: "please enter password",
        },
        usrimage :{

          required: "please select image",
        },
        boxcheck: {
            required: "please check box",
        },
        
    }, 

  
//     submitHandler: function(form){

//   $('#formid').on('submit', function(e) {
//          e.preventDefault();
//         //  alert('hnfeg');
//          var formData = new FormData(this);
//         //  alert(formData);
//          $.ajax({
//              url: "http://localhost:8765/users/register",
//              type: "POST",
//              cache: false,
//              data: formData,
//              processData: false,
//              contentType: false,
//              dataType: "JSON",
//              success: function(data) {
//                 alert(data);
                
//                 }
//             });
//             // return false;
//   });
// } 
    })

});    



</script>    