@extends('layout.web.master')
@section('content')
    <style>
        .invalid-feedback {
            margin-top: 0px !important;
        }
        ::-webkit-scrollbar {
  width: 6px; /* You can adjust this value based on your preference */
}


ul, ol{
    /* width: 110%; */
    color: #000;
   
}

a{
    color: blue;
}
p{
    width: 110%;
    text-align: justify; 
    color: #333;
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
        <div class="container" style="margin-top: 0px;">
            <div class="row">
                <div class="col-md-11">

                    <div class="account-content">
                        <div class="align-items-center justify-content-center">
                        <div class="modal-body">
                            <div class="login-header ">
                                <h3 class="text-center" style=" margin-left: 7rem;">Terms of Use</h3> 
                               
                                


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

<ul style="text-align: justify;margin-bottom:7px; width: 110%;list-style-type: none;">
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
<h3 style="margin-top:18px;margin-bottom: 18px">User Generated Contributions</h3>
    <p style="text-align: justify; width: 110%;">The Site may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, "Contributions"). Contributions may be viewable by other users of the Site and the Marketplace Offerings and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary.
    </p> 
      <h6 style="margin-top:10px; font-weight: bolder;">When you create or make available any Contributions, you thereby represent and warrant that: </h6>

    <ul style="list-style-type: none;text-align: justify; width: 110%;">
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
  
    <li>Any use of the Site or the Marketplace Subscriptions & Offerings in violation of the foregoing violates these Terms of Use and may result in, among other things, termination or suspension of your rights to use the Site and the Marketplace Offerings.</li>
    
    <h3 style="margin-top:18px;margin-bottom: 18px">Contribution License</h3>
   <li>
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
    <h3 style="margin-top:18px;margin-bottom: 18px">Guidelines for Reviews</h3>
    <li>
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
        <h3 style="margin-top:18px;margin-bottom: 18px">Mobile Application License</h3>
            <h4 style="margin-top:6px;margin-bottom: 8px">Use License</h4>
    <li>
        If you access the Marketplace Offerings via a mobile application, then we grant you a revocable, non-exclusive, non-transferable, limited right to install and use the mobile application on wireless electronic devices owned or controlled by you, and to access and use the mobile application on such devices strictly in accordance with the terms and conditions of this mobile application license contained in these Terms of Use.
    </li>
    <li>You shall not:
        <ul style="list-style-type: none; text-align: justify; width: 110%;">
            <li>(1) decompile, reverse engineer, disassemble, attempt to derive the source code of, or decrypt the application;</li>
            <li>(2) make any modification, adaptation, improvement, enhancement, translation, or derivative work from the application;</li>
            <li>(3) violate any applicable laws, rules, or regulations in connection with your access or use of the application;</li>
            <li>(4) remove, alter, or obscure any proprietary notice (including any notice of copyright or trademark) posted by us or the licensors of the application;</li>
            <li>(5) use the application for any revenue-generating endeavor, commercial enterprise, or other purpose for which it is not designed or intended;</li>
            <li>(6) make the application available over a network or other environment permitting access or use by multiple devices or users at the same time;</li>
            <li>(7) use the application for creating a product, service, or software that is, directly or indirectly, competitive with or in any way a substitute for the application.</li>
            <li>(8) use the application to send automated queries to any website or to send any unsolicited commercial e-mail; or</li>
    <li style=" width: 91%;">(9) use any proprietary information or any of our interfaces or our other intellectual property in the design, development, manufacture, licensing, or distribution of any applications,
     accessories, or devices for use with the application.</li>
        </ul>
    </li>
   
</ul>

<h3>Apple & Android Devices</h3>

<p>The following terms apply when you use a mobile application obtained from either the Apple Store or Google Play (each an “App Distributor”) to access the Marketplace Subscriptions & Offerings:</p>

<ul style="list-style-type: none; margin-bottom:6px;">
    <li>(1) The license granted to you for our mobile application is limited to a non-transferable license to use the application on a device that utilizes the Apple iOS or Android operating systems, as applicable, and in accordance with the usage rules set forth in the applicable App Distributor’s terms of service;</li>
    <li>(2) We are responsible for providing any maintenance and support services with respect to the mobile application as specified in the terms and conditions of this mobile application license contained in these Terms of Use or as otherwise required under applicable law, and you acknowledge that each App Distributor has no obligation whatsoever to furnish any maintenance and support services with respect to the mobile application;</li>
    <li>(3) In the event of any failure of the mobile application to conform to any applicable warranty, you may notify the applicable App Distributor, and the App Distributor, in accordance with its terms and policies, may refund the purchase price, if any, paid for the mobile application, and to the maximum extent permitted by applicable law, the App Distributor will have no other warranty obligation whatsoever with respect to the mobile application;</li>
    {{-- <li>(4) You represent and warrant that (i) you are not located in a country that is subject to a U.S. government embargo, or that has been designated by the U.S. government as a “terrorist supporting” country and (ii) you are not listed on any U.S. government list of prohibited or restricted parties;</li> --}}
    <li>(4) You must comply with applicable third-party terms of agreement when using the mobile application, e.g., if you have a VoIP application, then you must not be in violation of their wireless data service agreement when using the mobile application;</li>
    <li>(5) You acknowledge and agree that the App Distributors are third-party beneficiaries of the terms and conditions in this mobile application license contained in these Terms of Use, and that each App Distributor will have the right (and will be deemed to have accepted the right) to enforce the terms and conditions in this mobile application license contained in these Terms of Use against you as a third-party beneficiary thereof.</li>
</ul>
<h3 style="margin-top:18px;margin-bottom: 18px">Social Media</h3>
<p>As part of the functionality of the Site, you may link your account with online accounts you have with third-party service providers (each such account, a “Third-Party Account”) by either:</p>

<ul style="list-style-type: none;text-align: justify; width: 110%;"> 
    <li>(1) providing your Third-Party Account login information through the Site; or</li>
    <li>(2) allowing us to access your Third-Party Account, as is permitted under the applicable terms and conditions that govern your use of each Third-Party Account. You represent and warrant that you are entitled to disclose your Third-Party Account login information to us and/or grant us access to your Third-Party Account, without breach by you of any of the terms and conditions that govern your use of the applicable Third-Party Account, and without obligating us to pay any fees or making us subject to any usage limitations imposed by the third-party service provider of the Third-Party Account.</li>
    <li>By granting us access to any Third-Party Accounts, you understand that:</li>
    <ul style="list-style-type: none;">
        <li style="width: 91%;">(1) We may access, make available, and store (if applicable) any content that you have provided to and stored in your Third-Party Account (the “Social Network Content”) so that it is available on and through the Site via your account, including without limitation any friend lists;</li>
        <li>(2) We may submit to and receive from your Third-Party Account additional information to the extent you are notified when you link your account with the Third-Party Account.</li>
    </ul>
    <li>Depending on the Third-Party Accounts you choose and subject to the privacy settings that you have set in such Third-Party Accounts, personally identifiable information that you post to your Third-Party Accounts may be available on and through your account on the Site.</li>
    <li>Please note that if a Third-Party Account or associated service becomes unavailable or our access to such Third-Party Account is terminated by the third-party service provider, then Social Network Content may no longer be available on and through the Site. You will have the ability to disable the connection between your account on the Site and your Third-Party Accounts at any time.</li>
    <li>PLEASE NOTE THAT YOUR RELATIONSHIP WITH THE THIRD-PARTY SERVICE PROVIDERS ASSOCIATED WITH YOUR THIRD-PARTY ACCOUNTS IS GOVERNED SOLELY BY YOUR AGREEMENT(S) WITH SUCH THIRD-PARTY SERVICE PROVIDERS.</li>
    <li>We make no effort to review any Social Network Content for any purpose, including but not limited to, for accuracy, legality, or non-infringement, and we are not responsible for any Social Network Content. You acknowledge and agree that we may access your email address book associated with a Third-Party Account and your contacts list stored on your mobile device or tablet computer solely for purposes of identifying and informing you of those contacts who have also registered to use the Site.

        You can deactivate the connection between the Site and your Third-Party Account by contacting us using the contact information below or through your account settings (if applicable). We will attempt to delete any information stored on our servers that was obtained through such Third-Party Account, except the username and profile picture that become associated with your account.
    </li>
  


 
</ul>


<h3>Submissions</h3>
<p>
    You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other information regarding the Site or the Marketplace Subscriptions & Offerings ("Submissions") provided by you to us are non-confidential and shall become our sole property. 
    We shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you. 
    You hereby waive all moral rights to any such Submissions, and you hereby warrant that any such Submissions are original with you or that you have the right to submit such Submissions. 
    You agree there shall be no recourse against us for any alleged or actual infringement or misappropriation of any proprietary right in your Submissions.
</p>

<h3>Third-Party Websites and Content</h3>
<p>
    The Site may contain (or you may be sent via the Site or the Marketplace Offerings) links to other websites ("Third-Party Websites") as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties ("Third-Party Content"). 
    Such Third-Party Websites and Third-Party Content are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by us, and we are not responsible for any Third-Party Websites accessed through the Site or any Third-Party Content posted on, available through, or installed from the Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third-Party Websites or the Third-Party Content. 
</p>
<p>
    Inclusion of, linking to, or permitting the use or installation of any Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof by us. 
    If you decide to leave the Site and access the Third-Party Websites or to use or install any Third-Party Content, you do so at your own risk, and you should be aware these Terms of Use no longer govern. 
    You should review the applicable terms and policies, including privacy and data gathering practices, of any website to which you navigate from the Site or relating to any applications you use or install from the Site.
</p>
<p>
    Any purchases you make through Third-Party Websites will be through other websites and from other companies, and we take no responsibility whatsoever in relation to such purchases which are exclusively between you and the applicable third party. 
    You agree and acknowledge that we do not endorse the products or services offered on Third-Party Websites and you shall hold us harmless from any harm caused by your purchase of such products or services. 
    Additionally, you shall hold us harmless from any losses sustained by you or harm caused to you relating to or resulting in any way from any Third-Party Content or any contact with Third-Party Websites.
</p>


<h3>Advertisers</h3>
<p>
    We allow advertisers to display their advertisements and other information in certain areas of the Site, such as sidebar advertisements or banner advertisements. If you are an advertiser, you shall take full responsibility for any advertisements you place on the Site and any services provided on the Site or products sold through those advertisements. 
    Further, as an advertiser, you warrant and represent that you possess all rights and authority to place advertisements on the Site, including, but not limited to, intellectual property rights, publicity rights, and contractual rights. 
    As an advertiser, you agree that such advertisements are subject to our Digital Millennium Copyright Act (“DMCA”) Notice and Policy provisions as described below, and you understand and agree there will be no refund or other compensation for DMCA takedown-related issues. We simply provide the space to place such advertisements, and we have no other relationship with advertisers.
</p>

<h3>Site Management</h3>
<p>
    We reserve the right, but not the obligation, to:
</p>
<ul style="list-style-type: none; text-align: justify; width: 110%;">
    <li>(1) monitor the Site for violations of these Terms of Use;</li>
    <li>(2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Terms of Use, including without limitation, reporting such user to law enforcement authorities;</li>
    <li>(3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof;</li>
    <li>(4) in our sole discretion and without limitation, notice, or liability, to remove from the Site or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems;</li>
    <li>(5) otherwise manage the Site in a manner designed to protect our rights and property and to facilitate the proper functioning of the Site and the Marketplace Subscriptions & Offerings.</li>
</ul>

<h3>Privacy Policy</h3>
<p>
    We care about data privacy and security. Please review our <a href="https://influencerpro.org/privacy" target="_blank">Privacy Policy</a>. By using the Site or the Marketplace Subscriptions & Offerings, you agree to be bound by our Privacy Policy, which is incorporated into these Terms of Use. 
    Please be advised the Site and the Marketplace Offerings are hosted in the United States. If you access the Site or the Marketplace Offerings from any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in the residing country, then through your continued use of the Site, you are transferring your data to the residing country, and you agree to have your data transferred to and processed in the residing country.
</p>

<h3>Digital Millenium Copyright Act (DMCA) Notice and Policy Notifications</h3>
<p>
    We respect the intellectual property rights of others. If you believe that any material available on or through the Site infringes upon any copyright you own or control, please immediately notify our Designated Copyright Agent using the contact information provided below (a “Notification”). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. 
    Please be advised that pursuant to federal law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Site infringes your copyright, you should consider first contacting an attorney.
</p>
<p>
    All Notifications should meet the requirements of DMCA 17 U.S.C. § 512(c)(3) and include the following information:
</p>
<ul style="list-style-type: none; text-align: justify; width: 110%;">
    <li>(1) A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;</li>
    <li>(2) identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works on the Site are covered by the Notification, a representative list of such works on the Site;</li>
    <li>(3) identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit us to locate the material;</li>
    <li>(4) information reasonably sufficient to permit us to contact the complaining party, such as an address, telephone number, and, if available, an email address at which the complaining party may be contacted;</li>
    <li>(5) a statement that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law;</li>
    <li>(6) a statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed upon.</li>
</ul>

<h3>Counter Notification</h3>
<p>
    If you believe your own copyrighted material has been removed from the Site as a result of a mistake or misidentification, you may submit a written counter notification to [us/our Designated Copyright Agent] using the contact information provided below (a “Counter Notification”).
</p>
<p>
    To be an effective Counter Notification under the DMCA, your Counter Notification must include substantially the following:
</p>
<ul style="list-style-type: none; text-align: justify; width: 110%;">
    <li>(1) identification of the material that has been removed or disabled and the location at which the material appeared before it was removed or disabled;</li>
    <li>(2) a statement that you consent to the jurisdiction of the Federal District Court in which your address is located, for any judicial district in which we are located;</li>
    <li>(3) a statement that you will accept service of process from the party that filed the Notification or the party's agent;</li>
    <li>(4) your name, address, and telephone number;</li>
    <li>(5) a statement under penalty of perjury that you have a good faith belief that the material in question was removed or disabled as a result of a mistake or misidentification of the material to be removed or disabled;</li>
    <li>(6) your physical or electronic signature.</li>
</ul>
<p>
    If you send us a valid, written Counter Notification meeting the requirements described above, we will restore your removed or disabled material, unless we first receive notice from the party filing the Notification informing us that such party has filed a court action to restrain you from engaging in infringing activity related to the material in question. Please note that if you materially misrepresent that the disabled or removed content was removed by mistake or misidentification, you may be liable for damages, including costs and attorney's fees. Filing a false Counter Notification constitutes perjury.
</p>


<h3>Term and Termination</h3>
<p>
    These Terms of Use shall remain in full force and effect while you use the Site.
    Without limiting any other provision of these terms of use, we reserve the right to, in our sole discretion and without notice or liability, deny access to and use of the site and the marketplace subscriptions & offerings (including blocking certain IP addresses), to any person for any reason or for no reason, including without limitation for breach of any representation, warranty, or covenant contained in these terms of use or of any applicable law or regulation. We may terminate your use or participation in the site and the marketplace offerings or delete your account and any content or information that you posted at any time, without warning, in our sole discretion.
</p>

<p>
    If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress.
</p>

<h3>Modifications & Interruptions</h3>
<p>
    We reserve the right to change, modify, or remove the contents of the Site at any time or for any reason at our sole discretion without notice. However, we have no obligation to update any information on our Site. We also reserve the right to modify or discontinue all or part of the Marketplace Offerings without notice at any time. We will not be liable to you or any third party for any modification, price change, suspension, or discontinuance of the Site or the Marketplace Subscriptions & Offerings.
</p>
<p>
    We cannot guarantee the Site and the Marketplace Offerings will be available at all times. We may experience hardware, software, or other problems or need to perform maintenance related to the Site, resulting in interruptions, delays, or errors. We reserve the right to change, revise, update, suspend, discontinue, or otherwise modify the Site or the Marketplace Offerings at any time or for any reason without notice to you. You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by your inability to access or use the Site or the Marketplace Offerings during any downtime or discontinuance of the Site or the Marketplace Offerings. Nothing in these Terms of Use will be construed to obligate us to maintain and support the Site or the Marketplace Offerings or to supply any corrections, updates, or releases in connection therewith.
</p>

<h3>Restrictions</h3>
<p>
    The Parties agree that any arbitration shall be limited to the Dispute between the Parties individually.
</p>
<p>
    To the full extent permitted by law:
</p>
<ul style="list-style-type: none; text-align: justify; width: 110%;">
    <li>(a) no arbitration shall be joined with any other proceeding;</li>
    <li>(b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or to utilize class action procedures;</li>
    <li>(c) there is no right or authority for any Dispute to be brought in a purported representative capacity on behalf of the general public or any other persons.</li>
</ul>


<h3>Exceptions to Arbitration</h3>
<p>
    The Parties agree that the following Disputes are not subject to the above provisions concerning binding arbitration:
</p>
<ul style="list-style-type: none; text-align: justify; width: 110%;">
    <li>(a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the intellectual property rights of a Party;</li>
    <li>(b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy, or unauthorized use;</li>
    <li>(c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable, then neither Party will elect to arbitrate any Dispute falling within that portion of this provision found to be illegal or unenforceable and such Dispute shall be decided by a court of competent jurisdiction within the courts listed for jurisdiction above, and the Parties agree to submit to the personal jurisdiction of that court.</li>
</ul>

<h3>Corrections</h3>
<p>
    There may be information on the Site that contains typographical errors, inaccuracies, or omissions that may relate to the Marketplace Subscriptions & Offerings, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Site at any time, without prior notice.
</p>

<h3>Disclaimer</h3>
<p>
    The site and the marketplace Subscriptions & offerings are provided on an as-is and as-available basis. You agree that your use of the site and our services will be at your sole risk. To the fullest extent permitted by law, we disclaim all warranties, express or implied, in connection with the site and the marketplace offerings and your use thereof, including, without limitation, the implied warranties of merchantability, fitness for a particular purpose, and non-infringement. We make no warranties or representations about the accuracy or completeness of the site’s content or the content of any websites linked to the site and we will assume no liability or responsibility for any:
</p>
<ul style="list-style-type: none; text-align: justify; width: 110%;">
    <li>(1) errors, mistakes, or inaccuracies of content and materials,</li>
    <li>(2) personal injury or property damage, of any nature whatsoever, resulting from your access to and use of the site,</li>
    <li>(3) any unauthorized access to or use of our secure servers and/or any and all personal information and/or financial information stored therein,</li>
    <li>(4) any interruption or cessation of transmission to or from the site or the marketplace offerings,</li>
    <li>(5) any bugs, viruses, trojan horses, or the like which may be transmitted to or through the site by any third party, and/or</li>
    <li>(6) any errors or omissions in any content and materials or for any loss or damage of any kind incurred as a result of the use of any content posted, transmitted, or otherwise made available via the site.</li>
</ul>
<p>
    We do not warrant, endorse, guarantee, or assume responsibility for any product or service advertised or offered by a third party through the site, any hyperlinked website, or any website or mobile application featured in any banner or other advertising, and we will not be a party to or in any way be responsible for monitoring any transaction between you and any third-party providers of products or services. As with the purchase of a product or service through any medium or in any environment, you should use your best judgment and exercise caution where appropriate.
</p>

<h3>Limitations of Liability</h3>
<p>
    In no event will we or our directors, employees, or agents be liable to you or any third party for any direct, indirect, consequential, exemplary, incidental, special, or punitive damages, including lost profit, lost revenue, loss of data, physical damage or other damages arising from your use of the site or the marketplace offerings, even if we have been advised of the possibility of such damages. Notwithstanding anything to the contrary contained herein, our liability to you for any cause whatsoever and regardless of the form of the action, will at all times be limited to the amount paid, if any, by you to us during the six (6) month period prior to any cause of action arising. Certain US state laws and international laws do not allow limitations on implied warranties or the exclusion or limitation of certain damages. If these laws apply to you, some or all of the above disclaimers or limitations may not apply to you, and you may have additional rights.
</p>

<h3>Indemnification</h3>
<p>
    You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of:
</p>
<ul style="list-style-type: none;  text-align: justify; width: 110%;">
    <li>(1) your Contributions;</li>
    <li>(2) use of the Marketplace Offerings;</li>
    <li>(3) breach of these Terms of Use;</li>
    <li>(4) any breach of your representations and warranties set forth in these Terms of Use;</li>
    <li>(5) your violation of the rights of a third party, including but not limited to intellectual property rights;</li>
    <li>(6) any overt harmful act toward any other user of the Site or the Marketplace Subscriptions & Offerings with whom you connected via the Site.</li>
</ul>
<p>
    Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.
</p>

<h3>User Data</h3>
<p>
    We will maintain certain data that you transmit to the Site for the purpose of managing the performance of the Marketplace Offerings, as well as data relating to your use of the Marketplace Offerings. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Marketplace Offerings. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.
</p>
<h3>Electronic Communications, Transactions, and Signature</h3>
<p>
    Visiting the Site, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communication be in writing. You hereby agree to the use of electronic signatures, contracts, orders, and other records, and to electronic delivery of notices, policies, and records of transactions initiated or completed by us or via the site. You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means.
</p>

<h3>Miscellaneous</h3>
<p style="margin-bottom: 35px !important;">
    These Terms of Use and any policies or operating rules posted by us on the Site or in respect to the Marketplace Offerings constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Terms of Use shall not operate as a waiver of such right or provision. These Terms of Use operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Terms of Use is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Terms of Use and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Terms of Use or use of the Marketplace Offerings. You agree that these Terms of Use will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Terms of Use and the lack of signing by the parties hereto to execute these Terms of Use.
</p>

<p>Last Revised Date: <strong>December 1, 2024</strong></p>



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
