@extends('layout.web.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0px !important;
        }
        ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}
p{
    font-size: 18px;
    color: #000;
}

/* Define the scrollbar thumb */
::-webkit-scrollbar-thumb {
  background-color: #997045;
  border-radius: 34px;
}

/* Define the scrollbar track */
::-webkit-scrollbar-track {
  background: transparent;
}
    </style>
    <div class="content">
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-11">

                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                        <div class="modal-body">
                            <div class="login-header ">
                                <h3 class="text-center">Terms of Use</h3> 
                               
                                


                                <p style="text-align: justify; width: 110%;"> 
                                    These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”), and Collabstr Ventures Inc. ("Company", “we”, “us”, or “our”), concerning your access to and use of the collabstr.com website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). The Site provides an online marketplace for the following goods, products, and/or services: marketing influence via social media platforms (the “Marketplace Offerings”). In order to help make the Site a secure environment for the purchase and sale of Marketplace Offerings, all users are required to accept and comply with these Terms of Use, including the User Agreement posted on the Site, which are incorporated into these Terms of Use. You agree that by accessing the Site and/or the Marketplace Offerings, you have read, understood, and agree to be bound by all of these Terms of Use. If you do not agree with all of these terms of use, then you are expressly prohibited from using the site and/or the marketplace offerings and you must discontinue use immediately.
                                </p>
                                
                                <p style="text-align: justify; width: 110%;"> 
                                    Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms of Use at any time and for any reason. We will alert you about any changes by updating the “Last updated” date of these Terms of Use, and you waive any right to receive specific notice of each such change. It is your responsibility to periodically review these Terms of Use to stay informed of updates. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms of Use by your continued use of the Site after the date such revised Terms of Use are posted.
                                </p>
                                
                                <p style="text-align: justify; width: 110%;"> 
                                    The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.
                                </p>
                                
                                <p style="text-align: justify; width: 110%;"> 
                                    The Site is not tailored to comply with industry-specific regulations (Health Insurance Portability and Accountability Act (HIPAA), Federal Information Security Management Act (FISMA), etc.), so if your interactions would be subjected to such laws, you may not use this Site. You may not use the Site in a way that would violate the Gramm-Leach-Bliley Act (GLBA).
                                </p>
                                
                                <p style="text-align: justify; width: 110%;"> 
                                    The Site is intended for users who are at least 18 years old. Persons under the age of 18 are not permitted to use or register for the Site or use the Marketplace Offerings.
                                </p>
                                
                                <h3>Intellectual Property Rights</h3>
                                
                                <p style="text-align: justify; width: 110%;"> 
                                    Unless otherwise indicated, the Site and the Marketplace Offerings are our proprietary property and all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (collectively, the “Content”) and the trademarks, service marks, and logos contained therein (the “Marks”) are owned or controlled by us or licensed to us, and are protected by copyright and trademark laws and various other intellectual property rights and unfair competition laws of the United States, international copyright laws, and international conventions. The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms of Use, no part of the Site or the Marketplace Offerings and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.
                                </p>
                                
                                <p style="text-align: justify; width: 110%;"> 
                                    Provided that you are eligible to use the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. We reserve all rights not expressly granted to you in and to the Site, the Content, and the Marks.
                                </p>
                                


                                <h3>User Representations</h3>
<p style="text-align: justify; width: 110%;">
    By using the Site or the Marketplace Subscriptions & Offerings, you represent and warrant that:
</p>
<ul style="text-align: justify; width: 110%;list-style-type: none;">
    <li>(1) all registration information you submit will be true, accurate, current, and complete;</li>
    <li>(2) you will maintain the accuracy of such information and promptly update such registration information as necessary;</li>
    <li>(3) you have the legal capacity and you agree to comply with these Terms of Use;</li>
    <li>(4) you are not a minor in the jurisdiction in which you reside;</li>
    <li>(5) you will not access the Site or the Marketplace Offerings through automated or non-human means, whether through a bot, script or otherwise;</li>
    <li>(6) you will not use the Site for any illegal or unauthorized purpose;</li>
    <li>(7) your use of the Site or the Marketplace Offerings will not violate any applicable law or regulation.</li>
</ul>
<p style="text-align: justify; width: 110%;">
    If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site (or any portion thereof).
</p>
<p style="text-align: justify; width: 110%;">
    You may not use the Site or the Marketplace Offerings for any illegal or unauthorized purpose nor may you, in the use of Marketplace Offerings, violate any laws. Among unauthorized Marketplace Offerings are the following: intoxicants of any sort; illegal drugs or other illegal products; alcoholic beverages; games of chance; and pornography or graphic adult content, images, or other adult products. Postings of any unauthorized products or content may result in immediate termination of your account and a lifetime ban from use of the Site.
</p>
<p style="text-align: justify; width: 110%;">
    We are a service provider and make no representations as to the safety, effectiveness, adequacy, accuracy, availability, prices, ratings, reviews, or legality of any of the information contained on the Site or the Marketplace Offerings displayed or offered through the Site. You understand and agree that the content of the Site does not contain or constitute representations to be reasonably relied upon, and you agree to hold us harmless from any errors, omissions, or misrepresentations contained within the Site’s content. We do not endorse or recommend any Marketplace Offerings and the Site is provided for informational and advertising purposes only.
</p>

<h3>User Registration</h3>
<p style="text-align: justify; width: 110%;">
    You may be required to register with the Site in order to access the Marketplace Offerings. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.
</p>

<h3>Marketplace Subscriptions & Offerings</h3>
<p style="text-align: justify; width: 110%;">
    We reserve the right to limit the quantities of the Marketplace Subscriptions & Offerings offered or available on the Site. All descriptions or pricing of the Marketplace Offerings are subject to change at any time without notice, at our sole discretion. We reserve the right to discontinue any Marketplace Subscriptions & Offerings at any time for any reason. We do not warrant that the quality of any of the Marketplace Subscriptions & Offerings purchased by you will meet your expectations or that any errors in the Site will be corrected.
</p>

<h3>Purchases & Payment</h3>
<p style="text-align: justify; width: 110%;">
    You agree to provide current, complete, and accurate purchase and account information for all purchases of the Marketplace Subscriptions & Offerings made via the Site. You further agree to promptly update account and payment information, including email address, payment method, and payment card expiration date, so that we can complete your transactions and contact you as needed. Sales tax will be added to the price of purchases as deemed required by us. We may change prices at any time. All payments shall be in U.S. dollars.
</p>
<p style="text-align: justify; width: 110%;">
    You agree to pay all charges at the prices then in effect for your purchases and any applicable shipping fees, and you authorize us to charge your chosen payment provider for any such amounts upon placing your order. If your order is subject to recurring charges, then you consent to our charging your payment method on a recurring basis without requiring your prior approval for each recurring charge, until such time as you cancel the applicable order. We reserve the right to correct any errors or mistakes in pricing, even if we have already requested or received payment.
</p>
<p style="text-align: justify; width: 110%;">
    We reserve the right to refuse any order placed through the Site. We may, in our sole discretion, limit or cancel quantities purchased per person, per household, or per order. These restrictions may include orders placed by or under the same customer account, the same payment method, and/or orders that use the same billing or shipping address. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers, or distributors.
</p>

<h3>Refund Policy</h3>
<p style="text-align: justify; width: 110%;">
    All amounts posted are final and will not be refunded once payment is made.
</p>

<h3>Prohibited Activities</h3>
<p style="text-align: justify; width: 110%;">
    You may not access or use the Site for any purpose other than that for which we make the Site available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.
</p>

<p style="text-align: justify; width: 110%;">
    As a user of the Site, you agree not to:
</p>

<ul style="text-align: justify; width: 110%;list-style-type: none;">
    <li><strong>1.</strong> Systematically retrieve data or other content from the Site to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.</li>
    <li><strong>2.</strong> Make any unauthorized use of the Marketplace Subscriptions & Offerings, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.</li>
    <li><strong>3.</strong> Circumvent, disable, or otherwise interfere with security-related features of the Site, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Site and/or the Content contained therein.</li>
    <li><strong>4.</strong> Engage in unauthorized framing of or linking to the Site.</li>
    <li><strong>5.</strong> Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords.</li>
    <li><strong>6.</strong> Make improper use of our support services or submit false reports of abuse or misconduct.</li>
    <li><strong>7.</strong> Engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools.</li>
    <li><strong>8.</strong> Interfere with, disrupt, or create an undue burden on the Site or the networks or services connected to the Site.</li>
    <li><strong>9.</strong> Attempt to impersonate another user or person or use the username of another user.</li>
    <li><strong>10.</strong> Sell or otherwise transfer your profile.</li>
    <li><strong>11.</strong> Use any information obtained from the Site in order to harass, abuse, or harm another person.</li>
    <li><strong>12.</strong> Decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Site.</li>
    <li><strong>13.</strong> Attempt to bypass any measures of the Site designed to prevent or restrict access to the Site, or any portion of the Site.</li>
    <li><strong>14.</strong> Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Marketplace Subscriptions & Offerings to you.</li>
    <li><strong>15.</strong> Copy or adapt the Site’s software, including but not limited to Flash, PHP, HTML, JavaScript or other code.</li>


    <li><strong>16.</strong> Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Site or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Marketplace Subscriptions & Offerings.</li>
    <li><strong>17.</strong> Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats (“gifs”), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as “spyware” or “passive collection mechanisms” or “pcms”).</li>
    <li><strong>18.</strong> Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Site, or using or launching any unauthorized script or other software.</li>
    <li><strong>19.</strong> Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site.</li>
    <li><strong>20.</strong> Use the Site in a manner inconsistent with any applicable laws or regulations.</li>
</ul>


<ul style="text-align: justify; width: 110%;">
    <li><b>User Generated Contributions</b><br>
        The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, "Contributions"). Contributions may be viewable by other users of the Site and the Marketplace Offerings and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary.
    </li>
    <li><b>When you create or make available any Contributions, you thereby represent and warrant that:</b></li>
    <ul style="list-style-type: none;">
        <li>1. The creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.</li>
        <li>2. You are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Site, and other users of the Site to use your Contributions in any manner contemplated by the Site and these Terms of Use.</li>
        <li>3. You have the written consent, release, and/or permission of each and every identifiable individual person in your Contributions to use the name or likeness of each and every such identifiable individual person to enable inclusion and use of your Contributions in any manner contemplated by the Site and these Terms of Use.</li>
        <li>4. Your Contributions are not false, inaccurate, or misleading.</li>
        <li>5. Your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation.</li>
        <li>6. Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).</li>
        <li>7. Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.</li>
        <li>8. Your Contributions do not advocate the violent overthrow of any government or incite, encourage, or threaten physical harm against another.</li>
        <li>9. Your Contributions do not violate any applicable law, regulation, or rule.</li>
        <li>10. Your Contributions do not violate the privacy or publicity rights of any third party.</li>
        <li>11. Your Contributions do not contain any material that solicits personal information from anyone under the age of 18 or exploits people under the age of 18 in a sexual or violent manner.</li>
        <li>12. Your Contributions do not violate any applicable law concerning child pornography, or otherwise intended to protect the health or well-being of minors.</li>
        <li>13. Your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.</li>
        <li>14. Your Contributions do not otherwise violate, or link to material that violates, any provision of these Terms of Use, or any applicable law or regulation.</li>
    </ul>
    <li>Any use of the Site or the Marketplace Subscriptions & Offerings in violation of the foregoing violates these Terms of Use and may result in, among other things, termination or suspension of your rights to use the Site and the Marketplace Offerings.</li>
    
    <li><b>Contribution License</b><br>
        By posting your Contributions to any part of the Site or making Contributions accessible to the Site by linking your account from the Site to any of your social networking accounts, you automatically grant, and you represent and warrant that you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, your image and voice) for any purpose, commercial, advertising, or otherwise, and to prepare derivative works of, or incorporate into other works, such Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels.</li>
    <li>This license will apply to any form, media, or technology now known or hereafter developed, and includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide. You waive all moral rights in your Contributions, and you warrant that moral rights have not otherwise been asserted in your Contributions.</li>
    <li>We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Site. You are solely responsible for your Contributions to the Site and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions.</li>
    <li>We have the right, in our sole and absolute discretion:
        <ul style="list-style-type: none;">
            <li>(1) to edit, redact, or otherwise change any Contributions;</li>
            <li>(2) to re-categorize any Contributions to place them in more appropriate locations on the Site;</li>
            <li>(3) to pre-screen or delete any Contributions at any time and for any reason, without notice.</li>
        </ul>
    </li>
    <li>We have no obligation to monitor your Contributions.</li>

    <li><b>Guidelines for Reviews</b><br>
        We may provide you areas on the Site to leave reviews or ratings. When posting a review, you must comply with the following criteria:
        <ul style="list-style-type: none;">
            <li>(1) you should have firsthand experience with the person/entity being reviewed;</li>
            <li>(2) your reviews should not contain offensive profanity, or abusive, racist, offensive, or hate language;</li>
            <li>(3) your reviews should not contain discriminatory references based on religion, race, gender, national origin, age, marital status, sexual orientation, or disability;</li>
            <li>(4) your reviews should not contain references to illegal activity;</li>
            <li>(5) you should not be affiliated with competitors if posting negative reviews;</li>
            <li>(6) you should not make any conclusions as to the legality of conduct;</li>
            <li>(7) you may not post any false or misleading statements;</li>
            <li>(8) you may not organize a campaign encouraging others to post reviews, whether positive or negative.</li>
        </ul>
        We may accept, reject, or remove reviews in our sole discretion. We have absolutely no obligation to screen reviews or to delete reviews, even if anyone considers reviews objectionable or inaccurate. Reviews are not endorsed by us, and do not necessarily represent our opinions or the views of any of our affiliates or partners. We do not assume liability for any review or for any claims, liabilities, or losses resulting from any review. By posting a review, you hereby grant to us a perpetual, non-exclusive, worldwide, royalty-free, fully-paid, assignable, and sublicensable right and license to reproduce, modify, translate, transmit by any means, display, perform, and/or distribute all content relating to reviews.</li>

    <li><b>Mobile Application License</b><br>
        <b>Use License</b><br>
        If you access the Marketplace Offerings via a mobile application, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the mobile application on wireless electronic devices owned or controlled by you, and to access and use the mobile application on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Terms of Use.
    </li>
    <li>You shall not:
        <ul style="list-style-type: none;">
            <li>(1) decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the application;</li>
            <li>(2) make any modification, adaptation, improvement, enhancement, translation, or derivative work from the application;</li>
            <li>(3) violate any applicable laws, rules, or regulations in connection with your access or use of the application;</li>
            <li>(4) remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the application;</li>
            <li>(5) use the application for any revenue-generating endeavor, commercial enterprise, or other purpose for which it is not designed or intended;</li>
            <li>(6) make the application available over a network or other environment permitting access or use by multiple devices or users at the same time;</li>
            <li>(7) use the application for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the application.</li>
            <li>(8) use the application to send automated queries to any website or to send any unsolicited commercial e-mail; or</li>
    <li>(9) use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications, accessories, or devices for use with the application.</li>
        </ul>
    </li>
   
</ul>

<h3>Apple & Android Devices</h3>

<p>The following terms apply when you use a mobile application obtained from either the Apple Store or Google Play (each an “App Distributor”) to access the Marketplace Subscriptions & Offerings:</p>

<ul style="list-style-type: none;">
    <li>(1) The license granted to you for our mobile application is limited to a non-transferable license to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service;</li>
    <li>(2) We are responsible for providing any maintenance and support services with respect to the mobile application as specified in the terms and conditions of this mobile application license contained in these Terms of Use or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the mobile application;</li>
    <li>(3) In the event of any failure of the mobile application to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the mobile application, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the mobile application;</li>
    <li>(4) You represent and warrant that (i) you are not located in a country that is subject to a U.S. government embargo, or that has been designated by the U.S. government as a “terrorist supporting” country and (ii) you are not listed on any U.S. government list of prohibited or restricted parties;</li>
    <li>(5) You must comply with applicable third-party terms of agreement when using the mobile application, e.g., if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the mobile application;</li>
    <li>(6) You acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application license contained in these Terms of Use, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application license contained in these Terms of Use against you as a third-party beneficiary thereof.</li>
</ul>

<h3>Social Media</h3>

<p>As part of the functionality of the Site, you may link your account with online accounts you have with third-party service providers (each such account, a “Third-Party Account”) by either:</p>

<ul style="list-style-type: none;">
    <li>(1) providing your Third-Party Account login information through the Site; or</li>
    <li>(2) allowing us to access your Third-Party Account, as is permitted under the applicable terms and conditions that govern your use of each Third-Party Account. You represent and warrant that you are entitled to disclose your Third-Party Account login information to us and/or grant us access to your Third-Party Account, without breach by you of any of the terms and conditions that govern your use of the applicable Third-Party Account, and without obligating us to pay any fees or making us subject to any usage limitations imposed by the third-party service provider of the Third-Party Account.</li>
    <li>By granting us access to any Third-Party Accounts, you understand that:</li>
    <ul style="list-style-type: none;">
        <li>(1) We may access, make available, and store (if applicable) any content that you have provided to and stored in your Third-Party Account (the “Social Network Content”) so that it is available on and through the Site via your account, including without limitation any friend lists;</li>
        <li>(2) We may submit to and receive from your Third-Party Account additional information to the extent you are notified when you link your account with the Third-Party Account.</li>
    </ul>
    <li>Depending on the Third-Party Accounts you choose and subject to the privacy settings that you have set in such Third-Party Accounts, personally identifiable information that you post to your Third-Party Accounts may be available on and through your account on the Site.</li>
    <li>Please note that if a Third-Party Account or associated service becomes unavailable or our access to such Third-Party Account is terminated by the third-party service provider, then Social Network Content may no longer be available on and through the Site. You will have the ability to disable the connection between your account on the Site and your Third-Party Accounts at any time.</li>
    <li>PLEASE NOTE THAT YOUR RELATIONSHIP WITH THE THIRD-PARTY SERVICE PROVIDERS ASSOCIATED WITH YOUR THIRD-PARTY ACCOUNTS IS GOVERNED SOLELY BY YOUR AGREEMENT(S) WITH SUCH THIRD-PARTY SERVICE PROVIDERS.</li>
    <li>We make no effort to review any Social Network Content for any purpose, including but not limited to, for accuracy, legality, or non-infringement, and we are not responsible for any Social Network Content. You acknowledge and agree that we may access your email address book associated with a Third-Party Account and your contacts list stored on your mobile device or tablet computer solely for purposes of identifying and informing you of those contacts who have also registered to use the Site.</li>
  


 
</ul>


                            </div>
                        
                                         

      </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')
    <script>

        function togglePassword(inputId, iconId) {
            var passwordInput = document.getElementById(inputId);
            // var toggleIcon = document.getElementById(iconId);

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/invisible.png';
            } else {
                passwordInput.type = 'password';
                // toggleIcon.src = 'https://img.icons8.com/material-outlined/24/000000/visible.png';
            }
        }

        $(document).ready(function () {

                @if(request()->role == 'influencer')
            var form = $('#influencer-register-form')[0];
                @else
            var form = $('#brand-register-form')[0];
            var inputs = $(form).find('input');

            remove_validation_on_input_change(inputs);
            @endif

        });

        function checkRole(thisElem) {
            role = $(thisElem).attr('role');
            console.log(role)
        }

        $(document).on('click', '.influencer-register', function (e) {
            e.preventDefault();
            register($('#influencer-register-form')[0]);
        });

        $(document).on('click', '.brand-register', function (e) {
            e.preventDefault();
            register($('#brand-register-form')[0]);
        });

        function register(form) {
            var inputs = $(form).find('input');
            var allInputsValid = validate_inputs(form);

            if (!$(form).find('.agreed_to_terms').is(":checked")) {
                $('.term-invalid').show();
                // $('.invalid-feedback').html('Please Check User Agreement, Privacy Policy');
                return;
            }

            if (allInputsValid) {
                form.classList.remove('was-validated');
                var formData = new FormData(form);
                $.ajax({
                    url: api_url + 'auth/register',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "JSON",
                    success: function (response) {
                        if (response.status) {
                            // Handle successful submission here
                            setTimeout(function () {
                                window.location.assign(base_url + "login");
                            }, 600);
                        } else {
                            $('.invalid-feedback').show();
                            // Handle validation errors
                            var errors = response.errors;

                            // Clear previous validation messages
                            $(form).find('.invalid-feedback').html('');

                            // Add the 'was-validated' class to show validation messages
                            // form.classList.add('is-invalid');
                            form.classList.remove('was-validated');
                            // Display validation messages for each field6
                            for (var fieldName in errors) {
                                var errorElement = $(form).find('[name="' + fieldName + '"]');
                                // errorElement.removeClass('was-validated')
                                errorElement.addClass('is-invalid')
                                errorElement.siblings('.invalid-feedback').html(errors[fieldName]);
                            }
                        }
                    },
                    error: function (response) {
                        // Handle error
                        // showAlert("error", "Server Error");
                    }
                });
            }
        }

        $(document).on('change', '#country_id', function () {
            var nationality_id = $(this).val();
            if (nationality_id) {
                $.ajax({
                    url: api_url + 'get-cities-by-country',
                    type: "POST",
                    dataType: "json",
                    data: {
                        "nationality_id": nationality_id
                    },
                    success: function (response) {
                        if (response.data.length > 0) {
                            var states = response.data;
                            $("#city_id").empty();
                            $("#brand_city_id").empty();

                            if (states) {
                                $.each(states, function (index, value) {
                                    $("#city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                    $("#brand_city_id").append('<option value="' + value.id + '">' + value.name + '</option>');
                                });
                            }
                        } else {
                            $("#city_id").empty();
                            $("#brand_city_id").empty();
                        }
                    }
                });
            }
        });

    </script>
@endsection
