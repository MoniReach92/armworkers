<section class="content">
  <div class="row">
	
	<?php	
	switch ($ptl) {
    case 'home':
        include_once 'page/home.php';
        break;
    case 'l_workers':
        include_once 'page/l_workers.php';
        break;
    case 'f_bio':
        include_once 'page/f_bio.php';
        break;
	case 'new_worker':
        include_once 'page/new_worker.php';
        break;
	case 'l_industries':
        include_once 'page/l_industries.php';
        break;
	case 'new_industry':
        include_once 'page/new_industry.php';
        break;
	case 'l_employers':
        include_once 'page/l_employers.php';
        break;
	case 'new_employer':
        include_once 'page/new_employer.php';
        break;
	case 'l_admins':
        include_once 'page/l_admins.php';
        break;
	case 'new_role':
        include_once 'page/new_role.php';
        break;
	case 'l_countries_workers':
        include_once 'page/l_countries_workers.php';
        break;
	case 'l_industries_workers':
        include_once 'page/l_industries_workers.php';
        break;
			
	case 'blank':
        include_once 'page/home.php';
        break;
			
	default:
       include_once 'page/home.php';
       break;
	}
	?>
    </div>
</div>