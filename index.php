<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['visa'])) {
    # code...
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['visa']) ) {
            # code...
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $visa = $_POST['visa'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo 'Kindly Provide Valid Email';
            }
                else {
                 $body = $name."\n".$email."\n".$number."\n".$visa;
                    if (mail('didarulselim@gmail.com' , 'Trip', $body ,'From: didarulselim@gmail.com')) {
                    alart " Thanks For Your Mail";
                 }
                 else {
                    echo 'There is a problem in sending mail.';
                 }
                }
            
            }
       
        else {
            echo 'All Fields Are Required.';
        }
     }
        else {
            echo '';
        }
        
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- meta tag start -->
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <meta class="metaTagTop" name="description" content="">
    <meta class="metaTagTop" name="keywords" content="">
    <meta class="metaTagTop" name="author" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="cf:funnel_id" content="">
    <meta property="cf:page_id" content="">
    <meta property="cf:funnel_step_id" content="">
    <meta property="cf:user_id" content="">
    <meta property="cf:account_id" content="">
    <meta property="cf:page_code" content="=">
    <meta property="cf:mode_id" content="1">
    <meta property="cf:time_zone" content="">
    <meta property="cf:app_domain" content="">
    <!-- meta tag end -->

    <!-- link start -->
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />
    <!-- link end -->
        <title>Lexmates</title>
  </head>
  <body>
    <header class="sticky-top">
      <div class="header-top ">
        <div class="container d-flex">
          <div class="left "><p class="m-0 p-2"><img src="image/map-marker-alt-solid.svg" alt="" width="10" height="auto">  House No-35, 3rd Floor, Road No-4, Block-F, Kalwalapara, Mirpur-1, Dhaka 1216</p></div>
          <div class="right d-flex " style="margin: auto;"><a class="m-0 p-2" href="tel:18633702427" ><img src="image/phone-alt-solid.svg" alt="" width="12" height="auto"> +8801727145247</a><p class="m-0 p-2"><img src="image/envelope-open-regular.svg" alt="" width="10" height="auto"> parvez.hashem@gmail.com</p></div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="image/logo.png" alt="" width="200px"></a>
    <div class="btn-icon">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="m-0  call" href="tel:18633702427"><img src="image/phone-alt-solid.svg" alt="" width="10" height="auto"> </a>
    </div>      

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html" >ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.html" >SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.html"  >BLOG</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown"  data-bs-toggle="dropdown" aria-expanded="false">
            USEFUL LINKS          </a>
          <ul class="dropdown-menu" >
            <li><a class="nav-link" href="http://www.supremecourt.gov.bd/">Supreme Court</a></li>
            <li><a class="nav-link" href="http://www.judiciary.org.bd/">Judicial Portal Bangladesh</a></li>            
            <li><a class="nav-link" href="http://bdlaws.minlaw.gov.bd/">Laws of Bangladesh</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" >CONTACT US</a>
        </li>
      </ul>
    </div>
   
  </div>
</nav>
    </header>

<section class="contact-form" id="Contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading pb-4">
          <H1>“A passion for justice. The experience for win”</H1>
        </div>
      </div>
      <div class="col-lg-3 col-md-12"><br></div>
      <div class="col-lg-6 col-md-12">
        <form method="post" action="" class="card p-5">
                            
                             <div class="row">
                              <div class="col-md-12 pt-1 pb-4 text-center">
                                <h4>Request Free Consultation</h4>
                              </div>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12  d-flex fl-name mb-3">
                                 
                                    <!-- <label for="name" class="form-label">Name</label><br> -->
                                    <input type="text" class="form-control " name="name" placeholder="Enter Your Name" required=""> 
                                  
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 mail mb-3">
                                 <!-- <label for="email" class="">Email</label> <br> --><input type="email" class="form-control" name="email" placeholder="Enter Your E-mail" required="">
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                 <!-- <label for="number" class="">Phone number<br> </label>--><input type="number" class="form-control" name="number" pattern="[0-9\-]+" placeholder="Enter Your Phone number" minlength="9" required="">
                               </div><br><br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12 number mb-3">
                                <select class="form-control" name="visa">
                <option>Consult For</option>
                <option>CIVIL</option>
                <option>WRIT PETITION</option>
                <option>LAND &amp; REAL ESTATE</option>
                <option>COMMERCIAL</option>
                <option>INCOME TAX, VAT &amp; CUSTOM</option>
                <option>COMPANY MATTER</option>
                <option>BUSINESS</option>
                <option>DOCUMENTATION</option>
                <option>REGISTRATION</option>
                <option>HEBA DEED, WILLS AND WAQF</option>
                <option>OTHERS</option>
              </select>
                                 <br>
                               <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-xs-12">                                 
                                  <button class="btn "  type="submit" value="send">SEND REQUEST</button>
                               </div>
                             </div>
                          </form>
      </div>
      <div class="col-lg-3 col-md-12"><br></div>
    </div>
  </div>
</section>


<section class="service">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="heading pb-5">
          <h1>LEXMATES SERVICES</h1>
        </div>
      </div>
    </div>

      <div class="services-list">
        <div class=" row ">
        <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-1"> 
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>LITIGATION</H5>
          </div>
          </div>
        </div>

      <!-- Modal -->
      <div class="modal fade" id="modal-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-1">LITIGATION</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <P>Lexmates has been a long-standing trusted partner for sophisticated global clients and key players in the market in cross-border litigation and investigations. We offer seamless and integrated services worldwide for cross-border disputes and litigation with extensive experience in individual jurisdictions but also strong understanding of the interplay between different legal systems and regulations. Our qualified and dedicated team of lawyers is focused on resolving high risk domestic and international litigation matters and regulatory investigations. <br><br>
              We are committed to handle disputes with complete efficiency and offer solutions that are practical and commercial. Our team of lawyers is experienced in the full breadth of civil, criminal and commercial litigation and regularly represents the clients before all Judicial & Quasi-Judicial Bodies and legal authorities including:
              <br><br>

              <ul>
                <li>Supreme Court of Bangladesh</li>
                <li>High Court Division</li>
                <li>District Judge and Sessions Judge Court</li>
                <li>National Board of Revenue</li>
                <li>Company Law Appellate Tribunal</li>
                <li>Customs, Excise and Service Tax Appellate Tribunal</li>
                <li>Administrative Tribunal</li>
                <li>Administrative Appellate Tribunal</li>
                <li>Various District Courts along with other judicial and quasi-judicial bodies</li>
                <li>Labor Court of Bangladesh</li>
                <li>Registrar of Joint Stock Of Companies and Firms (RJSC)</li>
                <li> Assistant Commissioner (Land) Office,</li>
                <li>Marine Court of Bangladesh, etc.</li>
              </ul><br>
              <h3 style="font-weight: 500">Corporate and Commercial Litigation:</h3>
              <ul>
                <li>Business Litigation – We handle the full range of corporate and commercial disputes, including banking disputes, breach of contract, bankruptcy and insolvency, insurance claims, post-merger or acquisition dispute, securities litigation, corporate governance litigation, issues of director/officer liability, or shareholder litigation and any other issues arising from corporate transactions. We also assist with contentious regulatory proceedings, investigations and criminal matters.</li><br><br>
                <li>Income Tax Litigation – Lesmates provides advice and guidance at all stages of a potential dispute, from an opinion on a filing position, to advice on responding to enquiries from the Income Tax authority, to negotiation, settlement or, where appropriate, litigation.</li><br><br>
                <li>Financial and White Collar Crime – We assist with all the key areas of potential criminal liability for corporates, including corruption, antitrust, money laundering, fraud, insider trading and market manipulation, export controls, international economic sanctions, and business and human rights.</li><br><br>
                <li>Labor & Employment Disputes – We can assist on all employment related claims in the court including complex and sensitive discrimination claims, unfair or wrongful dismissal claims, unlawful deductions from wages claims, whistleblowing, equal pay and breach of contract.</li><br><br>
                <li>Intellectual Property Litigation – We advise our clients on disputes relating to patents, trademarks, copyrights, trade secrets and other IP rights. We have extensive experience in handling contractual disputes relating to IP across range of sectors including healthcare, technology, telecoms and consumer products.</li><br><br>
                <li>Private Wealth & Asset Management Disputes – We have unparalleled experience in handling claims both domestic and international relating to trusts, foundations and investment funds for HNIs, trustees and financial institutions.</li><br><br>
                <li>Cyber Security & Information Protection – Our global cyber security team can assist you on the full spectrum of cyber products to protect your business from attacks. We also support you with legal proceedings in case of cyber breach.</li><br><br>
              </ul>
              <h3 style="font-weight: 500">Family, Inheritance and Civil Litigation:</h3>
              <ul>
                <li>Divorce & Child Custody – We understand that the breakdown of a relationship is a stressful time, especially if it involves financial settlements or children. Our lawyers have the skills and expertise to guide the clients through these tough times while diligently handling the divorce proceedings (Mutual & Contested) as well as maintenance, child custody and domestic violence matters.</li><br><br>
                <li>Sexual and Physical Abuse Claims – Our lawyers represent children and adults who have been victim of physical, sexual and emotional abuse by their parents, spouse/partner, employers or any other individual abusers.</li><br><br>
                <li>Contested Probate– We have frequently assisted our clients on contentious probate matters both in contesting or defending Wills under various criteria including dispute related to unfair allocation of assets.</li><br><br>
                <li>Trusts, Estates and Fiduciary Litigation: We represent corporate, institutional and individual clients in disputes related to trusts, estates and fiduciary issues. We also handle pre-death disputes, such as issues of capacity, undue influence and financial elder abuse.</li><br><br>
                <li>Property Litigation – We assist with a wide range of challenging and complexities of both commercial and residential disputes and we ensure that the advice given is tailored to the specific needs of the respective client. We cover landlord and tenant disputes, construction disputes, land acquisition, dispute related to ownership of the property, cancellation of sale deeds, partition of property within the family and lease issues.</li><br><br>
                <li>Medical and Professional Negligence – Laws on medical or professional negligence are very strict and complex but our lawyers have been successful in many genuine claims of negligence against various professionals.</li><br><br>
              </ul>


              </P>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list  " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-2">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>CIVIL</H5>
            </div>
          </div>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="modal-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-2">CIVIL</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>Civil law is a legal system originating and intellectualised within the framework of common law, the key feature of which is that its core principles are codified into a referable system which serves as the prime source of law. Civil law, or civilian law, also known as private law, regulates disputes between private persons or corporate entities. There are differences in cases dealing with matters between people and the government, i.e. public law and criminal law. Civil law deals with issues such as title, contracts, property, inheritance and family law. <br><br>
                In the legal world, "The best battle is often the battle never fought." Lexmates also advises clients on how to avoid litigation. Before using a new, possibly innovative, product we can do a patent search for you. Before using a new trademark or service mark we can search to see if anyone else is using a confusingly similar mark. If you are in business or going into business we can tell you the probable result of the signing of a contract or what will happen if you breach a previously signed contract. We are experienced in many other areas. Please do not hesitate to ask about any issue. <br><br>
                If you have a civil matter and are not sure what to do about it we would be happy to sit down with you and discuss the situation. We will not charge you for this initial consultation if you do not retain us. Our aim is to help you obtain the best results at the lowest cost. <br><br>
                On civil matters we have represented clients at all levels of the Bangladesh Courts, including the District Judge Courts, all Tribunals and Supreme Court of Bangladesh. Elsewhere in the world, our international arbitration team has been representing in arbitrations in the wider region, as well as in more distant jurisdictions primarily in civil disputes.
</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-3">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>WRIT PETITION</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-3">WRIT PETITION</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Constitutional interpretations by the Honorable Court have played an important role in settling political problems as well as other issues involving individuals and parties. These interpretations have also restricted or expanded the scope of action of different functionaries of the Government and enabled individuals and groups to enjoy constitutional and legal protection. The Supreme Court of America, in a case held that an unconstitutional act is not a law, it confers no rights, it imposes no duties, it creates no offence and this act is inoperative as it has never been passed. The Superior Courts in Pakistan also support this viewpoint. In all matters, aggrieved person can avail the statutory remedy of Appeal or Revision, which is not sometimes adequate, effective, efficacious, convenient, beneficiary and expeditious. In such situations the aggrieved party can avail the extra ordinary remedy by invoking constitutional jurisdiction of the High Court Division of the Supreme Court of Bangladesh, which is obviously speedy and effective remedy and foster the justice. These conditions occasionally overlap or conflict with each other. <br><br>
                  A writ is an official written directive issued by an organisation with administrative or judicial jurisdiction; in modern sense, this organisation is known as a court. There are many types of writs exist including prerogative writs, summons and warrants but there are many others. <br><br>
                  The writ, in common parlance, is an order issued by a court in the name of an authority requiring the performance of a specific act. <br><br>
                  The Lexmates team has moved numerous Writ petitions in the High Court division of Supreme Courts of Bangladesh on different issues such as Appoint Related Matter in Government Service, Election matters, Land Survey Tribunal Issue, etc.
                  </p>
            </div>
          </div>
        </div>
      </div>

        <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-4"> 
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>LAND & REAL ESTATE</H5>
          </div>
          </div>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="modal-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-4">LAND & REAL ESTATE</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                Lexmates deals with all types of land and real estate related issues all over the Bangladesh. These services are the following- <br><br>
                - Filing suit in District Judge Court, Tribunal and Supreme Court of Bangladesh <br>
                - Filing Revision, Appeal and Applications in District Judge Court, Tribunal and Supreme Court of Bangladesh <br>
                - Providing support for sales permission from National Housing Authority, Rajdhani Unnyan Kortipokkoha (RAJUK) and others Government Authorities
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list  " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-5">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>COMMERCIAL</H5>
          </div>
          </div>
        </div>
        <!-- Modal -->
      <div class="modal fade" id="modal-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-5" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-5">COMMERCIAL</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                On commercial matters we have represented clients at all levels of the Bangladesh Courts, including the District Judge Courts, all Tribunals and Supreme Court of Bangladesh and elsewhere in the world, our international arbitration team has been representing large international contractors, companies and consultants in arbitrations in the wider region, as well as in more distant jurisdictions primarily in and commercial disputes.
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-6">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>INCOME TAX, VAT & CUSTOM</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-6" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-6">INCOME TAX, VAT & CUSTOM</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                Lexmates provides all types of Income Tax services for its clients. It has qualified Lawyers, Consultants and Income Tax practitioners in Bangladesh both working full time or as off counsel to advise on Tax matters. <br>
                Lexmates provides Service in Income Tax matters:-
                 </br></br>
                 - Incorporation of E-TIN <br>
- Filling TAX return for individual Tax Payer <br>
- Filling TAX return for Company, Firm and other Registered body. <br>
- Contesting objections and cases in Tax Appellate Commissioner or Appellate Tribunal <br>
- Incorporation of E-BIN and filling VAT return <br>
-Filling Reference and Writ petitions in the High Court Division regarding Income Tax, VAT or customs matter.
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-7">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>COMPANY MATTER</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-7" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-7">COMPANY MATTER</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                Lexmates provides corporate support for company formation in Bangladesh and Company Secretary services to any private or public limited companies in Bangladesh. It also assist in company registration Bangladesh in RJSC, Schedule-X submission, shares transfer and Allotment, collection of any certified copies from RJSC, due diligence on any company in Bangladesh, liquidation of company, Winding up of companies, etc. We also represent clients in company matter cases in the High Court Division and Appellate Division in cases including rectification of share registrar, Protection of minority shareholder, Condonation for delay in holding AGM, etc. <br><br>

All assistance from company formation to company registration in Bangladesh, Incorporation Tax Identification Number, RJSC returns, Board of Investment approvals, Work permit and VISA for foreign officials and their family members, opening a bank account, obtaining 18 A and 18 B approvals from Bangladesh Bank etc., are provided from Lexmates efficiently and in a timely manner in a reduced cost from any other law firms in Bangladesh. <br><br>

ACCOUNTS PREPARATION, INTERNAL AUDIT AND EXTARNAL AUDIT REPORT PREPARATION <br><br>

Lexmates assists to prepare and keep proper books of Accounts of its client business. Frequently or monthly external audit, Inventory audit, sales audit. Lexmates assists its clients to prepare yearly audit report from a reputed Chartered Accountants firm minding applicable Income Tax and VAT issues.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-8">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>BUSINESS</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-8" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-8">BUSINESS</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                Lexmates assists its client to open a new business in Bangladesh by Bangladeshi and foreigners include <br><br>

-Bureaus of Investment registration <br>
-Name clearance <br>
-Drafting MA&A <br>
-Opening bank account and encashment of Paid up capital <br>
-Incorporation of company <br>
- Incorporation of E-TIN and E-VAT <br>
-Export and import license <br>
-Liaison office permission if applicable <br>
-18A/18B permission from Central Bank <br>
-Chamber membership <br>
-EPZ related services
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-9">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>REGISTRATION</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-9" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-9" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-9">REGISTRATION</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                 Lexlates provide services to its clients to register their properties including sale and buy of land, apartment, flat or any other immovable property. It also provides services of vetting legal documents and via-deeds, mutation and porcha’s. Lexmates also drafting of legal opinion and legal notice and publishing legal opinion and notice in daily Newspaper in favor of clients.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-10">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>SUB-KOBLA, HEBA DEED, WILLS AND WAQF</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-10" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-10" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-10">SUB-KOBLA, HEBA DEED, WILLS AND WAQF</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
Lexmates assist to execute registration of Sub-Kobla deed, Heba Deed, Heba Bel Awaz Deed, wills and Waqfnama deed and appear and conduct any cases arising out of any Wills or Waqf deed or administration of an Waqf estate.
                  
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-11">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>FAMILY MATTER</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-11" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-11" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-11">FAMILY MATTER</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  lexmates advises and represents clients on all aspects of family and matrimonial law, such as divorce, annulments, disputes over maintenance or custody, personal protection orders, and adoption. <br><br>

If you are in urgent need of assistance, for example where there has been violence or abuse committed against a family member, please call or WhatsApp us at lexmates focuses on exploring all possible outcomes for resolving your situation, and we are committed to dealing with cases in a non-confrontational, and constructive manner. Our aim is to find an amicable agreement between all parties, with court proceedings being the last resort. <br><br>

We also regularly advise clients on matters of adoption, guardianship applications, prenuptial and postnuptial agreements. <br><br>

Get in touch for a consultation so we can better understand your situation and give you an idea of the options, process and potential fees involved. <br><br>

AREAS OF SPECIALISATION <br><br>

Marriage-
We assist for marriage registration for Muslim, Hindu, Christian, Buddhist and others religions. We also assist for inter-religion marriage under Special Marriage Act 1872 including multinational citizen. Bangladeshi and Foreigner can register their marriage in accordance with The Special Marriage Act, 1872. <br><br>

Divorce –
Under Bangladesh Law, a divorce is the legal procedure of terminating a marriage. Divorce often involves dealing with matrimonial issues such as the custody of the children, maintenance, and division of assets. <br><br>

Maintenance –
Maintenance is a form of financial assistance. Once divorce procedures have commenced, an application for maintenance can be filed in Court. <br><br>

Deed of Separation –
A deed of separation is a private agreement between husband and wife stating the various terms and conditions of the separation. This document can assist couples in deciding on the most crucial aspects of living apart before dissolving their marriage, such as child custody and asset division, as well as avoiding disputes in court. <br><br>

Prenuptial Agreements –
A prenuptial agreement is an agreement that a couple enters into before getting married and which documents their respective positions in the event of a divorce. A prenuptial agreement may also include specific terms governing the marriage or the couple’s rights and obligations during the marriage in some situations. <br><br>

Custody / Care and Control –
Custody, Care and Control to children form part of the ancillary matters to be decided after an interim judgment of divorce has been granted. Ultimately, the Family Court will have regard to the wishes of the parents, and the wishes of the child, or children. <br><br>

Adoption –
Under the Adoption of Child Act, married couples can adopt a child. Where birth parents are unable or unwilling to care for their children, adoption helps these children find a lifelong family to care for and nurture them. <br><br>

Personal Protection Order –
A Personal Protection Order (“PPO”) is an order restraining someone from using violence against a family member. If the perpetrator breaches the order and harms the victim again, a police report must be made.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-12">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>CRIMINAL CASES</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-12" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-12" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-12">CRIMINAL CASES</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Lexmates conducts criminal cases on behalf of the compliant, the victim and the accused at the trial courts and also in different appellate courts including Sessions Court and High Court Division of the Supreme Court of Bangladesh. Lexmates conducts bail petitions, trial, appeal, revision, miscellaneous petitions regarding criminal matters in any court in Bangladesh.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-13">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>INTELLECTUAL PROPERTY LAW</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-13" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-13" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-13">INTELLECTUAL PROPERTY LAW</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Lexmates, Intellectual Property Rights is regarded as the best, success-driven & result oriented practice area in Bangladesh. Lexmates’s intellectual property rights team has advised numerous domestic and international clients and over a period of time has gained immense valuable experience in intellectual property branches including but not limited to Trademark Laws, Copyright Law, Patent Law, Design Law and Geographical Indications. <br><br>

Lexmates assist its national and international clients with their Intellectual Property related issues including applications and take part in proceedings with or on behalf of them regularly. It experienced at processing- <br>
- IP Litigation <br>
-Trade mark registrations <br>
-Copyright <br>
-Patent <br>
-Domain Names, etc.
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-14">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>IMMIGRATION & EDUCATION ABROAD</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-14" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-14" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-14">IMMIGRATION & EDUCATION ABROAD</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>
                  Lexmates provides all types of immigration and education abroad services to its clients which are as follows: • Visitor Visa/ Tourist Visa <br>
• Business Visa <br>
• Processing / Visa Pending Case Settlement Support <br>
• Special Visa for Green Card Holder Stayed in Bangladesh for More than 1 Year <br>
• Student Visa <br>
• Medical Visa <br>
• Work Visa/Artists & Entertainment Group Visa <br>
• Investment Visa <br>
• Branch Office Formation/Intra-Company Transferee Visa <br>
• Fianc & Fiance Visa <br>
• Family based Visa & Green Card <br>
• Adopted Child Visa & Green Card <br>
• Employment& Investment based Visa & Green Card <br>
• Green Card Renewal & Replacement <br>
• Re-Entry Permit/Advance Parole <br>
• Waiver of Inadmissibility <br>
• Visa Refusal Review/Appeal
                  </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-15">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>DOCUMENTATION AND NOTARIZATION</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-15" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-15" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-15">DOCUMENTATION AND NOTARIZATION</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>Lexmates provide services to its clients to make different legal documents their Notarization and their Notarial certification. Notary services are often required in home and abroad especially by institutions such as Embassies, Banks, Schools, Government or Private organizations, etc., or even an individual person to verify the authenticity in both form and substance of documents being presented or submitted. This includes the verification of the actual and personal execution of the notary by a lawyer to the identified person. Examples of documents commonly notarized are bank statements, copy of land title deed, contracts, power of attorney, deeds of sales, academic documents, etc. <br><br>

Lexmates assists its client to prepare the following documents and their Notarization. <br>
- Affidavit on Child Adoption agreements <br>
- Affidavit on Asses valuation and Financial Support <br>
- Affidavit on Relationship <br>
- Affidavit on witness of birth <br>
- Affidavit on Marriage, Past life Marriage. <br>
- Affidavit on Marital status <br>
- Affidavit on Sponsorship Declaration relating to Visa / Immigration <br>
-Affidavit & Notarization of No impediment to marriage, parent’s consents <br>
-Affidavit & Notarization on Taxable and No Taxable income <br>
-Affidavit & Notarization of Notarize Name change certificates <br>
-Affidavit & Notarization of Name/Date of Birth Change/Rectification <br>
-Administration of oaths and affirmation <br>
-Declaration <br>
-Preparing various type of Acknowledgement <br>
-Statutory Declaration & Notarization <br>
- Preparing of Powers of Attorney, Deed, Contract, Agreements and any legal documents as required. <br>
-Notarize Birth certificates, passports, NID cards, Financial statements, Powers of Attorney, Deed, Contract, Agreements Marriage certificates, divorce decrees, wills, death certificates, inheritance and donation papers, Diplomas and academic transcripts High School/College/University, Driver licenses, Medical statements/records, health cards, immunization records, Criminal records, depositions, police reports, security clearances, court orders and judgments, Employment records, Experience Certificate, Recommendation Letters, Correspondences, Legal contracts, real estate lease and property papers, etc., and issuance of Notarial Certificate in case of applicability.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-16">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>NRB LEGAL SERVICES</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-16" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-16">NRB LEGAL SERVICES</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>Lexmates assists non-resident Bangladeshis, foreign citizens and persons of Bangladesh origin to manage their legal affairs and resolve their legal issues within and outside Bangladesh. <br><br>

With expanding settlement of Non-Residential Bangladeshis (NRBs) in Bangladesh, the issues faced by NRBs in Bangladesh are growing rapidly, the law-related ones being the most prominent amongst others. <br><br>

There are varied legal issues that NRBs face like property dispute, the partition of ancestral property, divorce, child custody & transfer of property, setting up a business in Bangladesh and others. <br><br>

We understand the problems and limitations NRBs could face when handling legal matters in Bangladesh, especially due to dealings in multiple areas of law with the Bangladesh authorities.
 <br><br>
Lexmates’s Expertise in NRB Legal Services
Our NRB Legal Services team has been able to direct clients in the right direction to resolve their legal issues quickly and efficiently without coming to Bangladesh. <br><br>

The goal of Lexmates’s proficient team of experts for NRB matters is to provide solution-oriented NRB legal advice in the most efficient manner by alleviating the hassle and annoyance of visiting the Bangladesh courts time and again. <br><br>

Our Legal Services for NRBs
Some of the services that our NRB clients usually engage us for are as follows: <br><br>

- NRB Property disputes in Bangladesh; <br>
- Property partition <br>
- Family disputes <br>
- Assistance in purchase of property in Bangladesh <br>
- Providing visa assistance to NRBs and their families <br>
- Setting up a business in Bangladesh <br><br>

Lexmates has assisted NRB clients residing in more than 10 jurisdictions and have worked with them to protect their interests in Bangladesh for many years thus positioning itself amongst the best NRB law firms in Bangladesh.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-17">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>DUAL CITIZENSHIP</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-17" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-17">DUAL CITIZENSHIP</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>Non Resident Bangladeshi (Bangladeshi origin by birth) especially in USA, UK, Canada, Australia and Schengen Citizens and their children may apply for a Dual Nationality Certificate. Lexmates assists its clients for necessary processing, forwards the application with supporting documents to the Ministry of Home Affairs in Dhaka for subsequent action. After issuance, the Ministry of Home Affairs sends the certificate(s) for delivery to the applicant(s). Lexmates also arranges to receive the certificate on your behalf from Ministry of Home Affairs if you give us Letter of Authorization or Power of Attorney. We can also inform our clients when the certificates are received from Dhaka. <br><br>

A complete set of application for dual nationality certificate and all other required documents have to be submitted in three complete sets. Incomplete application may result in delay in the processing of the case.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 list " >
          <div class="s-list d-flex" data-bs-toggle="modal" data-bs-target="#modal-18">
            <span class="me-3"><img src="image/law.png" alt=""></span>
          <div class="sr" >
            <H5>CYBER LAW</H5>
          </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modal-18" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-18" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-18">CYBER LAW</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
            <div class="modal-body">
              <p>Information Technology and Cyber Law are a new area of legal jurisprudence in home and abroad. Lexmates is well acquainted with the legal regime in Bangladesh regarding Information Technology and Cyber related law including Digital Security Act 2018, cyber patent, etc. Lexmates successfully conducted some important cases under Information Technology and Communication Act, 2006 and Digital Security Act, 2018.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
      </div>
    <!-- row  -->
    </div>
</section>

<section class="fild" style="background-color: #F8F9FB;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="image/image-03.png" alt="" class="w-100 pb-3">
      </div>
      <div class="col-lg-6">
        <div class="fild-contant mt-0">
          <p class="m-0">Lexmates is a Dhaka based Law Firm to provide you with the most experienced and well-trained lawyers in Bangladesh. Are you dealing with a legal situation and have not found the solution yet? Don’t worry! Lexmates withs footprints spread across the country are capable of satisfying any legal requirement anywhere in the country. Lexmates provides one-stop legal services to corporates in 40 practice areas and each practice area is headed by highly experienced Advocates and legal professional. The Litigation Division manages legal disputes in all kinds of courts and tribunals ranging from the subordinate courts to the Supreme Court of Bangladesh. lexmates is also a melting bowl of experienced legal talents engaged in the fields of civil, criminal, writ, corporate transactions, infrastructure, project finance, intellectual property, , real estate, etc. This unique symbiosis of lawyers experienced in various fields of law, both litigation and non-litigation, makes lexmates a true ‘One Stop’ law firm to resolve all legal needs.</p>    
      </div>
    </div>
  </div>
</section>

<section class="fild-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="fild-contant">
          <span>PARVEZ HASHEM</span> <br><br>
            <div class="heading">
              <h1>FOUNDING MEMBER</h1>
            </div>
          <p>PARVEZ HASHEM is a founder and partner of lexlates. He completed his LL.B. and LL.M. from the department of Law and Justice of Bangladesh University of Business and Technology. He did M.S.S. in Political Science from the University of Dhaka. He practices as an Advocate of the Hon’ble Supreme Court of Bangladesh. He is register members of Bangladesh Supreme Court Bar Association, Dhaka bar Association and Dhaka Taxes Bar Association. He has participated workshop and seminar on human rights and governance issues in United States, United Kingdom and Thailand. He contributes articles on political issues, legal, governance and international affairs to leading newspaper.

</p> <br>
<a href="tel:+8801711943782"  class="btn h-btn mb-5 ">Call: +8801711943782</a>
        </div>
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">
        <img src="image/trip-man.png" alt="" class="w-100" >
      </div>

    </div>
  </div>
</section>

<section class="fild-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="fild-contant">
          <span>KAMRUL ISLAM ARIF</span> <br><br>
            <div class="heading">
              <h1>FOUNDING MEMBER</h1>
            </div>
          <p>KAMRUL ISLAM ARIF is a founder and partner of lexlates. He has completed Masters in Accounting from National University, Bangladesh and is a CA (CC). He completed his LL.B. from the department of Law and Justice of the Bangladesh University of Business and Technology. He has worked in reputed CA firm for more than half a decade. He is a Tax, VAT and Company consultant. He is register members of Dhaka bar Association and Dhaka Taxes Bar As

</p> <br>
<a href="tel:+8801727145247"  class="btn h-btn mb-5 ">Call: +8801727145247</a>
        </div>
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">
        <img src="image/trip-man-2.png" alt="" class="w-100" >
      </div>

    </div>
  </div>
</section>

<section class="why text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 mb-5">
        <div class="heading ">
          <h1>Why Choose Lexmates?</h1>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body" data-number="145">
            <img src="image/graduate-cap.png" alt="" width="50" height="50">
            <h2 class="card-title "><span id="number1">145</span> +</h2>
            <p class="card-text">Happy Clients</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body" data-number="8">
            <img src="image/bank.png" alt="" width="50" height="50">
            <h2 class="card-title "><span id="number2">8</span> +</h2>
            <p class="card-text">Years of Combined Experience</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body">
            <img src="image/globe.png" alt="" width="50" height="50">
            <h2 class="card-title "><span id="number3">350</span> +</h2>
            <p class="card-text">Successful CASES</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-3">
        <div class="card p-4"  >
          <div class="card-body">
            <img src="image/briefcase.png" alt="" width="50" height="50">
            <h2 class="card-title "><span id="number4">350</span> +</h2>
            <p class="card-text">More Helped</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 



<section class="tabs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="nav  mb-3 nav-tabs justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Honest Suggestion</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Highly Experienced</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Personalized Service</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="ex ">
      <div class="ex-img ">
      <img src="image/1.png" alt="" class="w-100" style="padding: 40px;">
    </div>
    <div class="ex-content  ">
      <div class="fild-contant">
            <div class="heading">
              <h1>Honest Suggestion</h1>
            </div>
          <p>Trust is one of the most important factors when you look for an attorney. The attorney must provide you with honest and straightforward answers to your every query. Let our attorneys guide you through your legal needs, such as—last will, living trust, advanced directive, or power of attorney—to help you figure out what's best for your needs.
</p>
        </div>
    </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="ex ">
      <div class="ex-img ">
      <img src="image/2.png" alt="" class="mt-3 w-100" style="padding: 23px;">
    </div>
    <div class="ex-content ">
      <div class="fild-contant ">
            <div class="heading">
              <h1>Highly Experienced</h1>
            </div>
          <p>Our experienced legal staff will be able to provide you with the guidance, insight, and services that are required to ensure a more favorable outcome for proceedings and legal efforts. Our attorneys have 12+ years of experience in this field. To date, we have handled 1000 cases and have 950+ successful cases. From this, it is easily understandable that our experience helped us to find the right solution for our clients.

</p>
        </div>
    </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
    <div class="ex ">
      <div class="ex-img ">
      <img src="image/3.png" alt="" class="mt-3 w-100" style="padding: 23px;">
    </div>
    <div class="ex-content  mt-3">
      <div class="fild-contant ">
            <div class="heading">
              <h1>Personalized Service</h1>
            </div>
          <p>Law changes almost every year and this is why you need lawyers who are up to date with every update. Equipping yourself with personalized legal services and solutions that specifically address your issues, ensures a more favorable outcome. Our trusted network of attorneys will be able to advise you on whatever legal matters might arise.
          </p>
        </div>
    </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</section>


<footer class="pt-5 pb-2 text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <a class="navbar-brand logo" href="index.php">
          <img src="image/footer_logo.png" alt="" width="" height="">
        </a>
        <p class="mt-4 text-justify">
          Lexmates is a Dhaka Based Law Firm which employs a team of excellent and hardworking Advocates, Legal Consultant and Advisers to provide top-notch legal representation and advice to its clients.
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Contact Details</h5>
        <p class="mt-4">House No. 35, 3rd Floor, Road No-4, <br> Block-F, Kalwalapara (Main Road) <br> Mirpur-1, Dhaka 1216, Bangladesh
         <br> <br> 
          Phone: +8801727145247
          <br>
          <a href="mailto:parvez.hashem@gmail.com" >parvez.hashem@gmail.com</a>
          <br><br>
          Saturday to Thursday 9 to 9
        </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Useful Links:</h5>
        <p class="mt-4">
          <a href="Privacy-Policy.html" >Privacy Policy</a> <br>
        <a href="dsl.html">DISCLAIMER</a> <br>
          <a href="http://www.supremecourt.gov.bd/" target="_blank">Supreme Court</a><br>
        <a href="http://www.judiciary.org.bd/" target="_blank">Judicial Portal Bangladesh</a><br>
        <a href="https://nbr.gov.bd/" target="_blank">NBR</a><br>
        <a href="http://bdlaws.minlaw.gov.bd/" target="_blank">Laws of Bangladesh</a><br>
        <a href="#" target="_blank">FAQ</a> <br>
        <a href="#" target="_blank">PRESS</a>
      </p>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="mt-2">Services</h5>
        <p class="mt-4">
          <a href="service.html" class="text-decoration-none">LAND & REAL ESTATE</a><br>
          <a href="service.html" class="text-decoration-none">INCOME TAX, VAT & CUSTOM</a><br>
          <a href="service.html" class="text-decoration-none">CIVIL SERVICE</a><br>
          <a href="service.html" class="text-decoration-none">FAMILY MATTER</a><br>
          <a href="service.html" class="text-decoration-none">CRIMINAL CASES</a>
        </p>
      </div>
      

      <hr>

      <div class="col-lg-12 footer-copy  mt-2 ">
        <div class="col-lg-6 col-md-6 text-left">
          <p class="">
          <img src="image/copyright-svg.png" width="15" height="15" alt="">
          Copyright <a href="index.html">Lexmates</a> 2021. All Right Reserved.
        </p>
        </div>
        <div class="col-lg-6 col-md-6 text-right">
          <p class="social">
          <a href="https://www.facebook.com/Lexmates-110941304607348"><img src="image/fb.png" alt="Facebook" width="20" height="20"></a><!-- 
          <a href="https://www.linkedin.com/mynetwork/"><img src="image/linkedin.png" alt="linkedin" width="20" height="20"></a>
          <a href="https://www.youtube.com/channel/UC2cHbRX0u0QrAFfCvy6LMdg"><img src="image/youtube.png" alt="linkedin" width="20" height="20"></a> -->
        </p>
        </div>
        
      </div>
      
    </div>
  </div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.js" ></script>
    <!-- <script src="js/bootstrap.js"></script -->
    <!--Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        items: 3,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true
              });
            })
          </script>
    <script>
      $.fn.jQuerySimpleCounter = function( options ) {
          var settings = $.extend({
              start:  0,
              end:    100,
              easing: 'swing',
              duration: 400,
              complete: ''
          }, options );

          var thisElement = $(this);

          $({count: settings.start}).animate({count: settings.end}, {
          duration: settings.duration,
          easing: settings.easing,
          step: function() {
            var mathCount = Math.ceil(this.count);
            thisElement.text(mathCount);
          },
          complete: settings.complete
        });
      };


    $('#number1').jQuerySimpleCounter({end: 100,duration: 2500});
    $('#number2').jQuerySimpleCounter({end: 8,duration: 2000});
    $('#number3').jQuerySimpleCounter({end: 100,duration: 2500});
    $('#number4').jQuerySimpleCounter({end: 300,duration: 3000});

    </script>
    <script>
      $('a[href*="#"]').click(function (event) {
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 750);
    }
  }
});
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
