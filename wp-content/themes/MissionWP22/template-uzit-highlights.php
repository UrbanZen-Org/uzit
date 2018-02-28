<?php 
/*
  Template Name: UZIT Highlights
*/

$year = $_GET["yr"];
if(!$year){
    $year='2015';
}
$headerimg = get_post_meta(get_the_ID(), 'headerimg', true);
?>


<?php get_header(); ?>

<link rel="stylesheet" type="text/css" href="http://uzit.urbanzen.org/wp-content/themes/MissionWP22/stylesheets/custom/highlights.css" />

<div id="Highlights" class="container noBannerContent">
    
    <?php if($headerimg): ?>
    <div class="header-container" style="width:100%;margin-bottom:20px;">
        <img src="<?php echo $headerimg; ?>" alt="Yearly Highlights Banner" style="width:100%;"/>
    </div>
    <?php endif; ?>
    
    <div class="top-container clearfix" style="text-align:center;">
        <h1>YEARLY HIGHLIGHTS</h1>
        <ul style="width:240px;display:inline-block;">
			 <li><a class="yr nav-2015 current" href="?yr=2015" data="2015">2015</a></li>
			 <li><a class="yr nav-2014" href="?yr=2014" data="2014">2014</a></li>
            <li><a class="yr nav-2013" href="?yr=2013" data="2013">2013</a></li>
            <li><a class="yr nav-2012" href="?yr=2012" data="2012">2012</a></li>
        </ul>
    </div>
    
    <div id="yr-2012" class="postContent 2012" style="">
        <div class="box">
            <h3>January 2012 through March 2012</h3>
            <ul class="items">
                <li>
                    <p>
                        UZIT Clinical Rotation at St. Damien Pediatric Hospital. PaP, Haiti – 22 UZITs provide more than 1,100 hours of UZIT 
                        classes/sessions to hospital staff, patients and family members. In total, more than 1800 volunteer hours from the 2011 
                        UZITs were at St. Damien/St. Luc.
                    </p>
                </li>
            </ul>
        </div>
        <div class="box">
            <h3>February 2012</h3>
            <ul class="items">
                <li><p>UZIT In-Hospital training concludes at UCLA Health System.</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>March 2012</h3>
            <ul class="items">
                <li><p>2011 UZITs complete the 500-hr year-long UZIT Program.</p></li>
                <li><p>More than 10,000 patient sessions using the Integrative Modalities.</p></li>
                <li><p>YogaWorks Level I UZIT for Self- and Family-Care<br>Tarzana training completed.</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>April 2012</h3>
            <ul class="items">
                <li><p>YogaWorks adds UZIT classes to the LA studio schedules</p></li>
                <li><p>UZITs provide Integrative Therapy sessions at TedMed, Washington, DC.</p></li>
                <li><p>UZIT class at Yoga Journal Conference, NYC taught by Rodney Yee and Colleen Saidman sold out.  More than 175 people experienced the session.</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>May 2012</h3>
            <ul class="items">
                <li>
                    <p>
                        UZIT In-Hospital training concludes at UCLA Health System.<br />Almost 100 doctors, nurses and allied health care professionals 
                        trained in 	our UZIT In-Hospital Training
                    </p>
                </li>
            </ul>
        </div>
        <div class="box">
            <h3>September 2012</h3>
            <ul class="items">
                <li><p>YogaWorks Level I UZIT for Self- and Family-Care Newport Beach training completed</p></li>
                <li><p>YogaWorks adds UZIT classes to the weekly schedule in NYC.</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>November 2012</h3>
            <ul class="items">
                <li><p>UZIT Class @ YogaWorks – Relief Effort, Hurricane Sandy</p></li>
                <li><p>YogaWorks Level I UZIT for Self- and Family-Care<br>Pacific Palisades Training completed</p></li>
                <li><p>Accelerated Training<br>November 2012 – 30 trainees, each with a solid background in one or more of the modalities train to become UZITs in an intensive format.  (Training concludes in February 2013.)</p></li>
                <li><p>Training the Trainers<br>November 2012 – Indefinite<br>Individualized Course</p></li>
            </ul>
        </div>
    </div>
    
    <div id="yr-2013" class="postContent 2013" style="display:none;">
        <div class="box">
            <h3>January 2013</h3>
            <ul class="items">
                <li><p>Accelerated UZIT training concludes at Sag Harbor, NY</p></li>
                <li><p>Training the Trainers Program – training continues</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>February 2013</h3>
            <ul class="items">
                <li><p>Clinical rotations for Accelerated Trainees in hospitals such as Beth Israel Medical Center, NYC, Southampton Hospital, Southampton, NY and American Cancer Society’s Hope Lodge, NYC</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>April 2013</h3>
            <ul class="items">
                <li><p>Yoga Journal NYC – Rodney Yee and Colleen Saidman, co-executive directors of the UZIT Program, teach a sold out UZIT class to more than 175 participants</p></li>
                <li><p>UZIT at UCLA Health System Training for Medical Professionals begins</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>May 2013</h3>
            <ul class="items">
                <li><p>UZIT at UCLA Health System continues</p></li>
                <li><p>Fireside Chat – Donna Karan hosted former President Bill Clinton to discuss Healthcare in America.  Call to action was given to support the UZIT Program in its expansion and impact.</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>June 2013</h3>
            <ul class="items">
                <li><p>UZIT at UCLA Health System - clinical rotations begin</p></li>
                <li><p>Rodney Yee and Colleen Saidman teach to thousands of yogis in Times Square Alliance’s Solstice in Times Square – a generous donation was made to UZIT on behalf of the participants and organizers</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>July 2013</h3>
            <ul class="items">
                <li><p>UZIT at UCLA Health System Assessments – More than 40 more UZITs brings total number of trained UZITs on staff at UCLA Health Systems to almost 150</p></li>
                <li><p>YogaWorks UZIT Level I at Larchmont, Los Angeles begins</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>August 2013</h3>
            <ul class="items">
                <li><p>YogaWorks UZIT Level I at South Bay, Los Angeles begins</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>September 2013</h3>
            <ul class="items">
                <li><p>Yoga On High launches Accelerated Training</p></li>
                <li><p>YogaWorks UZIT Level I at SoHo, NYC begins</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>October 2013</h3>
            <ul class="items">
                <li><p>Yoga On High Accelerated Training continues on-site at clinical partner Wexner Heritage Village</p></li>
                <li><p>YogaWorks UZIT Level I at Westlake, Los Angeles begins</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>November 2013</h3>
            <ul class="items">
                <li><p>YogaWorks  UZIT Level I at SouthBay concludes</p></li>
            </ul>
        </div>
        <div class="box">
            <h3>December 2013</h3>
            <ul class="items">
                <li><p>YogaWorks UZIT Level I at SoHo concludes</p></li>
                <li><p>YogaWorks UZIT Level I at Westlake concludes</p></li>
            </ul>
        </div>
    </div>
    <div id="yr-2014" class="postContent 2014" style="display:none;">
	 <div class="box">
	 <h3>2014</h3>
	 <ul class="items">
	 <li><p>Ohio State University partnership launches</li></p>
	 <li><p>Kaiser grants OUSD funds to expand UZIT@School to six campuses to share mindfulness and self-care education</li></p>
	 <li><p>UZIT@Home pilots at Wexner Heritage Village, allowing patients continuity of care beyond their stay</li></p>
 </ul>
	 </div>
     
    </div>
    <div id="yr-2015" class="postContent 2015" style="display:none;">
	 <div class="box">
	 <h3>2015</h3>
	 <ul class="items">
	 <li><p>CareRite pilot launches, placing UZIT in rehabilitation and skilled nursing communities</li></p>
	 <li><p>Expanded into Boston Children’s Hospital (Harvard University)</li></p>
	 <li><p>Expand yoga in Haitian school and orphanages through our partnership with Sow-A-Seed and Ayiti Yoga</li></p>
	 <li><p> We have graduated more then 750 UZITs since the program launched in 2009</li></p>
	 <li><p>To date, there are more then 25,000 documented patient sessions</li></p>
	 </ul>
	 </div>
     
    </div>
    
</div>

<script>
    jQuery('a.yr').click(function(){
        var yr_id = jQuery(this).attr('data');
        
        jQuery('.postContent').hide();
        jQuery('.postContent.' + yr_id).show();
        
        jQuery('a.yr').removeClass('current');
        jQuery('a.nav-' + yr_id).addClass('current');
        return false;
    });
    <?php if($year): ?>
    jQuery('a.nav-<?php echo $year; ?>').trigger('click');
    <?php endif; ?>
</script>

<?php get_footer(); ?>