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
                            <div class="login-header text-center">
                                <h3>Terms of Use</h3> 
                               
                                
                            </div>
                         <p style="text-align: justify;
                         width: 110%;"> 
                           

                           THESE TERMS OF SERVICE (“AGREEMENT”) GOVERN YOUR USE OF OUR WEBSITE, AS WELL AS ANY INTERACTION WITH IFLUENCERPRO (“WE”, “US” OR “OUR”) IN RELATION TO ANY ACTIVITY AND/OR SERIES OF ACTIVITIES ON BEHALF OF INFLUENCERPRO AND/OR INFLUENCERPRO’S CUSTOMER(S) (defined as the party engaging You through InfluencerPro) OR THEIR CLIENTS (defined as the sponsoring advertiser) (A "CAMPAIGN") AND/OR OTHERWISE, AS WELL AS YOUR UTILIZATION OF ANY INFLUENCERPRO PRODUCTS AND SERVICES, INCLUDING WITHOUT LIMITATION ANY INFLUENCERPRO TECHNOLOGY (AS DEFINED BELOW) (COLLECTIVELY WITH THE WEBSITE, THE “SERVICE").
                          </p>
                          <p style="text-align: justify;
                         width: 110%;"> 
                         BY ACCESSING OUR WEBSITE AT https://influencerpro.org/ OR OTHERWISE SIGNING UP TO BE AN “INFLUENCER” or “BRAND” BY PROVIDING YOUR NAME, EMAIL ADDRESS AND PASSWORD, OR BY EXECUTING ANY DOCUMENT THAT REFERENCES THIS AGREEMENT, YOU ARE UNCONDITIONALLY CONSENTING TO BE BOUND BY THE TERMS OF THIS AGREEMENT. IF YOU ARE ENTERING INTO THIS AGREEMENT ON BEHALF OF YOUR EMPLOYER, A COMPANY OR OTHER LEGAL ENTITY, YOU REPRESENT THAT YOU HAVE THE AUTHORITY TO BIND SUCH ENTITY AND ITS AFFILIATES TO THESE TERMS AND CONDITIONS, IN WHICH CASE THE TERMS "YOU" OR "YOUR" OR "INFLUENCER" OR “BRAND” SHALL REFER TO SUCH ENTITY AND ITS AFFILIATES. IF YOU DO NOT HAVE SUCH AUTHORITY, OR IF YOU DO NOT AGREE WITH THESE TERMS AND CONDITIONS, YOU MUST NOT ACCEPT THIS AGREEMENT AND MAY NOT ACCESS OUR WEBSITE OR OTHERWISE USE THE SERVICE. If the terms OF THIS AGREEMENT are considered an offer, acceptance is expressly limited to these terms.
                         NOTICE: Please read these Terms carefully. They cover important information about the Services. These Terms include information about future changes to these Terms, limitations of liability, a class action waiver, and resolution of disputes by arbitration instead of in court.
                         
                          </p>
                          <p style="text-align: justify;
                         width: 110%;"> 
                         You may not access the Service if You are InfluencerPro’s direct competitor, except with InfluencerPro’s prior written consent, which may be withheld in InfluencerPro’s sole discretion. In addition, You may not access the Service for purposes of monitoring its availability, performance or functionality, or for any other benchmarking or competitive purposes, or permit any other party to do any of the foregoing. For the purposes of this Agreement, “InfluencerPro Technology” means any software owned, developed, acquired and/or licensed by or on behalf of InfluencerPro, any trademarks of InfluencerPro, certain documents, software and other works of authorship, other technology (including without limitation any interfaces utilized to connect to the Service), software, hardware, products, processes, algorithms, user interfaces, know-how and other trade secrets, techniques, designs, inventions and other tangible or intangible technical material or information, and any other data, information and/or material provided by or on behalf of InfluencerPro to You in the course of Your interaction with InfluencerPro under a Campaign and/or otherwise, including without limitation Your use of the Service.
                          </p>
                          
                          <p style="text-align: justify;
                         width: 110%;"> 
                         From time to time, we may modify or amend this Agreement. If we do so, we will post any such modifications or changes on the website or otherwise contact You at the email address You have provided to InfluencerPro. If You continue to use the Service following such a posting, You accept any such change or modification.
                        </p>

                            <p style="text-align: justify;
                            width: 110%;"> 
                            The Service (including use of InfluencerPro’s website) is intended solely for persons who are 18 years of age or older. Any access to or use of the Service by anyone under 18 is expressly prohibited, unless with approval and involvement by a parent or guardian. By accessing or using the InfluencerPro you represent and warrant that you are 18 or older, or have approval and involvement by a parent or guardian. By using the Service, you represent and warrant that you will use the Service in compliance with any and all applicable laws and regulations.
                    </p>


                                <p style="text-align: justify;
                                width: 110%;"> 
                                In order to use certain portions or functionalities of the Service or to become an “Influencer” or “Brand”, You are required to register with the Service and provide your first and last name, email address and password, as well as any other information that InfluencerPro may request. We reserve the right to deny You the ability to create an Influencer or Brand account if the registration information provided is incomplete or otherwise inadequate. Also, your registration as an Influencer or Brand are to void where prohibited by law. Passwords are user-specific and should not be given to third parties. You are responsible for the use of the Service with Your Influencer account. You must protect any passwords or other credentials associated with Your account for the Service, and take full responsibility for any use of the account under Your password. If Your username or password becomes compromised, You must inform InfluencerPro of this as soon as possible in order to limit your liability. If You register as an Influencer or Brand, certain additional terms in this Agreement will apply to You. 
                </p>

                <h3>1. Campaigns</h3> 
                                    <p style="text-align: justify;
                                    width: 110%;"> 
                                
                                    By applying to a Campaign, or accepting an invitation to join a Campaign, you agree, that you are able and willing to perform the work outlined in the collaboration brief as documented and displayed on the platform. If you are chosen to participate in the Campaign, any and all compensation for participation is contingent upon successful and complete execution of the instructions outlined in the brief as presented to you at the time you are hired, and upon supplying all requested metrics for content that you distribute on social media platforms in connection with the Campaign. This may include but is not limited to: producing original content within any guidelines, providing materials requested on or before any stated deadlines (including both drafts for approval and final content), requesting and receiving approval prior to posting content on social media platforms, posting content on social media platforms on or before any stated deadlines, abiding by any stated exclusivity clauses for the stated periods of time, abiding by the terms of this agreement, and any additional requirements that are stated in the Campaign brief.
                                    
                                </p>


                                        <p style="text-align: justify;
                                        width: 110%;"> 
                                        If You register as an Influencer or Brand, You will conduct any efforts in relation to a Campaign, including without limitation the creation of Content (as defined below), through InfluencerPro (unless directed otherwise by InfluencerPro and the Service using the highest industry standards which meet or surpass all local, State and Federal laws for advertising. In the performance of your efforts in relation to a Campaign, You may provide certain information and materials, including text, narrative, images, photos, graphs, videos, designs, logos, trademarks, URL links and data (all collectively “Content”).You represent and warrant that the Content and any social media network and/or website provided by You or on your behalf for Campaign(s) to InfluencerPro, including through the Service, shall not contain, or contain links to, improper or illegal content and will comply with the Editorial Standards below. InfluencerPro reserves the right to remove or reject any Content provided by You or on your behalf, or any URL link embodied within a Campaign at any time. Content is accepted upon the representation and warranty that You have the right to publish the Content, without infringing any rights of third parties (including InfluencerPro’s). We will not, under any circumstance, be liable in any way for any Content, including, but not limited to, any errors or omissions in any Content, or any loss or damage of any kind that You incur as a result of Your use of, or Your acting in reliance on, any Content posted, e-mailed, transmitted, or otherwise made available in the Service.
                            </p>

                            <h3>2. Editorial Standards; Prohibited Activities</h3> 
                                            <p style="text-align: justify;
                                            width: 110%;"> 
                                          
                                            This Section 2 includes an illustrative and non-exclusive list of the editorial standards for Content if You register as an Influencer. The list of standards specified below, however, is not a comprehensive listing of prohibited conduct by the Influencer or Brand. You remain fully and solely responsible for ongoing monitoring of Content on Your website(s), social channel(s), and/or any related sites with which You are associated that may or may not be directly linked to Your InfluencerPro account. This includes all information, text, images, photographs, graphics, e-mail addresses, web pages, comments and reviews, discussion board postings and other materials contained in Your Account or linked to the Influencer or Brand. 
                                            
                        </p>


                        <h6> The Editorial Standards include the following:</h6> 
                                                <p style="text-align: justify;
                                                width: 110%;"> 
                                              
                                               <br> I. Unacceptable Content as defined as Content that: 
                                                <br> a. Is lewd, profane, obscene, or indecent, including any content that is violent or pornographic or that contains nudity, explicit violent or sexual material, or depictions of violent or sexual acts; 
                                          
                                                   <br>  b. Is harassing, threatening abusive, inflammatory or otherwise objectionable, including content used to harass, stalk or threaten a person;  
                                                       <br>  c. Is unlawful or that could facilitate the violation of any applicable law, regulation or governmental policy;  
                                                           <br>  d. Offers or disseminates any fraudulent goods, services, schemes or promotions, including any make-money-fast schemes, chain letters, or pyramid schemes.  
                                                               <br>    e. Is libelous, defamatory, knowingly false or misrepresents another person, brand or campaign you are working with;  
                                                                   <br>      f. Infringes upon the intellectual property rights of any third party (including InfluencerPro’s), including the copyrights, trademarks, trade names, trade secrets or patents of such third party;  
                                                                       <br>     g. Is harmful to InfluencerPro or any other party’s systems and networks, including any transmissions which may damage, interfere with, surreptitiously intercept, or expropriate any system, program, data or personal information;  
                                                                           <br>       h. Violates any obligation of confidentiality;  
                                                                               <br>        i. Violates the privacy, publicity, moral or any other right of any third party; and  
                                                                                   <br>        j. Consists of any other Content that InfluencerPro in its sole discretion deems to be Unacceptable Content.  
                                                                                       <br>       II. Editorial Consistency. You must also:  
                                                                                           <br>    a. Ensure that all Content must be original material created by You, or if not the original material of You, ensure that express permission of the owner(s) of such material has been obtained; and  
                                                                                               <br>    b. Ensure that all opinions and statements are representative of the Influencer’s honest views. InfluencerPro, in its sole discretion, will determine what constitutes Unacceptable Content under these Editorial Standards.  
                                                                                                   <br>     c. Ensure professionalism and responsiveness during a collaboration. If an Influencer goes unresponsive for two or more campaigns in a calendar year, InfluencerPro, in its sole discretion, reserve the right to flag and terminate the account  
                                                Ensure 
                                               <br>      III. Fraudulent Activity  
                                                   <br>   a. Influencer agrees not to engage in deceptive or fraudulent practices in relation to the performance of the Services and to the Content created for the Client, including but not limited to the purchase of social media followers and website visits or clicks or submission of fraudulent metrics. Any activity of that kind for which there is reasonable proof will result in the immediate termination of the Agreement, and cancellation of any outstanding payment for Services due to the Influencer or Brand.  
                                                
                                                                                                    </p>


                                                    <p style="text-align: justify;
                                                    width: 110%;"> 

InfluencerPro is under no obligation to monitor the Influencer for compliance with these Editorial Standards. InfluencerPro may change the Editorial Standards at any time and InfluencerPro reserves the right to terminate this Agreement without prior notice and without payment of Services in the event that, in InfluencerPro’s judgment, Influencer or Brand have violated the Editorial Standards or the other requirements for the Influencer set forth in this Agreement.
                                                                                                </p>


                                                        <p style="text-align: justify;
                                                        width: 110%;"> 
                                                        Regardless of whether You register as an Influencer or Brand, Talent Manager or are just accessing the website, the following behaviors are prohibited in the Service:
                                                   <br> Impersonating another person or entity; 
                                                   <br> Stalking and other types of harassment or harmful, fraudulent, deceptive, threatening, defamatory, obscene, or otherwise objectionable behavior; 
                                                     Engaging in unauthorized collection of users' content or information, and/or otherwise accessing the Service by automated means (including, but not limited to, so-called bots or scrapers) without an authorization from us; 
                                                      Transmission of viruses, malware, or other malicious code in the Service; 
                                                     Modification, reverse-engineering, decompiling, or other manipulation of the Service; 
                                                     Using the Service to offer, display, distribute, transmit, route, provide connections to or store any material that infringes copyrighted works or otherwise violates or promotes the violation of the intellectual property rights of any third party (including InfluencerPro); 
                                                       Attempting, in any manner, to obtain the password, account, or other security information from any other user; 
                                                       Going unresponsive on two or more campaigns in a calendar year; 
                                                      <br> Submission of fraudulent metrics;  
                                                      <br> Jeopardizing the security of your Influencer account or anyone else’s (such as allowing someone else to log in to the Service as you); 
                                                      <br> Using the Service in a manner that violates any law or regulation, including, without limitation, any applicable export control laws;  
                                                      <br> Interfering with, or disrupting, the Service; 
                                                      <br> Copies or stores any significant portion of any content You access through the Service (including on the website);  
                                                      <br> Violating the security of any computer network, or cracks any passwords or security encryption codes. 
                                                        
                                                       
                                                    </p>

                                                    <h3> 3. Usage and Storage of Content and Data; Intellectual Property Rights</h3>  
                                                            <p style="text-align: justify;
                                                            width: 110%;"> 
                                                        
                                                         Unless otherwise stated in the Usage Section of InfluencerPro campaign collaboration briefs, InfluencerPro will have an exclusive, worldwide, perpetual, irrevocable and transferable right and license, with the right to sublicense through multiple tiers, to use, distribute, reproduce, copy, display, perform, store, modify, create derivative works based upon, promote and otherwise commercialize and fully exploit the Content (or any portion thereof) for any commercial or non-commercial purpose and in all forms and all media whether now known or hereafter created. Influencer or BRAND acknowledge and agrees that InfluencerPro has sole rights to any revenue and income derived from its use of Content. Notwithstanding the foregoing, any usage stated in individual campaign collaboration briefs on the InfluencerPro platform will supersede the aforementioned license and usage rights in the event of a conflict; provided, however, that InfluencerPro will retain the right to store, display and modify Content on the InfluencerPro platform.
                                                        </p>

                                      <p style="text-align: justify; width:110%">
                                        InfluencerPro will only use the personal data provided by you or on your behalf in connection with the Service. Personal data includes name, age, household income, ethnicity, parental status, gender, location, marital status, and education. InfluencerPro’s platform uses this personal data to provide the Influencer with campaign opportunities to promote branded content. More specifically, each Influencer’s personal data is used to ensure that we are matching the influencer with the correct opportunity.
                                                            </p>

                                                            <p style="text-align: justify; width:110%">
                                                                InfluencerPro’s data is stored and processed in both Europe, the United States Asia, Middle East and other countries. InfluencerPro ensures the safe storage of your personal data through physical security at our data centers and encrypted daily backups. In the case of a major outage, we have a comprehensive recovery plan and backup web services. All users can request a copy of their personal data any time by writing to the support team at help@influencerpro.
                                                            </p>


                                                            <p style="text-align: justify; width:110%">
                                                                All users have the right to delete their InfluencerPro account anytime by contacting support at help@influencerpro. Upon request for account deletion, InfluencerPro will remove all personal data provided by the influencer or Brand.
                                                            </p>


                                                            <p style="text-align: justify; width:110%">
                                                                This Agreement confers only the right to use the Service, and it does not convey any rights of ownership in or to the Service. All right, title and interest, including without limitation any copyright, patent, trade secret or other intellectual property right in the Service will remain Activate’s sole property. Any services provided to You under this Agreement, and other data or materials that are prepared in the performance of such services hereunder, and all right, title and interest in the foregoing, will belong to InfluencerPro.
                                                            </p>


                                                            <p style="text-align: justify; width:110%">
                                                                The Service contains links to websites owned and/or operated by third parties. We are not responsible for any such third party websites and do not have control over any materials or content made available therein. Our inclusion of a link to a third party website in the Service does not in any way imply our endorsement, advertising, or promotion of such websites or any materials or content made available therein. By accessing a third party website You accept that we do not exercise any control over such websites or their content. We have no responsibility of the content of any third-party website, and You acknowledge and agree that we have no liability to You or any third party for any harm, injuries or losses suffered as a result of Your access to, reliance on or use of such third party websites or their content. We encourage You to familiarize yourself with the terms of service applicable to any third-party website You may access. You acknowledge sole responsibility for and assume all risk arising from Your access to, use of or reliance upon any third party websites and any materials or content made available therein.
                                                            </p>


                                                            <p style="text-align: justify; width:110%">
                                                                You may have heard of the Digital Millennium Copyright Act (the “DMCA”), as it relates to online service providers, like InfluencerPro, being asked to remove material that allegedly violates someone’s copyright. We respect others’ intellectual property rights, and we reserve the right to delete or disable any content alleged to be infringing, and to terminate the accounts of repeat alleged infringers. Please review our complete Copyright Dispute Policy in Section 26 and learn how to report potentially infringing content. 
                                                            </p>

                                                            <h3>4. FTC Endorsement Compliance and Online Publishing Policy</h3> 
                                                            <p style="text-align: justify; width:110%">
                                                              
                                                                Endorsements and advertising play an integral role in InfluencerPro’s business structure. While engaging in endorsements is encouraged by InfluencerPro, as a corporate entity we must adhere to a set of guidelines when endorsing or advertising products and services through InfluencerPro. The following policy outlines the parameters InfluencerPro and Influencers and Brands must observe when engaging in endorsements in connection with Campaigns with InfluencerPro. Violation of this policy may result in disciplinary action of varying degrees, up to and including immediate termination.
                                                                
                                                                {{-- <li style="text-align: justify;">  --}} <br>
                                                                    I. Endorsements and Advertising. From time to time, InfluencerPro’s business involves the endorsement, advertisement, or evaluation of products and services. An endorsement means “any advertising message (including verbal statements, demonstrations, or depictions of a name, signature, likeness or other identifying personal characteristics of an individual or the name or seal of an organization) that consumers are likely to believe reflects the opinions, beliefs, findings or experiences of a party other than the sponsoring advertiser, even if the view expressed by that party are identical to those of the sponsoring advertiser.” As a general rule of thumb, when discussing a product or service, be honest to InfluencerPro’s 
                                                                    readers and consumers. You should never post material in any medium (including those statements made on social media) that could be viewed as deceptive advertising. This means, when you post endorsements,
                                                                     these statements should:
                                                                    {{-- </li> --}}
                                                                {{-- <li style="text-align: justify;"> --}}
                                                                 <br>   a. Reflect your honest opinions, findings, beliefs and experiences; 
                                                                {{-- </li> --}}
                                                                    {{-- <li style="text-align: justify;"> --}}
                                                                      <br>  b. When representing that you use the endorsed product,
                                                                         you should actually be a bona fide user of it at the time the endorsement was given;
                                                                        {{-- </li> --}}
                                                                        {{-- <li style="text-align: justify;">  --}}
                                                                        <br>    c. Not include any statements about products or its
                                                                             services that the creator of such products or services could not make directly
                                                                              (because unsubstantiated or otherwise false, misleading, presented out of context, or distorted); and
                                                                            {{-- </li> --}}
                                                                            {{-- <li style="text-align: justify;">  --}}
                                                                           <br>     d. Clearly and conspicuously disclose, if true,
                                                                                 that you have received or will receive compensation (or other benefit)
                                                                                  in exchange for your online statements. All disclosures must be FTC compliant.
                                                                                   Examples of benefits that you must disclose include, for example, cash, gift cards, 
                                                                                   discounts, free products and/or services, loaner products, special access or other privileges,
                                                                                    and/or employment. Please note that these are only given as examples and do not cover the range 
                                                                                    of what InfluencerPro considers a benefit. Don’t try to trick the reader—the disclosure 
                                                                                    should be in easy to understand wording and typeface, prominently visible and placed adjacent to your statement that triggered the disclosure. For example, this disclosure could include terms such as “Ad,” “Advertisement,” “Paid Advertisement,” 
                                                                                    “Sponsored Advertising Content,” or some variation thereof. Disclosures should also appear as close as possible to the content to which they relate. Anything different to the above must be approved by InfluencerPro.
                                                                                {{-- </li> --}}
                                                                
                                                            
                                                            
                                                            
                                                            </p>



                                                            <p style="text-align: justify; width:110%">
                                                                You agree that InfluencerPro shall not be liable, under any circumstances, for any errors, omissions, losses, or damages claimed or incurred due to any of your online postings. InfluencerPro reserves the right to suspend, modify, or withdraw this policy, and you are responsible for regularly reviewing the terms of this policy.
                                                            </p>

                                                            <h3>5. Warranty; Disclaimer</h3>  
                                                            <p style="text-align: justify; width:110%">
                                                              
You warrant that the performance of Your services hereunder and any Content, if any, will be performed in a workmanlike manner and will conform to specifications, as directed by InfluencerPro and/or InfluencerPro's customer(s). Neither InfluencerPro nor its licensors or suppliers make any representations or warranties concerning any Content or other materials contained in or accessed through the Services, and we will not be responsible or liable for the accuracy, copyright compliance, legality, or decency of Content or other material contained in or accessed through the Services. We (and our licensors and suppliers) make no representations or warranties regarding suggestions or recommendations of services or products offered or purchased through any Campaigns or by InfluencerPro’s customers. Products and services purchased or offered (whether or not following such recommendations and suggestions) through any Campaigns or by InfluencerPro’s customers are provided “AS IS” and without any warranty of any kind from Company or others (unless, with respect to such others only, provided expressly and unambiguously in writing by a designated third party for a specific product or service). The Service is provided to you on an "AS IS" and "AS AVAILABLE" basis. EXCEPT AS EXPRESSLY SET FORTH HEREIN, ACTIVATE AND ITS LICENSORS HEREBY DISCLAIM ALL REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED, WITH RESPECT TO ANY SUBJECT MATTER OF THIS AGREEMENT, INCLUDING WITHOUT LIMITATION, ALL IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, NON-INFRINGEMENT, RESULT, OUTCOME AND/OR ANY REPRESENTATION OR WARRANTY THAT THE OPERATION OF ACTIVATE’S SERVICE WILL BE UNINTERRUPTED OR ERROR FREE. SOME STATES DO NOT ALLOW LIMITATIONS ON HOW LONG AN IMPLIED WARRANTY LASTS, SO THE ABOVE LIMITATIONS MAY NOT APPLY TO YOU.

                                                            </p>

                                                            <h3>6. Payment for Services for Influencers</h3>  
                                                            <p style="text-align: justify; width:110%">
                                                            
{{-- <li style="text-align: justify;">  --}} <br>
    I. Subject to the terms and conditions of this Agreement, as full compensation for performance of Your services under a Campaign, InfluencerPro, on behalf of its customer, or InfluencerPro's customer, in accordance with the following, will pay You on a net sixty (60) payment schedule at the end of the applicable Campaign and on the 15th of the month, as determined by InfluencerPro. The applicable fees will be paid upon the acceptance of Your undisputed services by InfluencerPro's customer in relation to the applicable Campaign, in accordance with InfluencerPro's policies, provided that You provide InfluencerPro with correct payment information. If an InfluencerPro customer indicates that it will pay You directly, such customer will make payments directly to You in accordance with any Campaign description and InfluencerPro’s payment policies, and InfluencerPro will have no liability for any disputes that arise between you and the InfluencerPro customer. In the event that InfluencerPro is paying You on behalf of InfluencerPro's customer, You acknowledge and agree that InfluencerPro will pay You only upon receipt by InfluencerPro of funds from the applicable customer for Your services. For the avoidance of doubt, You acknowledge that InfluencerPro's customers, and not InfluencerPro, are liable for the payment of all fees to You, unless a InfluencerPro customer has made the applicable payment to InfluencerPro in accordance with this Section.
{{-- </li><li style="text-align: justify;"> --}}
   <br> II. Influencer agrees to keep strictly confidential the amount of the payment under this Agreement, and shall not disclose such information to any other person or entity, unless required by applicable securities or other laws, or disclosed in confidence to Influencer’s attorneys or accountants.
{{-- </li><li style="text-align: justify;">  --}}
   <br> III. If You have not registered as an Influencer or Brand (for example, if You are just visiting our website), the provisions of this Section 6 will not apply to you.
{{-- </li> --}}
<h3>7. Period of Performance for Influencers </h3>

The period for performing services shall begin and end on the date specified on the applicable Campaign description.

                                                            </p>

                                                            <h3>  8. Relationship of Parties for Influencers</h3>
                                                            <p style="text-align: justify; width:110%">
                                                             
It is agreed that You are an independent contractor and that You shall perform the services hereunder under the direction of InfluencerPro and/or InfluencerPro's customer as to the result of such activity, but that You shall determine the manner and means by which such services are accomplished, subject to the express condition that You shall at all times comply with applicable law. It is expressly understood that neither You nor Your employees, agents, and/or subcontractors, if any, are agents or employees of InfluencerPro, and have no authority to bind InfluencerPro by contract or otherwise. You shall ensure that Your employees, agents and/or subcontractors, if any, are bound in writing by the terms and conditions of this Agreement. You will remain directly liable and responsible to InfluencerPro and its customer(s) for any performance of Your and/or Your employees’, agents’ and/or subcontractors’, if any, obligations under this Agreement.

                                                            </p>
                                                            <h3> 9. Employment Taxes and Benefits for Influencers</h3>  
                                                            <p style="text-align: justify; width:110%">
                                                           
Since You are an independent contractor, InfluencerPro will not withhold any amounts from any sums due to You under this Agreement. It is agreed that it is the obligation of You to report as self-employment income all compensation received by You pursuant to this Agreement, whether by InfluencerPro, on behalf of its customers, or directly by InfluencerPro's customers. You shall indemnify InfluencerPro and its customers and hold them harmless to the extent of any obligation imposed by law upon InfluencerPro and/or its customers to pay any federal, state or local withholding taxes, social security, medical, dental, workers compensation, disability insurance, pension, retirement or similar items in connection with any payments made to You by InfluencerPro, on behalf of its customers, or directly by InfluencerPro's customers, pursuant to this Agreement on account of You or Your agents, employees and/or subcontractors, if any. Neither You nor Your employees, agents and/or subcontractors, if any, shall be entitled to participate in any plans, arrangements or distributions by InfluencerPro pertaining to any bonus, stock option, profit sharing, insurance or similar benefits for InfluencerPro employees.

                                                            </p>
                                                            <h3> 10. Insurance for Influencers</h3>
                                                            <p style="text-align: justify; width:110%">
                                                              
During the period of performance and for three years thereafter, You will maintain sufficient insurance to protect Yourself from (a) claims made pursuant to workers compensation or state disability acts; (b) claims for damages because of bodily injury, sickness or death of any of Your employees, agents and/or subcontractors or any other person which arises out of any negligent act or omission of You or Your employees, agents and/or subcontractors; (c) claims for damages because of injury to or destruction of tangible property including loss of use resulting therefrom which arise from any negligent act or omission of You or Your employees, agents and/or subcontractors; and (d) claims subject to any of Your indemnification obligations hereunder.

                                                            </p>
                                                            <h3> 11. Conflict of Interest</h3>
                                                            <p style="text-align: justify; width:110%">
                                                              
You represent and warrant, for Yourself, Your employees, agents and subcontractors, that there exist no actual or potential conflict of interests concerning the services to be performed under this Agreement. You represent and warrant, for Yourself, Your employees, agents and subcontractors, that neither You nor Your employees, agents and/or subcontractors, if any, is under any preexisting obligation inconsistent with the provisions of this Agreement and that performance of the services hereunder does not require the breach of any obligation to keep in confidence the proprietary information of another party. You and Your employees, agents and/or subcontractors, has not brought and will not bring to InfluencerPro and/or InfluencerPro's customers or use in the performance of the services hereunder any Content, materials or documents of another party considered confidential unless it has first obtained written authorization from such party for the possession and use of such Content and materials and has received InfluencerPro's prior written consent to use of such Content and materials.

                                                            </p>
                                                            <h3> 12. Proprietary Rights</h3>
                                                            <p style="text-align: justify; width:110%">
                                                           
                                                               {{-- <li style="text-align: justify; "> --}} <br>
                                                                 I. All things of value, including, but not limited to, Content, results of services, Feedback (as defined below), software, documentation, inventions (patentable or unpatentable), trade secrets, designs, modules, customer lists, contacts and relationships, sales plans, marketing plans and methodology, copyrights and any modifications and/or derivatives, as defined pursuant to the United States Copyright Act, thereof developed and/or made and/or implemented by You and Your employees, agents and/or subcontractors, if any, under this Agreement shall be considered a "Work Made for Hire" under the United States Copyright Act and the copyright, any other proprietary rights, any such materials and all rights, title and interest therein shall belong to InfluencerPro. Notwithstanding the foregoing, should copyright and any other intellectual property and/or proprietary rights in any of the foregoing material be determined by a court of law to remain with You, Your employees, agents and/or subcontractors, You, and Your employees, agents and/or subcontractors, hereby assign all right, title and interest including Your copyright to InfluencerPro and waive any and all moral rights to such material. You agree to cooperate with InfluencerPro and to execute and cause Your employees, agents and/or subcontractors to execute all documents reasonably necessary for InfluencerPro to secure copyright protection and other intellectual property and/or proprietary rights for and in material produced under this Agreement. You agree that all papers, design notes, records and other materials prepared or produced by You, Your employees, agents and/or subcontractors, in the performance of services hereunder are the sole and exclusive property of InfluencerPro and may be examined by InfluencerPro upon request. Notwithstanding the above, InfluencerPro acknowledges that the services hereunder may contain general know-how and prior intellectual property created by You prior to and outside the scope of this Agreement (“Influencer Intellectual Property”). Accordingly, InfluencerPro agrees that You may use Influencer Intellectual Property in connection with the provision of products and services to others, provided that You continue to abide by the terms and conditions of this Agreement and that none of InfluencerPro’s intellectual property, InfluencerPro Technology, the Service, InfluencerPro Proprietary Information or InfluencerPro’s Confidential Information is utilized in any manner with regards to the provision of products and services to others. All rights in Influencer Intellectual Property, including but not limited to utility routines, generalized interfaces, algorithms, ideas, techniques, concepts, proprietary processes, tools, methodologies, and improvements thereon shall continue to vest in You. For the purposes of this Agreement, "Feedback"means any suggestions, enhancement requests, recommendations or other feedback provided by You relating to the operation of the Service. 
                                                                {{-- </li> --}}
                                                                {{-- <li style="text-align: justify; "> --}} <br>
                                                                    II. Unless otherwise stated in the usage section of InfluencerPro campaign collaboration briefs, you hereby grant to InfluencerPro an irrevocable, perpetual, non-exclusive, transferable, assignable, royalty-free, fully paid-up, world-wide license to use, copy, modify, sub-license, distribute (through itself or its subsidiaries and/or third party distributors or resellers), perform and display Influencer Intellectual Property included as part of, and/or for use of, the services hereunder and/or any Content hereunder for InfluencerPro’s and/or InfluencerPro's customers' business purposes. As stated in Section 3, any usage indicated in individual campaign collaboration briefs will supersede the aforementioned usage in the event of a conflict.
                                                                 {{-- </li> --}}
   {{-- <li style="text-align: justify;"> --}}
   <br>  III. You acknowledge that You will acquire knowledge and information about InfluencerPro and its Customers, and their Clients, their respective products, their respective programming techniques, their respective experimental work, their respective clients and/or their respective suppliers and that all such knowledge and information and related materials shall remain the trade secret and confidential and proprietary information of InfluencerPro ("InfluencerPro Proprietary Information"). You shall hold such InfluencerPro Proprietary Information in strict confidence, not disclose it to others or use it in any way, commercially or otherwise, and shall not allow any unauthorized person access to it, either before or after termination of this Agreement, except in connection with Your performance of the services for InfluencerPro and InfluencerPro’s customers. You shall take all action reasonably necessary and satisfactory to InfluencerPro to protect the confidentiality of the InfluencerPro Proprietary Information including, without limitation, implementation and enforcement of operating procedures that minimize the possibility of unauthorized use or copying of the InfluencerPro Proprietary Information, including limiting access to such InfluencerPro Proprietary Information only to Your employees, agents and/or subcontractors, if any, that have a need to know who (a) have been approved in advance by InfluencerPro; (b) have been advised of the confidential nature thereof; and (c) are under an express written obligation to maintain such confidentiality. You agree that the Service, all Activate Technology, software and documentation furnished to You under this Agreement is InfluencerPro Proprietary Information. You will not duplicate any InfluencerPro Technology, software or documentation unless necessary to implement this Agreement and shall not decompile, disassemble, reverse engineer or otherwise reduce any such InfluencerPro Technology and/or software code to a human readable form. All software, documentation and other InfluencerPro Proprietary Information provided to You shall remain the sole and exclusive property of InfluencerPro. All InfluencerPro Proprietary Information and any copies thereof shall be delivered to InfluencerPro upon expiration or termination of this Agreement.
     {{-- </li> --}}
    {{-- <li style="text-align: justify;">  --}}
       <br> IV. You shall not (a) permit any third party to access the Service except as permitted herein or as directed by InfluencerPro in writing, (b) create derivative works based on the Service, (c) copy, frame or mirror any part or content of the Service, (d) reverse engineer the Service, or (e) access the Service in order to (1) build a competitive product or service, or (2) copy any features, functions or graphics of the Service. 

    {{-- </li> --}}
</p>
<h3>13. Indemnification</h3>
    <p style="text-align: justify; width:110%">

  
You shall indemnify InfluencerPro and its Customers, their Clients, and each of their directors, officers, employees, consultants, subcontractors, affiliates and agents and hold them harmless from and against all claims, damages (actual and consequential), demands, judgments, liabilities, losses, causes of action and expenses, including attorneys' fees, arising out of or resulting from:
 {{-- </li> --}}
{{-- <li style="text-align: justify;"> --}}
   <br>  I. Any action by a third party against InfluencerPro and/or its Customers, their Clients, or each of their directors, officers, employees, consultants, subcontractors, affiliates and agents that is based on any claim that any services performed under this Agreement, the results thereof, or any Content infringes a patent, copyright, trademark or other proprietary right of any third party or violates a trade secret right of any person or entity; 
{{-- </li> --}}
    {{-- <li style="text-align: justify;">  --}}
        <br> II. The performance of the services hereunder caused by any negligent act or omission, fraud or willful conduct of You or Your employees, agents and/or subcontractors, if any, and which result in (a) any bodily injury, sickness, disease or death, or (b) any injury or destruction to tangible or intangible property (including computer programs and data) or any loss of use resulting therefrom;
     {{-- </li> --}}
    {{-- <li style="text-align: justify;">  --}}
       <br>  III. Any (a) violation of any statute, ordinance, or regulation by You or Your employees, agents and/or subcontractors; (b) any breach of any representation, warranty or other obligation under this agreement; and (c) any act or omission by You and/or Your employees, agents and/or subcontractors which is inconsistent with the terms and conditions of this Agreement. Legal counsel for the defense of any third party claim of infringement shall be selected by mutual agreement of You and Activate. In addition to the foregoing, You agree to indemnify and hold InfluencerPro
        and InfluencerPro’s employees, directors, officers, consultants, subcontractors, customers and affiliates (collectively “Representatives”) harmless against any and all expenses and losses of any kind (including reasonable attorneys’ 
        fees and costs) incurred by InfluencerPro or its Representatives in connection with any claim for libel, defamation, false or deceptive advertising (including violations of InfluencerPro’s FTC Endorsement Compliance and Online Publishing Policy) or sales practices arising from use of the Content and/or results of services hereunder. 
    {{-- </li> --}}

                                                            </p>

                                                            <h3>  14. Limitation of Liability</h3>
                                                            <p style="text-align: justify; width:110%">
                                                           
TO THE FULLEST EXTENT ALLOWED BY APPLICABLE LAW, THE LIABILITY OF INFLUENCERPRO AND ITS CUSTOMERS OR THEIR CLIENTS AND ITS LICENSORS IN CONTRACT, TORT (INCLUDING NEGLIGENCE), STRICT LIABILITY OR OTHERWISE ARISING OUT OF OR IN CONNECTION WITH THIS AGREEMENT OR ANY MATERIALS OR SERVICES FURNISHED HEREUNDER SHALL NOT EXCEED THE GREATER OF (A) THE AMOUNT OF ANY FEES WHICH ARE DUE PURSUANT TO SECTION 6 FOR THE PARTICULAR SERVICE THAT GAVE RISE TO ANY CLAIM AND WHICH ARE UNPAID AND (B) $100. IN NO EVENT SHALL INFLUENCERPRO OR ITS LICENSORS BE LIABLE FOR (I) SPECIAL, INDIRECT, INCIDENTAL, TORT (INCLUDING NEGLIGENCE), EXEMPLARY, RELIANCE OR CONSEQUENTIAL DAMAGES (INCLUDING ANY DAMAGES RESULTING FROM LOSS OF GOODWILL, LOSS OF USE, LOSS OF DATA, LOSS OF PROFITS, LOSS OF BUSINESS, OR COMPUTER FAILURE OR MALFUNCTION) ARISING OUT OF OR IN CONNECTION WITH THIS AGREEMENT OR ANY CONTENT, MATERIALS OR SERVICES (INCLUDING INFLUENCERPRO’S WEBSITE) FURNISHED HEREUNDER, OR (II) ANY MATTER BEYOND INFLUENCERPRO’S OR ITS LICENSORS’ REASONABLE CONTROL, EVEN IF INFLUENCERPRO OR ITS LICENSORS HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.

                                                            </p>
                                                            <h3>15. Confidential Information</h3>
                                                            <p style="text-align: justify; width:110%">
                                                                

{{-- <li style="text-align: justify;"> --}}
 <br>   I. Obligations. InfluencerPro and Influencer or Brand agree to maintain in confidence any non-public information of the other party, whether written or otherwise, disclosed by the other party in the course of performance of this Agreement that a party knows or reasonably should know is considered confidential by the disclosing party (“Confidential Information”). The receiving party shall not disclose, use, transmit, inform or make available to any entity, person or body any of the Confidential Information, except as a necessary part of performing its obligations hereunder, and shall take all such actions as are 
    reasonably necessary and appropriate to preserve and protect the Confidential 
    Information and the parties’ respective rights therein, at all times exercising at least a reasonable level of care. Each party agrees to restrict access to the 
    Confidential Information of the other party to those employees or agents who require access in order to perform hereunder, and, except as otherwise provided, neither party shall make Confidential Information available to any other person or entity without the prior written consent of the other party.
{{-- </li> --}}
{{-- <li style="text-align: justify;">  --}}
  <br>  II. Exclusions. Confidential Information shall not include any information that is (a) already known to the receiving party at the time of the disclosure; (b) publicly known at the time of the disclosure or becomes publicly known through no wrongful act or failure of the receiving party; (c) subsequently disclosed to the receiving party on a non-confidential basis by a third party not having a confidential relationship with the other party hereto that rightfully acquired such information; or (d) communicated to a third party by the receiving party with the express written consent of the other party hereto. A disclosure of Confidential Information that is legally compelled to be disclosed pursuant to a subpoena, summons, order or other judicial or governmental process shall not be considered a breach of this Agreement; provided the receiving party provides prompt notice of any such subpoena, order, or the like to the other party so that such party will have the opportunity to obtain a protective order or otherwise oppose the disclosure.</li>

                                                            </p>
                                                            <h3>16. Termination</h3>
                                                            <p style="text-align: justify; width:110%">
                                                               
The obligations and liabilities of InfluencerPro and You may be terminated as follows:
{{-- <li style="text-align: justify;">  --}}
 <br>   I. Either party may terminate this Agreement in the event of a breach by the other party of any of the covenants or terms or conditions contained herein if such breach continues uncured for a period of twenty (20) days after written notice of such breach; and
{{-- </li> --}}
{{-- <li style="text-align: justify;"> --}}
   <br> II. InfluencerPro may, by giving You written notice of termination, terminate this Agreement and/or any Campaign hereunder (partially or in full) with or without cause, effective upon receipt of such notice without need of intervention of any court or other authority.
{{-- </li> --}}
{{-- <li style="text-align: justify;"> --}}
    III. InfluencerPro has the right to disable your account and/or terminate this Agreement with no notice either with or without participation of a Campaign. InfluencerPro will have the sole right to disable your account and/or terminate this Agreement with or 
    without cause at any time and without notice.
{{-- </li> --}}

                                                            </p>
                                                            <h3>17. Effect of Termination</h3>
                                                            <p style="text-align: justify; width:110%">
                                                              
Upon the expiration or termination of this Agreement for any reason, each party shall be released from all obligations and liabilities to the other occurring or arising after the date of such termination, except that Sections 3, 4, 5, 8, 9, 10, 11, 12, 13, 14, 15, 17, 19, 20, 21, 22, 23, 24 and 26 shall survive any termination or expiration of this Agreement, and any such termination shall not relieve You or InfluencerPro from any liability arising from any breach of this Agreement. In the event of any earlier termination of a Campaign hereunder, InfluencerPro’s only responsibility to You shall be the payment for fees received by InfluencerPro from InfluencerPro's customer for the undisputed services delivered by You to InfluencerPro and/or its customer and accepted by InfluencerPro's customer, up until the date of termination. Notwithstanding the foregoing or anything to the contrary, in the event of any termination by InfluencerPro under Section 16(I), InfluencerPro and/or its customer shall have no further liability and/or obligations to You, including without limitation the payment of any fees hereunder and You shall immediately refund to InfluencerPro any and all fees paid by InfluencerPro and/or its customer to You hereunder.

                                                            </p>
                                                            <h3>  18. Assignment</h3>
                                                            <p style="text-align: justify; width:110%">
                                                              
This Agreement is for personal services and neither the Agreement nor the services to be performed hereunder may be assigned by You (including by operation of law or otherwise), without InfluencerPro’s prior written consent. We may transfer, assign, or delegate this Agreement and our rights and obligations without consent.

                                                            </p>
                                                            <h3> 19. Governing Law </h3>
                                                            <p style="text-align: justify; width:110%">
                                                             
This Agreement shall be construed in accordance with the laws of the State of New York, without reference to its choice of law provision. The parties agree that the jurisdiction and venue of any action with respect to this Agreement shall be in a court of competent subject matter jurisdiction.

                                                            </p>
                                                            <h3> 20. Entire Agreement</h3>
                                                            <p style="text-align: justify; width:110%">
                                                              
This Agreement constitutes the entire agreement between the parties and supersedes all previous agreements, or representations, written or oral, with respect to the subject matter hereof. No alterations or variations of its terms will be valid unless made in writing and signed by both parties.

                                                            </p>
                                                            <h3> 21. Severability</h3>
                                                            <p style="text-align: justify; width:110%">
                                                              
Wherever possible, each provision of this Agreement shall be interpreted in such manner as to be effective and valid under applicable law, but if any provision of this Agreement shall be prohibited by or invalid under applicable law, such provision shall be ineffective only to the extent of such prohibition or invalidity without invalidating the remainder of such provision or the remaining provisions of this Agreement.

                                                            </p>
                                                            <h3> 22. Notices</h3>
                                                            <p style="text-align: justify; width:110%">
                                                               
Any notices required or permitted hereunder shall be deemed sufficient if sent via email or given in writing.
<h3> 23. Waiver.</h3>
<p style="text-align: justify; width:110%">
The waiver of either party of a breach or violation of any provision of this Agreement or the failure of either party to enforce its rights under this Agreement at any time for any period shall not operate as or be construed to be a waiver of any subsequent breach or violation.
</p>
<h3>24. Arbitration Agreement.</h3>
<p style="text-align: justify; width:110%">
Please read the following ARBITRATION AGREEMENT carefully because it requires you to arbitrate certain disputes and claims with INFLUENCERPRO and limits the manner in which you can seek relief from us. Both You and InfluencerPro acknowledge and agree that for the purposes of any dispute arising out of or relating to the subject matter of this Agreement, InfluencerPro’s officers, directors, employees and independent contractors (“Personnel”) are third party beneficiaries of this Agreement, and that upon your acceptance of this Agreement, Personnel will have the right (and will be deemed to have accepted the right) to enforce this Agreement against you as the third party beneficiary hereof.

                                                            </p>

                                                            <p style="text-align: justify;width:110%">
                                                               <br> (a) Arbitration Rules; Applicability of Arbitration Agreement. Any dispute arising out of or relating to the subject matter of this Agreement shall be finally settled by binding arbitration in New York County, New York. The arbitration will proceed in the English language, in accordance with the Streamlined Arbitration Rules and Procedures (“Rules”) in effect, by one commercial arbitrator with substantial experience in resolving intellectual property and commercial contract disputes, who shall be selected from the appropriate list of arbitrators in accordance with such Rules. Judgment upon the award rendered by such arbitrator may be entered in any court of competent jurisdiction. Notwithstanding the foregoing obligation to arbitrate disputes, each party shall have the right to pursue injunctive or other equitable relief at any time, from any court of competent jurisdiction. 
                                                               <br>    (b) Small Claims Court. Furthermore, either You or InfluencerPro may assert claims, if they qualify, in small claims court in New York County, New York or any United States county where you live or work. 
                                                               <br> (c) Waiver of Jury Trial. YOU AND ACTIVATE WAIVE ANY CONSTITUTIONAL AND STATUTORY RIGHTS TO GO TO COURT AND HAVE A TRIAL IN FRONT OF A JUDGE OR JURY. You and Activate are instead choosing to have claims and disputes resolved by arbitration. Arbitration procedures are typically more limited, more efficient, and less costly than rules applicable in court and are subject to very limited review by a court. In any litigation between you and Activate over whether to vacate or enforce an arbitration award, YOU AND INFLUENCERPRO WAIVE ALL RIGHTS TO A JURY TRIAL, and elect instead to have the dispute be resolved by a judge.
                                                               <br> (d) Waiver of Class or Consolidated Actions. ALL CLAIMS AND DISPUTES WITHIN THE SCOPE OF THIS ARBITRATION AGREEMENT MUST BE ARBITRATED OR LITIGATED ON AN INDIVIDUAL BASIS AND NOT ON A CLASS BASIS. CLAIMS OF MORE THAN USER CANNOT BE ARBITRATED OR LITIGATED JOINTLY OR CONSOLIDATED WITH THOSE OF ANY OTHER USER. If however, this waiver of class or consolidated actions is deemed invalid or unenforceable, neither You nor we are entitled to arbitration; instead all claims and disputes will be resolved in a court as set forth in (g) below.
                                                               <br> (e) Opt-out. You have the right to opt out of the provisions of this Section by sending written notice of your decision to opt out to the following address: New York, postmarked within 30 days of first accepting this Agreement. You must include (1) your name and residence address; (2) the email address and/or telephone number associated with your account; and (3) a clear statement that you want to opt out of these Terms’ arbitration agreement.
                                                               <br> (f) Exclusive Venue. If you send the opt-out notice in (f), and/or in any circumstances where the foregoing arbitration agreement permits either you or InfluencerPro to litigate any dispute arising out of or relating to the subject matter of these Terms in court, then the foregoing arbitration agreement will not apply to either party and both you and Activate agree that any judicial proceeding (other than small claims actions) will be brought in the state or federal courts located in, respectively, New York County, New York, or the Southern District of New York.

                                                            </p>
                                                            <h3> 25. Privacy Policy.</h3>
                                                            <p style="text-align: justify;width:110%">
                                                            
Your privacy and the protection of personal data about You are very important to us. By using or accessing the Services in any manner, you acknowledge that you accept the practices and policies outlined in this Privacy Policy, and you hereby consent that we will collect, use, and share your information in the following ways.

                                                            </p> 
                                                            <p style="text-align: justify;width:110%">
                                                                This Privacy Policy covers our treatment of personally identifiable information ("Personal Information") that we gather when you are accessing or using our Service, but not to the practices of companies we don’t own or control, or people that we don’t manage. We gather various types of Personal Information from our users and Influencers, as explained in more detail below, and we use this Personal Information internally in connection with our Services, including to personalize, provide, and improve our Services, to allow you to set up an Influencer account and profile, to contact you in connection with Campaigns, and to analyze how you use the Services. In certain cases, we may also share some Personal Information with third parties, but only as described below.
                                                            </p>       

                                                            <p style="text-align: justify;width:110%">
                                                                We’re constantly trying to improve our Service, so we may need to change this Privacy Policy from time to time as well, but we will alert you to changes by placing a notice on https://influencerpro.org/, by sending you an email, and/or by some other means. Please note that if you’ve opted not to receive legal notice emails from us (or you haven’t provided us with your email address), those legal notices will still govern your use of the Service, and you are still responsible for reading and understanding them. If you use the Service after any changes to the Privacy Policy have been posted, that means you agree to all of the changes. 
                                                            </p>   
                                                            <li style="text-align: justify">(a) Information that InfluencerPro collects from You:</li> 
                                                            <p style="text-align: justify;width:110%">
                                                               
                                                               We receive and store any information you knowingly provide to us. For example, if you sign up for an Influencer account, we may collect Personal Information such as your first and last name, email address, phone number, location, gender, date of birth, ethnicity, household income, education level, marital status and parental status. Please note that providing some of this information is optional, but it is not all required to sign up for an account. 
                                                            </p>   
                                                            <p style="text-align: justify;width:110%">
                                                                We may also communicate with you if you’ve provided us the means to do so. For example, if you’ve given us your email address, we may send you emails about the Service, even if you do not sign up to become an Influencer or Brand. If you do not want to receive communications from us, please indicate your preference by clicking the unsubscribe button in the email.
                                                            </p> 
                                                            <li  style="text-align: justify">  (b) Information that InfluencerPro automatically collects:</li>  
                                                            <p style="text-align: justify;width:110%">
                                                             
Whenever you interact with our Services, we automatically receive and record information on our server logs from your browser or device, which may include your IP address, geolocation data, device identification, “cookie” information, the type of browser and/or device you’re using to access our Services, and the page or feature you requested. “Cookies” are identifiers we transfer to your browser or device that allow us to recognize your browser or device and tell us how and when pages and features in our Services are visited and by how many people. You may be able to change the preferences on your browser or device to prevent or limit your device’s acceptance of cookies, but this may prevent you from taking advantage of some of our features.

                                                            </p>       
                                                            <p style="text-align: justify;width:110%">
                                                                If you click on a link to a third party website, a third party may also transmit cookies to you. Again, this Privacy Policy does not cover the use of cookies by any third parties, and we aren’t responsible for their privacy policies and practices. Please be aware that cookies placed by third parties may continue to track your activities online even after you have left our Service, and those third parties may not honor “Do Not Track” requests you have set using your browser or device.
                                                            </p>   
                                                            <p style="text-align: justify;width:110%">
                                                                We may use this automatically collected data to customize content for you that we think you might like, based on your usage patterns. We may also use it to improve the Service – for example, this data can tell us how often users use a particular feature of the Service, and we can use that knowledge to make the Services interesting to as many users as possible.
                                                            </p>   
                                                            <li  style="text-align: justify;">(c) Information that InfluencerPro shares with third parties:</li>
                                                            <p style="text-align: justify;width:110%">
                                                                
We do not rent or sell your Personal Information in personally identifiable form to anyone. We may, however, share your Personal Information with third parties as described in this section:

                                                            </p> 
                                                            <h6  style="text-align: justify;"> 1. Information that’s been de-identified.</h6>  
                                                            <p style="text-align: justify;width:110%">
                                                                 We may de-identify your Personal Information so that you are not identified as an individual, and provide that information to our partners. We may also provide aggregate usage information to our partners (or allow partners to collect that information from you), who may use such information to understand how often and in what ways people use our Services, so that they, too, can provide you with an optimal online experience. However, we never disclose aggregate usage or de-identified information to a partner (or allow a partner to collect such information) in a manner that would identify you as an individual person.
                                                            </p>  
                                                            <h6  style="text-align: justify;">  2. Affiliated Businesses:</h6> 
                                                            <p style="text-align: justify;width:110%">
                                                                 In certain situations, businesses or third party websites we’re affiliated with may sell or provide products or services to you through or in connection with the Service (either alone or jointly with us). You can recognize when an affiliated business is associated with such a transaction or service, and we will share your Personal Information with that affiliated business only to the extent that it is related to such transaction or service.
                                                            </p>  
                                                            <h6>  3. Agents:</h6> 
                                                            <p style="text-align: justify;width:110%">
                                                                We employ other companies and people to perform tasks on our behalf and need to share your information with them to provide products or services to you. Unless we tell you differently, our agents do not have any right to use the Personal Information we share with them beyond what is necessary to assist us.
                                                            </p>
                                                            <h6> 4. Influencer Profiles:</h6>
                                                            <p style="text-align: justify;width:110%">
                                                                 Certain Influencer profile information, including your name, location, and any other information you choose to provide when you sign up for an account may be shared with our customers in connection with any Campaigns. Customers may not use or share this information except in connection with the services that InfluencerPro provides to such customers.
                                                            </p>
                                                            <h6>  5. Business Transfers:</h6>
                                                            <p style="text-align: justify;width:110%">
                                                                We may choose to buy or sell assets, and may share and/or transfer customer information in connection with the evaluation of and entry into such transactions. Also, if we (or our assets) are acquired, or if we go out of business, enter bankruptcy, or go through some other change of control, Personal Information could be one of the assets transferred to or acquired by a third party.
                                                            </p>
                                                            <h6> 6. Protection of Activate and Others:</h6>
                                                            <p style="text-align: justify;width:110%">
                                                                 We reserve the right to access, read, preserve, and disclose any information that we believe is necessary to comply with law or court order; enforce or apply this Agreement; or protect the rights, property, or safety of InfluencerPro, our employees, our users, or others.
                                                            </p>
                                                            <h2> (d) Security of Your Personal Information:</h2>
                                                            <p style="text-align: justify;width:110%">
                                                               
Your account is protected by a password for your privacy and security. You must prevent unauthorized access to your account and Personal Information by selecting and protecting your password and limiting access to your computer or device and browser by signing off after you have finished accessing your account. 

                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                                We endeavor to protect the privacy of your account and other Personal Information we hold in our records, but unfortunately, we cannot guarantee complete security. Unauthorized entry or use, hardware or software failure, and other factors, may compromise the security of user information at any time.
                                                            </p>
                                                            <h2>(e) No obligation to disclose Personal Information:</h2>
                                                            <p style="text-align: justify;width:110%">
                                                               
You can always opt not to disclose information to us, but keep in mind some information may be needed to register with us as an Influencer or to take advantage of some of our features.

                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                                You may be able to add, update, or delete information. When you update information, however, we may maintain a copy of the unrevised information in our records. You may request deletion of your account by You may request deletion of your account by visiting the account settings page and clicking the "Delete My Account" button. Some information may remain in our records after your deletion of such information from your account. We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you personally.
                                                            </p>
                                                            <h3> 26. Copyright Dispute Policy.</h3>
                                                            <p style="text-align: justify;width:110%">
                                                               
In accordance with the DMCA, we’ve adopted the policy below toward copyright infringement. We reserve the right to (1) block access to or remove material that we believe in good faith to be copyrighted material that has been illegally copied and distributed by any of our advertisers, affiliates, content providers, members or users and (2) remove and discontinue service to repeat offenders.
<br>Remember that your use of InfluencerPro’s Service is at all times subject to this Agreements, which incorporates this Copyright Dispute Policy.
                                                            </p>

                                                            <p style="text-align: justify;width:110%">
                                                               <br> a. A physical or electronic signature of a person authorized to act on behalf of the owner of the copyright that has been allegedly infringed; 
                                                                   <br> b. Identification of works or materials being infringed; </li>
                                                                       <br> c. Identification of the material that is claimed to be infringing including information regarding the location of the infringing materials that the copyright owner seeks to have removed, with sufficient detail so that InfluencerPro is capable of finding and verifying its existence; 
                                                                           <br> d. Contact information about the notifier including address, telephone number and, if available, email address;
                                                                               <br> e. A statement that the notifier has a good faith belief that the material identified in (1)(c) is not authorized by the copyright owner, its agent, or the law; and 
                                                                                   <br>f. A statement made under penalty of perjury that the information provided is accurate and the notifying party is authorized to make the complaint on behalf of the copyright owner.
                                                                                       <br>g.  Once Proper Bona Fide Infringement Notification is Received by the Designated Agent. Upon receipt of a proper notice of copyright infringement, we reserve the right to:
                                                                                          <br> <span style="margin-left:25px"> - remove or disable access to the infringing material; </span><br>
                                                                                           <span style="margin-left:25px">    - notify the content provider who is accused of infringement that we have removed or disabled access to the applicable material; and</span> <br>
                                                                                           <span style="margin-left:25px"> - terminate such content provider's access to the Services if he or she is a repeat offender.</span> <br>
                                                                                                        <span style="margin-left:35px"> Please contact InfluencerPro’s Designated Agent at the following address 
                                                                                                         support@influencerpro.org </span>

                                                            </p>

                                                            <p style="text-align: justify;width:110%">
                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                            </p>  <p style="text-align: justify;width:110%">
                                                            </p>
                                                            <p style="text-align: justify;width:110%">
                                                            </p>

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
