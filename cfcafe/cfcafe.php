<?php

	class cafe{
		//R1 if hari biasa then cafe sepi (0.7)
		//R2 if pagi hari and hari biasa then cafe sepi(0.7)
		//R3 if malam hari and hari biasa then cafe ramai (0.6)
		//R4 if mendekaati weekend  ramai (0.8)
		//R5 if pagi hari and mendekati weekend then cafe sepi (0.5)
		//R6 if siang hari and mendekati weekend then cafe ramai (0.7)
		//R7 if malam hari and mendekati weekend then cafe ramai (0.7)
		//R8 if weekend then ramai (0.5)
		//R9 if pagi hari and weekend then cafe sepi (0.6)
		//R10 if siang hari and weekend then cafe sepi (0.4)
		//R11 if malam hari and weekend then cafe sepi (0.4)
		//R12 if hari senin then cafe sepi (0.7)
		//R13 if masa mendekati lebaran then cafe ramai (0.8)
		//R14 if pagi hari and masa mendekati lebaran then cafe sepi (0.5)
		//R15 if siang hari and masa mendekati lebaran then cafe ramai (0.7)
		//R16 if malam hari and masa mendekati lebaran then cafe ramai (0.8)
		
		
		public function jawaban($form){
			echo ' <input type="radio" name="'.$form.'" value="1">Ya
					<input type="radio" name="'.$form.'" value="0.1">Kurang Tahu 
					<input type="radio" name="'.$form.'" value="0.6">Mungkin 
					<input type="radio" name="'.$form.'" value="-0.5">Mungkin Tidak
					<input type="radio" name="'.$form.'" value="-1">Tidak
				';
				
				return $_POST[$form];
		}
		
		public function r1($biasa){
			return ($biasa * 0.7);
		}
		
		public function r2($pagi,$biasa){
			return (min($pagi,$biasa)*0.7);
		}
		
		public function r3($siang,$biasa){
			return (min($siang,$biasa)*0.6);
		}
		
		public function r4($malam,$biasa){
			return (min($malam,$biasa)*0.6);
		}
		
		public function r5($dekatweekend){
			return ($dekatweekend*0.8);
		}
		
		public function r6($pagi, $dekatweekend){
			return (min($pagi,$dekatweekend)*0.5);
		}
		
		public function r7($siang, $dekatweekend){
			return (min($siang,$dekatweekend)*0.7);
		}
		
		public function r8($malam, $dekatweekend){
			return (min($malam,$dekatweekend)*0.7);
		}
		
		public function r9($weekend){
			return ($weekend*0.5);
		}
		
		public function r10($pagi, $weekend){
			return (min($pagi,$weekend)*0.6);
		}
		
		public function r11($siang, $weekend){
			return (min($siang,$weekend)*0.4);
		}
		
		public function r12($malam, $weekend){
			return (min($malam,$weekend)*0.4);
		}
		
		public function r13($senin){
			return ($senin*0.7);
		}
		
		public function r14($lebaran){
			return($lebaran*0.8);
		}
		
		public function r15($pagi, $lebaran){
			return (min($pagi,$lebaran)*0.5);
		}
		
		public function r16($siang, $lebaran){
			return (min($siang,$lebaran)*0.7);
		}
		
		public function r17($malam, $lebaran){
			return (min($malam,$lebaran)*0.8);
		}
	
		public function hipo($a,$b){
			if($a > 0 and $b > 0){
				return ($a+$b*(1-$a));
			}elseif($a < 0 or $b <0){
				return (($a+$b)/(1-min(abs($a),abs($b))));
			}elseif($a <0 and $b < 0){
				return ($a+$b*(1+$a));
			}
		}

		public function cframaipagi($r5,$r6,$r14){
			$a = $this->hipo($r5,$r6);
			$b = $this->hipo($a,$r14);
			
			
			return $b;
		}
		
		public function cfsepipagi($r1,$r2,$r9,$r10,$r13,$r15){
			$a = $this->hipo($r1,$r2);
			$b = $this->hipo($a,$r9);
			$c = $this->hipo($b,$r10);
			$d = $this->hipo($c,$r13);
			$e = $this->hipo($d,$r15);
			
			return $e;
		}

		public function cframaisiang($r3,$r5,$r6,$r7,$r14,$r16){
			$a = $this->hipo($r3,$r5);
			$b = $this->hipo($a,$r6);
			$c = $this->hipo($b,$r7);
			$d = $this->hipo($c,$r14);
			$e = $this->hipo($d,$r16);
			
			return $e;
		}
		
		public function cfsepisiang($r1,$r2,$r9,$r10,$r11,$r13,$r15){
			$a = $this->hipo($r1,$r2);
			$b = $this->hipo($a,$r9);
			$c = $this->hipo($b,$r10);
			$d = $this->hipo($c,$r11);
			$e = $this->hipo($d,$r13);
			$f = $this->hipo($e,$r15);
			
			return $f;
		}
		
		public function cframaimalam($r3,$r4,$r5,$r6,$r7,$r8,$r14,$r16,$r17){
			$a = $this->hipo($r3,$r4);
			$b = $this->hipo($a,$r5);
			$c = $this->hipo($b,$r6);
			$d = $this->hipo($c,$r7);
			$e = $this->hipo($d,$r8);
			$f = $this->hipo($e,$r14);
			$g = $this->hipo($f,$r16);
			$h = $this->hipo($g,$r17);
			
			return $h;
		}
		
		public function cfsepimalam($r1,$r2,$r9,$r10,$r11,$r12,$r13,$r15){
			$a = $this->hipo($r1,$r2);
			$b = $this->hipo($a,$r9);
			$c = $this->hipo($b,$r10);
			$d = $this->hipo($c,$r11);
			$e = $this->hipo($d,$r12);
			$f = $this->hipo($e,$r13);
			$g = $this->hipo($f,$r15);
			
			return $g;
		}
	}
?>