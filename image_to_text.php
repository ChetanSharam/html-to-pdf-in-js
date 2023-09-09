<?php

	function receiptOcr($imageFile) {
		  $receiptOcrEndpoint = 'http://ocr.asprise.com/api/v1/receipt'; //

		  $ch = curl_init();
		  curl_setopt($ch, CURLOPT_URL, $receiptOcrEndpoint);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		  curl_setopt($ch, CURLOPT_POSTFIELDS, array(
		   'api_key' => 'TEST',      // Use 'TEST' for testing purpose
		    'recognizer' => 'auto',     // can be 'US', 'CA', 'JP', 'SG' or 'auto'
		    'ref_no' => 'ocr_php_123',  // optional caller provided ref code
		    'file' => curl_file_create($imageFile) // the image file
		  ));

		  $result = curl_exec($ch);
		  if(curl_errno($ch)){
		      throw new Exception(curl_error($ch));
		  }

		  $arr = json_decode($result);
		  echo "<pre>"; print_r($arr);

	}
$filename = "C:\Users\Dell\Downloads\Birthday-Invitation.jpeg";
	
	receiptOcr($filename);