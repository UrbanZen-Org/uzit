<?php 
/*
    Template Name: UZIT Inquiry Page Template
*/ 
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'];
        $number = $_POST['phonenumber'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $interested_in = $_POST['interested'];
        
        $from = "info@urbanzen.org";
        $to = "gillian@urbanzen.org, yonghee@urbanzen.org";
        $subject = "Urban Zen Integrative Therapy: Contact Received.";
        
        $message = 
            '<p><strong>UZIT Contact Information</strong></p>
            <p>Name: '.$fullname.'<br />Email: '.$email.'<br />Phone: '.$number.'</p>
            <p>Interested In: <span style="text-transform:uppercase">'.$interested_in.'</span></p>
            <p>Comments:<br />'.$comments.'</p>';
            
        $headers = "MIME-Version: 1.0" . "\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\n";
        $headers .= "From: $from" . "\n";

        $success = mail($to, $subject, $message, $headers);
        
        $thankyou = 1;
    }
    else{
        $thankyou = 0;
    }
?>

<?php get_header(); ?>

<div id="UzitContact" class="uzit-posts pageContent withContent">
    <div class="container">
        
        <?php if(!$thankyou): ?>
        <?php echo wpautop(get_post_field('post_content', $post->ID)); ?>
      <?php /*?> 
        
        <form id="InquiryForm" action="<?php the_permalink(); ?>" method="POST" style="width:400px;">
            
            <div class="field">
                <label for="FullName">Full Name <span class="label-required">(required)</span></label>
                <input id="FullName" type="text" name="fullname" />
            </div>
            
            <div class="field">
                <label for="PhoneNumber">Phone Number <span class="label-required">(required)</span></label>
                <input id="PhoneNumber" type="text" name="phonenumber" />
            </div>
            
            <div class="field">
                <label for="Email">Email <span class="label-required">(required)</span></label>
                <input id="Email" type="text" name="email" />
            </div>
            
            <div class="field">
                <label for="Interested">Interested In</label>
                <select id="Interested" name="interested">
                    <option value="trainings">Trainings</option>
                    <option value="partnerships">Partnerships</option>
                    <option value="others">Other</option>
                </select>
            </div>
            
            <div class="field">
                <label for="Comments">Comments</label>
                <textarea id="Comments" name="comments"></textarea>
            </div>
            
            <input type="submit" value="Submit" />
        </form>
	  */?>
        <?php else: ?>
            
            <h1>Thank you for contacting us.</h1>

            <p>Go back to <a href="/" style="color:#63bfda;">Urban Zen Integrative Therapy Program</a></p>
            
        <?php endif; ?>
    </div>
</div>

<script>
jQuery('form#InquiryForm').submit(function(){
    var name = jQuery('input#FullName').val();
    var phone = jQuery('input#PhoneNumber').val();
    var email = jQuery('input#Email').val();
    
    if(name == '' || phone == '' || email == ''){
        alert('Required fields need to be filled.')
        return false;
    }

    return true;
});
</script>

<?php get_footer(); ?>