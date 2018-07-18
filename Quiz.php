<?php

namespace Myapp;

class Quiz{
	private $_quizSet = [];
	public function __construct(){
		$this->_steup();
		
		if(!isset($_SESSION["current_num"])){
			$_SESSION["current_num"] = 0;
		}
	}
	
	public function getCurrentQuiz(){
		return $this->_quizSet[$_SESSION["current_num"]];
	}
	
	private function _steup(){
		$this->_quizSet[] = [
			"q" => "今年は平成何年でしょうか？",
			"a" => ["30", "28", "24", "29"]
		];

		$this->_quizSet[] = [
			"q" => "ワールドカップに優勝した国は？",
			"a" => ["フランス", "ブラジル", "ベルギー", "クロアチア"]
		];

		$this->_quizSet[] = [
			"q" => "最優秀選手は誰でしょう？",
			"a" => ["モドリッチ", "エムバペ", "アザール", "ラキティッチ"]
		];
	}

}