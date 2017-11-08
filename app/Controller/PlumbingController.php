<?php
// App::uses('CakeEmail', 'Network/Email');

class PlumbingController extends AppController
{

var $helpers = array('Html', 'Form', 'Js'=>array("Jquery"), 'Flash');
var $components = array('RequestHandler');
public $uses = array('Index','Click');


// public function beforeFilter() {
//
// 	parent::beforeFilter();
//
// 	// Change layout for Ajax requests
// 	if ($this->request->is('ajax')) {
// 		$this->layout = 'ajax';
// 		$this->autorender = false;
// 	}
// }

	public function index() {
		$this->layout='layout';
		// echo "ok";
		// exit;


		// 	if ($this->data != null) {
		// 		$this->Index->save($this->data);
		//
		// 	}
		// }
}

public function click() {
	if ($this->request->is('ajax')) {
		$this->layout = 'ajax';
		$this->autorender = false;
		//$pageCoords = ($this->data['page_coordinates']);
		//$pageCoords = Debugger::exportvar($clicks);

		// echo $_SERVER['HTTP_USER_AGENT'];
		// echo $this->request->env('HTTP_USER_AGENT');

		// echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
		// $browser = get_browser();
		// print_r($browser);
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match('/linux/i', $u_agent)) { //Searches the subject for a match to the regular expression given in the $u_agent.
        $platform = 'Linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'Mac OSX';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'Windows';
    }

		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $browsername = 'Internet Explorer';
				$ub = "MSIE";

    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $browsername = 'Mozilla Firefox';
				$ub = "Firefox";

    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $browsername = 'Google Chrome';
				$ub = "Chrome";

    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $browsername = 'Apple Safari';
				$ub = "Safari";

    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $browsername = 'Opera';
				$ub = "Opera";

    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $browsername = 'Netscape';
				$ub = "Netscape";

    }

		$known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){ //Find the numeric position of the last occurence. If needle is not a string, converted to an int and applied to a value of a charatcer.
            $version= $matches['version'][0]; // Looks for matches in the eg. it would find 'ab' in 'ababcd'.
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}


		$result = array(
			'coordinates' => $this->data['pageCoords'],
			'device' => $this->data['device'],
			'platform' => $platform,
			'browsername' => $browsername,
			'version' => $version,
		);
		// data.coordinates.xValue

echo json_encode($result);

		// echo $this->data['pageCoords'];
		// echo $this->data['device'];
		// echo $platform;
		// echo $browsername;
		// echo $version;


}

$this->request->data['browsername'] = $browsername;
$this->request->data['version'] = $version;
$this->request->data['platform'] = $platform;



	if (!empty($this->data)) {
			$this->Click->save($this->data);
			// $this->Flash->success('The user has clicked', array(
			// 'key' => 'positive',
			// 'params' => array(
			// 	'coordinates' => $this->data['pageCoords'],
			// 	'device' => $this->data['device'],
			// 	'platform' => $platform,
			// 	'browsername' => $browsername,
			// 	'version' => $version
			// )
			// ));
			// return $this->redirect('index');


			// echo <div then the success message with ($this->data['pageCoords'] + $this->data['device'] + $platform + browser + version)
			//echo ($this->data['pageCoords']);

			 }

			//  if (!empty($this->data['pageCoords'])) {
		 // 			$this->Click->save($this->data);
		 // 			//echo ($this->data['pageCoords']);
			 //
		 // 			 }
	// // 	}


		// if ($this->request->data != null) {
		// 	$this->Click->save($this->request->data);
		//
		//
		// 		// }
		// 	}
		exit;
	}
//}
}
