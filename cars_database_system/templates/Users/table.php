<body class="g-sidenav-show  bg-gray-200">
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
            <div class="input-group input-group-outline">
              <!-- <label class="form-label">Type here...</label> -->
              <form class="form-inline">
                        <input type="text" class="form-control" id="searchBox" type="search" placeholder="Search" aria-label="Search">
                    </form>
            </div>
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
        <div class="col-12">
          <!-- <div class="card my-4">

            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                </table>
              </div>
            </div>
          </div> -->
        </div>
      </div>

      <div class="row">
      <?php  echo $this->Form->select(
                        'status',
                    ['Inactive','active'],['empty' => '(choose one)','class'=>'form-control','id'=>'statuschange']);
                     ?>
        <div class="col-12">
          <div class="card my-4">
  
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Cars table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
                
             <?php echo $this->element('flash/tablelist'); ?> 


            </div>
          </div>
          <!-- <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
            </div> -->
        </div>
      </div>
      <?php echo $this->element('flash/footer'); ?>
    </div>
  </main>

  <!--   Core JS Files   -->


  <script type="text/javascript">
    
    function performSearch() {
      
      // Declare search string 
      var filter = searchBox.value.toUpperCase();
      
      // Loop through first tbody's rows
      for (var rowI = 0; rowI < trs.length; rowI++) {
        
        // define the row's cells
        var tds = trs[rowI].getElementsByTagName("td");

    // hide the row
    trs[rowI].style.display = "none";
    
    // loop through row cells
    for (var cellI = 0; cellI < tds.length; cellI++) {

        // if there's a match
        if (tds[cellI].innerHTML.toUpperCase().indexOf(filter) > -1) {

          // show the row
          trs[rowI].style.display = "";
          
            // skip to the next row
            continue;
            
          }
    }
}

}

// declare elements
const searchBox = document.getElementById('searchBox');
const table = document.getElementById("datatablesSimple");
const trs = table.tBodies[0].getElementsByTagName("tr");

// add event listener to search box
searchBox.addEventListener('keyup', performSearch);


$(document).ready(function(){    
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
  
  $('#statuschange').on('change', function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });
    
      var data = $(this).val();
      $.ajax({
        url: "http://localhost:8765/users/getcar",
        data: {'status':data},
        type: "json",
        method: "get",
        success:function(response){
          
          // code will work in case cakephp element render start here \
          $('.table-responsive').html(response);
          // code will work in case cakephp element render end here 
        }
      });
    });
  });

//   // $(document).on("click", ".delete-car", function(){
  
  // if(confirm("Are you sure want to delete ?")){
  
  // var formData = $(this).attr("data-id")
    
  //   $.ajax({
  //       url: "http://localhost:8765/users/cardelete",
  //       data: {'car_id':formData},
  //       type: "JSON",
  //       method: "get",
  //       success:function(response){
  
  //           var dataArr = JSON.parse(response);
  
  //           if(dataArr.status ==1 ){
  //             $("#data"+formData).hide();
  
  //           }
  //       }
  //   });
  // }
  // });

///////////////////for hard delete using ajax//////////////////////////// 

//   $(document).on("click", ".delete-car", function(){
    
//     var formData = $(this).attr("data-id");
//       swal({
//       title: "Are you sure to delete this  of ?",
//       text: "Delete Confirmation?",
//       type: "warning",
//       showCancelButton: true,
//       confirmButtonColor: "#DD6B55",
//       confirmButtonText: "Delete",
//       closeOnConfirm: false
//       },
//       function() {
//             $.ajax({
//                 url: "http://localhost:8765/users/cardelete",
//                 data: {'id':formData},
//                 type: "JSON",
//                 method: "get",
//                 success:function(response){
//                   swal("Done!","It was succesfully deleted!","success");
//                   var dataArr = JSON.parse(response);
//                   if(dataArr.status ==1 ){
//                     $("#data"+formData).hide();
        
//                   }
//                 }
//             }).done(function(data) {
//                 swal("Deleted!", "Data successfully Deleted!", "success");
//               })
//               .error(function(data) {
//                 swal("Oops", "We couldn't connect to the server!", "error");
//               });
//                   }
//       )
// });

///////////////////for soft delete using ajax /////////////////////////////////////////////////////

$(document).on("click", ".delete-car", function(){
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });
    var formData = $(this).attr("data-id");
    var statusData = $(this).attr("status-id");

      swal({
      title: "Are you sure to delete this  of ?",
      text: "Delete Confirmation?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Delete",
      closeOnConfirm: false
      },
      function() {
            $.ajax({
                url: "http://localhost:8765/users/cardelete",
                data: {'id':formData, 'deletestatus': statusData},
                type: "JSON",
                method: "post",
                success:function(response){
                  swal("Done!","It was succesfully deleted!","success");
                  var dataArr = JSON.parse(response);
                  if(dataArr.status ==1 ){
                    $("#data"+formData).hide();
        
                  }
                }
            }).done(function(data) {
                swal("Deleted!", "Data successfully Deleted!", "success");
              })
              .error(function(data) {
                swal("Oops", "We couldn't connect to the server!", "error");
              });
                  }
      )
});




  $(document).on("click", ".edit-car", function(){
    var csrfToken = $('meta[name="csrfToken"]').attr('content');
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });

 var formData = $(this).attr("editdata-id");

 

 $.ajax({
   url: "http://localhost:8765/Users/edit",
   method: "get",
    data: {'id':formData},
    type: "JSON",
    success:function(response){
     
      car = $.parseJSON(response);
             
                $('#name').val(car['name']);
                $('#brand').val(car['brand']['name']);
                $('#model').val(car['model']);
                $('#make').val(car['make']);
                $('#color').val(car['color']);
                $('#description').val(car['description']);
                $('#car_id').val(car['id']);
                // $('#image').val(car['image']);
                var image = car['image'];
                document.querySelector('#showimg').setAttribute('src', '/img/'+image);
    }
  });
});





$("#formid").validate({
  
    rules: {
        name:{
            required: true,
            minlength : 3,
            text: true
        },

        model: {
            required : true,
            minlength: 2,

            // remote:{ 
            //   url: "checkemail.php",
            //   type: "POST",
            //  },
        },
        description: {
            required : true,
            minlength: 10,
        },
        image: {
          required: true,
        },

        
       
    },
    messages: {
        name: {
            required: "please enter name",
            minlength: "length atleast 3 characters",
            text: "please enter alphabets",
        },

        model: {
            required : "please enter model",
            minlength: "atleast 2 character length",
         
        },
        description :{
            required: "please enter description",
            minlength: "atleast 10 character length",
        },
        image :{
          required: "please select image",
        },
        
    }, 

// $(document).on("click", ".formupdate", function(e){

  submitHandler: function (form){
  
 var formData = new FormData(form);
//  var formData = $(form).serialize();

// alert(formData);
 $.ajax({

    url: "http://localhost:8765/users/caredit",
    type: "JSON",
    method: "POST",
    cache: false,
    processData: false,
    contentType: false,
    data: formData,
    success: function (response) {
        var data = JSON.parse(response);
        // alert(data);
        if (data['status'] == 0) {
             alert(data['message']);
         } else {
          swal("Good job!", "The car has been saved!", "success");

                    }
            $('#change-status').load('/users/table #change-status');
              $('#myModal').hide();
              $('.modal-backdrop').remove();

                }
            });

      }
});
</script>

