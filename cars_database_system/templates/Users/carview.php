<style>
  .input-group.input-group-outline .form-control {
    width: 40rem;
  }
   .error{
      color: red;
   } 
</style>    
  
 </style> 
<?php echo $this->element('flash/asidebar'); ?>
 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder/material?ref=navbar-dashboard">Online Builder</a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="/users/login" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"><?php echo $name; ?></span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">View Car</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2 ">
              <div class="table-responsive row p-0">
               
             
                
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                       <?= $this->Html->image($car->image,['width'=> '300px']) ?>
                    </div>
                    <div class="col-md-6 mt-4 ps-5">
                        <div class="row">
                            <div class="col-md-6 pb-2 font-weight-bold"><?= __('Title') ?></div>
                            <div class="col-md-6 pb-2"><?= h($car->name) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pb-2 font-weight-bold" ><?= __('Brand') ?></div>
                            <div class="col-md-6 pb-2"><?= h($car->brand->name) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6  pb-2 font-weight-bold"><?= __('Model') ?></div>
                            <div class="col-md-6 pb-2"><?= h($car->model) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6  pb-2 font-weight-bold"><?= __('Make') ?></div>
                            <div class="col-md-6 pb-2"><?= h($car->make) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6  pb-2 font-weight-bold"><?= __('Color') ?></div>
                            <div class="col-md-6 pb-2"><?= h($car->color) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6  pb-2 font-weight-bold"><?= __('Description') ?></div>
                            <div class="col-md-6"><?= h($car->description) ?></div>
                        </div>
                    </div>
               </div>
           </div>


          <div class="table-responsive mt-5">

            <ul class="list-group ms-4">
              <?php foreach ($ratings as $rating): ?>
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark"><?= h('User -') ?></strong> &nbsp; <?= ucfirst($rating->name) ?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?= h('Rating -') ?></strong> &nbsp; <?= h($rating->rating) ?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?= h('Review -') ?></strong> &nbsp; <?= h($rating->review) ?></li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark"><?= __('Actions -') ?></strong> &nbsp; <?= $this->Form->postLink(__('Delete'), ['controller'=>'Ratings','action' => 'delete', $rating->id,$car->id], ['confirm' => __('Are you sure you want to delete ?', $rating->id)]) ?></li>
                <hr>
                <?php endforeach; ?>

            </ul>

          </div>

            <div class="row">
           <div class="column-responsive column-80">
               <div class="ratings form content">
            <?= $this->Form->create(null,['id'=>'formid']) ?>
                <legend><?= __('Add Rating') ?></legend>
                <div class="input-group input-group-outline mb-3">
                <?php
                    // echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    // echo $this->Form->control('car_id', ['options' => $cars, 'empty' => true]);
                    echo $this->Form->select('rating', [
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ],
                    ['class'=>'form-control']
                );
                    echo $this->Form->control('review',['type'=>'textarea','class'=>'form-control']);
                    // echo $this->Form->control('status');
                    // echo $this->Form->control('created_at');
                    // echo $this->Form->control('modified_at');
                ?>
              </div>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
            </div>
         </div>
           </div>

        </div>
             <div class="row">
               <div class="col-12">
                 <div class="card my-4">
                <!-- <div class="card-body px-0 pb-2">
                  <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                </table>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-2"></div>
      </div>
    </div>
    <?php echo $this->element('flash/footer'); ?>
</main>

  <!--   Core JS Files   -->

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script>
  $(document).ready(function(){
    $("#formid").validate({
  
    rules: {
      review:{
            required: true,
            maxlength : 100,
        },
        
       
    },
    messages: {
      review: {
            required: "please enter description",
            maxlength: "maxlength 100 characters",
        },
        
    }, 


    })

});    
</script>