<?php
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class DeshBoardController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('GiveHelp','GetHelp','User','UserBank','Product','MasterProduct','MasterCategory','ProductGroup','Client','MasterBrand','Salse');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	function giveHelp() {
		$this->autoRender = false;
	    $this->layout = "";
	     if($this->data){
	    	$userData = $this->Session->read('User');
	    	$helpData['amount'] = $this->data['amount'];
	    	$helpData['email'] = $userData['username'];
	    	$helpData['user_id'] = $userData['UserId'];
	    	$helpData['start_time'] = date("Y-m-d h:i:s");
	    	$helpData['is_active'] = 1;
	    	$helpData['end_time'] = date('Y-m-d h:i:s', strtotime(' +2 day'));
	    	$this->GiveHelp->save($helpData);
	    } else {
	    	return false;
	    }
	}
	function getHelp() {
		$this->autoRender = false;
	    $this->layout = "";
	    if($this->data){
	    	$userData = $this->Session->read('User');
	    	$helpData['amount'] = $this->data['amount'];
	    	$helpData['email'] = $userData['username'];
	    	$helpData['user_id'] = $userData['UserId'];
	    	$helpData['start_time'] = date("Y-m-d h:i:s");
	    	$helpData['end_time'] = date('Y-m-d h:i:s', strtotime(' +2 day'));
	    	$this->GetHelp->save($helpData);
	    } else {
	    	return false;
	    } 
	}
	function saveBankDetails() {
		$this->autoRender = false;
	    $this->layout = "";
	    $userData = $this->Session->read('User');
		$data['user_id'] = $userData['UserId'];
		if($this->data){
			$data['bank_name'] = $this->data['bankName'];
			$data['account_number'] = $this->data['accountNumber'];
			$data['ifsc_code'] = $this->data['ifsc'];
			$data['branch'] = $this->data['branch'];
			$data['is_active'] = 1;
			$this->UserBank->updateAll(array("is_active"=>0),array("user_id"=>$userData['UserId']));
			$this->UserBank->save($data);
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard?bankDetails=1' ) );
		}
	}
	function adminLogin(){
		$userData = $this->Session->read('User');
		$data['giveHelp'] = $this->GiveHelp->find('all', array( 'fields' =>array('User.name','GiveHelp.user_id','GiveHelp.amount','GiveHelp.start_time','User.email'),'conditions' => array('GiveHelp.is_active' => 1),
			'joins' => array(
                    array('table'=>'users','alias'=>'User','type'=>'inner','conditions'=>array('GiveHelp.user_id = User.id'))
                )));
		$data['getHelp'] = $this->GetHelp->find('all', array( 'fields' =>array('User.name','GetHelp.user_id','GetHelp.amount','GetHelp.start_time','User.email'),'conditions' => array('GetHelp.is_active' => 1),
			'joins' => array(
                    array('table'=>'users','alias'=>'User','type'=>'inner','conditions'=>array('GetHelp.user_id = User.id'))
                )));
		$this->set('HelpRecords',$data);
	}
	function acceptGetHelp() {
		$this->autoRender = false;
	    $this->layout = "";
		if(!empty($this->data['id'])) {
			$this->GetHelp->updateAll(array("is_active"=>0,"is_accepted" =>1),array("id"=>$this->data['id']));
			return true;
		} else {
			return false;
		}
	}
	function submitGiveHelp() {
		$this->autoRender = false;
	    $this->layout = "";
		if(!empty($this->data['id'])) {
			$this->GiveHelp->updateAll(array("is_active"=>0,"status" =>1),array("id"=>$this->data['id']));
			return true;
		} else {
			return false;
		}
	}
	function products(){
		$data['category'] = $this->MasterCategory->find('all',array('fields' => array('id','name') ));
        $data['group'] = $this->ProductGroup->find('all', array('fields' => array('id','name') ));
        $this->set('data',$data);
	}
	function addProduct(){
		//$userData = $this->Session->read('User');
		$this->autoRender = false;
	    $this->layout = "";
	    Configure::write('debug', 02);
	    if($this->data){
	    	$stock['Product']['user_id'] = 4;
	    	foreach ($this->data as $key => $value) {
	    		$stock['Product'][$key] = $value;
	    		$stock1['MasterProduct'][$key] = $value;
	    	}
	    	$stock['Product']['expairy_date'] = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $stock['Product']['expairy_date'])));
	    	$stock['Product']['perchese_date'] = date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $stock['Product']['perchese_date'])));
	    	$productData = $this->MasterProduct->find('first', array(
            'fields' => array("MasterProduct.id"),
            'conditions' => array('MasterProduct.name' => $stock['Product']['name'],'MasterProduct.user_id'=> $stock['Product']['user_id'])
        	));
	    	if(empty($productData)){
	    		$this->MasterProduct->save($stock1);
	    	}
	    	
	    	$out = $this->Product->save($stock);

	    	print_r($out);
	    	die("dddddd");
	    	return true;
	    } else {
	    	echo "Something went wrong";
	    	return false;
	    }
	}
	function checkMemberShipByEmail($emailId = '') {
        $isAvailbale = true;
        $message = false;
        $this->autoRender = false;
        $this->layout = null;
        if (trim($emailId) == '')
            $emailId = $this->data['email'];
        //check if email exists on some mail server
        $isMember = false;
        $loginData = $this->User->find('first', array(
            'fields' => array("User.id"),
            'conditions' => array('User.email' => $emailId)
        ));
        if (isset($loginData['User']['id']) && (int) $loginData['User']['id']) {
            $isMember = (int) $loginData['User']['id'];
        }
        if ($isMember) {
	        $message = 'This email is already registered.';
	        $isAvailbale = false;
            
        } else {
            $isAvailbale = false;
            $message = 'Please enter a valid emailid';
        }
        echo json_encode(array('valid' => $isAvailbale, 'message' => $message));
        exit;
    }
    function checkMemberShipEmail($emailid){
    	$this->autoRender = false;
        $this->layout = null;
        if (trim($emailId) == '')
            $emailId = $this->data['email'];
        //check if email exists on some mail server
        $isMember = false;
        $loginData = $this->User->find('first', array(
            'fields' => array("User.id"),
            'conditions' => array('User.email' => $emailId)
        ));
        if (isset($loginData['User']['id']) && (int) $loginData['User']['id']) {
            $isMember = (int) $loginData['User']['id'];
        }
        return $isMember;
    }
	public function isRegistered() {
        $isMember = false;
        $this->autoRender = false;
        $this->layout = null;
        $loginId = $this->checkMemberShipEmail($this->data['email']);
        if ((int) $loginId) {
            $isMember = true;
        }
        echo json_encode(array('valid' => $isMember));
        exit;
    }
	 function ajaxLogin() {
        $this->layout = null;
        $this->autoRender = false;

        $response = array(
            'hasError' => true,
            'messages' => "Either email or password is incorrect!",
            'redirect' => false
        );
        if ($this->data) {

            if ($this->data['email']) {
                 $returnUrl=false;

                $conditions = array(
                    "User.email" => $this->data['email'],
                    'User.password' => md5($this->data['password'])
                );
               
                $LoginData = $this->User->find('first', array('conditions' => $conditions));
                if ($LoginData) {
                	$data['UserId'] = $LoginData['User']['id'];
					$data['email'] = $LoginData['User']['email'];
					$data['password'] = $LoginData['User']['password'];
					$this->Session->write('User',$data);
                	$response = array('hasError' => false, 'messages' => null); 
                	if(!empty($LoginData['User']['is_admin']) && $LoginData['User']['is_admin'] ==1) {
						$response['redirect'] = Router::url('/adminLogin'); 
					}
					$response['redirect'] = Router::url('/deshBoard'); 
                }
            }
        }
        echo json_encode($response);

        exit;
    }
    function salse(){
        $this->setProductPrice();
    	$this->set('newRow',1);
    	$this->Session->write('billFormRow','');
    }
    function getProductDetails(){
    	$this->layout = null;
        $this->autoRender = false;
        $productData = array();
    	$productData = $this->Product->find('first', array(
            'conditions' => array('id' => $this->data['productId'],'is_expaire' =>0 ,'is_saled' =>0,'status' =>1)
        ));
        if(!empty($productData)) {
        	echo json_encode($productData['Product']);
        	exit;
        } else {
        	echo "There is no data for this product Please add first";
        	return false;
        }

    }
    function createRow(){
    	$this->layout = null;
        $this->autoRender = false;
    	$newRow = $this->data['newrow'] +1;
    	$row = $this->Session->read('billFormRow');
    	if (in_array($this->data['newrow'], $row['id'])){
    		exit;
    	} else {
    		$row['id'][] = $this->data['newrow'];
    		$this->Session->write('billFormRow',$row);
    	}
    	
    	$this->Session->write('billFormRow',$row);
    	//$this->set('preId',$this->data['newrow']);
    	$this->set('newRow',$newRow);
    	$this->render('/Elements/form_row');
    }
    function saleList() {
    	$this->layout = null;
        $this->autoRender = false;
    	if(!empty($this->data)){
            $arr = array_chunk($this->data, 7,true);
            foreach ($arr as $key => $value) { 
                $i = $key+1;
                if(!empty($value['name'.$i])){
                    $prSalse[$key]['Salse']['actual_price'] = (trim($value['totel'.$i])/trim($value['quanity'.$i])) ;
                    $prSalse[$key]['Salse']['quantity'] = trim($value['quantity'.$i]) ;
                    if($this->data['shoperId']){
                        $prSalse[$key]['Salse']['shoper_id'] = $this->data['shoperId'];
                        $prSalse[$key]['Salse']['to_shoper'] = 1;
                    }
                }
            }
            $option = array(array('table' => 'master_products','alias'=> 'MasterProduct','type'=>'inner','conditions'=>array( 'MasterProduct.id = Product.master_product_id')));
            $result = $this->Product->find('list', array('fields' => array('Product.id','MasterProduct.id'),
                    'conditions' => array('Product.id'=>$salseData['productId']),
                    'joins' =>$option));
            foreach ($salseData['productId'] as $key => $prId) {
               $prSalse[$key]['Salse']['product_id'] = $prId;
               $prSalse[$key]['Salse']['master_product_id'] = $result[$prId];
            }
            foreach ($prSalse as $key => $value) {
                try{
                    $this->Salse->create();
                    if($this->Salse->save($value)){
                        echo "Successfully";
                    } else {
                        echo "not saved";
                    }
                } catch(Exception $e){
                    echo $e->getMessage(); die("DDDDD");
                }
            }    
        } else{
            die("Nothing saled");
        }
    }
    function seachAutoComplete(){  
        $this->autoRender = false;
        $value = $this->params['url']['term'];
        $cond = array('OR' => array(
                'Product.name LIKE' => '%' . $value . '%',
                'Product.brand LIKE' => '%' . $value . '%',
                ));
        $option = array(array('table' => 'product_groups','alias'=> 'ProductGroup','type'=>'left','conditions'=>array( 'Product.product_group_id = ProductGroup.id')),
            array('table' => 'master_categories','alias'=> 'MasterCategory','type'=>'left','conditions'=>array( 'Product.master_category_id = MasterCategory.id')),
            array('table' => 'master_brands','alias'=> 'MasterBrand','type'=>'left','conditions'=>array( 'Product.brand = MasterBrand.id')));

        $result = $this->Product->find('all', array('fields' => array('Product.master_category_id','Product.max_discount','Product.price','Product.product_group_id','Product.id', 'Product.name', 'Product.brand','MasterCategory.name','MasterBrand.name','ProductGroup.id','MasterCategory.id'),         
                    'conditions' => array('Product.is_expaire' =>0 ,'Product.is_saled' =>0,'Product.status' =>1, 'AND' => $cond),
                    'joins' =>$option));
            $send = array();
            $i = 0;
            foreach ($result as $rel) {
                $array[] = array (
                    'label' => $rel['Product']['name'],
                    'id' => $rel['Product']['id'],
                    'category' => $rel['MasterCategory']['name'],
                    'group' => $rel['ProductGroup']['name'],
                    'groupId' => $rel['ProductGroup']['id'],
                    'categoryId' => $rel['MasterCategory']['id'],
                    'brand' => $rel['MasterBrand']['name'],
                    'price' => $rel['Product']['price'],
                    'max_discount' => $rel['Product']['max_discount'],
                );
            }
            echo json_encode($array);
            exit();
    }
    function ManageProducts(){
        //Configure:: write('debug' , 02);
    }
    function addManageData(){
        $this->autoRender = false;
        if($this->Session->read('User')) {
            $userData = $this->Session->read('User');
            $data['user_id'] = $userData['UserId'];
        }
        if(!empty($this->data['id'])){
            if($this->data['id'] == 'category' && !empty($this->data['name'])){
                $data['name'] = $this->data['name'];
                if($this->MasterCategory->save($data)){
                    echo "Added Successfully";
                    exit();
                } else {
                    echo "Nothig saved try again";
                    exit();
                }
            } else if($this->data['id'] == 'group' && !empty($this->data['name'])){
                $data['name'] = $this->data['name'];
                if($this->ProductGroup->save($data)){
                    echo "Added Successfully";
                    exit();
                } else {
                    echo "Nothig saved please try again";
                    exit();
                }
            } else if($this->data['id'] == 'brand' && !empty($this->data['name'])){
                $data['name'] = $this->data['name'];
                if($this->MasterBrand->save($data)){
                    echo "Added Successfully";
                    exit();
                } else {
                    echo "Nothig saved please try again";
                    exit();
                }            
            } else if($this->data['id'] == 'client' && !empty($this->data['name'])){
                $data['name'] = $this->data['name'];
                $data['address'] = $this->data['add'];
                $data['phone'] = $this->data['phone'];
                $data['email'] = $this->data['email'];
                if($this->Client->save($data)){
                    echo "Added Successfully";
                    exit();
                } else {
                    echo "Nothig saved please try again";
                    exit();
                }
            } else{
                echo "Nothing saved please try again";
                return false;
            }
        }
    }
    function bulkSalse(){
        $this->autoRender = false;
        $this->setProductPrice();
        $this->set('newRow',1);
        $this->Session->write('billFormRow','');
        $this->set('bulkSalse',1);
        $this->render('salse');
    }
}