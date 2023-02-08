<?php
   require_once('../lib/helper.php');
   header_seo_part('Hire javaScript Developer');
   ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&family=Spline+Sans:wght@400;600;700&family=Sree+Krushnadevaraya&display=swap" rel="stylesheet">
  <style><?php include("assets/css/head.css");?></style>
  <style><?php include("assets/css/style.css");?></style>
  <link rel="preload" as="video" href="assets/img/homebanner.mp4" type="video/mp4">
  <link rel="preload" as="video" href="assets/img/service1.mp4" type="video/mp4">
  <link rel="preload" as="video" href="assets/img/service2.mp4" type="video/mp4">
  <link rel="preload" as="video" href="assets/img/service3.mp4" type="video/mp4">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
  <?php header_navs(false); ?>
  <!-- Banner section-->
  <section class="maincontainer">
    <div class="sec-1 pos-rel">
      <div class="secbg">
        <div class="container1">
          <div class="d-flex d-wrap align-items-center custompad justify-content-between">
            <div class="bnleft">
              <h1>When Your Interface Does More</h1>
              <p>Users Have to Do Less</p>
              <a href="#forms" class="ctabn">Hire JavaScript Developer</a>
            </div>
            <div class="bnright">
              <div class="videosection">
                <video loop="" preload="true" autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                  <source src="assets/img/homebanner.mp4" type="video/mp4">
                </video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-2 pos-rel">
      <div class="container">
        <h2 class="title text-center">Lively Design and Fast Loading Pages</h2>
        <p class="subtitle text-center">To Keep Your Users Hooked</p>
        <div class="servicebox pos-rel">
          <div class="text-center">
            <span class="servicetitle">Front-end UI Development</span>
              <div class="d-flex align-items-center d-wrap">                
                <div class="content-changet">
                  <span class="kalam spancont" data-aos="fade-up"     data-aos-duration="3000">Create /<br>interactive UIs</span>
                  <img src="assets/img/arrow-l.svg" class="arr" width="" height="" alt="arrow long" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                </div>
                <div class="vdsection">
                  <video loop="" preload="true" autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                    <source src="assets/img/service1.mp4" type="video/mp4">
                  </video>
                  <div class="imglogo">
                    <img src="assets/img/html.jpg" width="" height="" alt="HTML"data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="assets/img/css.jpg" width="" height="" alt="CSS" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="assets/img/js.jpg" width="" height="" alt="js" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  </div>
                </div>
              </div>
              <div class="content-change">
                <span class="kalam spancont" data-aos="fade-up"     data-aos-duration="3000">Improve app/<br>website usability</span>
                <img src="assets/img/arrow-l.svg" class="arr" width="" height="" alt="arrow long" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
              </div>
              <p class="vdsc">Turn complex information into a simple & engaging visual interface.</p>
          </div>
        </div>
        <div class="servicebox pos-rel">
          <div class="text-center">
            <span class="servicetitle">Backend Development</span>
              <div class="d-flex align-items-center d-wrap">
                <div class="content-change1">
                  <img src="assets/img/arrow2.svg" class="arr1" width="" height="" alt="arrow long" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <span class="kalam spancont" data-aos="fade-up"     data-aos-duration="3000"> Design & <br>implement APIs</span>
                </div>
                <div class="vdsection">
                  <video loop="" preload="true" autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                    <source src="assets/img/service2.mp4" type="video/mp4">
                  </video>
                  <div class="imglogo">
                    <img src="assets/img/sql.jpg" width="" height="" alt="Sql" data-aos="fade-right" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="assets/img/mongo.jpg" width="" height="" alt="Mongo" data-aos="fade-right"data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="assets/img/js.jpg" width="" height="" alt="js" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  </div>
                </div>
              </div>
              <div class="content-changet1">
                <img src="assets/img/arrow2.svg" class="arr1" width="" height="" alt="arrow long" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <span class="kalam spancont" data-aos="fade-up"     data-aos-duration="3000"> Create server-side <br>infrastructure</span>
              </div>
              <p class="vdsc">Masterful data management & air-tight infrastructure to keep things always up and running.</p>
          </div>
        </div>
        <div class="servicebox pos-rel">
          <div class="text-center">
            <span class="servicetitle">Fullstack Development</span>
              <div class="d-flex align-items-center">
                <div class="content-changet2">
                  <img src="assets/img/arrow2.svg" class="arr2" width="" height="" alt="arrow long" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <span class="kalam spancont" data-aos="fade-up"     data-aos-duration="3000"> End-to-end <br>development</span>
                </div>
                <div class="vdsection">
                  <video loop="" preload="true" autoplay="" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover">
                    <source src="assets/img/service3.mp4" type="video/mp4">
                  </video>
                <div class="imglogo">
                  <img src="assets/img/sql.jpg" width="" height="" alt="Sql"data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <img src="assets/img/mongo.jpg" width="" height="" alt="Mongo" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                  <img src="assets/img/js.jpg" width="" height="" alt="js"data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                </div>
                </div>
              </div>
              <div class="content-change2">
                <span class="kalam spancont" data-aos="fade-up"     data-aos-duration="3000"> Architecture <br>development</span>
                <img src="assets/img/arrow-l.svg" class="arr2" width="" height="" alt="arrow long" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
              </div>
              <p class="vdsc">End-to-end solution. Solve app logic, server, and database challenges.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-3 pos-rel">
      <div class="container">
        <h2 class="title text-center">Industries we Served</h2>
        <p class="subtitle text-center">15 years of JavaScript Expertise. Served 30+ industries. Made navigation easy for 1000s of users</p>
      </div>
      <div class="container1">
        <div class="space-holder">
          <div class="sticky">
            <div class="horizontal mt48px-lg mt24px-sm">
              <section role="feed" class="cards dflex">
                <div class="item dflex">
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/bank.gif" class="slide-img" width="" height="" alt="bank" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">FinTech</p>
                      <p class="boxcolor"><span class="orgbg">Seamless money transfer</span></p>
                      <p class="boxcolor"><span class="limegreen">Pop-up guides and instructions</span></p>
                      <p class="boxcolor"><span class="lightgray">Offers and daily expense management</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/shopping-cart.gif" class="slide-img" width="" height="" alt="shopping-cart" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">E-commerce</p>
                      <p class="boxcolor"><span class="limegreen">Inventory management</span></p>
                      <p class="boxcolor"><span class="orgbg">Point-of-sales solutions (POS ) tracking</span></p>
                      <p class="boxcolor"><span class="lightgray">Analyze sales</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/heartbeat.gif" class="slide-img" width="" height="" alt="heartbeat" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">Healthcare</p>
                      <p class="boxcolor"><span class="orgbg">Appointment booking</span></p>
                      <p class="boxcolor"><span class="lightgray">Routine tracking</span></p>
                      <p class="boxcolor"><span class="limegreen">Medicines ordering</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/home.gif" class="slide-img" width="" height="" alt="home" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">Real Estate</p>
                      <p class="boxcolor"><span class="limegreen">Fast and simple property list</span></p>
                      <p class="boxcolor"><span class="orgbg">Statistics overview</span></p>
                      <p class="boxcolor"><span class="lightgray">Targeted search filters</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/suitcase.gif" class="slide-img" width="" height="" alt="suitcase" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">Travel</p>
                      <p class="boxcolor"><span class="orgbg">Hotel/ticket booking</span></p>
                      <p class="boxcolor"><span class="limegreen">Tour guide</span></p>
                      <p class="boxcolor"><span class="lightgray">Currency Conversion</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/social-media.gif" class="slide-img" width="" height="" alt="social-media" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">Social Networking</p>
                      <p class="boxcolor"><span class="lightgray">App for messaging and calling</span></p>
                      <p class="boxcolor"><span class="limegreen">Routine tracking</span></p>
                      <p class="boxcolor"><span class="orgbg">Medicines ordering</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/line-chart.gif" class="slide-img" width="" height="" alt="line-chart" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">Business</p>
                      <p class="boxcolor"><span class="limegreen">Marketing and sales</span></p>
                      <p class="boxcolor"><span class="orgbg">Employee management</span></p>
                      <p class="boxcolor"><span class="lightgray">HR portals</span></p>
                    </div>
                  </div>
                </div>
                <div class="item dflex">                  
                  <div class="boxsclide">
                    <div class="boximage">
                      <img src="assets/img/video-camera.gif" class="slide-img" width="" height="" alt="video-camera" >
                    </div>
                    <div class="boxcontent">
                      <p class="boxhead">Entertainment</p>
                      <p class="boxcolor"><span class="lightgray">Entertainment</span></p>
                      <p class="boxcolor"><span class="orgbg">Online entertainment</span></p>
                      <p class="boxcolor"><span class="limegreen">Booking tickets</span></p>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-4 pos-rel">
      <div class="container">
        <h2 class="text-center title">VE's Multilingual JavaScript Experts</h2>
        <p class="text-center subtitle">Reduce Your Time to Market by <span class="pers">20%</span></p>
        <div class="box">
          <div class="slider-nav">
            <div class="slide-btn">
              <div class="d-flex customjust d-wrap">
                <div class="resleft pos-rel">
                  <img src="assets/img/navya.jpg" class="resimg" width="475" height="635" alt="Navya">
                  <img src="assets/img/navyalp.png" class="lpimg" width="475" height="270" alt="">
                  <img src="assets/img/navya-thumb.jpg" class="hideres" width="" height="" alt="">
                </div>
                <div class="resright">
                  <div class="resexp">
                    <div class="text-center">
                      <p class="bluepara exp"><span class="f">07</span></p>
                      <span class="smallpara">Years of Experience</span>
                    </div>
                    <div class="dividerline"></div>
                    <div class="text-center">
                      <p class="bluepara">22</p>
                      <span class="smallpara">Projects</span>
                    </div>
                  </div>
                  <p class="resdsc">I’m a rare 2nd gen JavaScript dev. When I was a kid, my father and I used to make browser games with me as a hero. I fell in with the language which is growing every passing year.</p>
                  <a href="javascript:void(0);" class="resbtn trigger-profile-popup ht_hidden">Hire <span>Navya</span></a>
                </div>
              </div>
            </div>
            <div class="slide-btn">
              <div class="d-flex customjust d-wrap">
                <div class="resleft pos-rel">
                  <img src="assets/img/abhay.jpg" class="resimg" width="475" height="635" alt="abhay">
                  <img src="assets/img/abhaylp.png" class="lpimg" width="475" height="270" alt="">
                  <img src="assets/img/abhay-thumb.jpg" class="hideres" width="" height="" alt="">
                </div>
                <div class="resright">
                  <div class="resexp">
                    <div class="text-center">
                      <p class="bluepara exp"><span class="f">10</span></p>
                      <span class="smallpara">Years of Experience</span>
                    </div>
                    <div class="dividerline"></div>
                    <div class="text-center">
                      <p class="bluepara">31</p>
                      <span class="smallpara">Projects</span>
                    </div>
                  </div>
                  <p class="resdsc">Being a multilingual JavaScript developer with 8 years of experience, I’ve seen many challenges and struggled with them for hours, sometimes days. Over time, I’ve gotten good at both, preventing and solving these challenges.</p>
                  <a href="javascript:void(0);" class="resbtn trigger-profile-popup ht_hidden">Hire <span>Abhay</span></a>
                </div>
              </div>
            </div>
            <div class="slide-btn">
              <div class="d-flex customjust d-wrap">
                <div class="resleft pos-rel">
                  <img src="assets/img/rohan.jpg" class="resimg" width="475" height="635" alt="rohan">
                  <img src="assets/img/rohanlp.png" class="lpimg" width="475" height="270" alt="">
                  <img src="assets/img/rohan-thumb.jpg" class="hideres" width="" height="" alt="">
                </div>
                <div class="resright">
                  <div class="resexp">
                    <div class="text-center">
                      <p class="bluepara exp"><span class="f">08</span></p>
                      <span class="smallpara">Years of Experience</span>
                    </div>
                    <div class="dividerline"></div>
                    <div class="text-center">
                      <p class="bluepara">26</p>
                      <span class="smallpara">Projects</span>
                    </div>
                  </div>
                  <p class="resdsc">I started my JavaScript development journey by creating a virtual keyboard. Now, I help fellow developers with complex JS concepts such as Clouser, IIFE, Hoisting, and so on.</p>
                  <a href="javascript:void(0);" class="resbtn trigger-profile-popup ht_hidden">Hire <span>Rohan</span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-dots-box"></div>
        </div>
      </div>
    </div>
    <div class="sec-5 pos-rel">
      <div class="container">
        <h2 class="text-center title aft">VE Offers “Unbeatable Capability” & Dedication</h2>
        <p class="text-center subtitle">Our Clients Say So</p>
        <div class="d-flex align-items-center myflip">          
          <div class="flip flipfirst">
              <div class="front f-front">
                <div class="d-flex fcontent">
                  <div>
                    <p class="testname">Brian Taylor (SPM)</p>
                    <p class="testdsc">Supply Core, USA</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <div>
                  <img src="assets/img/quote.jpg" class="quote" width="" height="" alt="Quote">
                   <p class="backpara">The best web developers we’ve worked with were from VirtualEmployee.com</p>
                   <div class="d-flex align-items-center">
                     <img src="assets/img/brianthunb.jpg" class="tsthumb" width="" height="" alt="Brian thumb">
                     <div>
                       <p class="tsthumbpara">Brian Taylor (SPM)</p>
                       <p class="tsdsc">Supply Core, USA</p>
                     </div>
                   </div>
                 </div>
              </div>
          </div>
          <div class="flip flipsecond">
              <div class="front s-front">
                <div class="d-flex fcontent">
                  <div>
                    <p class="testname">David J.Berman</p>
                    <p class="testdsc">CEO of SEOBOLD LLC</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <div>
                  <img src="assets/img/quote.jpg" class="quote" width="" height="" alt="Quote">
                   <p class="backpara">We chose VE because it offered us the unbeatable combination of capability and price.</p>
                   <div class="d-flex align-items-center">
                     <img src="assets/img/devid-thumb.jpg" class="tsthumb" width="" height="" alt="Devid thumb">
                     <div>
                       <p class="tsthumbpara">David J.Berman</p>
                       <p class="tsdsc">CEO of SEOBOLD LLC</p>
                     </div>
                   </div>
                 </div>
              </div>
          </div>
          <div class="flip flipthird">
              <div class="front t-front">
                <div class="d-flex fcontent">
                  <div>
                    <p class="testname">James Flynn</p>
                    <p class="testdsc">Primority Ltd, Founder & CTO, Scotland</p>
                  </div>
                </div>
              </div>
              <div class="back">
                <div>
                  <img src="assets/img/quote.jpg" class="quote" width="" height="" alt="Quote">
                   <p class="backpara">The best web developers we’ve worked with were from VirtualEmployee.com</p>
                   <div class="d-flex align-items-center">
                     <img src="assets/img/james.jpg" class="tsthumb" width="" height="" alt="james thumb">
                     <div>
                       <p class="tsthumbpara">James Flynn</p>
                       <p class="tsdsc">Primority Ltd, Founder & CTO, Scotland</p>
                     </div>
                   </div>
                 </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-6 pos-rel" id="forms">
      <div class="container">
        <div class="d-flex align-items-center formflex">
          <div class="formleft">
            <h2 class="title">Start Your Development With <span class="bgdpsn">Zero</span> Investment</h2>
            <ul class="formlist">
              <li>
                <img src="assets/img/calendar.jpg" class="listicon" width="" height="" alt="calendar"> 
                <span>Take our 1-week <br><span>Free Trial</span></span>
              </li>
              <li>
                <img src="assets/img/credit.jpg" class="listicon" width="" height="" alt="credit"> 
                <span><span>No</span> Credit Card  <br>or <span> Payment</span></span>
              </li>
              <li>
                <img src="assets/img/folder.jpg" class="listicon" width="" height="" alt="folder"> 
                <span><span>Keep</span> All the  <br><span>Work</span></span>
              </li>
            </ul>
          </div>
          <div class="formright">
            <div class="formsction">
              <div data-form-block-id="2dc9b2db-2b8e-ec11-b400-000d3af283df" class="form-uuid-7816" data-correlation-establishing="true" data-is-loading="true" data-error-message="An error occurred during your submission.">
                <div id="vecrm-form">
                      <meta type="xrm/designer/setting" name="layout-editable" value="marketing-designer-layout-editable">
                      <meta type="xrm/designer/setting" name="layout-max-width" value="600px" datatype="text" label="Layout max width">
                      <form data-template-id="7ac241e6-5c03-4bf6-9b9b-ea3c200ff4df" data-container="true" style="null">
                         <style>
                            #vecrm-form label {display: inline-block;}
                            #vecrm-form [hidden] {display: none;}
                            #vecrm-form form input, #vecrm-form form select, #vecrm-form  form textarea {padding: 15px;border: 1px solid hsla(184,6%,53%,.6) !important;border-radius: 5px;transition: .15s all ease-in-out;height: 50px !important;text-indent: initial;filter: none !important;
                            }
                            #vecrm-form  form label { color: #455a64; opacity: .8; padding-bottom: 5px; margin-bottom: 5px; letter-spacing: .3px; font-size: 15px; }
                            #vecrm-form  select { -webkit-appearance: none; -moz-appearance: none; appearance: none; background: transparent url(https://www.virtualemployee.com/get-started/img/downarrow.png) no-repeat right 20px center;  }
                            select{-webkit-appearance: none; -moz-appearance: none; appearance: none;}
                            #vecrm-form span[title="Country"] input{ -webkit-appearance: none; -moz-appearance: none; appearance: none; background: transparent url(https://www.virtualemployee.com/get-started/img/downarrow.png) no-repeat right 20px center; }
                            #vecrm-form  form textarea {  height: auto !important;}
                            #vecrm-form  form .lp-form-button { display: block; padding-top: 18px; padding-bottom: 18px; text-transform: none; font-size: 16px; width: 100%; max-width: 425px; height: auto; background: #0396a6; border-radius: 4px; border: none; font-family: Roboto, sans-serif; text-transform: capitalize;text-align:center;margin:0 auto; }
                            #vecrm-form  form .lp-form-button:hover { background: #207462;}
                            form {
                            font-family: Segoe UI;
                            }
                            form .lp-form-fieldInput {
                            box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            -webkit-box-sizing: border-box;
                            }
                            form div.lp-form-field {
                            word-wrap: break-word; word-break: break-word;
                            }
                            form div.lp-radioButtonsContainer {
                            width: 50%;
                            }
                            form span.lp-radioButton input {
                            width: 18px;
                            height: 18px;
                            margin-right: 8px;
                            margin-top: 3px;
                            border-radius: 50%;
                            }
                            form div.marketing-customfield input[type="checkbox"],
                            form div.marketing-field input[type="checkbox"],
                            form div.marketing-subscription-list input {
                            width: 20px;
                            height: 20px;
                            margin-right: 8px;
                            margin-top: 3px;
                            }
                            form span.lp-checkboxListItem,
                            form span.lp-radioButton {
                            /* This rule is needed to style all radio button fields. For product constraints each option is defined as input and label wrapped into a span*/
                            display: block;
                            margin: 2px;
                            }
                            form *[data-layout="true"] {
                            margin: 0 auto;
                            max-width: /* @layout-max-width */
                            600px /* @layout-max-width */
                            ;
                            }
                            form input {
                            border-radius: 3px;
                            border: 1px solid #333333;
                            height: 35px;
                            margin-top: 8px;
                            text-indent: 10px;
                            width: 100%;
                            }
                            form select {
                            border-radius: 3px;
                            border: 1px solid #333333;
                            height: 35px;
                            margin-top: 8px;
                            text-indent: 10px;
                            width: 100%;
                            }
                            form textarea {
                            border-radius: 3px;
                            border: 1px solid #333333;
                            margin-bottom: 8px;
                            margin-top: 8px;
                            height: 120px;
                            overflow: auto;
                            width: 100%;
                            }
                            form label {
                            margin: 0px;
                            font-size:14px;
                            }
                            form button[type="submit"],
                            form div[data-editorblocktype="SubmitButtonBlock"]  button {
                            font-size:18px;
                            border-radius: 3px;
                            height: 40px;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            vertical-align: bottom;
                            color: white;
                            background-color: #2266E3; 
                            border: 1px solid #2266E3;
                            width: 100%;
                            padding: 0;
                            }
                            form button[type="reset"],
                            form div[data-editorblocktype="ResetButtonBlock"]  button {
                            font-size:18px;
                            border-radius: 3px;
                            height: 40px;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            vertical-align: bottom;
                            color: #323130; 
                            border: 1px solid #8A8886;
                            width: 100%;
                            padding: 0;
                            }
                            form button[type="submit"],
                            form button[type="reset"],
                            form div[data-editorblocktype="SubmitButtonBlock"],
                            form div[data-editorblocktype="ResetButtonBlock"] 
                            {
                            margin: 0 auto;
                            }
                            form .columnContainer h2
                            {
                            font-size: 16px;
                            }
                            ::-webkit-input-placeholder,
                            ::-moz-placeholder,
                            ::-ms-input-placeholder
                            ::placeholder
                            {
                            font-size: 16px;
                            }
                            form .columnContainer h1{
                            font-size:26px;
                            }
                            @media only screen and (max-width: 768px) {
                            form .columnContainer {
                            width: 100% !important;
                            }
                            }
                            .selectboxit-options .selectboxit-option .selectboxit-option-anchor {
                            white-space: normal;
                            min-height: 30px;
                            height: auto;
                            }
                         </style>
                         <div data-layout="true" tabindex="0">
                            <div data-section="true" style="padding: 0px;" class="">
                               <div style="display: flex;
                                  width: 100%;
                                  ;flex-wrap: wrap;" class="containerWrapper">
                                  <div style="clear:both;"></div>
                                  <div data-container="true" class="columnContainer" data-container-width="50" style="display: block; min-height: 70px; min-width: 15px; width: calc(50% - 0px); box-sizing: border-box; flex-direction: column; padding: 10px; float: left;  word-wrap: break-word; word-break: break-word; word-wrap: break-word; word-break: break-word;">
                                     <div data-editorblocktype="Field-text">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true"><strong><label class="lp-ellipsis" for="3f746946-34b4-442c-a677-e232cdd2bc40" title="">Name<span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label><input aria-required="true" class="user-fullname" data-requirederrormessage="Please Enter your Full Name" id="3f746946-34b4-442c-a677-e232cdd2bc40" name="3f746946-34b4-442c-a677-e232cdd2bc40" pattern=".*\S+.*" placeholder="Full Name" required="required" style="width: 100%; box-sizing: border-box;" title="" type="text"></strong></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text" class="" style="" hidden="hidden">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><strong><label class="lp-ellipsis" for="5497e655-2da0-ec11-b400-000d3aca3e52" title="">country-code</label></strong><input class="lp-form-fieldInput user-countrycode" id="5497e655-2da0-ec11-b400-000d3aca3e52" name="5497e655-2da0-ec11-b400-000d3aca3e52" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-phone" style="padding-top: 10px;">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true"><strong><label class="lp-ellipsis" for="ac6a065d-364e-40d6-9a19-d9bf1ed4aa3e" title="">Contact Number<span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label><input aria-required="true" class="user-contactnumber" data-requirederrormessage="Please Enter your Contact Number" id="ac6a065d-364e-40d6-9a19-d9bf1ed4aa3e" name="ac6a065d-364e-40d6-9a19-d9bf1ed4aa3e" placeholder="Contact Number" required="required" style="width: 100%; box-sizing: border-box;" title="" type="tel"></strong></div>
                                        </div>
                                     </div>
                                  </div>
                                  &ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;&ZeroWidthSpace;
                                  <div data-container="true" class="columnContainer" data-container-width="50" style="display: block; min-height: 70px; min-width: 15px; width: calc(50% - 0px); box-sizing: border-box; flex-direction: column; padding: 10px; float: left;    word-wrap: break-word; word-break: break-word;   word-wrap: break-word; word-break: break-word;">
                                     <div data-editorblocktype="Field-email" style="text-align: center;">
                                        <div class="marketing-field" style="text-align: center;">
                                           <div class="lp-form-field" data-required-field="true" style="text-align: left;"><strong><label class="lp-ellipsis" for="7f685ebb-7c54-4cff-a1bc-772562d25c38" title="">E-mail Address<span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label></strong><input aria-required="true" class="lp-form-fieldInput user-email" data-requirederrormessage="Please Enter your Email Address" id="7f685ebb-7c54-4cff-a1bc-772562d25c38" name="7f685ebb-7c54-4cff-a1bc-772562d25c38" placeholder="Enter Email Address" required="required" style="width: 100%; box-sizing: border-box;" title="" type="email"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-lookup" style="padding-top: 10px;">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true">
                                              <strong><label class="lp-ellipsis" for="89348cac-086e-ec11-8943-000d3af2e9bb" title="Employment/Project Duration">Project Duration<span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label></strong> 
                                              <select aria-required="true" class="lp-form-fieldInput" id="89348cac-086e-ec11-8943-000d3af2e9bb" name="89348cac-086e-ec11-8943-000d3af2e9bb" required="required" style="width: 100%; box-sizing: border-box;" title="Employment/Project Duration">
                                                 <option value="">Select Duration</option>
                                                 <option value="100000000">Less than 1 Month</option>
                                                 <option value="100000005">1 to 3 Months</option>
                                                 <option value="100000002">3 to 6 Months</option>
                                                 <option value="100000003">6 to 12 Months</option>
                                                 <option value="100000004">More than 1 Year</option>
                                                 <option value="100000006">Not Sure</option>
                                                 <option value="100000001">Looking for Job</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div style="clear:both;"></div>
                               </div>
                            </div>
                            <div data-section="true" style="padding: 0px;" class="emptyContainer">
                               <div style="
                                  display: flex;
                                  width: 100%;
                                  ;flex-wrap: wrap;" class="containerWrapper">
                                  <div style="clear:both;"></div>
                                  <div data-container="true" class="columnContainer" data-container-width="100" style="display: block; min-height: 70px; min-width: 15px; width: calc(100% - 0px); box-sizing: border-box; flex-direction: column; padding: 10px; float: left;   word-wrap: break-word; word-break: break-word;  word-wrap: break-word; word-break: break-word;">
                                     <div data-editorblocktype="Field-text" style="padding-right: 0px; padding-top: 0px;">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true"><strong><label for="ac9ddb60-616f-4f12-b4e2-9202f688ed2f" title="">Website</label><label class="lp-ellipsis" for="ac9ddb60-616f-4f12-b4e2-9202f688ed2f" title=""><span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label><input aria-required="true" class="lp-form-fieldInput" data-requirederrormessage="Please Enter your Company Name" id="ac9ddb60-616f-4f12-b4e2-9202f688ed2f" name="ac9ddb60-616f-4f12-b4e2-9202f688ed2f" pattern=".*\S+.*" placeholder="Website" required="required" style="width: 100%; box-sizing: border-box;" title="" type="text"></strong></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text" class="" style="" hidden="hidden">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="dec13d92-25c2-ec11-983e-000d3af26df8" title="">Form Type</label><input class="lp-form-fieldInput user-formtype" id="dec13d92-25c2-ec11-983e-000d3af26df8" name="dec13d92-25c2-ec11-983e-000d3af26df8" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text" class="" style="" hidden="hidden">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="3ae7db52-43ba-ec11-983f-002248d5e902" title="">IP Address Quality Score</label><input class="lp-form-fieldInput ip-address-score" id="3ae7db52-43ba-ec11-983f-002248d5e902" name="3ae7db52-43ba-ec11-983f-002248d5e902" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text" class="" style="" hidden="hidden">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="d8ee0939-43ba-ec11-983f-002248d5e902" title="">IP Address</label><input class="lp-form-fieldInput ip-address" id="d8ee0939-43ba-ec11-983f-002248d5e902" name="d8ee0939-43ba-ec11-983f-002248d5e902" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text" class="" style="" hidden="hidden">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="aa801419-d98f-ec11-b400-000d3af2c874" title="">Pages Visited</label><input class="lp-form-fieldInput pages-visited" id="aa801419-d98f-ec11-b400-000d3af2c874" name="aa801419-d98f-ec11-b400-000d3af2c874" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text"></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div style="clear:both;"></div>
                               </div>
                            </div>
                            <div data-section="true" style="padding: 10px;" class="emptyContainer">
                               <div style="display: flex;
                                  width: 100%;
                                  ;flex-wrap: wrap;" class="containerWrapper">
                                  <div style="clear:both;"></div>
                                  <div data-container="true" class="columnContainer" data-container-width="100" style="display: block; min-height: 70px; min-width: 20px; width: calc(100% - 0px); box-sizing: border-box; flex-direction: column; padding: 0px; float: left;      word-wrap: break-word; word-break: break-word;     word-wrap: break-word; word-break: break-word;">
                                     <div data-editorblocktype="Field-text">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="7d348cac-086e-ec11-8943-000d3af2e9bb" title="" hidden="hidden">GCLID</label><input class="lp-form-fieldInput gclid-key" id="7d348cac-086e-ec11-8943-000d3af2e9bb" name="7d348cac-086e-ec11-8943-000d3af2e9bb" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text" hidden="hidden"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="79348cac-086e-ec11-8943-000d3af2e9bb" title="" hidden="hidden">Page URL</label><input class="lp-form-fieldInput pageurl-key" id="79348cac-086e-ec11-8943-000d3af2e9bb" name="79348cac-086e-ec11-8943-000d3af2e9bb" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text" hidden="hidden"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-text">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="false"><label class="lp-ellipsis" for="7b348cac-086e-ec11-8943-000d3af2e9bb" title="" hidden="hidden">Keyword</label><input class="lp-form-fieldInput lp-keyword" id="7b348cac-086e-ec11-8943-000d3af2e9bb" name="7b348cac-086e-ec11-8943-000d3af2e9bb" placeholder="" style="width: 100%; box-sizing: border-box;" title="" type="text" hidden="hidden"></div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-dropdown">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true">
                                              <label class="lp-ellipsis" for="81348cac-086e-ec11-8943-000d3af2e9bb" title="" hidden="hidden">Lead Type<span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label>
                                              <select aria-required="true" class="lp-form-fieldInput" id="81348cac-086e-ec11-8943-000d3af2e9bb" name="81348cac-086e-ec11-8943-000d3af2e9bb" required="required" style="width: 100%; box-sizing: border-box;" title="" hidden="hidden">
                                                 <option value=""></option>
                                                 <option selected="selected" value="100000000">In-House</option>
                                                 <option value="100000001">Hiring</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-dropdown">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true">
                                              <label class="lp-ellipsis" for="79df91dc-7fd2-4779-9ebd-2c5c0a652757" title="" hidden="hidden">How did you hear about us?<span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label>
                                              <select aria-required="true" class="lp-form-fieldInput" id="79df91dc-7fd2-4779-9ebd-2c5c0a652757" name="79df91dc-7fd2-4779-9ebd-2c5c0a652757" required="required" style="width: 100%; box-sizing: border-box;" title="" hidden="hidden">
                                                 <option value=""></option>
                                                 <option value="7">Request a Call</option>
                                                 <option value="8">Skype</option>
                                                 <option value="9">Word of Mouth</option>
                                                 <option value="10">Web Forms</option>
                                                 <option value="1">Email</option>
                                                 <option value="2">Phone</option>
                                                 <option value="3">Web Chat</option>
                                                 <option selected="selected" value="4">Get Started</option>
                                                 <option value="5">Contact Us</option>
                                                 <option value="6">Other</option>
                                              </select>
                                           </div>
                                        </div>
                                     </div>
                                     <div data-editorblocktype="Field-textarea">
                                        <div class="marketing-field">
                                           <div class="lp-form-field" data-required-field="true"><strong><label for="05e8ab59-9464-ec11-8f8f-000d3aca0ab8" title="">Work Requirement</label><label class="lp-ellipsis" for="85348cac-086e-ec11-8943-000d3af2e9bb" title=""><span class="lp-required" style="color: rgb(255, 0, 0);">*</span></label><textarea aria-required="true" class="lp-form-fieldInput" cols="20" id="85348cac-086e-ec11-8943-000d3af2e9bb" name="85348cac-086e-ec11-8943-000d3af2e9bb" pattern=".*\S+.*" placeholder="Add Your Requirement" required="required" rows="5" style="width: 100%; box-sizing: border-box;" title="" value=""></textarea></strong></div>
                                        </div>
                                     </div>
                                  </div>
                                  <div style="clear:both;"></div>
                               </div>
                            </div>
                            <div data-section="true" class="emptyContainer">
                               <div style="display: flex;
                                  width: 100%;
                                  ;flex-wrap: wrap;">
                                  <div style="clear:both;"></div>
                                  <div data-container="true" class="columnContainer" data-container-width="100" style="display: block; min-height: 0px; min-width: 0px; width: calc(100% - 0px); box-sizing: border-box; padding: 10px; float: left;        word-wrap: break-word; word-break: break-word;       word-wrap: break-word; word-break: break-word;">
                                     <div data-editorblocktype="SubmitButtonBlock">
                                        <p><button class="lp-form-button lp-form-fieldInput" name="submit" type="submit">Hire JavaScript Developer</button></p>
                                     </div>
                                  </div>
                                  <div style="clear:both;"></div>
                               </div>
                            </div>
                         </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sec-7 pos-rel">
      <div class="container">
        <h2 class="text-center title">It's Not Easy to Engage Users</h2>
        <p class="text-center subtitle">But, You're Here. So, What Does That Say About Us?</p>
        <div class="text-center">
          <a href="#forms" class="ctalast">Hire JavaScript Developer</a>
        </div>
        <div class="scrollsection">
          <div class="flexdiv">
            <div class="d-flex align-items-center d-wrap just mt30">
              <div class="w24">
                <div class="scroll">
                  <img src="assets/img/scrol4.jpg" class="s1" width="1025" height="3885" alt="">
                </div>
              </div>
              <div class="w38">
                <div class="scroll2">                  
                  <img src="assets/img/scrol6.jpg" class="s1" width="1025" height="3885" alt="">
                </div>
              </div>
              <div class="w24">
                <div class="scroll">                  
                  <img src="assets/img/scrol2.jpg" class="s1" width="1025" height="3885" alt="">
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center d-wrap just mt30">              
              <div class="w24">
                <div class="scroll">                  
                  <img src="assets/img/scrol3.jpg" class="s1" width="1025" height="3885" alt="">
                </div>
              </div>
              <div class="w24">
                <div class="scroll">                  
                  <img src="assets/img/scrol1.jpg" class="s1" width="1025" height="3885" alt="">
                </div>
              </div>
              <div class="w38">
                <div class="scroll2">                  
                  <img src="assets/img/scrol5.jpg" class="s1" width="1025" height="3885" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php footer_seo_part(); ?>
  <div class="popup popup-profile">
    <div class="popup-flex dflex justify-center align-items-center">
      <div class="popup-outer position-relative">
        <div class="popup-inner position-relative">
          <div class="popup-header dflex justify-between align-items-center pt48px px48px p32px-xl pb16px-xl">
            <div class="avatar"><img src="assets/img/abhay-thumb.jpg" alt="Avtar" id="pdata-avatar"></div>
            <div class="spacer">
              <div class="text-primary-dark fs16px"><strong>You've chosen</strong></div>
              <div class="dflex align-items-center dblock-sm">
                <div class="text-primary-dark fs24px lh12-sm"><strong id="pdata-name"></strong></div>
                <div class="fs16px ml8px mt4px ml0px-sm mt0px-sm">(with <span id="pdata-experience">08</span> yrs of experience)</div>
              </div>
            </div>
          </div>
          <div class="popup-body p48px p32px-xl">
            <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Hire Software Engineers'); ?>
          </div>
        </div>
      </div>
      <button type="button" class="close-popup position-absolute">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" fill="currentColor"/></svg>
      </button>
    </div>
  </div> 
  <!-- Services Popup -->
  <div class="popup popup-service">
   <div class="popup-flex dflex justify-center align-items-center">
      <div class="popup-outer position-relative">
         <div class="popup-inner">
            <div class="position-relative">
                  <div class="popup-header dflex justify-between align-items-center p48px pb16px-xl pt32px-xl px32px-xl">
                     <div class="spacer">
                        <h2 class="text-primary-dark fs24px text-center">
                           Looking to <span class="tt">Get Started</span>
                        </h2>
                        <div class="fs16px text-center">Send in your requirement to help us help you</div>
                     </div>
                  </div>
                  <div class="popup-body px48px pb48px p32px-xl">
                     <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Hire Software Engineers'); ?>                     
                  </div>
            </div>
         </div>
      </div>
      <button type="button" class="close-popup position-absolute">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z"></path>
            <path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" fill="currentColor"></path>
         </svg>
      </button>
      <!-- <div class="popup-overlay"></div> -->
   </div>
  </div>
  <!-- Services Popup --> 
  <div class="dropshadow"></div>
  <script src="assets/js/min.slick.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <!-- <script src="https://mktdplp102cdn.azureedge.net/public/latest/js/form-loader.js?v=1.80.2009.0"></script> -->
   <script>
    AOS.init();
  </script>
   <script>
      window.onscroll = function () {
          headerScroll();
      };
      var header = document.getElementById("mainheader");
      var sticky = header.offsetTop;
      function headerScroll() {
          if (window.pageYOffset > sticky) {
              header.classList.add("fixed-header");
          } else {
              header.classList.remove("fixed-header");
          }
      }
      window.addEventListener("load", function () {
          var scroll = $(window).scrollTop();
          if (scroll >= 50) {
              $("#mainheader").addClass("fixed-heade");
          }
      });
      // Profile Trigger
      $('.trigger-profile-popup').click(function(){
        $('.popup-profile').addClass('is-active');
        var Name = $(this).find('span').text();
        var exc = $(this).parent().find('.exp .f').text();
        var images  = $(this).parent().parent().find('.hideres').attr('src');
        $('#pdata-name').text(Name);
        $('#pdata-experience').text(exc);                
        $('#pdata-avatar').attr('src', images);
      });
      $('.ht_hidden').click(function(){
        $('html').addClass('over_hide');
      });      
      $('.trigger-service-popup').click(function(){
        $('.popup-service').addClass('is-active');
        var rem = $(this).text();
        $('.tt').text(rem);
      });
      $('.close-popup').click(function(){
        $('html').removeClass('over_hide');
        $('.popup-service, .popup-profile').removeClass('is-active');
      });      
      function toggleDropdown() {
        $("#dropdown").toggle();
        $('.dropdownoverlay').addClass('active');
      }
      $('.dropdownoverlay').click(function() {
        $(this).removeClass('active');
        $(".dropdown-menu").toggle();
      });
      var $root = $('html, body');
      $('a[href^="#"]').click(function () {
        $root.animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 900);
          return false;
      });
   </script>
   <script>
      $(document).ready(function() {          
          $('.resources').slick({
            slidesToShow:1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            swipe: true,
            draggable: false,
            infinite: true,
            autoplay:false,   
            fade:true,           
          });
          $('.services').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            swipe: true,
            draggable: false,
            infinite: true,
            autoplay:false,  
            fade:true,         
          });
          $('.testimonial').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            swipe: true,
            draggable: false,
            infinite: true,
            autoplay:false,  
            fade:true,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll:1,
                  infinite: true,
                  dots: true,
                  arrows: false
                }
              },
            ]         
          });
      });
      jQuery(function($){
        if ($(window).width() > 992){
            const spaceHolder = document.querySelector('.space-holder');
                const horizontal = document.querySelector('.horizontal');
                spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;
          
                function calcDynamicHeight(ref) {
                const vw = window.innerWidth;
                const vh = window.innerHeight;
                const objectWidth = ref.scrollWidth;
                return objectWidth - vw + vh/3 + vw/2; 
                }
          
                window.addEventListener('scroll', () => {
                const sticky = document.querySelector('.sticky');
                horizontal.style.transform = `translateX(-${sticky.offsetTop}px)`;        
                });
          
                window.addEventListener('resize', () => {
                spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;        
                }); 
          } 
      });
      // Slick slider with progress bar
      
        $('.slider-nav').slick({
          pauseOnHover: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          autoplay: true,
          autoplaySpeed:18000,
          focusOnSelect: true,
          dots: true,
          appendDots: $('.slider-dots-box'),
          dotsClass: 'slider-dots',
          fade:true
        });

        // On before slide change
        $('.slider-nav').on('beforeChange', function(event, slick, currentSlide, nextSlide){
          $('.slider-dots-box button').html('');
        }).trigger('beforeChange');

        // On before slide change
        $('.slider-nav').on('afterChange', function(event, slick, currentSlide){
          $('.slider-dots-box button').html('');
           $('.slider-dots-box .slick-active button')
             .html(`<svg class="progress-svg" width="115" height="115">
            <g transform="translate(57.50,57.50)">
              <circle class="circle-go" r="57.50" cx="0" cy="0"></circle>
            </g>
            </svg>`);
        }).trigger('afterChange');

   </script>
</body>
</html>