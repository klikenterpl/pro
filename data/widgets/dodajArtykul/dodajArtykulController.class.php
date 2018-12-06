<?php /*windu.org model*/
Class dodajArtykulController extends widgetMainController
{
	public function run() {

$form = new form('dodajArtykul','dodajArtykulSuccess',$_POST,'POST','form-vertical',null,false,false,'dodajartykul.message.negative');
     


$form->add('title', 'input-text',lang::read('artykul.tytul'),null,array());
$form->addRule('title', 'required', null, lang::read('artykul.podajtytul'));

$form->add('imie', 'input-text',lang::read('artykul.imie'),null,array());
$form->addRule('imie', 'required', null, lang::read('artykul.podajimie'));


$form->add('telefon', 'input-text',lang::read('artykul.telefon'),null,array());
$form->addRule('telefon', 'required', null, lang::read('artykul.podajtelefon'));


$form->add('miejsce', 'input-text',lang::read('artykul.miejsce'),null,array());
$form->addRule('miejsce', 'required', null, lang::read('artykul.podajmiejsce'));




$form->add('HTML','
<input type="hidden" name="visible" value="'.$this->params['typ'].'">
<input type="hidden" name="visible" value="'.$this->params['visible'].'">

');

$form->add('HTML','
<label class="control-label">Wybierz kategorię ogłoszenia</label>
<select name="ogloszenie" class="required" size="1" tabindex="70">
<option value="924" selected="selected">--------</option>
<option value="918">Sprzedam</option>
<option value="919">Praca</option>
<option value="920">Nieruchomości</option>
<option value="921">Motoryzacja</option>
<option value="922">Usługi</option>
<option value="923">Kupię</option>
<option value="924">Pozostałe</option>
</select>
',lang::read('artykul.tytul'),null,array());

$form->add('content','textarea',lang::read('artykuly.trescartykulu'),null,array('class'=>"ckeditor", 'id'=>'ckeditor1'));

$form->addRule('content', 'required', null, lang::read('artykul.podajtresc'));

$form->add('cena', 'input-text',lang::read('artykul.cena'),null,array());


$form->add('captcha', 'captcha',null,null,array("tooltip" => lang::read('admin.login.controller.autogener'),"class" => "required","placeholder" => lang::read('admin.login.controller.password')));


$form->addButton('submit',lang::read('artykuly.dodajartykul'),'btn btn-success',null,null,'icon-plus icon-white'); 

$form->setHandler($this);
		$form->handle();

 return array("form" => $form);

	}

public function dodajArtykulSuccess($data) {

$pagesDB = new pagesDB();
$usersDB = new usersDB();

$user = $usersDB->getLoggedIn();

if(!empty($user)){

$data = array_merge(array('parentId'=>$_POST['ogloszenie'],'type'=> '2','status'=> $data['visible'],'name'=>$data['title'],'content'=>$data['content'], 'authorId'=> $user->id, 'cf_email_string'=> $user->email, 'cf_Imienazwisko_string'=>$data['imie'], 'cf_Telefon_numeric'=>$data['telefon'], 'cf_Miejscowosc_string'=>$data['miejsce'], 'cf_Cena_numeric'=>$data['cena']   ));

$page = $pagesDB->insert($data);

router::redirect('http://www.stronymonki.pl',array('mp'=> 'artykul.dodanopomyslnie'));

}

}

}
?>