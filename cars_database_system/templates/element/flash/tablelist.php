<div class="table-responsive p-0" id="change-status">
<table id="datatablesSimple" class="table align-items-center justify-content-center mb-0 tabledata">
                <thead>      
                       <tr>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?= $this->Paginator->sort('name') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('brand_id') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('model') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('make') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('color') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('description') ?></th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"><?= $this->Paginator->sort('status') ?></th>
                      <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                  </thead>
                  
                  
                  <?php foreach ($cars as $car): ?>
                    
                    <tr id="data<?php echo $car->id;?>">
                        <?php if($car->deletestatus == 1) : ?>   
                            <td>
                                <div class="d-flex px-2">
                                    <div>
                                        <!-- <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify"> -->
                                        <?= $this->Html->image(h($car->image),['class'=>'avatar avatar-sm rounded-circle me-2','alt'=>'img_']); ?>
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm"><?= h($car->name) ?></h6>
                                    </div>
                                </div>
                            </td>
                      <td>
                          <p class="text-sm font-weight-bold mb-0"><?= h($car->brand->name)?></p>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0"><?= h($car->model) ?></p>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0"><?= h($car->make) ?></p>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0"><?= h($car->color) ?></p>
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0"><?= h($car->description) ?></p>
                    </td>
                    <td>
                      
                        <?php  if($car->status == 1) : ?>
                            
                            <?= $this->Form->postLink(__('Active'),['action' => 'carstatus', $car->id, $car->status],['class'=>'badge badge-sm bg-gradient-success'], ['confirm' => __('Are you sure you want to Inactive ?', $car->id)]) ?>
                            <?php else : ?>
                                
                                <?= $this->Form->postLink(__('Inactive'), ['action' => 'carstatus', $car->id, $car->status],['class'=>'badge badge-sm bg-gradient-secondary'], ['confirm' => __('Are you sure you want to Active ?', $car->id)]) ?>
                                <?php endif; ?> 
                            </td>  
                       </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'carview', $car->id],['class'=>'text-sm font-weight-bold mb-0']) ?>
                            <a data-bs-toggle="modal" data-bs-target="#myModal" class='cursor-pointer text-sm font-weight-bold mb-0 edit-car' editdata-id ="<?= $car->id ?>">Edit </a>
                          
                            <!-- <?= $this->Html->link(__('Edit'), ['action' => 'caredit', $car->id],['class'=>'text-sm font-weight-bold mb-0']); ?> -->
                 
                            <a href="javascript:void(0)" class="text-sm font-weight-bold mb-0 delete-car" status-id= "<?= $car->deletestatus?>" data-id="<?= $car->id ?>">Delete</a>
                        </td>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                  </table>
                </div>

</div>



<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <div class="row">
          <div class="col-12">
           <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Edit Car</h6>
              </div>
            </div>

            <?= $this->Html->image(h($car->image), array('width' => '250px' ,'id' => 'showimg')) ?>



           <div class="card-body px-0 pb-2">
              <div class="table-responsive row p-0">
              <table class="table align-items-center mb-0">
                <tbody> 
                 <div class="row">
                  <div class="col-lg-6 mt-5 ms-5 mb-5">
                  <div class="input-group w-100 m-auto input-group-outline ">
                   <?= $this->Form->create(null,['enctype'=>'multipart/form-data','id'=>'formid']) ?>
                  <fieldset>
                  <input type="hidden" id="car_id" name="id">

                  <?php
                   echo $this->Form->control('name',['required' => false, 'class'=>'form-control','id'=>'name']);
                    echo "<br></br>"; ?>
                    <label>Brands</label>
                   <select name="brand_id" id="" class="form-control">
                     <?php foreach($brands as $brand):?>
                     <option value="<?= h($brand->id)?>"><?= h($brand->name)?></option>
                     <?php endforeach;?>
                   </select>
                   
                    
                    <?php
                    echo "<br></br>";
                    echo $this->Form->control('model',['required' => false, 'class'=>'form-control','id'=> 'model']);
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
                    ['class'=>'form-control','id'=>'make']
                 );
                    echo "<br></br>";
                    echo "<label>Color</label>";
                    echo $this->Form->select(
                        'color',
                        ['black'=>'black','white'=>'white','grey'=>'grey'],['class'=>'form-control','id'=>'color']);

                    echo "<br></br>";
                    echo $this->Form->control('description',['required' => false, 'type'=>'textarea','class'=>'form-control','id'=>'description']);
                    echo "<br></br>";
                    echo $this->Form->control('image',['required' => false,'type'=> 'file','class'=>'form-control','id'=>'image']);
                    echo "<br></br>";
                   ?>
                      </div>
                  </fieldset>
                  <?= $this->Form->button(__('Submit'),['class'=>'btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0 ms-6 formupdate']) ?>
                 <!-- <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0 ms-6 formupdate" data-bs-dismiss="modal">Submit</button> -->

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

         <!-- Modal footer
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> -->

       </div>
     </div>
   </div>  

