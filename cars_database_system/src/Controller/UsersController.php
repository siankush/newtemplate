<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use App\Form\ContactForm;

use Cake\Mailer\Email;
use Cake\Mailer\Mailer;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * 
 * 
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{


    public function initialize(): void
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        // $this->Authentication->addUnauthenticatedActions(['login']);

        $this->Model = $this->loadModel('Cars');
        $this->Model = $this->loadModel('Ratings');
        $this->Model = $this->loadModel('Brands');
        // if ($this->Authentication->getIdentity()) {
        //     $user1 = $this->Authentication->getIdentity();
        //     $uid=$user1->id;
        //     $result = $this->Users->get($uid,[
        //         'contain'=>[],
        //     ]);
        // } else {
        //     $auth = false;
        //     $user1 = null;
        //     $result = null;
        // }
        // $this->set(compact('user1','result'));

    }

public function index(){


    $contact = new ContactForm();
    if ($this->request->is('post')) {
        if ($contact->execute($this->request->getData())) {

          $email = $this->request->getData('email');
        //   $email = $data['email']; 
            $mailer = new Mailer('default');
                $mailer
                    ->setTransport('gmail') //your email configuration name
                    ->setFrom(['ankush14042000@gmail.com' => 'Code The Pixel'])
                    ->setTo($email)
                    ->setEmailFormat('html')
                    ->setSubject('Verify New Account')
                    ->deliver('Hi $name<br/>Welcome to Code The Pixel.');

            $this->Flash->success('Sent Mail');
        } else {
            $this->Flash->error('There was a problem submitting your form.');
        }
    }
    $this->set('contact', $contact);

} 

public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    // Configure the login action to not require authentication, preventing
    // the infinite redirect loop issue
    $this->Authentication->addUnauthenticatedActions(['login']);
}

public function login()
{
    $this->viewBuilder()->setLayout('loginlayout');   

    $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /articles after login success
            
            
            
            $result = $this->Authentication->getIdentity();
        if($result->status == 0){
          
            $this->Flash->error(__('not autorize'));
            return $this->redirect(['controller'=>'Users', 'action' => 'logout']);



        }  else{
            // echo '<pre>';print_r($result->user_type);die;
            // $value = $result->name;
            // print_r($value); die

            if($result->role == 0){

                
                $this->Flash->success(__('The admin has been logged in successfully.'));
                return $this->redirect(['controller'=>'Users', 'action' => 'dashboard']);

            }
            else if($result->role == 1){

                $this->Flash->success(__('The user has been logged in successfully.'));

                return $this->redirect(['controller'=>'Users', 'action' =>'index']);

            }


        }
    }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
}

public function register(){


    $user = $this->Users->newEmptyEntity();

    $fileName2 = $user["usrimage"];


    if ($this->request->is('post')) {

        $data = $this->request->getData();

        $productImage = $this->request->getData("usrimage");

        $fileName = $productImage->getClientFilename();
        if ($fileName == '') {
            $fileName = $fileName2;
        }

        $data["usrimage"] = $fileName;
        
        $user = $this->Users->patchEntity($user, $data);
        // echo '<pre>';
        // print_r($car);
        // die;
        if ($this->Users->save($user)) {
            $hasFileError = $productImage->getError();
            if ($hasFileError > 0) {
                $data["usrimage"] = "";
            } else {
                $fileType = $productImage->getClientMediaType();

                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $imagePath = WWW_ROOT . "img/" . $fileName;
                    $productImage->moveTo($imagePath);
                    $data["usrimage"] = $fileName;
                }
            }
            $this->Flash->success(__('The User has been saved.'));

            return $this->redirect(['action' => 'login']);
        }
        $this->Flash->error(__('The User could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));
}

public function userview($id = null)
{
    $user = $this->Users->get($id, [
        'contain' => ['Brands'
        
        , 'Cars'],
    ]);

    $this->set(compact('user'));
}


public function userstatus($id = null, $status){
           
    $this->request->allowMethod(['post']);
    $user = $this->Users->get($id);
    
    if($status == 1)
    $user->status = 0;
    else
    $user->status = 1;

    if($this->Users->save($user)){
        $this->Flash->success(__('The status has been changed.'));

    }
    return $this->redirect(['controller'=>'Users', 'action' => 'userlist']);
}



public function dashboard(){
    
    $user = $this->Authentication->getIdentity();
     
    if ($user->role == 0) {

        $name = $user->name;    

      $this->set(compact('name'));

        
        } else {
            return $this->redirect(['action' => 'home']);
        }
    
}



public function delete(){

    // $this->request->allowMethod(['post', 'delete']);
    // $user = $this->Users->get($id);
    // if ($this->Users->delete($user)) {
    //     $this->Flash->success(__('The user has been deleted.'));
    // } else {
    //     $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    // }
    
    // return $this->redirect(['action' => 'userlist']);


    if ($this->request->is('ajax')) {
        $this->autoRender = false;

        $id = $this->request->getData('id');
        $deletestatus = $this->request->getData('deletestatus');
        
        
        
        $user = $this->Users->get($id);
        
         
        if($deletestatus == 1)
        $user->deletestatus = 0;
        else
        $user->deletestatus = 1;

        if($this->Users->save($user)){
            echo json_encode(array(
                "status" => 1,
                "message" => "The student has been deleted."
            )); 

        }
     
       
        
        
    }
}


public function addcar(){
    
    // $this->viewBuilder()->setLayout('adminlayout');   
    $user = $this->Authentication->getIdentity();
        if ($user->role == 0) {
    
    $name = $user->name; 

    $car = $this->Cars->newEmptyEntity();
    
    $fileName2 = $car["image"];
    
    
    if ($this->request->is('post')) {
        
        $data = $this->request->getData();
        
        $productImage = $this->request->getData("image");
        
        $fileName = $productImage->getClientFilename();
        if ($fileName == '') {
            $fileName = $fileName2;
        }
        
        $data["image"] = $fileName;
        
        $car = $this->Cars->patchEntity($car, $data);
        // echo '<pre>';
        // print_r($car);
        // die;
        if ($this->Cars->save($car)) {
            $hasFileError = $productImage->getError();
            if ($hasFileError > 0) {
                $data["image"] = "";
            } else {
                $fileType = $productImage->getClientMediaType();
                
                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $imagePath = WWW_ROOT . "img/" . $fileName;
                    $productImage->moveTo($imagePath);
                    $data["image"] = $fileName;
                }
            }
            $this->Flash->success(__('The car has been saved.'));
            
            return $this->redirect(['action' => 'table']);
        }
        $this->Flash->error(__('The car could not be saved. Please, try again.'));
    }

    
    $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
    $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
    $this->set(compact('car', 'users' ,'brands','name'));
} else {
    return $this->redirect(['action' => 'home']);
}
}

public function carstatus($id = null, $status){
           
    $this->request->allowMethod(['post']);
    $car = $this->Cars->get($id);

    if($status == 1)
    $car->status = 0;
    else
    $car->status = 1;

    if($this->Cars->save($car)){
        $this->Flash->success(__('The status has been changed.'));

    }
    return $this->redirect(['controller'=>'Users', 'action' => 'table']);
}

public function edit($id = null)
{   
   
   
    $id = $_GET['id'];
    $car = $this->Cars->get($id,[
        'contain'=>['Brands'],
        
    ]);
    
   
    echo json_encode($car);
    exit;
}

public function caredit($id = null){


    if ($this->request->is(['patch','post','put'])) {

        $data = $this->request->getData();
        $id = $this->request->getData('id');
    

        $car = $this->Cars->get($id, [
            'contain' => ['Brands'],
        ]);
         
        
        $fileName2 = $car["image"];

        $productImage = $this->request->getData("image");
        $fileName = $productImage->getClientFilename();
        if ($fileName == '') {
            $fileName = $fileName2;
        }
        $fileSize = $productImage->getSize();
        $data["image"] = $fileName;
        $car = $this->Cars->patchEntity($car, $data);
        if ($this->Cars->save($car)) {
            $hasFileError = $productImage->getError();

            if ($hasFileError > 0) {
                $data["image"] = "";
            } else {
                $fileType = $productImage->getClientMediaType();

                if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                    $imagePath = WWW_ROOT . "img/" . $fileName;
                    $productImage->moveTo($imagePath);
                    $data["image"] = $fileName;
                }
            }
            echo json_encode(array(
                "status" => 1,
                "message" => "The car has been saved.",
            ));
            exit;

        }
        echo json_encode(array(
            "status" => 0,
            "message" => "The car could not be saved. Please, try again.",
        ));
        exit;
    }
    $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
    $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
    $this->set(compact('car', 'users', 'brands'));



//     if ($this->request->is(['patch', 'post', 'put'])) {
//         $data = $this->request->getData();
//         $fileName2 = $this->request->getData("imagedd");
//         $id = $this->request->getData("iddd");
//         $car = $this->Cars->get($id, [
//             'contain' => [],
//         ]);
//         $productImage = $this->request->getData("image");
//         $fileName = $productImage->getClientFilename();
//         if ($fileName == '') {
//             $fileName = $fileName2;
//         }
//         $fileSize = $productImage->getSize();
//         $data["image"] = $fileName;
//         $car = $this->Cars->patchEntity($car, $data);
//         if ($this->Cars->save($car)) {
//             $hasFileError = $productImage->getError();

//             if ($hasFileError > 0) {
//                 $data["image"] = "";
//             } else {
//                 $fileType = $productImage->getClientMediaType();

//                 if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
//                     $imagePath = WWW_ROOT . "img/" . $fileName;
//                     $productImage->moveTo($imagePath);
//                     $data["image"] = $fileName;
//                 }
//             }
//             echo json_encode(array(
//                 "status" => 1,
//                 "message" => "The car has been saved.",
//             ));
//             exit;
//         }
//         echo json_encode(array(
//             "status" => 0,
//             "message" => "The car could not be saved. Please, try again.",
//         ));
//         exit;
//     }
//     $brands = $this->Users->Brands->find('list', ['limit' => 200])->all()->toArray();
//     $this->set(compact('car', 'brands'));
    
}




        // if ($this->Students->save($student)) {


        //     exit;
        // }

        // $this->Flash->error(__('Failed to update student data'));

        // echo json_encode(array(
        //     "status" => 0,
        //     "message" => "Failed to update student data"
        // )); 

        // exit;

// } else {
//     return $this->redirect(['action' => 'login']);
// }



public function cardelete(){
        
    // $this->request->allowMethod(['post', 'delete']);

    // $car = $this->Cars->get($id);
    // if ($this->Cars->delete($car)) {
    //     $this->Flash->success(__('The car has been deleted.'));
    // } else {
    //     $this->Flash->error(__('The car could not be deleted. Please, try again.'));
    // }

    // return $this->redirect(['action' => 'table']);
$user = $this->Authentication->getIdentity();
if ($user->role == 0) {

    if ($this->request->is('ajax')) {

////////////////////////////for hard delete /////////////////////////////////        

        // $id = $this->request->getQuery('id');
    
        // $car = $this->Cars->get($id);

        // if ($this->Cars->delete($car)) {


        //     echo json_encode(array(
        //         "status" => 1,
        //         "message" => "The student has been deleted."
        //     )); 

        //     exit;

        // } else {

        //     echo json_encode(array(
        //         "status" => 0,
        //         "message" => "The student could not be deleted. Please, try again."
        //     )); 

        //         exit;
        // }   

////////////////////////////////for soft delete //////////////////////////// 

        $this->autoRender = false;


        $id = $this->request->getData('id');
        
        $deletestatus = $this->request->getData('deletestatus');
      
      

        $car = $this->Cars->get($id);
        // dd($car);
         
        if($deletestatus == 1)
        $car->deletestatus = 0;
        else
        $car->deletestatus = 1;

        if($this->Cars->save($car)){
            echo json_encode(array(
                "status" => 1,
                "message" => "The student has been deleted."
            )); 

        }
     
         

    }
} else {
    return $this->redirect(['action' => 'login']);
}

}

public function carview($id = null){

 $user = $this->Authentication->getIdentity();
 $user_id = $user->id;

 $name = $user->name; 


 
 $car = $this->Cars->get($id, [
     'contain' => ['Brands','Ratings'],
    ]);


        $this->set(compact('car','name'));

        $cid = $car->id;

        $ratings = $this->Ratings->find('all')->where(['car_id'=>$cid]);
        $this->set(compact('ratings'));
        
        $addrating = $this->Ratings->newEmptyEntity();
        if ($this->request->is('post')) {
            $result = $this->Ratings->find('all')->where(['car_id' => $id,'user_id'=> $user_id])->first();
            if ($result) {
                $rating = $this->request->getData('rating');
                $review = $this->request->getData('review');
                $result->rating = $rating;
                $result->review = $review;
                if ($this->Ratings->save($result)) {
                    $this->Flash->success(__('The rating has been updated   .'));

                    return $this->redirect(['action' => 'carview', $id]);
                }
            } else {
                $addrating = $this->Ratings->patchEntity($addrating, $this->request->getData());
                if ($this->request->is('post')) {
                    $addrating['user_id']=$user_id;
                    $addrating['name'] = $user->name;
                    $addrating['car_id']=$car->id;
                    if ($this->Ratings->save($addrating)) {
                        $this->Flash->success(__('The rating has been saved.'));

                        return $this->redirect(['action' => 'carview',$id]);
                    }
                    $this->Flash->error(__('The rating could not be saved. Please, try again.'));
                }
            
            }
  
        }
       
   
}

public function table(){
 
    $brands = $this->paginate($this->Brands);
    
    // $this->set(compact('brands'));
$user = $this->Authentication->getIdentity();
if ($user->role == 0) {
    $name = $user->name;    
       
        $this->paginate = [
            'contain' => [ 'Brands'],
            'order'=>['id'=> 'DESC'],
        ];
   
        $cars = $this->paginate($this->Cars,[
            // 'limit' => 3,
        ]);

        // $brand = $this->Brands->find('all')->where('name');
    //     $brand  = $this->Brands
    // ->find()
    // ->select(['name']);
    // $brand = $this->paginate($this->Cars,[
    //     'contain' => ['Brands'],
    // ]);
     
        
        
        $this->set(compact('cars','name','brands'));

 
} else {
    return $this->redirect(['action' => 'logout']);
}
}

public function getcar(){

        $status = $this->request->getQuery('status');
    
        if($status == null){
            $cars = $this->Cars->find('all')->contain(['Brands']);
        }else{
           
            // $cars = $this->Cars->find('all')->contain(['Brands'=>function($q)use ($status){ return $q->where(['Brands.status'=>$status]);}]);

            $cars = $this->Cars->find('all')->contain(['Brands'=>function($q)use ($status){ return $q->where(['Cars.status'=>$status]);}]);

        }

        
        $this->set(compact('cars'));

        if($this->request->is('ajax')){

            // start code will work in case of element rander from here
           $this->autoRender = false;
           
           $this->layout = false;
           $this->render('/element/flash/tablelist');
         // end code will work in case of element rander from here
        }

}


public function userlist(){

    $user = $this->Authentication->getIdentity();
        if ($user->role == 0) {
              
    $name = $user->name;

        $users = $this->paginate($this->Users,[

        ]);

        $this->set(compact('users','name'));
            
        } else {
            return $this->redirect(['action' => 'login']);
        }
 

}

public function brands(){

$user = $this->Authentication->getIdentity();
 
$name = $user->name;
   
    $brands = $this->paginate($this->Brands);
    $this->set(compact('brands','name'));
}

public function getbrand($id = null)
{   
   
   
    $id = $_GET['id'];
    $brand = $this->Brands->get($id,[
        'contain'=>['Cars'],
    ]);
    echo json_encode($brand);
    exit;
}

public function deletebrand($id = null){

    if ($this->request->is('ajax')) {
        
        $this->autoRender = false;
        
        
        $id = $this->request->getData('id');
                
    
        $deletestatus = $this->request->getData('deletestatus');
              
        $brand = $this->Brands->get($id);
                 
        if($deletestatus == 1)

          $brand->deletestatus = 0;

             else

          $brand->deletestatus = 1;
        
            if($this->Brands->save($brand)){
                echo json_encode(array(
                   "status" => 1,
                   "message" => "The student has been deleted."
             )); 
        
          }         
        
     }
}


public function logout()
{
    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
}


}