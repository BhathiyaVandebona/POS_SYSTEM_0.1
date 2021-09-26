<?php
//this function will take a given key and will parse it and sill return an incremented key the id is needed to give the proper identifier prefix strings and the strat is where the parsing should start and is choosen automatically using the possible identifers,

//Doctors -- >> MDD1200 (as in Medical Doctor)
//Nurses -- >> MDN1201 (as in Medical Nurse)

// Cleaner -- >> NMDC1500 (as in Non-Medical Cleaner)
// Attendant -- >> NMDAT1501 (as in Non-Medical Attendant)
// Administrator -- >> NMDA1600 (as in Non-Medical Administrator)
// Receptionist -- >> NMDR1700 (as in Non-Medical Receptionist)

// Employee -- >> EMP1100 (as in Employee) for the identifier

	function parseKey($key,$id){
		$start;
		if(substr($key,0,3) == "MDD"){
			//Doctors -- >> MDD1200 (as in Medical Doctor)
			$start = 3;
		}elseif(substr($key,0,3) == "MDN"){
			//Nurses -- >> MDN1201 (as in Medical Nurse)
			$start = 3;
		}elseif(substr($key,0,4) == "NMDC"){
			// Cleaner -- >> NMDC1500 (as in Non-Medical Cleaner)
			$start = 4;
		}elseif(substr($key,0,5) == "NMDAT"){
			// Attendant -- >> NMDAT1501 (as in Non-Medical Attendant)
			$start = 5;
		}elseif(substr($key,0,4) == "NMDA"){
			// Administrator -- >> NMDA1600 (as in Non-Medical Administrator)
			$start = 4;
		}elseif(substr($key,0,4) == "NMDR"){
			// Receptionist -- >> NMDR1700 (as in Non-Medical Receptionist)
			$start = 4;
		}else{
			// Employee -- >> EMP1100 (as in Employee) for the identifier
			$start = 3;
		}
		return $id . strval(intval((substr($key,$start))) + 1);
	}
?>
