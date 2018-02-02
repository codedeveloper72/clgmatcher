<?php 
global $base_path;
//print_r(field_collection_item_load(2));
//print_r($node);exit;
?>
<style>
    .institutionBlock {
        margin: 0 0 0px 0;
        padding-bottom: 0px;
        background: url(/sites/all/themes/matcher/img/shadow2.png) center bottom no-repeat;
    }
    .institutionBlock h4 {
        margin: 0;
    }
    .best-fit-search-block {
        padding-bottom: 0;
    }
    fieldset {
        margin-bottom: 12px;
    }
    fieldset legend {
    width: auto;
    background: transparent;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;    
    }
    .sectionBlock {
        padding: 12px;
    }
    .form-inline .form-control {
        margin: 5px; 
    }
    .CompatibilityIndexBlock .form-inline button.btn-green {
        background: #5dd39e;
        cursor: pointer;
        border-radius: 0;
        color: #FFF;
        font-weight: 500;
        text-transform: uppercase;
        margin-top: -15px;
    }
    .CompatibilityIndexBlock .form-inline button.btn-green:hover {
        background: #31b378;
    }
    table.ratingBlock {
        
    }
    table.ratingBlock tr th {
        text-align: center;
        border: 1px solid #0078d7;
        border-right: 1px solid #FFF;
        border-bottom: 1px solid #FFF;
        padding: 5px;
        background: #0078d7;
        color: #FFF;
    }
    table.ratingBlock tr th.ranking-cell {
        border-right: 1px solid #0078d7; 
    }
    table.ratingBlock tr th.year-cell:last-child {
        border-right: 1px solid #0078d7; 
    }
    table.ratingBlock tr td {
        border: 1px solid #0078d7;
        padding: 3px 5px;
    }
    table.ratingBlock tr td .svg-inline--fa {
        color:#4CAF50;
    }
    table.ratingBlock tr td .svg-inline--fa.unfill {
        color:#495057;
    }
</style>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3 text-center">College Matcher</h1>
        <h4 class="text-center">Find Your Perfect Fit</h4>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>-->
    </div>
</div>
<div class="container best-fit-search-block">
    <div class="row">
        <div class="col-md-12">
            <!--<h4 class="block-title">Find your best fit</h4>
            <form class="form-inline">
                <input class="form-control college-name" type="text" placeholder="Enter College Name" />
                <input class="form-control city-name" type="text" placeholder="Enter City Name" />
                <input class="form-control state-name" type="text" placeholder="Enter State Name" />
                <input class="form-control overall-ranking" type="text" placeholder="Enter Overall Ranking" />
                <input class="form-control overall-rating" type="text" placeholder="Enter Overall Rating" />
                <button class="btn btn-green" type="submit">check compatibility</button>
            </form>-->
            <div class="row institutionBlock">
                    <div class="blockInfoImage vMidImg">
                        <img src="<?php print file_create_url($node->field_college_main_building['und'][0]['uri']); ?>" title="<?php print $node->title; ?>" alt="<?php print $node->title; ?>">
                    </div>
                    <div class="blockInfoDiscristion">
                        <h4 class="collegeTitle"><?php print $node->title; ?></h4>
                        <sub><?php print $node->field_college_slug['und'][0]['value']; ?></sub>
                        <div class="instituteInfo">
                            <ul class="clg-info">
                                <?php
                                if($node->field_state['und'][0]['tid'] > 0) {
                                    ?>
                                    <li>
                                    <a href="javascript:void()"><?php print get_term_name_by_tid($node->field_state['und'][0]['tid']); ?></a>                                    
                                </li>
                                    <?php
                                }
                                 ?>
                                
                                <li>
                                    Estd : <span>1961</span>
                                </li>
                                <?php
                                if($node->field_ownership['und'][0]['tid'] > 0) {
                                    ?>
                                    <li>Ownership : <span><?php print get_term_name_by_tid($node->field_ownership['und'][0]['tid']); ?></span></li>
                                    <?php
                                }
                                 ?>

                                 <?php
                                if($node->field_naac_accreditation['und'][0]['tid'] > 0) {
                                    ?>
                                    <li>Approved By : <span><?php print get_term_name_by_tid($node->field_naac_accreditation['und'][0]['tid']); ?></span></li>
                                    <?php
                                }
                                 ?>                               
                            </ul>
                            <ul class="clg-info" id="toreplace" style="display:none;">
                                <li>http://www.iitd.ac.in</li>
                                <li>E-mail : <span>webmaster@admin.iitd.ac.in</span></li>
                                <li>Contact : <span>011-26597135</span></li>
                            </ul>
                        </div>
                    </div>  
                    <div class="clear"></div>     
                </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="compatibility-result-block" style="margin:15px auto;">
                <div class="sectionBlock CompatibilityIndexBlock">
                    <h4 class="text-center">College Matcher Compatibility Index</h4>
                    <form class="form-inline">
                        <fieldset>
                            <legend>Academic Details</legend>
                            <!--<input class="form-control college-name" type="text" placeholder="Enter College Name" />-->
                            <input class="form-control city-name" type="text" placeholder="Enter City Name" />
                            <input class="form-control state-name" type="text" placeholder="Enter State Name" />
                            <input class="form-control overall-ranking" type="text" placeholder="Enter Overall Ranking" />
                            <input class="form-control overall-rating" type="text" placeholder="Enter Overall Rating" />
                        </fieldset>
                        <fieldset>
                            <legend>Preference Details</legend>
                            <input class="form-control city-name" type="text" placeholder="Enter City Name" />
                            <input class="form-control state-name" type="text" placeholder="Enter State Name" />
                            <input class="form-control overall-ranking" type="text" placeholder="Enter Overall Ranking" />
                            <input class="form-control overall-rating" type="text" placeholder="Enter Overall Rating" />
                        </fieldset>
                        <div class="text-center" style="width:100%; margin:12px 0 10px 0;">
                            <button class="btn btn-green" type="submit">check compatibility</button>
                        </div>
                        
                    </form>
                </div>
                
                <!--<div class="row institutionBlock">
                    <div class="blockInfoImage vMidImg">
                        <img src="<?php print $base_path; ?>sites/all/themes/matcher/img/iit-delhi-logo.jpg" title="Indian Institute of Technology Delhi" alt="Indian Institute of Technology Delhi">
                    </div>
                    <div class="blockInfoDiscristion">
                        <h4 class="collegeTitle"><?php print $node->title; ?></h4>
                        <sub>Also Known As: IIT Delhi</sub>
                        <div class="instituteInfo">
                            <ul class="clg-info">
                                <li>
                                    <a href="#">New Delhi</a>,  
                                    <a href="#">Delhi</a>
                                </li>
                                <li>
                                    Estd : <span>1961</span>
                                </li>
                                <li>
                                    Ownership : <span>Government</span>
                                </li>
                                <li>
                                    Approved By : <span>UGC</span>
                                </li>
                            </ul>
                            <ul class="clg-info" id="toreplace" style="display:none;">
                                <li>http://www.iitd.ac.in</li>
                                <li>E-mail : <span>webmaster@admin.iitd.ac.in</span></li>
                                <li>Contact : <span>011-26597135</span></li>
                            </ul>
                        </div>
                    </div>  
                    <div class="clear"></div>     
                </div>-->
                <h4>Your Compatibility</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="GaugeMeter" id="PreviewGaugeMeter_3" data-percent="73" data-text="<font style='color:#333;font-size:35px;letter-spacing:-1px'>73</font>" data-append="<font style='color:#333'></font>" data-size="370" data-theme="Green" data-back="#DDDDDD" data-width="15" data-label="Overall Score" data-style="Semi" data-label_color="#2ad871" style="width: 370px;"> </div>
                    </div>
                    <div class="col-md-6"> 
                        <h5>Summary of score</h5>
                        <div class="featureBlock">
                            <label>Trustworthiness</label>
                            <div class="progressbarBlock">
                                <div class="scoreBar blueBar" style="width: 90%;">90%</div>
                            </div>
                        </div>
                        <div class="featureBlock">
                            <label>Academic Excellence</label>
                            <div class="progressbarBlock">
                                <div class="scoreBar redBar" style="width: 75%;">75%</div>
                            </div>
                        </div>
                        <div class="featureBlock">
                            <label>Job prospects</label>
                            <div class="progressbarBlock">
                                <div class="scoreBar greenBar" style="width: 50%;">50%</div>
                            </div>
                        </div>
                        <div class="featureBlock">
                            <label>ECA</label>
                            <div class="progressbarBlock">
                                <div class="scoreBar greyBar" style="width: 30%;">30%</div>
                            </div>
                        </div>   
                    </div>

                </div>
            </div>
            <div class="amenitiesBlock sectionBlock">
                <h4 class="text-center">Amenities</h4>
                <ul class="infra flex-ul">
                    <li class="amenit-items">
                        <a class="library"> </a>
                        <p>Library</p> 
                    </li>
                    <li class="amenit-items">
                        <a class="food"> </a>
                        <p>Cafeteria</p> 
                    </li>
                    <li class="amenit-items">
                        <a class="room"> </a>
                        <p>Hostel</p> 
                    </li>
                    <li class="amenit-items">
                        <a class="play"> </a>
                        <p>Sports Complex</p> 
                    </li>
                    <li class="amenit-items">
                        <a class="gym"> </a>
                        <p>Gym </p>
                    </li>
                    <li class="amenit-items">
                        <a class="medical"> </a>
                        <p>Hospital / Medical Facilities </p>
                    </li>
                    <li class="amenit-items">
                        <a class="wifi"> </a>
                        <p>Wi-Fi Campus </p>
                    </li>
                    <li class="amenit-items">
                        <a class="auditorium"> </a>
                        <p>Auditorium </p>
                    </li>
                    <li class="amenit-items">
                        <a class="music_room"> </a>
                        <p>Music Room </p>
                    </li>
                    <li class="amenit-items">
                        <a class="ac_room"> </a>
                        <p>A/C Classrooms </p>
                    </li>
                    <li class="amenit-items">
                        <a class="convenience"> </a>
                        <p>Convenience Store </p>
                    </li>
                    <li class="amenit-items">
                        <a class="labs"> </a>
                        <p>Labs</p> 
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>

            <?php 
            if(isset($node->field_rankings_ratings['und'])) { 
                foreach($node->field_rankings_ratings['und'] as $key=>$val) {
                    $dd = field_collection_item_load($val['value']);
                    if(isset($dd->field_mhrd)) {
                        $ranking['MHRD'][] = array(
                            'year' => $dd->field_year['und'][0]['value'],
                            'rank' => $dd->field_mhrd['und'][0]['value']
                            );
                    }
                    if(isset($dd->field_india_today)) {
                        $ranking['India Today'][] = array(
                            'year' => $dd->field_year['und'][0]['value'],
                            'rank' => $dd->field_india_today['und'][0]['value']
                            );
                    }
                    if(isset($dd->field_outlook)) {
                        $ranking['Outlook'][] = array(
                            'year' => $dd->field_year['und'][0]['value'],
                            'rank' => $dd->field_outlook['und'][0]['value']
                            );
                    }
                     if(isset($dd->field_business_line)) {
                        $ranking['Business Line'][] = array(
                            'year' => $dd->field_year['und'][0]['value'],
                            'rank' => $dd->field_business_line['und'][0]['value']
                            );
                    }
                    $year[$dd->field_year['und'][0]['value']] = $dd->field_year['und'][0]['value'];
                }
                //print_r($ranking);exit;
                ?>
            <div class="College-Trustworth-block sectionBlock">
                <h4 class="text-center">College Trustworthiness</h4>
                <section class="">
                    <table class="ratingBlock" width="100%" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th rowspan="2" class="table-cell source-cell">
                                    Sources
                                </th>
                                <th class="text-center ranking-cell" colspan="3">
                                    Rankings
                                </th>
                            </tr>
                            <tr>
                                <?php 
                                foreach($year as $y) {
                                    print '<th class="table-cell year-cell">'.$y.'</th>';
                                }
                                ?>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($ranking as $key => $val) {
                                $rank = 'NA';
                                print '<tr>';
                                print '<td>'.$key.'</td>';
                                foreach($year as $y) {
                                    $flag = FALSE;
                                    foreach($val as $kk => $vv){
                                        if($y == $vv['year']){
                                            $flag = TRUE;
                                            $rank = $vv['rank'];
                                            break;
                                        }
                                    }
                                    print '<td>'.($flag ? $rank : 'NA').'</td>';
                                }
                                print '</tr>';
                            }
                             ?>                           
                        </tbody>
                    </table>
                    <table class="ratingBlock" width="100%" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th rowspan="2" class="table-cell source-cell">
                                    Particulars
                                </th>
                                <th class="text-center ranking-cell" colspan="3">
                                    Ratings
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($node->field_library_ratings['und'][0]['value'])) {
                                if($node->field_library_ratings['und'][0]['value'] > 10) {
                                    $node->field_library_ratings['und'][0]['value'] = 10;
                                }
                                $low = 10 - $node->field_library_ratings['und'][0]['value'];
                                $high = 10 - $low;
                                print '<tr>'; 
                                print '<td>Library Rating</td>';
                                print '<td>';
                                for($i = 0; $i < $high; $i++) {
                                    print '<i class="fas fa-star fill"></i>';
                                }
                                for($i = 0; $i < $low; $i++) {
                                    print '<i class="far fa-star unfill"></i>';
                                }
                                print '</td>';
                                print '</tr>';
                            }
                            ?>

                            <?php 
                            if(isset($node->field_faculty_ratings['und'][0]['value'])) {
                                if($node->field_faculty_ratings['und'][0]['value'] > 10) {
                                    $node->field_faculty_ratings['und'][0]['value'] = 10;
                                }
                                $low = 10 - $node->field_faculty_ratings['und'][0]['value'];
                                $high = 10 - $low;
                                print '<tr>'; 
                                print '<td>Faculty Rating</td>';
                                print '<td>';
                                for($i = 0; $i < $high; $i++) {
                                    print '<i class="fas fa-star fill"></i>';
                                }
                                for($i = 0; $i < $low; $i++) {
                                    print '<i class="far fa-star unfill"></i>';
                                }
                                print '</td>';
                                print '</tr>';
                            }
                            ?>

                            <?php 
                            if(isset($node->field_hostel_ratings_for_females['und'][0]['value'])) {
                                if($node->field_hostel_ratings_for_females['und'][0]['value'] > 10) {
                                    $node->field_hostel_ratings_for_females['und'][0]['value'] = 10;
                                }
                                $low = 10 - $node->field_hostel_ratings_for_females['und'][0]['value'];
                                $high = 10 - $low;
                                print '<tr>'; 
                                print '<td>Hostel Rating For Female</td>';
                                print '<td>';
                                for($i = 0; $i < $high; $i++) {
                                    print '<i class="fas fa-star fill"></i>';
                                }
                                for($i = 0; $i < $low; $i++) {
                                    print '<i class="far fa-star unfill"></i>';
                                }
                                print '</td>';
                                print '</tr>';
                            }
                            ?>

                            
                            
                        </tbody>
                    </table>
                </section>    
            </div>
            <?php } ?>



            <div class="College-placement-block sectionBlock">
                <h4 class="text-center">College Placements &amp; Jobs</h4>
                <section class="">
                    <table class="ratingBlock" width="100%" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th rowspan="2" class="table-cell source-cell">
                                    Particulars
                                </th>
                                <th class="text-center ranking-cell" colspan="3">
                                    Years
                                </th>
                            </tr>
                            <tr>
                                <th class="table-cell year-cell">
                                    2015
                                </th>
                                <th class="table-cell year-cell">
                                    2016
                                </th>
                                <th class="table-cell year-cell">
                                    2017
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Highest Salary
                                </td>
                                <td>
                                    Rs.2500000 PA
                                </td>
                                <td>
                                    Rs.2800000 PA
                                </td>
                                <td>
                                    Rs.3000000 PA
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Medium Salary
                                </td>
                                <td>
                                    Rs.600000
                                </td>
                                <td>
                                    Rs.615000
                                </td>
                                <td>
                                    Rs.625000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lowest Salary
                                </td>
                                <td>
                                    Rs.300000 
                                </td>
                                <td>
                                    Rs.350000
                                </td>
                                <td>
                                    Rs.3750000
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    No. of participating companies
                                </td>
                                <td>
                                    1500
                                </td>
                                <td>
                                    2000
                                </td>
                                <td>
                                    2300
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    No. of students placed
                                </td>
                                <td>
                                    80%
                                </td>
                                <td>
                                    85%
                                </td>
                                <td>
                                    90%
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="companies-sctors-block">
                        <h5>Top participating sector of companies</h5>
                        <ul>
                            <li>
                                IT/Software            
                            </li>
                            <li>
                                Mechanical/Production Engineering             
                            </li>
                            <li>
                                Chemical             
                            </li>
                            <li>
                                Civil             
                            </li>
                        </ul>
                    </div>
                </section>    
            </div>
            <div class="courses-offered-block sectionBlock">
                <h4 class="text-center">Courses Offered <span class="result-show-text">(Showing 5 of 68 Courses)</span></h4>
                <section class="">
                    <ul>
                        <li>
                            <a target="_blank" href="#">
                                B.E. / B.Tech
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                Executive MBA/PGDM
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                M.Des
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                M.E./M.Tech
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                M.Sc.   
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                MBA/PGDM       
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                Ph.D.   
                            </a>
                        </li>
                    </ul>    
                </section>    
            </div>
            <div class="academic-excellence sectionBlock ">
                <h4 class="text-center">Academic Excellence</h4>
                <section>

                </section>
            </div>
            <div class="similarCollegeBlock">
                <h4 class="text-center">College with similar scores</h4> 
                <section class="regular slider">
                    <div>
                        <div class="r-card r-card-institute">
                            <a href="#" target="_blank"> 
                                <img class="lazy" 
                                     alt="Indian Institute of Technology, Kanpur" src="#" 
                                     style="display: inline;"> 
                            </a>
                            <div class="new-card-dtls"> 
                                <a href="#" class="para-4" target="_blank">
                                    Indian Institute of Technology, Kanpur
                                </a>
                                <p class="para-7">Kanpur | Estd. 1959</p>
                                <p class="para-7">&nbsp;</p> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="r-card r-card-institute">
                            <a href="#" target="_blank"> 
                                <img class="lazy" 
                                     alt="Indian Institute of Technology, Kanpur" src="img/iit-kanpur-img.jpg" 
                                     style="display: inline;"> 
                            </a>
                            <div class="new-card-dtls"> 
                                <a href="#" class="para-4" target="_blank">
                                    Indian Institute of Technology, Kanpur
                                </a>
                                <p class="para-7">Kanpur | Estd. 1959</p>
                                <p class="para-7">&nbsp;</p> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="r-card r-card-institute">
                            <a href="#" target="_blank"> 
                                <img class="lazy" 
                                     alt="Indian Institute of Technology, Kanpur" src="img/iit-kharagpur-img.jpg" 
                                     style="display: inline;"> 
                            </a>
                            <div class="new-card-dtls"> 
                                <a href="#" class="para-4" target="_blank">
                                    Indian Institute of Technology, Kanpur
                                </a>
                                <p class="para-7">Kanpur | Estd. 1959</p>
                                <p class="para-7">&nbsp;</p> 
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="r-card r-card-institute">
                            <a href="#" target="_blank"> 
                                <img class="lazy" 
                                     alt="Indian Institute of Technology, Kanpur" src="img/iit-madras-img.jpg" 
                                     style="display: inline;"> 
                            </a>
                            <div class="new-card-dtls"> 
                                <a href="#" class="para-4" target="_blank">
                                    Indian Institute of Technology, Kanpur
                                </a>
                                <p class="para-7">Kanpur | Estd. 1959</p>
                                <p class="para-7">&nbsp;</p> 
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="sectionBlock">
                <h4 class="text-center">User reviews</h4> 
            </div>

        </div>
        <div class="col-md-3">
            <h4 class="text-center">Right Column</h4> </div>
    </div>

    <!-- Example row of columns -->
    <!--<div class="row">
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div>-->
</div>
<hr>
<!-- /container -->   
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
<script src="js/jquery.AshAlom.gaugeMeter-2.0.0.min.js"></script>
<script>
  $(".GaugeMeter").gaugeMeter();
</script>
<script src="js/main.js" type="text/javascript"></script>
<script src="js/slick.min.js"></script>
<script>
  $(".regular").slick({
      dots: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
  });
</script>