<style>
  .input-group.input-group-outline .form-control {
    width: 40rem;
  }
 </style> 
<?php echo $this->element('flash/asidebar'); ?>
 
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php echo $this->element('flash/navbar'); ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Car</h6>
              </div>
            </div>
        <div class="card-body px-0 pb-2">
              <div class="table-responsive row p-0">
          <table class="table align-items-center mb-0">
                    <tbody> 
                    <div class="row">
             <aside class="column">
              </aside>
             <div class="col-lg-6 m-auto mt-4 mb-5">
             <div class="" style="padding: 70px;">
             <div class="input-group w-100 m-auto input-group-outline mb-3">
            <?= $this->Form->create($car,['enctype'=>'multipart/form-data'],['id'=>'formid']) ?>
            <fieldset>

                <?php
                    echo $this->Form->control('name',['required' => false, 'class'=>'form-control p-2']);
                    echo "<br></br>";
                    echo $this->Form->control('brand_id', ['options' => $brands ,'class'=>'form-control p-2']);
                    echo "<br></br>";
                    echo $this->Form->control('model',['required' => false, 'class'=>'form-control p-2']);
                    echo "<br></br>";
                    echo '<label for="make">Make</label>';
                    echo $this->Form->select('make', [
                        '2012' => '2012',
                        '2013' => '2013',
                        '2014' => '2014',
                        '2015' => '2015',
                        '2016' => '2016',
                        '2017' => '2017',
                        '2018' => '2018',
                        '2019' => '2019',
                        '2020' => '2020',
                        '2021' => '2021',
                        '2022' => '2022',
                        '2023' => '2023',
                    ],
                    ['class'=>'form-control p-2']
                );
                    echo "<br></br>";
                    echo "<label>Color</label>";
                    echo $this->Form->select(
                        'color',
                        ['black'=>'black','white'=>'white','grey'=>'grey',],['class'=>'form-control p-2']);

                    echo "<br></br>";
                    echo $this->Form->control('description',['required' => false, 'type'=>'textarea','class'=>'form-control p-2']);
                    echo "<br></br>";
                    echo $this->Form->control('image',['required' => false,'type'=> 'file','class'=>'form-control']);
                    echo "<br></br>";
                ?>
                    </div>
                </fieldset>
                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0']) ?>
                <?= $this->Form->end() ?>

                    </div>
                     </div>
                  </div>
                    </tbody> 
            </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php echo $this->element('flash/footer'); ?>
  </div>
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
        name: {
            required : true,
            // remote:{ 
            //   url: "checkemail.php",
            //   type: "POST",
            //  },
        },
        password: {
            required : true,
        },
        
       
    },
    messages: {
        name: {
            required : "please enter name",
        },
        password :{
            required: "please enter password",
        },
        
    }, 

    })  

});    



</script>

