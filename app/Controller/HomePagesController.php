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
class HomePagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('User','Salse','Product','Stok','Lead','UserFirm');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	function index() {
		$this->layout="default";
		$userData = $this->Session->read('User');
		$user_id = $userData['user_id'];
		if(!empty($user_id)){
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard' ) );
		}
	}
	function deshBoard() {
		$user_id = $this->_checkLogin();
		$userData = $this->Session->read('User');
		$this->layout="default";
		$report['dailyData'] = $this->Salse->find('first', array( 'fields' =>'SUM(actual_price)','conditions' => array('DATE(created)' =>date('y-m-d'),'user_id' =>$user_id)));
		$report['monthlyData'] = $this->Salse->find('first', array( 'fields' =>'SUM(actual_price)','conditions' => array('created >' =>'DATE_SUB(CURDATE(), INTERVAL 1 month)','user_id' =>$user_id)));
		$report['YearlyData'] = $this->Salse->find('first', array( 'fields' =>'SUM(actual_price)','conditions' => array('created >' =>'DATE_SUB(CURDATE(), INTERVAL 1 year)','user_id' =>$user_id)));
		$report['dailyDataP'] = $this->Stok->find('first', array( 'fields' =>'Count(id)','conditions' => array('DATE(created)' =>date('y-m-d'),'user_id' =>$user_id)));
		$report['monthlyDataP'] = $this->Stok->find('first', array( 'fields' =>'Count(id)','conditions' => array('created >' =>'DATE_SUB(CURDATE(), INTERVAL 1 month)','user_id' =>$user_id)));
		$report['YearlyDataP'] = $this->Stok->find('first', array( 'fields' =>'Count(id)','conditions' => array('created >' =>'DATE_SUB(CURDATE(), INTERVAL 1 year)','user_id' =>$user_id)));
		$report['expairy'] = $this->Product->find('all', array( 'fields' =>array('name','expairy_date'),'conditions' => array('expairy_date <= ' =>'date_add(CURDATE(),interval 1 day)','user_id' =>$user_id)));
		//print_r($report);die
		$this->set('reports',$report);
	}
	function registration() {
		$this->autoRender = false;
	    $this->layout = "";
	    $response = array(
            'hasError' => true,
            'messages' => "Either email or password is incorrect!",
            'redirect' => false
        );
		$login_detail = $this->User->find('first', array( 'conditions' => array('email' => $this->data['email'])));
		if(!empty($login_detail)) {
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index?status=1' ) );
		} else {
			$data['email'] = $this->data['email'];
			$data['password'] = md5($this->data['password']);
			$data['name'] = $this->data['Name'];
			$data['mobile'] = $this->data['mobile'];
			$data['remember'] = $this->data['remember'];
			
			//$user_id = $userData['user_id'];
			//$this->Session->write('User',$data);
			//$this->setUserData();
			$data1 = $this->User->save($data);
			$id = $this->User->getLastInsertID();
			$detail = $this->User->find('first', array( 'conditions' => array('id' => $id),'fields' => array(
                    'substring(MD5(User.created),5,5) as key1','OLD_PASSWORD(User.id) as key2'
                    )));
			$k1 = $detail[0]['key1'].''.$detail[0]['key2'];
			$message['name'] = $data['name'];
			$message['email'] = $data['email'];
			$message['approveUrl'] = ABSOLUTE_URL.'/emailConfirmation/'.$id.'/'.$k1;
			 $m = $this->sendMail($data['email'], $message, "Your NextStep Membership", 'success', 'registration');
			$response = array('hasError' => false, 'messages' => null); 
			echo json_encode($response);
			// $data['UserId'] = $data1['User']['id'];
			// $this->Session->write('User',$data);
			// $this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard' ) );
		}
	}
	function emailConfirmation($user_id,$authCode){
		Configure::write('debug', 0);
		$this->autoRender = false;
	    $this->layout = "";
		if(!empty($authCode) && !empty($user_id)){
			$detail = $this->User->find('first', array( 'conditions' => array('id' => $user_id),'fields' => array(
                    'substring(MD5(User.created),5,5) as key1','OLD_PASSWORD(User.id) as key2','User.id', 'User.email','User.created','User.name'
                    )));
			$k1 = $detail[0]['key1'].''.$detail[0]['key2'];
			if($authCode == $k1){
				try{
					$this->User->save(array('status' => 1,'autologin' => $authCode ,'id' => $user_id));
					
					$detail['User']['status'] =  1;
					$detail['User']['user_id'] = $detail['User']['id']; 
					$this->Session->write('User',$detail['User']);
					//$this->Session->write('User',$data);
				}catch(Exception $e){
                    echo $e->getMessage(); die("not saved");
                }
				$this->redirect( array( 'controller' => 'home_pages', 'action' => 'r1' ) );
			}
		}
	}

	function logins() {
		$this->autoRender = false;
	    $this->layout = "";
		$User = $this->_import("User");
		$login_detail = $this->User->find('first', array( 'conditions' => array('email' => $this->data['email'],'status' =>1)));
		if(empty($login_detail)) {
			$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index?status=2' ) );
		} else {
			if($login_detail['User']['email'] == $this->data['email'] && $login_detail['User']['password'] == md5($this->data['password'])) {
				$data['user_id'] = $login_detail['User']['id'];
				$data['email'] = $login_detail['User']['email'];
				$data['password'] = $login_detail['User']['password'];
				$this->Session->write('User',$data);
				if( empty($login_detail['User']['r1']) || $login_detail['User']['r1'] !=1) {
					$this->redirect( array( 'controller' => 'home_pages', 'action' => 'r1' ) );
				}
				$this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard' ) );
			} else {
				$this->redirect( array( 'controller' => 'home_pages', 'action' => 'index?status=3' ) );
			}
		}
	}

	function logout(){
		$this->Session->delete('User');
		$this->Session->destroy();
		$this->redirect( '/' );
	}
	function seachAutoComplete(){
		$this->autoRender = false;
		$value = $this->params['url']['term'];
		$Shoper = $this->_import('Shoper');
		$cond = array('OR' => array(
                    'Shoper.name LIKE' => '%' . $value . '%',
                    'Shoper.user LIKE' => '%' . $value . '%',
                    ));

		$result = $Shoper->find('all', array('fields' => array('Shoper.id','Shoper.name'),
		 			'conditions' => array('is_deleted' =>0,'AND' => $cond)));
        $send = array();
        $i = 0;
        foreach ($result as $rel) {
            $array[] = array (
                'label' => $rel['Shoper']['name'],
                'shoperId' => $rel['Shoper']['id'],
                'user' =>$rel['Shoper']['user'],
            );
        }
        echo json_encode($array);
        exit();
	}
	function viewSalse(){
		//Configure::write('debug', 2);
		if ($maxPageNumber > $temMax) {
            $maxPageNumber = $temMax + 1;
        }
       
        $this->set('maxPageNumber', $maxPageNumber);
        $this->set('start', $tempSeq);
        $this->set('linkdata', $data);
        if( !empty($this->params['url']['page'] )) {
            $filt = $this->params['url']['page'];
        } 

		 $option = array(array('table' => 'product_groups','alias'=> 'ProductGroup','type'=>'left','conditions'=>array( 'Product.product_group_id = ProductGroup.id')),
            array('table' => 'master_categories','alias'=> 'MasterCategory','type'=>'left','conditions'=>array( 'Product.master_category_id = MasterCategory.id')),
            array('table' => 'master_brands','alias'=> 'MasterBrand','type'=>'left','conditions'=>array( 'Product.brand = MasterBrand.id')),
            array('table' => 'salses','alias'=> 'Salse','type'=>'inner','conditions'=>array( 'Product.id = Salse.product_id')),
             array('table' => 'shopers','alias'=> 'Shoper','type'=>'left','conditions'=>array( 'Salse.shoper_id = Shoper.id')));

        $result = $this->Product->find('all', array('fields' => array('Product.price','Product.name','Product.id','Product.packing','Product.unit','MasterCategory.name','MasterBrand.name','ProductGroup.name','Salse.quantity','Salse.actual_price','Shoper.name'),         
                    'conditions' => array('Salse.created > DATE_SUB(CURDATE(), INTERVAL 1 year)','Product.name LIKE' =>"$filt%",'Product.user_id' =>$user_id),
                    'joins' =>$option));
        $this->set('NameArray',$result);
	}
	function contactUs(){
		$this->layout = "default";
		$message = "";
		$this->set('layout_var', 
            array('static_heading' => 'Indias Best Invetory Managment Tool',
                'title' => 'Indias Best Invetory Managment Tool | Secure Isolization and Globle access To Inventories'));
	}
	function submitLeads(){
		$this->layout = "default";
		$this->autoRender = false;
		if(!empty($this->request->data)) {
			$leads['name'] = $this->request->data['Name'];
			$leads['email'] = $this->request->data['email'];
			$leads['mobile'] = $this->request->data['mobile'];
			$leads['comments'] = $this->request->data['comments'];
			$user_id = $this->checkRegisterdGetId($leads['email']);
			if(!empty($user_id)){
				$leads['user_id'] = $user_id;
				$leads['is_registered'] = $user_id;
			} else{
				$leads['user_id'] = 0;
			}
			if($this->Lead->save($leads)){
				$message['message'] = "Thanks for contacting us we will shortly connect you";
				$message['class'] = 'text-success';
			} else{
				$message['message'] = "Smothing went wrong please try again";
				$message['class'] = 'text-danger';
			}
		}
		echo json_encode($message);
		exit;
	}
	function r1(){
		$city = array('Any','Ahmedabad','Bangalore','Chennai','Delhi','Hyderabad','Kolkata','Mumbai','Pune','Agartala','Agra','Ahmednagar','Aizawal','Ajmer','Aligarh','Allahabad','Ambala','Amritsar','Anand','Ankleshwar','Asansol','Aurangabad','Bahgalpur','Bareilly','Vadodara','Belgaum','Bellary','Bharuch','Bhatinda','Bhavnagar','Bhiwani','Bhopal','Bhubaneshwar','Bhuj','Bidar','Bilaspur','Bokaro','Calicut','Chandigarh','Coimbatore','Cuttack','Dalhousie','Daman','Dehradun','Dhanbad','Dharamshala','Dharwad','Dispur','Durgapur','Ernakulam','Erode','Faizabad','Gandhinagar','Gangtok','Panaji','Gorakhpur','Gulbarga','Guntur','Guwahati','Gwalior','Haldia','Hisar','Hosur','Hubli','Imphal','Indore','Itanagar','Jabalpur','Jaipur','Jaisalmer','Jalandhar','Jalgaon','Jammu','Jamnagar','Jamshedpur','Jodhpur','Kakinada','Kandla','Kannur','Kanpur','Karnal','Kavaratti','Kharagpur','Kochi','Kohima','Kolar','Kolhapur','Kollam','Kota','Kottayam','Kullu Manali','Kurnool','Kurukshetra','Lucknow','Ludhiana','Madurai','Mangalore','Mathura','Meerut','Mohali','Moradabad','Mysore','Nagercoil','Nagpur','Nashik','Nellore','Nizamabad','Ooty','Palakkad','Panipat','Paradeep','Pathankot','Patiala','Patna','Pondicherry','Porbandar','Port Blair','Puri','Quilon','Raipur','Rajahmundry','Rajpur','Ranchi','Rohtak','Roorkee','Rourkela','Salem','Shillong','Shimla','Sholapur','Silchar','Siliguri','Silvassa','Srinagar','Surat','Thanjavur','Thrissur','Trivandrum','Tirunelveli','Tirupati','Trichy','Tuticorin','Udaipur','Ujjain','Valsad','Vapi','Varanasi','Vellore','Vijaywada','Visakhapatnam','Warangal','Other India','Gurgaon','Noida','Greater Noida','Ghaziabad','Faridabad','Bhilwara','Mundra','Tirora','Dahej','Chhindwara','Bhadreshwar','Kawai','Navi Mumbai','Gajraula','Rajkot','India - East','India - West','India - North','India - South','Laxmipur','Neemrana','Hirakud','Wani','Maihar','Gondavali','Wada','Secunderabad','Amravati','Bhiwadi','Taloja','Kamalapuram','Sewa','Vizag','Raigad','Bhadrachalam','Rudrapur','kundanganj','Tadipatri','Ananthpur','Sutrapada','Vadinar','Anpara','Alibaug','Bhognipur','Baddi','Supa','Satara','Dharuhera','Patalganga','Kurkumbh','Sikkim','Rajnandgaon','Sriperumbudur','Ambattur','Patan','Junagarh','Zirakpur','Jabli','Satna','Chanderia','Barh','Raibareilly','Birlapur','Balasore','Angul','Chittorgarh','Jharsugda','Teztur','Saharsa','Sagauli','Jakhal','Bhogat','Zaheerabad','Barmer','Ratnagiri','Vijaynagar','Kutehr','Salboni','Tarkeshwar','Renukoot','Chandrapur','Latur','Bhiwandi','Dewas','Sinnar','Nandurbar','Dhule','Jhansi','Mokochung','Florida','delhi','kerala','kozhikode','Mehsana','Haridwar','Anjar','Kalol','Morbi','Purnia','Motihari','Darbhanga','Mandsaur','Pantnagar','Sambalpur','Karur','Baramati','Sonipat','Chamba','Tamnar','Hoshiarpur','Gandhidham','Bikaner','Kundli','Pithampur','Surendranagar','chalakudy','Arakkonam','Rampur','Hoshangabad','Ratlam','Hinjewadi','Haldwani','Gurdaspur','Gaya','Sanand','Alwar','Veraval','Jhagadia','Kishangarh','Panoli','Manesar','Warora','Anuppur','Hospet','Nagda','Harihar','Khurja','Khurda','Bhagalpur','Bhilai','Shimoga','Korba','Tada','Savli','Tawang','Thane','Sirsa','Kashipur','Kandhar','Godhra','Bhind','Yamuna Nagar','Rewari','Etalin','Bongaigaon','Shahabad','Raigarh','Subansiri','Roing','Tanuku','West Godavari','Bhimavaram','Solapur','Rosa','Sitapur','Burhwal','Tarapur','Parbhani','Morinda','Paonta Sahib','Manipal','Barbil','Kadapa','Chikmagalur','Vadakkencherry','Mudhol','Kathiawad','Tumsar','Kasauli','Alleppey','Churu','Chiplun','Beawar','Jadcherla','Gummidipoondi','Cuddalore','Panchkula','Sonebhadra','Rajganpur','Adilabad','Shaktinagar','Muzaffarnagar','Satharia','Golan','Siwan','Jeypore','Bundi','Pali','Sikar','Dahod','Bargarh','Rudraprayag','Karimnagar','Gondal','Palanpur','Halol','Joda','Chaibasa','Himmatnagar','Hardoi','Tirupur','Banswara','Akola','Unjha','Bardoli','Cheeka','Kapurthala','Duliajan','Fatehabad','Kadi','Khanpur','Konnagar','Phagwara','Samastipur','Newai','Hansi','Piplia Mandi','Mullanpur Dakha','Palwal','Nadiad','Nagaur','Naila Janjgir','Sangrur','Sankagiri','Pichandarkovil','Chingleput','Amreli','Mahendragarh','Davangere','Jorhat','Palsana','Sidhpur','Rishabhdeo','Rajsamand','Bhucho Mandi','Vallabh Vidhyanagar','Sachin','Bodeli','Rajmahal','Sundergarh','Vasai-Virar','Amloh','Bijnor','Shujalpur','Soyagaon','Nathdwara','Navsari','Dahanu','Deesa','Modasa','Saputara','Shirdi','Tiruvannamalai','Bahadurgarh','Amtala','Miryalguda','Rayagada','Farakka','Guntakal','Itarsi','Singrauli','Jamalpur','Proddatur','Lavasa','Mandi','Katra','Leh','Begowal','Sagwara','Pratapgarh','Ramganj','Rishikesh','Digboi','Nalbari','Nazira','Sibsagar','Diphu','Kishanganj','Dalli Rajhara','Churachanpur','Tura','Khliehriat','Darlipali','Bhograi','Badharghat','Kailasahar','Teliamuraanch','Dinhata','Malbazaranch','Arambag','Rupnarayanpur','Egra','Howrah','Hilianch','Kapadvanj','Dharmaj','Dhamnod','Karad','Kumbhoj','Tasgaon','Jath','Kamptee','Govandi','Dombivli','Airoli','Nerul','Kandukur','Palacole','Williamnagar','Mokokchung','Rajapur','Pokhran','Malappuram','Sanchore','Kosi','Nalgonda','Bhongir','Ganganagar','Bawal','Wardha','Khopoli','Roha','Saharanpur','Firozabad','Kanyakumari','Bijapur','Raichur','Jajpur','Udhampur','Parwanoo','Etah','Begusarai','Nawanshahr','Bagalkot','Amarillo','Godda','Dadri','Sangli','Dindigul','Sitarganj','Bazpur','Bhadrak','Surajgarh','Kanchipuram','Khatima','Sri Ganganagar','Sihora','Sidhi','Shrirampur','Tezpur','Dehri','Bhagwanpur','Guna','Palampur','Orai','Kutch','Ballia','Bahraich','Basti','Moga','Faridkot','Keonjhar','Yerraguntla','Tumkur','Kangra','Bathinda','Lakhimpur','Muzaffarpur','Rawatbhata','Nanded','Mahbubnagar','Shahdol','Jaigarh','Katni','Mahasamund','Ambikapur','Jagdalpur','Sikandrabad','Shahpura','Hazaribagh','Armoor','Bashir Bag','Eluru','Hindupur','Moti Nagar','Nandyal','Peddapuram','Arrah','Banka','Bhabua','Katihar','Laheriasarai','Lohardaga','Madhepura','Sindri','Bhatapara','Phulbani','Barpeta','Bomdila','Dibrugarh','Lamphelpat','Naharlagun','Bagnan','Baidyabati','Bansberia','Baruipur','Burdwan','Canning','Chakdaha Bongaon','Domjur','Hugli','Jamuria','Kakdwip','Karimpur','Raigunj','Rajpur Sonarpur','Uluberia','Badgam','Baramulla','Kargil','Pampore','Pulwama','Rajouri','Reasi','Samba','Sopore','Batala','Beas','Bharoli Kalan','Dhuri','Firozpur','Jagraon','Jind','Mojowal','Narnaul','Thoba Dhani','Zira','Chandaulli','Hapur','Arsikere','Chikmadure','Chikodi','Hosekera','Karikere','Kumta','Mirjan','Naganur','Nelhal','Rannibennur','Shirahatti','Balusseri','Kizhoor','Kodivayoor','Kottarakkara','Kumily','Shornur','Mananthavady','Mattannur','Nedumangad','Ottappalam','Palghat','Parassala','Pathanapuram','Triprayar','Vadakkancheri','Vazhuthacaud','Harur','Kallakkuruchi','Oddanchatram','Oragadam','Perundurai','Pollachi','Ulundurpettai','Veerapandi','Villupuram','Candolim','Cansualim','Margao','Mapusa','Chhota Udaipur','Dhoraji','Dungar','Gadag','Mahesana','Navalgadh','Ramnagar','Thangad','Dhamna','Dhar','Mahodiya','Melkheda','Panna','Rajoda','Rajpura','Pipariya','Shamgarh','Sheopur','Umaria','Achalpur','Ambejogai','Ankalkhop','Chalisgaon','Ichalkaranji','Igatpuri','Paranda','Phaltan','Jetpur','Vaishali','Yavatmal','Washim','Rewa','Dimapur','Haflong','Talcher','Shirpur','Hajipur','Namakkal');
		$this->set('city',$city);
		$user = $this->Session->read('User');
		if(!empty($this->data)){
			$data = $this->data;
			$data['user_id'] = $user['user_id'];
			if($this->UserFirm->save($data)){
				$user['r1'] = 1;
				$this->Session->write('User',$user);
				$this->User->updateALL(array('r1' => 1),array('id' => $user['user_id']));
				$this->redirect( array( 'controller' => 'home_pages', 'action' => 'deshBoard' ) );
			}
		}
	}
}