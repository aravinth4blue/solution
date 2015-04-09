<?php
$dom = new DOMDocument();
@$dom->loadHTMLFile("http://stackoverflow.com/questions/tagged/c%23");
$xpath = new DOMXPath($dom);
$flag=0;
$items=array();
//Those contents referring to question-summary
$question = $xpath->query('.//div[@class="question-summary"]');	
$ques =count($xpath->query('.//div[@class="question-summary"]'));

//echo $qn_vote;

foreach ($question as $qn) {
	
	$qn_ans	  = $xpath->query('.//div[@class="status answered"]',$qn);
	

	foreach($qn_ans as $q){
		//echo $q->nodeValue;
		$flag=1;
		if($flag==1){
			$count2++;
			//echo $count2;
			$qn_accepted=$count2;
		}
	}
	$qn_ans	  = $xpath->query('.//div[@class="status unanswered"]',$qn);

	foreach($qn_ans as $q){
		//echo $q->nodeValue;
		$flag=1;
		if($flag==1){
			$count3++;
			//echo $count2;
			$qn_unans=$count3;
		}
	}

	$count++;
	
	$qn_vote  = $xpath->query('.//span[@class="vote-count-post"]',$qn);
	foreach($qn_vote as $vot){
		
		/*$flag=1;
		if($flag==1){
			$count3++;
			$no_of_votes=$count3;
		}*/
		$vot->nodeValue;

		//$count++;

	}
	

}
//echo $qn_vote;
echo "<br>";
//echo $qn_ans;
echo $qn_accepted;
echo "<br>";
echo $qn_unans;
echo "<br>";
echo $count;

?>
