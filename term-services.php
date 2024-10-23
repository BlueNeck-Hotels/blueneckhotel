<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    /* General styles */
section {
  margin-top: 4rem;
}

/* Heading styles */
h2[id], h3[id], h4[id], h5[id], h6[id] {
    cursor: pointer;    
    padding: 2rem 0;    
    transition: all 1s, color 0s;
}

/* Before pseudo-element styles */
h2[id]::before,
h3[id]::before,
h4[id]::before,
h5[id]::before,
h6[id]::before {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  border-radius: 1rem;
  margin: 0 1rem;
  content: "#";
  text-align: center;
  line-height: 2rem;
  color: #01BCF1;
  background: #FFD603;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
  transition: all 0.125s;
}

/* Hover effect on heading */
h2[id]:hover::before,
h3[id]:hover::before,
h4[id]:hover::before,
h5[id]:hover::before,
h6[id]:hover::before {
  color: #FFD603;
  background: #01BCF1;
}
aside.preface {
    background: #ffd6032e;
    padding: 60px;
    border-radius: 30px;
    margin-bottom: 1px;
}
/* Visible section styles */
section.visible {
    padding: 2rem; 
    color: #01BCF1;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    background: #E6F8FE;
    border-radius: 30px;
}

section.visible h2[id]::before,
section.visible h3[id]::before,
section.visible h4[id]::before,
section.visible h5[id]::before,
section.visible h6[id]::before {
  text-shadow: none;
}

/* Hover effect on visible section */
section.visible h2[id]:hover::before,
section.visible h3[id]:hover::before,
section.visible h4[id]:hover::before,
section.visible h5[id]:hover::before,
section.visible h6[id]:hover::before {
  background: #01BCF1 ;
  color: #FFD603;
}

/* Content container */
.content-container {
  display: flex;
  flex-direction: row-reverse;
}

/* Sidebar styles */
.content-sidebar {
  flex: 0 0 30%;
  padding: 0 1rem;
  border-left: 1px solid rgba(0, 0, 0, 0.1);
  background: #fafafa;
}

/* Navigation styles */
.content-navigation {
  position: sticky;
  top: 0;
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 2rem 0;
}

.content-navigation a {
    display: block;
    padding: 0.25rem 0;
    text-decoration: none;
    color: #01BCF1;
    font-size: 0.85rem;
}

.content-navigation a.visible {
  color: #FFD603;
}

.content-navigation a.visible ~ a {
  color: #000;
}

.content-navigation .content-navigation-title {
    margin: 10px 0;
    font-size: 1.7rem;
    font-weight: 700;
    text-transform: uppercase;
    color: #FFD603;
}
/* Main content styles */
.content {
  flex: 0 1 70%;
  padding: 4rem;
  font-size: 1.1rem;
  line-height: 1.6;
  overflow-x: scroll;
}
/* Overall container styles */
.container {
    max-width: 80%;
    padding: 0 15px;
    margin: 0 auto;
    box-sizing: border-box;
}

/* Row styles */
.row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

/* Column styles */
.col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
}

/* Preface and content container styles */
.preface, .content-container {

    box-sizing: border-box;
}

/* Strong tag within preface */
.preface strong {
    font-weight: bold;
}

/* Content navigation styles */
.content-navigation-title {
    margin-top: 0;
}

.content-navigation a {
    display: block;
    padding: 10px 0;
}

/* Content styles */
.content {
    padding: 20px;
}

/* Responsive styles for mobile view */
@media screen and (max-width: 767px) {
    /* Adjust padding for preface and content container */
    .preface, .content-container {
        padding: 10px;
    }

    .content{flex: 0 1 100%;}
    /* Hide content navigation on mobile */
    .content-sidebar {
        display: none;
    }

    /* Adjust margin for content navigation title */
    .content-navigation-title {
        margin-top: 20px;
    }

   
    .content-navigation a {
        padding: 5px 0;
    }
}
  </style>
  <body>
    <!--suppress ALL -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <aside class="preface">
               <p>
               <b> This is a legal agreement between you, either an individual subscriber, customer, member, or user of at least 18 years of age or a single entity ("you", or collectively "users") or otherwise capable of entering into and performing legal agreements stating the terms that govern your use of the BlueNeck Hotels Platform, services and networks owned or controlled by CRS HosTech Private Limited that allow a User to book a room in the Hotels and/or other properties associated with BlueNeck Hotels. In this agreement "BlueNeck Hotels" refers to the corporate entity CRS HosTech Private Limited as well as its website www.BlueNeck Hotels.com and mobile application and other services as the context provides. This agreement - together with all updates, additional terms, software licenses, and all of BlueNeck Hotels rules and policies including but not limited to privacy policy, cancellation and refund policy - collectively constitute the "Agreement" between you and BlueNeck Hotels. Your continued use of the BlueNeck Hotels website constitutes your binding acceptance of the Terms and conditions and all other policies updated from time to time. You must accept and abide by these terms as presented to you: changes, additions, or deletions are not acceptable, and BlueNeck Hotels may refuse access to BlueNeck Hotels services for noncompliance with any part of this agreement.</b> <br> <br>
When using the BlueNeck Hotels, You will be subject to any additional posted policies, guidelines or rules applicable to specific services and features which may be posted from time to time (the "Policies"). All such Policies are hereby incorporated by reference into these Terms. In the case of any inconsistency between these Terms of Use and any other document that has been incorporated by reference herein, these Terms of Use shall supersede all such documents mentioned above.
BlueNeck Hotels reserves the right, at BlueNeck Hotels' discretion, to change, modify, add, or remove portions of these Terms at any time by posting the amended Terms to the BlueNeck Hotels. Please check these Terms and any Policies periodically for changes. BlueNeck Hotels reserves the right to update and change the TERMS OF USE from time to time without notice or acceptance by you, however, BlueNeck Hotels will use its commercially reasonable efforts to include notices regarding any such updates or changes to this TERMS OF USE on the Platform. Your continued use of the BlueNeck Hotels after the posting of changes constitutes your binding acceptance of such changes. Except as stated elsewhere, such amended Terms or fees will automatically be effective.

               </p>
               <p>These “Terms of Use” apply to the services provided by BlueNeck Hotels on its website or application (collectively known as “Platform”), and applies to all Users of the BlueNeck Hotels Platform.</p>
            </aside>
        </div>
    </div>
              <div class="row">
                <div class="col-lg-12">
                    <main class="content-container">
                        <aside class="content-sidebar">
                         <nav class="content-navigation">
                          <header>
                           <h2 class="content-navigation-title">Importants</h2>
                          </header>
                          <a href="#section-Intersection_observer_concepts_and_usage">1. GENERAL</a>   
                          <a href="#section-Creating_an_intersection_observer">2. ABOUT BLUENECK HOTELS</a>   
                          <a href="#section-Intersection_observer_options">3. MEMBERSHIP ELIGIBILITY</a>   
                          <a href="#section-Targeting_an_element_to_be_observed">4. USER RESPONSIBILITY</a>   
                          <a href="#section-How_intersection_is_calculated">5. COMMUNICATIONS</a>    
                          <a href="#section-Thresholds">6. OWNERSHIP</a>   
                          <a href="#section-Intersection_change_callbacks">7. INTELLECTUAL PROPERTY</a>   
                          <a href="#section-Interfaces">8. DISCLAIMER</a>   
                          <a href="#section-A_simple_example">9. UNLAWFUL USE AND CONDUCT</a>  
                          <a href="#section-b_contact_example">10. PRIVACY POLICY</a>  
                          <a href="#section-b_contact_example1">11. RESTRAINTS</a> 
                          <a href="#section-b_contact_example2">12. TERMINATION</a>  
                          <a href="#section-b_contact_example3">13. LIMITATION OF LIABILITY</a>
                          <a href="#section-b_contact_example4">14. INDEMNIFICATION</a> 
                          <a href="#section-b_contact_example5">15. GOVERNING LAW</a> 
                          <a href="#section-b_contact_example6">16. MISCELLANEOUS</a> 
                          <a href="#section-b_contact_example7">17. ENFORCEMENT</a> 
                          <a href="#section-b_contact_example8">18. Additional Terms and Conditions concerning Hotels listed on BlueNeck Hotels Platform</a>    


                     
                         </nav>
                        </aside>
                        <article class="content" id="wikiArticle">
                    
                         <section id="section-Intersection_observer_concepts_and_usage">
                          <h2 id="Intersection_observer_concepts_and_usage">1. GENERAL</h2>      
                          <p><strong>This document is an electronic record in terms of Information Technology Act, 2000 and rules there under as applicable and the amended provisions pertaining to electronic records in various statutes as amended by the Information Technology Act, 2000. This electronic record is generated by a computer system and does not require any physical or digital signatures.
                        </strong></p><br>
                          <p>This document is published in accordance with the provisions of Rule 3 (1) of the Information Technology (Intermediaries guidelines) Rules, 2011 that require publishing the rules and regulations, privacy policy and user agreement for access or usage of BlueNeck Hotels Platform.
                        </p>
                            <p>Your use of the BlueNeck Hotels and services and tools are governed by the following terms and conditions as applicable including the applicable policies which are incorporated herein by way of reference. By mere use of the Website, You shall be contracting with BlueNeck Hotels and these terms and conditions including the policies constitute Your binding obligations, with BlueNeck Hotels.
                            </p>
                            <p>Your use of the BlueNeck Hotels and services and tools are governed by the following terms and conditions as applicable including the applicable policies which are incorporated herein by way of reference. By mere use of the Website, You shall be contracting with BlueNeck Hotels and these terms and conditions including the policies constitute Your binding obligations, with BlueNeck Hotels.
                                For the purpose of these Terms of Use, wherever the context so requires "You" or "User" shall mean any natural or legal person who has agreed to become a viewer on the Website by providing Registration Data while registering on the Website as Registered User using the computer systems. The term "We", "Us", "Our"  shall mean BlueNeck Hotels. .
                                </p>
                         </section>
                       
                         <section id="section-Creating_an_intersection_observer">
                          <h3 id="Creating_an_intersection_observer">2. ABOUT BLUENECK HOTELS</h3>   
                          <p>BlueNeck Hotels is preferred hotel brand for the modern Indian travellers, working with the intent to make great hospitality affordable. To ensure that you get consistently high level of service, all our hotels and B&Bs follow strict standard operating procedures when it comes to housekeeping, laundry or F&B, and entire staff​ ​undergoes regular training and auditing.
                          </p>
                         </section>
                       
                         <section id="section-Intersection_observer_options">
                          <h4 id="Intersection_observer_options">3. MEMBERSHIP ELIGIBILITY</h4>
                       <p>Use of the Platform is available only to persons who can form legally binding contracts under Indian Contract Act, 1872. Persons who are "incompetent to contract" within the meaning of the Indian Contract Act, 1872 including minors, un-discharged insolvents etc. are not eligible to use the Platform.</p>
                       <p>The content on the Platform is not meant for children and therefore it is not advisable for children to be visiting/accessing/becoming a member of the Platform. BlueNeck Hotels reserves the right to terminate your membership and / or refuse to provide you with access to the Platform if it is brought to BlueNeck Hotels's notice or if it is discovered that you are under the age of 18 years.
                    </p>
                
                   </section>
                       
                         <section id="section-Targeting_an_element_to_be_observed">
                          <h4 id="Targeting_an_element_to_be_observed">4. USER RESPONSIBILITY</h4>
                       
                          <p>You assume all responsibility for the use of BlueNeck Hotels Platform. You also waive all claims against BlueNeck Hotels, its officers, directors, employees, suppliers, and programmers that may arise from the use of the BlueNeck Hotels Platform.</p>
                         </section>
                       
                         <section id="section-How_intersection_is_calculated">
                          <h3 id="How_intersection_is_calculated">5. COMMUNICATIONS</h3>
                       <p>When You use the Platform or send emails or other data, information or communication to us, You agree and understand that You are communicating with us through electronic records and You consent to receive communications via electronic records from us periodically and as and when required. We may communicate with you by email or by such other mode of communication, electronic or otherwise.</p>
                     <br>
                     <p>If You send any communications or materials to the BlueNeck Hotels Platform by electronic mail or otherwise, including any comments, data, questions, suggestions, or the like, all such communications are and will be treated as, non-confidential and non-proprietary. Thus, the User gives up any claim that any use of such material violates any of the User's rights including moral rights, privacy rights, proprietary or other property rights, publicity rights, rights to credit for material or ideas, or any other right, including the right to approve the way BlueNeck Hotels uses such material.
                    </p>
                        </section>
                       
                         <section id="section-Thresholds">
                          <h4 id="Thresholds">6. OWNERSHIP</h4>
                          <p>BlueNeck Hotels or its licensors own all Intellectual Property Rights in and to the Content, Platform, and Services. You agree to abide by any and all copyright notices, information, or restrictions displayed on the Platform.
                            You acknowledge that you do not acquire any ownership rights by your permitted use of the Platform, its Content. You are responsible for complying with all applicable laws, rules, and regulations regarding your use of any Content. In the event of any permitted copying, redistribution, or publication of Content from the Platform and Services, no changes in or deletion of author attribution, trademark, legend, or copyright notice shall be made.
                            </p><br>
                        <p>BlueNeck Hotels shall have the right for any reason, in its sole discretion, to terminate, change, suspend, or discontinue, temporarily or permanently, any aspect of the Platform, including, but not limited to Content, features, and hours of availability, without further notice to you.
                        </p><br>
                        <p>You agree that BlueNeck Hotels may terminate your use of this Platform, cancel your user registration, remove your Communications, and/or exercise any other remedy available to it, if BlueNeck Hotels reasonably believes that you have violated or acted inconsistently with these Terms, or violated the rights of BlueNeck Hotels or any third party, or for any reason, with or without notice to you. You agree that BlueNeck Hotels will not be held liable to you or any third party as a result thereof
                            </p>
                         </section>
                       
                         <section id="section-Intersection_change_callbacks">
                          <h3 id="Intersection_change_callbacks">7. INTELLECTUAL PROPERTY</h3>   
                          <p>All Content included on the Platform, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data compilations, and software, is the property of BlueNeck Hotels, its affiliates or its content suppliers and is protected by India and international copyright laws, authors' rights , trademark and database right laws. The compilation of all content on this Platform is the exclusive property of BlueNeck Hotels and its affiliates and is protected by laws of India and international copyright and database right laws.
                            You may not systematically extract/ or re-utilise parts of the contents of the Platform without BlueNeck Hotels and / or its affiliates (as may be applicable) express written consent. In particular, you may not utilise any data mining, robots, or similar data gathering and extraction tools to extract (whether once or many times) for re-utilisation of any substantial parts of the Platform, without BlueNeck Hotels and / or its affiliates (as may be applicable) express written consent.
                              </p>
                         </section>
                       
                         <section id="section-Interfaces">
                          <h2 id="Interfaces">8. DISCLAIMER</h2>
                       <p>BlueNeck Hotels does not represent or endorse the accuracy or reliability of any advice, opinion, statement, or other information displayed or distributed through the Content on the Platform. You acknowledge that any reliance upon any such opinion, advice, statement, memorandum, or information shall be at your sole risk. BlueNeck Hotels reserves the right, in its sole discretion, to correct any errors or omissions in any portion of the Platform.
                        You also acknowledge that BlueNeck Hotels Platform provides intermediary services in order to facilitate hotel services to you. BlueNeck Hotels is not the last-mile service provider to you and therefore, BlueNeck Hotels shall not be or deemed to be responsible for any lack or deficiency of services provided by any person you shall engage or hire or appoint pursuant to or resulting from, the material available in BlueNeck Hotels Platform.
                        BlueNeck Hotels shall not be liable to you or to any other person for any direct, indirect, incidental, punitive or consequential loss, damage, cost or expense of any kind whatsoever and howsoever caused from out of your usage of this Platform.
                        If for any reason, law does not permit exclusions of liability then, the liability of the BlueNeck Hotels shall be limited to such amount paid by the user and retained by the BlueNeck Hotels for the transaction in question.
                        </p> </section>
                       
                         <section id="section-A_simple_example">
                          <h2 id="A_simple_example">9. UNLAWFUL USE AND CONDUCT</h2>
                       
                          <p>You agree that your use of the Platform must comply with all applicable local, state, national, and international laws, and that you will not use the Platform for any illegal purpose.
                        </p>
                         </section>
                         <section id="section-b_contact_example">
                            <h2 id="A_simple_example">10. PRIVACY POLICY</h2>
                            <p>The Terms of Use of BlueNeck Hotels are to be read in consonance with the Privacy Policy, which is available here and Cancellation Policy, which is available here.
                           </p>
                         </section>
                         <section id="section-b_contact_example1">
                            <h2 id="A_simple_example">11. RESTRAINTS</h2>
                            <p>By using or accessing BlueNeck Hotels as a viewer, you hereby agree to refrain from the following: <br>
                                (a) violating the rights of another individual or entity, including but not limited to any of such party's intellectual property rights; <br>
                                (b) interfering with or disrupting the Platform, circumventing, disabling or interfering with security features on the Platform;<br>
                                (c) stalking or otherwise harassing another person;<br>
                                (d) impersonating any person or entity, including, but not limited to, a BlueNeck Hotels employee, or falsely stating or otherwise misrepresenting your affiliation with a person or entity;<br>
                                (e) forging or intentionally modifying headers or other information for the purpose of disguising the origin of any Content transmitted through the Platform;<br>
                                (f) violating any applicable local, state, national or international law, and any applicable regulations having the force of law;<br>
                                (g) promoting or providing instructional information about illegal activities, promoting physical harm or injury against any group or individual, or promoting any act of cruelty to animals. This may include, without limitation, providing instructions on how to assemble bombs, grenades and other weapons or incendiary devices; and/or<br>
                                (h) offering for sale or selling any item, good or service that <br>
                                (i) violates any applicable federal, state, or local law or regulation,<br>
                                (ii) you do not have full power and authority under all relevant laws and regulations to offer and sell, including all necessary licenses and authorizations, or <br>
                                (iii) BlueNeck Hotels determines, in its sole discretion, is inappropriate for transmission through the Service. You agree not to collect or harvest any personally identifiable information, including User IDs, nor to use the communication systems provided for any commercial solicitation purposes. <br>
                                </p>
                         </section>
                         <section id="section-b_contact_example2">
                            <h2 id="A_simple_example">12. TERMINATION</h2>
                            <p>You agree that BlueNeck Hotels may, in its sole and absolute discretion and without notice or liability to you or any third party, immediately terminate your User ID as a viewer, and remove or discard from the Platform. Grounds for such termination may include, but are not limited to:<br>
                                (a) extended periods of inactivity,<br>
                                (b) violating or acting inconsistently with the letter or spirit of this terms of use,<br>
                                (c) discontinuance or material modification of the Service, or<br>
                                (d) requests by Content owners or law enforcement or other government agencies. BlueNeck Hotels may also in its sole discretion and at any time, discontinue the Platform with or without notice.<br>
                                </p>
                         </section>

                         <section id="section-b_contact_example3">
                            <h2 id="A_simple_example">13. LIMITATION OF LIABILITY</h2>
                            <p>All BlueNeck Hotels are owned and operated by individual partners. Once a booking is done and confirmed with the partner hotels, BlueNeck Hotels do not hold any liability for any occurrence of any mishap on these properties resulting in any material or human damage. You understand and agree that BlueNeck Hotels shall not be liable to You for any direct, indirect, incidental, special, consequential or exemplary damages, including without limitation damages for loss of profits, goodwill, use, data or other intangible losses (even if BlueNeck Hotels had been advised of the possibility of such damages), resulting from or relating to the Platform, whether based on warranty, contract, tort, or any other legal theory.
                                Notwithstanding anything to the contrary contained herein or elsewhere, BlueNeck Hotels liability for any user’s claim which may arise out of availing BlueNeck Hotels services through browsing FabHotel’s portal or elsewhere shall be limited up to the amount paid by the user at the time of making his/ her booking for availing the products and services giving rise to such claim.
                                All claims/complaints arising from and in connection with the use of BlueNeck Hotels Services shall be promptly submitted or reported to BlueNeck Hotels within 30 days of the consumption of such Services. Any claim or complaint that is submitted/reported after the period of 30 days may be rejected, and the claimant will forfeit the right to claim any damage, cost or compensation.
                                </p>
                         </section>

                         <section id="section-b_contact_example4">
                            <h2 id="A_simple_example">14. INDEMNIFICATION</h2>
                            <p>

                                You agree, at your own expense, to indemnify, defend, and hold harmless BlueNeck Hotels, its employees, agents, and representatives against any claim, suit, action, or administrative proceeding brought against BlueNeck Hotels, its employees, agents, and/or representatives ("claim") to the extent such claim, arises out of, or is related to your content, your access or use of the Platform, your violation of this terms of use, or of any rights of another, including, without limitation, access or use of the Platform by someone else, or violation by such other person of the terms of use, using your computer or user id. You also undertake to indemnify BlueNeck Hotels against any claim, suit, actions and proceedings brought against BlueNeck Hotels by any partner hotels. This indemnification agreement also applies (without limiting) to any claim, directly or indirectly related to the Platform <br>
                                (i) that your use or access or another person's use or access of your computer or user id infringes any copyright, trademark, service mark, patent, trade secret, right of publicity, or other proprietary right of a third party under any local, international, federal, or state law; <br>
                                (ii) that your use or access to the Platform is in any way defamatory, slanderous, libelous, or otherwise injurious to a third party. <br>
                                You agree to pay any and all costs, damages and expenses, including, but not limited to, reasonable attorney's fees and costs awarded or incurred by or in connection with any such claim, suit, action, or administrative proceeding. This defense and indemnification obligation shall survive these terms of use and your use of the Platform.</p>
                         </section>

                         <section id="section-b_contact_example5">
                            <h2 id="A_simple_example">15. GOVERNING LAW</h2>
                            <p>The Platform is controlled and offered by BlueNeck Hotels from its facilities in India. BlueNeck Hotels makes no representations that the BlueNeck Hotels Platform is appropriate or available for use in other locations. Those who access or use the BlueNeck Hotels Platform from other jurisdictions do so at their own volition and are responsible for compliance with local law. The terms of use and the relationship between You and BlueNeck Hotels shall be exclusively governed by and construed in all respects under the laws of India without giving effect to any choice-of-law or conflict-of-laws provisions.
                                You agree that: <br>
                                (i) the BlueNeck Hotels Platform shall be deemed solely based in India; and <br>
                                (ii) the BlueNeck Hotels Platform shall be deemed passive that does not give rise to personal jurisdiction over BlueNeck Hotels, either specific or general, in jurisdictions other than India. You and BlueNeck Hotels further agree to submit to the personal jurisdiction of the courts located in Delhi, for any and all legal claims, suits or actions that arise in connection with the Platform or from a dispute as to the interpretation or breach of the terms of use.</p>
                         </section>

                         <section id="section-b_contact_example6">
                            <h2 id="A_simple_example">16. MISCELLANEOUS</h2>
                            <p><b>(a) Waiver and severability:</b> The failure of BlueNeck Hotels to exercise or enforce any right or provision of the terms of use shall not constitute a waiver of such right or provision. If any of the provisions of the terms of use are held invalid, unenforceable, or void by a court or other tribunal of competent jurisdiction, the parties nevertheless agree that the court should endeavor to give effect to the parties' intentions as reflected in the provision, and the other provisions of the terms of use remain in full force and effect. <br> <br>
                                <b>(b) Entire Agreement:</b> The terms of use, together with the policies any applicable end user license agreement and any other legal notices published by BlueNeck Hotels on the Platform, constitute the entire and only agreement between you and BlueNeck Hotels with respect to the Platform, and supersedes any prior agreements, oral or written, between you and BlueNeck Hotels. Any and all other collateral representations, promises, and conditions; and any representation, warranty, promise or condition not incorporated herein or made as provided for in this terms of use shall not be binding on BlueNeck Hotels. The section titles in the terms of use are for convenience only and have no legal or contractual effect. If any provision of these terms of service is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of these terms of service, which shall remain in full force and effect. You also may be subject to additional terms and conditions that may apply when you use affiliate or other BlueNeck Hotels services, third-party content or third-party software. <br><br>
                                <b>(c) No Third Party Beneficiaries:</b> You agree that, except as otherwise expressly provided in this Terms of Use, there shall be no third party beneficiaries to this terms of use.<br><br>
                               <b> (d) No right of survivorship; non-transferability:</b> You agree that your BlueNeck Hotels user id is non-transferable and any rights to your user id or content terminate upon your death.<br><br>
                                <b>(e) Statute of limitations:</b> You agree that regardless of any statute or law to the contrary, any claim or cause of action arising out of or related to use of the service or the terms of use must be filed within one (1) year after such claim or cause of action arose or be forever barred.<br><br>
                                </p>
                         </section>

                         <section id="section-b_contact_example7">
                            <h2 id="A_simple_example">17. ENFORCEMENT</h2>
                            <p>BlueNeck Hotels reserves the right to enlist and take measures that BlueNeck Hotels believes are reasonably necessary to enforce, or appropriate to enforce, or verify compliance with any part of this Agreement (including but not limited to BlueNeck Hotels' right to cooperate with any legal process relating to your use of the mobile application and/or Content, and/or a third party claim that your use of BlueNeck Hotels and/or Content is unlawful and/or infringes such third party's rights). You agree that BlueNeck Hotels has the right, without liability or notice to you, to disclose any Registration Data/Account information to law enforcement authorities, government official, and/or third party, as BlueNeck Hotels believes is reasonably necessary or appropriate to enforce and/or verify compliance with any part of this Agreement (including but not limited to BlueNeck Hotels’ right to cooperate with any legal process relating to your use of BlueNeck Hotels and/or the Content, and/or a third party claim that your use of BlueNeck Hotels and /or the Content is unlawful and/or infringes such third party's rights).<br><br>
                            </p>
                         </section>

                         <section id="section-b_contact_example8">
                            <h2 id="A_simple_example">18. Additional Terms and Conditions concerning Hotels listed on BlueNeck Hotels Platform</h2>
                            <p>(a) Hotels may not allow local residents to check-in as guests. This is strictly subject to the Hotel Policies and BlueNeck Hotels will not be responsible for such check-in denials. <br>
                                (b) The primary guest must be at least 18 years old to be able to check into the hotel. <br>
                                (c) Your stay does not include additional personal expenses like telephone charges, meals that aren't part of your meal plan, any hotel services you use (like laundry and room service) or tips. The hotel will charge you directly for these when you're checking out. <br>
                                (d) It is mandatory for guests to present valid photo identification at the time of check-in. According to government regulations, a valid Photo ID has to be carried by every person above the age of 18 staying at the hotel. The identification proofs accepted are Drivers License, Voters Card, and Passport. Without valid ID the guest will not be allowed to check in. Note- PAN Cards will not be accepted as a valid ID card. <br>
                                (e) The hotel reserves the right of admission. Accommodation can be denied to guests posing as a 'couple' if suitable proof of identification is not presented at check-in. BlueNeck Hotels will not be responsible for any check-in denied by the hotel due to the aforesaid reason. <br>
                                </p>
                         </section>

                      
                         
                     
                       
                     
                        </article>
                       </main>
                
        </div>
    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    window.addEventListener("load", () => {
 // Retrieve all help sections
 const sections = Array.from(document.querySelectorAll("section[id]"));

 // Once a scrolling event is detected, iterate all elements
 // whose visibility changed and highlight their navigation entry
 const scrollHandler = entries =>
  entries.forEach(entry => {
   const section = entry.target;
   const sectionId = section.id;
   const sectionLink = document.querySelector(`a[href="#${sectionId}"]`);

   if (entry.intersectionRatio > 0) {
    section.classList.add("visible");
    sectionLink.classList.add("visible");
   } else {
    section.classList.remove("visible");
    sectionLink.classList.remove("visible");
   }
  });

 // Creates a new scroll observer
 const observer = new IntersectionObserver(scrollHandler);

 //noinspection JSCheckFunctionSignatures
 sections.forEach(section => observer.observe(section));
});

  </script>
</body>
</html>