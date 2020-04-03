<?php

	class API {
		function __construct() {
			session_start();
			$this->action();
		}

		function action() {
			$res = [];
			$res["error"] = -1;

			switch ($_GET["action"]) {
				case 'entry':
					echo "Hello"

				default:
					$res["error"] = "8568";
					$res["errorstr"] = "Keine Action spezifiziert";
					break;
			}

			echo json_encode($res);
		}



	}
?>
