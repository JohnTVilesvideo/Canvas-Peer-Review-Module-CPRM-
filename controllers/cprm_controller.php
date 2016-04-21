<?php
	class CprmController {
		public function home() {
			require_once('views/cprm/home.php');
		}
		public function error() {
			require_once('views/cprm/error.php');
		}
		public function feedback(){
			require_once('views/cprm/feedback.php');
		}
		public function grades(){
			require_once('views/cprm/grades.php');
		}
		public function logout(){
			require_once('views/cprm/logout.php');
		}
		public function peerReviews(){
			require_once('views/cprm/peerReviews.php');
		}
		public function submitRubric(){
			require_once('views/cprm/submitRubric.php');
		}
		public function exportGrades(){
			require_once('views/cprm/exportGrades.php');
		}
	}
?>