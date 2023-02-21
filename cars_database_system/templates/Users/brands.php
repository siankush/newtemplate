
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
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Users table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
              <table id="datatablesSimple" class="table align-items-center mb-0">
                <thead>      
                       <tr>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 "><?= $this->Paginator->sort('name') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('description') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3"><?= $this->Paginator->sort('status') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4 actions"><?= __('Action') ?></th>
                    </tr>
                  </thead>
                  <tbody> 
                    <?php foreach ($brands as $brand): ?>   
                      <?php if($brand->deletestatus == 1): ?>   
                     <tr id="data<?php echo $brand->id;?>">
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                           <!-- <?= $this->Html->image(h($brand->usrimage),['class'=>'avatar avatar-sm me-3 border-radius-lg','alt'=>'img_']); ?> -->
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= ucfirst($brand->name) ?></h6>
                    
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                      <h6 class="mb-0 text-sm"><?= ucfirst($brand->description) ?></h6>

                       </td>
                       <td class="align-middle text-sm">
                        <?php  if($brand->status == 1) : ?>

                       <!-- <?= $this->Form->postLink(__('Active'),['action' => 'userstatus', $brand->id, $brand->status],['class'=>'badge badge-sm bg-gradient-success'], ['confirm' => __('Are you sure you want to Inactive ?', $brand->id)]) ?> -->
                        <!-- <a href="javascript:void(0)" class="text-sm font-weight-bold mb-0 ms-2 delete-user"  data-id="<?= $brand->id ?>">Active</a> -->
                         <a href="" type="button" class="text-sm font-weight-bold mb-0 ms-2 delete-user edit-brand" data-bs-toggle="modal" data-bs-target="#myModal" editbrand-id ="<?= $brand->id ?>">Active</a>


                       <?php else : ?>

                       <!-- <?= $this->Form->postLink(__('Inactive'), ['action' => 'userstatus', $brand->id, $brand->status],['class'=>'badge badge-sm bg-gradient-secondary'], ['confirm' => __('Are you sure you want to Active ?', $brand->id)]) ?> -->
                        <!-- <a href="javascript:void(0)" class="text-sm font-weight-bold mb-0 ms-2 delete-user"  data-id="<?= $user->id ?>">Inactive</a> -->
                        <a href="" type="button" class="text-sm font-weight-bold mb-0 ms-2 delete-user" data-bs-toggle="modal" data-bs-target="#myModal">Inactive</a>


                       <?php endif; ?> 
                       </td>

                       <td class="actions">
                        <!-- <?= $this->Html->link(__('View'), ['action' => 'userview', $brand->id],['class'=>'text-sm font-weight-bold mb-0']) ?> -->
                        <!-- <a href="javascript:void(0)" class="text-sm font-weight-bold mb-0 ms-2 delete-user"  data-id="<?= $user->id ?>">Delete</a> -->
                        <a href="javascript:void(0)" class="text-sm font-weight-bold mb-0 ms-2 delete-brand" status-id="<?= $brand->deletestatus?>" data-id="<?= $brand->id ?>" >Delete</a>

                      </td>

                    </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    </tbody> 
                  </table>
                </div>
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
      </div>
    <?php echo $this->element('flash/footer'); ?>
    </div>
</main>

  <!--   Core JS Files   -->



<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <div class="d-flex">
         <p>These cars are related to this brands -  </p><p id="countp"> </p>
         
       </div>
       <p id="myproduct"></p>
       <div class="d-flex">
          <p>do you want to deactivate them</p>
          <button class="deactivecars">Click here</button>
       </div>
      <?= $this->Form->create() ?>
              <div class="input-group w-75 input-group-outline mb-2 ms-5">
             
              
                  <?php echo $this->Form->control('id',['class'=>'form-control ','required' => false],['id'=>'id'],['input'=>'hidden']); ?>
                   
                  <?php echo $this->Form->control('status', ['class'=>'form-control','required' => false],['id'=>'status'],['input'=>'hidden']) ?>

             </div> 
                    <!-- <?= $this->Form->submit(__('Submit'), ['class'=>'btn bg-gradient-primary w-75 my-4 mb-2 ms-6']); ?>  -->
                      <button type="button" class="btn bg-gradient-primary w-75 my-4 mb-2 ms-6" data-bs-dismiss="modal">Submit</button>


                  <?= $this->Form->end() ?> 



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> -->
      </div>

    </div>
  </div>
</div>  


<script type="text/javascript">

$(document).on("click", ".edit-brand", function(){
    var csrfToken = $('meta[name="csrfToken"]').attr('content');
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });

 var formData = $(this).attr("editbrand-id");
 

 $.ajax({
   url: "http://localhost:8765/Users/getbrand",
   method: "get",
    data: {'id':formData},
    type: "JSON",
    success:function(response){
        product = $.parseJSON(response);
                var myHtml = "";
                var countp = 0;
                $('#id').val(product['id']);
                $('#status').val(product['status']);
          
                $.each(product, function(k, v) {

                  if (k == 'cars') {
                    $.each($(this), function(index, value) {
                            if (value.status != 0) {
                                countp++;
                          
                                myHtml += "<li><span>" + value.name + "</span></li>";
                            }
                        });
                    }
                });

                $("#myproduct").html(myHtml);
                $('#countp').html(countp);
            },
  });
});    
  

$(document).on("click", ".deactivecars", function(){

var csrfToken = $('meta[name="csrfToken"]').attr('content');
   $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
      }
    });

var formData = $(this).attr("editbrand-id");

var status = $('#status').val(); 
var id = $('#id').val();


$.ajax({
          url: "http://localhost:8765/Users/deactivatecar",
          type: "JSON",
          method: "POST",
          data: {
              'id': id,
              'status': status,
          },
          success: function(response) {
            var data = JSON.parse(response);
        if (data['status'] == 0) {
           alert(data['message']);
       } else {
        swal("Cars related to brand deactivate", "success");

                  }
          $('#change-status').load('/users/table #change-status');
            $('#myModal').hide();
            $('.modal-backdrop').remove();
          }
      });
}); 



$(document).on("click", ".delete-brand", function(){
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });
    var formData = $(this).attr("data-id");
    var statusdata = $(this).attr("status-id");
    // alert(formData+statusdata) ;
    // return false;

      swal({
      title: "Are you sure to delete this of ?",
      text: "Delete Confirmation?",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Delete",
      closeOnConfirm: false
      },
      function() {
           $.ajax({
           url: "http://localhost:8765/users/deletebrand",
           data: {'id':formData,'deletestatus':statusdata},
           type: "JSON",
           method: "post",
           success:function(response){

               var dataArr = JSON.parse(response);
              alert(dataArr);
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
</script>   

</body>

</html>