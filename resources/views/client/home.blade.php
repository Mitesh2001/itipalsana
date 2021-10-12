@extends('client-layouts.master')

@section('title')
Home
@endsection


@section('css')
@endsection

@section('content')


<div class="container-fluid">
    <div class="row">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
        style="background-color: #ffffff;">
        <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="">
            <ul>
                <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
                   <img src="{{asset('client-assets/images/Welcomeimage/thumb/28001.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
               </li>
               <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
                   <img src="{{asset('client-assets/images/Welcomeimage/thumb/75802.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
               </li>
               <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
                   <img src="{{asset('client-assets/images/Welcomeimage/thumb/43903.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
               </li>
               <li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
                   <img src="{{asset('client-assets/images/Welcomeimage/thumb/25104.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
               </li>
           </ul>
       </div>
   </div>
</div>
<script type="text/javascript">
    var tpj = jQuery;
    var revapi1;
    tpj(document).ready(function () {
        if (tpj.fn.cssOriginal !== undefined)
            tpj.fn.css = tpj.fn.cssOriginal;
        if (tpj('#rev_slider_1_1').revolution === undefined)
            revslider_showDoubleJqueryError('#rev_slider_1_1');
        else
            revapi1 = tpj('#rev_slider_1_1').show().revolution(
            {
                delay: 9000,
                startwidth: 1170,
                startheight: 390,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 4,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "round",
                touchenabled: "on",
                onHoverStop: "on",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 2,
                fullWidth: "on",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0
            });
            }); //ready
        </script>
<div class="clearfix">
    </div>
    <div class="container-fluid">
        <div class="row" style="background-color: #efefee;">
            <div class="container">
                <div class="col-md-2 col-sm-3 hidden-xs news">
                    NEWS & UPDATES
                </div>
                <div class="col-md-9 col-sm-7 col-xs-12 newstext">
                    <div class="marquee">
                    </div>
                    
                    
                   
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-sm visible-xs">
                </div>
                <div class="col-md-1 col-sm-2 news text-center" style="padding-left: 0; padding-right: 0;">
                    <a href="news_index.html" style="color: white;">All News </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="clearfix">
    </div>
    
    <div id="displayrow">
        <div class="sim-row ui-draggable" data-id="he-5">
            <div class="rightbg">
                <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg21">
                    <h4>
                    Change Background Color</h4>
                </div>
            </div>
            <div class="container-fluid changebg21" id="he-mydesign5new" style="background-color: #ffffff;">
                <div class="row">
                    <div class="container" id="he-mydesign5">
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
            <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="con-10" style="position: relative; left: 0px; top: 0px;">
                <div class="rightbg">
                    <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg22">
                        <h4>
                        Change Background Color</h4>
                    </div>
                </div>
                <div class="container-fluid changebg22" id="con-mydesign10" style="background-color: #ffffff;">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center" id="con-mydesign10-div1">
                                    <a href="iti-.html" class="sim-row-edit" data-type="link" id="con-mydesign10-link1changelink22" style="background-color: rgb(204, 65, 37); color: rgb(255, 255, 255);">ITI તરસાલી વડોદરાના ભૂતપૂર્વ તાલીમાર્થીઓની વિગત માટેનું ફોર્મ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="con-10" style="position: relative; left: 0px; top: 0px;">
                    <div class="rightbg">
                        <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg23">
                            <h4>
                            Change Background Color</h4>
                        </div>
                    </div>
                    <div class="container-fluid changebg23" id="con-mydesign10" style="background-color: #ffffff;">
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 text-center" id="con-mydesign10-div1">
                                        <a href="assets/pdf/891BANKABLE%20YOJANA%20FORM%20PAGE%20-1-merged.pdf" class="sim-row-edit" data-type="link" id="con-mydesign10-link1changelink23" style="color: rgb(255, 255, 255); background-color: rgb(67, 67, 67);">Download Bankable Loan Form</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                        <div class="rightbg">
                            <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg2">
                                <h4>
                                Change Background Color</h4>
                            </div>
                        </div>
                        <div class="container-fluid changebg2" id="he-mydesign5new" style="background-color: #ffffff;">
                            <div class="row">
                                <div class="container" id="he-mydesign5">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="itiele-9">
                            <div class="rightbg">
                                <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg1">
                                    <h4>
                                    Change Background Color</h4>
                                </div>
                            </div>
                            <div class="container-fluid changebg1" id="itiele-mydesign9" style="background-color: #ffffff;">
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="buildingdiv">
                                                    <div class="sim-row-edit" data-type="image">
                                                       <img src="{{asset('client-assets/images/UploadedImage/RealImage/2400225.jpg')}}" alt="ITI Building" class="img-responsive">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-md-6 text-left">
                                            <h3 class="sim-row-edit" data-type="title" id="itiele-mydesign9-title1changetitle1" style="">Welcome To Govt ITI Tarsali,Gujarat</h3>
                                            <div class="sim-row-edit" data-type="editor"><p>The Directorate General Of Employment &amp; Training, New Delhi (D.g.e.&amp;t.) Of The Ministry Of Labour Is To Provide The Skilled Man-power With Vocational Training For The Various Industries &amp; Service Sectors. It Is Being Conducted At Different I.t.i.s Including Industrial Training Institute, Tarsali.In Today's Era Industrialization Is Developing Statewide And Nation.<br>Industrial Training Institute &amp; Skill Certification Center ,Tarsali is a Technical Knowledge Center and Our Aim is To Provide Job Oriented &amp; Knowledge Based Technical Skill That Can Give The Trainee A Unique Identity Creating An Edge Above Others. We Are Dedicated Towards Imparting Globally Competitive Skill &amp; Soft Skill Training To Make Them Achieve The Best In Their Life.</p></div>
                                            <div class="notshow">
                                                <a href="#" class="sim-row-edit" data-type="link" id="itiele-mydesign9-link1changelink1" style="">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                            <div class="rightbg">
                                <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg3">
                                    <h4>
                                    Change Background Color</h4>
                                </div>
                            </div>
                            <div class="container-fluid changebg3" id="he-mydesign5new" style="background-color: #ffffff;">
                                <div class="row">
                                    <div class="container" id="he-mydesign5">
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="itiele-5" style="position: relative; left: 0px; top: 0px;">
                                <div class="rightbg">
                                    <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg24">
                                        <h4>
                                        Change Background Color</h4>
                                    </div>
                                </div>
                                <div class="container-fluid changebg24" id="itiele-mydesign5" style="background-color: rgb(28, 69, 135);">
                                    <div class="row">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3 righttext">
                                                    <h2 class="name sim-row-edit text-center" data-type="title" id="itiele-mydesign5-title1changetitle24" style="color: rgb(255, 255, 255);">Principal Desk</h2>
                                                    <div class="clearfix">
                                                    </div>
                                                    <h3 class="pridesi priname sim-row-edit" data-type="title" id="itiele-mydesign5-title2changetitle24" style="color: rgb(255, 255, 255);">SMT.N.K.SHAH (CLASS-2)</h3>
                                                    <div class="clearfix">
                                                    </div>
                                                    <h3 class="pridesi sim-row-edit" data-type="title" id="itiele-mydesign5-title3changetitle24" style="color: rgb(255, 255, 255);">PRINCIPAL</h3>
                                                </div>
                                                <div class="col-sm-4 col-sm-push-5 col-md-push-5 col-lg-push-5">
                                                    <div class="text-center">
                                                        <div class="image sim-row-edit" data-type="image">
                                                            <img src="assets/images/UploadedImage/RealImage/826news-image.jpg" class="img-responsive" alt="ITI Principal">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5 col-sm-pull-4 col-md-pull-4 col-lg-pull-4">
                                                    <div class="sim-row-edit" data-type="editor"><p>
                                                        <font color="#FFFFFF">It gives me great pleasure to convey this message on the official launch of a Website for this Institute. The website opens up a new window of opportunity for our trainees, both present and future, and the general public to access key information on the different aspects of this Institute, its Training Schemes and related Activities. It would help in the better understanding of our Institute and should put us on the information super highway of the World, while dissipating important data including PPP Scheme-related Disclosures through use of such Information Technologies.</font></p></div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <div class="text-left notshow">
                                                            <a href="#" class="sim-row-edit links" data-type="link" id="itiele-mydesign5-link1changelink24" style="">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                                        <div class="rightbg">
                                            <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg20">
                                                <h4>
                                                Change Background Color</h4>
                                            </div>
                                        </div>
                                        <div class="container-fluid changebg20" id="he-mydesign5new" style="background-color: #ffffff;">
                                            <div class="row">
                                                <div class="container" id="he-mydesign5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                        <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-10" style="position: relative; left: 0px; top: 0px;">
                                            <div class="rightbg">
                                                <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg9">
                                                    <h4>
                                                    Change Background Color</h4>
                                                </div>
                                            </div>
                                            <div class="container-fluid changebg9" id="he-mydesign10" style="background-color: #ffffff;">
                                                <div class="row">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="titlebrdr">
                                                                    <div class="titlediv">
                                                                        <h3 class="text-center sim-row-edit" data-type="title" id="he-mydesign10-title1changetitle9" style="color: rgb(0, 0, 0);">Institute Avilable Trades</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                            <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="itiele-11" style="position: relative; left: 0px; top: 0px;">
                                                <div class="rightbg">
                                                    <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg10">
                                                        <h4>
                                                        Change Background Color</h4>
                                                    </div>
                                                </div>
                                                <div class="container-fluid changebg10" id="itiele-mydesign11" style="background-color: #ffffff;">
                                                    <div class="row">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="tradediv">
                                                                        <div>
                                                                            <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-tread1changelink10" style="background-color: rgb(204, 65, 37); font-weight: bold; letter-spacing: 1px; color: rgb(255, 255, 255);">LABORATORY ASSISTANT</a>
                                                                        </div>
                                                                        <div class="clearfix">
                                                                        </div>
                                                                        <div class="brdr">
                                                                            <div class="image sim-row-edit" data-type="image">
                                                                                <img src="assets/images/UploadedImage/RealImage/410025.jpg" alt="ITI Principal" class="img-responsive">
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix">
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-ncvt1changelink10" style="color: rgb(255, 255, 255); background-color: rgb(3, 19, 34);">NCVT Affiliated</a>
                                                                        </div>
                                                                        <div class="clearfix">
                                                                        </div>
                                                                        <div class="infodiv">
                                                                            <table>
                                                                                <tbody><tr>
                                                                                    <td>
                                                                                        <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst11changetitle10" style="color: #333333;">
                                                                                        Seats : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats11changetitle10" style="">96</span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst12changetitle10" style="color: #333333;">
                                                                                        Eligibility : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats12changetitle10" style="color: #333333;">10 Pass</span>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst13changetitle10" style="color: #333333;">
                                                                                        Batches : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats13changetitle10" style="">3</span>
                                                                                    </td>
                                                                                    <td>
                                                                                        <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst14changetitle10" style="color: #333333;">
                                                                                        Duration : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats14changetitle10" style="color: #333333;">1 Year</span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody></table>
                                                                            <div class="clearfix">
                                                                            </div>
                                                                            <div class="benifitdiv">
                                                                                <div class="sim-row-edit" data-type="editor">
                                                                                    <div style="display: block; font-size: 16px; font-weight: 600; line-height: 18px;
                                                                                    padding-bottom: 4px;">
                                                                                    Benefits :
                                                                                </div>
                                                                                <p style="font-size: 14px; line-height: 20px;">લેબ ટેકનીશિયન ટ્રેડ પછી તાલીમાર્થી લેબ આસીસ્ટન્ટ ની જોબ મેળવી શકે છે.<br></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-view1changelink10" style="color: #ffffff; background-color: #575757;">View Syllabus</a>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-avl1changelink10" style="color: #ffffff; background-color: #6b6b6b;">Available Equipment &amp; Machinery</a>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-super1changelink10" style="color: #ffffff; background-color: #7e7e7e;">Trade Supervisor</a>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-gallery1changelink10" style="color: #ffffff; background-color: #939393;">Trade Gallery</a>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="tradediv">
                                                                    <div>
                                                                        <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-tread2changelink10" style="color: rgb(255, 255, 255); background-color: rgb(204, 65, 37); font-weight: bold; letter-spacing: 1px;">ELECTRONICS MECHANIC (GIRLS)</a>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div class="brdr">
                                                                        <div class="image sim-row-edit" data-type="image">
                                                                            <img src="assets/images/UploadedImage/RealImage/14402.jpg" alt="ITI Principal" class="img-responsive">
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-ncvt2changelink10" style="color: rgb(255, 255, 255); background-color: rgb(3, 19, 34);">NCVT Affiliated</a>
                                                                    </div>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div class="infodiv">
                                                                        <table>
                                                                            <tbody><tr>
                                                                                <td>
                                                                                    <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst21changetitle10" style="color: #333333;">
                                                                                    Seats : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats21changetitle10" style="">48</span>
                                                                                </td>
                                                                                <td>
                                                                                    <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst22changetitle10" style="color: #333333;">
                                                                                    Eligibility : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats22changetitle10" style="color: #333333;">10 Pass</span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst23changetitle10" style="color: #333333;">
                                                                                    Batches : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats23changetitle10" style="color: #333333;">4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst24changetitle10" style="color: #333333;">
                                                                                    Duration : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats24changetitle10" style="color: #333333;">1 Year</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                        <div class="clearfix">
                                                                        </div>
                                                                        <div class="benifitdiv">
                                                                            <div class="sim-row-edit" data-type="editor">
                                                                                <div style="display: block; font-size: 16px; font-weight: 600; line-height: 18px;
                                                                                padding-bottom: 4px;">
                                                                                Benefits :
                                                                            </div>
                                                                            <p style="font-size: 14px; line-height: 20px;">આ ટ્રેડ પછી તાલીમાર્થી ને ઇલેક્ટ્રિકલ વિભાગ માં સરકારી અથવા કંપની માં જોબ અને પોતાનો બિઝનેશ કરી શકે છે.<br></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-view2changelink10" style="color: #ffffff; background-color: #575757;">View Syllabus</a>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-avl2changelink10" style="color: #ffffff; background-color: #6b6b6b;">Available Equipment &amp; Machinery</a>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-super2changelink10" style="color: #ffffff; background-color: #7e7e7e;">Trade Supervisor</a>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-gallery2changelink10" style="color: #ffffff; background-color: #939393;">Trade Gallery</a>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="tradediv">
                                                                <div>
                                                                    <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-tread3changelink10" style="font-weight: bold; letter-spacing: 1px; color: rgb(255, 255, 255); background-color: rgb(204, 65, 37);">WELDER</a>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div class="brdr">
                                                                    <div class="image sim-row-edit" data-type="image">
                                                                        <img src="assets/images/UploadedImage/RealImage/86303%20IMAGE.jpg" alt="ITI Principal" class="img-responsive">
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div>
                                                                    <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-ncvt3changelink10" style="color: rgb(255, 255, 255); background-color: rgb(3, 19, 34);">NCVT Affiliated</a>
                                                                </div>
                                                                <div class="clearfix">
                                                                </div>
                                                                <div class="infodiv">
                                                                    <table>
                                                                        <tbody><tr>
                                                                            <td>
                                                                                <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst31changetitle10" style="color: #333333;">
                                                                                Seats : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats31changetitle10" style="">144</span>
                                                                            </td>
                                                                            <td>
                                                                                <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst32changetitle10" style="color: #333333;">
                                                                                Eligibility : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats32changetitle10" style="color: #333333;">10 Pass</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst33changetitle10" style="color: #333333;">
                                                                                Batches : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats33changetitle10" style="">5</span>
                                                                            </td>
                                                                            <td>
                                                                                <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst34changetitle10" style="color: #333333;">
                                                                                Duration : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats34changetitle10" style="color: #333333;">1 Year</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                    <div class="clearfix">
                                                                    </div>
                                                                    <div class="benifitdiv">
                                                                        <div class="sim-row-edit" data-type="editor">
                                                                            <div style="display: block; font-size: 16px; font-weight: 600; line-height: 18px;
                                                                            padding-bottom: 4px;">
                                                                            Benefits :
                                                                        </div>
                                                                        <p style="font-size: 14px; line-height: 20px;">આ ટ્રેડ પછી તાલીમાર્થી ને સરકારી અને કંપની માં જોબ મેળવી શકે છે.<br></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix">
                                                            </div>
                                                            <div>
                                                                <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-view3changelink10" style="color: #ffffff; background-color: #575757;">View Syllabus</a>
                                                            </div>
                                                            <div class="clearfix">
                                                            </div>
                                                            <div>
                                                                <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-avl3changelink10" style="color: #ffffff; background-color: #6b6b6b;">Available Equipment &amp; Machinery</a>
                                                            </div>
                                                            <div class="clearfix">
                                                            </div>
                                                            <div>
                                                                <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-super3changelink10" style="color: #ffffff; background-color: #7e7e7e;">Trade Supervisor</a>
                                                            </div>
                                                            <div class="clearfix">
                                                            </div>
                                                            <div>
                                                                <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-gallery3changelink10" style="color: #ffffff; background-color: #939393;">Trade Gallery</a>
                                                            </div>
                                                            <div class="clearfix">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                                        <div class="rightbg">
                                            <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg11">
                                                <h4>
                                                Change Background Color</h4>
                                            </div>
                                        </div>
                                        <div class="container-fluid changebg11" id="he-mydesign5new" style="background-color: #ffffff;">
                                            <div class="row">
                                                <div class="container" id="he-mydesign5">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                        <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="mele-10" style="position: relative; left: 0px; top: 0px;">
                                            <div class="rightbg">
                                                <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg12">
                                                    <h4>
                                                    Change Background Color</h4>
                                                </div>
                                            </div>
                                            <div class="container-fluid changebg12" id="mele-mydesign10" style="background-color: rgb(204, 65, 37);">
                                                <div class="row">
                                                    <div class="container hdcolor changebg13" id="mele-mydesign10div1" style="background-color: rgb(204, 65, 37);">
                                                        <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg13">
                                                            <h4>
                                                            Change Background Color</h4>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 text-center">
                                                                <h2 class="title sim-row-edit" data-type="title" id="mele-mydesign10-title1changetitle13" style="color: rgb(255, 255, 255);">Please Submit your complain regarding to ITI Grievance Redressal Mechanism!</h2>
                                                                <div class="clearfix">
                                                                </div>
                                                                <span class="title sim-row-edit" data-type="text" id="mele-mydesign10-text1changetext13" style="color: rgb(255, 255, 255);">Submit Your Online Complain Regarding ITI.</span>
                                                                <div class="clearfix">
                                                                </div>
                                                                <a href="#" class="link sim-row-edit" data-type="linkborder" id="mele-mydesign10-link1" style="color: rgb(255, 255, 255); background-color: rgb(252, 177, 0); border-color: rgb(255, 255, 255); border-width: 0px; border-radius: 0px; font-size: 16px;">Submit Complain</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                                                <div class="rightbg">
                                                    <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg14">
                                                        <h4>
                                                        Change Background Color</h4>
                                                    </div>
                                                </div>
                                                <div class="container-fluid changebg14" id="he-mydesign5new" style="background-color: #ffffff;">
                                                    <div class="row">
                                                        <div class="container" id="he-mydesign5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                                <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-10" style="position: relative; left: 0px; top: 0px;">
                                                    <div class="rightbg">
                                                        <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg15">
                                                            <h4>
                                                            Change Background Color</h4>
                                                        </div>
                                                    </div>
                                                    <div class="container-fluid changebg15" id="he-mydesign10" style="background-color: #ffffff;">
                                                        <div class="row">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="titlebrdr">
                                                                            <div class="titlediv">
                                                                                <h3 class="text-center sim-row-edit" data-type="title" id="he-mydesign10-title1changetitle15" style="color: rgb(0, 0, 0);">Photogallery</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                    <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                                                        <div class="rightbg">
                                                            <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg16">
                                                                <h4>
                                                                Change Background Color</h4>
                                                            </div>
                                                        </div>
                                                        <div class="container-fluid changebg16" id="he-mydesign5new" style="background-color: #ffffff;">
                                                            <div class="row">
                                                                <div class="container" id="he-mydesign5">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix">
                                                        </div>
                                                        <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="con-17" style="position: relative; left: 0px; top: 0px;">
                                                            <div class="rightbg">
                                                                <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg17">
                                                                    <h4>
                                                                    Change Background Color</h4>
                                                                </div>
                                                            </div>
                                                            <div class="container-fluid changebg17" id="con-mydesign17" style="background-color: #ffffff;">
                                                                <div class="row">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 col-xs-12">
                                                                                <div class="text-center">
                                                                                    <div class="image sim-row-edit" data-type="image">
                                                                                       <img src="assets/images/Gallery/Crop/504015.jpg" alt="" class="img-responsive">
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                           <div class="col-sm-4 col-xs-12">
                                                                            <div class="text-center">
                                                                                <div class="image sim-row-edit" data-type="image">
                                                                                   <img src="assets/images/Gallery/Crop/738IMG-20181206-WA0084.jpg" alt="" class="img-responsive">
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="col-sm-4 col-xs-12">
                                                                        <div class="text-center">
                                                                            <div class="image sim-row-edit" data-type="image">
                                                                               <img src="assets/images/Gallery/Crop/504015.jpg" alt="" class="img-responsive">
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div><div class="sim-row ui-draggable" data-id="he-5" style="position: relative; left: 0px; top: 0px;">
                                                    <div class="rightbg">
                                                        <div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg18">
                                                            <h4>
                                                            Change Background Color</h4>
                                                        </div>
                                                    </div>
                                                    <div class="container-fluid changebg18" id="he-mydesign5new" style="background-color: #ffffff;">
                                                        <div class="row">
                                                            <div class="container" id="he-mydesign5">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix">
                                                    </div>
                                                    <div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div><div class="sim-row-delete"><i class="fa fa-times"></i></div></div>

                                                </div>
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $("#flexiselDemo2").flexisel({
                                                            visibleItems: 1,
                                                            animationSpeed: 1000,
                                                            autoPlay: true,
                                                            autoPlaySpeed: 10000,
                                                            pauseOnHover: true,
                                                            enableResponsiveBreakpoints: true,
                                                            responsiveBreakpoints: {
                                                                portrait: {
                                                                    changePoint: 480,
                                                                    visibleItems: 1
                                                                },
                                                                landscape: {
                                                                    changePoint: 640,
                                                                    visibleItems: 1
                                                                },
                                                                tablet: {
                                                                    changePoint: 768,
                                                                    visibleItems: 1
                                                                }
                                                            }
                                                        });
                                                    });
                                                </script>
    
    
@endsection


@section('script')
<script src="{{asset('client-assets/Theme/Theme4/assets/js/marquee.min.js')}}" type="text/javascript"></script>
        
<script type="text/javascript">

        </script>
@endsection

