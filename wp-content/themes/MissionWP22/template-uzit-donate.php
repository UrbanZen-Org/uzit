<?php /*
  Template Name: UZIT Donate Page
 */ ?>

<?php
/* Process POST */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    require_once 'auth_net/config.php';
    
    $amount = $_POST['x_amount'];
    
    $invoice_id = uniqid('donate_');
    
    if($_POST['x_friend']){
        $description = "Donate in friend's name: ".$_POST['x_friend'];
    }
    else{
        $description = "Donated $".$amount." under ".$_POST['x_first_name']." ".$_POST['x_last_name'];
    }
    
    if ($METHOD_TO_USE == "AIM") {
        $transaction = new AuthorizeNetAIM;
        $transaction->setSandbox(AUTHORIZENET_SANDBOX);
        $transaction->setFields(
            array(
                'amount' => $amount, 
                'card_num' => $_POST['x_card_num'], 
                'exp_date' => $_POST['x_exp_date'],
                'first_name' => $_POST['x_first_name'],
                'last_name' => $_POST['x_last_name'],
                'address' => $_POST['x_address'],
                'city' => $_POST['x_city'],
                'state' => $_POST['x_state'],
                'country' => $_POST['x_country'],
                'zip' => $_POST['x_zip'],
                'email' => $_POST['x_email'],
                'card_code' => $_POST['x_card_code'],
                'description' => $description,
                'invoice_num' => $invoice_id,  
            )
        );
        $response = $transaction->authorizeAndCapture();
        if ($response->approved) {
            // Transaction approved! Do your logic here.
            //header('Location: ?transaction_id=' . $response->transaction_id);
            $transaction_id = $response->transaction_id;
        } else {
            $auth_error = 1;
            $reason_code = $response->response_reason_code;
            $reason_text = $response->response_reason_text;
            
            //header('Location: ?response_reason_code='.$response->response_reason_code.'&response_code='.$response->response_code.'&response_reason_text=' .$response->response_reason_text);
        }
    }
    /*
    elseif (count($_POST)) {
        $response = new AuthorizeNetSIM;
        if ($response->isAuthorizeNet()) {
            if ($response->approved) {
                // Transaction approved! Do your logic here.
                // Redirect the user back to your site.
                $return_url = $site_root . 'thank_you_page.php?transaction_id=' .$response->transaction_id;
            } else {
                // There was a problem. Do your logic here.
                // Redirect the user back to your site.
                $return_url = $site_root . 'error_page.php?response_reason_code='.$response->response_reason_code.'&response_code='.$response->response_code.'&response_reason_text=' .$response->response_reason_text;
            }
            echo AuthorizeNetDPM::getRelayResponseSnippet($return_url);
        } else {
            echo "MD5 Hash failed. Check to make sure your MD5 Setting matches the one in config.php";
        }
    }
    */
}
?>

<?php
/* overrides */
//$transaction_id = 1000;
?>

<?php
    $pageSlider = get_post_meta(get_the_ID(), 'pageSlider', true);
    $animation = get_post_meta(get_the_ID(), 'pageSliderAnimation', true);
    $controlNav = get_post_meta(get_the_ID(), 'pageSliderControlNav', true);
?>

<?php get_header(); ?>

<link rel='stylesheet'  href='/wp-content/themes/MissionWP22/stylesheets/custom/donate.css' type='text/css' media='all' />
<script type="text/javascript" src="/wp-content/themes/MissionWP22/js/custom/jquery.currency.js"></script>

<div id="Donate" class="container">
    
    <?php if($_GET['error_message']): ?>
    <div class="error_message">
        <p><?php echo $_GET['error_message']; ?></p>
    </div>
    <?php endif; ?>
    
    <div class="top-section clearfix">
        
        <form id="DonateForm" action="/donate/payment/" method="POST">
            <input type="hidden" name="form_a" value="1" />
            
            <div class="text-header">
                <h1>DONATIONS</h1>
                <p>
                    As a 501(c) 3 organization, Urban Zen Foundation is able to realize its mission only with your generous support. 
                    All levels of donation are welcome and tax deductible.
                </p>
            </div>
        
            <div class="field donate-amount">
                <span class="dollar-sign">$</span>
                <input id="Amount" name="x_amount" type="text" value="" placeholder="ENTER SPECIFIC AMOUNT E.g. 500.00"/>
                <script>
                    jQuery('input#Amount').focus(function(){
                        jQuery(this).keydown(function(event) {
                            // Allow: backspace, delete, tab, escape, enter and .
                            if ( jQuery.inArray(event.keyCode,[46,8,9,27,13,190]) !== -1 ||
                                // Allow: Ctrl+A
                                (event.keyCode == 65 && event.ctrlKey === true) || 
                                // Allow: home, end, left, right
                                (event.keyCode >= 35 && event.keyCode <= 39)) {
                                    // let it happen, don't do anything
                                    return;
                                }
                            else {
                                // Ensure that it is a number and stop the keypress
                                if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                                    event.preventDefault(); 
                                }   
                            }
                        });
                    });
                    jQuery('input#Amount').change(function(){
                        var check_amount = parseFloat(jQuery(this).val());
                        jQuery(this).val(check_amount.toFixed(2));
                    });
                </script>
            </div>
            <ul>
                <li>
                    <input id="pre_amount_a" class="pre_amount" type="radio" name="pre_amount" value="5000" />
                    <label for="pre_amount_a" class="pre_amount_label">$5,000</label>
                </li>
                <li>
                    <input id="pre_amount_b" class="pre_amount" type="radio" name="pre_amount" value="1000" />
                    <label for="pre_amount_b" class="pre_amount_label">$1,000</label>
                </li>
                <li>
                    <input id="pre_amount_c" class="pre_amount" type="radio" name="pre_amount" value="500" />
                    <label for="pre_amount_c" class="pre_amount_label">$500</label>
                </li>
                <li>
                    <input id="pre_amount_d" class="pre_amount" type="radio" name="pre_amount" value="250" />
                    <label for="pre_amount_d" class="pre_amount_label">$250</label>
                </li>
                <li>
                    <input id="pre_amount_e" class="pre_amount" type="radio" name="pre_amount" value="100" />
                    <label for="pre_amount_e" class="pre_amount_label">$100</label>
                </li>
                <li>
                    <input id="pre_amount_f" class="pre_amount" type="radio" name="pre_amount" value="50" />
                    <label for="pre_amount_f" class="pre_amount_label">$50</label>
                </li>
            </ul>
            <div class="field">
                <input id="Friend" name="x_friend" type="text" value="<?php echo $_POST['x_friend']; ?>" placeholder="DONATE IN A FRIEND'S NAME"/>
                <script>
                    jQuery('input#Friend').change(function(){
                        var val = jQuery(this).val().toUpperCase();
                        jQuery(this).val(val); 
                    });
                </script>
            </div>
            
            <div class="field">
                <input type="submit" value="DONATE NOW" />
            </div>
        
        </form>
        <script>
            jQuery('label.pre_amount_label').click(function(){
                jQuery('label.pre_amount_label').removeClass('active');
                jQuery(this).addClass('active');
            });
            jQuery('input.pre_amount').change(function(){
                var value = jQuery(this).val();
                jQuery('input#Amount').val(value);
            });
            jQuery('input#Amount').change(function(){
                jQuery('input.pre_amount').removeAttr('checked');  
                jQuery('label.pre_amount_label').removeClass('active');
            
            });
            jQuery('form#DonateForm').submit(function(){
                if (/^\d+\.\d{2}$/.test(jQuery('input#Amount').val())) {
                    console.log('True | with decimal');
                }
                else if (/^\d+\.\d{1}$/.test(jQuery('input#Amount').val())) {
                    console.log('True | with one decimal');
                }
                else if (/^\d+$/.test(jQuery('input#Amount').val())) {
                    console.log('True | no decimal');
                }
                else{
                    jQuery('input#Amount').focus();
                    alert('Enter a valid amount!');
                    return false;
                }
            });
        </script>
        
        <div class="slider-container">
            <?php if( $pageSlider): ?>
            <div class="sliderWrapper">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php
                        /* get the slider array */
                        $list = get_post_meta($post->ID, 'pageSlider', TRUE) ;
                        if (!empty($list)) {
                            foreach ($list as $slide) {
                                echo '<li><div class="slide-title"><h1>'. $slide['title'] .'</h1></div><img src="' . $slide['pageSliderImg'] . '" alt="' . $slide['title'] . '" /></a></li>';
                            }
                        }
                        ?>
                    </ul>
                    <script type="text/javascript">
                        jQuery(window).load(function() {
                            jQuery('#slider').flexslider({
                                animation: '<?php if($animation){echo $animation;}else{echo 'slide';} ?>',
                                <?php if($controlNav == 'true'): ?>
                                directionNav: true,
                                controlNav: true,
                                slideshow: false,
                                <?php else: ?>
                                directionNav: false,
                                controlNav: false,
                                slideshow: true,
                                slideshowSpeed: 6000,
                                <?php endif; ?>
                                animationLoop: true,
                                sync: "#carousel",
                                start: function(slider){
                                    //jQuery('body').removeClass('loading');
                                }
                            });
                        });
                    </script>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
    </div>
    
    <div style="margin-bottom:20px;">
        <h2>JOIN US ON THE PATH TOWARD INTEGRATIVE HEALTHCARE.<br />YOUR DONATION MAY SUPPORT THE FOllOWING:</h2>
        <table class="ways-to-give">
            <tr>
                <td class="cost"><p>$250,000</p></td>
                <td class="cost-desc">
                    <p>Provides for 1 year of Urban Zen Integrative Therapy in the School's trainings to 
                    teachers and students teaching UZIT modalities to address mindfulness and presence 
                    in the classroom</p>
                </td>
            </tr>
            <tr>
                <td class="cost"><p>$150,000</p></td>
                <td class="cost-desc">
                    <p>Provides funding for a Medical Professional UZIT training in-hospital similar to 
                    the UCLA with associated research study for 1 year</p>
                </td>
            </tr>
            <tr>
                <td class="cost"><p>$100,000</p></td>
                <td class="cost-desc">
                    <p>Provides continuing support of our current clinical rotation sites nationwide 
                    and designation of new sites for one year</p>
                </td>
            </tr>
            <tr>
                <td class="cost"><p>$50,000</p></td>
                <td class="cost-desc">
                    <p>Provides one year training and on-site support for a clinical site in Haiti at NPH 
                    St.Damien or a similar facility</p>
                </td>
            </tr>
            <tr>
                <td class="cost"><p>$50,000</p></td>
                <td class="cost-desc">
                    <p>Provides for one part-time UZIT in a hospital setting for one year</p>
                </td>
            </tr>
            <tr>
                <td class="cost"><p>$7,500</p></td>
                <td class="cost-desc">
                    <p>Provides funding for 3 scholarships for UZIT trainings</p>
                </td>
            </tr>
        </table>
    </div>
    
    <div>
        <h2>DIFFERENT WAYS TO GIVE</h2>
        <table class="other-ways-to-give">
            <tr>
                <td>
                    <a href="/contact">BECOME<br />A PARTNER</a>
                </td>
                <td>
                    <a href="/contact">SPONSOR<br />A UZIT</a>
                </td>
                <td>
                    <a id="CheckDonation" href="javascript:void(0);">CHECK<br />DONATIONS</a>
                    <div id="dialog" title="Mailing" style="display:none;background-color:#000;">
                        <h2>CHECK DONATIONS</h2>
                        <p style="margin-bottom:0;">Please make your check payable to "Urban Zen Foundation" and mail to:</p>
                        <p style="margin-bottom: 0;padding-left: 30px;padding-top: 10px;">
                            Donations<br />
                            705 Greenwich Street<br />
                            2nd Floor<br />
                            New York, NY 10014
                        </p>
                        <p style="margin:10px 0 0;">Please indicate: Urban Zen Integrative Therapy Program</p>
                    </div>
                    <script>
                        jQuery('a#CheckDonation').click(function(){
                            jQuery( "#dialog" ).dialog({
                                modal: true,
                                draggable: false,
                                minWidth: 400,
                                minHeight: 200,
                                buttons: [
                                    {
                                        text: "Close",
                                        click: function() {
                                            jQuery(this).dialog( "close" );
                                        }
                                    }
                                ]
                            });
                        });
                     </script>
                </td>
            </tr>
        </table>
    </div>
    
</div>

<?php get_footer(); ?>