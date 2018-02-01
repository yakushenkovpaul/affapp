@extends('layouts.frontend.front-master')

@section('front-content')

    <div class="main-wrapper">
    @include('layouts.frontend.front-top')

        <section class="clearfix pageTitleSection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="pageTitle">
                            <h2>Freunde einladen</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="clearfix termsInfoSection">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="list-unstyled termsList">
                            <li>
                                <p>To advertise your business please ensure that you read and abide by the following terms and conditions.</p>
                            </li>
                            <li>
                                <h3>Fair use of site</h3>
                                <p>We are not responsible for any damages caused by the use of this website, or by posting business listings here. Please use our site at your own discretion and exercise good judgement as well as common sense when advertising business here.</p>
                            </li>
                            <li>
                                <h3>Business deletion</h3>
                                <p>We reserve the right to remove any business listings if we feel that they're infringing on any laws or if they contain objectionable material such as adult content (including images, vulgar language, content or links). In such cases, the business poster will receive a full refund for the listing.</p>
                            </li>
                            <li>
                                <h3>Security and privacy</h3>
                                <p>We make every possible attempt to keep your personal information safe, using the latest technology in Internet security. However, you should be aware that our site, as well as any other site, can potentially be a target for hackers. Please do not post any information on the site that is sensitive or that you would not want disclosed in case of an unlikely security breach. We use cookies to store information locally for advanced features of the site's operation, such as favorites, notes and alerts. Your personal details are not shared, rented or sold to any external companies or advertisers under any circumstances. Your credit card details and Paypal account details are only known to Paypal. You may review Paypal's agreements and policies for further information about how they safeguard your information. For security information, please visit: Paypal's security center .  For more information, please view Paypal's current <a href="#">privacy policy</a>.</p>
                            </li>
                            <li>
                                <h3>Governing Law</h3>
                                <p>These Terms shall be governed and construed in accordance with the laws of Ontario, Canada, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
                            </li>
                            <li>
                                <h3>Contact Us</h3>
                                <p>f you have any questions, concerns, or suggestions regarding this terms, please <a href="contact-us.html">contact us</a>.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        @include('layouts.frontend.front-bottom')
    </div>

@stop