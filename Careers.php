<?php

/* ==========================================================
 Brisko Website Careers Page
 
 Author: Rob Yeomans
 ============================================================ */

include 'initialize.php';

// Initialize meta tag variables.
$metaTitle = "";
$metaDescription = "";
$metaKeywords = "";
$metaRobots = "index, follow";


// Define any css and js files to include on this page
$cssArray = array('/css/careers.css');
$jsArray = array('/javascript/careers.js');

include 'header.php';


//get job vacancies from XML file
$jobVacanciesXML = simplexml_load_file("/website/brisko/htdocs/data/careers/jobVacancies.xml");
// var_dump($jobVacanciesXML);
$jobVacancies = array();
if ($jobVacanciesXML !== false) {
    $list = $jobVacanciesXML->jobVacancy;
//     var_dump($list);
    for ($i = 0; $i < count($list); $i++) {
        $id = strval($list[$i]->attributes()->id);
        $jobTitle = strval($list[$i]->jobTitle);
        $salaryBand = strval($list[$i]->salaryBand);
        $location = strval($list[$i]->location);
        $content = strval($list[$i]->content);
        
//         $content = $doc->saveHTML();
        
        $jobVacancies[] = array(
            'id' => $id[0],
            'jobTitle' => $jobTitle,
            'salaryBand' => $salaryBand,
            'location' => $location,
            'content' => $content
        );
    }
}


?>
<main>

    <div id="careers-title">
    	<h1>Careers</h1>
    </div>
    <div id="gen-info">
    	<h2>General Information</h2>
    </div>

    
 
 	<?php 
 	
 	foreach ( $jobVacancies as $vacancy) {
        echo '<div class="job-card">'; // start of job-card
        
 	    echo      '<div class="title-container">';
 	    echo          '<h3>' . $vacancy['jobTitle'] . '</h3>';
 	    echo      '</div>';
 	    echo      '<div class="salary-location-container">';
 	    echo          '<div class="salary-container">';
 	    echo              '<h4>' . $vacancy['salaryBand'] . '</h4>';
 	    echo          '</div>';
 	    echo          '<div class="location-container">';
 	    echo              '<h4>' . $vacancy['location'] . '</h4>';
 	    echo          '</div>';
 	    echo      '</div>';
 	    echo      '<div class="description-container">';
 	    echo          '<div class="description-content">';
 	    echo              $vacancy['content'];
 	    echo          '</div>';
 	    echo      '</div>';
        echo      '<div class="button-container">';
    	echo	      '<a class="brisko-btn brisko-btn-small brisko-btn-grey learn-more-btn" href="#">LEARN MORE</a>';
        echo	      '<a class="brisko-btn brisko-btn-small brisko-btn-grey apply-btn" href="#">APPLY</a>';
        echo      '</div>';
        
        echo '</div>'; // end job-card
 	}
 	
 	
 	
 	?>


</main>


<?php 
include 'footer.php';
?>


<script>
$(document).ready(function() {
	console.log('Brisko careers page loaded.')
		
	$('.learn-more-btn').on('click', function(e) {
		e.preventDefault();
		$(this).parent().prev().find('div').find('.para2').slideToggle('slow')
		$(this).html() == 'SHOW LESS' ? $(this).html('LEARN MORE') : $(this).html('SHOW LESS');
	});
	
	
}); // end document ready

</script>

<style>

#careers-title, #gen-info {
	padding: 1vh 2vw;
}
h2, h4 {
	color: var(--brisko-orange);
}
.job-card {
	margin: 4vh 2vw;
	padding: 4vh 2vw;
	box-shadow: 0 0 12px #ccc;
}
.salary-location-container {
	display: flex;
	justify-content: space-between;
	width: 35vw;
	margin-top: 1vh;
}
.description-container {
	margin: 2vh 0vw;
}
.button-container {
	display: flex;
}
.button-container a {
	margin-right: 0.5vw;
}
.apply-btn {
	margin-left: 1vw;
}
.learn-more {
	display: none;
}
.learn-more-active {
	display: block;
	transition: 1s;
}
.apply-btn {
	position: absolute;
	left: 12vw;
}
footer {
	margin-top: 10vh;


</style>