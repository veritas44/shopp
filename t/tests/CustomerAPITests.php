<?php
/**
 * CustomerAPITests$1
 *
 * @author Jonathan Davis
 * @version 1.0
 * @copyright Ingenesis Limited,  1 December, 2009
 * @package shopp
 * @subpackage tests
 **/
class CustomerAPITests extends ShoppTestCase {

	function test_init () {
		global $Shopp;
		$_SERVER['REQUEST_URI'] = "/";
		$Account = new Customer(1);
		$Shopp->Cart->loggedin($Account);
	}
	
	function test_customer_url () {
		ob_start();
		shopp('customer','url');
		$actual = ob_get_contents();
		ob_end_clean();
		$this->assertEquals('http://shopptest/store/account/',$actual);
	}

	function test_customer_recoverurl () {
		ob_start();
		shopp('customer','recover-url');
		$actual = ob_get_contents();
		ob_end_clean();
		$this->assertEquals('http://shopptest/store/account/?acct=recover',$actual);
	}
	
	function test_customer_process () {
		$this->assertFalse(shopp('customer','process'));
	}
	
	function test_customer_loggedin () {
		$this->assertTrue(shopp('customer','loggedin'));		
	}
	
	function test_customer_notloggedin () {
		$this->assertFalse(shopp('customer','notloggedin'));
	}
	
	function test_customer_loginlabel () {
		ob_start();
		shopp('customer','login-label');
		$actual = ob_get_contents();
		ob_end_clean();
		$this->assertEquals('Login Name',$actual);
	}
	
	function test_customer_accountlogin () {
		ob_start();
		shopp('customer','account-login');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'account-login','id' => 'account-login')
		);
		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_passwordlogin () {
		ob_start();
		shopp('customer','password-login');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'password','name' => 'password-login','id' => 'password-login')
		);
		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_recoverbutton () {
		ob_start();
		shopp('customer','recover-button');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'submit','name' => 'recover-login','id' => 'recover-button')
		);
		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_loginbutton () {
		ob_start();
		shopp('customer','login-button');
		$actual = ob_get_contents();
		ob_end_clean();
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_errorsexist () {
		$this->assertTrue(shopp('customer','errors-exist'));
	}
	
	function test_customer_loginerrors () {
		ob_start();
		shopp('customer','login-errors');
		$actual = ob_get_contents();
		ob_end_clean();

		$this->assertEquals('<p class="error">Test Error</p>',$actual);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_menu_tags () {
		ob_start();
		while (shopp('customer','menu')) {
			shopp('customer','management');
			shopp('customer','management','url');
		}
		$actual = ob_get_contents();
		ob_end_clean();
		
		$this->assertEquals('My Accounthttp://shopptest/store/account/?acct=accountDownloadshttp://shopptest/store/account/?acct=downloadsOrder Historyhttp://shopptest/store/account/?acct=historyOrder Statushttp://shopptest/store/account/?acct=statusLogouthttp://shopptest/store/account/?acct=logout',$actual);
	}
		
	function test_customer_accounts () {
		ob_start();
		shopp('customer','accounts');
		$actual = ob_get_contents();
		ob_end_clean();
		$this->assertEquals('wordpress',$actual);
	}
	
	function test_customer_orderlookup () {
		ob_start();
		shopp('customer','order-lookup');
		$actual = ob_get_contents();
		ob_end_clean();
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_firstname () {
		ob_start();
		shopp('customer','firstname');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'firstname','id' => 'firstname')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_lastname () {
		ob_start();
		shopp('customer','lastname');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'lastname','id' => 'lastname')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_company () {
		ob_start();
		shopp('customer','company');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'company','id' => 'company')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_email () {
		ob_start();
		shopp('customer','email');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'email','id' => 'email')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_loginname () {
		ob_start();
		shopp('customer','loginname');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'login','id' => 'login')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_password () {
		ob_start();
		shopp('customer','password');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'password','name' => 'password','id' => 'password')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_confirmpassword () {
		ob_start();
		shopp('customer','confirm-password');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'password','name' => 'confirm-password','id' => 'confirm-password')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_phone () {
		ob_start();
		shopp('customer','phone');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'phone','id' => 'phone')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_info_tags () {
		$this->assertFalse(shopp('customer','hasinfo'));
		ob_start();
		shopp('customer','info','type=text&name=Test Field');
		$actual = ob_get_contents();
		ob_end_clean();
				
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'text','name' => 'info[Test Field]','id' => 'customer-info-test-field')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	function test_customer_savebutton () {
		ob_start();
		shopp('customer','save-button');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$expected = array(
			'tag' => 'input',
			'attributes' => array('type' => 'submit','name' => 'save','id' => 'save-button')
		);

		$this->assertTag($expected,$actual,'',true);
		$this->assertValidMarkup($actual);
	}
	
	// function test_customer_download_tags () {
	// 	
	// }
	
	function test_customer_purchase_tags () {
		ob_start();
		if (shopp('customer','has-purchases'))
			while (shopp('customer','purchases'))
				shopp('customer','receipt');
		$actual = ob_get_contents();
		ob_end_clean();
		
		$this->assertEquals('http://shopptest/store/account/?acct=receipt&id=1',$actual);
	}

} // end CustomerAPITests class

?>