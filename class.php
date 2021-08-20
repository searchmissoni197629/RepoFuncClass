function getClass($clear=false){
			static $count = 0;
			if($clear) $count = 0;
			$arrColor = [
				'red_bg',
				'blue_bg',
				'green_bg',
				'orange_bg',
				'gray_bg',
				'sienna_bg',
				'violet_bg'
			];
			
			if($count == count($arrColor))
				$count = 0;
			$result = $arrColor[$count];
			$count ++;

			return $result;
        }
